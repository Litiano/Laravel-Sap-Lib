<?php
/**
 * Created by PhpStorm.
 * User: H4
 * Date: 29/10/2018
 * Time: 22:33
 */

namespace Litiano\Sap\IdeHelper;



class IMaterialRevaluation_lines { /* GUID={038A3F8E-2465-435E-8D05-F510620533C3} */
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
        /* Add */
    }
    /* DISPID=2 */
    /* VT_I4 [3] */
    /* LineNum */
    var $LineNum;

    /* DISPID=3 */
    /* VT_BSTR [8] */
    /* ItemCode */
    var $ItemCode;

    /* DISPID=3 */
    /* ItemCode */
    var $ItemCode;

    /* DISPID=4 */
    /* VT_BSTR [8] */
    /* ItemDescription */
    var $ItemDescription;

    /* DISPID=5 */
    /* VT_R8 [5] */
    /* Quantity */
    var $Quantity;

    /* DISPID=5 */
    /* Quantity */
    var $Quantity;

    /* DISPID=6 */
    /* VT_R8 [5] */
    /* Price */
    var $Price;

    /* DISPID=6 */
    /* Price */
    var $Price;

    /* DISPID=7 */
    /* VT_BSTR [8] */
    /* Warehouse */
    var $WarehouseCode;

    /* DISPID=7 */
    /* Warehouse */
    var $WarehouseCode;

    /* DISPID=8 */
    /* VT_I4 [3] */
    /* Lines Count */
    var $Count;

    /* DISPID=9 */
    function SetCurrentLine(
        /* VT_I4 [3]  */ $LineNum
    )
    {
        /* Set the current line */
    }
    /* DISPID=10 */
    /* VT_PTR [26] */
    /* Invoke  the user fields object */
    var $UserFields;

    /* DISPID=11 */
    /* VT_R8 [5] */
    /* property ActualPrice */
    var $ActualPrice;

    /* DISPID=12 */
    /* VT_R8 [5] */
    /* property OnHand */
    var $OnHand;

    /* DISPID=13 */
    /* VT_R8 [5] */
    /* property DebitCredit */
    var $DebitCredit;

    /* DISPID=13 */
    /* property DebitCredit */
    var $DebitCredit;

    /* DISPID=14 */
    /* VT_I4 [3] */
    /* property DocEntry */
    var $DocEntry;

    /* DISPID=15 */
    /* VT_BSTR [8] */
    /* property RevaluationDecrementAccount */
    var $RevaluationDecrementAccount;

    /* DISPID=15 */
    /* property RevaluationDecrementAccount */
    var $RevaluationDecrementAccount;

    /* DISPID=16 */
    /* VT_BSTR [8] */
    /* property RevaluationIncrementAccount */
    var $RevaluationIncrementAccount;

    /* DISPID=16 */
    /* property RevaluationIncrementAccount */
    var $RevaluationIncrementAccount;

    /* DISPID=17 */
    /* VT_R8 [5] */
    /* property RevalAmountToStock */
    var $RevalAmountToStock;

    /* DISPID=18 */
    /* VT_PTR [26] */
    /* property FIFOLayers */
    var $FIFOLayers;

    /* DISPID=19 */
    /* VT_BSTR [8] */
    /* property Project */
    var $Project;

    /* DISPID=19 */
    /* property Project */
    var $Project;

    /* DISPID=20 */
    /* VT_BSTR [8] */
    /* property DistributionRule */
    var $DistributionRule;

    /* DISPID=20 */
    /* property DistributionRule */
    var $DistributionRule;

    /* DISPID=21 */
    /* VT_BSTR [8] */
    /* property DistributionRule2 */
    var $DistributionRule2;

    /* DISPID=21 */
    /* property DistributionRule2 */
    var $DistributionRule2;

    /* DISPID=22 */
    /* VT_BSTR [8] */
    /* property DistributionRule3 */
    var $DistributionRule3;

    /* DISPID=22 */
    /* property DistributionRule3 */
    var $DistributionRule3;

    /* DISPID=23 */
    /* VT_BSTR [8] */
    /* property DistributionRule4 */
    var $DistributionRule4;

    /* DISPID=23 */
    /* property DistributionRule4 */
    var $DistributionRule4;

    /* DISPID=24 */
    /* VT_BSTR [8] */
    /* property DistributionRule5 */
    var $DistributionRule5;

    /* DISPID=24 */
    /* property DistributionRule5 */
    var $DistributionRule5;

    /* DISPID=25 */
    /* VT_PTR [26] */
    /* property SNBLines */
    var $SNBLines;

}
