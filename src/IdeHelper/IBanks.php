<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class IBanks
 * GUID={7A4DE818-7DD3-4035-97F8-6696A65651BF}
 *
 * @property-read mixed|VT_PTR $Browser Get browser
 * @property-read IUserFields $UserFields Get User Fields
 * @property string $BankCode property BankCode
 * @property string $BankName property BankName
 * @property-read string $AccountforOutgoingChecks property AccountforOutgoingChecks
 * @property-read string $BranchforOutgoingChecks property BranchforOutgoingChecks
 * @property-read int $NextCheckNumber property NextCheckNumber
 * @property string $SwiftNo property SwiftNo
 * @property string $IBAN property IBAN
 * @property string $CountryCode property CountryCode
 * @property int|VT_USERDEFINED $PostOffice property PostOffice
 * @property-read int $AbsoluteEntry property Absoluteentry
 * @property int $DefaultBankAccountKey property DefaultBankAccountKey
 */
class IBanks 
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
	 * @param string $bstrFileName [in]
	 * @return void 
	 * SaveToFile
	 */
	function SaveToFile(
		/* string [8] [in] */ $bstrFileName 
	)
	{
	}

	/**
	 * DISPID=2
	 * @param string $pbstrFileName [in][out]
	 * @return void 
	 * method SaveXML
	 */
	function SaveXML(
		/* mixed|VT_PTR [26] [in][out] --> string [8]  */ &$pbstrFileName 
	)
	{
	}

	/**
	 * DISPID=3
	 * @return string 
	 * GetAsXML
	 */
	function GetAsXML()
	{
	}

	/**
	 * DISPID=4
	 * @var mixed|VT_PTR $Browser [26] Get browser
	*/
	var $Browser;

	/**
	 * DISPID=5
	 * @var IUserFields $UserFields [26] Get User Fields
	*/
	var $UserFields;

	/**
	 * DISPID=6
	 * @param int $lAbsEntry [in]
	 * @return bool 
	 * GetByKey
	 */
	function GetByKey(
		/* int [3] [in] */ $lAbsEntry 
	)
	{
	}

	/**
	 * DISPID=7
	 * @return int 
	 * method Add
	 */
	function Add()
	{
	}

	/**
	 * DISPID=8
	 * @return int 
	 * method Update
	 */
	function Update()
	{
	}

	/**
	 * DISPID=9
	 * @return int 
	 * method Remove
	 */
	function Remove()
	{
	}

	/**
	 * DISPID=10
	 * @var string $BankCode [8] property BankCode
	*/
	var $BankCode;

	/**
	 * DISPID=11
	 * @var string $BankName [8] property BankName
	*/
	var $BankName;

	/**
	 * DISPID=12
	 * @var string $AccountforOutgoingChecks [8] property AccountforOutgoingChecks
	*/
	var $AccountforOutgoingChecks;

	/**
	 * DISPID=13
	 * @var string $BranchforOutgoingChecks [8] property BranchforOutgoingChecks
	*/
	var $BranchforOutgoingChecks;

	/**
	 * DISPID=14
	 * @var int $NextCheckNumber [3] property NextCheckNumber
	*/
	var $NextCheckNumber;

	/**
	 * DISPID=15
	 * @var string $SwiftNo [8] property SwiftNo
	*/
	var $SwiftNo;

	/**
	 * DISPID=16
	 * @var string $IBAN [8] property IBAN
	*/
	var $IBAN;

	/**
	 * DISPID=17
	 * @var string $CountryCode [8] property CountryCode
	*/
	var $CountryCode;

	/**
	 * DISPID=18
	 * @var int|VT_USERDEFINED $PostOffice [29] property PostOffice
	*/
	var $PostOffice;

	/**
	 * DISPID=19
	 * @var int $AbsoluteEntry [3] property Absoluteentry
	*/
	var $AbsoluteEntry;

	/**
	 * DISPID=20
	 * @var int $DefaultBankAccountKey [3] property DefaultBankAccountKey
	*/
	var $DefaultBankAccountKey;

}