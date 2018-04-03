<?php
/**
 * Created by PhpStorm.
 * User: H4
 * Date: 03/04/2018
 * Time: 20:14
 */

namespace Litiano\Sap\IdeHelper;



class IProductionOrders { /* GUID={1C7C966F-B713-42BF-9A74-0B15A649E63D} */
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
    function SaveToFile(
        /* VT_BSTR [8] [in] */ $bstrFileName
    )
    {
        /* SaveToFile */
    }
    /* DISPID=2 */
    function SaveXML(
        /* VT_PTR [26] [in][out] --> VT_BSTR [8]  */ &$pbstrFileName
    )
    {
        /* method SaveXML */
    }
    /* DISPID=3 */
    /* VT_BSTR [8] */
    function GetAsXML(
    )
    {
        /* GetAsXML */
    }
    /* DISPID=4 */
    /* VT_PTR [26] */
    /* Get browser */
    var $Browser;

    /* DISPID=5 */
    /* VT_PTR [26] */
    /* Get User Fields */
    /** @var IUserFields */
    var $UserFields;

    /* DISPID=6 */
    /* VT_BOOL [11] */
    function GetByKey(
        /* VT_I4 [3] [in] */ $lAbsEntry
    )
    {
        /* GetByKey */
    }
    /* DISPID=7 */
    /* VT_I4 [3] */
    function Add(
    )
    {
        /* method Add */
    }
    /* DISPID=8 */
    /* VT_I4 [3] */
    function Update(
    )
    {
        /* method Update */
    }
    /* DISPID=9 */
    /* VT_I4 [3] */
    function Cancel(
    )
    {
        /* method Cancel */
    }
    /* DISPID=12 */
    /* VT_I4 [3] */
    /* property AbsoluteEntry */
    var $AbsoluteEntry;

    /* DISPID=13 */
    /* VT_I4 [3] */
    /* property DocumentNumber */
    var $DocumentNumber;

    /* DISPID=14 */
    /* VT_I4 [3] */
    /* property Series */
    var $Series;

    /* DISPID=14 */
    /* property Series */
    var $Series;

    /* DISPID=15 */
    /* VT_BSTR [8] */
    /* property ItemNo */
    var $ItemNo;

    /* DISPID=15 */
    /* property ItemNo */
    var $ItemNo;

    /* DISPID=16 */
    /* ? [29] */
    /* property ProductionOrderStatus */
    var $ProductionOrderStatus;

    /* DISPID=16 */
    /* property ProductionOrderStatus */
    var $ProductionOrderStatus;

    /* DISPID=17 */
    /* ? [29] */
    /* property ProductionOrderType */
    var $ProductionOrderType;

    /* DISPID=17 */
    /* property ProductionOrderType */
    var $ProductionOrderType;

    /* DISPID=18 */
    /* VT_R8 [5] */
    /* property PlannedQuantity */
    var $PlannedQuantity;

    /* DISPID=18 */
    /* property PlannedQuantity */
    var $PlannedQuantity;

    /* DISPID=19 */
    /* VT_R8 [5] */
    /* property CompletedQuantity */
    var $CompletedQuantity;

    /* DISPID=20 */
    /* VT_R8 [5] */
    /* property RejectedQuantity */
    var $RejectedQuantity;

    /* DISPID=21 */
    /* VT_DATE [7] */
    /* property PostingDate */
    var $PostingDate;

    /* DISPID=21 */
    /* property PostingDate */
    var $PostingDate;

    /* DISPID=22 */
    /* VT_DATE [7] */
    /* property DueDate */
    var $DueDate;

    /* DISPID=22 */
    /* property DueDate */
    var $DueDate;

    /* DISPID=23 */
    /* VT_I4 [3] */
    /* property ProductionOrderOriginEntry */
    var $ProductionOrderOriginEntry;

    /* DISPID=23 */
    /* property ProductionOrderOriginEntry */
    var $ProductionOrderOriginEntry;

    /* DISPID=24 */
    /* VT_I4 [3] */
    /* property ProductionOrderOriginNumber */
    var $ProductionOrderOriginNumber;

    /* DISPID=25 */
    /* ? [29] */
    /* property ProductionOrderOrigin */
    var $ProductionOrderOrigin;

    /* DISPID=25 */
    /* property ProductionOrderOrigin */
    var $ProductionOrderOrigin;

    /* DISPID=26 */
    /* VT_I4 [3] */
    /* property UserSignature */
    var $UserSignature;

    /* DISPID=27 */
    /* VT_BSTR [8] */
    /* property Remarks */
    var $Remarks;

    /* DISPID=27 */
    /* property Remarks */
    var $Remarks;

    /* DISPID=28 */
    /* VT_DATE [7] */
    /* property ClosingDate */
    var $ClosingDate;

    /* DISPID=29 */
    /* VT_DATE [7] */
    /* property ReleaseDate */
    var $ReleaseDate;

    /* DISPID=30 */
    /* VT_BSTR [8] */
    /* property CustomerCode */
    var $CustomerCode;

    /* DISPID=30 */
    /* property CustomerCode */
    var $CustomerCode;

    /* DISPID=31 */
    /* VT_BSTR [8] */
    /* property Warehouse */
    var $Warehouse;

    /* DISPID=31 */
    /* property Warehouse */
    var $Warehouse;

    /* DISPID=32 */
    /* VT_BSTR [8] */
    /* property InventoryUOM */
    var $InventoryUOM;

    /* DISPID=33 */
    /* VT_BSTR [8] */
    /* property JournalRemarks */
    var $JournalRemarks;

    /* DISPID=33 */
    /* property JournalRemarks */
    var $JournalRemarks;

    /* DISPID=34 */
    /* VT_I4 [3] */
    /* property TransactionNumber */
    var $TransactionNumber;

    /* DISPID=35 */
    /* VT_DATE [7] */
    /* property CreationDate */
    var $CreationDate;

    /* DISPID=36 */
    /* VT_PTR [26] */
    /* property Lines */
    /** @var IProductionOrders_Lines */
    var $Lines;

    /* DISPID=37 */
    /* ? [29] */
    /* property Printed */
    var $Printed;

    /* DISPID=38 */
    /* VT_BSTR [8] */
    /* property DistributionRule */
    var $DistributionRule;

    /* DISPID=38 */
    /* property DistributionRule */
    var $DistributionRule;

    /* DISPID=28 */
    /* property ClosingDate */
    var $ClosingDate;

    /* DISPID=39 */
    /* VT_BSTR [8] */
    /* property Project */
    var $Project;

    /* DISPID=39 */
    /* property Project */
    var $Project;

    /* DISPID=40 */
    /* VT_BSTR [8] */
    /* property DistributionRule2 */
    var $DistributionRule2;

    /* DISPID=40 */
    /* property DistributionRule2 */
    var $DistributionRule2;

    /* DISPID=41 */
    /* VT_BSTR [8] */
    /* property DistributionRule3 */
    var $DistributionRule3;

    /* DISPID=41 */
    /* property DistributionRule3 */
    var $DistributionRule3;

    /* DISPID=42 */
    /* VT_BSTR [8] */
    /* property DistributionRule4 */
    var $DistributionRule4;

    /* DISPID=42 */
    /* property DistributionRule4 */
    var $DistributionRule4;

    /* DISPID=43 */
    /* VT_BSTR [8] */
    /* property DistributionRule5 */
    var $DistributionRule5;

    /* DISPID=43 */
    /* property DistributionRule5 */
    var $DistributionRule5;

    /* DISPID=44 */
    /* VT_PTR [26] */
    /* property SalesOrderLines */
    var $SalesOrderLines;

    /* DISPID=45 */
    /* VT_I4 [3] */
    /* property UoMEntry */
    var $UoMEntry;

    /* DISPID=46 */
    /* VT_DATE [7] */
    /* property StartDate */
    var $StartDate;

    /* DISPID=46 */
    /* property StartDate */
    var $StartDate;

}
