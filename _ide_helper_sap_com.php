<?php

/**
 * Created by Litiano.
 * User: E-Commerce 2
 * Date: 25/11/2016
 * Time: 13:16
 */

/**
 * IDE-HeLPER para classe COM.
 */

if(!defined("CLSCTX_INPROC_SERVER")){ define("CLSCTX_INPROC_SERVER", 1);}
if(!defined("CLSCTX_INPROC_HANDLER")){ define("CLSCTX_INPROC_HANDLER", 2);}
if(!defined("CLSCTX_LOCAL_SERVER")){ define("CLSCTX_LOCAL_SERVER", 4);}
if(!defined("CLSCTX_REMOTE_SERVER")){ define("CLSCTX_REMOTE_SERVER", 16);}
if(!defined("CLSCTX_SERVER")){ define("CLSCTX_SERVER", 21);}
if(!defined("CLSCTX_ALL")){ define("CLSCTX_ALL", 23);}
if(!defined("VT_NULL")){ define("VT_NULL", 1);}
if(!defined("VT_EMPTY")){ define("VT_EMPTY", 0);}
if(!defined("VT_UI1")){ define("VT_UI1", 17);}
if(!defined("VT_I1")){ define("VT_I1", 16);}
if(!defined("VT_UI2")){ define("VT_UI2", 18);}
if(!defined("VT_I2")){ define("VT_I2", 2);}
if(!defined("VT_UI4")){ define("VT_UI4", 19);}
if(!defined("VT_I4")){ define("VT_I4", 3);}
if(!defined("VT_R4")){ define("VT_R4", 4);}
if(!defined("VT_R8")){ define("VT_R8", 5);}
if(!defined("VT_BOOL")){ define("VT_BOOL", 11);}
if(!defined("VT_ERROR")){ define("VT_ERROR", 10);}
if(!defined("VT_CY")){ define("VT_CY", 6);}
if(!defined("VT_DATE")){ define("VT_DATE", 7);}
if(!defined("VT_BSTR")){ define("VT_BSTR", 8);}
if(!defined("VT_DECIMAL")){ define("VT_DECIMAL", 14);}
if(!defined("VT_UNKNOWN")){ define("VT_UNKNOWN", 13);}
if(!defined("VT_DISPATCH")){ define("VT_DISPATCH", 9);}
if(!defined("VT_VARIANT")){ define("VT_VARIANT", 12);}
if(!defined("VT_INT")){ define("VT_INT", 22);}
if(!defined("VT_UINT")){ define("VT_UINT", 23);}
if(!defined("VT_ARRAY")){ define("VT_ARRAY", 8192);}
if(!defined("VT_BYREF")){ define("VT_BYREF", 16384);}
if(!defined("CP_ACP")){ define("CP_ACP", 0);}
if(!defined("CP_MACCP")){ define("CP_MACCP", 2);}
if(!defined("CP_OEMCP")){ define("CP_OEMCP", 1);}
if(!defined("CP_UTF7")){ define("CP_UTF7", 65000);}
if(!defined("CP_UTF8")){ define("CP_UTF8", 65001);}
if(!defined("CP_SYMBOL")){ define("CP_SYMBOL", 42);}
if(!defined("CP_THREAD_ACP")){ define("CP_THREAD_ACP", 3);}
if(!defined("VARCMP_LT")){ define("VARCMP_LT", 0);}
if(!defined("VARCMP_EQ")){ define("VARCMP_EQ", 1);}
if(!defined("VARCMP_GT")){ define("VARCMP_GT", 2);}
if(!defined("VARCMP_NULL")){ define("VARCMP_NULL", 3);}
if(!defined("NORM_IGNORECASE")){ define("NORM_IGNORECASE", 1);}
if(!defined("NORM_IGNORENONSPACE")){ define("NORM_IGNORENONSPACE", 2);}
if(!defined("NORM_IGNORESYMBOLS")){ define("NORM_IGNORESYMBOLS", 4);}
if(!defined("NORM_IGNOREWIDTH")){ define("NORM_IGNOREWIDTH", 131072);}
if(!defined("NORM_IGNOREKANATYPE")){ define("NORM_IGNOREKANATYPE", 65536);}
if(!defined("DISP_E_DIVBYZERO")){ define("DISP_E_DIVBYZERO", -1);}
if(!defined("DISP_E_OVERFLOW")){ define("DISP_E_OVERFLOW", -1);}
if(!defined("DISP_E_BADINDEX")){ define("DISP_E_BADINDEX", -1);}
if(!defined("MK_E_UNAVAILABLE")){ define("MK_E_UNAVAILABLE", -1);}

if(!function_exists("com_print_typeinfo")){
    function com_print_typeinfo(COM $com, string $dispinterface = null, $wantsink = false){}
}

class COM
{
    public function __construct(string $module_name, mixed $server_name = null, int $codepage = null, string $typelib = null){}
}

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

class IDocuments { /* GUID={A6DA575B-E105-4585-9F4B-50CC4044EEDD} */
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
    function Add(
    )
    {
        /* Add */
    }
    /* DISPID=2 */
    /* VT_PTR [26] */
    /* Invoke the lines object */
    var $Lines;

    /* DISPID=3 */
    /* VT_I4 [3] */
    /* Doc num */
    var $DocNum;

    /* DISPID=3 */
    /* Doc num */
    var $DocNum;

    /* DISPID=4 */
    /* ? [29] */
    /* Doc type */
    var $DocType;

    /* DISPID=4 */
    /* Doc type */
    var $DocType;

    /* DISPID=5 */
    /* ? [29] */
    /* Hand Written */
    var $HandWritten;

    /* DISPID=5 */
    /* Hand Written */
    var $HandWritten;

    /* DISPID=6 */
    /* ? [29] */
    /* Printed */
    var $Printed;

    /* DISPID=7 */
    /* VT_DATE [7] */
    /* Doc date */
    var $DocDate;

    /* DISPID=7 */
    /* Doc date */
    var $DocDate;

    /* DISPID=8 */
    /* VT_DATE [7] */
    /* Doc due date */
    var $DocDueDate;

    /* DISPID=8 */
    /* Doc due date */
    var $DocDueDate;

    /* DISPID=9 */
    /* VT_BSTR [8] */
    /* Card code */
    var $CardCode;

    /* DISPID=9 */
    /* Card code */
    var $CardCode;

    /* DISPID=10 */
    /* VT_BSTR [8] */
    /* Card name */
    var $CardName;

    /* DISPID=10 */
    /* Card name */
    var $CardName;

    /* DISPID=11 */
    /* VT_BSTR [8] */
    /* Address */
    var $Address;

    /* DISPID=11 */
    /* Address */
    var $Address;

    /* DISPID=12 */
    /* VT_BSTR [8] */
    /* Num at card */
    var $NumAtCard;

    /* DISPID=12 */
    /* Num at card */
    var $NumAtCard;

    /* DISPID=13 */
    /* VT_BSTR [8] */
    /* Doc currency */
    var $DocCurrency;

    /* DISPID=13 */
    /* Doc currency */
    var $DocCurrency;

    /* DISPID=14 */
    /* VT_R8 [5] */
    /* Doc rate */
    var $DocRate;

    /* DISPID=14 */
    /* Doc rate */
    var $DocRate;

    /* DISPID=15 */
    /* VT_R8 [5] */
    /* Doc total */
    var $DocTotal;

    /* DISPID=15 */
    /* Doc total */
    var $DocTotal;

    /* DISPID=16 */
    /* VT_BSTR [8] */
    /* Referance 1 */
    var $Reference1;

    /* DISPID=16 */
    /* Referance 1 */
    var $Reference1;

    /* DISPID=17 */
    /* VT_BSTR [8] */
    /* Referance 2 */
    var $Reference2;

    /* DISPID=17 */
    /* Referance 2 */
    var $Reference2;

    /* DISPID=18 */
    /* VT_BSTR [8] */
    /* Comments */
    var $Comments;

    /* DISPID=18 */
    /* Comments */
    var $Comments;

    /* DISPID=19 */
    /* VT_BSTR [8] */
    /* Jurnal memo */
    var $JournalMemo;

    /* DISPID=19 */
    /* Jurnal memo */
    var $JournalMemo;

    /* DISPID=20 */
    /* VT_I4 [3] */
    /* Payment group code */
    var $PaymentGroupCode;

    /* DISPID=20 */
    /* Payment group code */
    var $PaymentGroupCode;

    /* DISPID=21 */
    /* VT_DATE [7] */
    /* Doc time */
    var $DocTime;

    /* DISPID=21 */
    /* Doc time */
    var $DocTime;

    /* DISPID=22 */
    /* VT_I4 [3] */
    /* Sales person code */
    var $SalesPersonCode;

    /* DISPID=22 */
    /* Sales person code */
    var $SalesPersonCode;

    /* DISPID=23 */
    /* VT_I4 [3] */
    /* Transportation code */
    var $TransportationCode;

    /* DISPID=23 */
    /* Transportation code */
    var $TransportationCode;

    /* DISPID=25 */
    /* ? [29] */
    /* Confirmed */
    var $Confirmed;

    /* DISPID=25 */
    /* Confirmed */
    var $Confirmed;

    /* DISPID=26 */
    /* VT_I4 [3] */
    /* Import file num */
    var $ImportFileNum;

    /* DISPID=27 */
    /* ? [29] */
    /* Summery type */
    var $SummeryType;

    /* DISPID=27 */
    /* Summery type */
    var $SummeryType;

    /* DISPID=28 */
    /* VT_I4 [3] */
    /* Contact person code */
    var $ContactPersonCode;

    /* DISPID=28 */
    /* Contact person code */
    var $ContactPersonCode;

    /* DISPID=29 */
    /* ? [29] */
    /* Show scn */
    var $ShowSCN;

    /* DISPID=29 */
    /* Show scn */
    var $ShowSCN;

    /* DISPID=30 */
    /* VT_I4 [3] */
    /* Series */
    var $Series;

    /* DISPID=30 */
    /* Series */
    var $Series;

    /* DISPID=31 */
    /* VT_DATE [7] */
    /* Tax date */
    var $TaxDate;

    /* DISPID=31 */
    /* Tax date */
    var $TaxDate;

    /* DISPID=32 */
    /* ? [29] */
    /* Partial supply */
    var $PartialSupply;

    /* DISPID=32 */
    /* Partial supply */
    var $PartialSupply;

    /* DISPID=35 */
    /* VT_BOOL [11] */
    function GetByKey(
        /* VT_I4 [3]  */ $AbsEntry
    )
    {
        /* Get by key */
    }
    /* DISPID=37 */
    /* VT_PTR [26] */
    /* Invoke the user fields object */
    var $UserFields;

    /* DISPID=38 */
    function SaveXML(
        /* VT_PTR [26] [in][out] --> VT_BSTR [8]  */ &$FileName
    )
    {
        /* Save object as XML document */
    }
    /* DISPID=39 */
    /* VT_I4 [3] */
    function Update(
    )
    {
        /* method Update */
    }
    /* DISPID=40 */
    /* ? [29] */
    /* property DocObjectCode */
    var $DocObjectCode;

    /* DISPID=40 */
    /* property DocObjectCode */
    var $DocObjectCode;

    /* DISPID=41 */
    /* VT_BSTR [8] */
    /* property ShipToCode */
    var $ShipToCode;

    /* DISPID=41 */
    /* property ShipToCode */
    var $ShipToCode;

    /* DISPID=42 */
    /* VT_BSTR [8] */
    /* property Indicator */
    var $Indicator;

    /* DISPID=42 */
    /* property Indicator */
    var $Indicator;

    /* DISPID=43 */
    /* VT_BSTR [8] */
    /* property FederalTaxID */
    var $FederalTaxID;

    /* DISPID=43 */
    /* property FederalTaxID */
    var $FederalTaxID;

    /* DISPID=44 */
    /* VT_I4 [3] */
    function Cancel(
    )
    {
        /* method Cancel */
    }
    /* DISPID=45 */
    /* VT_I4 [3] */
    function Close(
    )
    {
        /* method Close */
    }
    /* DISPID=46 */
    /* VT_I4 [3] */
    function Remove(
    )
    {
        /* method Remove */
    }
    /* DISPID=48 */
    /* VT_PTR [26] */
    /* User fields for this object. */
    var $Browser;

    /* DISPID=49 */
    /* VT_R8 [5] */
    /* property DiscountPercent */
    var $DiscountPercent;

    /* DISPID=49 */
    /* property DiscountPercent */
    var $DiscountPercent;

    /* DISPID=50 */
    /* VT_BSTR [8] */
    /* property PaymentReference */
    var $PaymentReference;

    /* DISPID=51 */
    /* VT_I4 [3] */
    /* property DocEntry */
    var $DocEntry;

    /* DISPID=52 */
    /* VT_DATE [7] */
    /* property CreationDate */
    var $CreationDate;

    /* DISPID=53 */
    /* VT_DATE [7] */
    /* property UpdateDate */
    var $UpdateDate;

    /* DISPID=54 */
    /* VT_I4 [3] */
    /* property FinancialPeriod */
    var $FinancialPeriod;

    /* DISPID=55 */
    /* VT_I4 [3] */
    /* property TransNum */
    var $TransNum;

    /* DISPID=56 */
    /* VT_R8 [5] */
    /* property VatSum */
    var $VatSum;

    /* DISPID=57 */
    /* VT_R8 [5] */
    /* property VatSumSys */
    var $VatSumSys;

    /* DISPID=58 */
    /* VT_R8 [5] */
    /* property VatSumFc */
    var $VatSumFc;

    /* DISPID=59 */
    /* ? [29] */
    /* property NetProcedure */
    var $NetProcedure;

    /* DISPID=60 */
    /* VT_R8 [5] */
    /* property DocTotalFc */
    var $DocTotalFc;

    /* DISPID=61 */
    /* VT_R8 [5] */
    /* property DocTotalSys */
    var $DocTotalSys;

    /* DISPID=62 */
    /* VT_I4 [3] */
    /* property Form1099 */
    var $Form1099;

    /* DISPID=62 */
    /* property Form1099 */
    var $Form1099;

    /* DISPID=63 */
    /* VT_BSTR [8] */
    /* property Box1099 */
    var $Box1099;

    /* DISPID=63 */
    /* property Box1099 */
    var $Box1099;

    /* DISPID=64 */
    /* ? [29] */
    /* property RevisionPo */
    var $RevisionPo;

    /* DISPID=64 */
    /* property RevisionPo */
    var $RevisionPo;

    /* DISPID=65 */
    /* VT_DATE [7] */
    /* property RequriedDate */
    var $RequriedDate;

    /* DISPID=65 */
    /* property RequriedDate */
    var $RequriedDate;

    /* DISPID=66 */
    /* VT_DATE [7] */
    /* property CancelDate */
    var $CancelDate;

    /* DISPID=66 */
    /* property CancelDate */
    var $CancelDate;

    /* DISPID=67 */
    /* ? [29] */
    /* property BlockDunning */
    var $BlockDunning;

    /* DISPID=67 */
    /* property BlockDunning */
    var $BlockDunning;

    /* DISPID=68 */
    /* ? [29] */
    /* property Submitted */
    var $Submitted;

    /* DISPID=69 */
    /* VT_I4 [3] */
    /* property Segment */
    var $Segment;

    /* DISPID=70 */
    /* ? [29] */
    /* property PickStatus */
    var $PickStatus;

    /* DISPID=71 */
    /* ? [29] */
    /* property Pick */
    var $Pick;

    /* DISPID=72 */
    /* VT_BSTR [8] */
    /* property PaymentMethod */
    var $PaymentMethod;

    /* DISPID=72 */
    /* property PaymentMethod */
    var $PaymentMethod;

    /* DISPID=73 */
    /* ? [29] */
    /* property PaymentBlock */
    var $PaymentBlock;

    /* DISPID=73 */
    /* property PaymentBlock */
    var $PaymentBlock;

    /* DISPID=74 */
    /* VT_I4 [3] */
    /* property PaymentBlockEntry */
    var $PaymentBlockEntry;

    /* DISPID=74 */
    /* property PaymentBlockEntry */
    var $PaymentBlockEntry;

    /* DISPID=75 */
    /* VT_BSTR [8] */
    /* property CentralBankIndicator */
    var $CentralBankIndicator;

    /* DISPID=75 */
    /* property CentralBankIndicator */
    var $CentralBankIndicator;

    /* DISPID=76 */
    /* ? [29] */
    /* property MaximumCashDiscount */
    var $MaximumCashDiscount;

    /* DISPID=76 */
    /* property MaximumCashDiscount */
    var $MaximumCashDiscount;

    /* DISPID=77 */
    /* ? [29] */
    /* property Reserve */
    var $Reserve;

    /* DISPID=78 */
    /* VT_BSTR [8] */
    /* property Project */
    var $Project;

    /* DISPID=78 */
    /* property Project */
    var $Project;

    /* DISPID=80 */
    /* VT_DATE [7] */
    /* property ExemptionValidityDateFrom */
    var $ExemptionValidityDateFrom;

    /* DISPID=80 */
    /* property ExemptionValidityDateFrom */
    var $ExemptionValidityDateFrom;

    /* DISPID=81 */
    /* VT_DATE [7] */
    /* property ExemptionValidityDateTo */
    var $ExemptionValidityDateTo;

    /* DISPID=81 */
    /* property ExemptionValidityDateTo */
    var $ExemptionValidityDateTo;

    /* DISPID=82 */
    /* ? [29] */
    /* property WareHouseUpdateType */
    var $WareHouseUpdateType;

    /* DISPID=82 */
    /* property WareHouseUpdateType */
    var $WareHouseUpdateType;

    /* DISPID=83 */
    /* VT_PTR [26] */
    /* property Expenses */
    var $Expenses;

    /* DISPID=84 */
    /* ? [29] */
    /* property Rounding */
    var $Rounding;

    /* DISPID=84 */
    /* property Rounding */
    var $Rounding;

    /* DISPID=89 */
    /* VT_BSTR [8] */
    /* property ExternalCorrectedDocNum */
    var $ExternalCorrectedDocNum;

    /* DISPID=89 */
    /* property ExternalCorrectedDocNum */
    var $ExternalCorrectedDocNum;

    /* DISPID=90 */
    /* VT_I4 [3] */
    /* property InternalCorrectedDocNum */
    var $InternalCorrectedDocNum;

    /* DISPID=90 */
    /* property InternalCorrectedDocNum */
    var $InternalCorrectedDocNum;

    /* DISPID=91 */
    /* VT_I4 [3] */
    /* property NextCorrectingDocument */
    var $NextCorrectingDocument;

    /* DISPID=92 */
    /* ? [29] */
    /* property DeferredTax */
    var $DeferredTax;

    /* DISPID=92 */
    /* property DeferredTax */
    var $DeferredTax;

    /* DISPID=93 */
    /* VT_BSTR [8] */
    /* property TaxExemptionLetterNum */
    var $TaxExemptionLetterNum;

    /* DISPID=93 */
    /* property TaxExemptionLetterNum */
    var $TaxExemptionLetterNum;

    /* DISPID=94 */
    /* VT_R8 [5] */
    /* property WTApplied */
    var $WTApplied;

    /* DISPID=95 */
    /* VT_R8 [5] */
    /* property WTAppliedFC */
    var $WTAppliedFC;

    /* DISPID=96 */
    /* ? [29] */
    /* property BillOfExchangeReserved */
    var $BillOfExchangeReserved;

    /* DISPID=97 */
    /* VT_BSTR [8] */
    /* property AgentCode */
    var $AgentCode;

    /* DISPID=97 */
    /* property AgentCode */
    var $AgentCode;

    /* DISPID=98 */
    /* VT_R8 [5] */
    /* property WTAppliedSC */
    var $WTAppliedSC;

    /* DISPID=99 */
    /* VT_R8 [5] */
    /* property TotalEqualizationTax */
    var $TotalEqualizationTax;

    /* DISPID=100 */
    /* VT_R8 [5] */
    /* property TotalEqualizationTaxFC */
    var $TotalEqualizationTaxFC;

    /* DISPID=101 */
    /* VT_R8 [5] */
    /* property TotalEqualizationTaxSC */
    var $TotalEqualizationTaxSC;

    /* DISPID=102 */
    /* VT_I4 [3] */
    /* property NumberOfInstallments */
    var $NumberOfInstallments;

    /* DISPID=102 */
    /* property NumberOfInstallments */
    var $NumberOfInstallments;

    /* DISPID=103 */
    /* ? [29] */
    /* property ApplyTaxOnFirstInstallment */
    var $ApplyTaxOnFirstInstallment;

    /* DISPID=103 */
    /* property ApplyTaxOnFirstInstallment */
    var $ApplyTaxOnFirstInstallment;

    /* DISPID=104 */
    /* VT_R8 [5] */
    /* property WTNonSubjectAmount */
    var $WTNonSubjectAmount;

    /* DISPID=105 */
    /* VT_R8 [5] */
    /* property WTNonSubjectAmountSC */
    var $WTNonSubjectAmountSC;

    /* DISPID=106 */
    /* VT_R8 [5] */
    /* property WTNonSubjectAmountFC */
    var $WTNonSubjectAmountFC;

    /* DISPID=107 */
    /* VT_R8 [5] */
    /* property WTExemptedAmount */
    var $WTExemptedAmount;

    /* DISPID=108 */
    /* VT_R8 [5] */
    /* property WTExemptedAmountSC */
    var $WTExemptedAmountSC;

    /* DISPID=109 */
    /* VT_R8 [5] */
    /* property WTExemptedAmountFC */
    var $WTExemptedAmountFC;

    /* DISPID=110 */
    /* VT_R8 [5] */
    /* property BaseAmountSC */
    var $BaseAmountSC;

    /* DISPID=111 */
    /* VT_R8 [5] */
    /* property BaseAmountFC */
    var $BaseAmountFC;

    /* DISPID=112 */
    /* VT_R8 [5] */
    /* property WTAmountFC */
    var $WTAmountFC;

    /* DISPID=113 */
    /* VT_R8 [5] */
    /* property WTAmountSC */
    var $WTAmountSC;

    /* DISPID=114 */
    /* VT_R8 [5] */
    /* property BaseAmount */
    var $BaseAmount;

    /* DISPID=115 */
    /* VT_R8 [5] */
    /* property WTAmount */
    var $WTAmount;

    /* DISPID=116 */
    /* VT_DATE [7] */
    /* property VatDate */
    var $VatDate;

    /* DISPID=116 */
    /* property VatDate */
    var $VatDate;

    /* DISPID=117 */
    /* VT_BSTR [8] */
    /* property ManualNumber */
    var $ManualNumber;

    /* DISPID=117 */
    /* property ManualNumber */
    var $ManualNumber;

    /* DISPID=118 */
    /* ? [29] */
    /* property UseShpdGoodsAct */
    var $UseShpdGoodsAct;

    /* DISPID=118 */
    /* property UseShpdGoodsAct */
    var $UseShpdGoodsAct;

    /* DISPID=119 */
    /* VT_I4 [3] */
    /* property FolioNumber */
    var $FolioNumber;

    /* DISPID=119 */
    /* property FolioNumber */
    var $FolioNumber;

    /* DISPID=120 */
    /* ? [29] */
    /* property DocumentSubType */
    var $DocumentSubType;

    /* DISPID=120 */
    /* property DocumentSubType */
    var $DocumentSubType;

    /* DISPID=121 */
    /* VT_BSTR [8] */
    /* property BPChannelCode */
    var $BPChannelCode;

    /* DISPID=121 */
    /* property BPChannelCode */
    var $BPChannelCode;

    /* DISPID=122 */
    /* VT_I4 [3] */
    /* property BPChannelContact */
    var $BPChannelContact;

    /* DISPID=122 */
    /* property BPChannelContact */
    var $BPChannelContact;

    /* DISPID=123 */
    /* VT_PTR [26] */
    /* property WithholdingTaxData */
    var $WithholdingTaxData;

    /* DISPID=124 */
    /* VT_BSTR [8] */
    /* property DocObjectCodeEx */
    var $DocObjectCodeEx;

    /* DISPID=124 */
    /* property DocObjectCodeEx */
    var $DocObjectCodeEx;

    /* DISPID=125 */
    /* VT_BSTR [8] */
    /* property Address2 */
    var $Address2;

    /* DISPID=125 */
    /* property Address2 */
    var $Address2;

    /* DISPID=126 */
    /* ? [29] */
    /* property DocumentStatus */
    var $DocumentStatus;

    /* DISPID=127 */
    /* VT_BSTR [8] */
    /* property Period Indicator */
    var $PeriodIndicator;

    /* DISPID=129 */
    /* VT_BSTR [8] */
    /* property Pay to code */
    var $PayToCode;

    /* DISPID=129 */
    /* property Pay to code */
    var $PayToCode;

    /* DISPID=130 */
    /* VT_I4 [3] */
    /* property DocumentsOwner */
    var $DocumentsOwner;

    /* DISPID=130 */
    /* property DocumentsOwner */
    var $DocumentsOwner;

    /* DISPID=131 */
    /* VT_BSTR [8] */
    /* property FolioPrefixString */
    var $FolioPrefixString;

    /* DISPID=131 */
    /* property FolioPrefixString */
    var $FolioPrefixString;

    /* DISPID=132 */
    /* ? [29] */
    /* property IsPayToBank */
    var $IsPayToBank;

    /* DISPID=132 */
    /* property IsPayToBank */
    var $IsPayToBank;

    /* DISPID=133 */
    /* VT_BSTR [8] */
    /* property PayToBankCountry */
    var $PayToBankCountry;

    /* DISPID=133 */
    /* property PayToBankCountry */
    var $PayToBankCountry;

    /* DISPID=134 */
    /* VT_BSTR [8] */
    /* property PayToBankCode */
    var $PayToBankCode;

    /* DISPID=134 */
    /* property PayToBankCode */
    var $PayToBankCode;

    /* DISPID=135 */
    /* VT_BSTR [8] */
    /* property PayToBankAccountNo */
    var $PayToBankAccountNo;

    /* DISPID=135 */
    /* property PayToBankAccountNo */
    var $PayToBankAccountNo;

    /* DISPID=136 */
    /* VT_BSTR [8] */
    /* property PayToBankBranch */
    var $PayToBankBranch;

    /* DISPID=136 */
    /* property PayToBankBranch */
    var $PayToBankBranch;

    /* DISPID=137 */
    /* VT_BSTR [8] */
    function GetAsXML(
    )
    {
        /* Get the object's data in xml format. */
    }
    /* DISPID=138 */
    function SaveToFile(
        /* VT_BSTR [8] [in] */ $FileName
    )
    {
        /* Save the object's data in xml format. */
    }
    /* DISPID=50 */
    /* property PaymentReference */
    var $PaymentReference;

    /* DISPID=139 */
    /* VT_I4 [3] */
    /* property BPL_IDAssignedToInvoice */
    var $BPL_IDAssignedToInvoice;

    /* DISPID=139 */
    /* property BPL_IDAssignedToInvoice */
    var $BPL_IDAssignedToInvoice;

    /* DISPID=140 */
    /* VT_DATE [7] */
    /* property ClosingDate */
    var $ClosingDate;

    /* DISPID=140 */
    /* property ClosingDate */
    var $ClosingDate;

    /* DISPID=141 */
    /* VT_I4 [3] */
    /* property SequenceSerial */
    var $SequenceSerial;

    /* DISPID=141 */
    /* property SequenceSerial */
    var $SequenceSerial;

    /* DISPID=142 */
    /* VT_I4 [3] */
    /* property SequenceCode */
    var $SequenceCode;

    /* DISPID=142 */
    /* property SequenceCode */
    var $SequenceCode;

    /* DISPID=143 */
    /* VT_BSTR [8] */
    /* property SeriesString */
    var $SeriesString;

    /* DISPID=143 */
    /* property SeriesString */
    var $SeriesString;

    /* DISPID=144 */
    /* VT_BSTR [8] */
    /* property SubSeriesString */
    var $SubSeriesString;

    /* DISPID=144 */
    /* property SubSeriesString */
    var $SubSeriesString;

    /* DISPID=145 */
    /* VT_BSTR [8] */
    /* property SequenceModel */
    var $SequenceModel;

    /* DISPID=145 */
    /* property SequenceModel */
    var $SequenceModel;

    /* DISPID=146 */
    /* VT_PTR [26] */
    /* property TaxExtension */
    var $TaxExtension;

    /* DISPID=147 */
    /* VT_R8 [5] */
    /* property DownPayment */
    var $DownPayment;

    /* DISPID=147 */
    /* property DownPayment */
    var $DownPayment;

    /* DISPID=148 */
    /* ? [29] */
    /* property ReserveInvoice */
    var $ReserveInvoice;

    /* DISPID=149 */
    /* VT_I4 [3] */
    /* property LanguageCode */
    var $LanguageCode;

    /* DISPID=149 */
    /* property LanguageCode */
    var $LanguageCode;

    /* DISPID=150 */
    /* VT_BSTR [8] */
    /* property TrackingNumber */
    var $TrackingNumber;

    /* DISPID=150 */
    /* property TrackingNumber */
    var $TrackingNumber;

    /* DISPID=151 */
    /* VT_BSTR [8] */
    /* property PickRemark */
    var $PickRemark;

    /* DISPID=151 */
    /* property PickRemark */
    var $PickRemark;

    /* DISPID=26 */
    /* Import file num */
    var $ImportFileNum;

    /* DISPID=152 */
    /* ? [29] */
    /* property UseCorrectionVATGroup */
    var $UseCorrectionVATGroup;

    /* DISPID=152 */
    /* property UseCorrectionVATGroup */
    var $UseCorrectionVATGroup;

    /* DISPID=153 */
    /* VT_R8 [5] */
    /* property TotalDiscount */
    var $TotalDiscount;

    /* DISPID=71 */
    /* property Pick */
    var $Pick;

    /* DISPID=154 */
    /* VT_R8 [5] */
    /* property VatPercent */
    var $VatPercent;

    /* DISPID=154 */
    /* property VatPercent */
    var $VatPercent;

    /* DISPID=155 */
    /* VT_PTR [26] */
    /* property Packages */
    var $Packages;

    /* DISPID=156 */
    /* VT_PTR [26] */
    /* property Installments */
    var $Installments;

    /* DISPID=157 */
    /* VT_PTR [26] */
    /* property SpecialLines */
    var $SpecialLines;

    /* DISPID=148 */
    /* property ReserveInvoice */
    var $ReserveInvoice;

    /* DISPID=158 */
    /* VT_R8 [5] */
    /* property DownPaymentAmount */
    var $DownPaymentAmount;

    /* DISPID=159 */
    /* VT_R8 [5] */
    /* property DownPaymentPercentage */
    var $DownPaymentPercentage;

    /* DISPID=159 */
    /* property DownPaymentPercentage */
    var $DownPaymentPercentage;

    /* DISPID=160 */
    /* ? [29] */
    /* property DownPaymentType */
    var $DownPaymentType;

    /* DISPID=160 */
    /* property DownPaymentType */
    var $DownPaymentType;

    /* DISPID=161 */
    /* VT_PTR [26] */
    /* property DownPaymentsToDraw */
    var $DownPaymentsToDraw;

    /* DISPID=162 */
    /* VT_R8 [5] */
    /* property DownPaymentAmountFC */
    var $DownPaymentAmountFC;

    /* DISPID=163 */
    /* VT_R8 [5] */
    /* property DownPaymentAmountSC */
    var $DownPaymentAmountSC;

    /* DISPID=158 */
    /* property DownPaymentAmount */
    var $DownPaymentAmount;

    /* DISPID=162 */
    /* property DownPaymentAmountFC */
    var $DownPaymentAmountFC;

    /* DISPID=163 */
    /* property DownPaymentAmountSC */
    var $DownPaymentAmountSC;

    /* DISPID=164 */
    /* VT_BSTR [8] */
    /* property OpeningRemarks */
    var $OpeningRemarks;

    /* DISPID=164 */
    /* property OpeningRemarks */
    var $OpeningRemarks;

    /* DISPID=165 */
    /* VT_BSTR [8] */
    /* property ClosingRemarks */
    var $ClosingRemarks;

    /* DISPID=165 */
    /* property ClosingRemarks */
    var $ClosingRemarks;

    /* DISPID=166 */
    /* VT_R8 [5] */
    /* property RoundingDiffAmount */
    var $RoundingDiffAmount;

    /* DISPID=166 */
    /* property RoundingDiffAmount */
    var $RoundingDiffAmount;

    /* DISPID=167 */
    /* VT_R8 [5] */
    /* property RoundingDiffAmountFC */
    var $RoundingDiffAmountFC;

    /* DISPID=168 */
    /* VT_R8 [5] */
    /* property RoundingDiffAmountSC */
    var $RoundingDiffAmountSC;

    /* DISPID=169 */
    /* ? [29] */
    /* property Cancelled */
    var $Cancelled;

    /* DISPID=171 */
    /* VT_I4 [3] */
    function Reopen(
    )
    {
        /* method Reopen */
    }
    /* DISPID=170 */
    /* ? [29] */
    /* property InsuranceOperation347 */
    var $InsuranceOperation347;

    /* DISPID=170 */
    /* property InsuranceOperation347 */
    var $InsuranceOperation347;

    /* DISPID=60 */
    /* property DocTotalFc */
    var $DocTotalFc;

    /* DISPID=6 */
    /* Printed */
    var $Printed;

    /* DISPID=172 */
    /* VT_R8 [5] */
    /* property ServiceGrossProfitPercent */
    var $ServiceGrossProfitPercent;

    /* DISPID=172 */
    /* property ServiceGrossProfitPercent */
    var $ServiceGrossProfitPercent;

    /* DISPID=173 */
    /* VT_PTR [26] */
    /* property AddressExtension */
    var $AddressExtension;

    /* DISPID=174 */
    /* VT_BSTR [8] */
    /* property ControlAccount */
    var $ControlAccount;

    /* DISPID=174 */
    /* property ControlAccount */
    var $ControlAccount;

    /* DISPID=175 */
    /* ? [29] */
    /* property ArchiveNonremovableSalesQuotation */
    var $ArchiveNonremovableSalesQuotation;

    /* DISPID=175 */
    /* property ArchiveNonremovableSalesQuotation */
    var $ArchiveNonremovableSalesQuotation;

    /* DISPID=176 */
    /* VT_I4 [3] */
    /* property GTSChecker */
    var $GTSChecker;

    /* DISPID=176 */
    /* property GTSChecker */
    var $GTSChecker;

    /* DISPID=177 */
    /* VT_I4 [3] */
    /* property GTSPayee */
    var $GTSPayee;

    /* DISPID=177 */
    /* property GTSPayee */
    var $GTSPayee;

    /* DISPID=178 */
    /* VT_I4 [3] */
    /* property ExtraMonth */
    var $ExtraMonth;

    /* DISPID=178 */
    /* property ExtraMonth */
    var $ExtraMonth;

    /* DISPID=179 */
    /* VT_I4 [3] */
    /* property ExtraDays */
    var $ExtraDays;

    /* DISPID=179 */
    /* property ExtraDays */
    var $ExtraDays;

    /* DISPID=180 */
    /* VT_I4 [3] */
    /* property CashDiscountDateOffset */
    var $CashDiscountDateOffset;

    /* DISPID=180 */
    /* property CashDiscountDateOffset */
    var $CashDiscountDateOffset;

    /* DISPID=181 */
    /* ? [29] */
    /* property StartFrom */
    var $StartFrom;

    /* DISPID=181 */
    /* property StartFrom */
    var $StartFrom;

    /* DISPID=182 */
    /* ? [29] */
    /* property NTSApproved */
    var $NTSApproved;

    /* DISPID=182 */
    /* property NTSApproved */
    var $NTSApproved;

    /* DISPID=183 */
    /* VT_I4 [3] */
    /* property ETaxWebSite */
    var $ETaxWebSite;

    /* DISPID=183 */
    /* property ETaxWebSite */
    var $ETaxWebSite;

    /* DISPID=184 */
    /* VT_BSTR [8] */
    /* property ETaxNumber */
    var $ETaxNumber;

    /* DISPID=184 */
    /* property ETaxNumber */
    var $ETaxNumber;

    /* DISPID=185 */
    /* VT_BSTR [8] */
    /* property NTSApprovedNumber */
    var $NTSApprovedNumber;

    /* DISPID=185 */
    /* property NTSApprovedNumber */
    var $NTSApprovedNumber;

    /* DISPID=186 */
    /* VT_BSTR [8] */
    /* property SignatureInputMessage */
    var $SignatureInputMessage;

    /* DISPID=187 */
    /* VT_BSTR [8] */
    /* property SignatureDigest */
    var $SignatureDigest;

    /* DISPID=188 */
    /* VT_BSTR [8] */
    /* property CertificationNumber */
    var $CertificationNumber;

    /* DISPID=189 */
    /* VT_I4 [3] */
    /* property PrivateKeyVersion */
    var $PrivateKeyVersion;

    /* DISPID=190 */
    /* VT_I4 [3] */
    /* property GroupSeries */
    var $GroupSeries;

    /* DISPID=190 */
    /* property GroupSeries */
    var $GroupSeries;

    /* DISPID=191 */
    /* VT_I4 [3] */
    /* property GroupNumber */
    var $GroupNumber;

    /* DISPID=191 */
    /* property GroupNumber */
    var $GroupNumber;

    /* DISPID=192 */
    /* ? [29] */
    /* property GroupHandWritten */
    var $GroupHandWritten;

    /* DISPID=192 */
    /* property GroupHandWritten */
    var $GroupHandWritten;

    /* DISPID=193 */
    /* ? [29] */
    /* property ReopenOriginalDocument */
    var $ReopenOriginalDocument;

    /* DISPID=193 */
    /* property ReopenOriginalDocument */
    var $ReopenOriginalDocument;

    /* DISPID=194 */
    /* ? [29] */
    /* property ReopenManuallyClosedOrCanceledDocument */
    var $ReopenManuallyClosedOrCanceledDocument;

    /* DISPID=194 */
    /* property ReopenManuallyClosedOrCanceledDocument */
    var $ReopenManuallyClosedOrCanceledDocument;

    /* DISPID=195 */
    /* ? [29] */
    /* property EDocGenerationType */
    var $EDocGenerationType;

    /* DISPID=195 */
    /* property EDocGenerationType */
    var $EDocGenerationType;

    /* DISPID=196 */
    /* VT_I4 [3] */
    /* property EDocSeries */
    var $EDocSeries;

    /* DISPID=196 */
    /* property EDocSeries */
    var $EDocSeries;

    /* DISPID=197 */
    /* VT_BSTR [8] */
    /* property EDocNum */
    var $EDocNum;

    /* DISPID=198 */
    /* VT_I4 [3] */
    /* property EDocExportFormat */
    var $EDocExportFormat;

    /* DISPID=198 */
    /* property EDocExportFormat */
    var $EDocExportFormat;

    /* DISPID=199 */
    /* ? [29] */
    /* property DownPaymentStatus */
    var $DownPaymentStatus;

    /* DISPID=199 */
    /* property DownPaymentStatus */
    var $DownPaymentStatus;

    /* DISPID=200 */
    /* ? [29] */
    /* property CreateOnlineQuotation */
    var $CreateOnlineQuotation;

    /* DISPID=200 */
    /* property CreateOnlineQuotation */
    var $CreateOnlineQuotation;

    /* DISPID=201 */
    /* VT_BSTR [8] */
    /* property POSEquipmentNumber */
    var $POSEquipmentNumber;

    /* DISPID=201 */
    /* property POSEquipmentNumber */
    var $POSEquipmentNumber;

    /* DISPID=202 */
    /* VT_BSTR [8] */
    /* property POSManufacturerSerialNumber */
    var $POSManufacturerSerialNumber;

    /* DISPID=202 */
    /* property POSManufacturerSerialNumber */
    var $POSManufacturerSerialNumber;

    /* DISPID=203 */
    /* VT_I4 [3] */
    /* property POSCashierNumber */
    var $POSCashierNumber;

    /* DISPID=203 */
    /* property POSCashierNumber */
    var $POSCashierNumber;

    /* DISPID=204 */
    /* ? [29] */
    /* property ApplyCurrentVATRatesForDownPaymentsToDraw */
    var $ApplyCurrentVATRatesForDownPaymentsToDraw;

    /* DISPID=204 */
    /* property ApplyCurrentVATRatesForDownPaymentsToDraw */
    var $ApplyCurrentVATRatesForDownPaymentsToDraw;

    /* DISPID=210 */
    /* ? [29] */
    /* property ClosingOption */
    var $ClosingOption;

    /* DISPID=210 */
    /* property ClosingOption */
    var $ClosingOption;

    /* DISPID=211 */
    /* VT_DATE [7] */
    /* property SpecifiedClosingDate */
    var $SpecifiedClosingDate;

    /* DISPID=211 */
    /* property SpecifiedClosingDate */
    var $SpecifiedClosingDate;

    /* DISPID=212 */
    /* ? [29] */
    /* property OpenForLandedCosts */
    var $OpenForLandedCosts;

    /* DISPID=212 */
    /* property OpenForLandedCosts */
    var $OpenForLandedCosts;

    /* DISPID=213 */
    /* VT_I4 [3] */
    function SaveDraftToDocument(
    )
    {
        /* method SaveDraftToDocument */
    }
    /* DISPID=214 */
    /* VT_I4 [3] */
    function GetApprovalTemplates(
    )
    {
        /* method GetApprovalTemplates */
    }
    /* DISPID=215 */
    /* VT_PTR [26] */
    /* property Document_ApprovalRequests */
    var $Document_ApprovalRequests;

    /* DISPID=216 */
    /* ? [29] */
    /* property AuthorizationStatus */
    var $AuthorizationStatus;

    /* DISPID=217 */
    /* VT_I4 [3] */
    function UpdateFromXML(
        /* VT_BSTR [8] [in] */ $FileName
    )
    {
        /* method UpdateFromXML */
    }
    /* DISPID=218 */
    /* VT_R8 [5] */
    /* property TotalDiscountFC */
    var $TotalDiscountFC;

    /* DISPID=219 */
    /* VT_R8 [5] */
    /* property TotalDiscountSC */
    var $TotalDiscountSC;

    /* DISPID=220 */
    /* ? [29] */
    /* property RelevantToGTS */
    var $RelevantToGTS;

    /* DISPID=220 */
    /* property RelevantToGTS */
    var $RelevantToGTS;

    /* DISPID=221 */
    /* ? [29] */
    /* property EDocStatus */
    var $EDocStatus;

    /* DISPID=221 */
    /* property EDocStatus */
    var $EDocStatus;

    /* DISPID=222 */
    /* VT_BSTR [8] */
    /* property EDocErrorCode */
    var $EDocErrorCode;

    /* DISPID=222 */
    /* property EDocErrorCode */
    var $EDocErrorCode;

    /* DISPID=223 */
    /* VT_BSTR [8] */
    /* property EDocErrorMessage */
    var $EDocErrorMessage;

    /* DISPID=223 */
    /* property EDocErrorMessage */
    var $EDocErrorMessage;

    /* DISPID=224 */
    /* VT_BSTR [8] */
    /* property BPLName */
    var $BPLName;

    /* DISPID=225 */
    /* VT_BSTR [8] */
    /* property VATRegNum */
    var $VATRegNum;

    /* DISPID=226 */
    /* VT_I4 [3] */
    /* property AnnualInvoiceDeclarationReference */
    var $AnnualInvoiceDeclarationReference;

    /* DISPID=226 */
    /* property AnnualInvoiceDeclarationReference */
    var $AnnualInvoiceDeclarationReference;

    /* DISPID=227 */
    /* VT_BSTR [8] */
    /* property Supplier */
    var $Supplier;

    /* DISPID=227 */
    /* property Supplier */
    var $Supplier;

    /* DISPID=228 */
    /* VT_I4 [3] */
    /* property Releaser */
    var $Releaser;

    /* DISPID=228 */
    /* property Releaser */
    var $Releaser;

    /* DISPID=229 */
    /* VT_I4 [3] */
    /* property Receiver */
    var $Receiver;

    /* DISPID=229 */
    /* property Receiver */
    var $Receiver;

    /* DISPID=230 */
    /* VT_I4 [3] */
    /* property BlanketAgreementNumber */
    var $BlanketAgreementNumber;

    /* DISPID=230 */
    /* property BlanketAgreementNumber */
    var $BlanketAgreementNumber;

    /* DISPID=231 */
    /* ? [29] */
    /* property IsAlteration */
    var $IsAlteration;

    /* DISPID=231 */
    /* property IsAlteration */
    var $IsAlteration;

}

class IDocument_Lines { /* GUID={248B28DD-1281-4C6C-9780-22D19BA13D1F} */
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
    function Add(
    )
    {
        /* Add */
    }
    /* DISPID=2 */
    /* VT_I4 [3] */
    /* LineNum */
    var $LineNum;

    /* DISPID=3 */
    /* VT_BSTR [8] */
    /* ItemCode */
    var $ItemCode;

    /* DISPID=3 */
    /* ItemCode */
    var $ItemCode;

    /* DISPID=4 */
    /* VT_BSTR [8] */
    /* ItemDescription */
    var $ItemDescription;

    /* DISPID=4 */
    /* ItemDescription */
    var $ItemDescription;

    /* DISPID=5 */
    /* VT_R8 [5] */
    /* Quantity */
    var $Quantity;

    /* DISPID=5 */
    /* Quantity */
    var $Quantity;

    /* DISPID=6 */
    /* VT_DATE [7] */
    /* ShipDate */
    var $ShipDate;

    /* DISPID=6 */
    /* ShipDate */
    var $ShipDate;

    /* DISPID=7 */
    /* VT_R8 [5] */
    /* Price */
    var $Price;

    /* DISPID=7 */
    /* Price */
    var $Price;

    /* DISPID=8 */
    /* VT_R8 [5] */
    /* PriceAfter */
    var $PriceAfterVAT;

    /* DISPID=8 */
    /* PriceAfter */
    var $PriceAfterVAT;

    /* DISPID=9 */
    /* VT_BSTR [8] */
    /* Currency */
    var $Currency;

    /* DISPID=9 */
    /* Currency */
    var $Currency;

    /* DISPID=10 */
    /* VT_R8 [5] */
    /* Rate */
    var $Rate;

    /* DISPID=10 */
    /* Rate */
    var $Rate;

    /* DISPID=11 */
    /* VT_R8 [5] */
    /* Discount percent */
    var $DiscountPercent;

    /* DISPID=11 */
    /* Discount percent */
    var $DiscountPercent;

    /* DISPID=12 */
    /* VT_BSTR [8] */
    /* Vendor num */
    var $VendorNum;

    /* DISPID=12 */
    /* Vendor num */
    var $VendorNum;

    /* DISPID=13 */
    /* VT_BSTR [8] */
    /* Serial num */
    var $SerialNum;

    /* DISPID=13 */
    /* Serial num */
    var $SerialNum;

    /* DISPID=14 */
    /* VT_BSTR [8] */
    /* Warehouse */
    var $WarehouseCode;

    /* DISPID=14 */
    /* Warehouse */
    var $WarehouseCode;

    /* DISPID=15 */
    /* VT_I4 [3] */
    /* Sales Person code */
    var $SalesPersonCode;

    /* DISPID=15 */
    /* Sales Person code */
    var $SalesPersonCode;

    /* DISPID=16 */
    /* VT_R8 [5] */
    /* Commision percent */
    var $CommisionPercent;

    /* DISPID=16 */
    /* Commision percent */
    var $CommisionPercent;

    /* DISPID=17 */
    /* ? [29] */
    /* Tree type */
    var $TreeType;

    /* DISPID=18 */
    /* VT_BSTR [8] */
    /* Account code */
    var $AccountCode;

    /* DISPID=18 */
    /* Account code */
    var $AccountCode;

    /* DISPID=19 */
    /* ? [29] */
    /* Use base units */
    var $UseBaseUnits;

    /* DISPID=19 */
    /* Use base units */
    var $UseBaseUnits;

    /* DISPID=20 */
    /* VT_BSTR [8] */
    /* Supplier catalog number */
    var $SupplierCatNum;

    /* DISPID=20 */
    /* Supplier catalog number */
    var $SupplierCatNum;

    /* DISPID=21 */
    /* VT_BSTR [8] */
    /* Costing code */
    var $CostingCode;

    /* DISPID=21 */
    /* Costing code */
    var $CostingCode;

    /* DISPID=22 */
    /* VT_BSTR [8] */
    /* Project code */
    var $ProjectCode;

    /* DISPID=22 */
    /* Project code */
    var $ProjectCode;

    /* DISPID=23 */
    /* VT_BSTR [8] */
    /* Bar code */
    var $BarCode;

    /* DISPID=23 */
    /* Bar code */
    var $BarCode;

    /* DISPID=24 */
    /* VT_BSTR [8] */
    /* Vat Group */
    var $VatGroup;

    /* DISPID=24 */
    /* Vat Group */
    var $VatGroup;

    /* DISPID=25 */
    /* VT_R8 [5] */
    /* Height 1 */
    var $Height1;

    /* DISPID=25 */
    /* Height 1 */
    var $Height1;

    /* DISPID=26 */
    /* VT_I4 [3] */
    /* Height 1 unit */
    var $Hight1Unit;

    /* DISPID=26 */
    /* Height 1 unit */
    var $Hight1Unit;

    /* DISPID=27 */
    /* VT_R8 [5] */
    /* Height 2 */
    var $Height2;

    /* DISPID=27 */
    /* Height 2 */
    var $Height2;

    /* DISPID=28 */
    /* VT_I4 [3] */
    /* Height 2 unit */
    var $Height2Unit;

    /* DISPID=28 */
    /* Height 2 unit */
    var $Height2Unit;

    /* DISPID=29 */
    /* VT_R8 [5] */
    /* Length 1 */
    var $Lengh1;

    /* DISPID=29 */
    /* Length 1 */
    var $Lengh1;

    /* DISPID=30 */
    /* VT_I4 [3] */
    /* Length 1 unit */
    var $Lengh1Unit;

    /* DISPID=30 */
    /* Length 1 unit */
    var $Lengh1Unit;

    /* DISPID=31 */
    /* VT_R8 [5] */
    /* Length 2 */
    var $Lengh2;

    /* DISPID=31 */
    /* Length 2 */
    var $Lengh2;

    /* DISPID=32 */
    /* VT_I4 [3] */
    /* Length 2 unit */
    var $Lengh2Unit;

    /* DISPID=32 */
    /* Length 2 unit */
    var $Lengh2Unit;

    /* DISPID=33 */
    /* VT_R8 [5] */
    /* Weight 1 */
    var $Weight1;

    /* DISPID=33 */
    /* Weight 1 */
    var $Weight1;

    /* DISPID=34 */
    /* VT_I4 [3] */
    /* Weight 1 unit */
    var $Weight1Unit;

    /* DISPID=34 */
    /* Weight 1 unit */
    var $Weight1Unit;

    /* DISPID=35 */
    /* VT_R8 [5] */
    /* Weight 2 */
    var $Weight2;

    /* DISPID=35 */
    /* Weight 2 */
    var $Weight2;

    /* DISPID=36 */
    /* VT_I4 [3] */
    /* Weight 2 unit */
    var $Weight2Unit;

    /* DISPID=36 */
    /* Weight 2 unit */
    var $Weight2Unit;

    /* DISPID=37 */
    /* VT_R8 [5] */
    /* Factor 1 */
    var $Factor1;

    /* DISPID=37 */
    /* Factor 1 */
    var $Factor1;

    /* DISPID=38 */
    /* VT_R8 [5] */
    /* Factor 2 */
    var $Factor2;

    /* DISPID=38 */
    /* Factor 2 */
    var $Factor2;

    /* DISPID=39 */
    /* VT_R8 [5] */
    /* Factor 3 */
    var $Factor3;

    /* DISPID=39 */
    /* Factor 3 */
    var $Factor3;

    /* DISPID=40 */
    /* VT_R8 [5] */
    /* Factor 4 */
    var $Factor4;

    /* DISPID=40 */
    /* Factor 4 */
    var $Factor4;

    /* DISPID=41 */
    /* VT_I4 [3] */
    /* Base type */
    var $BaseType;

    /* DISPID=41 */
    /* Base type */
    var $BaseType;

    /* DISPID=42 */
    /* VT_I4 [3] */
    /* Base entry */
    var $BaseEntry;

    /* DISPID=42 */
    /* Base entry */
    var $BaseEntry;

    /* DISPID=43 */
    /* VT_I4 [3] */
    /* Base line */
    var $BaseLine;

    /* DISPID=43 */
    /* Base line */
    var $BaseLine;

    /* DISPID=45 */
    /* VT_R8 [5] */
    /* Volume */
    var $Volume;

    /* DISPID=45 */
    /* Volume */
    var $Volume;

    /* DISPID=46 */
    /* VT_I4 [3] */
    /* Volume unit */
    var $VolumeUnit;

    /* DISPID=46 */
    /* Volume unit */
    var $VolumeUnit;

    /* DISPID=47 */
    /* VT_I4 [3] */
    /* Lines Count */
    var $Count;

    /* DISPID=48 */
    function SetCurrentLine(
        /* VT_I4 [3]  */ $LineNum
    )
    {
        /* Set the current line */
    }
    /* DISPID=49 */
    /* VT_PTR [26] */
    /* Invoke  the user fields object */
    var $UserFields;

    /* DISPID=50 */
    /* VT_R8 [5] */
    /* property Width1 */
    var $Width1;

    /* DISPID=50 */
    /* property Width1 */
    var $Width1;

    /* DISPID=51 */
    /* VT_I4 [3] */
    /* property Width1Unit */
    var $Width1Unit;

    /* DISPID=51 */
    /* property Width1Unit */
    var $Width1Unit;

    /* DISPID=52 */
    /* VT_R8 [5] */
    /* property Width2 */
    var $Width2;

    /* DISPID=52 */
    /* property Width2 */
    var $Width2;

    /* DISPID=53 */
    /* VT_I4 [3] */
    /* property Width2Unit */
    var $Width2Unit;

    /* DISPID=53 */
    /* property Width2Unit */
    var $Width2Unit;

    /* DISPID=54 */
    /* VT_BSTR [8] */
    /* property Address */
    var $Address;

    /* DISPID=54 */
    /* property Address */
    var $Address;

    /* DISPID=55 */
    /* VT_BSTR [8] */
    /* property TaxCode */
    var $TaxCode;

    /* DISPID=55 */
    /* property TaxCode */
    var $TaxCode;

    /* DISPID=56 */
    /* ? [29] */
    /* property TaxType */
    var $TaxType;

    /* DISPID=56 */
    /* property TaxType */
    var $TaxType;

    /* DISPID=57 */
    /* ? [29] */
    /* property TaxLiable */
    var $TaxLiable;

    /* DISPID=57 */
    /* property TaxLiable */
    var $TaxLiable;

    /* DISPID=58 */
    /* ? [29] */
    /* property PickStatus */
    var $PickStatus;

    /* DISPID=59 */
    /* VT_R8 [5] */
    /* property PickQuantity */
    var $PickQuantity;

    /* DISPID=60 */
    /* VT_I4 [3] */
    /* property PickListIdNumber */
    var $PickListIdNumber;

    /* DISPID=61 */
    /* VT_BSTR [8] */
    /* property OriginalItem */
    var $OriginalItem;

    /* DISPID=62 */
    /* ? [29] */
    /* property BackOrder */
    var $BackOrder;

    /* DISPID=62 */
    /* property BackOrder */
    var $BackOrder;

    /* DISPID=63 */
    /* VT_BSTR [8] */
    /* property FreeText */
    var $FreeText;

    /* DISPID=63 */
    /* property FreeText */
    var $FreeText;

    /* DISPID=64 */
    /* VT_I4 [3] */
    /* property ShippingMethod */
    var $ShippingMethod;

    /* DISPID=64 */
    /* property ShippingMethod */
    var $ShippingMethod;

    /* DISPID=65 */
    /* VT_I4 [3] */
    /* property POTargetNum */
    var $POTargetNum;

    /* DISPID=66 */
    /* VT_BSTR [8] */
    /* property POTargetEntry */
    var $POTargetEntry;

    /* DISPID=67 */
    /* VT_BSTR [8] */
    /* property POTargetRowNum */
    var $POTargetRowNum;

    /* DISPID=68 */
    /* VT_PTR [26] */
    /* property SerialNumbers */
    var $SerialNumbers;

    /* DISPID=69 */
    /* VT_PTR [26] */
    /* property BatchNumbers */
    var $BatchNumbers;

    /* DISPID=70 */
    /* VT_PTR [26] */
    /* property Expenses */
    var $Expenses;

    /* DISPID=71 */
    /* ? [29] */
    /* property CorrectionInvoiceItem */
    var $CorrectionInvoiceItem;

    /* DISPID=71 */
    /* property CorrectionInvoiceItem */
    var $CorrectionInvoiceItem;

    /* DISPID=72 */
    /* VT_R8 [5] */
    /* property CorrInvAmountToStock */
    var $CorrInvAmountToStock;

    /* DISPID=72 */
    /* property CorrInvAmountToStock */
    var $CorrInvAmountToStock;

    /* DISPID=73 */
    /* VT_R8 [5] */
    /* property CorrInvAmountToDiffAcct */
    var $CorrInvAmountToDiffAcct;

    /* DISPID=73 */
    /* property CorrInvAmountToDiffAcct */
    var $CorrInvAmountToDiffAcct;

    /* DISPID=74 */
    /* VT_R8 [5] */
    /* property AppliedTax */
    var $AppliedTax;

    /* DISPID=75 */
    /* VT_R8 [5] */
    /* property AppliedTaxFC */
    var $AppliedTaxFC;

    /* DISPID=76 */
    /* VT_R8 [5] */
    /* property AppliedTaxSC */
    var $AppliedTaxSC;

    /* DISPID=77 */
    /* ? [29] */
    /* property WTLiable */
    var $WTLiable;

    /* DISPID=78 */
    /* VT_R8 [5] */
    /* property EqualizationTaxPercent */
    var $EqualizationTaxPercent;

    /* DISPID=79 */
    /* VT_R8 [5] */
    /* property TotalEqualizationTaxFC */
    var $TotalEqualizationTaxFC;

    /* DISPID=80 */
    /* VT_R8 [5] */
    /* property TotalEqualizationTaxSC */
    var $TotalEqualizationTaxSC;

    /* DISPID=81 */
    /* VT_R8 [5] */
    /* property NetTaxAmount */
    var $NetTaxAmount;

    /* DISPID=82 */
    /* VT_R8 [5] */
    /* property NetTaxAmountFC */
    var $NetTaxAmountFC;

    /* DISPID=83 */
    /* VT_R8 [5] */
    /* property NetTaxAmountSC */
    var $NetTaxAmountSC;

    /* DISPID=84 */
    /* VT_R8 [5] */
    /* property LineTotal */
    var $LineTotal;

    /* DISPID=84 */
    /* property LineTotal */
    var $LineTotal;

    /* DISPID=86 */
    /* VT_R8 [5] */
    /* property TaxPercentagePerRow */
    var $TaxPercentagePerRow;

    /* DISPID=86 */
    /* property TaxPercentagePerRow */
    var $TaxPercentagePerRow;

    /* DISPID=87 */
    /* VT_R8 [5] */
    /* property TaxTotal */
    var $TaxTotal;

    /* DISPID=88 */
    /* ? [29] */
    /* property DeferredTax */
    var $DeferredTax;

    /* DISPID=88 */
    /* property DeferredTax */
    var $DeferredTax;

    /* DISPID=89 */
    /* VT_R8 [5] */
    /* property TotalEqualizationTax */
    var $TotalEqualizationTax;

    /* DISPID=90 */
    /* VT_BSTR [8] */
    /* property MeasureUnit */
    var $MeasureUnit;

    /* DISPID=91 */
    /* VT_R8 [5] */
    /* property UnitsOfMeasurment */
    var $UnitsOfMeasurment;

    /* DISPID=92 */
    /* VT_R8 [5] */
    /* property ExciseAmount */
    var $ExciseAmount;

    /* DISPID=92 */
    /* property ExciseAmount */
    var $ExciseAmount;

    /* DISPID=93 */
    /* VT_R8 [5] */
    /* property TaxPerUnit */
    var $TaxPerUnit;

    /* DISPID=94 */
    /* VT_R8 [5] */
    /* property TotalInclTax */
    var $TotalInclTax;

    /* DISPID=95 */
    /* VT_BSTR [8] */
    /* property CountryOrg */
    var $CountryOrg;

    /* DISPID=95 */
    /* property CountryOrg */
    var $CountryOrg;

    /* DISPID=96 */
    /* VT_BSTR [8] */
    /* property SWW */
    var $SWW;

    /* DISPID=96 */
    /* property SWW */
    var $SWW;

    /* DISPID=97 */
    /* ? [29] */
    /* property ConsumerSalesForecast */
    var $ConsumerSalesForecast;

    /* DISPID=97 */
    /* property ConsumerSalesForecast */
    var $ConsumerSalesForecast;

    /* DISPID=98 */
    /* VT_PTR [26] */
    /* property WithholdingTaxLines */
    var $WithholdingTaxLines;

    /* DISPID=99 */
    /* VT_BSTR [8] */
    /* property CFOPCode */
    var $CFOPCode;

    /* DISPID=99 */
    /* property CFOPCode */
    var $CFOPCode;

    /* DISPID=100 */
    /* VT_BSTR [8] */
    /* property CSTCode */
    var $CSTCode;

    /* DISPID=100 */
    /* property CSTCode */
    var $CSTCode;

    /* DISPID=101 */
    /* VT_BSTR [8] */
    /* property Usage */
    var $Usage;

    /* DISPID=101 */
    /* property Usage */
    var $Usage;

    /* DISPID=102 */
    /* ? [29] */
    /* property TaxOnly */
    var $TaxOnly;

    /* DISPID=102 */
    /* property TaxOnly */
    var $TaxOnly;

    /* DISPID=103 */
    /* VT_R8 [5] */
    /* property TaxBeforeDPM */
    var $TaxBeforeDPM;

    /* DISPID=104 */
    /* VT_R8 [5] */
    /* property TaxBeforeDPMFC */
    var $TaxBeforeDPMFC;

    /* DISPID=105 */
    /* VT_R8 [5] */
    /* property TaxBeforeDPMSC */
    var $TaxBeforeDPMSC;

    /* DISPID=106 */
    /* ? [29] */
    /* property TransactionType */
    var $TransactionType;

    /* DISPID=106 */
    /* property TransactionType */
    var $TransactionType;

    /* DISPID=107 */
    /* ? [29] */
    /* property DistributeExpense */
    var $DistributeExpense;

    /* DISPID=107 */
    /* property DistributeExpense */
    var $DistributeExpense;

    /* DISPID=108 */
    /* VT_BSTR [8] */
    /* property ShipToCode */
    var $ShipToCode;

    /* DISPID=108 */
    /* property ShipToCode */
    var $ShipToCode;

    /* DISPID=109 */
    /* VT_R8 [5] */
    /* property RowTotalFC */
    var $RowTotalFC;

    /* DISPID=109 */
    /* property RowTotalFC */
    var $RowTotalFC;

    /* DISPID=110 */
    /* VT_R8 [5] */
    /* property RowTotalSC */
    var $RowTotalSC;

    /* DISPID=111 */
    /* VT_R8 [5] */
    /* property LastBuyInmPrice */
    var $LastBuyInmPrice;

    /* DISPID=112 */
    /* VT_R8 [5] */
    /* property LastBuyDistributeSumFc */
    var $LastBuyDistributeSumFc;

    /* DISPID=113 */
    /* VT_R8 [5] */
    /* property LastBuyDistributeSumSc */
    var $LastBuyDistributeSumSc;

    /* DISPID=114 */
    /* VT_R8 [5] */
    /* property LastBuyDistributeSum */
    var $LastBuyDistributeSum;

    /* DISPID=115 */
    /* VT_R8 [5] */
    /* property StockDistributesumForeign */
    var $StockDistributesumForeign;

    /* DISPID=116 */
    /* VT_R8 [5] */
    /* property StockDistributesumSystem */
    var $StockDistributesumSystem;

    /* DISPID=117 */
    /* VT_R8 [5] */
    /* property StockDistributesum */
    var $StockDistributesum;

    /* DISPID=118 */
    /* VT_R8 [5] */
    /* property StockInmPrice */
    var $StockInmPrice;

    /* DISPID=119 */
    /* ? [29] */
    /* property PickStatusEx */
    var $PickStatusEx;

    /* DISPID=120 */
    function Delete(
    )
    {
        /* method Delete */
    }
    /* DISPID=121 */
    /* VT_I4 [3] */
    /* property VisualOrder */
    var $VisualOrder;

    /* DISPID=122 */
    /* VT_R8 [5] */
    /* property BaseOpenQuantity */
    var $BaseOpenQuantity;

    /* DISPID=123 */
    /* VT_R8 [5] */
    /* property UnitPrice */
    var $UnitPrice;

    /* DISPID=123 */
    /* property UnitPrice */
    var $UnitPrice;

    /* DISPID=124 */
    /* ? [29] */
    /* property LineStatus */
    var $LineStatus;

    /* DISPID=124 */
    /* property LineStatus */
    var $LineStatus;

    /* DISPID=125 */
    /* VT_R8 [5] */
    /* property PackageQuantity */
    var $PackageQuantity;

    /* DISPID=126 */
    /* VT_BSTR [8] */
    /* property Text */
    var $Text;

    /* DISPID=77 */
    /* property WTLiable */
    var $WTLiable;

    /* DISPID=127 */
    /* ? [29] */
    /* property LineType */
    var $LineType;

    /* DISPID=127 */
    /* property LineType */
    var $LineType;

    /* DISPID=128 */
    /* VT_BSTR [8] */
    /* property COGSCostingCode */
    var $COGSCostingCode;

    /* DISPID=128 */
    /* property COGSCostingCode */
    var $COGSCostingCode;

    /* DISPID=129 */
    /* VT_BSTR [8] */
    /* property COGSAccountCode */
    var $COGSAccountCode;

    /* DISPID=129 */
    /* property COGSAccountCode */
    var $COGSAccountCode;

    /* DISPID=130 */
    /* VT_BSTR [8] */
    /* property ChangeAssemlyBoMWarehouse */
    var $ChangeAssemlyBoMWarehouse;

    /* DISPID=130 */
    /* property ChangeAssemlyBoMWarehouse */
    var $ChangeAssemlyBoMWarehouse;

    /* DISPID=81 */
    /* property NetTaxAmount */
    var $NetTaxAmount;

    /* DISPID=82 */
    /* property NetTaxAmountFC */
    var $NetTaxAmountFC;

    /* DISPID=131 */
    /* VT_BSTR [8] */
    /* property ItemDetails */
    var $ItemDetails;

    /* DISPID=131 */
    /* property ItemDetails */
    var $ItemDetails;

    /* DISPID=132 */
    /* VT_DATE [7] */
    /* property ActualDeliveryDate */
    var $ActualDeliveryDate;

    /* DISPID=132 */
    /* property ActualDeliveryDate */
    var $ActualDeliveryDate;

    /* DISPID=133 */
    /* VT_I4 [3] */
    /* property LocationCode */
    var $LocationCode;

    /* DISPID=133 */
    /* property LocationCode */
    var $LocationCode;

    /* DISPID=134 */
    /* VT_BSTR [8] */
    /* property CostingCode2 */
    var $CostingCode2;

    /* DISPID=134 */
    /* property CostingCode2 */
    var $CostingCode2;

    /* DISPID=135 */
    /* VT_BSTR [8] */
    /* property CostingCode3 */
    var $CostingCode3;

    /* DISPID=135 */
    /* property CostingCode3 */
    var $CostingCode3;

    /* DISPID=136 */
    /* VT_BSTR [8] */
    /* property CostingCode4 */
    var $CostingCode4;

    /* DISPID=136 */
    /* property CostingCode4 */
    var $CostingCode4;

    /* DISPID=137 */
    /* VT_BSTR [8] */
    /* property CostingCode5 */
    var $CostingCode5;

    /* DISPID=137 */
    /* property CostingCode5 */
    var $CostingCode5;

    /* DISPID=138 */
    /* VT_R8 [5] */
    /* property RemainingOpenQuantity */
    var $RemainingOpenQuantity;

    /* DISPID=139 */
    /* VT_R8 [5] */
    /* property OpenAmount */
    var $OpenAmount;

    /* DISPID=140 */
    /* VT_R8 [5] */
    /* property OpenAmountFC */
    var $OpenAmountFC;

    /* DISPID=141 */
    /* VT_R8 [5] */
    /* property OpenAmountSC */
    var $OpenAmountSC;

    /* DISPID=90 */
    /* property MeasureUnit */
    var $MeasureUnit;

    /* DISPID=91 */
    /* property UnitsOfMeasurment */
    var $UnitsOfMeasurment;

    /* DISPID=170 */
    /* VT_R8 [5] */
    /* property GrossBuyPrice */
    var $GrossBuyPrice;

    /* DISPID=170 */
    /* property GrossBuyPrice */
    var $GrossBuyPrice;

    /* DISPID=171 */
    /* VT_I4 [3] */
    /* property GrossBase */
    var $GrossBase;

    /* DISPID=171 */
    /* property GrossBase */
    var $GrossBase;

    /* DISPID=172 */
    /* VT_R8 [5] */
    /* property GrossProfitTotalBasePrice */
    var $GrossProfitTotalBasePrice;

    /* DISPID=172 */
    /* property GrossProfitTotalBasePrice */
    var $GrossProfitTotalBasePrice;

    /* DISPID=173 */
    /* VT_BSTR [8] */
    /* property ExLineNo */
    var $ExLineNo;

    /* DISPID=173 */
    /* property ExLineNo */
    var $ExLineNo;

    /* DISPID=181 */
    /* VT_PTR [26] */
    /* property TaxJurisdictions */
    var $TaxJurisdictions;

    /* DISPID=182 */
    /* VT_DATE [7] */
    /* property RequiredDate */
    var $RequiredDate;

    /* DISPID=182 */
    /* property RequiredDate */
    var $RequiredDate;

    /* DISPID=183 */
    /* VT_R8 [5] */
    /* property RequiredQuantity */
    var $RequiredQuantity;

    /* DISPID=183 */
    /* property RequiredQuantity */
    var $RequiredQuantity;

    /* DISPID=184 */
    /* VT_BSTR [8] */
    /* property COGSCostingCode2 */
    var $COGSCostingCode2;

    /* DISPID=184 */
    /* property COGSCostingCode2 */
    var $COGSCostingCode2;

    /* DISPID=185 */
    /* VT_BSTR [8] */
    /* property COGSCostingCode3 */
    var $COGSCostingCode3;

    /* DISPID=185 */
    /* property COGSCostingCode3 */
    var $COGSCostingCode3;

    /* DISPID=186 */
    /* VT_BSTR [8] */
    /* property COGSCostingCode4 */
    var $COGSCostingCode4;

    /* DISPID=186 */
    /* property COGSCostingCode4 */
    var $COGSCostingCode4;

    /* DISPID=187 */
    /* VT_BSTR [8] */
    /* property COGSCostingCode5 */
    var $COGSCostingCode5;

    /* DISPID=187 */
    /* property COGSCostingCode5 */
    var $COGSCostingCode5;

    /* DISPID=87 */
    /* property TaxTotal */
    var $TaxTotal;

    /* DISPID=188 */
    /* VT_BSTR [8] */
    /* property CSTforIPI */
    var $CSTforIPI;

    /* DISPID=188 */
    /* property CSTforIPI */
    var $CSTforIPI;

    /* DISPID=189 */
    /* VT_BSTR [8] */
    /* property CSTforPIS */
    var $CSTforPIS;

    /* DISPID=189 */
    /* property CSTforPIS */
    var $CSTforPIS;

    /* DISPID=190 */
    /* VT_BSTR [8] */
    /* property CSTforCOFINS */
    var $CSTforCOFINS;

    /* DISPID=190 */
    /* property CSTforCOFINS */
    var $CSTforCOFINS;

    /* DISPID=191 */
    /* VT_BSTR [8] */
    /* property CreditOriginCode */
    var $CreditOriginCode;

    /* DISPID=191 */
    /* property CreditOriginCode */
    var $CreditOriginCode;

    /* DISPID=192 */
    /* ? [29] */
    /* property WithoutInventoryMovement */
    var $WithoutInventoryMovement;

    /* DISPID=192 */
    /* property WithoutInventoryMovement */
    var $WithoutInventoryMovement;

    /* DISPID=193 */
    /* VT_I4 [3] */
    /* property AgreementNo */
    var $AgreementNo;

    /* DISPID=193 */
    /* property AgreementNo */
    var $AgreementNo;

    /* DISPID=194 */
    /* VT_I4 [3] */
    /* property AgreementRowNumber */
    var $AgreementRowNumber;

    /* DISPID=194 */
    /* property AgreementRowNumber */
    var $AgreementRowNumber;

    /* DISPID=195 */
    /* VT_BSTR [8] */
    /* property ShipToDescription */
    var $ShipToDescription;

    /* DISPID=195 */
    /* property ShipToDescription */
    var $ShipToDescription;

    /* DISPID=196 */
    /* VT_I4 [3] */
    /* property ActualBaseEntry */
    var $ActualBaseEntry;

    /* DISPID=196 */
    /* property ActualBaseEntry */
    var $ActualBaseEntry;

    /* DISPID=197 */
    /* VT_I4 [3] */
    /* property ActualBaseLine */
    var $ActualBaseLine;

    /* DISPID=197 */
    /* property ActualBaseLine */
    var $ActualBaseLine;

    /* DISPID=198 */
    /* VT_I4 [3] */
    /* property DocEntry */
    var $DocEntry;

    /* DISPID=199 */
    /* VT_PTR [26] */
    /* property ImportProcesses */
    var $ImportProcesses;

    /* DISPID=200 */
    /* VT_PTR [26] */
    /* property ExportProcesses */
    var $ExportProcesses;

    /* DISPID=201 */
    /* VT_R8 [5] */
    /* property Surpluses */
    var $Surpluses;

    /* DISPID=201 */
    /* property Surpluses */
    var $Surpluses;

    /* DISPID=202 */
    /* VT_R8 [5] */
    /* property DefectAndBreakup */
    var $DefectAndBreakup;

    /* DISPID=202 */
    /* property DefectAndBreakup */
    var $DefectAndBreakup;

    /* DISPID=203 */
    /* VT_R8 [5] */
    /* property Shortages */
    var $Shortages;

    /* DISPID=203 */
    /* property Shortages */
    var $Shortages;

}

class IDocumentsAdditionalExpenses { /* GUID={FF458A30-213D-4BAC-BA26-F06E1F4A7E4E} */
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
    /* property Count */
    var $Count;

    /* DISPID=2 */
    function SetCurrentLine(
        /* VT_I4 [3]  */ $LineNum
    )
    {
        /* method SetCurrentLine */
    }
    /* DISPID=3 */
    function Add(
    )
    {
        /* method Add */
    }
    /* DISPID=4 */
    /* VT_I4 [3] */
    /* property ExpenseCode */
    var $ExpenseCode;

    /* DISPID=4 */
    /* property ExpenseCode */
    var $ExpenseCode;

    /* DISPID=5 */
    /* VT_R8 [5] */
    /* property LineTotal */
    var $LineTotal;

    /* DISPID=5 */
    /* property LineTotal */
    var $LineTotal;

    /* DISPID=6 */
    /* VT_R8 [5] */
    /* property LineTotalFC */
    var $LineTotalFC;

    /* DISPID=7 */
    /* VT_R8 [5] */
    /* property LineTotalSys */
    var $LineTotalSys;

    /* DISPID=8 */
    /* VT_R8 [5] */
    /* property PaidToDate */
    var $PaidToDate;

    /* DISPID=9 */
    /* VT_R8 [5] */
    /* property PaidToDateFC */
    var $PaidToDateFC;

    /* DISPID=10 */
    /* VT_R8 [5] */
    /* property PaidToDateSys */
    var $PaidToDateSys;

    /* DISPID=11 */
    /* VT_BSTR [8] */
    /* property Remarks */
    var $Remarks;

    /* DISPID=11 */
    /* property Remarks */
    var $Remarks;

    /* DISPID=12 */
    /* ? [29] */
    /* property DistributionMethod */
    var $DistributionMethod;

    /* DISPID=12 */
    /* property DistributionMethod */
    var $DistributionMethod;

    /* DISPID=13 */
    /* ? [29] */
    /* property TaxLiable */
    var $TaxLiable;

    /* DISPID=14 */
    /* VT_BSTR [8] */
    /* property VatGroup */
    var $VatGroup;

    /* DISPID=14 */
    /* property VatGroup */
    var $VatGroup;

    /* DISPID=15 */
    /* VT_R8 [5] */
    /* property TaxPercent */
    var $TaxPercent;

    /* DISPID=16 */
    /* VT_R8 [5] */
    /* property TaxSum */
    var $TaxSum;

    /* DISPID=17 */
    /* VT_R8 [5] */
    /* property TaxSumFC */
    var $TaxSumFC;

    /* DISPID=18 */
    /* VT_R8 [5] */
    /* property TaxSumSys */
    var $TaxSumSys;

    /* DISPID=19 */
    /* VT_R8 [5] */
    /* property DeductibleTaxSum */
    var $DeductibleTaxSum;

    /* DISPID=19 */
    /* property DeductibleTaxSum */
    var $DeductibleTaxSum;

    /* DISPID=20 */
    /* VT_R8 [5] */
    /* property DeductibleTaxSumFC */
    var $DeductibleTaxSumFC;

    /* DISPID=21 */
    /* VT_R8 [5] */
    /* property DeductibleTaxSumSys */
    var $DeductibleTaxSumSys;

    /* DISPID=22 */
    /* ? [29] */
    /* property AquisitionTax */
    var $AquisitionTax;

    /* DISPID=23 */
    /* VT_BSTR [8] */
    /* property TaxCode */
    var $TaxCode;

    /* DISPID=23 */
    /* property TaxCode */
    var $TaxCode;

    /* DISPID=24 */
    /* ? [29] */
    /* property TaxType */
    var $TaxType;

    /* DISPID=25 */
    /* VT_R8 [5] */
    /* property TaxPaid */
    var $TaxPaid;

    /* DISPID=26 */
    /* VT_R8 [5] */
    /* property TaxPaidFC */
    var $TaxPaidFC;

    /* DISPID=27 */
    /* VT_R8 [5] */
    /* property TaxPaidSys */
    var $TaxPaidSys;

    /* DISPID=28 */
    /* VT_R8 [5] */
    /* property EqualizationTaxPercent */
    var $EqualizationTaxPercent;

    /* DISPID=29 */
    /* VT_R8 [5] */
    /* property EqualizationTaxSum */
    var $EqualizationTaxSum;

    /* DISPID=30 */
    /* VT_R8 [5] */
    /* property EqualizationTaxFC */
    var $EqualizationTaxFC;

    /* DISPID=31 */
    /* VT_R8 [5] */
    /* property EqualizationTaxSys */
    var $EqualizationTaxSys;

    /* DISPID=32 */
    /* VT_R8 [5] */
    /* property TaxTotalSum */
    var $TaxTotalSum;

    /* DISPID=33 */
    /* VT_R8 [5] */
    /* property TaxTotalSumFC */
    var $TaxTotalSumFC;

    /* DISPID=34 */
    /* VT_R8 [5] */
    /* property TaxTotalSumSys */
    var $TaxTotalSumSys;

    /* DISPID=35 */
    /* VT_PTR [26] */
    /* property UserFields */
    var $UserFields;

    /* DISPID=36 */
    /* VT_I4 [3] */
    /* property BaseDocEntry */
    var $BaseDocEntry;

    /* DISPID=36 */
    /* property BaseDocEntry */
    var $BaseDocEntry;

    /* DISPID=37 */
    /* VT_I4 [3] */
    /* property BaseDocLine */
    var $BaseDocLine;

    /* DISPID=37 */
    /* property BaseDocLine */
    var $BaseDocLine;

    /* DISPID=38 */
    /* VT_I4 [3] */
    /* property BaseDocType */
    var $BaseDocType;

    /* DISPID=38 */
    /* property BaseDocType */
    var $BaseDocType;

    /* DISPID=41 */
    /* VT_I4 [3] */
    /* property BaseDocumentReference */
    var $BaseDocumentReference;

    /* DISPID=42 */
    /* VT_I4 [3] */
    /* property LineNum */
    var $LineNum;

    /* DISPID=43 */
    /* ? [29] */
    /* property LastPurchasePrice */
    var $LastPurchasePrice;

    /* DISPID=43 */
    /* property LastPurchasePrice */
    var $LastPurchasePrice;

    /* DISPID=44 */
    /* ? [29] */
    /* property Status */
    var $Status;

    /* DISPID=45 */
    /* ? [29] */
    /* property Stock */
    var $Stock;

    /* DISPID=45 */
    /* property Stock */
    var $Stock;

    /* DISPID=46 */
    /* VT_I4 [3] */
    /* property TargetAbsEntry */
    var $TargetAbsEntry;

    /* DISPID=47 */
    /* VT_I4 [3] */
    /* property TargetType */
    var $TargetType;

    /* DISPID=48 */
    /* ? [29] */
    /* property WTLiable */
    var $WTLiable;

    /* DISPID=48 */
    /* property WTLiable */
    var $WTLiable;

    /* DISPID=49 */
    /* VT_BSTR [8] */
    /* property DistributionRule */
    var $DistributionRule;

    /* DISPID=49 */
    /* property DistributionRule */
    var $DistributionRule;

    /* DISPID=61 */
    /* VT_PTR [26] */
    /* property TaxJurisdictions */
    var $TaxJurisdictions;

    /* DISPID=62 */
    /* VT_BSTR [8] */
    /* property Project */
    var $Project;

    /* DISPID=62 */
    /* property Project */
    var $Project;

    /* DISPID=63 */
    /* VT_BSTR [8] */
    /* property DistributionRule2 */
    var $DistributionRule2;

    /* DISPID=63 */
    /* property DistributionRule2 */
    var $DistributionRule2;

    /* DISPID=64 */
    /* VT_BSTR [8] */
    /* property DistributionRule3 */
    var $DistributionRule3;

    /* DISPID=64 */
    /* property DistributionRule3 */
    var $DistributionRule3;

    /* DISPID=65 */
    /* VT_BSTR [8] */
    /* property DistributionRule4 */
    var $DistributionRule4;

    /* DISPID=65 */
    /* property DistributionRule4 */
    var $DistributionRule4;

    /* DISPID=66 */
    /* VT_BSTR [8] */
    /* property DistributionRule5 */
    var $DistributionRule5;

    /* DISPID=66 */
    /* property DistributionRule5 */
    var $DistributionRule5;

    /* DISPID=16 */
    /* property TaxSum */
    var $TaxSum;

}

