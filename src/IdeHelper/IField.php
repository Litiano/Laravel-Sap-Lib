<?php
/**
 * Created by PhpStorm.
 * User: E-Commerce 2
 * Date: 25/11/2016
 * Time: 16:43
 */

namespace Litiano\Sap\IdeHelper;


class IField { /* GUID={6B2A877D-56A5-4DB4-A2DB-D0D46292B0A1} */
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
    /* VT_BSTR [8] */
    /* Fields name. */
    var $Name;

    /* DISPID=2 */
    /* ? [29] */
    /* Fields type. */
    var $Type;

    /* DISPID=3 */
    /* VT_I4 [3] */
    /* Fields size. */
    var $Size;

    /* DISPID=4 */
    /* VT_VARIANT [12] */
    /* Fields value. */
    var $Value;

    /* DISPID=4 */
    /* Fields value. */
    var $Value;

    /* DISPID=5 */
    /* VT_BSTR [8] */
    /* Fields description. */
    var $Description;

    /* DISPID=6 */
    /* VT_BSTR [8] */
    /* Fields Valid Value. */
    var $ValidValue;

    /* DISPID=6 */
    /* Fields Valid Value. */
    var $ValidValue;

    /* DISPID=10 */
    /* VT_PTR [26] */
    /* ValidValues */
    var $ValidValues;

    /* DISPID=11 */
    /* ? [29] */
    /* Property SubType */
    var $SubType;

    /* DISPID=12 */
    /* VT_BSTR [8] */
    /* Property LinkedTable */
    var $LinkedTable;

    /* DISPID=13 */
    /* VT_BSTR [8] */
    /* Property DefaultValue */
    var $DefaultValue;

    /* DISPID=14 */
    /* ? [29] */
    /* property Mandatory */
    var $Mandatory;

    /* DISPID=15 */
    /* ? [29] */
    function IsNull(
    )
    {
        /* method IsNull */
    }
    /* DISPID=16 */
    /* VT_I4 [3] */
    function SetNullValue(
    )
    {
        /* method SetNullValue */
    }
    /* DISPID=17 */
    /* VT_I4 [3] */
    /* property FieldID */
    var $FieldID;

    /* DISPID=18 */
    /* VT_BSTR [8] */
    /* property Table */
    var $Table;

}
