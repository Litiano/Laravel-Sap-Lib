<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class IChecksforPayment
 * GUID={5E6A92D1-9BAB-4BB4-A379-2428006247C3}
 *
 * @property-read IUserFields $UserFields Get User Fields
 * @property-read mixed|VT_PTR $Browser Get Browser
 * @property-read int $CheckKey property CheckKey
 * @property int $CheckNumber property CheckNumber
 * @property string $BankCode property BankCode
 * @property string $Branch property Branch
 * @property-read string $BankName property BankName
 * @property string|VT_DATE $CheckDate property CheckDate
 * @property string $AccountNumber property AccountNumber
 * @property string $Details property Details
 * @property string $JournalEntryReference property JournalEntryReference
 * @property string|VT_DATE $PaymentDate property PaymentDate
 * @property-read int $PaymentNo property PaymentNo
 * @property-read float $CheckAmount property CheckAmount
 * @property int|VT_USERDEFINED $Transferable property Transferable
 * @property string $VendorCode property VendorCode
 * @property-read string $CheckCurrency property CheckCurrency
 * @property-read int|VT_USERDEFINED $Canceled property Canceled
 * @property int|VT_USERDEFINED $CardOrAccount property CardOrAccount
 * @property-read int|VT_USERDEFINED $Printed property Printed
 * @property-read string $VendorName property VendorName
 * @property string $Signature property Signature
 * @property string $CustomerAccountCode property CustomerAccountCode
 * @property-read int $TransactionNumber property TransactionNumber
 * @property string $Address property Address
 * @property int|VT_USERDEFINED $CreateJournalEntry property CreateJournalEntry
 * @property-read string|VT_DATE $UpdateDate property UpdateDate
 * @property-read string|VT_DATE $CreationDate property CreationDate
 * @property-read float $TaxTotal property TaxTotal
 * @property-read string|VT_DATE $TaxDate property TaxDate
 * @property float $DeductionRefundAmount property DeductionRefundAmount
 * @property-read int $PrintedBy property PrintedBy
 * @property string $CountryCode property CountryCode
 * @property string $TotalinWords property TotalinWords
 * @property-read mixed|VT_PTR $Lines property Lines
 * @property string $AddressName property AddressName
 * @property int|VT_USERDEFINED $ManualCheck property ManualCheck
 * @property-read float $WithholdingTaxAmount property WithholdingTaxAmount
 * @property float $WithholdingTaxPercentage property WithholdingTaxPercentage
 */
class IChecksforPayment 
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
	 * method Add
	 */
	function Add()
	{
	}

	/**
	 * DISPID=2
	 * @param string $FileName [in][out]
	 * @return void 
	 * method SaveXML
	 */
	function SaveXML(
		/* mixed|VT_PTR [26] [in][out] --> string [8]  */ &$FileName 
	)
	{
	}

	/**
	 * DISPID=3
	 * @return int 
	 * method Update
	 */
	function Update()
	{
	}

	/**
	 * DISPID=4
	 * @return int 
	 * method Remove
	 */
	function Remove()
	{
	}

	/**
	 * DISPID=5
	 * @param int $CheckKey [in]
	 * @return bool 
	 * method GetByKey
	 */
	function GetByKey(
		/* int [3] [in] */ $CheckKey 
	)
	{
	}

	/**
	 * DISPID=6
	 * @var IUserFields $UserFields [26] Get User Fields
	*/
	var $UserFields;

	/**
	 * DISPID=7
	 * @var mixed|VT_PTR $Browser [26] Get Browser
	*/
	var $Browser;

	/**
	 * DISPID=8
	 * @return int 
	 * method Close
	 */
	function Close()
	{
	}

	/**
	 * DISPID=9
	 * @var int $CheckKey [3] property CheckKey
	*/
	var $CheckKey;

	/**
	 * DISPID=10
	 * @var int $CheckNumber [3] property CheckNumber
	*/
	var $CheckNumber;

	/**
	 * DISPID=11
	 * @var string $BankCode [8] property BankCode
	*/
	var $BankCode;

	/**
	 * DISPID=12
	 * @var string $Branch [8] property Branch
	*/
	var $Branch;

	/**
	 * DISPID=13
	 * @var string $BankName [8] property BankName
	*/
	var $BankName;

	/**
	 * DISPID=14
	 * @var string|VT_DATE $CheckDate [7] property CheckDate
	*/
	var $CheckDate;

	/**
	 * DISPID=17
	 * @var string $AccountNumber [8] property AccountNumber
	*/
	var $AccountNumber;

	/**
	 * DISPID=18
	 * @var string $Details [8] property Details
	*/
	var $Details;

	/**
	 * DISPID=19
	 * @var string $JournalEntryReference [8] property JournalEntryReference
	*/
	var $JournalEntryReference;

	/**
	 * DISPID=20
	 * @var string|VT_DATE $PaymentDate [7] property PaymentDate
	*/
	var $PaymentDate;

	/**
	 * DISPID=21
	 * @var int $PaymentNo [3] property PaymentNo
	*/
	var $PaymentNo;

	/**
	 * DISPID=22
	 * @var float $CheckAmount [5] property CheckAmount
	*/
	var $CheckAmount;

	/**
	 * DISPID=23
	 * @var int|VT_USERDEFINED $Transferable [29] property Transferable
	*/
	var $Transferable;

	/**
	 * DISPID=24
	 * @var string $VendorCode [8] property VendorCode
	*/
	var $VendorCode;

	/**
	 * DISPID=25
	 * @var string $CheckCurrency [8] property CheckCurrency
	*/
	var $CheckCurrency;

	/**
	 * DISPID=26
	 * @var int|VT_USERDEFINED $Canceled [29] property Canceled
	*/
	var $Canceled;

	/**
	 * DISPID=27
	 * @var int|VT_USERDEFINED $CardOrAccount [29] property CardOrAccount
	*/
	var $CardOrAccount;

	/**
	 * DISPID=28
	 * @var int|VT_USERDEFINED $Printed [29] property Printed
	*/
	var $Printed;

	/**
	 * DISPID=29
	 * @var string $VendorName [8] property VendorName
	*/
	var $VendorName;

	/**
	 * DISPID=30
	 * @var string $Signature [8] property Signature
	*/
	var $Signature;

	/**
	 * DISPID=31
	 * @var string $CustomerAccountCode [8] property CustomerAccountCode
	*/
	var $CustomerAccountCode;

	/**
	 * DISPID=32
	 * @var int $TransactionNumber [3] property TransactionNumber
	*/
	var $TransactionNumber;

	/**
	 * DISPID=33
	 * @var string $Address [8] property Address
	*/
	var $Address;

	/**
	 * DISPID=34
	 * @var int|VT_USERDEFINED $CreateJournalEntry [29] property CreateJournalEntry
	*/
	var $CreateJournalEntry;

	/**
	 * DISPID=35
	 * @var string|VT_DATE $UpdateDate [7] property UpdateDate
	*/
	var $UpdateDate;

	/**
	 * DISPID=36
	 * @var string|VT_DATE $CreationDate [7] property CreationDate
	*/
	var $CreationDate;

	/**
	 * DISPID=37
	 * @var float $TaxTotal [5] property TaxTotal
	*/
	var $TaxTotal;

	/**
	 * DISPID=38
	 * @var string|VT_DATE $TaxDate [7] property TaxDate
	*/
	var $TaxDate;

	/**
	 * DISPID=39
	 * @var float $DeductionRefundAmount [5] property DeductionRefundAmount
	*/
	var $DeductionRefundAmount;

	/**
	 * DISPID=40
	 * @var int $PrintedBy [3] property PrintedBy
	*/
	var $PrintedBy;

	/**
	 * DISPID=41
	 * @var string $CountryCode [8] property CountryCode
	*/
	var $CountryCode;

	/**
	 * DISPID=42
	 * @var string $TotalinWords [8] property TotalinWords
	*/
	var $TotalinWords;

	/**
	 * DISPID=43
	 * @var mixed|VT_PTR $Lines [26] property Lines
	*/
	var $Lines;

	/**
	 * DISPID=44
	 * @return int 
	 * method Cancel
	 */
	function Cancel()
	{
	}

	/**
	 * DISPID=45
	 * @var string $AddressName [8] property AddressName
	*/
	var $AddressName;

	/**
	 * DISPID=46
	 * @return string 
	 * Get the object's data in xml format.
	 */
	function GetAsXML()
	{
	}

	/**
	 * DISPID=47
	 * @param string $FileName [in]
	 * @return void 
	 * Save the object's data in xml format.
	 */
	function SaveToFile(
		/* string [8] [in] */ $FileName 
	)
	{
	}

	/**
	 * DISPID=48
	 * @var int|VT_USERDEFINED $ManualCheck [29] property ManualCheck
	*/
	var $ManualCheck;

	/**
	 * DISPID=49
	 * @var float $WithholdingTaxAmount [5] property WithholdingTaxAmount
	*/
	var $WithholdingTaxAmount;

	/**
	 * DISPID=50
	 * @var float $WithholdingTaxPercentage [5] property WithholdingTaxPercentage
	*/
	var $WithholdingTaxPercentage;

}