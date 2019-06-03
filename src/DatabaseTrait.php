<?php
/**
 * Created by PhpStorm.
 * User: H4
 * Date: 27/12/2018
 * Time: 15:07
 */

namespace Litiano\Sap;


use Carbon\Carbon;
use DB;
use Illuminate\Database\Connection;
use Illuminate\Database\Query\Builder;
use PDO;

trait DatabaseTrait
{
    /**
     * @return Connection
     */
    public static function getDb()
    {
        return DB::connection('sap');
    }

    /**
     * @param $table
     * @return Builder
     */
    public function getValidItemQueryBuilder($table)
    {
        return $this->getDb()
            ->table($table)
            ->where(function (Builder $builder) {
                $builder->where(function (Builder $query) {
                    $query->where('validFor', '=', 'N')
                        ->orWhere(function (Builder $builder) {
                            $builder->whereNull('validFrom')
                                ->orWhereDate('validFrom', '<=', Carbon::now());
                        })
                        ->where(function (Builder $builder) {
                            $builder->whereNull('validTo')
                                ->orWhereDate('validTo', '>=', Carbon::now());
                        });
                })
                    ->where(function (Builder $builder) {
                        $builder->where('frozenFor', '=', 'N')
                            ->orWhereNotNull('frozenFrom')
                            ->whereDate('frozenFrom', '>', Carbon::now())
                            ->orWhereNotNull('frozenTo')
                            ->whereDate('frozenTo', '<', Carbon::now());
                    });
            });
    }

    /**
     * @param bool $toArray
     * @return Builder
     */
    public function getProjectsQueryBuilder($toArray = false)
    {
        //SELECT T0.[PrjCode], T0.[PrjCode], T0.[PrjName] FROM [dbo].[OPRJ] T0 WHERE T0.[Active] = (@P1)   ORDER BY T0.[PrjCode]
        $query = $this->getDb()
            ->table('OPRJ')
            ->where('Active', '=', 'Y')
            ->where(function (Builder $builder) {
                $builder->whereNull('validFrom')
                    ->orWhereDate('validFrom', '<=', Carbon::now());
            })
            ->where(function (Builder $builder) {
                $builder->whereNull('validTo')
                    ->orWhereDate('validTo', '>=', Carbon::now());
            })
            ->orderBy('PrjCode');

        if ($toArray) {
            return $query->get(['PrjCode as value', 'PrjName as name']);
        }
        return $query;
    }

    public function getProjectName($code)
    {
        $project = $this->getProjectsQueryBuilder()
            ->where('PrjCode', '=', $code)->first(['PrjName']);
        if ($project) {
            return $project->PrjName;
        }
        return '';
    }

    /**
     * @param bool $toArray
     * @return Builder
     */
    public function getDistributionRulesQueryBuilder($toArray = false)
    {
        $query = $this->getDb()
            ->table('OOCR')
            ->join('OCR1', 'OOCR.OcrCode', '=', 'OCR1.OcrCode')
            ->where('OOCR.Active', '=', 'Y')
            ->where(function (Builder $builder) {
                $builder->whereNull('OCR1.ValidFrom')
                    ->orWhereDate('OCR1.ValidFrom', '<=', Carbon::now());
            })
            ->where(function (Builder $builder) {
                $builder->whereNull('OCR1.ValidTo')
                    ->orWhereDate('OCR1.ValidTo', '>=', Carbon::now());
            })
            ->where('OOCR.DimCode', '=', 1)
            ->orderBy('OOCR.OcrCode')
            ->distinct();
        if ($toArray) {
            return $query->get(['OOCR.OcrCode as value', 'OOCR.OcrName as name']);
        }
        return $query;
    }

    public function getDistributionRuleName($code)
    {
        $dr = $this->getDistributionRulesQueryBuilder()
            ->where('OOCR.OcrCode', '=', $code)->first(['OOCR.OcrCode', 'OOCR.OcrName']);
        if ($dr) {
            return $dr->OcrName;
        }
        return '';
    }

    public function getCostCentersQueryBuilder($toArray = false)
    {
        $query = $this->getDb()->table('OPRC')
            ->where(function (Builder $builder) {
                $builder->where(function (Builder $query) {
                    $query->where(function (Builder $builder) {
                        $builder->whereNull('ValidFrom')
                            ->orWhereDate('ValidFrom', '<=', Carbon::now());
                    })->where(function (Builder $builder) {
                        $builder->whereNull('ValidTo')
                            ->orWhereDate('ValidTo', '>=', Carbon::now());
                    });
                });
            })->where('Active', '=', 'Y');
        if ($toArray) {
            return $query->get(['PrcCode as value', 'PrcName as name']);
        }
        return $query;
    }

    public function getCostCenterName($code)
    {
        $costCenter = $this->getCostCentersQueryBuilder()
            ->where('PrcCode', '=', $code)->first(['PrcName']);
        if ($costCenter) {
            return $costCenter->PrcName;
        }
        return '';
    }

    /**
     * @return Builder
     */
    public function getAccountsQueryBuilder()
    {
        return $this->getValidItemQueryBuilder('OACT')
            ->where('LocManTran', '<>', 'Y')
            ->where('Postable', '=', 'Y')
            ->orderBy('AcctCode');
    }

    /**
     * @param string $query
     * @param null $parameters
     * @return array
     */
    public function query($query, $parameters = null)
    {
        $stmt = $this->getDb()->getPdo()->prepare($query);
        $stmt->execute($parameters);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}