<?php
/**
 * Created by PhpStorm.
 * User: E-Commerce 2
 * Date: 25/11/2016
 * Time: 16:49
 */

namespace Litiano\Sap\IdeHelper;


class IItems_Prices { /* GUID={E343AA97-4BC8-4E0F-BE71-1B3BE345F702} */
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
    /* DISPID=2 */
    /* VT_I4 [3] */
    /* property Count */
    var $Count;

    /* DISPID=3 */
    function SetCurrentLine(
        /* VT_I4 [3]  */ $LineNum
    )
    {
        /* method SetCurrentLine */
    }
    /* DISPID=4 */
    /* VT_I4 [3] */
    /* property PriceList */
    var $PriceList;

    /* DISPID=5 */
    /* VT_BSTR [8] */
    /* property PriceListName */
    var $PriceListName;

    /* DISPID=6 */
    /* VT_R8 [5] */
    /* property Price */
    var $Price;

    /* DISPID=6 */
    /* property Price */
    var $Price;

    /* DISPID=7 */
    /* VT_BSTR [8] */
    /* property Currency */
    var $Currency;

    /* DISPID=7 */
    /* property Currency */
    var $Currency;

    /* DISPID=8 */
    /* VT_PTR [26] */
    /* property UserFields */
    var $UserFields;

}
