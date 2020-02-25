<?php
/**
 * Created by PhpStorm.
 * User: E-Commerce 2
 * Date: 25/11/2016
 * Time: 16:01
 */

namespace Litiano\Sap\IdeHelper;


/**
 * Class IDocument_Lines
 * GUID={248B28DD-1281-4C6C-9780-22D19BA13D1F}
 *
 * @property-read int $LineNum LineNum
 * @property string $ItemCode ItemCode
 * @property string $ItemDescription ItemDescription
 * @property float $Quantity Quantity
 * @property string|VT_DATE $ShipDate ShipDate
 * @property float $Price Price
 * @property float $PriceAfterVAT PriceAfter
 * @property string $Currency Currency
 * @property float $Rate Rate
 * @property float $DiscountPercent Discount percent
 * @property string $VendorNum Vendor num
 * @property string $SerialNum Serial num
 * @property string $WarehouseCode Warehouse
 * @property int $SalesPersonCode Sales Person code
 * @property float $CommisionPercent Commision percent
 * @property-read int|VT_USERDEFINED $TreeType Tree type
 * @property string $AccountCode Account code
 * @property int|VT_USERDEFINED $UseBaseUnits Use base units
 * @property string $SupplierCatNum Supplier catalog number
 * @property string $CostingCode Costing code
 * @property string $ProjectCode Project code
 * @property string $BarCode Bar code
 * @property string $VatGroup Vat Group
 * @property float $Height1 Height 1
 * @property int $Hight1Unit Height 1 unit
 * @property float $Height2 Height 2
 * @property int $Height2Unit Height 2 unit
 * @property float $Lengh1 Length 1
 * @property int $Lengh1Unit Length 1 unit
 * @property float $Lengh2 Length 2
 * @property int $Lengh2Unit Length 2 unit
 * @property float $Weight1 Weight 1
 * @property int $Weight1Unit Weight 1 unit
 * @property float $Weight2 Weight 2
 * @property int $Weight2Unit Weight 2 unit
 * @property float $Factor1 Factor 1
 * @property float $Factor2 Factor 2
 * @property float $Factor3 Factor 3
 * @property float $Factor4 Factor 4
 * @property int $BaseType Base type
 * @property int $BaseEntry Base entry
 * @property int $BaseLine Base line
 * @property float $Volume Volume
 * @property int $VolumeUnit Volume unit
 * @property-read int $Count Lines Count
 * @property-read IUserFields $UserFields Invoke  the user fields object
 * @property float $Width1 property Width1
 * @property int $Width1Unit property Width1Unit
 * @property float $Width2 property Width2
 * @property int $Width2Unit property Width2Unit
 * @property string $Address property Address
 * @property string $TaxCode property TaxCode
 * @property int|VT_USERDEFINED $TaxType property TaxType
 * @property int|VT_USERDEFINED $TaxLiable property TaxLiable
 * @property-read int|VT_USERDEFINED $PickStatus property PickStatus
 * @property-read float $PickQuantity property PickQuantity
 * @property-read int $PickListIdNumber property PickListIdNumber
 * @property-read string $OriginalItem property OriginalItem
 * @property int|VT_USERDEFINED $BackOrder property BackOrder
 * @property string $FreeText property FreeText
 * @property int $ShippingMethod property ShippingMethod
 * @property-read int $POTargetNum property POTargetNum
 * @property-read string $POTargetEntry property POTargetEntry
 * @property-read string $POTargetRowNum property POTargetRowNum
 * @property-read mixed|VT_PTR $SerialNumbers property SerialNumbers
 * @property-read mixed|VT_PTR $BatchNumbers property BatchNumbers
 * @property-read mixed|VT_PTR $Expenses property Expenses
 * @property int|VT_USERDEFINED $CorrectionInvoiceItem property CorrectionInvoiceItem
 * @property float $CorrInvAmountToStock property CorrInvAmountToStock
 * @property float $CorrInvAmountToDiffAcct property CorrInvAmountToDiffAcct
 * @property-read float $AppliedTax property AppliedTax
 * @property-read float $AppliedTaxFC property AppliedTaxFC
 * @property-read float $AppliedTaxSC property AppliedTaxSC
 * @property int|VT_USERDEFINED $WTLiable property WTLiable
 * @property-read float $EqualizationTaxPercent property EqualizationTaxPercent
 * @property-read float $TotalEqualizationTaxFC property TotalEqualizationTaxFC
 * @property-read float $TotalEqualizationTaxSC property TotalEqualizationTaxSC
 * @property float $NetTaxAmount property NetTaxAmount
 * @property float $NetTaxAmountFC property NetTaxAmountFC
 * @property-read float $NetTaxAmountSC property NetTaxAmountSC
 * @property float $LineTotal property LineTotal
 * @property float $TaxPercentagePerRow property TaxPercentagePerRow
 * @property float $TaxTotal property TaxTotal
 * @property int|VT_USERDEFINED $DeferredTax property DeferredTax
 * @property-read float $TotalEqualizationTax property TotalEqualizationTax
 * @property string $MeasureUnit property MeasureUnit
 * @property float $UnitsOfMeasurment property UnitsOfMeasurment
 * @property float $ExciseAmount property ExciseAmount
 * @property-read float $TaxPerUnit property TaxPerUnit
 * @property-read float $TotalInclTax property TotalInclTax
 * @property string $CountryOrg property CountryOrg
 * @property string $SWW property SWW
 * @property int|VT_USERDEFINED $ConsumerSalesForecast property ConsumerSalesForecast
 * @property-read mixed|VT_PTR $WithholdingTaxLines property WithholdingTaxLines
 * @property string $CFOPCode property CFOPCode
 * @property string $CSTCode property CSTCode
 * @property string $Usage property Usage
 * @property int|VT_USERDEFINED $TaxOnly property TaxOnly
 * @property-read float $TaxBeforeDPM property TaxBeforeDPM
 * @property-read float $TaxBeforeDPMFC property TaxBeforeDPMFC
 * @property-read float $TaxBeforeDPMSC property TaxBeforeDPMSC
 * @property int|VT_USERDEFINED $TransactionType property TransactionType
 * @property int|VT_USERDEFINED $DistributeExpense property DistributeExpense
 * @property string $ShipToCode property ShipToCode
 * @property float $RowTotalFC property RowTotalFC
 * @property-read float $RowTotalSC property RowTotalSC
 * @property-read float $LastBuyInmPrice property LastBuyInmPrice
 * @property-read float $LastBuyDistributeSumFc property LastBuyDistributeSumFc
 * @property-read float $LastBuyDistributeSumSc property LastBuyDistributeSumSc
 * @property-read float $LastBuyDistributeSum property LastBuyDistributeSum
 * @property-read float $StockDistributesumForeign property StockDistributesumForeign
 * @property-read float $StockDistributesumSystem property StockDistributesumSystem
 * @property-read float $StockDistributesum property StockDistributesum
 * @property-read float $StockInmPrice property StockInmPrice
 * @property-read int|VT_USERDEFINED $PickStatusEx property PickStatusEx
 * @property-read int $VisualOrder property VisualOrder
 * @property-read float $BaseOpenQuantity property BaseOpenQuantity
 * @property float $UnitPrice property UnitPrice
 * @property int|VT_USERDEFINED $LineStatus property LineStatus
 * @property float $PackageQuantity property PackageQuantity
 * @property-read string $Text property Text
 * @property int|VT_USERDEFINED $LineType property LineType
 * @property string $COGSCostingCode property COGSCostingCode
 * @property string $COGSAccountCode property COGSAccountCode
 * @property string $ChangeAssemlyBoMWarehouse property ChangeAssemlyBoMWarehouse
 * @property string $ItemDetails property ItemDetails
 * @property string|VT_DATE $ActualDeliveryDate property ActualDeliveryDate
 * @property int $LocationCode property LocationCode
 * @property string $CostingCode2 property CostingCode2
 * @property string $CostingCode3 property CostingCode3
 * @property string $CostingCode4 property CostingCode4
 * @property string $CostingCode5 property CostingCode5
 * @property-read float $RemainingOpenQuantity property RemainingOpenQuantity
 * @property-read float $OpenAmount property OpenAmount
 * @property-read float $OpenAmountFC property OpenAmountFC
 * @property-read float $OpenAmountSC property OpenAmountSC
 * @property float $GrossBuyPrice property GrossBuyPrice
 * @property int $GrossBase property GrossBase
 * @property float $GrossProfitTotalBasePrice property GrossProfitTotalBasePrice
 * @property string $ExLineNo property ExLineNo
 * @property-read mixed|VT_PTR $TaxJurisdictions property TaxJurisdictions
 * @property string|VT_DATE $RequiredDate property RequiredDate
 * @property float $RequiredQuantity property RequiredQuantity
 * @property string $COGSCostingCode2 property COGSCostingCode2
 * @property string $COGSCostingCode3 property COGSCostingCode3
 * @property string $COGSCostingCode4 property COGSCostingCode4
 * @property string $COGSCostingCode5 property COGSCostingCode5
 * @property string $CSTforIPI property CSTforIPI
 * @property string $CSTforPIS property CSTforPIS
 * @property string $CSTforCOFINS property CSTforCOFINS
 * @property string $CreditOriginCode property CreditOriginCode
 * @property int|VT_USERDEFINED $WithoutInventoryMovement property WithoutInventoryMovement
 * @property int $AgreementNo property AgreementNo
 * @property int $AgreementRowNumber property AgreementRowNumber
 * @property string $ShipToDescription property ShipToDescription
 * @property int $ActualBaseEntry property ActualBaseEntry
 * @property int $ActualBaseLine property ActualBaseLine
 * @property-read int $DocEntry property DocEntry
 * @property-read mixed|VT_PTR $ImportProcesses property ImportProcesses
 * @property-read mixed|VT_PTR $ExportProcesses property ExportProcesses
 * @property float $Surpluses property Surpluses
 * @property float $DefectAndBreakup property DefectAndBreakup
 * @property float $Shortages property Shortages
 * @property int|VT_USERDEFINED $ConsiderQuantity property ConsiderQuantity
 * @property int|VT_USERDEFINED $PartialRetirement property PartialRetirement
 * @property float $RetirementQuantity property RetirementQuantity
 * @property float $RetirementAPC property RetirementAPC
 * @property int|VT_USERDEFINED $EnableReturnCost property EnableReturnCost
 * @property float $ReturnCost property ReturnCost
 * @property int $UoMEntry property UoMEntry
 * @property-read string $UoMCode property UoMCode
 * @property float $InventoryQuantity property InventoryQuantity
 * @property-read float $RemainingOpenInventoryQuantity property RemainingOpenInventoryQuantity
 * @property-read mixed|VT_PTR $BinAllocations property BinAllocations
 * @property string $LineVendor property LineVendor
 * @property int $Incoterms property Incoterms
 * @property int $TransportMode property TransportMode
 * @property int $ParentLineNum property ParentLineNum
 * @property-read int|VT_USERDEFINED $ItemType property ItemType
 * @property int|VT_USERDEFINED $ThirdParty property ThirdParty
 * @property int|VT_USERDEFINED $ChangeInventoryQuantityIndependently property ChangeInventoryQuantityIndependently
 * @property int|VT_USERDEFINED $FreeOfChargeBP property FreeOfChargeBP
 * @property-read mixed|VT_PTR $GeneratedAssets property GeneratedAssets
 * @property string $ExpenseType property ExpenseType
 * @property string $ReceiptNumber property ReceiptNumber
 * @property int|VT_USERDEFINED $ExpenseOperationType property ExpenseOperationType
 * @property string $FederalTaxID property FederalTaxID
 */
class IDocument_Lines
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
     * @return void
     * Add
     */
    function Add()
    {
    }

    /**
     * DISPID=2
     * @var int $LineNum [3] LineNum
     */
    var $LineNum;

    /**
     * DISPID=3
     * @var string $ItemCode [8] ItemCode
     */
    var $ItemCode;

    /**
     * DISPID=4
     * @var string $ItemDescription [8] ItemDescription
     */
    var $ItemDescription;

    /**
     * DISPID=5
     * @var float $Quantity [5] Quantity
     */
    var $Quantity;

    /**
     * DISPID=6
     * @var string|VT_DATE $ShipDate [7] ShipDate
     */
    var $ShipDate;

    /**
     * DISPID=7
     * @var float $Price [5] Price
     */
    var $Price;

    /**
     * DISPID=8
     * @var float $PriceAfterVAT [5] PriceAfter
     */
    var $PriceAfterVAT;

    /**
     * DISPID=9
     * @var string $Currency [8] Currency
     */
    var $Currency;

    /**
     * DISPID=10
     * @var float $Rate [5] Rate
     */
    var $Rate;

    /**
     * DISPID=11
     * @var float $DiscountPercent [5] Discount percent
     */
    var $DiscountPercent;

    /**
     * DISPID=12
     * @var string $VendorNum [8] Vendor num
     */
    var $VendorNum;

    /**
     * DISPID=13
     * @var string $SerialNum [8] Serial num
     */
    var $SerialNum;

    /**
     * DISPID=14
     * @var string $WarehouseCode [8] Warehouse
     */
    var $WarehouseCode;

    /**
     * DISPID=15
     * @var int $SalesPersonCode [3] Sales Person code
     */
    var $SalesPersonCode;

    /**
     * DISPID=16
     * @var float $CommisionPercent [5] Commision percent
     */
    var $CommisionPercent;

    /**
     * DISPID=17
     * @var int|VT_USERDEFINED $TreeType [29] Tree type
     */
    var $TreeType;

    /**
     * DISPID=18
     * @var string $AccountCode [8] Account code
     */
    var $AccountCode;

    /**
     * DISPID=19
     * @var int|VT_USERDEFINED $UseBaseUnits [29] Use base units
     */
    var $UseBaseUnits;

    /**
     * DISPID=20
     * @var string $SupplierCatNum [8] Supplier catalog number
     */
    var $SupplierCatNum;

    /**
     * DISPID=21
     * @var string $CostingCode [8] Costing code
     */
    var $CostingCode;

    /**
     * DISPID=22
     * @var string $ProjectCode [8] Project code
     */
    var $ProjectCode;

    /**
     * DISPID=23
     * @var string $BarCode [8] Bar code
     */
    var $BarCode;

    /**
     * DISPID=24
     * @var string $VatGroup [8] Vat Group
     */
    var $VatGroup;

    /**
     * DISPID=25
     * @var float $Height1 [5] Height 1
     */
    var $Height1;

    /**
     * DISPID=26
     * @var int $Hight1Unit [3] Height 1 unit
     */
    var $Hight1Unit;

    /**
     * DISPID=27
     * @var float $Height2 [5] Height 2
     */
    var $Height2;

    /**
     * DISPID=28
     * @var int $Height2Unit [3] Height 2 unit
     */
    var $Height2Unit;

    /**
     * DISPID=29
     * @var float $Lengh1 [5] Length 1
     */
    var $Lengh1;

    /**
     * DISPID=30
     * @var int $Lengh1Unit [3] Length 1 unit
     */
    var $Lengh1Unit;

    /**
     * DISPID=31
     * @var float $Lengh2 [5] Length 2
     */
    var $Lengh2;

    /**
     * DISPID=32
     * @var int $Lengh2Unit [3] Length 2 unit
     */
    var $Lengh2Unit;

    /**
     * DISPID=33
     * @var float $Weight1 [5] Weight 1
     */
    var $Weight1;

    /**
     * DISPID=34
     * @var int $Weight1Unit [3] Weight 1 unit
     */
    var $Weight1Unit;

    /**
     * DISPID=35
     * @var float $Weight2 [5] Weight 2
     */
    var $Weight2;

    /**
     * DISPID=36
     * @var int $Weight2Unit [3] Weight 2 unit
     */
    var $Weight2Unit;

    /**
     * DISPID=37
     * @var float $Factor1 [5] Factor 1
     */
    var $Factor1;

    /**
     * DISPID=38
     * @var float $Factor2 [5] Factor 2
     */
    var $Factor2;

    /**
     * DISPID=39
     * @var float $Factor3 [5] Factor 3
     */
    var $Factor3;

    /**
     * DISPID=40
     * @var float $Factor4 [5] Factor 4
     */
    var $Factor4;

    /**
     * DISPID=41
     * @var int $BaseType [3] Base type
     */
    var $BaseType;

    /**
     * DISPID=42
     * @var int $BaseEntry [3] Base entry
     */
    var $BaseEntry;

    /**
     * DISPID=43
     * @var int $BaseLine [3] Base line
     */
    var $BaseLine;

    /**
     * DISPID=45
     * @var float $Volume [5] Volume
     */
    var $Volume;

    /**
     * DISPID=46
     * @var int $VolumeUnit [3] Volume unit
     */
    var $VolumeUnit;

    /**
     * DISPID=47
     * @var int $Count [3] Lines Count
     */
    var $Count;

    /**
     * DISPID=48
     * @param int $LineNum
     * @return void
     * Set the current line
     */
    function SetCurrentLine(
        /* int [3]  */ $LineNum
    )
    {
    }

    /**
     * DISPID=49
     * @var IUserFields $UserFields [26] Invoke  the user fields object
     */
    var $UserFields;

    /**
     * DISPID=50
     * @var float $Width1 [5] property Width1
     */
    var $Width1;

    /**
     * DISPID=51
     * @var int $Width1Unit [3] property Width1Unit
     */
    var $Width1Unit;

    /**
     * DISPID=52
     * @var float $Width2 [5] property Width2
     */
    var $Width2;

    /**
     * DISPID=53
     * @var int $Width2Unit [3] property Width2Unit
     */
    var $Width2Unit;

    /**
     * DISPID=54
     * @var string $Address [8] property Address
     */
    var $Address;

    /**
     * DISPID=55
     * @var string $TaxCode [8] property TaxCode
     */
    var $TaxCode;

    /**
     * DISPID=56
     * @var int|VT_USERDEFINED $TaxType [29] property TaxType
     */
    var $TaxType;

    /**
     * DISPID=57
     * @var int|VT_USERDEFINED $TaxLiable [29] property TaxLiable
     */
    var $TaxLiable;

    /**
     * DISPID=58
     * @var int|VT_USERDEFINED $PickStatus [29] property PickStatus
     */
    var $PickStatus;

    /**
     * DISPID=59
     * @var float $PickQuantity [5] property PickQuantity
     */
    var $PickQuantity;

    /**
     * DISPID=60
     * @var int $PickListIdNumber [3] property PickListIdNumber
     */
    var $PickListIdNumber;

    /**
     * DISPID=61
     * @var string $OriginalItem [8] property OriginalItem
     */
    var $OriginalItem;

    /**
     * DISPID=62
     * @var int|VT_USERDEFINED $BackOrder [29] property BackOrder
     */
    var $BackOrder;

    /**
     * DISPID=63
     * @var string $FreeText [8] property FreeText
     */
    var $FreeText;

    /**
     * DISPID=64
     * @var int $ShippingMethod [3] property ShippingMethod
     */
    var $ShippingMethod;

    /**
     * DISPID=65
     * @var int $POTargetNum [3] property POTargetNum
     */
    var $POTargetNum;

    /**
     * DISPID=66
     * @var string $POTargetEntry [8] property POTargetEntry
     */
    var $POTargetEntry;

    /**
     * DISPID=67
     * @var string $POTargetRowNum [8] property POTargetRowNum
     */
    var $POTargetRowNum;

    /**
     * DISPID=68
     * @var mixed|VT_PTR $SerialNumbers [26] property SerialNumbers
     */
    var $SerialNumbers;

    /**
     * DISPID=69
     * @var mixed|VT_PTR $BatchNumbers [26] property BatchNumbers
     */
    var $BatchNumbers;

    /**
     * DISPID=70
     * @var mixed|VT_PTR $Expenses [26] property Expenses
     */
    var $Expenses;

    /**
     * DISPID=71
     * @var int|VT_USERDEFINED $CorrectionInvoiceItem [29] property CorrectionInvoiceItem
     */
    var $CorrectionInvoiceItem;

    /**
     * DISPID=72
     * @var float $CorrInvAmountToStock [5] property CorrInvAmountToStock
     */
    var $CorrInvAmountToStock;

    /**
     * DISPID=73
     * @var float $CorrInvAmountToDiffAcct [5] property CorrInvAmountToDiffAcct
     */
    var $CorrInvAmountToDiffAcct;

    /**
     * DISPID=74
     * @var float $AppliedTax [5] property AppliedTax
     */
    var $AppliedTax;

    /**
     * DISPID=75
     * @var float $AppliedTaxFC [5] property AppliedTaxFC
     */
    var $AppliedTaxFC;

    /**
     * DISPID=76
     * @var float $AppliedTaxSC [5] property AppliedTaxSC
     */
    var $AppliedTaxSC;

    /**
     * DISPID=77
     * @var int|VT_USERDEFINED $WTLiable [29] property WTLiable
     */
    var $WTLiable;

    /**
     * DISPID=78
     * @var float $EqualizationTaxPercent [5] property EqualizationTaxPercent
     */
    var $EqualizationTaxPercent;

    /**
     * DISPID=79
     * @var float $TotalEqualizationTaxFC [5] property TotalEqualizationTaxFC
     */
    var $TotalEqualizationTaxFC;

    /**
     * DISPID=80
     * @var float $TotalEqualizationTaxSC [5] property TotalEqualizationTaxSC
     */
    var $TotalEqualizationTaxSC;

    /**
     * DISPID=81
     * @var float $NetTaxAmount [5] property NetTaxAmount
     */
    var $NetTaxAmount;

    /**
     * DISPID=82
     * @var float $NetTaxAmountFC [5] property NetTaxAmountFC
     */
    var $NetTaxAmountFC;

    /**
     * DISPID=83
     * @var float $NetTaxAmountSC [5] property NetTaxAmountSC
     */
    var $NetTaxAmountSC;

    /**
     * DISPID=84
     * @var float $LineTotal [5] property LineTotal
     */
    var $LineTotal;

    /**
     * DISPID=86
     * @var float $TaxPercentagePerRow [5] property TaxPercentagePerRow
     */
    var $TaxPercentagePerRow;

    /**
     * DISPID=87
     * @var float $TaxTotal [5] property TaxTotal
     */
    var $TaxTotal;

    /**
     * DISPID=88
     * @var int|VT_USERDEFINED $DeferredTax [29] property DeferredTax
     */
    var $DeferredTax;

    /**
     * DISPID=89
     * @var float $TotalEqualizationTax [5] property TotalEqualizationTax
     */
    var $TotalEqualizationTax;

    /**
     * DISPID=90
     * @var string $MeasureUnit [8] property MeasureUnit
     */
    var $MeasureUnit;

    /**
     * DISPID=91
     * @var float $UnitsOfMeasurment [5] property UnitsOfMeasurment
     */
    var $UnitsOfMeasurment;

    /**
     * DISPID=92
     * @var float $ExciseAmount [5] property ExciseAmount
     */
    var $ExciseAmount;

    /**
     * DISPID=93
     * @var float $TaxPerUnit [5] property TaxPerUnit
     */
    var $TaxPerUnit;

    /**
     * DISPID=94
     * @var float $TotalInclTax [5] property TotalInclTax
     */
    var $TotalInclTax;

    /**
     * DISPID=95
     * @var string $CountryOrg [8] property CountryOrg
     */
    var $CountryOrg;

    /**
     * DISPID=96
     * @var string $SWW [8] property SWW
     */
    var $SWW;

    /**
     * DISPID=97
     * @var int|VT_USERDEFINED $ConsumerSalesForecast [29] property ConsumerSalesForecast
     */
    var $ConsumerSalesForecast;

    /**
     * DISPID=98
     * @var mixed|VT_PTR $WithholdingTaxLines [26] property WithholdingTaxLines
     */
    var $WithholdingTaxLines;

    /**
     * DISPID=99
     * @var string $CFOPCode [8] property CFOPCode
     */
    var $CFOPCode;

    /**
     * DISPID=100
     * @var string $CSTCode [8] property CSTCode
     */
    var $CSTCode;

    /**
     * DISPID=101
     * @var string $Usage [8] property Usage
     */
    var $Usage;

    /**
     * DISPID=102
     * @var int|VT_USERDEFINED $TaxOnly [29] property TaxOnly
     */
    var $TaxOnly;

    /**
     * DISPID=103
     * @var float $TaxBeforeDPM [5] property TaxBeforeDPM
     */
    var $TaxBeforeDPM;

    /**
     * DISPID=104
     * @var float $TaxBeforeDPMFC [5] property TaxBeforeDPMFC
     */
    var $TaxBeforeDPMFC;

    /**
     * DISPID=105
     * @var float $TaxBeforeDPMSC [5] property TaxBeforeDPMSC
     */
    var $TaxBeforeDPMSC;

    /**
     * DISPID=106
     * @var int|VT_USERDEFINED $TransactionType [29] property TransactionType
     */
    var $TransactionType;

    /**
     * DISPID=107
     * @var int|VT_USERDEFINED $DistributeExpense [29] property DistributeExpense
     */
    var $DistributeExpense;

    /**
     * DISPID=108
     * @var string $ShipToCode [8] property ShipToCode
     */
    var $ShipToCode;

    /**
     * DISPID=109
     * @var float $RowTotalFC [5] property RowTotalFC
     */
    var $RowTotalFC;

    /**
     * DISPID=110
     * @var float $RowTotalSC [5] property RowTotalSC
     */
    var $RowTotalSC;

    /**
     * DISPID=111
     * @var float $LastBuyInmPrice [5] property LastBuyInmPrice
     */
    var $LastBuyInmPrice;

    /**
     * DISPID=112
     * @var float $LastBuyDistributeSumFc [5] property LastBuyDistributeSumFc
     */
    var $LastBuyDistributeSumFc;

    /**
     * DISPID=113
     * @var float $LastBuyDistributeSumSc [5] property LastBuyDistributeSumSc
     */
    var $LastBuyDistributeSumSc;

    /**
     * DISPID=114
     * @var float $LastBuyDistributeSum [5] property LastBuyDistributeSum
     */
    var $LastBuyDistributeSum;

    /**
     * DISPID=115
     * @var float $StockDistributesumForeign [5] property StockDistributesumForeign
     */
    var $StockDistributesumForeign;

    /**
     * DISPID=116
     * @var float $StockDistributesumSystem [5] property StockDistributesumSystem
     */
    var $StockDistributesumSystem;

    /**
     * DISPID=117
     * @var float $StockDistributesum [5] property StockDistributesum
     */
    var $StockDistributesum;

    /**
     * DISPID=118
     * @var float $StockInmPrice [5] property StockInmPrice
     */
    var $StockInmPrice;

    /**
     * DISPID=119
     * @var int|VT_USERDEFINED $PickStatusEx [29] property PickStatusEx
     */
    var $PickStatusEx;

    /**
     * DISPID=120
     * @return void
     * method Delete
     */
    function Delete()
    {
    }

    /**
     * DISPID=121
     * @var int $VisualOrder [3] property VisualOrder
     */
    var $VisualOrder;

    /**
     * DISPID=122
     * @var float $BaseOpenQuantity [5] property BaseOpenQuantity
     */
    var $BaseOpenQuantity;

    /**
     * DISPID=123
     * @var float $UnitPrice [5] property UnitPrice
     */
    var $UnitPrice;

    /**
     * DISPID=124
     * @var int|VT_USERDEFINED $LineStatus [29] property LineStatus
     */
    var $LineStatus;

    /**
     * DISPID=125
     * @var float $PackageQuantity [5] property PackageQuantity
     */
    var $PackageQuantity;

    /**
     * DISPID=126
     * @var string $Text [8] property Text
     */
    var $Text;

    /**
     * DISPID=127
     * @var int|VT_USERDEFINED $LineType [29] property LineType
     */
    var $LineType;

    /**
     * DISPID=128
     * @var string $COGSCostingCode [8] property COGSCostingCode
     */
    var $COGSCostingCode;

    /**
     * DISPID=129
     * @var string $COGSAccountCode [8] property COGSAccountCode
     */
    var $COGSAccountCode;

    /**
     * DISPID=130
     * @var string $ChangeAssemlyBoMWarehouse [8] property ChangeAssemlyBoMWarehouse
     */
    var $ChangeAssemlyBoMWarehouse;

    /**
     * DISPID=131
     * @var string $ItemDetails [8] property ItemDetails
     */
    var $ItemDetails;

    /**
     * DISPID=132
     * @var string|VT_DATE $ActualDeliveryDate [7] property ActualDeliveryDate
     */
    var $ActualDeliveryDate;

    /**
     * DISPID=133
     * @var int $LocationCode [3] property LocationCode
     */
    var $LocationCode;

    /**
     * DISPID=134
     * @var string $CostingCode2 [8] property CostingCode2
     */
    var $CostingCode2;

    /**
     * DISPID=135
     * @var string $CostingCode3 [8] property CostingCode3
     */
    var $CostingCode3;

    /**
     * DISPID=136
     * @var string $CostingCode4 [8] property CostingCode4
     */
    var $CostingCode4;

    /**
     * DISPID=137
     * @var string $CostingCode5 [8] property CostingCode5
     */
    var $CostingCode5;

    /**
     * DISPID=138
     * @var float $RemainingOpenQuantity [5] property RemainingOpenQuantity
     */
    var $RemainingOpenQuantity;

    /**
     * DISPID=139
     * @var float $OpenAmount [5] property OpenAmount
     */
    var $OpenAmount;

    /**
     * DISPID=140
     * @var float $OpenAmountFC [5] property OpenAmountFC
     */
    var $OpenAmountFC;

    /**
     * DISPID=141
     * @var float $OpenAmountSC [5] property OpenAmountSC
     */
    var $OpenAmountSC;

    /**
     * DISPID=170
     * @var float $GrossBuyPrice [5] property GrossBuyPrice
     */
    var $GrossBuyPrice;

    /**
     * DISPID=171
     * @var int $GrossBase [3] property GrossBase
     */
    var $GrossBase;

    /**
     * DISPID=172
     * @var float $GrossProfitTotalBasePrice [5] property GrossProfitTotalBasePrice
     */
    var $GrossProfitTotalBasePrice;

    /**
     * DISPID=173
     * @var string $ExLineNo [8] property ExLineNo
     */
    var $ExLineNo;

    /**
     * DISPID=181
     * @var mixed|VT_PTR $TaxJurisdictions [26] property TaxJurisdictions
     */
    var $TaxJurisdictions;

    /**
     * DISPID=182
     * @var string|VT_DATE $RequiredDate [7] property RequiredDate
     */
    var $RequiredDate;

    /**
     * DISPID=183
     * @var float $RequiredQuantity [5] property RequiredQuantity
     */
    var $RequiredQuantity;

    /**
     * DISPID=184
     * @var string $COGSCostingCode2 [8] property COGSCostingCode2
     */
    var $COGSCostingCode2;

    /**
     * DISPID=185
     * @var string $COGSCostingCode3 [8] property COGSCostingCode3
     */
    var $COGSCostingCode3;

    /**
     * DISPID=186
     * @var string $COGSCostingCode4 [8] property COGSCostingCode4
     */
    var $COGSCostingCode4;

    /**
     * DISPID=187
     * @var string $COGSCostingCode5 [8] property COGSCostingCode5
     */
    var $COGSCostingCode5;

    /**
     * DISPID=188
     * @var string $CSTforIPI [8] property CSTforIPI
     */
    var $CSTforIPI;

    /**
     * DISPID=189
     * @var string $CSTforPIS [8] property CSTforPIS
     */
    var $CSTforPIS;

    /**
     * DISPID=190
     * @var string $CSTforCOFINS [8] property CSTforCOFINS
     */
    var $CSTforCOFINS;

    /**
     * DISPID=191
     * @var string $CreditOriginCode [8] property CreditOriginCode
     */
    var $CreditOriginCode;

    /**
     * DISPID=192
     * @var int|VT_USERDEFINED $WithoutInventoryMovement [29] property WithoutInventoryMovement
     */
    var $WithoutInventoryMovement;

    /**
     * DISPID=193
     * @var int $AgreementNo [3] property AgreementNo
     */
    var $AgreementNo;

    /**
     * DISPID=194
     * @var int $AgreementRowNumber [3] property AgreementRowNumber
     */
    var $AgreementRowNumber;

    /**
     * DISPID=195
     * @var string $ShipToDescription [8] property ShipToDescription
     */
    var $ShipToDescription;

    /**
     * DISPID=196
     * @var int $ActualBaseEntry [3] property ActualBaseEntry
     */
    var $ActualBaseEntry;

    /**
     * DISPID=197
     * @var int $ActualBaseLine [3] property ActualBaseLine
     */
    var $ActualBaseLine;

    /**
     * DISPID=198
     * @var int $DocEntry [3] property DocEntry
     */
    var $DocEntry;

    /**
     * DISPID=199
     * @var mixed|VT_PTR $ImportProcesses [26] property ImportProcesses
     */
    var $ImportProcesses;

    /**
     * DISPID=200
     * @var mixed|VT_PTR $ExportProcesses [26] property ExportProcesses
     */
    var $ExportProcesses;

    /**
     * DISPID=201
     * @var float $Surpluses [5] property Surpluses
     */
    var $Surpluses;

    /**
     * DISPID=202
     * @var float $DefectAndBreakup [5] property DefectAndBreakup
     */
    var $DefectAndBreakup;

    /**
     * DISPID=203
     * @var float $Shortages [5] property Shortages
     */
    var $Shortages;

    /**
     * DISPID=204
     * @var int|VT_USERDEFINED $ConsiderQuantity [29] property ConsiderQuantity
     */
    var $ConsiderQuantity;

    /**
     * DISPID=205
     * @var int|VT_USERDEFINED $PartialRetirement [29] property PartialRetirement
     */
    var $PartialRetirement;

    /**
     * DISPID=206
     * @var float $RetirementQuantity [5] property RetirementQuantity
     */
    var $RetirementQuantity;

    /**
     * DISPID=207
     * @var float $RetirementAPC [5] property RetirementAPC
     */
    var $RetirementAPC;

    /**
     * DISPID=209
     * @var int|VT_USERDEFINED $EnableReturnCost [29] property EnableReturnCost
     */
    var $EnableReturnCost;

    /**
     * DISPID=210
     * @var float $ReturnCost [5] property ReturnCost
     */
    var $ReturnCost;

    /**
     * DISPID=211
     * @var int $UoMEntry [3] property UoMEntry
     */
    var $UoMEntry;

    /**
     * DISPID=212
     * @var string $UoMCode [8] property UoMCode
     */
    var $UoMCode;

    /**
     * DISPID=213
     * @var float $InventoryQuantity [5] property InventoryQuantity
     */
    var $InventoryQuantity;

    /**
     * DISPID=214
     * @var float $RemainingOpenInventoryQuantity [5] property RemainingOpenInventoryQuantity
     */
    var $RemainingOpenInventoryQuantity;

    /**
     * DISPID=208
     * @var mixed|VT_PTR $BinAllocations [26] property BinAllocations
     */
    var $BinAllocations;

    /**
     * DISPID=215
     * @var string $LineVendor [8] property LineVendor
     */
    var $LineVendor;

    /**
     * DISPID=216
     * @var int $Incoterms [3] property Incoterms
     */
    var $Incoterms;

    /**
     * DISPID=217
     * @var int $TransportMode [3] property TransportMode
     */
    var $TransportMode;

    /**
     * DISPID=218
     * @var int $ParentLineNum [3] property ParentLineNum
     */
    var $ParentLineNum;

    /**
     * DISPID=219
     * @var int|VT_USERDEFINED $ItemType [29] property ItemType
     */
    var $ItemType;

    /**
     * DISPID=220
     * @var int|VT_USERDEFINED $ThirdParty [29] property ThirdParty
     */
    var $ThirdParty;

    /**
     * DISPID=221
     * @var int|VT_USERDEFINED $ChangeInventoryQuantityIndependently [29] property ChangeInventoryQuantityIndependently
     */
    var $ChangeInventoryQuantityIndependently;

    /**
     * DISPID=222
     * @var int|VT_USERDEFINED $FreeOfChargeBP [29] property FreeOfChargeBP
     */
    var $FreeOfChargeBP;

    /**
     * DISPID=223
     * @var mixed|VT_PTR $GeneratedAssets [26] property GeneratedAssets
     */
    var $GeneratedAssets;

    /**
     * DISPID=224
     * @var string $ExpenseType [8] property ExpenseType
     */
    var $ExpenseType;

    /**
     * DISPID=225
     * @var string $ReceiptNumber [8] property ReceiptNumber
     */
    var $ReceiptNumber;

    /**
     * DISPID=226
     * @var int|VT_USERDEFINED $ExpenseOperationType [29] property ExpenseOperationType
     */
    var $ExpenseOperationType;

    /**
     * DISPID=227
     * @var string $FederalTaxID [8] property FederalTaxID
     */
    var $FederalTaxID;

}
