<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class IWarehouses
 * GUID={43AC045C-DCA2-4150-B937-AB205DCA22E6}
 *
 * @property string $Street property Street
 * @property string $StockInflationOffsetAccount property StockInflationOffsetAccount
 * @property string $ZipCode property ZipCode
 * @property string $DecreasingAccount property DecreasingAccount
 * @property string $PurchaseAccount property PurchaseAccount
 * @property string $EURevenuesAccount property EURevenuesAccount
 * @property string $ReturningAccount property ReturningAccount
 * @property string $ShippedGoodsAccount property ShippedGoodsAccount
 * @property string $StockInflationAdjustAccount property StockInflationAdjustAccount
 * @property int|VT_USERDEFINED $AllowUseTax property AllowUseTax
 * @property string $CostInflationAccount property CostInflationAccount
 * @property string $ForeignExpensesAccount property ForeignExpensesAccount
 * @property string $EUExpensesAccount property EUExpensesAccount
 * @property string $CostInflationOffsetAccount property CostInflationOffsetAccount
 * @property string $ExpensesClearingAccount property ExpensesClearingAccount
 * @property string $PurchaseReturningAccount property PurchaseReturningAccount
 * @property string $VATInRevenueAccount property VATInRevenueAccount
 * @property string $FederalTaxID property FederalTaxID
 * @property int $Location property Location
 * @property string $Block property Block
 * @property string $ExpenseAccount property ExpenseAccount
 * @property string $DecreaseGLAccount property DecreaseGLAccount
 * @property string $RevenuesAccount property RevenuesAccount
 * @property string $TaxGroup property TaxGroup
 * @property string $ExemptRevenuesAccount property ExemptRevenuesAccount
 * @property string $PurchaseOffsetAccount property PurchaseOffsetAccount
 * @property string $CostOfGoodsSold property CostOfGoodsSold
 * @property string $WarehouseCode property WarehouseCode
 * @property string $State property State
 * @property string $City property City
 * @property string $PriceDifferencesAccount property PriceDifferencesAccount
 * @property string $VarianceAccount property VarianceAccount
 * @property string $Country property Country
 * @property string $IncreaseGLAccount property IncreaseGLAccount
 * @property string $ExchangeRateDifferencesAccount property ExchangeRateDifferencesAccount
 * @property string $WIPMaterialAccount property WIPMaterialAccount
 * @property string $WarehouseName property WarehouseName
 * @property int|VT_USERDEFINED $DropShip property DropShip
 * @property string $WIPMaterialVarianceAccount property WIPMaterialVarianceAccount
 * @property string $TransfersAcc property TransfersAcc
 * @property-read int $InternalKey property InternalKey
 * @property string $ForeignRevenuesAcc property ForeignRevenuesAcc
 * @property string $BuildingFloorRoom property BuildingFloorRoom
 * @property string $County property County
 * @property int|VT_USERDEFINED $Nettable property Nettable
 * @property string $IncreasingAcc property IncreasingAcc
 * @property string $ExpenseOffsetingAct property ExpenseOffsetingAct
 * @property string $GoodsClearingAcc property GoodsClearingAcc
 * @property string $StockAccount property StockAccount
 * @property-read IUserFields $UserFields Get User Fields
 * @property-read mixed|VT_PTR $Browser Get Browser
 * @property int $BusinessPlaceID property BusinessPlaceID
 * @property string $PurchaseCreditAcc property PurchaseCreditAcc
 * @property string $EUPurchaseCreditAcc property EUPurchaseCreditAcc
 * @property string $ForeignPurchaseCreditAcc property ForeignPurchaseCreditAcc
 * @property string $SalesCreditAcc property SalesCreditAcc
 * @property string $SalesCreditEUAcc property SalesCreditEUAcc
 * @property string $ExemptedCredits property ExemptedCredits
 * @property string $SalesCreditForeignAcc property SalesCreditForeignAcc
 * @property string $NegativeInventoryAdjustmentAccount property NegativeInventoryAdjustmentAccount
 * @property string $WHShipToName property WHShipToName
 * @property int|VT_USERDEFINED $Excisable property Excisable
 * @property string $WHIncomingCenvatAccount property WHIncomingCenvatAccount
 * @property string $WHOutgoingCenvatAccount property WHOutgoingCenvatAccount
 * @property string $StockInTransitAccount property StockInTransitAccount
 * @property string $WipOffsetProfitAndLossAccount property WipOffsetProfitAndLossAccount
 * @property string $InventoryOffsetProfitAndLossAccount property InventoryOffsetProfitAndLossAccount
 * @property string $AddressType property AddressType
 * @property string $StreetNo property StreetNo
 * @property int $Storekeeper property Storekeeper
 * @property string $Shipper property Shipper
 * @property void $ManageSerialAndBatchNumbers property ManageSerialAndBatchNumbers
 * @property void $GlobalLocationNumber property GlobalLocationNumber
 * @property void $EnableBinLocations property EnableBinLocations
 * @property void $BinLocCodeSeparator property BinLocCodeSeparator
 * @property void $DefaultBin property DefaultBin
 * @property void $DefaultBinEnforced property DefaultBinEnforced
 * @property void $AutoAllocOnIssue property AutoAllocOnIssue
 * @property void $EnableReceivingBinLocations property EnableReceivingBinLocations
 * @property void $ReceivingBinLocationsBy property ReceivingBinLocationsBy
 * @property string $PurchaseBalanceAccount property PurchaseBalanceAccount
 * @property void $Inactive property Inactive
 * @property void $RestrictReceiptToEmptyBinLocation property RestrictReceiptToEmptyBinLocation
 * @property void $ReceiveUpToMaxQuantity property ReceiveUpToMaxQuantity
 * @property void $AutoAllocOnReceipt property AutoAllocOnReceipt
 * @property void $ReceiveUpToMaxWeight property ReceiveUpToMaxWeight
 * @property void $ReceiveUpToMethod property ReceiveUpToMethod
 * @property string $TaxOffice property TaxOffice
 * @property string $AddressName2 property AddressName2
 * @property string $AddressName3 property AddressName3
 */
class IWarehouses 
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
	 * @var string $Street [8] property Street
	*/
	var $Street;

	/**
	 * DISPID=2
	 * @var string $StockInflationOffsetAccount [8] property StockInflationOffsetAccount
	*/
	var $StockInflationOffsetAccount;

	/**
	 * DISPID=3
	 * @var string $ZipCode [8] property ZipCode
	*/
	var $ZipCode;

	/**
	 * DISPID=4
	 * @var string $DecreasingAccount [8] property DecreasingAccount
	*/
	var $DecreasingAccount;

	/**
	 * DISPID=5
	 * @var string $PurchaseAccount [8] property PurchaseAccount
	*/
	var $PurchaseAccount;

	/**
	 * DISPID=6
	 * @var string $EURevenuesAccount [8] property EURevenuesAccount
	*/
	var $EURevenuesAccount;

	/**
	 * DISPID=7
	 * @var string $ReturningAccount [8] property ReturningAccount
	*/
	var $ReturningAccount;

	/**
	 * DISPID=8
	 * @var string $ShippedGoodsAccount [8] property ShippedGoodsAccount
	*/
	var $ShippedGoodsAccount;

	/**
	 * DISPID=9
	 * @var string $StockInflationAdjustAccount [8] property StockInflationAdjustAccount
	*/
	var $StockInflationAdjustAccount;

	/**
	 * DISPID=10
	 * @var int|VT_USERDEFINED $AllowUseTax [29] property AllowUseTax
	*/
	var $AllowUseTax;

	/**
	 * DISPID=11
	 * @var string $CostInflationAccount [8] property CostInflationAccount
	*/
	var $CostInflationAccount;

	/**
	 * DISPID=12
	 * @var string $ForeignExpensesAccount [8] property ForeignExpensesAccount
	*/
	var $ForeignExpensesAccount;

	/**
	 * DISPID=13
	 * @var string $EUExpensesAccount [8] property EUExpensesAccount
	*/
	var $EUExpensesAccount;

	/**
	 * DISPID=14
	 * @var string $CostInflationOffsetAccount [8] property CostInflationOffsetAccount
	*/
	var $CostInflationOffsetAccount;

	/**
	 * DISPID=15
	 * @var string $ExpensesClearingAccount [8] property ExpensesClearingAccount
	*/
	var $ExpensesClearingAccount;

	/**
	 * DISPID=16
	 * @var string $PurchaseReturningAccount [8] property PurchaseReturningAccount
	*/
	var $PurchaseReturningAccount;

	/**
	 * DISPID=17
	 * @var string $VATInRevenueAccount [8] property VATInRevenueAccount
	*/
	var $VATInRevenueAccount;

	/**
	 * DISPID=18
	 * @var string $FederalTaxID [8] property FederalTaxID
	*/
	var $FederalTaxID;

	/**
	 * DISPID=19
	 * @var int $Location [3] property Location
	*/
	var $Location;

	/**
	 * DISPID=20
	 * @var string $Block [8] property Block
	*/
	var $Block;

	/**
	 * DISPID=21
	 * @var string $ExpenseAccount [8] property ExpenseAccount
	*/
	var $ExpenseAccount;

	/**
	 * DISPID=22
	 * @var string $DecreaseGLAccount [8] property DecreaseGLAccount
	*/
	var $DecreaseGLAccount;

	/**
	 * DISPID=23
	 * @var string $RevenuesAccount [8] property RevenuesAccount
	*/
	var $RevenuesAccount;

	/**
	 * DISPID=24
	 * @var string $TaxGroup [8] property TaxGroup
	*/
	var $TaxGroup;

	/**
	 * DISPID=25
	 * @var string $ExemptRevenuesAccount [8] property ExemptRevenuesAccount
	*/
	var $ExemptRevenuesAccount;

	/**
	 * DISPID=26
	 * @var string $PurchaseOffsetAccount [8] property PurchaseOffsetAccount
	*/
	var $PurchaseOffsetAccount;

	/**
	 * DISPID=27
	 * @var string $CostOfGoodsSold [8] property CostOfGoodsSold
	*/
	var $CostOfGoodsSold;

	/**
	 * DISPID=28
	 * @var string $WarehouseCode [8] property WarehouseCode
	*/
	var $WarehouseCode;

	/**
	 * DISPID=29
	 * @var string $State [8] property State
	*/
	var $State;

	/**
	 * DISPID=30
	 * @var string $City [8] property City
	*/
	var $City;

	/**
	 * DISPID=31
	 * @var string $PriceDifferencesAccount [8] property PriceDifferencesAccount
	*/
	var $PriceDifferencesAccount;

	/**
	 * DISPID=32
	 * @var string $VarianceAccount [8] property VarianceAccount
	*/
	var $VarianceAccount;

	/**
	 * DISPID=33
	 * @var string $Country [8] property Country
	*/
	var $Country;

	/**
	 * DISPID=34
	 * @var string $IncreaseGLAccount [8] property IncreaseGLAccount
	*/
	var $IncreaseGLAccount;

	/**
	 * DISPID=35
	 * @var string $ExchangeRateDifferencesAccount [8] property ExchangeRateDifferencesAccount
	*/
	var $ExchangeRateDifferencesAccount;

	/**
	 * DISPID=36
	 * @var string $WIPMaterialAccount [8] property WIPMaterialAccount
	*/
	var $WIPMaterialAccount;

	/**
	 * DISPID=37
	 * @var string $WarehouseName [8] property WarehouseName
	*/
	var $WarehouseName;

	/**
	 * DISPID=38
	 * @var int|VT_USERDEFINED $DropShip [29] property DropShip
	*/
	var $DropShip;

	/**
	 * DISPID=39
	 * @var string $WIPMaterialVarianceAccount [8] property WIPMaterialVarianceAccount
	*/
	var $WIPMaterialVarianceAccount;

	/**
	 * DISPID=40
	 * @var string $TransfersAcc [8] property TransfersAcc
	*/
	var $TransfersAcc;

	/**
	 * DISPID=41
	 * @var int $InternalKey [3] property InternalKey
	*/
	var $InternalKey;

	/**
	 * DISPID=42
	 * @var string $ForeignRevenuesAcc [8] property ForeignRevenuesAcc
	*/
	var $ForeignRevenuesAcc;

	/**
	 * DISPID=43
	 * @var string $BuildingFloorRoom [8] property BuildingFloorRoom
	*/
	var $BuildingFloorRoom;

	/**
	 * DISPID=44
	 * @var string $County [8] property County
	*/
	var $County;

	/**
	 * DISPID=45
	 * @var int|VT_USERDEFINED $Nettable [29] property Nettable
	*/
	var $Nettable;

	/**
	 * DISPID=46
	 * @var string $IncreasingAcc [8] property IncreasingAcc
	*/
	var $IncreasingAcc;

	/**
	 * DISPID=47
	 * @var string $ExpenseOffsetingAct [8] property ExpenseOffsetingAct
	*/
	var $ExpenseOffsetingAct;

	/**
	 * DISPID=48
	 * @var string $GoodsClearingAcc [8] property GoodsClearingAcc
	*/
	var $GoodsClearingAcc;

	/**
	 * DISPID=49
	 * @var string $StockAccount [8] property StockAccount
	*/
	var $StockAccount;

	/**
	 * DISPID=50
	 * @return int 
	 * method Add
	 */
	function Add()
	{
	}

	/**
	 * DISPID=51
	 * @return int 
	 * method Update
	 */
	function Update()
	{
	}

	/**
	 * DISPID=52
	 * @return int 
	 * method Remove
	 */
	function Remove()
	{
	}

	/**
	 * DISPID=53
	 * @param string $WhsCode [in]
	 * @return bool 
	 * method GetByKey
	 */
	function GetByKey(
		/* string [8] [in] */ $WhsCode 
	)
	{
	}

	/**
	 * DISPID=54
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
	 * DISPID=55
	 * @var IUserFields $UserFields [26] Get User Fields
	*/
	var $UserFields;

	/**
	 * DISPID=56
	 * @var mixed|VT_PTR $Browser [26] Get Browser
	*/
	var $Browser;

	/**
	 * DISPID=57
	 * @return string 
	 * Get the object's data in xml format.
	 */
	function GetAsXML()
	{
	}

	/**
	 * DISPID=58
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
	 * DISPID=59
	 * @var int $BusinessPlaceID [3] property BusinessPlaceID
	*/
	var $BusinessPlaceID;

	/**
	 * DISPID=60
	 * @var string $PurchaseCreditAcc [8] property PurchaseCreditAcc
	*/
	var $PurchaseCreditAcc;

	/**
	 * DISPID=61
	 * @var string $EUPurchaseCreditAcc [8] property EUPurchaseCreditAcc
	*/
	var $EUPurchaseCreditAcc;

	/**
	 * DISPID=62
	 * @var string $ForeignPurchaseCreditAcc [8] property ForeignPurchaseCreditAcc
	*/
	var $ForeignPurchaseCreditAcc;

	/**
	 * DISPID=63
	 * @var string $SalesCreditAcc [8] property SalesCreditAcc
	*/
	var $SalesCreditAcc;

	/**
	 * DISPID=64
	 * @var string $SalesCreditEUAcc [8] property SalesCreditEUAcc
	*/
	var $SalesCreditEUAcc;

	/**
	 * DISPID=65
	 * @var string $ExemptedCredits [8] property ExemptedCredits
	*/
	var $ExemptedCredits;

	/**
	 * DISPID=66
	 * @var string $SalesCreditForeignAcc [8] property SalesCreditForeignAcc
	*/
	var $SalesCreditForeignAcc;

	/**
	 * DISPID=67
	 * @var string $NegativeInventoryAdjustmentAccount [8] property NegativeInventoryAdjustmentAccount
	*/
	var $NegativeInventoryAdjustmentAccount;

	/**
	 * DISPID=68
	 * @var string $WHShipToName [8] property WHShipToName
	*/
	var $WHShipToName;

	/**
	 * DISPID=69
	 * @var int|VT_USERDEFINED $Excisable [29] property Excisable
	*/
	var $Excisable;

	/**
	 * DISPID=70
	 * @var string $WHIncomingCenvatAccount [8] property WHIncomingCenvatAccount
	*/
	var $WHIncomingCenvatAccount;

	/**
	 * DISPID=71
	 * @var string $WHOutgoingCenvatAccount [8] property WHOutgoingCenvatAccount
	*/
	var $WHOutgoingCenvatAccount;

	/**
	 * DISPID=72
	 * @var string $StockInTransitAccount [8] property StockInTransitAccount
	*/
	var $StockInTransitAccount;

	/**
	 * DISPID=91
	 * @var string $WipOffsetProfitAndLossAccount [8] property WipOffsetProfitAndLossAccount
	*/
	var $WipOffsetProfitAndLossAccount;

	/**
	 * DISPID=92
	 * @var string $InventoryOffsetProfitAndLossAccount [8] property InventoryOffsetProfitAndLossAccount
	*/
	var $InventoryOffsetProfitAndLossAccount;

	/**
	 * DISPID=101
	 * @var string $AddressType [8] property AddressType
	*/
	var $AddressType;

	/**
	 * DISPID=102
	 * @var string $StreetNo [8] property StreetNo
	*/
	var $StreetNo;

	/**
	 * DISPID=103
	 * @var int $Storekeeper [3] property Storekeeper
	*/
	var $Storekeeper;

	/**
	 * DISPID=104
	 * @var string $Shipper [8] property Shipper
	*/
	var $Shipper;

	/**
	 * DISPID=98
	 * @var void $ManageSerialAndBatchNumbers [24] property ManageSerialAndBatchNumbers
	*/
	var $ManageSerialAndBatchNumbers;

	/**
	 * DISPID=105
	 * @var void $GlobalLocationNumber [24] property GlobalLocationNumber
	*/
	var $GlobalLocationNumber;

	/**
	 * DISPID=93
	 * @var void $EnableBinLocations [24] property EnableBinLocations
	*/
	var $EnableBinLocations;

	/**
	 * DISPID=94
	 * @var void $BinLocCodeSeparator [24] property BinLocCodeSeparator
	*/
	var $BinLocCodeSeparator;

	/**
	 * DISPID=95
	 * @var void $DefaultBin [24] property DefaultBin
	*/
	var $DefaultBin;

	/**
	 * DISPID=96
	 * @var void $DefaultBinEnforced [24] property DefaultBinEnforced
	*/
	var $DefaultBinEnforced;

	/**
	 * DISPID=97
	 * @var void $AutoAllocOnIssue [24] property AutoAllocOnIssue
	*/
	var $AutoAllocOnIssue;

	/**
	 * DISPID=99
	 * @var void $EnableReceivingBinLocations [24] property EnableReceivingBinLocations
	*/
	var $EnableReceivingBinLocations;

	/**
	 * DISPID=100
	 * @var void $ReceivingBinLocationsBy [24] property ReceivingBinLocationsBy
	*/
	var $ReceivingBinLocationsBy;

	/**
	 * DISPID=106
	 * @var string $PurchaseBalanceAccount [8] property PurchaseBalanceAccount
	*/
	var $PurchaseBalanceAccount;

	/**
	 * DISPID=107
	 * @var void $Inactive [24] property Inactive
	*/
	var $Inactive;

	/**
	 * DISPID=108
	 * @var void $RestrictReceiptToEmptyBinLocation [24] property RestrictReceiptToEmptyBinLocation
	*/
	var $RestrictReceiptToEmptyBinLocation;

	/**
	 * DISPID=109
	 * @var void $ReceiveUpToMaxQuantity [24] property ReceiveUpToMaxQuantity
	*/
	var $ReceiveUpToMaxQuantity;

	/**
	 * DISPID=110
	 * @var void $AutoAllocOnReceipt [24] property AutoAllocOnReceipt
	*/
	var $AutoAllocOnReceipt;

	/**
	 * DISPID=111
	 * @var void $ReceiveUpToMaxWeight [24] property ReceiveUpToMaxWeight
	*/
	var $ReceiveUpToMaxWeight;

	/**
	 * DISPID=112
	 * @var void $ReceiveUpToMethod [24] property ReceiveUpToMethod
	*/
	var $ReceiveUpToMethod;

	/**
	 * DISPID=113
	 * @var string $TaxOffice [8] property TaxOffice
	*/
	var $TaxOffice;

	/**
	 * DISPID=114
	 * @var string $AddressName2 [8] property AddressName2
	*/
	var $AddressName2;

	/**
	 * DISPID=115
	 * @var string $AddressName3 [8] property AddressName3
	*/
	var $AddressName3;

}