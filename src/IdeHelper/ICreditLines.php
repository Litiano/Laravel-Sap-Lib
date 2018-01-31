<?php
/**
 * Created by PhpStorm.
 * User: Litiano
 * Date: 31/01/2018
 * Time: 17:19
 */

namespace Litiano\Sap\IdeHelper;



class ICreditLines { /* GUID={0219BFB4-6A47-47F5-942F-8B05389A05FB} */
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
    /* DISPID=-4 */
    /* VT_UNKNOWN [13] */
    /* _NewEnum */
    var $_NewEnum;

    /* DISPID=0 */
    /* VT_PTR [26] */
    function Item(
        /* VT_VARIANT [12] [in] */ $vtIndex
    )
    {
        /* DISPID_VALUE */
    }
    /* DISPID=1 */
    /* VT_I4 [3] */
    /* Count */
    var $Count;

    /* DISPID=2 */
    /* VT_PTR [26] */
    function Add(
    )
    {
        /* method Add */
    }
    /* DISPID=3 */
    function ToXMLFile(
        /* VT_BSTR [8] [in] */ $bstrFileName
    )
    {
        /* method ToXMLFile */
    }
    /* DISPID=4 */
    /* VT_BSTR [8] */
    function ToXMLString(
    )
    {
        /* method ToXMLString */
    }
    /* DISPID=5 */
    /* VT_BSTR [8] */
    function GetXMLSchema(
    )
    {
        /* method GetXMLSchema */
    }
}
