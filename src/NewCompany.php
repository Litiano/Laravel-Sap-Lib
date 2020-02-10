<?php
/**
 * Created by PhpStorm.
 * User: H4
 * Date: 27/12/2018
 * Time: 14:20
 */

namespace Litiano\Sap;


use Carbon\Carbon;
use Closure;
use COM;
use Exception;
use Litiano\Sap\Enum\BoWfTransOpt;
use Litiano\Sap\IdeHelper\ICompany;
use Monolog\Handler\RotatingFileHandler;
use Monolog\Logger;
use Throwable;

final class NewCompany
{
    use DatabaseTrait;

    /** @var ICompany */
    protected $_com;
    /** @var Logger */
    protected $log;
    /** @var Carbon */
    protected $startTime;

    public function __construct()
    {
        $this->log = new Logger('SAP');
        $this->log->pushHandler(new RotatingFileHandler(storage_path('logs/SAP.log'), config('log_max_files', 90)));
    }

    public static function printTypeInfo(COM $com, $dispinterface = null, $wantsink = false)
    {
        com_print_typeinfo($com, $dispinterface, $wantsink);
    }

    /**
     * @return NewCompany
     */
    public static function getInstance()
    {
        return resolve(self::class);
    }

    public function __destruct()
    {
        /**
         * @INFO Existe algum bug, que se desconectar do SAP no método __destruct
         * o schedule:run não finaliza, fica no limbo, perdido.
         * Por isso desconecto na função disconnect()
         * Update 2017/06/21
         * Mas desconectando na função disconnect o browser fica carregando e trava.
         * Portanto é melhor não desconectar.
         */
        //$this->disconnect();
        //$this->log->info("Disconnection time: " . $this->startTime->diffForHumans());
    }

    /**
     * @param null $config
     * @return COM|ICompany
     * @throws Exception
     */
    public function getCompany($config = null)
    {
        if ($this->_com && $this->_com->Connected) {
            return $this->_com;
        }
        /**
         * @TODO use config,
         */
        $this->startTime = Carbon::now();

        $this->log->info("User:" . shell_exec("whoami"));
        $this->log->info("Starting connection:" . $this->startTime->toAtomString());

        /**
         * @INFO Variaveis do Com não podem ser copiadas, da erro no Cli
         * Ex:
         * $service = $sap->_com->GetCompanyService();
         * $service->GetBusinessService(25);
         *
         * Isso causa erro
         */
        try {
            $this->_com = new COM("SAPbobsCOM.Company", null, CP_UTF8);
            $this->log->info("Instance time:" . $this->startTime->diffForHumans());
        } catch (Exception $e) {
            $this->log->error("Erro ao instanciar SAPbobsCOM.Company: " . $e->getMessage());
            throw new Exception("Erro ao instanciar SAPbobsCOM.Company: " . $e->getMessage());
        }

        // Inicio Parametros obrigatorios
        $this->_com->DbServerType = (int)config("sap.db.type");
        $this->_com->Server = config("sap.server");
        $this->_com->UserName = config("sap.username");
        $this->_com->Password = config("sap.password");
        $this->_com->CompanyDB = config("sap.db.database");
        // Fim Parametros obrigatorios
        $this->_com->language = (int)config("sap.language");

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

            $this->log->error("Connection Error:" . $msg);
            $this->log->error("Connection time + instance time:" . $this->startTime->diffForHumans());

            throw new Exception("Não foi possivel conectar com o SAP: " . $msg);
        }

        if (!$this->_com->Connected) {
            $this->log->error("Connection generic error!");
            throw new Exception("SAP não conectado!");
        }

        $this->log->info("Connection successful. Connection time + instance time:" . $this->startTime->diffForHumans());
        return $this->_com;
    }

    /**
     * @param Closure $closure
     * @return mixed
     * @throws Throwable
     */
    public function transaction(Closure $closure)
    {
        $sap = NewCompany::getInstance()->getCompany();
        $sap->StartTransaction();
        try {
            $result = \DB::transaction($closure);
            $sap->EndTransaction(BoWfTransOpt::wf_Commit);
            return $result;
        } catch (Throwable $e) {
            $sap->EndTransaction(BoWfTransOpt::wf_RollBack);
            throw $e;
        }
    }

    /** @deprecated Buga a conexão */
    protected function disconnect()
    {
        if ($this->_com && $this->_com->Connected) {
            $this->_com->Disconnect();
        }
    }

}