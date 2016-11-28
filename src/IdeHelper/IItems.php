<?php
/**
 * Created by PhpStorm.
 * User: E-Commerce 2
 * Date: 25/11/2016
 * Time: 16:33
 */

namespace Litiano\Sap\IdeHelper;

class IItems { /* GUID={1EFF6EB3-9368-4A68-B619-0B57A134F0CE} */
    /* DISPID=1610612736 */
    function QueryInterface(
        /* VT_PTR [26] [in] --> ? [29]  */ &$riid,
        /* VT_PTR [26] [out] --> VT_PTR [26]  */ &$ppvObj
    )
    {
    }
    /* DISPID=1610612737 */
    /* VT_UI4 [19] */
    function AddRef(
    )
    {
    }
    /* DISPID=1610612738 */
    /* VT_UI4 [19] */
    function Release(
    )
    {
    }
    /* DISPID=1610678272 */
    function GetTypeInfoCount(
        /* VT_PTR [26] [out] --> VT_UINT [23]  */ &$pctinfo
    )
    {
    }
    /* DISPID=1610678273 */
    function GetTypeInfo(
        /* VT_UINT [23] [in] */ $itinfo,
        /* VT_UI4 [19] [in] */ $lcid,
        /* VT_PTR [26] [out] --> VT_PTR [26]  */ &$pptinfo
    )
    {
    }
    /* DISPID=1610678274 */
    function GetIDsOfNames(
        /* VT_PTR [26] [in] --> ? [29]  */ &$riid,
        /* VT_PTR [26] [in] --> VT_PTR [26]  */ &$rgszNames,
        /* VT_UINT [23] [in] */ $cNames,
        /* VT_UI4 [19] [in] */ $lcid,
        /* VT_PTR [26] [out] --> VT_I4 [3]  */ &$rgdispid
    )
    {
    }
    /* DISPID=1610678275 */
    function Invoke(
        /* VT_I4 [3] [in] */ $dispidMember,
        /* VT_PTR [26] [in] --> ? [29]  */ &$riid,
        /* VT_UI4 [19] [in] */ $lcid,
        /* VT_UI2 [18] [in] */ $wFlags,
        /* VT_PTR [26] [in] --> ? [29]  */ &$pdispparams,
        /* VT_PTR [26] [out] --> VT_VARIANT [12]  */ &$pvarResult,
        /* VT_PTR [26] [out] --> ? [29]  */ &$pexcepinfo,
        /* VT_PTR [26] [out] --> VT_UINT [23]  */ &$puArgErr
    )
    {
    }
    /* DISPID=1 */
    /* VT_PTR [26] */
    /* Invoke the user fields object */
    /**
     * @var $UserFields IUserFields
     */
    var $UserFields;

    /* DISPID=2 */
    /* VT_I4 [3] */
    function Add(
    )
    {
        /* Add */
    }
    /* DISPID=3 */
    /* VT_BOOL [11] */
    function GetByKey(
        /* VT_BSTR [8]  */ $ItemCode
    )
    {
        /* Get by key */
    }
    /* DISPID=4 */
    /* VT_BSTR [8] */
    /* Item code */
    var $ItemCode;

    /* DISPID=4 */
    /* Item code */
    var $ItemCode;

    /* DISPID=5 */
    /* VT_BSTR [8] */
    /* Item name */
    var $ItemName;

    /* DISPID=5 */
    /* Item name */
    var $ItemName;

    /* DISPID=6 */
    /* VT_BSTR [8] */
    /* Foreign name */
    var $ForeignName;

    /* DISPID=6 */
    /* Foreign name */
    var $ForeignName;

    /* DISPID=7 */
    /* VT_I4 [3] */
    /* Items group code */
    var $ItemsGroupCode;

    /* DISPID=7 */
    /* Items group code */
    var $ItemsGroupCode;

    /* DISPID=8 */
    /* VT_I4 [3] */
    /* Customes group code */
    var $CustomsGroupCode;

    /* DISPID=8 */
    /* Customes group code */
    var $CustomsGroupCode;

    /* DISPID=9 */
    /* VT_BSTR [8] */
    /* Sales vat group */
    var $SalesVATGroup;

    /* DISPID=9 */
    /* Sales vat group */
    var $SalesVATGroup;

    /* DISPID=10 */
    /* VT_BSTR [8] */
    /* Bar code */
    var $BarCode;

    /* DISPID=10 */
    /* Bar code */
    var $BarCode;

    /* DISPID=11 */
    /* ? [29] */
    /* Vat liable */
    var $VatLiable;

    /* DISPID=11 */
    /* Vat liable */
    var $VatLiable;

    /* DISPID=12 */
    /* ? [29] */
    /* Purchase item */
    var $PurchaseItem;

    /* DISPID=12 */
    /* Purchase item */
    var $PurchaseItem;

    /* DISPID=13 */
    /* ? [29] */
    /* Sales item */
    var $SalesItem;

    /* DISPID=13 */
    /* Sales item */
    var $SalesItem;

    /* DISPID=14 */
    /* ? [29] */
    /* Inventory item */
    var $InventoryItem;

    /* DISPID=14 */
    /* Inventory item */
    var $InventoryItem;

    /* DISPID=15 */
    /* VT_BSTR [8] */
    /* Income account */
    var $IncomeAccount;

    /* DISPID=15 */
    /* Income account */
    var $IncomeAccount;

    /* DISPID=16 */
    /* VT_BSTR [8] */
    /* Exempt income account */
    var $ExemptIncomeAccount;

    /* DISPID=16 */
    /* Exempt income account */
    var $ExemptIncomeAccount;

    /* DISPID=17 */
    /* VT_BSTR [8] */
    /* Expense account */
    var $ExpanseAccount;

    /* DISPID=17 */
    /* Expense account */
    var $ExpanseAccount;

    /* DISPID=18 */
    /* VT_BSTR [8] */
    /* Main supplier */
    var $Mainsupplier;

    /* DISPID=18 */
    /* Main supplier */
    var $Mainsupplier;

    /* DISPID=19 */
    /* VT_BSTR [8] */
    /* Supplier catalog number */
    var $SupplierCatalogNo;

    /* DISPID=19 */
    /* Supplier catalog number */
    var $SupplierCatalogNo;

    /* DISPID=20 */
    /* VT_BSTR [8] */
    /* Purchase unit */
    var $PurchaseUnit;

    /* DISPID=20 */
    /* Purchase unit */
    var $PurchaseUnit;

    /* DISPID=21 */
    /* VT_R8 [5] */
    /* Per purchase unit */
    var $PurchaseItemsPerUnit;

    /* DISPID=21 */
    /* Per purchase unit */
    var $PurchaseItemsPerUnit;

    /* DISPID=22 */
    /* VT_R8 [5] */
    /* Per purchase Quantity */
    var $DesiredInventory;

    /* DISPID=22 */
    /* Per purchase Quantity */
    var $DesiredInventory;

    /* DISPID=23 */
    /* VT_R8 [5] */
    /* Minimum inventory */
    var $MinInventory;

    /* DISPID=23 */
    /* Minimum inventory */
    var $MinInventory;

    /* DISPID=24 */
    /* VT_BSTR [8] */
    /* Sales unit */
    var $SalesUnit;

    /* DISPID=24 */
    /* Sales unit */
    var $SalesUnit;

    /* DISPID=25 */
    /* VT_R8 [5] */
    /* Per sales unit */
    var $SalesItemsPerUnit;

    /* DISPID=25 */
    /* Per sales unit */
    var $SalesItemsPerUnit;

    /* DISPID=26 */
    /* VT_BSTR [8] */
    /* Picture */
    var $Picture;

    /* DISPID=26 */
    /* Picture */
    var $Picture;

    /* DISPID=27 */
    /* VT_BSTR [8] */
    /* User text */
    var $User_Text;

    /* DISPID=27 */
    /* User text */
    var $User_Text;

    /* DISPID=28 */
    /* VT_BSTR [8] */
    /* Serial number */
    var $SerialNum;

    /* DISPID=28 */
    /* Serial number */
    var $SerialNum;

    /* DISPID=29 */
    /* VT_R8 [5] */
    /* Commision percent */
    var $CommissionPercent;

    /* DISPID=29 */
    /* Commision percent */
    var $CommissionPercent;

    /* DISPID=30 */
    /* VT_R8 [5] */
    /* Commision sum */
    var $CommissionSum;

    /* DISPID=30 */
    /* Commision sum */
    var $CommissionSum;

    /* DISPID=31 */
    /* VT_I4 [3] */
    /* Commision group */
    var $CommissionGroup;

    /* DISPID=31 */
    /* Commision group */
    var $CommissionGroup;

    /* DISPID=32 */
    /* ? [29] */
    /* Tree type */
    var $TreeType;

    /* DISPID=33 */
    /* ? [29] */
    /* Asset item */
    var $AssetItem;

    /* DISPID=33 */
    /* Asset item */
    var $AssetItem;

    /* DISPID=34 */
    /* VT_R8 [5] */
    /* Sales unit height 1 */
    var $SalesUnitHeight;

    /* DISPID=34 */
    /* Sales unit height 1 */
    var $SalesUnitHeight;

    /* DISPID=36 */
    /* VT_R8 [5] */
    /* Sales unit volume */
    var $SalesUnitVolume;

    /* DISPID=36 */
    /* Sales unit volume */
    var $SalesUnitVolume;

    /* DISPID=37 */
    /* VT_BSTR [8] */
    /* Data export code */
    var $DataExportCode;

    /* DISPID=37 */
    /* Data export code */
    var $DataExportCode;

    /* DISPID=38 */
    /* ? [29] */
    /* Query group */
    var $Properties;

    /* DISPID=38 */
    /* Query group */
    var $Properties;

    /* DISPID=39 */
    function SaveXML(
        /* VT_PTR [26] [in][out] --> VT_BSTR [8]  */ &$FileName
    )
    {
        /* Save object as XML document */
    }
    /* DISPID=40 */
    /* VT_I4 [3] */
    function Update(
    )
    {
        /* method Update */
    }
    /* DISPID=41 */
    /* VT_PTR [26] */
    /* property PriceList */
    /**
     * @var $PriceList IItems_Prices
     */
    var $PriceList;

    /* DISPID=42 */
    /* VT_I4 [3] */
    /* property Manufacturer */
    var $Manufacturer;

    /* DISPID=42 */
    /* property Manufacturer */
    var $Manufacturer;

    /* DISPID=43 */
    /* VT_R8 [5] */
    /* property QuantityOnStock */
    var $QuantityOnStock;

    /* DISPID=44 */
    /* VT_R8 [5] */
    /* property QuantityOrderedFromVendors */
    var $QuantityOrderedFromVendors;

    /* DISPID=45 */
    /* VT_R8 [5] */
    /* property QuantityOrderedByCustomers */
    var $QuantityOrderedByCustomers;

    /* DISPID=46 */
    /* VT_I4 [3] */
    function Remove(
    )
    {
        /* method Remove */
    }
    /* DISPID=47 */
    /* VT_I4 [3] */
    function Cancel(
    )
    {
        /* method Cancel */
    }
    /* DISPID=48 */
    /* VT_I4 [3] */
    function Close(
    )
    {
        /* method Close */
    }
    /* DISPID=49 */
    /* ? [29] */
    /* property ManageSerialNumbers */
    var $ManageSerialNumbers;

    /* DISPID=49 */
    /* property ManageSerialNumbers */
    var $ManageSerialNumbers;

    /* DISPID=50 */
    /* ? [29] */
    /* property ManageBatchNumbers */
    var $ManageBatchNumbers;

    /* DISPID=50 */
    /* property ManageBatchNumbers */
    var $ManageBatchNumbers;

    /* DISPID=51 */
    /* ? [29] */
    /* property Valid */
    var $Valid;

    /* DISPID=51 */
    /* property Valid */
    var $Valid;

    /* DISPID=52 */
    /* VT_DATE [7] */
    /* property ValidFrom */
    var $ValidFrom;

    /* DISPID=52 */
    /* property ValidFrom */
    var $ValidFrom;

    /* DISPID=53 */
    /* VT_DATE [7] */
    /* property ValidTo */
    var $ValidTo;

    /* DISPID=53 */
    /* property ValidTo */
    var $ValidTo;

    /* DISPID=54 */
    /* VT_BSTR [8] */
    /* property ValidRemarks */
    var $ValidRemarks;

    /* DISPID=54 */
    /* property ValidRemarks */
    var $ValidRemarks;

    /* DISPID=55 */
    /* ? [29] */
    /* property Frozen */
    var $Frozen;

    /* DISPID=55 */
    /* property Frozen */
    var $Frozen;

    /* DISPID=56 */
    /* VT_DATE [7] */
    /* property FrozenFrom */
    var $FrozenFrom;

    /* DISPID=56 */
    /* property FrozenFrom */
    var $FrozenFrom;

    /* DISPID=57 */
    /* VT_DATE [7] */
    /* property FrozenTo */
    var $FrozenTo;

    /* DISPID=57 */
    /* property FrozenTo */
    var $FrozenTo;

    /* DISPID=58 */
    /* VT_BSTR [8] */
    /* property FrozenRemarks */
    var $FrozenRemarks;

    /* DISPID=58 */
    /* property FrozenRemarks */
    var $FrozenRemarks;

    /* DISPID=59 */
    /* VT_PTR [26] */
    /* User fields for this object. */
    var $Browser;

    /* DISPID=60 */
    /* VT_BSTR [8] */
    /* property SalesPackegingUnit */
    var $SalesPackagingUnit;

    /* DISPID=60 */
    /* property SalesPackegingUnit */
    var $SalesPackagingUnit;

    /* DISPID=61 */
    /* VT_R8 [5] */
    /* property SalesQtyPerPackUnit */
    var $SalesQtyPerPackUnit;

    /* DISPID=61 */
    /* property SalesQtyPerPackUnit */
    var $SalesQtyPerPackUnit;

    /* DISPID=62 */
    /* VT_R8 [5] */
    /* property SalesUnitLength */
    var $SalesUnitLength;

    /* DISPID=62 */
    /* property SalesUnitLength */
    var $SalesUnitLength;

    /* DISPID=63 */
    /* VT_R8 [5] */
    /* property SalesunitWidth */
    var $SalesUnitWidth;

    /* DISPID=63 */
    /* property SalesunitWidth */
    var $SalesUnitWidth;

    /* DISPID=64 */
    /* VT_I4 [3] */
    /* property SalesVolumeUnit */
    var $SalesVolumeUnit;

    /* DISPID=64 */
    /* property SalesVolumeUnit */
    var $SalesVolumeUnit;

    /* DISPID=65 */
    /* VT_R8 [5] */
    /* property SalesUnitWeight */
    var $SalesUnitWeight;

    /* DISPID=65 */
    /* property SalesUnitWeight */
    var $SalesUnitWeight;

    /* DISPID=66 */
    /* VT_BSTR [8] */
    /* property PurchasePackagingUnit */
    var $PurchasePackagingUnit;

    /* DISPID=66 */
    /* property PurchasePackagingUnit */
    var $PurchasePackagingUnit;

    /* DISPID=67 */
    /* VT_R8 [5] */
    /* property PurchaseQtyPerPackUnit */
    var $PurchaseQtyPerPackUnit;

    /* DISPID=67 */
    /* property PurchaseQtyPerPackUnit */
    var $PurchaseQtyPerPackUnit;

    /* DISPID=68 */
    /* VT_R8 [5] */
    /* property PurchaseUnitLength */
    var $PurchaseUnitLength;

    /* DISPID=68 */
    /* property PurchaseUnitLength */
    var $PurchaseUnitLength;

    /* DISPID=69 */
    /* VT_R8 [5] */
    /* property PurchaseUnitWidth */
    var $PurchaseUnitWidth;

    /* DISPID=69 */
    /* property PurchaseUnitWidth */
    var $PurchaseUnitWidth;

    /* DISPID=70 */
    /* VT_R8 [5] */
    /* property PurchaseUnitHeight */
    var $PurchaseUnitHeight;

    /* DISPID=70 */
    /* property PurchaseUnitHeight */
    var $PurchaseUnitHeight;

    /* DISPID=71 */
    /* VT_R8 [5] */
    /* property PurchaseUnitVolume */
    var $PurchaseUnitVolume;

    /* DISPID=71 */
    /* property PurchaseUnitVolume */
    var $PurchaseUnitVolume;

    /* DISPID=72 */
    /* VT_I4 [3] */
    /* property PurchaseVolumeUnit */
    var $PurchaseVolumeUnit;

    /* DISPID=72 */
    /* property PurchaseVolumeUnit */
    var $PurchaseVolumeUnit;

    /* DISPID=73 */
    /* VT_R8 [5] */
    /* property PurchaseUnitWeight */
    var $PurchaseUnitWeight;

    /* DISPID=73 */
    /* property PurchaseUnitWeight */
    var $PurchaseUnitWeight;

    /* DISPID=74 */
    /* VT_BSTR [8] */
    /* property PurchaseVATGroup */
    var $PurchaseVATGroup;

    /* DISPID=74 */
    /* property PurchaseVATGroup */
    var $PurchaseVATGroup;

    /* DISPID=75 */
    /* VT_R8 [5] */
    /* property SalesFactor1 */
    var $SalesFactor1;

    /* DISPID=75 */
    /* property SalesFactor1 */
    var $SalesFactor1;

    /* DISPID=76 */
    /* VT_R8 [5] */
    /* property SalesFactor2 */
    var $SalesFactor2;

    /* DISPID=76 */
    /* property SalesFactor2 */
    var $SalesFactor2;

    /* DISPID=77 */
    /* VT_R8 [5] */
    /* property SalesFactor3 */
    var $SalesFactor3;

    /* DISPID=77 */
    /* property SalesFactor3 */
    var $SalesFactor3;

    /* DISPID=78 */
    /* VT_R8 [5] */
    /* property SalesFactor4 */
    var $SalesFactor4;

    /* DISPID=78 */
    /* property SalesFactor4 */
    var $SalesFactor4;

    /* DISPID=79 */
    /* VT_R8 [5] */
    /* property PurchaseFactor1 */
    var $PurchaseFactor1;

    /* DISPID=79 */
    /* property PurchaseFactor1 */
    var $PurchaseFactor1;

    /* DISPID=80 */
    /* VT_R8 [5] */
    /* property PurchaseFactor2 */
    var $PurchaseFactor2;

    /* DISPID=80 */
    /* property PurchaseFactor2 */
    var $PurchaseFactor2;

    /* DISPID=81 */
    /* VT_R8 [5] */
    /* property PurchaseFactor3 */
    var $PurchaseFactor3;

    /* DISPID=81 */
    /* property PurchaseFactor3 */
    var $PurchaseFactor3;

    /* DISPID=82 */
    /* VT_R8 [5] */
    /* property PurchaseFactor4 */
    var $PurchaseFactor4;

    /* DISPID=82 */
    /* property PurchaseFactor4 */
    var $PurchaseFactor4;

    /* DISPID=83 */
    /* VT_R8 [5] */
    /* property MovingAveragePrice */
    var $MovingAveragePrice;

    /* DISPID=84 */
    /* VT_I4 [3] */
    /* property SalesLengthUnit */
    var $SalesLengthUnit;

    /* DISPID=84 */
    /* property SalesLengthUnit */
    var $SalesLengthUnit;

    /* DISPID=85 */
    /* VT_I4 [3] */
    /* property SalesWidthUnit */
    var $SalesWidthUnit;

    /* DISPID=85 */
    /* property SalesWidthUnit */
    var $SalesWidthUnit;

    /* DISPID=86 */
    /* VT_I4 [3] */
    /* property SalesHeightUnit */
    var $SalesHeightUnit;

    /* DISPID=86 */
    /* property SalesHeightUnit */
    var $SalesHeightUnit;

    /* DISPID=87 */
    /* VT_I4 [3] */
    /* property SalesWeightUnit */
    var $SalesWeightUnit;

    /* DISPID=87 */
    /* property SalesWeightUnit */
    var $SalesWeightUnit;

    /* DISPID=88 */
    /* VT_I4 [3] */
    /* property PurchaseWidthUnit */
    var $PurchaseWidthUnit;

    /* DISPID=88 */
    /* property PurchaseWidthUnit */
    var $PurchaseWidthUnit;

    /* DISPID=89 */
    /* VT_I4 [3] */
    /* property PurchaseLengthUnit */
    var $PurchaseLengthUnit;

    /* DISPID=89 */
    /* property PurchaseLengthUnit */
    var $PurchaseLengthUnit;

    /* DISPID=90 */
    /* VT_I4 [3] */
    /* property PurchaseHeightUnit */
    var $PurchaseHeightUnit;

    /* DISPID=90 */
    /* property PurchaseHeightUnit */
    var $PurchaseHeightUnit;

    /* DISPID=91 */
    /* VT_I4 [3] */
    /* property PurchaseWeightUnit */
    var $PurchaseWeightUnit;

    /* DISPID=91 */
    /* property PurchaseWeightUnit */
    var $PurchaseWeightUnit;

    /* DISPID=92 */
    /* VT_BSTR [8] */
    /* property ForeignRevenuesAccount */
    var $ForeignRevenuesAccount;

    /* DISPID=92 */
    /* property ForeignRevenuesAccount */
    var $ForeignRevenuesAccount;

    /* DISPID=93 */
    /* VT_BSTR [8] */
    /* property ECRevenuesAccount */
    var $ECRevenuesAccount;

    /* DISPID=93 */
    /* property ECRevenuesAccount */
    var $ECRevenuesAccount;

    /* DISPID=94 */
    /* VT_BSTR [8] */
    /* property ForeignExpensesAccount */
    var $ForeignExpensesAccount;

    /* DISPID=94 */
    /* property ForeignExpensesAccount */
    var $ForeignExpensesAccount;

    /* DISPID=95 */
    /* VT_BSTR [8] */
    /* property ECExpensesAccount */
    var $ECExpensesAccount;

    /* DISPID=95 */
    /* property ECExpensesAccount */
    var $ECExpensesAccount;

    /* DISPID=96 */
    /* VT_R8 [5] */
    /* property AvgStdPrice */
    var $AvgStdPrice;

    /* DISPID=96 */
    /* property AvgStdPrice */
    var $AvgStdPrice;

    /* DISPID=97 */
    /* VT_BSTR [8] */
    /* property DefaultWarehouse */
    var $DefaultWarehouse;

    /* DISPID=97 */
    /* property DefaultWarehouse */
    var $DefaultWarehouse;

    /* DISPID=98 */
    /* VT_I4 [3] */
    /* property ShipType */
    var $ShipType;

    /* DISPID=98 */
    /* property ShipType */
    var $ShipType;

    /* DISPID=99 */
    /* ? [29] */
    /* property GLMethod */
    var $GLMethod;

    /* DISPID=99 */
    /* property GLMethod */
    var $GLMethod;

    /* DISPID=100 */
    /* ? [29] */
    /* property TaxType */
    var $TaxType;

    /* DISPID=100 */
    /* property TaxType */
    var $TaxType;

    /* DISPID=101 */
    /* VT_PTR [26] */
    /* property PriceList */
    var $WhsInfo;

    /* DISPID=102 */
    /* VT_R8 [5] */
    /* property MaxInventory */
    var $MaxInventory;

    /* DISPID=102 */
    /* property MaxInventory */
    var $MaxInventory;

    /* DISPID=103 */
    /* ? [29] */
    /* property ManageStockByWarehouse */
    var $ManageStockByWarehouse;

    /* DISPID=103 */
    /* property ManageStockByWarehouse */
    var $ManageStockByWarehouse;

    /* DISPID=104 */
    /* VT_I4 [3] */
    /* property PurchaseHeightUnit1 */
    var $PurchaseHeightUnit1;

    /* DISPID=104 */
    /* property PurchaseHeightUnit1 */
    var $PurchaseHeightUnit1;

    /* DISPID=105 */
    /* VT_R8 [5] */
    /* property PurchaseUnitHeight1 */
    var $PurchaseUnitHeight1;

    /* DISPID=105 */
    /* property PurchaseUnitHeight1 */
    var $PurchaseUnitHeight1;

    /* DISPID=106 */
    /* VT_I4 [3] */
    /* property PurchaseLengthUnit1 */
    var $PurchaseLengthUnit1;

    /* DISPID=106 */
    /* property PurchaseLengthUnit1 */
    var $PurchaseLengthUnit1;

    /* DISPID=107 */
    /* VT_R8 [5] */
    /* property PurchaseUnitLength1 */
    var $PurchaseUnitLength1;

    /* DISPID=107 */
    /* property PurchaseUnitLength1 */
    var $PurchaseUnitLength1;

    /* DISPID=108 */
    /* VT_I4 [3] */
    /* property PurchaseWeightUnit1 */
    var $PurchaseWeightUnit1;

    /* DISPID=108 */
    /* property PurchaseWeightUnit1 */
    var $PurchaseWeightUnit1;

    /* DISPID=109 */
    /* VT_R8 [5] */
    /* property PurchaseUnitWeight1 */
    var $PurchaseUnitWeight1;

    /* DISPID=109 */
    /* property PurchaseUnitWeight1 */
    var $PurchaseUnitWeight1;

    /* DISPID=110 */
    /* VT_I4 [3] */
    /* property PurchaseWidthUnit1 */
    var $PurchaseWidthUnit1;

    /* DISPID=110 */
    /* property PurchaseWidthUnit1 */
    var $PurchaseWidthUnit1;

    /* DISPID=111 */
    /* VT_R8 [5] */
    /* property PurchaseUnitWidth1 */
    var $PurchaseUnitWidth1;

    /* DISPID=111 */
    /* property PurchaseUnitWidth1 */
    var $PurchaseUnitWidth1;

    /* DISPID=112 */
    /* VT_I4 [3] */
    /* property SalesHeightUnit1 */
    var $SalesHeightUnit1;

    /* DISPID=112 */
    /* property SalesHeightUnit1 */
    var $SalesHeightUnit1;

    /* DISPID=113 */
    /* VT_R8 [5] */
    /* property SalesUnitHeight1 */
    var $SalesUnitHeight1;

    /* DISPID=113 */
    /* property SalesUnitHeight1 */
    var $SalesUnitHeight1;

    /* DISPID=114 */
    /* VT_I4 [3] */
    /* property SalesLengthUnit1 */
    var $SalesLengthUnit1;

    /* DISPID=114 */
    /* property SalesLengthUnit1 */
    var $SalesLengthUnit1;

    /* DISPID=115 */
    /* VT_R8 [5] */
    /* property SalesUnitLength1 */
    var $SalesUnitLength1;

    /* DISPID=115 */
    /* property SalesUnitLength1 */
    var $SalesUnitLength1;

    /* DISPID=116 */
    /* VT_I4 [3] */
    /* property SalesWeightUnit1 */
    var $SalesWeightUnit1;

    /* DISPID=116 */
    /* property SalesWeightUnit1 */
    var $SalesWeightUnit1;

    /* DISPID=117 */
    /* VT_R8 [5] */
    /* property SalesUnitWeight1 */
    var $SalesUnitWeight1;

    /* DISPID=117 */
    /* property SalesUnitWeight1 */
    var $SalesUnitWeight1;

    /* DISPID=118 */
    /* VT_I4 [3] */
    /* property SalesWidthUnit1 */
    var $SalesWidthUnit1;

    /* DISPID=118 */
    /* property SalesWidthUnit1 */
    var $SalesWidthUnit1;

    /* DISPID=119 */
    /* VT_R8 [5] */
    /* property SalesUnitWidth1 */
    var $SalesUnitWidth1;

    /* DISPID=119 */
    /* property SalesUnitWidth1 */
    var $SalesUnitWidth1;

    /* DISPID=120 */
    /* ? [29] */
    /* property ForceSelectionOfSerialNumber */
    var $ForceSelectionOfSerialNumber;

    /* DISPID=120 */
    /* property ForceSelectionOfSerialNumber */
    var $ForceSelectionOfSerialNumber;

    /* DISPID=121 */
    /* ? [29] */
    /* property ManageSerialNumbersOnReleaseOnly */
    var $ManageSerialNumbersOnReleaseOnly;

    /* DISPID=122 */
    /* ? [29] */
    /* property WTLiable */
    var $WTLiable;

    /* DISPID=122 */
    /* property WTLiable */
    var $WTLiable;

    /* DISPID=123 */
    /* VT_BSTR [8] */
    /* property BaseUnitName */
    var $BaseUnitName;

    /* DISPID=123 */
    /* property BaseUnitName */
    var $BaseUnitName;

    /* DISPID=124 */
    /* VT_BSTR [8] */
    /* property ItemCountryOrg */
    var $ItemCountryOrg;

    /* DISPID=124 */
    /* property ItemCountryOrg */
    var $ItemCountryOrg;

    /* DISPID=125 */
    /* VT_BSTR [8] */
    /* property SWW */
    var $SWW;

    /* DISPID=125 */
    /* property SWW */
    var $SWW;

    /* DISPID=121 */
    /* property ManageSerialNumbersOnReleaseOnly */
    var $ManageSerialNumbersOnReleaseOnly;

    /* DISPID=126 */
    /* VT_BSTR [8] */
    /* property ApTaxCode */
    var $ApTaxCode;

    /* DISPID=126 */
    /* property ApTaxCode */
    var $ApTaxCode;

    /* DISPID=127 */
    /* VT_BSTR [8] */
    /* property ArTaxCode */
    var $ArTaxCode;

    /* DISPID=127 */
    /* property ArTaxCode */
    var $ArTaxCode;

    /* DISPID=128 */
    /* ? [29] */
    /* property CostAccountingMethod */
    var $CostAccountingMethod;

    /* DISPID=128 */
    /* property CostAccountingMethod */
    var $CostAccountingMethod;

    /* DISPID=129 */
    /* VT_BSTR [8] */
    /* property WarrantyTemplate */
    var $WarrantyTemplate;

    /* DISPID=129 */
    /* property WarrantyTemplate */
    var $WarrantyTemplate;

    /* DISPID=130 */
    /* ? [29] */
    /* property IndirectTax */
    var $IndirectTax;

    /* DISPID=130 */
    /* property IndirectTax */
    var $IndirectTax;

    /* DISPID=131 */
    /* ? [29] */
    /* property IssueMethod */
    var $IssueMethod;

    /* DISPID=131 */
    /* property IssueMethod */
    var $IssueMethod;

    /* DISPID=132 */
    /* ? [29] */
    /* property SRIAndBatchManageMethod */
    var $SRIAndBatchManageMethod;

    /* DISPID=132 */
    /* property SRIAndBatchManageMethod */
    var $SRIAndBatchManageMethod;

    /* DISPID=133 */
    /* VT_BSTR [8] */
    function GetAsXML(
    )
    {
        /* Get the object's data in xml format. */
    }
    /* DISPID=134 */
    function SaveToFile(
        /* VT_BSTR [8] [in] */ $FileName
    )
    {
        /* Save the object's data in xml format. */
    }
    /* DISPID=135 */
    /* ? [29] */
    /* property IsPhantom */
    var $IsPhantom;

    /* DISPID=135 */
    /* property IsPhantom */
    var $IsPhantom;

    /* DISPID=136 */
    /* VT_BSTR [8] */
    /* property InventoryUOM */
    var $InventoryUOM;

    /* DISPID=136 */
    /* property InventoryUOM */
    var $InventoryUOM;

    /* DISPID=137 */
    /* ? [29] */
    /* property PlanningSystem */
    var $PlanningSystem;

    /* DISPID=137 */
    /* property PlanningSystem */
    var $PlanningSystem;

    /* DISPID=138 */
    /* ? [29] */
    /* property ProcurementMethod */
    var $ProcurementMethod;

    /* DISPID=138 */
    /* property ProcurementMethod */
    var $ProcurementMethod;

    /* DISPID=139 */
    /* VT_BSTR [8] */
    /* property OrderIntervals */
    var $OrderIntervals;

    /* DISPID=139 */
    /* property OrderIntervals */
    var $OrderIntervals;

    /* DISPID=140 */
    /* VT_R8 [5] */
    /* property OrderMultiple */
    var $OrderMultiple;

    /* DISPID=140 */
    /* property OrderMultiple */
    var $OrderMultiple;

    /* DISPID=141 */
    /* VT_I4 [3] */
    /* property LeadTime */
    var $LeadTime;

    /* DISPID=141 */
    /* property LeadTime */
    var $LeadTime;

    /* DISPID=142 */
    /* VT_R8 [5] */
    /* property MinOrderQuantity */
    var $MinOrderQuantity;

    /* DISPID=142 */
    /* property MinOrderQuantity */
    var $MinOrderQuantity;

    /* DISPID=143 */
    /* ? [29] */
    /* property ItemType */
    var $ItemType;

    /* DISPID=143 */
    /* property ItemType */
    var $ItemType;

    /* DISPID=144 */
    /* ? [29] */
    /* property ItemClass */
    var $ItemClass;

    /* DISPID=144 */
    /* property ItemClass */
    var $ItemClass;

    /* DISPID=145 */
    /* VT_I4 [3] */
    /* property OutgoingServiceCode */
    var $OutgoingServiceCode;

    /* DISPID=145 */
    /* property OutgoingServiceCode */
    var $OutgoingServiceCode;

    /* DISPID=146 */
    /* VT_I4 [3] */
    /* property IncomingServiceCode */
    var $IncomingServiceCode;

    /* DISPID=146 */
    /* property IncomingServiceCode */
    var $IncomingServiceCode;

    /* DISPID=147 */
    /* VT_I4 [3] */
    /* property ServiceGroup */
    var $ServiceGroup;

    /* DISPID=147 */
    /* property ServiceGroup */
    var $ServiceGroup;

    /* DISPID=148 */
    /* VT_I4 [3] */
    /* property NCMCode */
    var $NCMCode;

    /* DISPID=148 */
    /* property NCMCode */
    var $NCMCode;

    /* DISPID=149 */
    /* ? [29] */
    /* property MaterialType */
    var $MaterialType;

    /* DISPID=149 */
    /* property MaterialType */
    var $MaterialType;

    /* DISPID=150 */
    /* VT_I4 [3] */
    /* property MaterialGroup */
    var $MaterialGroup;

    /* DISPID=150 */
    /* property MaterialGroup */
    var $MaterialGroup;

    /* DISPID=151 */
    /* VT_I4 [3] */
    /* property ProductSource */
    var $ProductSource;

    /* DISPID=151 */
    /* property ProductSource */
    var $ProductSource;

    /* DISPID=152 */
    /* ? [29] */
    /* property AutoCreateSerialNumbersOnRelease */
    var $AutoCreateSerialNumbersOnRelease;

    /* DISPID=152 */
    /* property AutoCreateSerialNumbersOnRelease */
    var $AutoCreateSerialNumbersOnRelease;

    /* DISPID=153 */
    /* VT_I4 [3] */
    /* property DNFEntry */
    var $DNFEntry;

    /* DISPID=153 */
    /* property DNFEntry */
    var $DNFEntry;

    /* DISPID=154 */
    /* VT_BSTR [8] */
    /* property GTSItemSpec */
    var $GTSItemSpec;

    /* DISPID=154 */
    /* property GTSItemSpec */
    var $GTSItemSpec;

    /* DISPID=155 */
    /* VT_BSTR [8] */
    /* property GTSItemTaxCategory */
    var $GTSItemTaxCategory;

    /* DISPID=155 */
    /* property GTSItemTaxCategory */
    var $GTSItemTaxCategory;

    /* DISPID=156 */
    /* VT_PTR [26] */
    /* property PreferredVendors */
    var $PreferredVendors;

    /* DISPID=157 */
    /* VT_I4 [3] */
    /* property FuelID */
    var $FuelID;

    /* DISPID=157 */
    /* property FuelID */
    var $FuelID;

    /* DISPID=158 */
    /* VT_BSTR [8] */
    /* property BeverageTableCode */
    var $BeverageTableCode;

    /* DISPID=158 */
    /* property BeverageTableCode */
    var $BeverageTableCode;

    /* DISPID=159 */
    /* VT_BSTR [8] */
    /* property BeverageGroupCode */
    var $BeverageGroupCode;

    /* DISPID=159 */
    /* property BeverageGroupCode */
    var $BeverageGroupCode;

    /* DISPID=160 */
    /* VT_I4 [3] */
    /* property BeverageCommercialBrandCode */
    var $BeverageCommercialBrandCode;

    /* DISPID=160 */
    /* property BeverageCommercialBrandCode */
    var $BeverageCommercialBrandCode;

    /* DISPID=161 */
    /* VT_I4 [3] */
    /* property Series */
    var $Series;

    /* DISPID=161 */
    /* property Series */
    var $Series;

    /* DISPID=162 */
    /* VT_I4 [3] */
    /* property ToleranceDays */
    var $ToleranceDays;

    /* DISPID=162 */
    /* property ToleranceDays */
    var $ToleranceDays;

    /* DISPID=163 */
    /* VT_PTR [26] */
    /* property LocalizationInfos */
    var $LocalizationInfos;

}
