<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class IItemGroups
 * GUID={216974E8-B66D-4022-9AB1-97BAA96084A3}
 *
 * @property string $PriceDifferencesAccount property PriceDifferencesAccount
 * @property string $StockInflationAdjustAccount property StockInflationAdjustAccount
 * @property float $MinimumOrderQuantity property MinimumOrderQuantity
 * @property int $OrderInterval property OrderInterval
 * @property string $ExchangeRateDifferencesAccount property ExchangeRateDifferencesAccount
 * @property string $IncreasingAccount property IncreasingAccount
 * @property string $StockInflationOffsetAccount property StockInflationOffsetAccount
 * @property int|VT_USERDEFINED $ProcurementMethod property ProcurementMethod
 * @property string $PurchaseOffsetAccount property PurchaseOffsetAccount
 * @property int|VT_USERDEFINED $InventorySystem property InventorySystem
 * @property string $WIPMaterialVarianceAccount property WIPMaterialVarianceAccount
 * @property int|VT_USERDEFINED $PlanningSystem property PlanningSystem
 * @property string $PurchaseAccount property PurchaseAccount
 * @property string $ReturningAccount property ReturningAccount
 * @property string $CostInflationAccount property CostInflationAccount
 * @property string $ExpensesAccount property ExpensesAccount
 * @property string $RevenuesAccount property RevenuesAccount
 * @property string $TransfersAccount property TransfersAccount
 * @property int $LeadTime property LeadTime
 * @property float $OrderMultiple property OrderMultiple
 * @property string $CostInflationOffsetAccount property CostInflationOffsetAccount
 * @property string $InventoryAccount property InventoryAccount
 * @property string $DecreaseGLAccount property DecreaseGLAccount
 * @property-read int $Number property Number
 * @property string $GoodsClearingAccount property GoodsClearingAccount
 * @property string $IncreaseGLAccount property IncreaseGLAccount
 * @property string $ForeignRevenuesAccount property ForeignRevenuesAccount
 * @property int|VT_USERDEFINED $Alert property Alert
 * @property string $WIPMaterialAccount property WIPMaterialAccount
 * @property string $ShippedGoodsAccount property ShippedGoodsAccount
 * @property string $ExemptRevenuesAccount property ExemptRevenuesAccount
 * @property string $DecreasingAccount property DecreasingAccount
 * @property string $VATInRevenueAccount property VATInRevenueAccount
 * @property string $VarianceAccount property VarianceAccount
 * @property string $EUExpensesAccount property EUExpensesAccount
 * @property string $ForeignExpensesAccount property ForeignExpensesAccount
 * @property int $CycleCode property CycleCode
 * @property string $CostAccount property CostAccount
 * @property string $EURevenuesAccount property EURevenuesAccount
 * @property string $PAReturnAccount property PAReturnAccount
 * @property string $GroupName property GroupName
 * @property-read IUserFields $UserFields Get User Fields
 * @property-read mixed|VT_PTR $Browser method DataBrowser
 * @property string $ExpenseClearingAct property ExpenseClearingAct
 * @property string $PurchaseCreditAcc property PurchaseCreditAcc
 * @property string $EUPurchaseCreditAcc property EUPurchaseCreditAcc
 * @property string $ForeignPurchaseCreditAcc property ForeignPurchaseCreditAcc
 * @property string $SalesCreditAcc property SalesCreditAcc
 * @property string $SalesCreditEUAcc property SalesCreditEUAcc
 * @property string $ExemptedCredits property ExemptedCredits
 * @property string $SalesCreditForeignAcc property SalesCreditForeignAcc
 * @property string $ExpenseOffsetAccount property ExpenseOffsetAccount
 * @property string $NegativeInventoryAdjustmentAccount property NegativeInventoryAdjustmentAccount
 * @property string $WHIncomingCenvatAccount property WHIncomingCenvatAccount
 * @property string $WHOutgoingCenvatAccount property WHOutgoingCenvatAccount
 * @property string $StockInTransitAccount property StockInTransitAccount
 * @property string $WipOffsetProfitAndLossAccount property WipOffsetProfitAndLossAccount
 * @property string $InventoryOffsetProfitAndLossAccount property InventoryOffsetProfitAndLossAccount
 * @property int $ToleranceDays property ToleranceDays
 * @property-read mixed|VT_PTR $WarehouseInfo property WarehouseInfo
 * @property int $DefaultUoMGroup property DefaultUoMGroup
 * @property int $DefaultInventoryUoM property DefaultInventoryUoM
 * @property string $PurchaseBalanceAccount property PurchaseBalanceAccount
 * @property int|VT_USERDEFINED $ComponentWarehouse property ComponentWarehouse
 */
class IItemGroups 
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
	 * @var string $PriceDifferencesAccount [8] property PriceDifferencesAccount
	*/
	var $PriceDifferencesAccount;

	/**
	 * DISPID=2
	 * @var string $StockInflationAdjustAccount [8] property StockInflationAdjustAccount
	*/
	var $StockInflationAdjustAccount;

	/**
	 * DISPID=3
	 * @var float $MinimumOrderQuantity [5] property MinimumOrderQuantity
	*/
	var $MinimumOrderQuantity;

	/**
	 * DISPID=4
	 * @var int $OrderInterval [3] property OrderInterval
	*/
	var $OrderInterval;

	/**
	 * DISPID=5
	 * @var string $ExchangeRateDifferencesAccount [8] property ExchangeRateDifferencesAccount
	*/
	var $ExchangeRateDifferencesAccount;

	/**
	 * DISPID=6
	 * @var string $IncreasingAccount [8] property IncreasingAccount
	*/
	var $IncreasingAccount;

	/**
	 * DISPID=7
	 * @var string $StockInflationOffsetAccount [8] property StockInflationOffsetAccount
	*/
	var $StockInflationOffsetAccount;

	/**
	 * DISPID=8
	 * @var int|VT_USERDEFINED $ProcurementMethod [29] property ProcurementMethod
	*/
	var $ProcurementMethod;

	/**
	 * DISPID=9
	 * @var string $PurchaseOffsetAccount [8] property PurchaseOffsetAccount
	*/
	var $PurchaseOffsetAccount;

	/**
	 * DISPID=10
	 * @var int|VT_USERDEFINED $InventorySystem [29] property InventorySystem
	*/
	var $InventorySystem;

	/**
	 * DISPID=11
	 * @var string $WIPMaterialVarianceAccount [8] property WIPMaterialVarianceAccount
	*/
	var $WIPMaterialVarianceAccount;

	/**
	 * DISPID=12
	 * @var int|VT_USERDEFINED $PlanningSystem [29] property PlanningSystem
	*/
	var $PlanningSystem;

	/**
	 * DISPID=13
	 * @var string $PurchaseAccount [8] property PurchaseAccount
	*/
	var $PurchaseAccount;

	/**
	 * DISPID=14
	 * @var string $ReturningAccount [8] property ReturningAccount
	*/
	var $ReturningAccount;

	/**
	 * DISPID=15
	 * @var string $CostInflationAccount [8] property CostInflationAccount
	*/
	var $CostInflationAccount;

	/**
	 * DISPID=16
	 * @var string $ExpensesAccount [8] property ExpensesAccount
	*/
	var $ExpensesAccount;

	/**
	 * DISPID=17
	 * @var string $RevenuesAccount [8] property RevenuesAccount
	*/
	var $RevenuesAccount;

	/**
	 * DISPID=18
	 * @var string $TransfersAccount [8] property TransfersAccount
	*/
	var $TransfersAccount;

	/**
	 * DISPID=19
	 * @var int $LeadTime [3] property LeadTime
	*/
	var $LeadTime;

	/**
	 * DISPID=20
	 * @var float $OrderMultiple [5] property OrderMultiple
	*/
	var $OrderMultiple;

	/**
	 * DISPID=21
	 * @var string $CostInflationOffsetAccount [8] property CostInflationOffsetAccount
	*/
	var $CostInflationOffsetAccount;

	/**
	 * DISPID=22
	 * @var string $InventoryAccount [8] property InventoryAccount
	*/
	var $InventoryAccount;

	/**
	 * DISPID=23
	 * @var string $DecreaseGLAccount [8] property DecreaseGLAccount
	*/
	var $DecreaseGLAccount;

	/**
	 * DISPID=24
	 * @var int $Number [3] property Number
	*/
	var $Number;

	/**
	 * DISPID=25
	 * @var string $GoodsClearingAccount [8] property GoodsClearingAccount
	*/
	var $GoodsClearingAccount;

	/**
	 * DISPID=26
	 * @var string $IncreaseGLAccount [8] property IncreaseGLAccount
	*/
	var $IncreaseGLAccount;

	/**
	 * DISPID=27
	 * @var string $ForeignRevenuesAccount [8] property ForeignRevenuesAccount
	*/
	var $ForeignRevenuesAccount;

	/**
	 * DISPID=28
	 * @var int|VT_USERDEFINED $Alert [29] property Alert
	*/
	var $Alert;

	/**
	 * DISPID=29
	 * @var string $WIPMaterialAccount [8] property WIPMaterialAccount
	*/
	var $WIPMaterialAccount;

	/**
	 * DISPID=30
	 * @var string $ShippedGoodsAccount [8] property ShippedGoodsAccount
	*/
	var $ShippedGoodsAccount;

	/**
	 * DISPID=31
	 * @var string $ExemptRevenuesAccount [8] property ExemptRevenuesAccount
	*/
	var $ExemptRevenuesAccount;

	/**
	 * DISPID=32
	 * @var string $DecreasingAccount [8] property DecreasingAccount
	*/
	var $DecreasingAccount;

	/**
	 * DISPID=33
	 * @var string $VATInRevenueAccount [8] property VATInRevenueAccount
	*/
	var $VATInRevenueAccount;

	/**
	 * DISPID=34
	 * @var string $VarianceAccount [8] property VarianceAccount
	*/
	var $VarianceAccount;

	/**
	 * DISPID=35
	 * @var string $EUExpensesAccount [8] property EUExpensesAccount
	*/
	var $EUExpensesAccount;

	/**
	 * DISPID=36
	 * @var string $ForeignExpensesAccount [8] property ForeignExpensesAccount
	*/
	var $ForeignExpensesAccount;

	/**
	 * DISPID=37
	 * @var int $CycleCode [3] property CycleCode
	*/
	var $CycleCode;

	/**
	 * DISPID=38
	 * @var string $CostAccount [8] property CostAccount
	*/
	var $CostAccount;

	/**
	 * DISPID=39
	 * @var string $EURevenuesAccount [8] property EURevenuesAccount
	*/
	var $EURevenuesAccount;

	/**
	 * DISPID=40
	 * @var string $PAReturnAccount [8] property PAReturnAccount
	*/
	var $PAReturnAccount;

	/**
	 * DISPID=41
	 * @var string $GroupName [8] property GroupName
	*/
	var $GroupName;

	/**
	 * DISPID=42
	 * @return int 
	 * method Add
	 */
	function Add()
	{
	}

	/**
	 * DISPID=43
	 * @return int 
	 * method Update
	 */
	function Update()
	{
	}

	/**
	 * DISPID=44
	 * @return int 
	 * method Remove
	 */
	function Remove()
	{
	}

	/**
	 * DISPID=45
	 * @param int $GroupCode [in]
	 * @return bool 
	 * method GetByKey
	 */
	function GetByKey(
		/* int [3] [in] */ $GroupCode 
	)
	{
	}

	/**
	 * DISPID=46
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
	 * DISPID=47
	 * @var IUserFields $UserFields [26] Get User Fields
	*/
	var $UserFields;

	/**
	 * DISPID=48
	 * @var mixed|VT_PTR $Browser [26] method DataBrowser
	*/
	var $Browser;

	/**
	 * DISPID=49
	 * @return string 
	 * Get the object's data in xml format.
	 */
	function GetAsXML()
	{
	}

	/**
	 * DISPID=50
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
	 * DISPID=54
	 * @var string $ExpenseClearingAct [8] property ExpenseClearingAct
	*/
	var $ExpenseClearingAct;

	/**
	 * DISPID=55
	 * @var string $PurchaseCreditAcc [8] property PurchaseCreditAcc
	*/
	var $PurchaseCreditAcc;

	/**
	 * DISPID=56
	 * @var string $EUPurchaseCreditAcc [8] property EUPurchaseCreditAcc
	*/
	var $EUPurchaseCreditAcc;

	/**
	 * DISPID=57
	 * @var string $ForeignPurchaseCreditAcc [8] property ForeignPurchaseCreditAcc
	*/
	var $ForeignPurchaseCreditAcc;

	/**
	 * DISPID=58
	 * @var string $SalesCreditAcc [8] property SalesCreditAcc
	*/
	var $SalesCreditAcc;

	/**
	 * DISPID=59
	 * @var string $SalesCreditEUAcc [8] property SalesCreditEUAcc
	*/
	var $SalesCreditEUAcc;

	/**
	 * DISPID=60
	 * @var string $ExemptedCredits [8] property ExemptedCredits
	*/
	var $ExemptedCredits;

	/**
	 * DISPID=61
	 * @var string $SalesCreditForeignAcc [8] property SalesCreditForeignAcc
	*/
	var $SalesCreditForeignAcc;

	/**
	 * DISPID=63
	 * @var string $ExpenseOffsetAccount [8] property ExpenseOffsetAccount
	*/
	var $ExpenseOffsetAccount;

	/**
	 * DISPID=64
	 * @var string $NegativeInventoryAdjustmentAccount [8] property NegativeInventoryAdjustmentAccount
	*/
	var $NegativeInventoryAdjustmentAccount;

	/**
	 * DISPID=65
	 * @var string $WHIncomingCenvatAccount [8] property WHIncomingCenvatAccount
	*/
	var $WHIncomingCenvatAccount;

	/**
	 * DISPID=66
	 * @var string $WHOutgoingCenvatAccount [8] property WHOutgoingCenvatAccount
	*/
	var $WHOutgoingCenvatAccount;

	/**
	 * DISPID=67
	 * @var string $StockInTransitAccount [8] property StockInTransitAccount
	*/
	var $StockInTransitAccount;

	/**
	 * DISPID=71
	 * @var string $WipOffsetProfitAndLossAccount [8] property WipOffsetProfitAndLossAccount
	*/
	var $WipOffsetProfitAndLossAccount;

	/**
	 * DISPID=72
	 * @var string $InventoryOffsetProfitAndLossAccount [8] property InventoryOffsetProfitAndLossAccount
	*/
	var $InventoryOffsetProfitAndLossAccount;

	/**
	 * DISPID=73
	 * @var int $ToleranceDays [3] property ToleranceDays
	*/
	var $ToleranceDays;

	/**
	 * DISPID=74
	 * @var mixed|VT_PTR $WarehouseInfo [26] property WarehouseInfo
	*/
	var $WarehouseInfo;

	/**
	 * DISPID=75
	 * @var int $DefaultUoMGroup [3] property DefaultUoMGroup
	*/
	var $DefaultUoMGroup;

	/**
	 * DISPID=76
	 * @var int $DefaultInventoryUoM [3] property DefaultInventoryUoM
	*/
	var $DefaultInventoryUoM;

	/**
	 * DISPID=77
	 * @var string $PurchaseBalanceAccount [8] property PurchaseBalanceAccount
	*/
	var $PurchaseBalanceAccount;

	/**
	 * DISPID=78
	 * @var int|VT_USERDEFINED $ComponentWarehouse [29] property ComponentWarehouse
	*/
	var $ComponentWarehouse;

}