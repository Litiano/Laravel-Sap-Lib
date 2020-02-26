<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class ICompany
 * GUID={3BA8DAED-5B33-4CE4-A4B8-B4308D86E524}
 *
 * @property string $Server The SQL server name to connect to.
 * @property string $CompanyDB The company's database to connet.
 * @property-read int $UserSignature The current user signature.
 * @property-read string $CompanyName The Current company name.
 * @property-read string $WordDocsPath The system path to the exported Word documents.
 * @property-read string $BitMapPath The system path to the Bitmaps.
 * @property-read string $ExcelDocsPath The system path to the exported Excel documents.
 * @property string $UserName The user name used for establishing connection to the system.
 * @property string $Password The password used for establishing connection to the system.
 * @property-read bool $Connected Use this property to find out about connection status.
 * @property-read string $AttachMentPath The system path to the Attachments.
 * @property int|VT_USERDEFINED $language property language
 * @property bool $UseTrusted property UseTrusted
 * @property-read mixed|VT_PTR $UserTables property User Tables
 * @property bool $XMLAsString property XMLAsString
 * @property int|VT_USERDEFINED $XmlExportType property XmlExportType
 * @property-read bool $InTransaction property InTransaction
 * @property string $DbUserName property DbUserName
 * @property string $DbPassword property DbPassword
 * @property int|VT_USERDEFINED $DbServerType property DbServerType
 * @property string $AddonIdentifier property AddonIdentifier
 * @property string $LicenseServer property LicenseServer
 * @property-read int $Version Version
 * @property-read int $MinimalSupportedVersion MinimalSupportedVersion
 * @property mixed|VT_UNKNOWN $DTCTransactionObject property DTCTransactionObject
 * @property-write void $Application property Application
 * @property string $SLDServer property SLDServer
 * @property string $SecurityCode property SecurityCode
 */
class ICompany
{
	/**
	 * DISPID=1610612736
	 * @param int|VT_USERDEFINED $riid [in]
	 * @param mixed|VT_PTR $ppvObj [out]
	 * @return void
	 */
	function QueryInterface(
		/* mixed|VT_PTR [26] [in] --> int|VT_USERDEFINED [29]  */ &$riid,
		/* mixed|VT_PTR [26] [out] --> mixed|VT_PTR [26]  */ &$ppvObj
	)
	{
	}

	/**
	 * DISPID=1610612737
	 * @return string
	 */
	function AddRef()
	{
	}

	/**
	 * DISPID=1610612738
	 * @return string
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
		/* mixed|VT_PTR [26] [out] --> int [23]  */ &$pctinfo
	)
	{
	}

	/**
	 * DISPID=1610678273
	 * @param int $itinfo [in]
	 * @param string $lcid [in]
	 * @param mixed|VT_PTR $pptinfo [out]
	 * @return void
	 */
	function GetTypeInfo(
		/* int [23] [in] */ $itinfo,
		/* string [19] [in] */ $lcid,
		/* mixed|VT_PTR [26] [out] --> mixed|VT_PTR [26]  */ &$pptinfo
	)
	{
	}

	/**
	 * DISPID=1610678274
	 * @param int|VT_USERDEFINED $riid [in]
	 * @param mixed|VT_PTR $rgszNames [in]
	 * @param int $cNames [in]
	 * @param string $lcid [in]
	 * @param int $rgdispid [out]
	 * @return void
	 */
	function GetIDsOfNames(
		/* mixed|VT_PTR [26] [in] --> int|VT_USERDEFINED [29]  */ &$riid,
		/* mixed|VT_PTR [26] [in] --> mixed|VT_PTR [26]  */ &$rgszNames,
		/* int [23] [in] */ $cNames,
		/* string [19] [in] */ $lcid,
		/* mixed|VT_PTR [26] [out] --> int [3]  */ &$rgdispid
	)
	{
	}

	/**
	 * DISPID=1610678275
	 * @param int $dispidMember [in]
	 * @param int|VT_USERDEFINED $riid [in]
	 * @param string $lcid [in]
	 * @param string $wFlags [in]
	 * @param int|VT_USERDEFINED $pdispparams [in]
	 * @param variant|VT_VARIANT $pvarResult [out]
	 * @param int|VT_USERDEFINED $pexcepinfo [out]
	 * @param int $puArgErr [out]
	 * @return void
	 */
	function Invoke(
		/* int [3] [in] */ $dispidMember,
		/* mixed|VT_PTR [26] [in] --> int|VT_USERDEFINED [29]  */ &$riid,
		/* string [19] [in] */ $lcid,
		/* string [18] [in] */ $wFlags,
		/* mixed|VT_PTR [26] [in] --> int|VT_USERDEFINED [29]  */ &$pdispparams,
		/* mixed|VT_PTR [26] [out] --> variant|VT_VARIANT [12]  */ &$pvarResult,
		/* mixed|VT_PTR [26] [out] --> int|VT_USERDEFINED [29]  */ &$pexcepinfo,
		/* mixed|VT_PTR [26] [out] --> int [23]  */ &$puArgErr
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
	 * DISPID=2
	 * @var string $Server [8] The SQL server name to connect to.
	*/
	var $Server;

	/**
	 * DISPID=4
	 * @var string $CompanyDB [8] The company's database to connet.
	*/
	var $CompanyDB;

	/**
	 * DISPID=5
	 * @var int $UserSignature [3] The current user signature.
	*/
	var $UserSignature;

	/**
	 * DISPID=6
	 * @var string $CompanyName [8] The Current company name.
	*/
	var $CompanyName;

	/**
	 * DISPID=7
	 * @var string $WordDocsPath [8] The system path to the exported Word documents.
	*/
	var $WordDocsPath;

	/**
	 * DISPID=8
	 * @var string $BitMapPath [8] The system path to the Bitmaps.
	*/
	var $BitMapPath;

	/**
	 * DISPID=9
	 * @var string $ExcelDocsPath [8] The system path to the exported Excel documents.
	*/
	var $ExcelDocsPath;

	/**
	 * DISPID=10
	 * @var string $UserName [8] The user name used for establishing connection to the system.
	*/
	var $UserName;

	/**
	 * DISPID=11
	 * @var string $Password [8] The password used for establishing connection to the system.
	*/
	var $Password;

	/**
	 * DISPID=12
	 * @var bool $Connected [11] Use this property to find out about connection status.
	*/
	var $Connected;

	/**
	 * DISPID=13
	 * @var string $AttachMentPath [8] The system path to the Attachments.
	*/
	var $AttachMentPath;

	/**
	 * DISPID=14
	 * @param int|VT_USERDEFINED $Object
	 * @return mixed|VT_DISPATCH
	 * Get a new initialized business object.
	 */
	function GetBusinessObject(
		/* int|VT_USERDEFINED [29]  */ $Object
	)
	{
	}

	/**
	 * DISPID=15
	 * @param string $FileName [in]
	 * @param int $Index [in]
	 * @return mixed|VT_DISPATCH
	 * Get a saved business object.
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
	 * DISPID=18
	 * @var int|VT_USERDEFINED $language [29] property language
	*/
	var $language;

	/**
	 * DISPID=19
	 * @param int $errCode [out]
	 * @param string $errMsg [out]
	 * @return void
	 * Use this function for establishing connection to the database.
	 */
	function GetLastError(
		/* mixed|VT_PTR [26] [out] --> int [3]  */ &$errCode,
		/* mixed|VT_PTR [26] [out] --> string [8]  */ &$errMsg
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
	 * @param int|VT_USERDEFINED $endType
	 * @return void
	 * method EndTransaction
	 */
	function EndTransaction(
		/* int|VT_USERDEFINED [29]  */ $endType
	)
	{
	}

	/**
	 * DISPID=22
	 * @param string $ObjectCode [out]
	 * @return void
	 * method GetNewObjectCode
	 */
	function GetNewObjectCode(
		/* mixed|VT_PTR [26] [out] --> string [8]  */ &$ObjectCode
	)
	{
	}

	/**
	 * DISPID=23
	 * @var bool $UseTrusted [11] property UseTrusted
	*/
	var $UseTrusted;

	/**
	 * DISPID=24
	 * @return mixed|VT_PTR
	 * method GetCompanyList
	 */
	function GetCompanyList()
	{
	}

	/**
	 * DISPID=25
	 * @param string $FileName [in]
	 * @param int $Index [in]
	 * @return int|VT_USERDEFINED
	 * method GetXMLobjectType
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
	 * @return int
	 * method GetXMLelementCount
	 */
	function GetXMLelementCount(
		/* string [8] [in] */ $FileName
	)
	{
	}

	/**
	 * DISPID=27
	 * @var mixed|VT_PTR $UserTables [26] property User Tables
	*/
	var $UserTables;

	/**
	 * DISPID=28
	 * @var bool $XMLAsString [11] property XMLAsString
	*/
	var $XMLAsString;

	/**
	 * DISPID=29
	 * @param int|VT_USERDEFINED $Object [in]
	 * @return string
	 * method GetBusinessObjectXmlSchema
	 */
	function GetBusinessObjectXmlSchema(
		/* int|VT_USERDEFINED [29] [in] */ $Object
	)
	{
	}

	/**
	 * DISPID=30
	 * @var int|VT_USERDEFINED $XmlExportType [29] property XmlExportType
	*/
	var $XmlExportType;

	/**
	 * DISPID=31
	 * @var bool $InTransaction [11] property InTransaction
	*/
	var $InTransaction;

	/**
	 * DISPID=32
	 * @var string $DbUserName [8] property DbUserName
	*/
	var $DbUserName;

	/**
	 * DISPID=33
	 * @var string $DbPassword [8] property DbPassword
	*/
	var $DbPassword;

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
	 * @return int
	 * method SetSboLoginContext
	 */
	function SetSboLoginContext(
		/* string [8] [in] */ $conStr
	)
	{
	}

	/**
	 * DISPID=36
	 * @var int|VT_USERDEFINED $DbServerType [29] property DbServerType
	*/
	var $DbServerType;

	/**
	 * DISPID=37
	 * @var string $AddonIdentifier [8] property AddonIdentifier
	*/
	var $AddonIdentifier;

	/**
	 * DISPID=38
	 * @var string $LicenseServer [8] property LicenseServer
	*/
	var $LicenseServer;

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
	 * DISPID=42
	 * @var int $Version [3] Version
	*/
	var $Version;

	/**
	 * DISPID=43
	 * @var int $MinimalSupportedVersion [3] MinimalSupportedVersion
	*/
	var $MinimalSupportedVersion;

	/**
	 * DISPID=44
	 * @var mixed|VT_UNKNOWN $DTCTransactionObject [13] property DTCTransactionObject
	*/
	var $DTCTransactionObject;

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
	 * @return mixed|VT_PTR
	 * GetCompanyService
	 */
	function GetCompanyService()
	{
	}

	/**
	 * DISPID=47
	 * @param string $NewPassword [in]
	 * @return int
	 * ChangePassword
	 */
	function ChangePassword(
		/* string [8] [in] */ $NewPassword
	)
	{
	}

	/**
	 * DISPID=48
	 * @param string $TableName [in]
	 * @return int
	 * InvalidateCache
	 */
	function InvalidateCache(
		/* string [8] [in] */ $TableName
	)
	{
	}

	/**
	 * DISPID=49
	 * @var void $Application [24] property Application
	*/
	var $Application;

	/**
	 * DISPID=50
	 * @return mixed|VT_PTR
	 * method GetRegisteredServersList
	 */
	function GetRegisteredServersList()
	{
	}

	/**
	 * DISPID=51
	 * @param string $bstrUserName [in]
	 * @param string $bstrPassword [in]
	 * @return int|VT_USERDEFINED
	 * method AuthenticateUser
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
	 * @return string|VT_DATE
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
	 * @return string|VT_DATE
	 * method GetDBServerDate
	 */
	function GetDBServerDate()
	{
	}

	/**
	 * DISPID=55
	 * @var string $SLDServer [8] property SLDServer
	*/
	var $SLDServer;

	/**
	 * DISPID=56
	 * @var string $SecurityCode [8] property SecurityCode
	*/
	var $SecurityCode;

}