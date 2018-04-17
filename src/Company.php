<?php

namespace Litiano\Sap;

use Carbon\Carbon;
use Illuminate\Database\Connection;
use Illuminate\Database\Query\Builder;
use Litiano\Sap\Enum\BoObjectTypes;
use Litiano\Sap\IdeHelper\ICompany;
use Litiano\Sap\IdeHelper\IRecordset;

class Company
{
    /**
     * @TODO BUG IMPORTANTE
     * @INFO
     * Realizando alguns testes, quando a classe Company é instanciada e busca um bussines object na mesma função,
     * o CLI do PHP para de funcionar.
     * Mas se eu instanciar a classe em uma função e passa-la como parametro para outra função que busca o bussines object
     * e faz a mesma coisa, tudo funciona perfeitamente.
     * Que bruxaria é essa???
     * Coisas da DI API.
     */
    /**
     * @var $_com ICompany
     */
    protected $_com;

    /** @var Connection */
    protected $dbConnection;

    protected $disconnect;

    /** @var  Carbon */
    protected $startTime;

    /** @var bool|resource */
    protected $logFile;

    /**
     * Company constructor.
     * @param bool $setConnection
     * @param bool $disconnect
     * @throws \Exception
     */
    public function __construct($setConnection = true, $disconnect = false)
    {
        $this->startTime = Carbon::now();
        // Read and write + create if not exists
        $this->logFile = fopen(storage_path("logs/sap-debug{$this->startTime->format("Y-m-d")}.log"), "a+");
        $this->log("========================== START DEBUG ==========================");

        if ($setConnection == true) {
            $this->setConnection();
        }
        $this->disconnect = $disconnect;
    }

    public function __destruct()
    {
        /**
         * @INFO Existe algum bug, que se desconectar do SAP no método __destruct
         * o schedule:run não finaliza, fica no limbo, perdido.
         * Por isso desconecto na função disconnect()
         * Update 2017/06/21
         * Mes desconectando na função disconnect o browser fica carregando e trava.
         * Portanto é melhor não desconectar.
         */
        if ($this->disconnect) {
            $this->disconnect();
            $this->log("Disconnection time: " . $this->startTime->diffForHumans());
        }

        $this->log("========================== END DEBUG ==========================");
    }

    /**
     * @throws \Exception
     */
    protected function setConnection()
    {
        $this->log("User:" . shell_exec("whoami"));
        $this->log("Starting connection:" . $this->startTime->toAtomString());

        /**
         * @INFO Variaveis do Com não podem ser copiadas, da erro no Cli
         * Ex:
         * $service = $sap->_com->GetCompanyService();
         * $service->GetBusinessService(25);
         *
         * Isso causa erro
         */
        try {
            $this->_com = new \COM("SAPbobsCOM.Company", null, CP_UTF8);
            $this->log("Instance time:" . $this->startTime->diffForHumans());
        } catch (\Exception $e) {
            $this->log("Erro ao instanciar SAPbobsCOM.Company: " . $e->getMessage());
            throw new \Exception("Erro ao instanciar SAPbobsCOM.Company: " . $e->getMessage());
        }

        // Inicio Parametros obrigatorios
        $this->_com->DbServerType = config("sap.db.type");
        $this->_com->Server = config("sap.server");
        $this->_com->UserName = config("sap.username");
        $this->_com->Password = config("sap.password");
        $this->_com->CompanyDB = config("sap.db.database");
        // Fim Parametros obrigatorios
        $this->_com->language = config("sap.language");

        if (config('sap.license_server') !== null) {
            $this->_com->LicenseServer = config("sap.license_server");
        }

        /** After SAP 9.2 PL 05 use "SLDServer" property instead of "LicenseServer" property */
        if (config('sap.sld_server') !== null && property_exists($this->_com, "SLDServer")) {
            $this->_com->SLDServer = config("sap.sld_server");
        }

        if (config('sap.use_trusted') !== null) {
            $this->_com->UseTrusted = (bool)config('sap.use_trusted');
        }

        if (config('sap.db.username') !== null) {
            $this->_com->DbUserName = config("sap.db.username");
        }

        if (config('sap.db.password') !== null) {
            $this->_com->DbPassword = config("sap.db.password");
        }

        /** @info faz com que o php não finalize */
        /*if ($this->_com->AuthenticateUser(config("sap.username"), config("sap.password")) !== 0) {
            throw new \Exception("Não foi possivel autenticar usuário e senha no SAP: " .
                $this->_com->GetLastErrorCode() . ":" . $this->_com->GetLastErrorDescription());
        }*/

        if ($this->_com->Connect() !== 0) {
            $msg = $this->_com->GetLastErrorCode() . ":" . $this->_com->GetLastErrorDescription();

            $this->log("Connection Error:" . $msg);
            $this->log("Connection time + instance time:" . $this->startTime->diffForHumans());

            throw new \Exception("Não foi possivel conectar com o SAP: " . $msg);
        }

        if (!$this->_com->Connected) {
            $this->log("Connection generic error!");
            throw new \Exception("SAP não conectado!");
        }

        $this->log("Connection successful. Connection time + instance time:" . $this->startTime->diffForHumans());
    }

    public function queryWithRecordSet($query)
    {
        /** @see http://www.b1tech.tips/2016/01/utility-object-how-use-recordset-object.html */
        /** @var IRecordset $rs */
        $rs = $this->_com->getBusinessObject(BoObjectTypes::BoRecordset);
        $rs->DoQuery($query);
        return $rs;
    }

    protected function disconnect()
    {
        if ($this->_com && $this->_com->Connected) {
            $this->_com->Disconnect();
        }
    }

    /**
     * @param $code int BoObjectTypes
     * @return mixed
     */
    public function getBusinessObject($code)
    {
        return $this->_com->GetBusinessObject($code);
    }

    public function getLastErrorDescription()
    {
        return $this->_com->GetLastErrorDescription();
    }

    public function getLastErrorCode()
    {
        return $this->_com->GetLastErrorCode();
    }

    public function getNewObjectKey()
    {
        return $this->_com->GetNewObjectKey();
    }

    /**
     * @return Connection
     */
    public function getDb()
    {
        if (isset($this->dbConnection)) {
            return $this->dbConnection;
        }
        $this->dbConnection = \DB::connection('sap');
        return $this->dbConnection;
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
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    /**
     * @return string
     * Não Funciona!!!
     * @deprecated no work
     */
    private function getNewObjectCode()
    {
        $codigo = "";
        $this->_com->GetNewObjectCode($codigo);
        return $codigo;
    }

    public function getCompanyService()
    {
        return $this->_com->GetCompanyService();
    }

    public function printTypeInfo(\COM $com, $dispinterface = null, $wantsink = false)
    {
        com_print_typeinfo($com, $dispinterface, $wantsink);
    }

    protected function log($msg)
    {
        if (config("sap.debug")) {
            fwrite($this->logFile, $msg . "\n");
        }
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
        if($dr) {
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
}