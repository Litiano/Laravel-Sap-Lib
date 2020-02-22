<?php

/**
 * Created by PhpStorm.
 * User: E-Commerce 2
 * Date: 25/11/2016
 * Time: 15:59
 */

namespace Litiano\Sap\IdeHelper;

use DateTime;

class ICompany
{ /* GUID={3BA8DAED-5B33-4CE4-A4B8-B4308D86E524} */
    /**
     * DISPID=2
     * @var string $Server The SQL server name to connect to.
     */
    var $Server;
    /**
     * DISPID=4
     * @var string $CompanyDB The company's database to connet.
     */
    var $CompanyDB;
    /**
     * DISPID=5
     * @var int $UserSignature The current user signature.
     */
    var $UserSignature;
    /**
     * DISPID=6
     * @var string $CompanyName The Current company name.
     */
    var $CompanyName;
    /**
     * DISPID=7
     * @var string $WordDocsPath The system path to the exported Word documents.
     */
    var $WordDocsPath;
    /**
     * DISPID=8
     * @var string $BitMapPath The system path to the Bitmaps.
     */
    var $BitMapPath;
    /**
     * DISPID=9
     * @var string $ExcelDocsPath The system path to the exported Excel documents.
     */
    var $ExcelDocsPath;
    /**
     * DISPID=10
     * @var string $UserName The user name used for establishing connection to the system.
     */
    var $UserName;
    /**
     * DISPID=11
     * @var string $Password The password used for establishing connection to the system.
     */
    var $Password;
    /**
     * DISPID=12
     * @var bool $Connected Use this property to find out about connection status.
     */
    var $Connected;
    /**
     * DISPID=13
     * @var string $AttachMentPath The system path to the Attachments.
     */
    var $AttachMentPath;
    /**
     * DISPID=18
     * @var int $language property language
     * Use BoSuppLangs
     */
    var $language;
    /**
     * DISPID=23
     * @var bool $UseTrusted property UseTrusted
     */
    var $UseTrusted;
    /**
     * DISPID=27
     * @var mixed $UserTables property User Tables
     */
    var $UserTables;
    /**
     * DISPID=28
     * @var bool $XMLAsString property XMLAsString
     */
    var $XMLAsString;
    /**
     * DISPID=30
     * @var int $XmlExportType property XmlExportType
     */
    var $XmlExportType;
    /**
     * DISPID=31
     * @var bool $InTransaction property InTransaction
     */
    var $InTransaction;
    /**
     * DISPID=32
     * @var string $DbUserName property DbUserName
     */
    var $DbUserName;
    /**
     * DISPID=33
     * @var string $DbPassword property DbPassword
     */
    var $DbPassword;
    /**
     * DISPID=36
     * @var int $DbServerType property DbServerType
     */
    var $DbServerType;
    /**
     * DISPID=37
     * @var string $AddonIdentifier property AddonIdentifier
     */
    var $AddonIdentifier;
    /**
     * DISPID=38
     * @var string $LicenseServer property LicenseServer
     */
    var $LicenseServer;
    /**
     * DISPID=42
     * @var int $Version Version
     */
    var $Version;
    /**
     * DISPID=43
     * @var int $MinimalSupportedVersion MinimalSupportedVersion
     */
    var $MinimalSupportedVersion;
    /**
     * DISPID=44
     * @var mixed $DTCTransactionObject property DTCTransactionObject
     */
    var $DTCTransactionObject;
    /**
     * DISPID=49
     * @var void $Application property Application
     */
    var $Application;
    /**
     * DISPID=55
     * @var string $SLDServer property SLDServer
     */
    var $SLDServer;
    /**
     * DISPID=56
     * @var string $SecurityCode property SecurityCode
     */
    var $SecurityCode;

    /**
     * DISPID=1610612736
     * @param int $riid [in]
     * @param mixed $ppvObj [out]
     * @return void
     */
    function QueryInterface(
        /* mixed [26] [in] --> int [29]  */ &$riid,
        /* mixed [26] [out] --> mixed [26]  */ &$ppvObj
    )
    {
    }

    /**
     * DISPID=1610612737
     * @return int
     */
    function AddRef()
    {
    }

    /**
     * DISPID=1610612738
     * @return int
     */
    function Release()
    {
    }

    /**
     * DISPID=1610678272
     * @param int $pctinfo [out]
     * @return void
     */
    function GetTypeInfoCount(
        /* mixed [26] [out] --> int [23]  */ &$pctinfo
    )
    {
    }

    /**
     * DISPID=1610678273
     * @param int $itinfo [in]
     * @param int $lcid [in]
     * @param mixed $pptinfo [out]
     * @return void
     */
    function GetTypeInfo(
        /* int [23] [in] */ $itinfo,
        /* int [19] [in] */ $lcid,
        /* mixed [26] [out] --> mixed [26]  */ &$pptinfo
    )
    {
    }

    /**
     * DISPID=1610678274
     * @param int $riid [in]
     * @param mixed $rgszNames [in]
     * @param int $cNames [in]
     * @param int $lcid [in]
     * @param int $rgdispid [out]
     * @return void
     */
    function GetIDsOfNames(
        /* mixed [26] [in] --> int [29]  */ &$riid,
        /* mixed [26] [in] --> mixed [26]  */ &$rgszNames,
        /* int [23] [in] */ $cNames,
        /* int [19] [in] */ $lcid,
        /* mixed [26] [out] --> int [3]  */ &$rgdispid
    )
    {
    }

    /**
     * DISPID=1610678275
     * @param int $dispidMember [in]
     * @param int $riid [in]
     * @param int $lcid [in]
     * @param int $wFlags [in]
     * @param int $pdispparams [in]
     * @param object $pvarResult [out]
     * @param int $pexcepinfo [out]
     * @param int $puArgErr [out]
     * @return void
     */
    function Invoke(
        /* int [3] [in] */ $dispidMember,
        /* mixed [26] [in] --> int [29]  */ &$riid,
        /* int [19] [in] */ $lcid,
        /* int [18] [in] */ $wFlags,
        /* mixed [26] [in] --> int [29]  */ &$pdispparams,
        /* mixed [26] [out] --> object [12]  */ &$pvarResult,
        /* mixed [26] [out] --> int [29]  */ &$pexcepinfo,
        /* mixed [26] [out] --> int [23]  */ &$puArgErr
    )
    {
    }

    /**
     * DISPID=1
     * @return int
     * Use this function for establishing connection to the database.
     */
    function Connect()
    {
    }

    /**
     * DISPID=14
     * @param int $Object
     * Get a new initialized business object.
     * @return mixed
     */
    function GetBusinessObject(
        /* int [29]  */ $Object
    )
    {
    }

    /**
     * DISPID=15
     * @param string $FileName [in]
     * @param int $Index [in]
     * Get a saved business object.
     * @return mixed
     */
    function GetBusinessObjectFromXML(
        /* string [8] [in] */ $FileName,
        /* int [3] [in] */ $Index
    )
    {
    }

    /**
     * DISPID=17
     * @return void
     * Use this function to dissconnect from the server
     */
    function Disconnect()
    {
    }

    /**
     * DISPID=19
     * @param int $errCode [out]
     * @param string $errMsg [out]
     * Use this function for establishing connection to the database.
     * @return void
     */
    function GetLastError(
        /* mixed [26] [out] --> int [3]  */ &$errCode,
        /* mixed [26] [out] --> string [8]  */ &$errMsg
    )
    {
    }

    /**
     * DISPID=20
     * @return void
     * method StartTransaction
     */
    function StartTransaction()
    {
    }

    /**
     * DISPID=21
     * @param int $endType
     * method EndTransaction
     * @return void
     */
    function EndTransaction(
        /* int [29]  */ $endType
    )
    {
    }

    /**
     * DISPID=22
     * @param string $ObjectCode [out]
     * method GetNewObjectCode
     * @return void
     */
    function GetNewObjectCode(
        /* mixed [26] [out] --> string [8]  */ &$ObjectCode
    )
    {
    }

    /**
     * DISPID=24
     * @return mixed
     * method GetCompanyList
     */
    function GetCompanyList()
    {
    }

    /**
     * DISPID=25
     * @param string $FileName [in]
     * @param int $Index [in]
     * method GetXMLobjectType
     * @return int
     */
    function GetXMLobjectType(
        /* string [8] [in] */ $FileName,
        /* int [3] [in] */ $Index
    )
    {
    }

    /**
     * DISPID=26
     * @param string $FileName [in]
     * method GetXMLelementCount
     * @return int
     */
    function GetXMLelementCount(
        /* string [8] [in] */ $FileName
    )
    {
    }

    /**
     * DISPID=29
     * @param int $Object [in]
     * method GetBusinessObjectXmlSchema
     * @return string
     */
    function GetBusinessObjectXmlSchema(
        /* int [29] [in] */ $Object
    )
    {
    }

    /**
     * DISPID=34
     * @return string
     * method GetContextCookie
     */
    function GetContextCookie()
    {
    }

    /**
     * DISPID=35
     * @param string $conStr [in]
     * method SetSboLoginContext
     * @return int
     */
    function SetSboLoginContext(
        /* string [8] [in] */ $conStr
    )
    {
    }

    /**
     * DISPID=39
     * @return string
     * method GetLastErrorDescription
     */
    function GetLastErrorDescription()
    {
    }

    /**
     * DISPID=40
     * @return int
     * method GetLastErrorCode
     */
    function GetLastErrorCode()
    {
    }

    /**
     * DISPID=41
     * @return string
     * method GetNewObjectKey
     */
    function GetNewObjectKey()
    {
    }

    /**
     * DISPID=45
     * @return bool
     * IsDTCTransactionObjectSet
     */
    function IsDTCTransactionObjectSet()
    {
    }

    /**
     * DISPID=46
     * @return ICompanyService
     * GetCompanyService
     */
    function GetCompanyService()
    {
    }

    /**
     * DISPID=47
     * @param string $NewPassword [in]
     * ChangePassword
     * @return int
     */
    function ChangePassword(
        /* string [8] [in] */ $NewPassword
    )
    {
    }

    /**
     * DISPID=48
     * @param string $TableName [in]
     * InvalidateCache
     * @return int
     */
    function InvalidateCache(
        /* string [8] [in] */ $TableName
    )
    {
    }

    /**
     * DISPID=50
     * @return mixed
     * method GetRegisteredServersList
     */
    function GetRegisteredServersList()
    {
    }

    /**
     * DISPID=51
     * @param string $bstrUserName [in]
     * @param string $bstrPassword [in]
     * method AuthenticateUser
     * @return int
     */
    function AuthenticateUser(
        /* string [8] [in] */ $bstrUserName,
        /* string [8] [in] */ $bstrPassword
    )
    {
    }

    /**
     * DISPID=52
     * @return string
     * method GetNewObjectType
     */
    function GetNewObjectType()
    {
    }

    /**
     * DISPID=53
     * @return string
     * Get Company Time
     */
    function GetCompanyTime()
    {
    }

    /**
     * DISPID=54
     * @return DateTime|mixed
     * Get Company DATE
     */
    function GetCompanyDate()
    {
    }

    /**
     * DISPID=509
     * @return string
     * method GetDBServerTime
     */
    function GetDBServerTime()
    {
    }

    /**
     * DISPID=510
     * @return DateTime|mixed
     * method GetDBServerDate
     */
    function GetDBServerDate()
    {
    }

}