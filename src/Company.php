<?php

namespace Litiano\Sap;

use Illuminate\Database\Connection;
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

    public function __construct($setConnection = true, $disconnect = false)
    {
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

        // Inicio Parametros obrigatorios
        $this->_com->DbServerType = config("sap.db.type");
        $this->_com->Server = config("sap.server");
        $this->_com->UserName = config("sap.username");
        $this->_com->Password = config("sap.password");
        $this->_com->CompanyDB = config("sap.db.database");
        // Fim Parametros obrigatorios
        $this->_com->language = config("sap.language");
        $this->_com->LicenseServer = config("sap.license_server");
        $this->_com->DbUserName = config("sap.db.username");
        $this->_com->DbPassword = config("sap.db.password");

        if($this->_com->AuthenticateUser(config("sap.username"), config("sap.password")) !== 0) {
            throw new \Exception("Não foi possivel autenticar usuário e senha no SAP: " .
                $this->_com->GetLastErrorCode() . ":" . $this->_com->GetLastErrorDescription());
        }

        if ($this->_com->Connect() !== 0) {
            throw new \Exception("Não foi possivel conectar com o SAP: " .
                $this->_com->GetLastErrorCode() . ":" . $this->_com->GetLastErrorDescription());
        }

        if (!$this->_com->Connected) {
            throw new \Exception("SAP não conectado!");
        }
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
}