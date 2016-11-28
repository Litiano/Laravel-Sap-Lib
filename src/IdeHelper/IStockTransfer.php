<?php
/**
 * Created by PhpStorm.
 * User: E-Commerce 2
 * Date: 28/11/2016
 * Time: 18:47
 */

namespace Litiano\Sap\IdeHelper;



class IStockTransfer { /* GUID={8DD14B84-6D7B-49E9-8137-A3E7F9A3642F} */
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
    /* property Lines */
    /**
     * @var $Lines IStockTransfer_Lines
     */
    var $Lines;

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
        /* VT_I4 [3]  */ $AbsEntry
    )
    {
        /* Get by key */
    }
    /* DISPID=4 */
    /* VT_I4 [3] */
    function Update(
    )
    {
        /* method Update */
    }
    /* DISPID=5 */
    /* VT_I4 [3] */
    /* property Series */
    var $Series;

    /* DISPID=5 */
    /* property Series */
    var $Series;

    /* DISPID=6 */
    /* ? [29] */
    /* property Printed */
    var $Printed;

    /* DISPID=7 */
    /* VT_DATE [7] */
    /* property DocDate */
    var $DocDate;

    /* DISPID=7 */
    /* property DocDate */
    var $DocDate;

    /* DISPID=8 */
    /* VT_BSTR [8] */
    /* property CardCode */
    var $CardCode;

    /* DISPID=8 */
    /* property CardCode */
    var $CardCode;

    /* DISPID=9 */
    /* VT_BSTR [8] */
    /* property CardName */
    var $CardName;

    /* DISPID=9 */
    /* property CardName */
    var $CardName;

    /* DISPID=10 */
    /* VT_BSTR [8] */
    /* property Address */
    var $Address;

    /* DISPID=10 */
    /* property Address */
    var $Address;

    /* DISPID=11 */
    /* VT_BSTR [8] */
    /* property Reference1 */
    var $Reference1;

    /* DISPID=11 */
    /* property Reference1 */
    var $Reference1;

    /* DISPID=12 */
    /* VT_BSTR [8] */
    /* property Reference2 */
    var $Reference2;

    /* DISPID=12 */
    /* property Reference2 */
    var $Reference2;

    /* DISPID=13 */
    /* VT_BSTR [8] */
    /* property Comments */
    var $Comments;

    /* DISPID=13 */
    /* property Comments */
    var $Comments;

    /* DISPID=14 */
    /* VT_BSTR [8] */
    /* property JournalMemo */
    var $JournalMemo;

    /* DISPID=14 */
    /* property JournalMemo */
    var $JournalMemo;

    /* DISPID=15 */
    /* VT_I4 [3] */
    /* property PriceList */
    var $PriceList;

    /* DISPID=15 */
    /* property PriceList */
    var $PriceList;

    /* DISPID=16 */
    /* VT_I4 [3] */
    /* property SalesPersonCode */
    var $SalesPersonCode;

    /* DISPID=16 */
    /* property SalesPersonCode */
    var $SalesPersonCode;

    /* DISPID=17 */
    /* VT_BSTR [8] */
    /* property FromWarehouse */
    var $FromWarehouse;

    /* DISPID=17 */
    /* property FromWarehouse */
    var $FromWarehouse;

    /* DISPID=18 */
    /* VT_I4 [3] */
    function Remove(
    )
    {
        /* method Remove */
    }
    /* DISPID=19 */
    /* VT_I4 [3] */
    function Cancel(
    )
    {
        /* method Cancel */
    }
    /* DISPID=20 */
    /* VT_I4 [3] */
    function Close(
    )
    {
        /* method Close */
    }
    /* DISPID=21 */
    /* VT_PTR [26] */
    /* User fields for this object. */
    var $Browser;

    /* DISPID=22 */
    /* VT_I4 [3] */
    /* property DocEntry */
    var $DocEntry;

    /* DISPID=23 */
    /* VT_DATE [7] */
    /* property CreationDate */
    var $CreationDate;

    /* DISPID=24 */
    /* VT_DATE [7] */
    /* property UpdateDate */
    var $UpdateDate;

    /* DISPID=25 */
    /* VT_I4 [3] */
    /* property FinancialPeriod */
    var $FinancialPeriod;

    /* DISPID=26 */
    /* VT_I4 [3] */
    /* property TransNum */
    var $TransNum;

    /* DISPID=27 */
    /* VT_I4 [3] */
    /* property DocNum */
    var $DocNum;

    /* DISPID=28 */
    function SaveXML(
        /* VT_PTR [26] [in][out] --> VT_BSTR [8]  */ &$FileName
    )
    {
        /* method SaveXML */
    }
    /* DISPID=29 */
    /* VT_DATE [7] */
    /* property TaxDate */
    var $TaxDate;

    /* DISPID=29 */
    /* property TaxDate */
    var $TaxDate;

    /* DISPID=30 */
    /* VT_I4 [3] */
    /* property ContactPerson */
    var $ContactPerson;

    /* DISPID=30 */
    /* property ContactPerson */
    var $ContactPerson;

    /* DISPID=31 */
    /* VT_PTR [26] */
    /* property UserFields */
    /**
     * @var $UserFields IUserFields
     */
    var $UserFields;

    /* DISPID=32 */
    /* VT_BSTR [8] */
    function GetAsXML(
    )
    {
        /* Get the object's data in xml format. */
    }
    /* DISPID=33 */
    function SaveToFile(
        /* VT_BSTR [8] [in] */ $FileName
    )
    {
        /* Save the object's data in xml format. */
    }
    /* DISPID=34 */
    /* VT_BSTR [8] */
    /* property FolioPrefixString */
    var $FolioPrefixString;

    /* DISPID=34 */
    /* property FolioPrefixString */
    var $FolioPrefixString;

    /* DISPID=35 */
    /* VT_I4 [3] */
    /* property FolioNumber */
    var $FolioNumber;

    /* DISPID=35 */
    /* property FolioNumber */
    var $FolioNumber;

    /* DISPID=36 */
    /* VT_PTR [26] */
    /* property TaxExtension */
    var $TaxExtension;

    /* DISPID=37 */
    /* ? [29] */
    /* property DocObjectCode */
    var $DocObjectCode;

    /* DISPID=37 */
    /* property DocObjectCode */
    var $DocObjectCode;

    /* DISPID=38 */
    /* VT_DATE [7] */
    /* property DueDate */
    var $DueDate;

    /* DISPID=38 */
    /* property DueDate */
    var $DueDate;

    /* DISPID=39 */
    /* VT_I4 [3] */
    function GetApprovalTemplates(
    )
    {
        /* method GetApprovalTemplates */
    }
    /* DISPID=40 */
    /* VT_I4 [3] */
    function SaveDraftToDocument(
    )
    {
        /* method SaveDraftToDocument */
    }
    /* DISPID=41 */
    /* VT_PTR [26] */
    /* property StockTransfer_ApprovalRequests */
    var $StockTransfer_ApprovalRequests;

    /* DISPID=42 */
    /* ? [29] */
    /* property AuthorizationStatus */
    var $AuthorizationStatus;

    /* DISPID=43 */
    /* VT_I4 [3] */
    /* property BPLID */
    var $BPLID;

    /* DISPID=44 */
    /* VT_BSTR [8] */
    /* property BPLName */
    var $BPLName;

    /* DISPID=45 */
    /* VT_BSTR [8] */
    /* property VATRegNum */
    var $VATRegNum;

}
