<?php

namespace Litiano\Sap;


use Litiano\Sap\Enum\BoSuppLangs;
use Litiano\Sap\IdeHelper\ICompany;
use Litiano\Sap\IdeHelper\ICompanyService;

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
    /**
     * @var $_db \PDO;
     */
    protected $_db;

    protected $disconnect;

    public function __construct($setDb = true, $setConnection = true, $disconnect = false)
    {
        if ($setConnection == true) {
            $this->setConnection();
        }
        if ($setDb == true) {
            $this->setDb();
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
        if ($this->disconnect && $this->_com) {
            $this->disconnect();
        }
    }

    protected function setConnection()
    {
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
        } catch (\Exception $e) {
            throw new \Exception("Erro ao instanciar SAPbobsCOM.Company: " . $e->getMessage());
        }
        $this->_com->DbServerType = config("sap.db.type");
        $this->_com->Server = config("sap.server");
        $this->_com->LicenseServer = config("sap.license_server");
        $this->_com->language = config("sap.language");
        $this->_com->UserName = config("sap.username");
        $this->_com->Password = config("sap.password");
        $this->_com->CompanyDB = config("sap.db.name");
        $this->_com->DbUserName = config("sap.db.username");
        $this->_com->DbPassword = config("sap.db.password");
        $retVal = $this->_com->Connect();

        if ($retVal != "0") {
            throw new \Exception("Não foi possivel conectar com o SAP: " .
                $this->_com->GetLastErrorCode() . ":" . $this->_com->GetLastErrorDescription());
        }
    }

    protected function setDb()
    {
        try {
            $server = config("sap.db.host");
            $port = config("sap.db.port");
            $database = config("sap.db.name");
            $db = new \PDO("sqlsrv:Server=$server,$port;Database=$database",
                config("sap.db.username"), config("sap.db.password"));

            if ($db == false) {
                throw new \Exception("Erro ao conectar com SqlServer.");
            }

            $this->_db = $db;
        } catch (\Exception $e) {
            throw new \Exception("Erro ao conectar com SqlServer: " . $e->getMessage());
        }
    }

    protected function disconnect()
    {
        if ($this->_com) {
            $this->_com->Disconnect();
        }
    }

    /**
     * @param $code int BoObjectTypes
     * @return mixed
     */
    public function getBussinesObject($code)
    {
        return $this->_com->GetBusinessObject($code);
    }

    public function getLastErrorDescription()
    {
        return $this->_com->GetLastErrorDescription();
    }

    public function getNewObjectKey()
    {
        return $this->_com->GetNewObjectKey();
    }

    /**
     * @return string
     * Não Funciona!!!
     */
    private function getNewObjectCode()
    {
        $codigo = "";
        $this->_com->GetNewObjectCode($codigo);
        return $codigo;
    }

    public function query($query, $parametros = null)
    {
        $stmt = $this->_db->prepare($query);
        $stmt->execute($parametros);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getCompanyService()
    {
        return $this->_com->GetCompanyService();
    }

    public function printTypeInfo(\COM $com, $dispinterface = null, $wantsink = false)
    {
        com_print_typeinfo($com, $dispinterface, $wantsink);
    }
}