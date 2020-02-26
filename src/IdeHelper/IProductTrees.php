<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class IProductTrees
 * GUID={9BCDAE48-582B-4E76-BD8F-E8A77BC6CF6E}
 *
 * @property-read mixed|VT_PTR $Items property Items
 * @property string $TreeCode property TreeCode
 * @property int|VT_USERDEFINED $TreeType property TreeType
 * @property float $Quantity property Quantity
 * @property-read mixed|VT_PTR $Browser User fields for this object.
 * @property-read IUserFields $UserFields Get User Fields
 * @property string $DistributionRule property DistributionRule
 * @property string $Project property Project
 * @property string $DistributionRule2 property DistributionRule2
 * @property string $DistributionRule3 property DistributionRule3
 * @property string $DistributionRule4 property DistributionRule4
 * @property string $DistributionRule5 property DistributionRule5
 * @property int $PriceList property PriceList
 * @property string $Warehouse property Warehouse
 * @property int|VT_USERDEFINED $HideBOMComponentsInPrintout property HideBOMComponentsInPrintout
 * @property float $PlanAvgProdSize property PlanAvgProdSize
 */
class IProductTrees 
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
	 * @return int 
	 * method Update
	 */
	function Update()
	{
	}

	/**
	 * DISPID=3
	 * @param string $Key 
	 * @return bool 
	 * method GetByKey
	 */
	function GetByKey(
		/* string [8]  */ $Key 
	)
	{
	}

	/**
	 * DISPID=4
	 * @var mixed|VT_PTR $Items [26] property Items
	*/
	var $Items;

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
	 * @var string $TreeCode [8] property TreeCode
	*/
	var $TreeCode;

	/**
	 * DISPID=7
	 * @var int|VT_USERDEFINED $TreeType [29] property TreeType
	*/
	var $TreeType;

	/**
	 * DISPID=8
	 * @var float $Quantity [5] property Quantity
	*/
	var $Quantity;

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
	 * @return int 
	 * method Cancel
	 */
	function Cancel()
	{
	}

	/**
	 * DISPID=11
	 * @return int 
	 * method Close
	 */
	function Close()
	{
	}

	/**
	 * DISPID=13
	 * @var mixed|VT_PTR $Browser [26] User fields for this object.
	*/
	var $Browser;

	/**
	 * DISPID=14
	 * @var IUserFields $UserFields [26] Get User Fields
	*/
	var $UserFields;

	/**
	 * DISPID=15
	 * @return string 
	 * Get the object's data in xml format.
	 */
	function GetAsXML()
	{
	}

	/**
	 * DISPID=16
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
	 * DISPID=17
	 * @var string $DistributionRule [8] property DistributionRule
	*/
	var $DistributionRule;

	/**
	 * DISPID=18
	 * @var string $Project [8] property Project
	*/
	var $Project;

	/**
	 * DISPID=19
	 * @var string $DistributionRule2 [8] property DistributionRule2
	*/
	var $DistributionRule2;

	/**
	 * DISPID=20
	 * @var string $DistributionRule3 [8] property DistributionRule3
	*/
	var $DistributionRule3;

	/**
	 * DISPID=21
	 * @var string $DistributionRule4 [8] property DistributionRule4
	*/
	var $DistributionRule4;

	/**
	 * DISPID=22
	 * @var string $DistributionRule5 [8] property DistributionRule5
	*/
	var $DistributionRule5;

	/**
	 * DISPID=23
	 * @var int $PriceList [3] property PriceList
	*/
	var $PriceList;

	/**
	 * DISPID=24
	 * @var string $Warehouse [8] property Warehouse
	*/
	var $Warehouse;

	/**
	 * DISPID=25
	 * @var int|VT_USERDEFINED $HideBOMComponentsInPrintout [29] property HideBOMComponentsInPrintout
	*/
	var $HideBOMComponentsInPrintout;

	/**
	 * DISPID=26
	 * @var float $PlanAvgProdSize [5] property PlanAvgProdSize
	*/
	var $PlanAvgProdSize;

	/**
	 * DISPID=27
	 * @param string $FileName [in]
	 * @return int 
	 * method UpdateFromXML
	 */
	function UpdateFromXML(
		/* string [8] [in] */ $FileName 
	)
	{
	}

}