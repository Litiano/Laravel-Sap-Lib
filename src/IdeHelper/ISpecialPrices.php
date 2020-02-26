<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class ISpecialPrices
 * GUID={2C1751BA-5CFF-4E47-8C1E-13CAF241A13F}
 *
 * @property string $ItemCode property ItemCode
 * @property string $CardCode property CardCode
 * @property float $Price property Price
 * @property string $Currency property Currency
 * @property float $DiscountPercent property DiscountPercent
 * @property int $PriceListNum property PriceListNum
 * @property int|VT_USERDEFINED $AutoUpdate property AutoUpdate
 * @property-read mixed|VT_PTR $SpecialPricesDataAreas property SpecialPricesDataAreas
 * @property-read mixed|VT_PTR $Browser Get Browser
 * @property int|VT_USERDEFINED $SourcePrice property SourcePrice
 * @property-read IUserFields $UserFields property UserFields
 */
class ISpecialPrices 
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
	 * @var string $ItemCode [8] property ItemCode
	*/
	var $ItemCode;

	/**
	 * DISPID=3
	 * @var string $CardCode [8] property CardCode
	*/
	var $CardCode;

	/**
	 * DISPID=4
	 * @var float $Price [5] property Price
	*/
	var $Price;

	/**
	 * DISPID=5
	 * @var string $Currency [8] property Currency
	*/
	var $Currency;

	/**
	 * DISPID=6
	 * @var float $DiscountPercent [5] property DiscountPercent
	*/
	var $DiscountPercent;

	/**
	 * DISPID=7
	 * @var int $PriceListNum [3] property PriceListNum
	*/
	var $PriceListNum;

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
	 * @param string $ItemCode [in]
	 * @param string $CardCode [in]
	 * @return bool 
	 * method GetByKey
	 */
	function GetByKey(
		/* string [8] [in] */ $ItemCode,
		/* string [8] [in] */ $CardCode 
	)
	{
	}

	/**
	 * DISPID=11
	 * @var int|VT_USERDEFINED $AutoUpdate [29] property AutoUpdate
	*/
	var $AutoUpdate;

	/**
	 * DISPID=12
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
	 * DISPID=13
	 * @var mixed|VT_PTR $SpecialPricesDataAreas [26] property SpecialPricesDataAreas
	*/
	var $SpecialPricesDataAreas;

	/**
	 * DISPID=14
	 * @return string 
	 * Get the object's data in xml format.
	 */
	function GetAsXML()
	{
	}

	/**
	 * DISPID=15
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
	 * DISPID=16
	 * @var mixed|VT_PTR $Browser [26] Get Browser
	*/
	var $Browser;

	/**
	 * DISPID=17
	 * @param string $ItemCode [in]
	 * @param int $PriceListNum [in]
	 * @return bool 
	 * method GetByKeyDiscounts
	 */
	function GetByKeyDiscounts(
		/* string [8] [in] */ $ItemCode,
		/* int [3] [in] */ $PriceListNum 
	)
	{
	}

	/**
	 * DISPID=18
	 * @var int|VT_USERDEFINED $SourcePrice [29] property SourcePrice
	*/
	var $SourcePrice;

	/**
	 * DISPID=19
	 * @var IUserFields $UserFields [26] property UserFields
	*/
	var $UserFields;

}