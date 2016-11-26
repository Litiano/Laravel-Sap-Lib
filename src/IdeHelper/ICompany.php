<?php

/**
 * Created by PhpStorm.
 * User: E-Commerce 2
 * Date: 25/11/2016
 * Time: 15:59
 */
namespace Litiano\SAP\IdeHelper;

use Litiano\SAP\Enum\BoSuppLangs;

class ICompany { /* GUID={3BA8DAED-5B33-4CE4-A4B8-B4308D86E524} */
    /* DISPID=1610612736 */
    function QueryInterface(
        /* VT_PTR [26] [in] --> ? [29]  */ &$riid,
        /* VT_PTR [26] [out] --> VT_PTR [26]  */ &$ppvObj
    )
    {
    }
    /* DISPID=1610612737 */
    /* VT_UI4 [19] */
    function AddRef(
    )
    {
    }
    /* DISPID=1610612738 */
    /* VT_UI4 [19] */
    function Release(
    )
    {
    }
    /* DISPID=1610678272 */
    function GetTypeInfoCount(
        /* VT_PTR [26] [out] --> VT_UINT [23]  */ &$pctinfo
    )
    {
    }
    /* DISPID=1610678273 */
    function GetTypeInfo(
        /* VT_UINT [23] [in] */ $itinfo,
        /* VT_UI4 [19] [in] */ $lcid,
        /* VT_PTR [26] [out] --> VT_PTR [26]  */ &$pptinfo
    )
    {
    }
    /* DISPID=1610678274 */
    function GetIDsOfNames(
        /* VT_PTR [26] [in] --> ? [29]  */ &$riid,
        /* VT_PTR [26] [in] --> VT_PTR [26]  */ &$rgszNames,
        /* VT_UINT [23] [in] */ $cNames,
        /* VT_UI4 [19] [in] */ $lcid,
        /* VT_PTR [26] [out] --> VT_I4 [3]  */ &$rgdispid
    )
    {
    }
    /* DISPID=1610678275 */
    function Invoke(
        /* VT_I4 [3] [in] */ $dispidMember,
        /* VT_PTR [26] [in] --> ? [29]  */ &$riid,
        /* VT_UI4 [19] [in] */ $lcid,
        /* VT_UI2 [18] [in] */ $wFlags,
        /* VT_PTR [26] [in] --> ? [29]  */ &$pdispparams,
        /* VT_PTR [26] [out] --> VT_VARIANT [12]  */ &$pvarResult,
        /* VT_PTR [26] [out] --> ? [29]  */ &$pexcepinfo,
        /* VT_PTR [26] [out] --> VT_UINT [23]  */ &$puArgErr
    )
    {
    }
    /* DISPID=1 */
    /* VT_I4 [3] */
    function Connect(
    )
    {
        /* Use this function for establishing connection to the database. */
    }
    /* DISPID=2 */
    /* VT_BSTR [8] */
    /* The SQL server name to connect to. */
    var $Server;


    /* DISPID=4 */
    /* VT_BSTR [8] */
    /* The company's database to connet. */
    var $CompanyDB;


    /* DISPID=5 */
    /* VT_I4 [3] */
    /* The current user signature. */
    var $UserSignature;

    /* DISPID=6 */
    /* VT_BSTR [8] */
    /* The Current company name. */
    var $CompanyName;

    /* DISPID=7 */
    /* VT_BSTR [8] */
    /* The system path to the exported Word documents. */
    var $WordDocsPath;

    /* DISPID=8 */
    /* VT_BSTR [8] */
    /* The system path to the Bitmaps. */
    var $BitMapPath;

    /* DISPID=9 */
    /* VT_BSTR [8] */
    /* The system path to the exported Excel documents. */
    var $ExcelDocsPath;

    /* DISPID=10 */
    /* VT_BSTR [8] */
    /* The user name used for establishing connection to the system. */
    var $UserName;


    /* DISPID=11 */
    /* VT_BSTR [8] */
    /* The password used for establishing connection to the system. */
    var $Password;


    /* DISPID=12 */
    /* VT_BOOL [11] */
    /* Use this property to find out about connection status. */
    var $Connected;

    /* DISPID=13 */
    /* VT_BSTR [8] */
    /* The system path to the Attachments. */
    var $AttachMentPath;

    /* DISPID=14 */
    /* VT_DISPATCH [9] */
    /**
     * @param $Object
     * @return mixed
     */
    function GetBusinessObject(
        /* ? [29]  */ $Object
    )
    {
        /* Get a new initialized business object. */
    }
    /* DISPID=15 */
    /* VT_DISPATCH [9] */
    function GetBusinessObjectFromXML(
        /* VT_BSTR [8] [in] */ $FileName,
        /* VT_I4 [3] [in] */ $Index
    )
    {
        /* Get a saved business object. */
    }
    /* DISPID=17 */
    function Disconnect(
    )
    {
        /* Use this function to dissconnect from the server */
    }
    /* DISPID=18 */
    /* ? [29] */
    /* property language */
    /**
     * @var $language BoSuppLangs::const
     */
    var $language;


    /* DISPID=19 */
    function GetLastError(
        /* VT_PTR [26] [out] --> VT_I4 [3]  */ &$errCode,
        /* VT_PTR [26] [out] --> VT_BSTR [8]  */ &$errMsg
    )
    {
        /* Use this function for establishing connection to the database. */
    }
    /* DISPID=20 */
    function StartTransaction(
    )
    {
        /* method StartTransaction */
    }
    /* DISPID=21 */
    function EndTransaction(
        /* ? [29]  */ $endType
    )
    {
        /* method EndTransaction */
    }
    /* DISPID=22 */
    function GetNewObjectCode(
        /* VT_PTR [26] [out] --> VT_BSTR [8]  */ &$ObjectCode
    )
    {
        /* method GetNewObjectCode */
    }
    /* DISPID=23 */
    /* VT_BOOL [11] */
    /* property UseTrusted */
    var $UseTrusted;


    /* DISPID=24 */
    /* VT_PTR [26] */
    function GetCompanyList(
    )
    {
        /* method GetCompanyList */
    }
    /* DISPID=25 */
    /* ? [29] */
    function GetXMLobjectType(
        /* VT_BSTR [8] [in] */ $FileName,
        /* VT_I4 [3] [in] */ $Index
    )
    {
        /* method GetXMLobjectType */
    }
    /* DISPID=26 */
    /* VT_I4 [3] */
    function GetXMLelementCount(
        /* VT_BSTR [8] [in] */ $FileName
    )
    {
        /* method GetXMLelementCount */
    }
    /* DISPID=27 */
    /* VT_PTR [26] */
    /* property User Tables */
    var $UserTables;

    /* DISPID=28 */
    /* VT_BOOL [11] */
    /* property XMLAsString */
    var $XMLAsString;


    /* DISPID=29 */
    /* VT_BSTR [8] */
    function GetBusinessObjectXmlSchema(
        /* ? [29] [in] */ $Object
    )
    {
        /* method GetBusinessObjectXmlSchema */
    }
    /* DISPID=30 */
    /* ? [29] */
    /* property XmlExportType */
    var $XmlExportType;


    /* DISPID=31 */
    /* VT_BOOL [11] */
    /* property InTransaction */
    var $InTransaction;

    /* DISPID=32 */
    /* VT_BSTR [8] */
    /* property DbUserName */
    var $DbUserName;


    /* DISPID=33 */
    /* VT_BSTR [8] */
    /* property DbPassword */
    var $DbPassword;


    /* DISPID=34 */
    /* VT_BSTR [8] */
    function GetContextCookie(
    )
    {
        /* method GetContextCookie */
    }
    /* DISPID=35 */
    /* VT_I4 [3] */
    function SetSboLoginContext(
        /* VT_BSTR [8] [in] */ $conStr
    )
    {
        /* method SetSboLoginContext */
    }
    /* DISPID=36 */
    /* ? [29] */
    /* property DbServerType */
    var $DbServerType;


    /* DISPID=37 */
    /* VT_BSTR [8] */
    /* property AddonIdentifier */
    var $AddonIdentifier;


    /* DISPID=38 */
    /* VT_BSTR [8] */
    /* property LicenseServer */
    var $LicenseServer;

    /* DISPID=39 */
    /* VT_BSTR [8] */
    /**
     * @return string
     */
    function GetLastErrorDescription(
    )
    {
        /* method GetLastErrorDescription */
    }
    /* DISPID=40 */
    /* VT_I4 [3] */
    function GetLastErrorCode(
    )
    {
        /* method GetLastErrorCode */
    }
    /* DISPID=41 */
    /* VT_BSTR [8] */
    /**
     * @return int
     */
    function GetNewObjectKey(
    )
    {
        /* method GetNewObjectKey */
    }
    /* DISPID=42 */
    /* VT_I4 [3] */
    /* Version */
    var $Version;

    /* DISPID=43 */
    /* VT_I4 [3] */
    /* MinimalSupportedVersion */
    var $MinimalSupportedVersion;

    /* DISPID=44 */
    /* VT_UNKNOWN [13] */
    /* property DTCTransactionObject */
    var $DTCTransactionObject;

    /* DISPID=45 */
    /* VT_BOOL [11] */
    function IsDTCTransactionObjectSet(
    )
    {
        /* IsDTCTransactionObjectSet */
    }
    /* DISPID=46 */
    /* VT_PTR [26] */
    function GetCompanyService(
    )
    {
        /* GetCompanyService */
    }
    /* DISPID=47 */
    /* VT_I4 [3] */
    function ChangePassword(
        /* VT_BSTR [8] [in] */ $NewPassword
    )
    {
        /* ChangePassword */
    }
    /* DISPID=48 */
    /* VT_I4 [3] */
    function InvalidateCache(
        /* VT_BSTR [8] [in] */ $TableName
    )
    {
        /* InvalidateCache */
    }
    /* DISPID=49 */
    /* property Application */
    var $Application;

    /* DISPID=50 */
    /* VT_PTR [26] */
    function GetRegisteredServersList(
    )
    {
        /* method GetRegisteredServersList */
    }
    /* DISPID=51 */
    /* ? [29] */
    function AuthenticateUser(
        /* VT_BSTR [8] [in] */ $bstrUserName,
        /* VT_BSTR [8] [in] */ $bstrPassword
    )
    {
        /* method AuthenticateUser */
    }
    /* DISPID=52 */
    /* VT_BSTR [8] */
    function GetNewObjectType(
    )
    {
        /* method GetNewObjectType */
    }
    /* DISPID=53 */
    /* VT_BSTR [8] */
    function GetCompanyTime(
    )
    {
        /* Get Company Time */
    }
    /* DISPID=54 */
    /* VT_DATE [7] */
    function GetCompanyDate(
    )
    {
        /* Get Company DATE */
    }
}
