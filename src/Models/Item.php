<?php
/**
 * Created by PhpStorm.
 * User: H4
 * Date: 07/10/2018
 * Time: 23:29
 */

namespace Litiano\Sap\Models;


use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $connection = 'sap';
    protected $table = 'OITM';
    protected $primaryKey = 'ItemCode';
    public $incrementing = false;
    public $timestamps = false;
    protected $dates = ['validFrom', 'validTo', 'frozenTo'];


    /**
     * @todo implement
     * @return bool
     */
    public function isValid()
    {
//        return $this->getDb()
//            ->table($table)
//            ->where(function (Builder $builder) {
//                $builder->where(function (Builder $query) {
//                    $query->where('validFor', '=', 'N')
//                        ->orWhere(function (Builder $builder) {
//                            $builder->whereNull('validFrom')
//                                ->orWhereDate('validFrom', '<=', Carbon::now());
//                        })
//                        ->where(function (Builder $builder) {
//                            $builder->whereNull('validTo')
//                                ->orWhereDate('validTo', '>=', Carbon::now());
//                        });
//                })
//                    ->where(function (Builder $builder) {
//                        $builder->where('frozenFor', '=', 'N')
//                            ->orWhereNotNull('frozenFrom')
//                            ->whereDate('frozenFrom', '>', Carbon::now())
//                            ->orWhereNotNull('frozenTo')
//                            ->whereDate('frozenTo', '<', Carbon::now());
//                    });
//            });

    }
}