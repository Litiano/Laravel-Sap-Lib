<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class IBudgetScenarios
 * GUID={5D48514C-4B40-4C2A-9FC9-8CC2518B0F8E}
 *
 * @property string $Name property Name
 * @property float $InitialRatioPercentage property InitialRatioPercentage
 * @property string|VT_DATE $StartofFiscalYear property StartOfFiscalYear
 * @property int $BasicBudget property BasicBudget
 * @property-read int $Numerator property Numerator
 * @property-read IUserFields $UserFields Get User Fields
 * @property-read mixed|VT_PTR $Browser Get Browser
 * @property int|VT_USERDEFINED $RoundingMethod property RoundingMethod
 * @property string $Project property Project
 * @property string $DistributionRule property DistributionRule
 * @property string $DistributionRule2 property DistributionRule2
 * @property string $DistributionRule3 property DistributionRule3
 * @property string $DistributionRule4 property DistributionRule4
 * @property string $DistributionRule5 property DistributionRule5
 */
class IBudgetScenarios 
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
	 * @var string $Name [8] property Name
	*/
	var $Name;

	/**
	 * DISPID=2
	 * @var float $InitialRatioPercentage [5] property InitialRatioPercentage
	*/
	var $InitialRatioPercentage;

	/**
	 * DISPID=3
	 * @var string|VT_DATE $StartofFiscalYear [7] property StartOfFiscalYear
	*/
	var $StartofFiscalYear;

	/**
	 * DISPID=4
	 * @var int $BasicBudget [3] property BasicBudget
	*/
	var $BasicBudget;

	/**
	 * DISPID=5
	 * @var int $Numerator [3] property Numerator
	*/
	var $Numerator;

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
	 * @return int 
	 * method Update
	 */
	function Update()
	{
	}

	/**
	 * DISPID=8
	 * @return int 
	 * method Remove
	 */
	function Remove()
	{
	}

	/**
	 * DISPID=9
	 * @param int $lAbsID [in]
	 * @return bool 
	 * method GetByKey
	 */
	function GetByKey(
		/* int [3] [in] */ $lAbsID 
	)
	{
	}

	/**
	 * DISPID=10
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
	 * DISPID=11
	 * @var IUserFields $UserFields [26] Get User Fields
	*/
	var $UserFields;

	/**
	 * DISPID=12
	 * @var mixed|VT_PTR $Browser [26] Get Browser
	*/
	var $Browser;

	/**
	 * DISPID=13
	 * @return int 
	 * method Cancel
	 */
	function Cancel()
	{
	}

	/**
	 * DISPID=14
	 * @var int|VT_USERDEFINED $RoundingMethod [29] property RoundingMethod
	*/
	var $RoundingMethod;

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
	 * @var string $Project [8] property Project
	*/
	var $Project;

	/**
	 * DISPID=18
	 * @var string $DistributionRule [8] property DistributionRule
	*/
	var $DistributionRule;

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

}