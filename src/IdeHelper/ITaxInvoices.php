<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class ITaxInvoices
 * GUID={9370956A-E63B-4B62-9AA0-EA32A0673B8A}
 *
 * @property-read int $DocEntry property DocEntry
 * @property-read int $DocNum property DocNum
 * @property int|VT_USERDEFINED $DocType property DocType
 * @property-read int|VT_USERDEFINED $Printed property Printed
 * @property string|VT_DATE $DocDate property DocDate
 * @property string $CardCode property CardCode
 * @property-read string|VT_DATE $CreationDate property CreationDate
 * @property-read string|VT_DATE $UpdateDate property UpdateDate
 * @property string|VT_DATE $DocDueDate property DocDueDate
 * @property int $Series property Series
 * @property-read int $Segment property Segment
 * @property int $ContactPersonCode property ContactPersonCode
 * @property string|VT_DATE $TaxDate property TaxDate
 * @property string $Comments property Comments
 * @property string $ShipToCode property ShipToCode
 * @property string $Address property Address
 * @property string $Address2 property Address2
 * @property int|VT_USERDEFINED $CurrencySource property CurrencySource
 * @property string $DocCurrency property DocCurrency
 * @property-read mixed|VT_PTR $Lines property Lines
 * @property-read IUserFields $UserFields Get User Fields
 * @property-read mixed|VT_PTR $Browser Get Browser
 * @property string $CustomerOrVendorRefNo property CustomerOrVendorRefNo
 * @property string $CustomerOrVendorName property CustomerOrVendorName
 * @property-read string|VT_DATE $CancelDate property CancelDate
 * @property-read float $DocumentTotal property DocumentTotal
 * @property-read float $TaxTotal property TaxTotal
 * @property string $PaymentRefNo property PaymentRefNo
 * @property string|VT_DATE $PaymentRefDate property PaymentRefDate
 * @property-read mixed|VT_PTR $OperationCodes property OperationCodes
 * @property int $AlterationRevision property AlterationRevision
 * @property-read int $BPLID property BPLID
 * @property-read string $BPLName property BPLName
 * @property-read string $VATRegNum property VATRegNum
 */
class ITaxInvoices 
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
	 * @var int $DocEntry [3] property DocEntry
	*/
	var $DocEntry;

	/**
	 * DISPID=2
	 * @var int $DocNum [3] property DocNum
	*/
	var $DocNum;

	/**
	 * DISPID=3
	 * @var int|VT_USERDEFINED $DocType [29] property DocType
	*/
	var $DocType;

	/**
	 * DISPID=4
	 * @var int|VT_USERDEFINED $Printed [29] property Printed
	*/
	var $Printed;

	/**
	 * DISPID=5
	 * @var string|VT_DATE $DocDate [7] property DocDate
	*/
	var $DocDate;

	/**
	 * DISPID=6
	 * @var string $CardCode [8] property CardCode
	*/
	var $CardCode;

	/**
	 * DISPID=7
	 * @var string|VT_DATE $CreationDate [7] property CreationDate
	*/
	var $CreationDate;

	/**
	 * DISPID=8
	 * @var string|VT_DATE $UpdateDate [7] property UpdateDate
	*/
	var $UpdateDate;

	/**
	 * DISPID=9
	 * @var string|VT_DATE $DocDueDate [7] property DocDueDate
	*/
	var $DocDueDate;

	/**
	 * DISPID=10
	 * @var int $Series [3] property Series
	*/
	var $Series;

	/**
	 * DISPID=11
	 * @var int $Segment [3] property Segment
	*/
	var $Segment;

	/**
	 * DISPID=12
	 * @var int $ContactPersonCode [3] property ContactPersonCode
	*/
	var $ContactPersonCode;

	/**
	 * DISPID=13
	 * @var string|VT_DATE $TaxDate [7] property TaxDate
	*/
	var $TaxDate;

	/**
	 * DISPID=14
	 * @var string $Comments [8] property Comments
	*/
	var $Comments;

	/**
	 * DISPID=15
	 * @var string $ShipToCode [8] property ShipToCode
	*/
	var $ShipToCode;

	/**
	 * DISPID=16
	 * @var string $Address [8] property Address
	*/
	var $Address;

	/**
	 * DISPID=17
	 * @var string $Address2 [8] property Address2
	*/
	var $Address2;

	/**
	 * DISPID=18
	 * @var int|VT_USERDEFINED $CurrencySource [29] property CurrencySource
	*/
	var $CurrencySource;

	/**
	 * DISPID=19
	 * @var string $DocCurrency [8] property DocCurrency
	*/
	var $DocCurrency;

	/**
	 * DISPID=20
	 * @var mixed|VT_PTR $Lines [26] property Lines
	*/
	var $Lines;

	/**
	 * DISPID=21
	 * @return int 
	 * method Add
	 */
	function Add()
	{
	}

	/**
	 * DISPID=23
	 * @param int $DocEntry [in]
	 * @return bool 
	 * method GetByKey
	 */
	function GetByKey(
		/* int [3] [in] */ $DocEntry 
	)
	{
	}

	/**
	 * DISPID=24
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
	 * DISPID=25
	 * @return int 
	 * method Update
	 */
	function Update()
	{
	}

	/**
	 * DISPID=26
	 * @var IUserFields $UserFields [26] Get User Fields
	*/
	var $UserFields;

	/**
	 * DISPID=27
	 * @var mixed|VT_PTR $Browser [26] Get Browser
	*/
	var $Browser;

	/**
	 * DISPID=28
	 * @return int 
	 * method Cancel
	 */
	function Cancel()
	{
	}

	/**
	 * DISPID=29
	 * @return string 
	 * Get the object's data in xml format.
	 */
	function GetAsXML()
	{
	}

	/**
	 * DISPID=30
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
	 * DISPID=31
	 * @var string $CustomerOrVendorRefNo [8] property CustomerOrVendorRefNo
	*/
	var $CustomerOrVendorRefNo;

	/**
	 * DISPID=32
	 * @var string $CustomerOrVendorName [8] property CustomerOrVendorName
	*/
	var $CustomerOrVendorName;

	/**
	 * DISPID=33
	 * @var string|VT_DATE $CancelDate [7] property CancelDate
	*/
	var $CancelDate;

	/**
	 * DISPID=34
	 * @var float $DocumentTotal [5] property DocumentTotal
	*/
	var $DocumentTotal;

	/**
	 * DISPID=35
	 * @var float $TaxTotal [5] property TaxTotal
	*/
	var $TaxTotal;

	/**
	 * DISPID=36
	 * @var string $PaymentRefNo [8] property PaymentRefNo
	*/
	var $PaymentRefNo;

	/**
	 * DISPID=37
	 * @var string|VT_DATE $PaymentRefDate [7] property PaymentRefDate
	*/
	var $PaymentRefDate;

	/**
	 * DISPID=38
	 * @var mixed|VT_PTR $OperationCodes [26] property OperationCodes
	*/
	var $OperationCodes;

	/**
	 * DISPID=39
	 * @var int $AlterationRevision [3] property AlterationRevision
	*/
	var $AlterationRevision;

	/**
	 * DISPID=40
	 * @var int $BPLID [3] property BPLID
	*/
	var $BPLID;

	/**
	 * DISPID=41
	 * @var string $BPLName [8] property BPLName
	*/
	var $BPLName;

	/**
	 * DISPID=42
	 * @var string $VATRegNum [8] property VATRegNum
	*/
	var $VATRegNum;

}