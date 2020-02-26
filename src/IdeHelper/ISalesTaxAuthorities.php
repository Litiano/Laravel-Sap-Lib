<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class ISalesTaxAuthorities
 * GUID={0D446022-9A79-4535-9174-EEAE21DF924A}
 *
 * @property string $UseTaxAccount property UseTaxAccount
 * @property-read int $UserSignature property UserSignature
 * @property int $Type property Type
 * @property string $AOrRTaxAccount property AOrRTaxAccount
 * @property float $Rate property Rate
 * @property string $AOrPTaxAccount property AOrPTaxAccount
 * @property float $NonDeductiblePrecent property NonDeductiblePrecent
 * @property string $NonDeductibleAccount property NonDeductibleAccount
 * @property string $Name property Name
 * @property string $DeferredTaxAccount property DeferredTaxAccount
 * @property string $Code property Code
 * @property-read mixed|VT_PTR $Browser Get Browser
 * @property-read IUserFields $UserFields property UserFields
 * @property float $MinTaxableAmount property MinTaxableAmount
 * @property float $MaxTaxableAmount property MaxTaxableAmount
 * @property float $FlatTaxAmount property FlatTaxAmount
 * @property-read mixed|VT_PTR $TaxDefinitions property TaxDefinitions
 * @property int|VT_USERDEFINED $InclInPrice property InclInPrice
 * @property int|VT_USERDEFINED $Exempt property Exempt
 * @property string $APExpAccount property APExpAccount
 * @property string $ARExpAccount property ARExpAccount
 * @property int|VT_USERDEFINED $InclInGrossRevenue property InclInGrossRevenue
 * @property int $TextCode property TextCode
 */
class ISalesTaxAuthorities 
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
	 * @var string $UseTaxAccount [8] property UseTaxAccount
	*/
	var $UseTaxAccount;

	/**
	 * DISPID=2
	 * @var int $UserSignature [3] property UserSignature
	*/
	var $UserSignature;

	/**
	 * DISPID=3
	 * @var int $Type [3] property Type
	*/
	var $Type;

	/**
	 * DISPID=4
	 * @var string $AOrRTaxAccount [8] property AOrRTaxAccount
	*/
	var $AOrRTaxAccount;

	/**
	 * DISPID=5
	 * @var float $Rate [5] property Rate
	*/
	var $Rate;

	/**
	 * DISPID=6
	 * @var string $AOrPTaxAccount [8] property AOrPTaxAccount
	*/
	var $AOrPTaxAccount;

	/**
	 * DISPID=7
	 * @var float $NonDeductiblePrecent [5] property NonDeductiblePrecent
	*/
	var $NonDeductiblePrecent;

	/**
	 * DISPID=8
	 * @var string $NonDeductibleAccount [8] property NonDeductibleAccount
	*/
	var $NonDeductibleAccount;

	/**
	 * DISPID=9
	 * @var string $Name [8] property Name
	*/
	var $Name;

	/**
	 * DISPID=10
	 * @var string $DeferredTaxAccount [8] property DeferredTaxAccount
	*/
	var $DeferredTaxAccount;

	/**
	 * DISPID=11
	 * @var string $Code [8] property Code
	*/
	var $Code;

	/**
	 * DISPID=12
	 * @return int 
	 * method Add
	 */
	function Add()
	{
	}

	/**
	 * DISPID=13
	 * @param string $Code [in]
	 * @param int $Type [in]
	 * @return bool 
	 * method GetByKey
	 */
	function GetByKey(
		/* string [8] [in] */ $Code,
		/* int [3] [in] */ $Type 
	)
	{
	}

	/**
	 * DISPID=14
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
	 * DISPID=15
	 * @return int 
	 * method Update
	 */
	function Update()
	{
	}

	/**
	 * DISPID=16
	 * @return string 
	 * Get the object's data in xml format.
	 */
	function GetAsXML()
	{
	}

	/**
	 * DISPID=17
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
	 * DISPID=18
	 * @var mixed|VT_PTR $Browser [26] Get Browser
	*/
	var $Browser;

	/**
	 * DISPID=19
	 * @var IUserFields $UserFields [26] property UserFields
	*/
	var $UserFields;

	/**
	 * DISPID=20
	 * @var float $MinTaxableAmount [5] property MinTaxableAmount
	*/
	var $MinTaxableAmount;

	/**
	 * DISPID=21
	 * @var float $MaxTaxableAmount [5] property MaxTaxableAmount
	*/
	var $MaxTaxableAmount;

	/**
	 * DISPID=22
	 * @var float $FlatTaxAmount [5] property FlatTaxAmount
	*/
	var $FlatTaxAmount;

	/**
	 * DISPID=23
	 * @var mixed|VT_PTR $TaxDefinitions [26] property TaxDefinitions
	*/
	var $TaxDefinitions;

	/**
	 * DISPID=24
	 * @var int|VT_USERDEFINED $InclInPrice [29] property InclInPrice
	*/
	var $InclInPrice;

	/**
	 * DISPID=25
	 * @var int|VT_USERDEFINED $Exempt [29] property Exempt
	*/
	var $Exempt;

	/**
	 * DISPID=26
	 * @var string $APExpAccount [8] property APExpAccount
	*/
	var $APExpAccount;

	/**
	 * DISPID=27
	 * @var string $ARExpAccount [8] property ARExpAccount
	*/
	var $ARExpAccount;

	/**
	 * DISPID=28
	 * @var int|VT_USERDEFINED $InclInGrossRevenue [29] property InclInGrossRevenue
	*/
	var $InclInGrossRevenue;

	/**
	 * DISPID=29
	 * @var int $TextCode [3] property TextCode
	*/
	var $TextCode;

}