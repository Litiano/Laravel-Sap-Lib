<?php
/**
 * Created by PhpStorm.
 * User: E-Commerce 2
 * Date: 09/03/2017
 * Time: 11:48
 */

namespace Litiano\Sap\IdeHelper;



class IDepositsService { /* GUID={8D14FB10-4616-4AF3-B477-0B87C797AEBC} */
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
    /* VT_DISPATCH [9] */
    function GetDataInterface(
        /* ? [29] [in] */ $enumMSDI
    )
    {
        if($enumMSDI == 0){return new IDeposit();}
        /* GetDataInterface */
    }
    /* DISPID=2 */
    /* VT_DISPATCH [9] */
    function GetDataInterfaceFromXMLFile(
        /* VT_BSTR [8] [in] */ $bstrFileName
    )
    {
        /* GetDataInterfaceFromXMLFile */
    }
    /* DISPID=3 */
    /* VT_DISPATCH [9] */
    function GetDataInterfaceFromXMLString(
        /* VT_BSTR [8] [in] */ $bstrXMLString
    )
    {
        /* GetDataInterfaceFromXMLString */
    }
    /* DISPID=10 */
    /* VT_PTR [26] */
    function GetDeposit(
        /* VT_PTR [26] [in] --> ? [29]  */ &$pIDepositParams
    )
    {
        /* GetDeposit */
    }
    /* DISPID=11 */
    /* VT_PTR [26] */
    function AddDeposit(
        /* VT_PTR [26] [in] --> ? [29]  */ &$pIDeposit
    )
    {
        /* AddDeposit */
    }
    /* DISPID=12 */
    function UpdateDeposit(
        /* VT_PTR [26] [in] --> ? [29]  */ &$pIDeposit
    )
    {
        /* UpdateDeposit */
    }
    /* DISPID=13 */
    function CancelDeposit(
        /* VT_PTR [26] [in] --> ? [29]  */ &$pIDepositParams
    )
    {
        /* CancelDeposit */
    }
    /* DISPID=14 */
    /* VT_PTR [26] */
    function GetDepositList(
    )
    {
        /* GetDepositList */
    }
}
