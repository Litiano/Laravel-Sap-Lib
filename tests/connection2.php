<?php
/**
 * Created by PhpStorm.
 * User: Litiano
 * Date: 26/10/2017
 * Time: 10:42
 */


function testPdo()
{
    $dataBase = "";
    $username = "";
    $password = "";
    $server = "localhost";
    $pdo = new PDO("sqlsrv:server=$server;Database=$dataBase", $username, $password);
    $stmt = $pdo->query("select top 1 ItemName, ItemCode from OITM");
    var_dump($stmt->fetchAll());
}

function testDIAPI()
{
    $startTime = new DateTime();
    echo "Starting... {$startTime->format("H:i:s")}\n";
    $sap = new COM("SAPbobsCOM.Company");
    $instanceTime = new DateTime();
    echo "Instance Company time: {$startTime->diff($instanceTime)->format("%I:%S")}\n";

    //Required
    $sap->Server = "192.168.0.2";
    $sap->UserName = "manager";
    $sap->Password = "12345";
    $sap->DbServerType = dst_MSSQL2012;
    $sap->CompanyDB = "SBO_TRAGUARDO";

    //$sap->LicenseServer = "";
    //$sap->SLDServer = "https://<Server-name>:40000/";

    $autResult = $sap->AuthenticateUser("", "");
    echo "Aut result: $autResult \n";

    $connectResult = $sap->Connect();
    if($connectResult !== 0) {
        echo "Connect error: $connectResult \n";
        echo "Last Code-Message: {$sap->GetLastErrorCode()} {$sap->GetLastErrorDescription()}\n";
    }

    $connectionTime = new DateTime();
    echo "Connection time: {$instanceTime->diff($connectionTime)->format("%I:%S")}\n";

    if ($sap->Connected) {
        echo "Disconnecting...\n";
        $sap->Disconnect();
        $disconnectTime = new DateTime();
        echo "Disconnect time: {$connectionTime->diff($disconnectTime)->format("%I:%S")}\n";
    }
}

const dst_MSSQL = 1,
dst_DB_2 = 2,
dst_SYBASE = 3,
dst_MSSQL2005 = 4,
dst_MAXDB = 5,
dst_MSSQL2008 = 6,
dst_MSSQL2012 = 7;