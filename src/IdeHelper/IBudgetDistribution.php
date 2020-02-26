<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class IBudgetDistribution
 * GUID={0CFCFE82-D222-486A-9E49-0FBE58FDD534}
 *
 * @property float $September property September
 * @property float $August property August
 * @property float $July property July
 * @property float $June property June
 * @property float $May property May
 * @property float $April property April
 * @property float $March property March
 * @property float $February property February
 * @property float $December property December
 * @property float $November property November
 * @property float $October property October
 * @property float $January property January
 * @property float $BudgetAmount property BudgetAmount
 * @property string $Description property Description
 * @property-read int $DivisionCode property DivisionCode
 * @property-read IUserFields $UserFields Get User Fields
 * @property-read mixed|VT_PTR $Browser Get Browser
 */
class IBudgetDistribution 
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
	 * @var float $September [5] property September
	*/
	var $September;

	/**
	 * DISPID=2
	 * @var float $August [5] property August
	*/
	var $August;

	/**
	 * DISPID=3
	 * @var float $July [5] property July
	*/
	var $July;

	/**
	 * DISPID=4
	 * @var float $June [5] property June
	*/
	var $June;

	/**
	 * DISPID=5
	 * @var float $May [5] property May
	*/
	var $May;

	/**
	 * DISPID=6
	 * @var float $April [5] property April
	*/
	var $April;

	/**
	 * DISPID=7
	 * @var float $March [5] property March
	*/
	var $March;

	/**
	 * DISPID=8
	 * @var float $February [5] property February
	*/
	var $February;

	/**
	 * DISPID=9
	 * @var float $December [5] property December
	*/
	var $December;

	/**
	 * DISPID=10
	 * @var float $November [5] property November
	*/
	var $November;

	/**
	 * DISPID=11
	 * @var float $October [5] property October
	*/
	var $October;

	/**
	 * DISPID=12
	 * @var float $January [5] property January
	*/
	var $January;

	/**
	 * DISPID=13
	 * @var float $BudgetAmount [5] property BudgetAmount
	*/
	var $BudgetAmount;

	/**
	 * DISPID=14
	 * @var string $Description [8] property Description
	*/
	var $Description;

	/**
	 * DISPID=15
	 * @var int $DivisionCode [3] property DivisionCode
	*/
	var $DivisionCode;

	/**
	 * DISPID=16
	 * @return int 
	 * method Add
	 */
	function Add()
	{
	}

	/**
	 * DISPID=17
	 * @return int 
	 * method Update
	 */
	function Update()
	{
	}

	/**
	 * DISPID=18
	 * @return int 
	 * method Remove
	 */
	function Remove()
	{
	}

	/**
	 * DISPID=19
	 * @param int $lBgdCode [in]
	 * @return bool 
	 * method GetByKey
	 */
	function GetByKey(
		/* int [3] [in] */ $lBgdCode 
	)
	{
	}

	/**
	 * DISPID=20
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
	 * DISPID=21
	 * @var IUserFields $UserFields [26] Get User Fields
	*/
	var $UserFields;

	/**
	 * DISPID=22
	 * @var mixed|VT_PTR $Browser [26] Get Browser
	*/
	var $Browser;

	/**
	 * DISPID=23
	 * @return int 
	 * method Cancel
	 */
	function Cancel()
	{
	}

	/**
	 * DISPID=24
	 * @return string 
	 * Get the object's data in xml format.
	 */
	function GetAsXML()
	{
	}

	/**
	 * DISPID=25
	 * @param string $FileName [in]
	 * @return void 
	 * Save the object's data in xml format.
	 */
	function SaveToFile(
		/* string [8] [in] */ $FileName 
	)
	{
	}

}