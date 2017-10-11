<?php
/**
 * Created by PhpStorm.
 * User: Litiano Moura
 * Date: 10/10/2017
 * Time: 04:08
 */

const dst_MSSQL = 1,
dst_DB_2 = 2,
dst_SYBASE = 3,
dst_MSSQL2005 = 4,
dst_MAXDB = 5,
dst_MSSQL2008 = 6,
dst_MSSQL2012 = 7;

$pdo = new PDO("sqlsrv:server=localhost ; Database = SBO_Teste", "sa", "");
//$pdo = new PDO("odbc:sql2", "sa", "");
$stmt = $pdo->query("select top 1 ItemName, ItemCode from OITM");
var_dump($stmt->fetchAll());

$startTime = new DateTime();
echo "Starting... {$startTime->format("H:i:s")}\n";

/** @var \Litiano\Sap\IdeHelper\ICompany $sap */
$sap = new COM("SAPbobsCOM.Company");

$instanceTime = new DateTime();
echo "Instance Company time: {$startTime->diff($instanceTime)->format("%I:%S")}\n";

//Required
$sap->Server = "";
$sap->UserName = "manager";
$sap->Password = "";
$sap->DbServerType = dst_MSSQL2008;
$sap->CompanyDB = "";

//////////
//$sap->LicenseServer = "";
//$sap->DbUserName = "sa";
//$sap->DbPassword = "";
//$sap->Connect();

if (!$sap->Connected) {
    //echo "Last Code-Message: {$sap->GetLastErrorCode()} {$sap->GetLastErrorDescription()}\n";
    // Authenticate before Connect()
    $sap->AuthenticateUser("manager", "catwoman");
    $sap->Connect();
    echo "Last Code-Message: {$sap->GetLastErrorCode()} {$sap->GetLastErrorDescription()}\n";
}

$connectionTime = new DateTime();
echo "Connection time: {$instanceTime->diff($connectionTime)->format("%I:%S")}\n";

echo "Connected: " . ($sap->Connected ? "True" : "False") . "\n";

if ($sap->Connected) {
    echo "Disconnecting...\n";
    $sap->Disconnect();
    $disconnectTime = new DateTime();
    echo "Disconnect time: {$connectionTime->diff($disconnectTime)->format("%I:%S")}\n";
}


echo "Time Total: {$startTime->diff(isset($disconnectTime)?$disconnectTime:$connectionTime)->format("%I:%S")}\n";
