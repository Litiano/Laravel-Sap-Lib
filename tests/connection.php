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

$startTime = new DateTime();
echo "Starting... {$startTime->format("H:%I:%S")}\n";

/** @var \Litiano\Sap\IdeHelper\ICompany $sap */
$sap = new COM("SAPbobsCOM.Company");

$instanceTime = new DateTime();
echo "Instance Company time: {$startTime->diff($instanceTime)->format("%I:%S")}\n";

//Required
$sap->Server = "localhost";
$sap->UserName = "manager";
$sap->Password = "";
$sap->DbServerType = dst_MSSQL2008;
$sap->CompanyDB = "";

//////////
$sap->LicenseServer = "";
$sap->DbUserName = "sa";
$sap->DbPassword = "";

$sap->Connect();

$connectionTime = new DateTime();
echo "Connection time: {$instanceTime->diff($connectionTime)->format("%I:%S")}\n";

echo "Connected: " . ($sap->Connected ? "True" : "False") . "\n";

if(!$sap->Connected){
    echo "Last Code-Message: {$sap->GetLastErrorCode()} {$sap->GetLastErrorDescription()}\n";
    // Authenticate before Connect()
    $sap->AuthenticateUser("manager", "");
    echo "Last Code-Message: {$sap->GetLastErrorCode()} {$sap->GetLastErrorDescription()}\n";
    return;
}

echo "Disconnecting...\n";

$sap->Disconnect();
$disconnectTime = new DateTime();
echo "Disconnect time: {$connectionTime->diff($disconnectTime)->format("%I:%S")}\n";

echo "Time Total: {$startTime->diff($disconnectTime)->format("%I:%S")}\n";