<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class IAdditionalExpenses
 * GUID={0FCFCE88-47F3-4F05-9803-3081D83C92DC}
 *
 * @property-read IUserFields $UserFields Get User Fields
 * @property-read mixed|VT_PTR $Browser Get Browser
 * @property string $Name property Name
 * @property string $RevenuesAccount property RevenuesAccount
 * @property string $ExpenseAccount property ExpenseAccount
 * @property int|VT_USERDEFINED $TaxLiable property TaxLiable
 * @property float $FixedAmountRevenues property FixedAmountRevenues
 * @property float $FixedAmountExpenses property FixedAmountExpenses
 * @property string $OutputVATGroup property OutputVATGroup
 * @property string $InputVATGroup property InputVATGroup
 * @property int|VT_USERDEFINED $DistributionMethod property DistributionMethod
 * @property int|VT_USERDEFINED $Includein1099 property Includein1099
 * @property string $FreightOffsetAccount property FreightOffsetAccount
 * @property-read string $WTLiable property WTLiable
 * @property-read int $ExpensCode property ExpensCode
 * @property string $ExpenseExemptedAccount property ExpenseExemptedAccount
 * @property string $RevenuesExemptedAccount property RevenuesExemptedAccount
 * @property string $DistributionRule property DistributionRule
 * @property int|VT_USERDEFINED $DrawingMethod property DrawingMethod
 * @property int|VT_USERDEFINED $FreightType property FreightType
 * @property int|VT_USERDEFINED $Stock property Stock
 * @property int|VT_USERDEFINED $LastPurchasePrice property LastPurchasePrice 
 * @property string $Project property Project
 * @property string $DistributionRule2 property DistributionRule2
 * @property string $DistributionRule3 property DistributionRule3
 * @property string $DistributionRule4 property DistributionRule4
 * @property string $DistributionRule5 property DistributionRule5
 * @property int|VT_USERDEFINED $GrossFreight property GrossFreight
 */
class IAdditionalExpenses 
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
	 * @param int $ExpnsCode [in]
	 * @return bool 
	 * method GetByKey
	 */
	function GetByKey(
		/* int [3] [in] */ $ExpnsCode 
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
	 * @var string $Name [8] property Name
	*/
	var $Name;

	/**
	 * DISPID=10
	 * @var string $RevenuesAccount [8] property RevenuesAccount
	*/
	var $RevenuesAccount;

	/**
	 * DISPID=11
	 * @var string $ExpenseAccount [8] property ExpenseAccount
	*/
	var $ExpenseAccount;

	/**
	 * DISPID=12
	 * @var int|VT_USERDEFINED $TaxLiable [29] property TaxLiable
	*/
	var $TaxLiable;

	/**
	 * DISPID=13
	 * @var float $FixedAmountRevenues [5] property FixedAmountRevenues
	*/
	var $FixedAmountRevenues;

	/**
	 * DISPID=14
	 * @var float $FixedAmountExpenses [5] property FixedAmountExpenses
	*/
	var $FixedAmountExpenses;

	/**
	 * DISPID=15
	 * @var string $OutputVATGroup [8] property OutputVATGroup
	*/
	var $OutputVATGroup;

	/**
	 * DISPID=16
	 * @var string $InputVATGroup [8] property InputVATGroup
	*/
	var $InputVATGroup;

	/**
	 * DISPID=17
	 * @var int|VT_USERDEFINED $DistributionMethod [29] property DistributionMethod
	*/
	var $DistributionMethod;

	/**
	 * DISPID=18
	 * @var int|VT_USERDEFINED $Includein1099 [29] property Includein1099
	*/
	var $Includein1099;

	/**
	 * DISPID=19
	 * @var string $FreightOffsetAccount [8] property FreightOffsetAccount
	*/
	var $FreightOffsetAccount;

	/**
	 * DISPID=20
	 * @var string $WTLiable [8] property WTLiable
	*/
	var $WTLiable;

	/**
	 * DISPID=21
	 * @var int $ExpensCode [3] property ExpensCode
	*/
	var $ExpensCode;

	/**
	 * DISPID=22
	 * @return string 
	 * Get the object's data in xml format.
	 */
	function GetAsXML()
	{
	}

	/**
	 * DISPID=23
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
	 * DISPID=24
	 * @var string $ExpenseExemptedAccount [8] property ExpenseExemptedAccount
	*/
	var $ExpenseExemptedAccount;

	/**
	 * DISPID=25
	 * @var string $RevenuesExemptedAccount [8] property RevenuesExemptedAccount
	*/
	var $RevenuesExemptedAccount;

	/**
	 * DISPID=26
	 * @var string $DistributionRule [8] property DistributionRule
	*/
	var $DistributionRule;

	/**
	 * DISPID=27
	 * @var int|VT_USERDEFINED $DrawingMethod [29] property DrawingMethod
	*/
	var $DrawingMethod;

	/**
	 * DISPID=28
	 * @var int|VT_USERDEFINED $FreightType [29] property FreightType
	*/
	var $FreightType;

	/**
	 * DISPID=29
	 * @var int|VT_USERDEFINED $Stock [29] property Stock
	*/
	var $Stock;

	/**
	 * DISPID=30
	 * @var int|VT_USERDEFINED $LastPurchasePrice [29] property LastPurchasePrice 
	*/
	var $LastPurchasePrice;

	/**
	 * DISPID=31
	 * @var string $Project [8] property Project
	*/
	var $Project;

	/**
	 * DISPID=32
	 * @var string $DistributionRule2 [8] property DistributionRule2
	*/
	var $DistributionRule2;

	/**
	 * DISPID=33
	 * @var string $DistributionRule3 [8] property DistributionRule3
	*/
	var $DistributionRule3;

	/**
	 * DISPID=34
	 * @var string $DistributionRule4 [8] property DistributionRule4
	*/
	var $DistributionRule4;

	/**
	 * DISPID=35
	 * @var string $DistributionRule5 [8] property DistributionRule5
	*/
	var $DistributionRule5;

	/**
	 * DISPID=36
	 * @var int|VT_USERDEFINED $GrossFreight [29] property GrossFreight
	*/
	var $GrossFreight;

}