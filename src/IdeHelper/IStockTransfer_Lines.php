<?php
/**
 * Created by PhpStorm.
 * User: E-Commerce 2
 * Date: 28/11/2016
 * Time: 18:47
 */

namespace Litiano\Sap\IdeHelper;



class IStockTransfer_Lines { /* GUID={CAF06BB7-9E71-4EB7-BD56-2A79781C3855} */
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
    function Add(
    )
    {
        /* method Add */
    }
    /* DISPID=2 */
    /* VT_I4 [3] */
    /* Lines Count */
    var $Count;

    /* DISPID=3 */
    function SetCurrentLine(
        /* VT_I4 [3]  */ $LineNum
    )
    {
        /* Set the current line */
    }
    /* DISPID=4 */
    /* VT_I4 [3] */
    /* property LineNum */
    var $LineNum;

    /* DISPID=5 */
    /* VT_BSTR [8] */
    /* property ItemCode */
    var $ItemCode;

    /* DISPID=5 */
    /* property ItemCode */
    var $ItemCode;

    /* DISPID=6 */
    /* VT_BSTR [8] */
    /* property ItemDescription */
    var $ItemDescription;

    /* DISPID=6 */
    /* property ItemDescription */
    var $ItemDescription;

    /* DISPID=7 */
    /* VT_R8 [5] */
    /* property Quantity */
    var $Quantity;

    /* DISPID=7 */
    /* property Quantity */
    var $Quantity;

    /* DISPID=8 */
    /* VT_R8 [5] */
    /* property Price */
    var $Price;

    /* DISPID=8 */
    /* property Price */
    var $Price;

    /* DISPID=9 */
    /* VT_BSTR [8] */
    /* property Currency */
    var $Currency;

    /* DISPID=9 */
    /* property Currency */
    var $Currency;

    /* DISPID=10 */
    /* VT_R8 [5] */
    /* property Rate */
    var $Rate;

    /* DISPID=10 */
    /* property Rate */
    var $Rate;

    /* DISPID=11 */
    /* VT_R8 [5] */
    /* property DiscountPercent */
    var $DiscountPercent;

    /* DISPID=11 */
    /* property DiscountPercent */
    var $DiscountPercent;

    /* DISPID=12 */
    /* VT_BSTR [8] */
    /* property VendorNum */
    var $VendorNum;

    /* DISPID=12 */
    /* property VendorNum */
    var $VendorNum;

    /* DISPID=13 */
    /* VT_BSTR [8] */
    /* property SerialNumber */
    var $SerialNumber;

    /* DISPID=13 */
    /* property SerialNumber */
    var $SerialNumber;

    /* DISPID=14 */
    /* VT_BSTR [8] */
    /* property WarehouseCode */
    var $WarehouseCode;

    /* DISPID=14 */
    /* property WarehouseCode */
    var $WarehouseCode;

    /* DISPID=15 */
    /* VT_BSTR [8] */
    /* property ProjectCode */
    var $ProjectCode;

    /* DISPID=15 */
    /* property ProjectCode */
    var $ProjectCode;

    /* DISPID=16 */
    /* VT_R8 [5] */
    /* property Factor */
    var $Factor;

    /* DISPID=16 */
    /* property Factor */
    var $Factor;

    /* DISPID=17 */
    /* VT_R8 [5] */
    /* property Factor2 */
    var $Factor2;

    /* DISPID=17 */
    /* property Factor2 */
    var $Factor2;

    /* DISPID=18 */
    /* VT_R8 [5] */
    /* property Factor3 */
    var $Factor3;

    /* DISPID=18 */
    /* property Factor3 */
    var $Factor3;

    /* DISPID=19 */
    /* VT_R8 [5] */
    /* property Factor4 */
    var $Factor4;

    /* DISPID=19 */
    /* property Factor4 */
    var $Factor4;

    /* DISPID=20 */
    /* VT_PTR [26] */
    /* property SerialNumbers */
    var $SerialNumbers;

    /* DISPID=21 */
    /* VT_PTR [26] */
    /* property BatchNumbers */
    var $BatchNumbers;

    /* DISPID=22 */
    /* VT_PTR [26] */
    /* property UserFields */
    var $UserFields;

    /* DISPID=23 */
    /* VT_BSTR [8] */
    /* property DistributionRule */
    var $DistributionRule;

    /* DISPID=23 */
    /* property DistributionRule */
    var $DistributionRule;

    /* DISPID=24 */
    /* ? [29] */
    /* property UseBaseUnits */
    var $UseBaseUnits;

    /* DISPID=24 */
    /* property UseBaseUnits */
    var $UseBaseUnits;

    /* DISPID=25 */
    /* VT_BSTR [8] */
    /* property MeasureUnit */
    var $MeasureUnit;

    /* DISPID=25 */
    /* property MeasureUnit */
    var $MeasureUnit;

    /* DISPID=26 */
    /* VT_R8 [5] */
    /* property UnitsOfMeasurment */
    var $UnitsOfMeasurment;

    /* DISPID=26 */
    /* property UnitsOfMeasurment */
    var $UnitsOfMeasurment;

    /* DISPID=32 */
    function Delete(
    )
    {
        /* method Delete */
    }
    /* DISPID=33 */
    /* VT_BSTR [8] */
    /* property DistributionRule2 */
    var $DistributionRule2;

    /* DISPID=33 */
    /* property DistributionRule2 */
    var $DistributionRule2;

    /* DISPID=34 */
    /* VT_BSTR [8] */
    /* property DistributionRule3 */
    var $DistributionRule3;

    /* DISPID=34 */
    /* property DistributionRule3 */
    var $DistributionRule3;

    /* DISPID=35 */
    /* VT_BSTR [8] */
    /* property DistributionRule4 */
    var $DistributionRule4;

    /* DISPID=35 */
    /* property DistributionRule4 */
    var $DistributionRule4;

    /* DISPID=36 */
    /* VT_BSTR [8] */
    /* property DistributionRule5 */
    var $DistributionRule5;

    /* DISPID=36 */
    /* property DistributionRule5 */
    var $DistributionRule5;

    /* DISPID=37 */
    /* ? [29] */
    /* property BaseType */
    var $BaseType;

    /* DISPID=37 */
    /* property BaseType */
    var $BaseType;

    /* DISPID=38 */
    /* VT_I4 [3] */
    /* property BaseLine */
    var $BaseLine;

    /* DISPID=38 */
    /* property BaseLine */
    var $BaseLine;

    /* DISPID=39 */
    /* VT_I4 [3] */
    /* property BaseEntry */
    var $BaseEntry;

    /* DISPID=39 */
    /* property BaseEntry */
    var $BaseEntry;

    /* DISPID=40 */
    /* VT_I4 [3] */
    /* property DocEntry */
    var $DocEntry;

    /* DISPID=41 */
    /* VT_R8 [5] */
    /* property UnitPrice */
    var $UnitPrice;

    /* DISPID=41 */
    /* property UnitPrice */
    var $UnitPrice;

}
