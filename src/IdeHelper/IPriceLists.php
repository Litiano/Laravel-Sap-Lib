<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class IPriceLists
 * GUID={99FB9754-BDAE-4C8D-BA96-4F2263A73A6A}
 *
 * @property-read IUserFields $UserFields Get User Fields
 * @property-read mixed|VT_PTR $Browser Get Browser
 * @property int|VT_USERDEFINED $RoundingMethod property RoundingMethod
 * @property int|VT_USERDEFINED $GroupNum property GroupNum
 * @property int $BasePriceList property BasePriceList
 * @property float $Factor property Factor
 * @property-read int $PriceListNo property PriceListNo
 * @property string $PriceListName property PriceListName
 * @property int|VT_USERDEFINED $IsGrossPrice property IsGrossPrice
 * @property int|VT_USERDEFINED $Active property Active
 * @property string|VT_DATE $ValidFrom property ValidFrom
 * @property string|VT_DATE $ValidTo property ValidTo
 * @property string $DefaultPrimeCurrency property DefaultPrimeCurrency
 * @property string $DefaultAdditionalCurrency1 property DefaultAdditionalCurrency1
 * @property string $DefaultAdditionalCurrency2 property DefaultAdditionalCurrency2
 * @property int|VT_USERDEFINED $RoundingRule property RoundingRule
 * @property float $FixedAmount property FixedAmount
 * @property string $RoundingFormatIntegerPart property RoundingFormatIntegerPart
 * @property string $RoundingFormatDecimalPart property RoundingFormatDecimalPart
 */
class IPriceLists 
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
	 * @param string $QueueID [in]
	 * @return bool 
	 * method GetByKey
	 */
	function GetByKey(
		/* string [8] [in] */ $QueueID 
	)
	{
	}

	/**
	 * DISPID=2
	 * @var IUserFields $UserFields [26] Get User Fields
	*/
	var $UserFields;

	/**
	 * DISPID=3
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
	 * DISPID=4
	 * @return int 
	 * method Update
	 */
	function Update()
	{
	}

	/**
	 * DISPID=5
	 * @var mixed|VT_PTR $Browser [26] Get Browser
	*/
	var $Browser;

	/**
	 * DISPID=6
	 * @return int 
	 * method Add
	 */
	function Add()
	{
	}

	/**
	 * DISPID=7
	 * @var int|VT_USERDEFINED $RoundingMethod [29] property RoundingMethod
	*/
	var $RoundingMethod;

	/**
	 * DISPID=8
	 * @var int|VT_USERDEFINED $GroupNum [29] property GroupNum
	*/
	var $GroupNum;

	/**
	 * DISPID=9
	 * @var int $BasePriceList [3] property BasePriceList
	*/
	var $BasePriceList;

	/**
	 * DISPID=10
	 * @var float $Factor [5] property Factor
	*/
	var $Factor;

	/**
	 * DISPID=11
	 * @var int $PriceListNo [3] property PriceListNo
	*/
	var $PriceListNo;

	/**
	 * DISPID=12
	 * @var string $PriceListName [8] property PriceListName
	*/
	var $PriceListName;

	/**
	 * DISPID=13
	 * @return string 
	 * Get the object's data in xml format.
	 */
	function GetAsXML()
	{
	}

	/**
	 * DISPID=14
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
	 * DISPID=15
	 * @return int 
	 * method Remove
	 */
	function Remove()
	{
	}

	/**
	 * DISPID=16
	 * @var int|VT_USERDEFINED $IsGrossPrice [29] property IsGrossPrice
	*/
	var $IsGrossPrice;

	/**
	 * DISPID=17
	 * @var int|VT_USERDEFINED $Active [29] property Active
	*/
	var $Active;

	/**
	 * DISPID=18
	 * @var string|VT_DATE $ValidFrom [7] property ValidFrom
	*/
	var $ValidFrom;

	/**
	 * DISPID=19
	 * @var string|VT_DATE $ValidTo [7] property ValidTo
	*/
	var $ValidTo;

	/**
	 * DISPID=20
	 * @var string $DefaultPrimeCurrency [8] property DefaultPrimeCurrency
	*/
	var $DefaultPrimeCurrency;

	/**
	 * DISPID=21
	 * @var string $DefaultAdditionalCurrency1 [8] property DefaultAdditionalCurrency1
	*/
	var $DefaultAdditionalCurrency1;

	/**
	 * DISPID=22
	 * @var string $DefaultAdditionalCurrency2 [8] property DefaultAdditionalCurrency2
	*/
	var $DefaultAdditionalCurrency2;

	/**
	 * DISPID=23
	 * @var int|VT_USERDEFINED $RoundingRule [29] property RoundingRule
	*/
	var $RoundingRule;

	/**
	 * DISPID=24
	 * @var float $FixedAmount [5] property FixedAmount
	*/
	var $FixedAmount;

	/**
	 * DISPID=25
	 * @var string $RoundingFormatIntegerPart [8] property RoundingFormatIntegerPart
	*/
	var $RoundingFormatIntegerPart;

	/**
	 * DISPID=26
	 * @var string $RoundingFormatDecimalPart [8] property RoundingFormatDecimalPart
	*/
	var $RoundingFormatDecimalPart;

}