<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class ICurrencies
 * GUID={596CFFFE-E95F-472D-8243-37094A850DCF}
 *
 * @property string $Code property Code
 * @property string $Name property Name
 * @property string $DocumentsCode property DocumentsCode
 * @property-read mixed|VT_PTR $Browser Get Browser
 * @property-read IUserFields $UserFields property UserFields
 * @property string $InternationalDescription property InternationalDescription
 * @property string $HundredthName property HundredthName
 * @property string $EnglishName property EnglishName
 * @property string $EnglishHundredthName property EnglishHundredthName
 * @property string $PluralInternationalDescription property PluralInternationalDescription
 * @property string $PluralHundredthName property PluralHundredthName
 * @property string $PluralEnglishName property PluralEnglishName
 * @property string $PluralEnglishHundredthName property PluralEnglishHundredthName
 * @property int|VT_USERDEFINED $Decimals property Decimals
 * @property int|VT_USERDEFINED $Rounding property Rounding
 * @property int|VT_USERDEFINED $RoundingInPayment property RoundingInPayment
 * @property float $MaxIncomingAmtDiff property MaxIncomingAmtDiff
 * @property float $MaxOutgoingAmtDiff property MaxOutgoingAmtDiff
 * @property float $MaxIncomingAmtDiffPercent property MaxIncomingAmtDiffPercent
 * @property float $MaxOutgoingAmtDiffPercent property MaxOutgoingAmtDiffPercent
 */
class ICurrencies 
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
	 * @param string $Currency 
	 * @return bool 
	 * method GetByKey
	 */
	function GetByKey(
		/* string [8]  */ $Currency 
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
	 * DISPID=6
	 * @var string $Code [8] property Code
	*/
	var $Code;

	/**
	 * DISPID=7
	 * @var string $Name [8] property Name
	*/
	var $Name;

	/**
	 * DISPID=8
	 * @var string $DocumentsCode [8] property DocumentsCode
	*/
	var $DocumentsCode;

	/**
	 * DISPID=9
	 * @return string 
	 * Get the object's data in xml format.
	 */
	function GetAsXML()
	{
	}

	/**
	 * DISPID=10
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
	 * DISPID=11
	 * @var mixed|VT_PTR $Browser [26] Get Browser
	*/
	var $Browser;

	/**
	 * DISPID=12
	 * @var IUserFields $UserFields [26] property UserFields
	*/
	var $UserFields;

	/**
	 * DISPID=13
	 * @var string $InternationalDescription [8] property InternationalDescription
	*/
	var $InternationalDescription;

	/**
	 * DISPID=14
	 * @var string $HundredthName [8] property HundredthName
	*/
	var $HundredthName;

	/**
	 * DISPID=15
	 * @var string $EnglishName [8] property EnglishName
	*/
	var $EnglishName;

	/**
	 * DISPID=16
	 * @var string $EnglishHundredthName [8] property EnglishHundredthName
	*/
	var $EnglishHundredthName;

	/**
	 * DISPID=17
	 * @var string $PluralInternationalDescription [8] property PluralInternationalDescription
	*/
	var $PluralInternationalDescription;

	/**
	 * DISPID=18
	 * @var string $PluralHundredthName [8] property PluralHundredthName
	*/
	var $PluralHundredthName;

	/**
	 * DISPID=19
	 * @var string $PluralEnglishName [8] property PluralEnglishName
	*/
	var $PluralEnglishName;

	/**
	 * DISPID=20
	 * @var string $PluralEnglishHundredthName [8] property PluralEnglishHundredthName
	*/
	var $PluralEnglishHundredthName;

	/**
	 * DISPID=21
	 * @var int|VT_USERDEFINED $Decimals [29] property Decimals
	*/
	var $Decimals;

	/**
	 * DISPID=22
	 * @var int|VT_USERDEFINED $Rounding [29] property Rounding
	*/
	var $Rounding;

	/**
	 * DISPID=23
	 * @var int|VT_USERDEFINED $RoundingInPayment [29] property RoundingInPayment
	*/
	var $RoundingInPayment;

	/**
	 * DISPID=24
	 * @var float $MaxIncomingAmtDiff [5] property MaxIncomingAmtDiff
	*/
	var $MaxIncomingAmtDiff;

	/**
	 * DISPID=25
	 * @var float $MaxOutgoingAmtDiff [5] property MaxOutgoingAmtDiff
	*/
	var $MaxOutgoingAmtDiff;

	/**
	 * DISPID=26
	 * @var float $MaxIncomingAmtDiffPercent [5] property MaxIncomingAmtDiffPercent
	*/
	var $MaxIncomingAmtDiffPercent;

	/**
	 * DISPID=27
	 * @var float $MaxOutgoingAmtDiffPercent [5] property MaxOutgoingAmtDiffPercent
	*/
	var $MaxOutgoingAmtDiffPercent;

}