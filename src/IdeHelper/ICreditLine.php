<?php
/**
 * Created by PhpStorm.
 * User: Litiano
 * Date: 01/02/2018
 * Time: 10:05
 */

namespace Litiano\Sap\IdeHelper;



class ICreditLine { /* GUID={AFFBD91B-08A8-4972-B8B1-2E923B3F989A} */
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
    function ToXMLFile(
        /* VT_BSTR [8] [in] */ $bstrFileName
    )
    {
        /* method ToXMLFile */
    }
    /* DISPID=2 */
    /* VT_BSTR [8] */
    function ToXMLString(
    )
    {
        /* method ToXMLString */
    }
    /* DISPID=3 */
    /* VT_BSTR [8] */
    function GetXMLSchema(
    )
    {
        /* method GetXMLSchema */
    }
    /* DISPID=4 */
    function FromXMLFile(
        /* VT_BSTR [8] [in] */ $bstrFileName
    )
    {
        /* method FromXMLFile */
    }
    /* DISPID=5 */
    function FromXMLString(
        /* VT_BSTR [8] [in] */ $bstrXML
    )
    {
        /* method FromXMLString */
    }
    /* DISPID=10 */
    /* VT_I4 [3] */
    /* property AbsId */
    var $AbsId;

    /* DISPID=10 */
    /* property AbsId */
    var $AbsId;

    /* DISPID=11 */
    /* VT_I4 [3] */
    /* property CreditCard */
    var $CreditCard;

    /* DISPID=12 */
    /* VT_BSTR [8] */
    /* property VoucherNumber */
    var $VoucherNumber;

    /* DISPID=13 */
    /* VT_I4 [3] */
    /* property PaymentMethodCode */
    var $PaymentMethodCode;

    /* DISPID=14 */
    /* VT_DATE [7] */
    /* property PayDate */
    var $PayDate;

    /* DISPID=15 */
    /* ? [29] */
    /* property Deposited */
    var $Deposited;

    /* DISPID=16 */
    /* VT_I4 [3] */
    /* property NumOfPayments */
    var $NumOfPayments;

    /* DISPID=17 */
    /* VT_BSTR [8] */
    /* property Customer */
    var $Customer;

    /* DISPID=18 */
    /* VT_BSTR [8] */
    /* property Reference */
    var $Reference;

    /* DISPID=19 */
    /* ? [29] */
    /* property Transferred */
    var $Transferred;

    /* DISPID=20 */
    /* VT_R8 [5] */
    /* property Total */
    var $Total;

    /* DISPID=21 */
    /* VT_BSTR [8] */
    /* property CreditCurrency */
    var $CreditCurrency;

}
