<?php
/**
 * Created by PhpStorm.
 * User: H4
 * Date: 03/04/2018
 * Time: 20:29
 */

namespace Litiano\Sap\IdeHelper;



class IProductionOrders_Lines { /* GUID={BEACEF84-4C88-45BE-ADC8-C866A8B755C6} */
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
    function SetCurrentLine(
        /* VT_I4 [3]  */ $LineNum
    )
    {
        /* method SetCurrentLine */
    }
    /* DISPID=3 */
    /* VT_I4 [3] */
    /* property Count */
    var $Count;

    /* DISPID=4 */
    /* VT_PTR [26] */
    /* Get User Fields */
    var $UserFields;

    /* DISPID=5 */
    /* VT_I4 [3] */
    /* property DocumentAbsoluteEntry */
    var $DocumentAbsoluteEntry;

    /* DISPID=6 */
    /* VT_I4 [3] */
    /* property LineNumber */
    var $LineNumber;

    /* DISPID=7 */
    /* VT_BSTR [8] */
    /* property ItemNo */
    var $ItemNo;

    /* DISPID=7 */
    /* property ItemNo */
    var $ItemNo;

    /* DISPID=8 */
    /* VT_R8 [5] */
    /* property BaseQuantity */
    var $BaseQuantity;

    /* DISPID=8 */
    /* property BaseQuantity */
    var $BaseQuantity;

    /* DISPID=9 */
    /* VT_R8 [5] */
    /* property PlannedQuantity */
    var $PlannedQuantity;

    /* DISPID=10 */
    /* VT_R8 [5] */
    /* property IssuedQuantity */
    var $IssuedQuantity;

    /* DISPID=11 */
    /* ? [29] */
    /* property ProductionOrderIssueType */
    var $ProductionOrderIssueType;

    /* DISPID=11 */
    /* property ProductionOrderIssueType */
    var $ProductionOrderIssueType;

    /* DISPID=12 */
    /* VT_BSTR [8] */
    /* property Warehouse */
    var $Warehouse;

    /* DISPID=12 */
    /* property Warehouse */
    var $Warehouse;

    /* DISPID=13 */
    /* VT_I4 [3] */
    /* property VisualOrder */
    var $VisualOrder;

    /* DISPID=9 */
    /* property PlannedQuantity */
    var $PlannedQuantity;

    /* DISPID=14 */
    /* VT_BSTR [8] */
    /* property DistributionRule */
    var $DistributionRule;

    /* DISPID=14 */
    /* property DistributionRule */
    var $DistributionRule;

    /* DISPID=15 */
    /* VT_I4 [3] */
    /* property LocationCode */
    var $LocationCode;

    /* DISPID=15 */
    /* property LocationCode */
    var $LocationCode;

    /* DISPID=16 */
    function Delete(
    )
    {
        /* method Delete */
    }
    /* DISPID=17 */
    /* VT_BSTR [8] */
    /* property Project */
    var $Project;

    /* DISPID=17 */
    /* property Project */
    var $Project;

    /* DISPID=18 */
    /* VT_BSTR [8] */
    /* property DistributionRule2 */
    var $DistributionRule2;

    /* DISPID=18 */
    /* property DistributionRule2 */
    var $DistributionRule2;

    /* DISPID=19 */
    /* VT_BSTR [8] */
    /* property DistributionRule3 */
    var $DistributionRule3;

    /* DISPID=19 */
    /* property DistributionRule3 */
    var $DistributionRule3;

    /* DISPID=20 */
    /* VT_BSTR [8] */
    /* property DistributionRule4 */
    var $DistributionRule4;

    /* DISPID=20 */
    /* property DistributionRule4 */
    var $DistributionRule4;

    /* DISPID=21 */
    /* VT_BSTR [8] */
    /* property DistributionRule5 */
    var $DistributionRule5;

    /* DISPID=21 */
    /* property DistributionRule5 */
    var $DistributionRule5;

    /* DISPID=22 */
    /* VT_I4 [3] */
    /* property UoMEntry */
    var $UoMEntry;

    /* DISPID=23 */
    /* VT_BSTR [8] */
    /* property UoMCode */
    var $UoMCode;

    /* DISPID=24 */
    /* VT_BSTR [8] */
    /* property WipAccount */
    var $WipAccount;

    /* DISPID=24 */
    /* property WipAccount */
    var $WipAccount;

    /* DISPID=25 */
    /* ? [29] */
    /* property ItemType */
    var $ItemType;

    /* DISPID=25 */
    /* property ItemType */
    var $ItemType;

    /* DISPID=26 */
    /* VT_BSTR [8] */
    /* property LineText */
    var $LineText;

    /* DISPID=26 */
    /* property LineText */
    var $LineText;

    /* DISPID=27 */
    /* VT_R8 [5] */
    /* property AdditionalQuantity */
    var $AdditionalQuantity;

    /* DISPID=27 */
    /* property AdditionalQuantity */
    var $AdditionalQuantity;

    /* DISPID=28 */
    /* VT_PTR [26] */
    /* property SerialNumbers */
    var $SerialNumbers;

    /* DISPID=29 */
    /* VT_PTR [26] */
    /* property BatchNumbers */
    var $BatchNumbers;

    /* DISPID=30 */
    /* VT_DATE [7] */
    /* property StartDate */
    var $StartDate;

    /* DISPID=30 */
    /* property StartDate */
    var $StartDate;

    /* DISPID=31 */
    /* VT_DATE [7] */
    /* property EndDate */
    var $EndDate;

    /* DISPID=31 */
    /* property EndDate */
    var $EndDate;

    /* DISPID=32 */
    /* ? [29] */
    /* property ResourceAllocation */
    var $ResourceAllocation;

    /* DISPID=32 */
    /* property ResourceAllocation */
    var $ResourceAllocation;

}
