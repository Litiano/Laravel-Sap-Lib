<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class IItems
 * GUID={1EFF6EB3-9368-4A68-B619-0B57A134F0CE}
 *
 * @property-read IUserFields $UserFields Invoke the user fields object
 * @property string $ItemCode Item code
 * @property string $ItemName Item name
 * @property string $ForeignName Foreign name
 * @property int $ItemsGroupCode Items group code
 * @property int $CustomsGroupCode Customes group code
 * @property string $SalesVATGroup Sales vat group
 * @property string $BarCode Bar code
 * @property int|VT_USERDEFINED $VatLiable Vat liable
 * @property int|VT_USERDEFINED $PurchaseItem Purchase item
 * @property int|VT_USERDEFINED $SalesItem Sales item
 * @property int|VT_USERDEFINED $InventoryItem Inventory item
 * @property string $IncomeAccount Income account
 * @property string $ExemptIncomeAccount Exempt income account
 * @property string $ExpanseAccount Expense account
 * @property string $Mainsupplier Main supplier
 * @property string $SupplierCatalogNo Supplier catalog number
 * @property string $PurchaseUnit Purchase unit
 * @property float $PurchaseItemsPerUnit Per purchase unit
 * @property float $DesiredInventory Per purchase Quantity
 * @property float $MinInventory Minimum inventory
 * @property string $SalesUnit Sales unit
 * @property float $SalesItemsPerUnit Per sales unit
 * @property string $Picture Picture
 * @property string $User_Text User text
 * @property string $SerialNum Serial number
 * @property float $CommissionPercent Commision percent
 * @property float $CommissionSum Commision sum
 * @property int $CommissionGroup Commision group
 * @property-read int|VT_USERDEFINED $TreeType Tree type
 * @property int|VT_USERDEFINED $AssetItem Asset item
 * @property float $SalesUnitHeight Sales unit height 1
 * @property float $SalesUnitVolume Sales unit volume
 * @property string $DataExportCode Data export code
 * @property int|VT_USERDEFINED $Properties Query group
 * @property-read IItems_Prices $PriceList property PriceList
 * @property int $Manufacturer property Manufacturer
 * @property-read float $QuantityOnStock property QuantityOnStock
 * @property-read float $QuantityOrderedFromVendors property QuantityOrderedFromVendors
 * @property-read float $QuantityOrderedByCustomers property QuantityOrderedByCustomers
 * @property int|VT_USERDEFINED $ManageSerialNumbers property ManageSerialNumbers
 * @property int|VT_USERDEFINED $ManageBatchNumbers property ManageBatchNumbers
 * @property int|VT_USERDEFINED $Valid property Valid
 * @property string|VT_DATE $ValidFrom property ValidFrom
 * @property string|VT_DATE $ValidTo property ValidTo
 * @property string $ValidRemarks property ValidRemarks
 * @property int|VT_USERDEFINED $Frozen property Frozen
 * @property string|VT_DATE $FrozenFrom property FrozenFrom
 * @property string|VT_DATE $FrozenTo property FrozenTo
 * @property string $FrozenRemarks property FrozenRemarks
 * @property-read mixed|VT_PTR $Browser User fields for this object.
 * @property string $SalesPackagingUnit property SalesPackegingUnit
 * @property float $SalesQtyPerPackUnit property SalesQtyPerPackUnit
 * @property float $SalesUnitLength property SalesUnitLength
 * @property float $SalesUnitWidth property SalesunitWidth
 * @property int $SalesVolumeUnit property SalesVolumeUnit
 * @property float $SalesUnitWeight property SalesUnitWeight
 * @property string $PurchasePackagingUnit property PurchasePackagingUnit
 * @property float $PurchaseQtyPerPackUnit property PurchaseQtyPerPackUnit
 * @property float $PurchaseUnitLength property PurchaseUnitLength
 * @property float $PurchaseUnitWidth property PurchaseUnitWidth
 * @property float $PurchaseUnitHeight property PurchaseUnitHeight
 * @property float $PurchaseUnitVolume property PurchaseUnitVolume
 * @property int $PurchaseVolumeUnit property PurchaseVolumeUnit
 * @property float $PurchaseUnitWeight property PurchaseUnitWeight
 * @property string $PurchaseVATGroup property PurchaseVATGroup
 * @property float $SalesFactor1 property SalesFactor1
 * @property float $SalesFactor2 property SalesFactor2
 * @property float $SalesFactor3 property SalesFactor3
 * @property float $SalesFactor4 property SalesFactor4
 * @property float $PurchaseFactor1 property PurchaseFactor1
 * @property float $PurchaseFactor2 property PurchaseFactor2
 * @property float $PurchaseFactor3 property PurchaseFactor3
 * @property float $PurchaseFactor4 property PurchaseFactor4
 * @property-read float $MovingAveragePrice property MovingAveragePrice
 * @property int $SalesLengthUnit property SalesLengthUnit
 * @property int $SalesWidthUnit property SalesWidthUnit
 * @property int $SalesHeightUnit property SalesHeightUnit
 * @property int $SalesWeightUnit property SalesWeightUnit
 * @property int $PurchaseWidthUnit property PurchaseWidthUnit
 * @property int $PurchaseLengthUnit property PurchaseLengthUnit
 * @property int $PurchaseHeightUnit property PurchaseHeightUnit
 * @property int $PurchaseWeightUnit property PurchaseWeightUnit
 * @property string $ForeignRevenuesAccount property ForeignRevenuesAccount
 * @property string $ECRevenuesAccount property ECRevenuesAccount
 * @property string $ForeignExpensesAccount property ForeignExpensesAccount
 * @property string $ECExpensesAccount property ECExpensesAccount
 * @property float $AvgStdPrice property AvgStdPrice
 * @property string $DefaultWarehouse property DefaultWarehouse
 * @property int $ShipType property ShipType
 * @property int|VT_USERDEFINED $GLMethod property GLMethod
 * @property int|VT_USERDEFINED $TaxType property TaxType
 * @property-read mixed|VT_PTR $WhsInfo property PriceList
 * @property float $MaxInventory property MaxInventory
 * @property int|VT_USERDEFINED $ManageStockByWarehouse property ManageStockByWarehouse
 * @property int $PurchaseHeightUnit1 property PurchaseHeightUnit1
 * @property float $PurchaseUnitHeight1 property PurchaseUnitHeight1
 * @property int $PurchaseLengthUnit1 property PurchaseLengthUnit1
 * @property float $PurchaseUnitLength1 property PurchaseUnitLength1
 * @property int $PurchaseWeightUnit1 property PurchaseWeightUnit1
 * @property float $PurchaseUnitWeight1 property PurchaseUnitWeight1
 * @property int $PurchaseWidthUnit1 property PurchaseWidthUnit1
 * @property float $PurchaseUnitWidth1 property PurchaseUnitWidth1
 * @property int $SalesHeightUnit1 property SalesHeightUnit1
 * @property float $SalesUnitHeight1 property SalesUnitHeight1
 * @property int $SalesLengthUnit1 property SalesLengthUnit1
 * @property float $SalesUnitLength1 property SalesUnitLength1
 * @property int $SalesWeightUnit1 property SalesWeightUnit1
 * @property float $SalesUnitWeight1 property SalesUnitWeight1
 * @property int $SalesWidthUnit1 property SalesWidthUnit1
 * @property float $SalesUnitWidth1 property SalesUnitWidth1
 * @property int|VT_USERDEFINED $ForceSelectionOfSerialNumber property ForceSelectionOfSerialNumber
 * @property int|VT_USERDEFINED $ManageSerialNumbersOnReleaseOnly property ManageSerialNumbersOnReleaseOnly
 * @property int|VT_USERDEFINED $WTLiable property WTLiable
 * @property string $BaseUnitName property BaseUnitName
 * @property string $ItemCountryOrg property ItemCountryOrg
 * @property string $SWW property SWW
 * @property string $ApTaxCode property ApTaxCode
 * @property string $ArTaxCode property ArTaxCode
 * @property int|VT_USERDEFINED $CostAccountingMethod property CostAccountingMethod
 * @property string $WarrantyTemplate property WarrantyTemplate
 * @property int|VT_USERDEFINED $IndirectTax property IndirectTax
 * @property int|VT_USERDEFINED $IssueMethod property IssueMethod
 * @property int|VT_USERDEFINED $SRIAndBatchManageMethod property SRIAndBatchManageMethod
 * @property int|VT_USERDEFINED $IsPhantom property IsPhantom
 * @property string $InventoryUOM property InventoryUOM
 * @property int|VT_USERDEFINED $PlanningSystem property PlanningSystem
 * @property int|VT_USERDEFINED $ProcurementMethod property ProcurementMethod
 * @property string $OrderIntervals property OrderIntervals
 * @property float $OrderMultiple property OrderMultiple
 * @property int $LeadTime property LeadTime
 * @property float $MinOrderQuantity property MinOrderQuantity
 * @property int|VT_USERDEFINED $ItemType property ItemType
 * @property int|VT_USERDEFINED $ItemClass property ItemClass
 * @property int $OutgoingServiceCode property OutgoingServiceCode
 * @property int $IncomingServiceCode property IncomingServiceCode
 * @property int $ServiceGroup property ServiceGroup
 * @property int $NCMCode property NCMCode
 * @property int|VT_USERDEFINED $MaterialType property MaterialType
 * @property int $MaterialGroup property MaterialGroup
 * @property int $ProductSource property ProductSource
 * @property int|VT_USERDEFINED $AutoCreateSerialNumbersOnRelease property AutoCreateSerialNumbersOnRelease
 * @property int $DNFEntry property DNFEntry
 * @property string $GTSItemSpec property GTSItemSpec
 * @property string $GTSItemTaxCategory property GTSItemTaxCategory
 * @property-read mixed|VT_PTR $PreferredVendors property PreferredVendors
 * @property int $FuelID property FuelID
 * @property string $BeverageTableCode property BeverageTableCode
 * @property string $BeverageGroupCode property BeverageGroupCode
 * @property int $BeverageCommercialBrandCode property BeverageCommercialBrandCode
 * @property int $Series property Series
 * @property int $ToleranceDays property ToleranceDays
 * @property-read mixed|VT_PTR $LocalizationInfos property LocalizationInfos
 * @property int|VT_USERDEFINED $TypeOfAdvancedRules property TypeOfAdvancedRules
 * @property int|VT_USERDEFINED $NoDiscounts property NoDiscounts
 * @property string $AssetClass property AssetClass
 * @property string $AssetGroup property AssetGroup
 * @property string $InventoryNumber property InventoryNumber
 * @property int $Technician property Technician
 * @property int $Employee property Employee
 * @property int $Location property Location
 * @property int|VT_USERDEFINED $StatisticalAsset property StatisticalAsset
 * @property int|VT_USERDEFINED $Cession property Cession
 * @property int|VT_USERDEFINED $DeactivateAfterUsefulLife property DeactivateAfterUsefulLife
 * @property-read int|VT_USERDEFINED $AssetStatus property AssetStatus
 * @property string|VT_DATE $CapitalizationDate property CapitalizationDate
 * @property-read int|VT_USERDEFINED $ManageByQuantity property ManageByQuantity
 * @property-read mixed|VT_PTR $Projects property Projects
 * @property-read mixed|VT_PTR $DistributionRules property DistributionRules
 * @property-read mixed|VT_PTR $DepreciationParameters property DepreciationParameters
 * @property-read mixed|VT_PTR $PeriodControls property PeriodControls
 * @property int $UoMGroupEntry property UoMGroupEntry
 * @property int $InventoryUoMEntry property InventoryUoMEntry
 * @property int $DefaultSalesUoMEntry property DefaultSalesUoMEntry
 * @property int $DefaultPurchasingUoMEntry property DefaultPurchasingUoMEntry
 * @property-read mixed|VT_PTR $UnitOfMeasurements property UnitOfMeasurements
 * @property string $DepreciationGroup property DepreciationGroup
 * @property string $AssetSerialNumber property AssetSerialNumber
 * @property int|VT_USERDEFINED $IssuePrimarilyBy property IssuePrimarilyBy
 * @property-read mixed|VT_PTR $AttributeGroups property Attribute Groups
 * @property-read mixed|VT_PTR $IntrastatExtension property IntrastatExtension
 * @property-read mixed|VT_PTR $BarCodes property BarCodes
 * @property-read string $DefaultCountingUnit property DefaultCountingUnit
 * @property-read float $CountingItemsPerUnit property CountingItemsPerUnit
 * @property int $DefaultCountingUoMEntry property DefaultCountingUoMEntry
 * @property int|VT_USERDEFINED $Excisable property Excisable
 * @property int $ChapterID property ChapterID
 * @property string $ScsCode property ScsCode
 * @property int|VT_USERDEFINED $SpProdType property SpProdType
 * @property float $InventoryWeight property InventoryWeight
 * @property int $InventoryWeightUnit property InventoryWeightUnit
 * @property float $InventoryWeight1 property InventoryWeight1
 * @property int $InventoryWeightUnit1 property InventoryWeightUnit1
 * @property int|VT_USERDEFINED $ComponentWarehouse property ComponentWarehouse
 * @property float $ProdStdCost property ProdStdCost
 * @property int|VT_USERDEFINED $InCostRollup property InCostRollup
 * @property int|VT_USERDEFINED $VirtualAssetItem property VirtualAssetItem
 * @property int|VT_USERDEFINED $EnforceAssetSerialNumbers property EnforceAssetSerialNumbers
 * @property int $AttachmentEntry property AttachmentEntry
 * @property-read string $LinkedResource property LinkedResource
 */
class IItems 
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
	 * @var IUserFields $UserFields [26] Invoke the user fields object
	*/
	var $UserFields;

	/**
	 * DISPID=2
	 * @return int 
	 * Add
	 */
	function Add()
	{
	}

	/**
	 * DISPID=3
	 * @param string $ItemCode 
	 * @return bool 
	 * Get by key
	 */
	function GetByKey(
		/* string [8]  */ $ItemCode 
	)
	{
	}

	/**
	 * DISPID=4
	 * @var string $ItemCode [8] Item code
	*/
	var $ItemCode;

	/**
	 * DISPID=5
	 * @var string $ItemName [8] Item name
	*/
	var $ItemName;

	/**
	 * DISPID=6
	 * @var string $ForeignName [8] Foreign name
	*/
	var $ForeignName;

	/**
	 * DISPID=7
	 * @var int $ItemsGroupCode [3] Items group code
	*/
	var $ItemsGroupCode;

	/**
	 * DISPID=8
	 * @var int $CustomsGroupCode [3] Customes group code
	*/
	var $CustomsGroupCode;

	/**
	 * DISPID=9
	 * @var string $SalesVATGroup [8] Sales vat group
	*/
	var $SalesVATGroup;

	/**
	 * DISPID=10
	 * @var string $BarCode [8] Bar code
	*/
	var $BarCode;

	/**
	 * DISPID=11
	 * @var int|VT_USERDEFINED $VatLiable [29] Vat liable
	*/
	var $VatLiable;

	/**
	 * DISPID=12
	 * @var int|VT_USERDEFINED $PurchaseItem [29] Purchase item
	*/
	var $PurchaseItem;

	/**
	 * DISPID=13
	 * @var int|VT_USERDEFINED $SalesItem [29] Sales item
	*/
	var $SalesItem;

	/**
	 * DISPID=14
	 * @var int|VT_USERDEFINED $InventoryItem [29] Inventory item
	*/
	var $InventoryItem;

	/**
	 * DISPID=15
	 * @var string $IncomeAccount [8] Income account
	*/
	var $IncomeAccount;

	/**
	 * DISPID=16
	 * @var string $ExemptIncomeAccount [8] Exempt income account
	*/
	var $ExemptIncomeAccount;

	/**
	 * DISPID=17
	 * @var string $ExpanseAccount [8] Expense account
	*/
	var $ExpanseAccount;

	/**
	 * DISPID=18
	 * @var string $Mainsupplier [8] Main supplier
	*/
	var $Mainsupplier;

	/**
	 * DISPID=19
	 * @var string $SupplierCatalogNo [8] Supplier catalog number
	*/
	var $SupplierCatalogNo;

	/**
	 * DISPID=20
	 * @var string $PurchaseUnit [8] Purchase unit
	*/
	var $PurchaseUnit;

	/**
	 * DISPID=21
	 * @var float $PurchaseItemsPerUnit [5] Per purchase unit
	*/
	var $PurchaseItemsPerUnit;

	/**
	 * DISPID=22
	 * @var float $DesiredInventory [5] Per purchase Quantity
	*/
	var $DesiredInventory;

	/**
	 * DISPID=23
	 * @var float $MinInventory [5] Minimum inventory
	*/
	var $MinInventory;

	/**
	 * DISPID=24
	 * @var string $SalesUnit [8] Sales unit
	*/
	var $SalesUnit;

	/**
	 * DISPID=25
	 * @var float $SalesItemsPerUnit [5] Per sales unit
	*/
	var $SalesItemsPerUnit;

	/**
	 * DISPID=26
	 * @var string $Picture [8] Picture
	*/
	var $Picture;

	/**
	 * DISPID=27
	 * @var string $User_Text [8] User text
	*/
	var $User_Text;

	/**
	 * DISPID=28
	 * @var string $SerialNum [8] Serial number
	*/
	var $SerialNum;

	/**
	 * DISPID=29
	 * @var float $CommissionPercent [5] Commision percent
	*/
	var $CommissionPercent;

	/**
	 * DISPID=30
	 * @var float $CommissionSum [5] Commision sum
	*/
	var $CommissionSum;

	/**
	 * DISPID=31
	 * @var int $CommissionGroup [3] Commision group
	*/
	var $CommissionGroup;

	/**
	 * DISPID=32
	 * @var int|VT_USERDEFINED $TreeType [29] Tree type
	*/
	var $TreeType;

	/**
	 * DISPID=33
	 * @var int|VT_USERDEFINED $AssetItem [29] Asset item
	*/
	var $AssetItem;

	/**
	 * DISPID=34
	 * @var float $SalesUnitHeight [5] Sales unit height 1
	*/
	var $SalesUnitHeight;

	/**
	 * DISPID=36
	 * @var float $SalesUnitVolume [5] Sales unit volume
	*/
	var $SalesUnitVolume;

	/**
	 * DISPID=37
	 * @var string $DataExportCode [8] Data export code
	*/
	var $DataExportCode;

	/**
	 * DISPID=38
	 * @var int|VT_USERDEFINED $Properties [29] Query group
	*/
	var $Properties;

	/**
	 * DISPID=39
	 * @param string $FileName [in][out]
	 * @return void 
	 * Save object as XML document
	 */
	function SaveXML(
		/* mixed|VT_PTR [26] [in][out] --> string [8]  */ &$FileName 
	)
	{
	}

	/**
	 * DISPID=40
	 * @return int 
	 * method Update
	 */
	function Update()
	{
	}

	/**
	 * DISPID=41
	 * @var IItems_Prices $PriceList [26] property PriceList
	*/
	var $PriceList;

	/**
	 * DISPID=42
	 * @var int $Manufacturer [3] property Manufacturer
	*/
	var $Manufacturer;

	/**
	 * DISPID=43
	 * @var float $QuantityOnStock [5] property QuantityOnStock
	*/
	var $QuantityOnStock;

	/**
	 * DISPID=44
	 * @var float $QuantityOrderedFromVendors [5] property QuantityOrderedFromVendors
	*/
	var $QuantityOrderedFromVendors;

	/**
	 * DISPID=45
	 * @var float $QuantityOrderedByCustomers [5] property QuantityOrderedByCustomers
	*/
	var $QuantityOrderedByCustomers;

	/**
	 * DISPID=46
	 * @return int 
	 * method Remove
	 */
	function Remove()
	{
	}

	/**
	 * DISPID=47
	 * @return int 
	 * method Cancel
	 */
	function Cancel()
	{
	}

	/**
	 * DISPID=48
	 * @return int 
	 * method Close
	 */
	function Close()
	{
	}

	/**
	 * DISPID=49
	 * @var int|VT_USERDEFINED $ManageSerialNumbers [29] property ManageSerialNumbers
	*/
	var $ManageSerialNumbers;

	/**
	 * DISPID=50
	 * @var int|VT_USERDEFINED $ManageBatchNumbers [29] property ManageBatchNumbers
	*/
	var $ManageBatchNumbers;

	/**
	 * DISPID=51
	 * @var int|VT_USERDEFINED $Valid [29] property Valid
	*/
	var $Valid;

	/**
	 * DISPID=52
	 * @var string|VT_DATE $ValidFrom [7] property ValidFrom
	*/
	var $ValidFrom;

	/**
	 * DISPID=53
	 * @var string|VT_DATE $ValidTo [7] property ValidTo
	*/
	var $ValidTo;

	/**
	 * DISPID=54
	 * @var string $ValidRemarks [8] property ValidRemarks
	*/
	var $ValidRemarks;

	/**
	 * DISPID=55
	 * @var int|VT_USERDEFINED $Frozen [29] property Frozen
	*/
	var $Frozen;

	/**
	 * DISPID=56
	 * @var string|VT_DATE $FrozenFrom [7] property FrozenFrom
	*/
	var $FrozenFrom;

	/**
	 * DISPID=57
	 * @var string|VT_DATE $FrozenTo [7] property FrozenTo
	*/
	var $FrozenTo;

	/**
	 * DISPID=58
	 * @var string $FrozenRemarks [8] property FrozenRemarks
	*/
	var $FrozenRemarks;

	/**
	 * DISPID=59
	 * @var mixed|VT_PTR $Browser [26] User fields for this object.
	*/
	var $Browser;

	/**
	 * DISPID=60
	 * @var string $SalesPackagingUnit [8] property SalesPackegingUnit
	*/
	var $SalesPackagingUnit;

	/**
	 * DISPID=61
	 * @var float $SalesQtyPerPackUnit [5] property SalesQtyPerPackUnit
	*/
	var $SalesQtyPerPackUnit;

	/**
	 * DISPID=62
	 * @var float $SalesUnitLength [5] property SalesUnitLength
	*/
	var $SalesUnitLength;

	/**
	 * DISPID=63
	 * @var float $SalesUnitWidth [5] property SalesunitWidth
	*/
	var $SalesUnitWidth;

	/**
	 * DISPID=64
	 * @var int $SalesVolumeUnit [3] property SalesVolumeUnit
	*/
	var $SalesVolumeUnit;

	/**
	 * DISPID=65
	 * @var float $SalesUnitWeight [5] property SalesUnitWeight
	*/
	var $SalesUnitWeight;

	/**
	 * DISPID=66
	 * @var string $PurchasePackagingUnit [8] property PurchasePackagingUnit
	*/
	var $PurchasePackagingUnit;

	/**
	 * DISPID=67
	 * @var float $PurchaseQtyPerPackUnit [5] property PurchaseQtyPerPackUnit
	*/
	var $PurchaseQtyPerPackUnit;

	/**
	 * DISPID=68
	 * @var float $PurchaseUnitLength [5] property PurchaseUnitLength
	*/
	var $PurchaseUnitLength;

	/**
	 * DISPID=69
	 * @var float $PurchaseUnitWidth [5] property PurchaseUnitWidth
	*/
	var $PurchaseUnitWidth;

	/**
	 * DISPID=70
	 * @var float $PurchaseUnitHeight [5] property PurchaseUnitHeight
	*/
	var $PurchaseUnitHeight;

	/**
	 * DISPID=71
	 * @var float $PurchaseUnitVolume [5] property PurchaseUnitVolume
	*/
	var $PurchaseUnitVolume;

	/**
	 * DISPID=72
	 * @var int $PurchaseVolumeUnit [3] property PurchaseVolumeUnit
	*/
	var $PurchaseVolumeUnit;

	/**
	 * DISPID=73
	 * @var float $PurchaseUnitWeight [5] property PurchaseUnitWeight
	*/
	var $PurchaseUnitWeight;

	/**
	 * DISPID=74
	 * @var string $PurchaseVATGroup [8] property PurchaseVATGroup
	*/
	var $PurchaseVATGroup;

	/**
	 * DISPID=75
	 * @var float $SalesFactor1 [5] property SalesFactor1
	*/
	var $SalesFactor1;

	/**
	 * DISPID=76
	 * @var float $SalesFactor2 [5] property SalesFactor2
	*/
	var $SalesFactor2;

	/**
	 * DISPID=77
	 * @var float $SalesFactor3 [5] property SalesFactor3
	*/
	var $SalesFactor3;

	/**
	 * DISPID=78
	 * @var float $SalesFactor4 [5] property SalesFactor4
	*/
	var $SalesFactor4;

	/**
	 * DISPID=79
	 * @var float $PurchaseFactor1 [5] property PurchaseFactor1
	*/
	var $PurchaseFactor1;

	/**
	 * DISPID=80
	 * @var float $PurchaseFactor2 [5] property PurchaseFactor2
	*/
	var $PurchaseFactor2;

	/**
	 * DISPID=81
	 * @var float $PurchaseFactor3 [5] property PurchaseFactor3
	*/
	var $PurchaseFactor3;

	/**
	 * DISPID=82
	 * @var float $PurchaseFactor4 [5] property PurchaseFactor4
	*/
	var $PurchaseFactor4;

	/**
	 * DISPID=83
	 * @var float $MovingAveragePrice [5] property MovingAveragePrice
	*/
	var $MovingAveragePrice;

	/**
	 * DISPID=84
	 * @var int $SalesLengthUnit [3] property SalesLengthUnit
	*/
	var $SalesLengthUnit;

	/**
	 * DISPID=85
	 * @var int $SalesWidthUnit [3] property SalesWidthUnit
	*/
	var $SalesWidthUnit;

	/**
	 * DISPID=86
	 * @var int $SalesHeightUnit [3] property SalesHeightUnit
	*/
	var $SalesHeightUnit;

	/**
	 * DISPID=87
	 * @var int $SalesWeightUnit [3] property SalesWeightUnit
	*/
	var $SalesWeightUnit;

	/**
	 * DISPID=88
	 * @var int $PurchaseWidthUnit [3] property PurchaseWidthUnit
	*/
	var $PurchaseWidthUnit;

	/**
	 * DISPID=89
	 * @var int $PurchaseLengthUnit [3] property PurchaseLengthUnit
	*/
	var $PurchaseLengthUnit;

	/**
	 * DISPID=90
	 * @var int $PurchaseHeightUnit [3] property PurchaseHeightUnit
	*/
	var $PurchaseHeightUnit;

	/**
	 * DISPID=91
	 * @var int $PurchaseWeightUnit [3] property PurchaseWeightUnit
	*/
	var $PurchaseWeightUnit;

	/**
	 * DISPID=92
	 * @var string $ForeignRevenuesAccount [8] property ForeignRevenuesAccount
	*/
	var $ForeignRevenuesAccount;

	/**
	 * DISPID=93
	 * @var string $ECRevenuesAccount [8] property ECRevenuesAccount
	*/
	var $ECRevenuesAccount;

	/**
	 * DISPID=94
	 * @var string $ForeignExpensesAccount [8] property ForeignExpensesAccount
	*/
	var $ForeignExpensesAccount;

	/**
	 * DISPID=95
	 * @var string $ECExpensesAccount [8] property ECExpensesAccount
	*/
	var $ECExpensesAccount;

	/**
	 * DISPID=96
	 * @var float $AvgStdPrice [5] property AvgStdPrice
	*/
	var $AvgStdPrice;

	/**
	 * DISPID=97
	 * @var string $DefaultWarehouse [8] property DefaultWarehouse
	*/
	var $DefaultWarehouse;

	/**
	 * DISPID=98
	 * @var int $ShipType [3] property ShipType
	*/
	var $ShipType;

	/**
	 * DISPID=99
	 * @var int|VT_USERDEFINED $GLMethod [29] property GLMethod
	*/
	var $GLMethod;

	/**
	 * DISPID=100
	 * @var int|VT_USERDEFINED $TaxType [29] property TaxType
	*/
	var $TaxType;

	/**
	 * DISPID=101
	 * @var mixed|VT_PTR $WhsInfo [26] property PriceList
	*/
	var $WhsInfo;

	/**
	 * DISPID=102
	 * @var float $MaxInventory [5] property MaxInventory
	*/
	var $MaxInventory;

	/**
	 * DISPID=103
	 * @var int|VT_USERDEFINED $ManageStockByWarehouse [29] property ManageStockByWarehouse
	*/
	var $ManageStockByWarehouse;

	/**
	 * DISPID=104
	 * @var int $PurchaseHeightUnit1 [3] property PurchaseHeightUnit1
	*/
	var $PurchaseHeightUnit1;

	/**
	 * DISPID=105
	 * @var float $PurchaseUnitHeight1 [5] property PurchaseUnitHeight1
	*/
	var $PurchaseUnitHeight1;

	/**
	 * DISPID=106
	 * @var int $PurchaseLengthUnit1 [3] property PurchaseLengthUnit1
	*/
	var $PurchaseLengthUnit1;

	/**
	 * DISPID=107
	 * @var float $PurchaseUnitLength1 [5] property PurchaseUnitLength1
	*/
	var $PurchaseUnitLength1;

	/**
	 * DISPID=108
	 * @var int $PurchaseWeightUnit1 [3] property PurchaseWeightUnit1
	*/
	var $PurchaseWeightUnit1;

	/**
	 * DISPID=109
	 * @var float $PurchaseUnitWeight1 [5] property PurchaseUnitWeight1
	*/
	var $PurchaseUnitWeight1;

	/**
	 * DISPID=110
	 * @var int $PurchaseWidthUnit1 [3] property PurchaseWidthUnit1
	*/
	var $PurchaseWidthUnit1;

	/**
	 * DISPID=111
	 * @var float $PurchaseUnitWidth1 [5] property PurchaseUnitWidth1
	*/
	var $PurchaseUnitWidth1;

	/**
	 * DISPID=112
	 * @var int $SalesHeightUnit1 [3] property SalesHeightUnit1
	*/
	var $SalesHeightUnit1;

	/**
	 * DISPID=113
	 * @var float $SalesUnitHeight1 [5] property SalesUnitHeight1
	*/
	var $SalesUnitHeight1;

	/**
	 * DISPID=114
	 * @var int $SalesLengthUnit1 [3] property SalesLengthUnit1
	*/
	var $SalesLengthUnit1;

	/**
	 * DISPID=115
	 * @var float $SalesUnitLength1 [5] property SalesUnitLength1
	*/
	var $SalesUnitLength1;

	/**
	 * DISPID=116
	 * @var int $SalesWeightUnit1 [3] property SalesWeightUnit1
	*/
	var $SalesWeightUnit1;

	/**
	 * DISPID=117
	 * @var float $SalesUnitWeight1 [5] property SalesUnitWeight1
	*/
	var $SalesUnitWeight1;

	/**
	 * DISPID=118
	 * @var int $SalesWidthUnit1 [3] property SalesWidthUnit1
	*/
	var $SalesWidthUnit1;

	/**
	 * DISPID=119
	 * @var float $SalesUnitWidth1 [5] property SalesUnitWidth1
	*/
	var $SalesUnitWidth1;

	/**
	 * DISPID=120
	 * @var int|VT_USERDEFINED $ForceSelectionOfSerialNumber [29] property ForceSelectionOfSerialNumber
	*/
	var $ForceSelectionOfSerialNumber;

	/**
	 * DISPID=121
	 * @var int|VT_USERDEFINED $ManageSerialNumbersOnReleaseOnly [29] property ManageSerialNumbersOnReleaseOnly
	*/
	var $ManageSerialNumbersOnReleaseOnly;

	/**
	 * DISPID=122
	 * @var int|VT_USERDEFINED $WTLiable [29] property WTLiable
	*/
	var $WTLiable;

	/**
	 * DISPID=123
	 * @var string $BaseUnitName [8] property BaseUnitName
	*/
	var $BaseUnitName;

	/**
	 * DISPID=124
	 * @var string $ItemCountryOrg [8] property ItemCountryOrg
	*/
	var $ItemCountryOrg;

	/**
	 * DISPID=125
	 * @var string $SWW [8] property SWW
	*/
	var $SWW;

	/**
	 * DISPID=126
	 * @var string $ApTaxCode [8] property ApTaxCode
	*/
	var $ApTaxCode;

	/**
	 * DISPID=127
	 * @var string $ArTaxCode [8] property ArTaxCode
	*/
	var $ArTaxCode;

	/**
	 * DISPID=128
	 * @var int|VT_USERDEFINED $CostAccountingMethod [29] property CostAccountingMethod
	*/
	var $CostAccountingMethod;

	/**
	 * DISPID=129
	 * @var string $WarrantyTemplate [8] property WarrantyTemplate
	*/
	var $WarrantyTemplate;

	/**
	 * DISPID=130
	 * @var int|VT_USERDEFINED $IndirectTax [29] property IndirectTax
	*/
	var $IndirectTax;

	/**
	 * DISPID=131
	 * @var int|VT_USERDEFINED $IssueMethod [29] property IssueMethod
	*/
	var $IssueMethod;

	/**
	 * DISPID=132
	 * @var int|VT_USERDEFINED $SRIAndBatchManageMethod [29] property SRIAndBatchManageMethod
	*/
	var $SRIAndBatchManageMethod;

	/**
	 * DISPID=133
	 * @return string 
	 * Get the object's data in xml format.
	 */
	function GetAsXML()
	{
	}

	/**
	 * DISPID=134
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
	 * DISPID=135
	 * @var int|VT_USERDEFINED $IsPhantom [29] property IsPhantom
	*/
	var $IsPhantom;

	/**
	 * DISPID=136
	 * @var string $InventoryUOM [8] property InventoryUOM
	*/
	var $InventoryUOM;

	/**
	 * DISPID=137
	 * @var int|VT_USERDEFINED $PlanningSystem [29] property PlanningSystem
	*/
	var $PlanningSystem;

	/**
	 * DISPID=138
	 * @var int|VT_USERDEFINED $ProcurementMethod [29] property ProcurementMethod
	*/
	var $ProcurementMethod;

	/**
	 * DISPID=139
	 * @var string $OrderIntervals [8] property OrderIntervals
	*/
	var $OrderIntervals;

	/**
	 * DISPID=140
	 * @var float $OrderMultiple [5] property OrderMultiple
	*/
	var $OrderMultiple;

	/**
	 * DISPID=141
	 * @var int $LeadTime [3] property LeadTime
	*/
	var $LeadTime;

	/**
	 * DISPID=142
	 * @var float $MinOrderQuantity [5] property MinOrderQuantity
	*/
	var $MinOrderQuantity;

	/**
	 * DISPID=143
	 * @var int|VT_USERDEFINED $ItemType [29] property ItemType
	*/
	var $ItemType;

	/**
	 * DISPID=144
	 * @var int|VT_USERDEFINED $ItemClass [29] property ItemClass
	*/
	var $ItemClass;

	/**
	 * DISPID=145
	 * @var int $OutgoingServiceCode [3] property OutgoingServiceCode
	*/
	var $OutgoingServiceCode;

	/**
	 * DISPID=146
	 * @var int $IncomingServiceCode [3] property IncomingServiceCode
	*/
	var $IncomingServiceCode;

	/**
	 * DISPID=147
	 * @var int $ServiceGroup [3] property ServiceGroup
	*/
	var $ServiceGroup;

	/**
	 * DISPID=148
	 * @var int $NCMCode [3] property NCMCode
	*/
	var $NCMCode;

	/**
	 * DISPID=149
	 * @var int|VT_USERDEFINED $MaterialType [29] property MaterialType
	*/
	var $MaterialType;

	/**
	 * DISPID=150
	 * @var int $MaterialGroup [3] property MaterialGroup
	*/
	var $MaterialGroup;

	/**
	 * DISPID=151
	 * @var int $ProductSource [3] property ProductSource
	*/
	var $ProductSource;

	/**
	 * DISPID=152
	 * @var int|VT_USERDEFINED $AutoCreateSerialNumbersOnRelease [29] property AutoCreateSerialNumbersOnRelease
	*/
	var $AutoCreateSerialNumbersOnRelease;

	/**
	 * DISPID=153
	 * @var int $DNFEntry [3] property DNFEntry
	*/
	var $DNFEntry;

	/**
	 * DISPID=154
	 * @var string $GTSItemSpec [8] property GTSItemSpec
	*/
	var $GTSItemSpec;

	/**
	 * DISPID=155
	 * @var string $GTSItemTaxCategory [8] property GTSItemTaxCategory
	*/
	var $GTSItemTaxCategory;

	/**
	 * DISPID=156
	 * @var mixed|VT_PTR $PreferredVendors [26] property PreferredVendors
	*/
	var $PreferredVendors;

	/**
	 * DISPID=157
	 * @var int $FuelID [3] property FuelID
	*/
	var $FuelID;

	/**
	 * DISPID=158
	 * @var string $BeverageTableCode [8] property BeverageTableCode
	*/
	var $BeverageTableCode;

	/**
	 * DISPID=159
	 * @var string $BeverageGroupCode [8] property BeverageGroupCode
	*/
	var $BeverageGroupCode;

	/**
	 * DISPID=160
	 * @var int $BeverageCommercialBrandCode [3] property BeverageCommercialBrandCode
	*/
	var $BeverageCommercialBrandCode;

	/**
	 * DISPID=161
	 * @var int $Series [3] property Series
	*/
	var $Series;

	/**
	 * DISPID=162
	 * @var int $ToleranceDays [3] property ToleranceDays
	*/
	var $ToleranceDays;

	/**
	 * DISPID=163
	 * @var mixed|VT_PTR $LocalizationInfos [26] property LocalizationInfos
	*/
	var $LocalizationInfos;

	/**
	 * DISPID=164
	 * @var int|VT_USERDEFINED $TypeOfAdvancedRules [29] property TypeOfAdvancedRules
	*/
	var $TypeOfAdvancedRules;

	/**
	 * DISPID=166
	 * @var int|VT_USERDEFINED $NoDiscounts [29] property NoDiscounts
	*/
	var $NoDiscounts;

	/**
	 * DISPID=167
	 * @var string $AssetClass [8] property AssetClass
	*/
	var $AssetClass;

	/**
	 * DISPID=168
	 * @var string $AssetGroup [8] property AssetGroup
	*/
	var $AssetGroup;

	/**
	 * DISPID=169
	 * @var string $InventoryNumber [8] property InventoryNumber
	*/
	var $InventoryNumber;

	/**
	 * DISPID=170
	 * @var int $Technician [3] property Technician
	*/
	var $Technician;

	/**
	 * DISPID=171
	 * @var int $Employee [3] property Employee
	*/
	var $Employee;

	/**
	 * DISPID=172
	 * @var int $Location [3] property Location
	*/
	var $Location;

	/**
	 * DISPID=173
	 * @var int|VT_USERDEFINED $StatisticalAsset [29] property StatisticalAsset
	*/
	var $StatisticalAsset;

	/**
	 * DISPID=174
	 * @var int|VT_USERDEFINED $Cession [29] property Cession
	*/
	var $Cession;

	/**
	 * DISPID=175
	 * @var int|VT_USERDEFINED $DeactivateAfterUsefulLife [29] property DeactivateAfterUsefulLife
	*/
	var $DeactivateAfterUsefulLife;

	/**
	 * DISPID=176
	 * @var int|VT_USERDEFINED $AssetStatus [29] property AssetStatus
	*/
	var $AssetStatus;

	/**
	 * DISPID=177
	 * @var string|VT_DATE $CapitalizationDate [7] property CapitalizationDate
	*/
	var $CapitalizationDate;

	/**
	 * DISPID=178
	 * @var int|VT_USERDEFINED $ManageByQuantity [29] property ManageByQuantity
	*/
	var $ManageByQuantity;

	/**
	 * DISPID=179
	 * @var mixed|VT_PTR $Projects [26] property Projects
	*/
	var $Projects;

	/**
	 * DISPID=180
	 * @var mixed|VT_PTR $DistributionRules [26] property DistributionRules
	*/
	var $DistributionRules;

	/**
	 * DISPID=181
	 * @var mixed|VT_PTR $DepreciationParameters [26] property DepreciationParameters
	*/
	var $DepreciationParameters;

	/**
	 * DISPID=182
	 * @var mixed|VT_PTR $PeriodControls [26] property PeriodControls
	*/
	var $PeriodControls;

	/**
	 * DISPID=183
	 * @var int $UoMGroupEntry [3] property UoMGroupEntry
	*/
	var $UoMGroupEntry;

	/**
	 * DISPID=184
	 * @var int $InventoryUoMEntry [3] property InventoryUoMEntry
	*/
	var $InventoryUoMEntry;

	/**
	 * DISPID=185
	 * @var int $DefaultSalesUoMEntry [3] property DefaultSalesUoMEntry
	*/
	var $DefaultSalesUoMEntry;

	/**
	 * DISPID=186
	 * @var int $DefaultPurchasingUoMEntry [3] property DefaultPurchasingUoMEntry
	*/
	var $DefaultPurchasingUoMEntry;

	/**
	 * DISPID=187
	 * @var mixed|VT_PTR $UnitOfMeasurements [26] property UnitOfMeasurements
	*/
	var $UnitOfMeasurements;

	/**
	 * DISPID=192
	 * @var string $DepreciationGroup [8] property DepreciationGroup
	*/
	var $DepreciationGroup;

	/**
	 * DISPID=193
	 * @var string $AssetSerialNumber [8] property AssetSerialNumber
	*/
	var $AssetSerialNumber;

	/**
	 * DISPID=165
	 * @var int|VT_USERDEFINED $IssuePrimarilyBy [29] property IssuePrimarilyBy
	*/
	var $IssuePrimarilyBy;

	/**
	 * DISPID=194
	 * @var mixed|VT_PTR $AttributeGroups [26] property Attribute Groups
	*/
	var $AttributeGroups;

	/**
	 * DISPID=195
	 * @var mixed|VT_PTR $IntrastatExtension [26] property IntrastatExtension
	*/
	var $IntrastatExtension;

	/**
	 * DISPID=196
	 * @var mixed|VT_PTR $BarCodes [26] property BarCodes
	*/
	var $BarCodes;

	/**
	 * DISPID=197
	 * @var string $DefaultCountingUnit [8] property DefaultCountingUnit
	*/
	var $DefaultCountingUnit;

	/**
	 * DISPID=198
	 * @var float $CountingItemsPerUnit [5] property CountingItemsPerUnit
	*/
	var $CountingItemsPerUnit;

	/**
	 * DISPID=199
	 * @var int $DefaultCountingUoMEntry [3] property DefaultCountingUoMEntry
	*/
	var $DefaultCountingUoMEntry;

	/**
	 * DISPID=200
	 * @var int|VT_USERDEFINED $Excisable [29] property Excisable
	*/
	var $Excisable;

	/**
	 * DISPID=201
	 * @var int $ChapterID [3] property ChapterID
	*/
	var $ChapterID;

	/**
	 * DISPID=202
	 * @var string $ScsCode [8] property ScsCode
	*/
	var $ScsCode;

	/**
	 * DISPID=203
	 * @var int|VT_USERDEFINED $SpProdType [29] property SpProdType
	*/
	var $SpProdType;

	/**
	 * DISPID=204
	 * @var float $InventoryWeight [5] property InventoryWeight
	*/
	var $InventoryWeight;

	/**
	 * DISPID=205
	 * @var int $InventoryWeightUnit [3] property InventoryWeightUnit
	*/
	var $InventoryWeightUnit;

	/**
	 * DISPID=206
	 * @var float $InventoryWeight1 [5] property InventoryWeight1
	*/
	var $InventoryWeight1;

	/**
	 * DISPID=207
	 * @var int $InventoryWeightUnit1 [3] property InventoryWeightUnit1
	*/
	var $InventoryWeightUnit1;

	/**
	 * DISPID=208
	 * @var int|VT_USERDEFINED $ComponentWarehouse [29] property ComponentWarehouse
	*/
	var $ComponentWarehouse;

	/**
	 * DISPID=209
	 * @param string $FileName [in]
	 * @return int 
	 * method UpdateFromXML
	 */
	function UpdateFromXML(
		/* string [8] [in] */ $FileName 
	)
	{
	}

	/**
	 * DISPID=210
	 * @var float $ProdStdCost [5] property ProdStdCost
	*/
	var $ProdStdCost;

	/**
	 * DISPID=211
	 * @var int|VT_USERDEFINED $InCostRollup [29] property InCostRollup
	*/
	var $InCostRollup;

	/**
	 * DISPID=212
	 * @var int|VT_USERDEFINED $VirtualAssetItem [29] property VirtualAssetItem
	*/
	var $VirtualAssetItem;

	/**
	 * DISPID=213
	 * @var int|VT_USERDEFINED $EnforceAssetSerialNumbers [29] property EnforceAssetSerialNumbers
	*/
	var $EnforceAssetSerialNumbers;

	/**
	 * DISPID=214
	 * @var int $AttachmentEntry [3] property AttachmentEntry
	*/
	var $AttachmentEntry;

	/**
	 * DISPID=215
	 * @var string $LinkedResource [8] property LinkedResource
	*/
	var $LinkedResource;

}