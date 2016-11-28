<?php

namespace Litiano\SAP;


use Litiano\SAP\Enum\BoSuppLangs;
use Litiano\SAP\IdeHelper\ICompany;

class SAP
{
    /**
     * @TODO BUG IMPORTANTE
     * @INFO
     * Realizando alguns testes, quando a classe SAP é instanciada e busca um bussines object na mesma função,
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

    public function __construct($setDb = true, $setConnection = true, $disconnect = true)
    {
        if ($setConnection == true){
            $this->setConnection();
        }
        if ($setDb == true) {
            $this->setDb();
        }
        $this->disconnect = $disconnect;
    }

    public function __destruct()
    {
        if($this->disconnect){
            $this->disconnect();
        }
    }

    protected function setConnection(){
        try{
            $this->_com = new \COM("SAPbobsCOM.Company", [], CP_UTF8);
        }catch (\Exception $e){
            throw new \Exception("Erro ao Conectar com SAP: ".$e->getMessage());
        }
        $this->_com->DbServerType = env("SAP_DB_SERVER_TYPE");
        $this->_com->Server = env("SAP_SERVER_ADDRESS");
        $this->_com->CompanyDB = env("SAP_DB_NAME");
        $this->_com->LicenseServer = env("SAP_LICENSE_SERVER");
        $this->_com->UserName = env("SAP_USER");
        $this->_com->Password = env("SAP_PASSWORD");
        $this->_com->language = BoSuppLangs::ln_Portuguese_Br;
        $retVal = $this->_com->Connect();

        if($retVal != "0"){
            throw new \Exception("Não foi possivel conectar com o SAP: " . $this->_com->GetLastErrorDescription());
        }
    }

    protected function setDb(){
        $server = env("SAP_SERVER_ADDRESS");
        $port = env("SAP_SQL_PORT");
        $database = env("SAP_DB_NAME");
        $db = new \PDO("sqlsrv:Server=$server,$port;Database=$database", env("SAP_DB_USER") , env("SAP_DB_PASSWORD"));
        if($db == false){
            throw new \Exception("Erro ao conectar com SqlServer");
        }
        $this->_db = $db;
    }

    protected function disconnect(){
        if($this->_com){
            $this->_com->Disconnect();
        }
    }

    public function getBussinesObject($code){
        return $this->_com->GetBusinessObject($code);
    }

    public function getLastErrorDescription(){
        return $this->_com->GetLastErrorDescription();
    }

    public function getNewObjectKey(){
        return $this->_com->GetNewObjectKey();
    }

    /**
     * @return string
     * Não Funciona!!!
     */
    private function getNewObjectCode(){
        $codigo = "";
        $this->_com->GetNewObjectCode($codigo);
        return $codigo;
    }

    public function query($query, $parametros = null){
        $stmt = $this->_db->prepare($query);
        $stmt->execute($parametros);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}