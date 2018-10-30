<?php
/**
 * Created by PhpStorm.
 * User: H4
 * Date: 29/10/2018
 * Time: 22:30
 */

namespace Litiano\Sap\IdeHelper;



class IMaterialRevaluation { /* GUID={461F000F-9DB2-45D0-808D-FA552126FF16} */
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
    /* VT_I4 [3] */
    function Add(
    )
    {
        /* Add */
    }
    /* DISPID=2 */
    /* VT_PTR [26] */
    /* Invoke the lines object */
    /** @var IMaterialRevaluation_lines */
    var $Lines;

    /* DISPID=3 */
    /* VT_I4 [3] */
    /* Doc num */
    var $DocNum;

    /* DISPID=4 */
    /* VT_DATE [7] */
    /* Doc date */
    var $DocDate;

    /* DISPID=4 */
    /* Doc date */
    var $DocDate;

    /* DISPID=5 */
    /* VT_BSTR [8] */
    /* Referance 1 */
    var $Reference1;

    /* DISPID=6 */
    /* VT_BSTR [8] */
    /* Referance 2 */
    var $Reference2;

    /* DISPID=6 */
    /* Referance 2 */
    var $Reference2;

    /* DISPID=7 */
    /* VT_BSTR [8] */
    /* Comments */
    var $Comments;

    /* DISPID=7 */
    /* Comments */
    var $Comments;

    /* DISPID=8 */
    /* VT_BSTR [8] */
    /* Jurnal memo */
    var $JournalMemo;

    /* DISPID=8 */
    /* Jurnal memo */
    var $JournalMemo;

    /* DISPID=9 */
    /* VT_DATE [7] */
    /* Doc time */
    var $DocTime;

    /* DISPID=10 */
    /* VT_I4 [3] */
    /* Series */
    var $Series;

    /* DISPID=10 */
    /* Series */
    var $Series;

    /* DISPID=11 */
    /* VT_DATE [7] */
    /* Tax date */
    var $TaxDate;

    /* DISPID=11 */
    /* Tax date */
    var $TaxDate;

    /* DISPID=12 */
    /* VT_BOOL [11] */
    function GetByKey(
        /* VT_I4 [3]  */ $AbsEntry
    )
    {
        /* Get by key */
    }
    /* DISPID=13 */
    /* VT_PTR [26] */
    /* Invoke the user fields object */
    var $UserFields;

    /* DISPID=14 */
    function SaveXML(
        /* VT_PTR [26] [in][out] --> VT_BSTR [8]  */ &$FileName
    )
    {
        /* Save object as XML document */
    }
    /* DISPID=15 */
    /* VT_I4 [3] */
    function Update(
    )
    {
        /* method Update */
    }
    /* DISPID=16 */
    /* VT_I4 [3] */
    function Cancel(
    )
    {
        /* method Cancel */
    }
    /* DISPID=17 */
    /* VT_I4 [3] */
    function Close(
    )
    {
        /* method Close */
    }
    /* DISPID=18 */
    /* VT_I4 [3] */
    function Remove(
    )
    {
        /* method Remove */
    }
    /* DISPID=19 */
    /* VT_PTR [26] */
    /* User fields for this object. */
    var $Browser;

    /* DISPID=20 */
    /* VT_I4 [3] */
    /* property DocEntry */
    var $DocEntry;

    /* DISPID=21 */
    /* VT_DATE [7] */
    /* property CreationDate */
    var $CreationDate;

    /* DISPID=22 */
    /* VT_DATE [7] */
    /* property UpdateDate */
    var $UpdateDate;

    /* DISPID=23 */
    /* VT_I4 [3] */
    /* property TransNum */
    var $TransNum;

    /* DISPID=24 */
    /* VT_BSTR [8] */
    /* property RevalType */
    var $RevalType;

    /* DISPID=24 */
    /* property RevalType */
    var $RevalType;

    /* DISPID=25 */
    /* VT_BSTR [8] */
    /* property RevaluationIncomeAccount */
    var $RevaluationIncomeAccount;

    /* DISPID=25 */
    /* property RevaluationIncomeAccount */
    var $RevaluationIncomeAccount;

    /* DISPID=26 */
    /* VT_BSTR [8] */
    /* property RevaluationExpenseAccount */
    var $RevaluationExpenseAccount;

    /* DISPID=26 */
    /* property RevaluationExpenseAccount */
    var $RevaluationExpenseAccount;

    /* DISPID=27 */
    /* VT_BSTR [8] */
    /* property DataSource */
    var $DataSource;

    /* DISPID=28 */
    /* VT_I4 [3] */
    /* property UserSignature */
    var $UserSignature;

    /* DISPID=29 */
    /* VT_BSTR [8] */
    function GetAsXML(
    )
    {
        /* Get the object's data in xml format. */
    }
    /* DISPID=30 */
    function SaveToFile(
        /* VT_BSTR [8] [in] */ $FileName
    )
    {
        /* Save the object's data in xml format. */
    }
    /* DISPID=51 */
    /* ? [29] */
    /* property InflationRevaluation */
    var $InflationRevaluation;

    /* DISPID=51 */
    /* property InflationRevaluation */
    var $InflationRevaluation;

    /* DISPID=52 */
    /* VT_BSTR [8] */
    /* property CardCode */
    var $CardCode;

    /* DISPID=52 */
    /* property CardCode */
    var $CardCode;

    /* DISPID=53 */
    /* VT_BSTR [8] */
    /* property CardName */
    var $CardName;

    /* DISPID=53 */
    /* property CardName */
    var $CardName;

}
