<?php
/**
 * Created by PhpStorm.
 * User: Litiano
 * Date: 21/06/2017
 * Time: 09:34
 */

namespace Litiano\Sap\IdeHelper;


class IPayments_CreditCards
{
    /* GUID={CC3579ED-1C61-4864-8E51-208A3DCDFC93} */ /* DISPID=1610612736 */
    function QueryInterface( /* VT_PTR [26] [in] --> ? [29] */
        &$riid, /* VT_PTR [26] [out] --> VT_PTR [26] */
        &$ppvObj)
    {
    } /* DISPID=1610612737 */ /* VT_UI4 [19] */
    function AddRef()
    {
    } /* DISPID=1610612738 */ /* VT_UI4 [19] */
    function Release()
    {
    } /* DISPID=1610678272 */
    function GetTypeInfoCount( /* VT_PTR [26] [out] --> VT_UINT [23] */
        &$pctinfo)
    {
    } /* DISPID=1610678273 */
    function GetTypeInfo( /* VT_UINT [23] [in] */
        $itinfo, /* VT_UI4 [19] [in] */
        $lcid, /* VT_PTR [26] [out] --> VT_PTR [26] */
        &$pptinfo)
    {
    } /* DISPID=1610678274 */
    function GetIDsOfNames( /* VT_PTR [26] [in] --> ? [29] */
        &$riid, /* VT_PTR [26] [in] --> VT_PTR [26] */
        &$rgszNames, /* VT_UINT [23] [in] */
        $cNames, /* VT_UI4 [19] [in] */
        $lcid, /* VT_PTR [26] [out] --> VT_I4 [3] */
        &$rgdispid)
    {
    } /* DISPID=1610678275 */
    function Invoke( /* VT_I4 [3] [in] */
        $dispidMember, /* VT_PTR [26] [in] --> ? [29] */
        &$riid, /* VT_UI4 [19] [in] */
        $lcid, /* VT_UI2 [18] [in] */
        $wFlags, /* VT_PTR [26] [in] --> ? [29] */
        &$pdispparams, /* VT_PTR [26] [out] --> VT_VARIANT [12] */
        &$pvarResult, /* VT_PTR [26] [out] --> ? [29] */
        &$pexcepinfo, /* VT_PTR [26] [out] --> VT_UINT [23] */
        &$puArgErr)
    {
    } /* DISPID=1 */
    function Add()
    { /* method Add */
    } /* DISPID=2 */
    function SetCurrentLine( /* VT_I4 [3] */
        $LineNum)
    { /* method SetCurrentLine */
    } /* DISPID=3 */ /* VT_I4 [3] */ /* property Count */
    var $Count; /* DISPID=4 */ /* VT_PTR [26] */ /* property UserFields */
    var $UserFields; /* DISPID=5 */ /* VT_I4 [3] */ /* property LineNum */
    var $LineNum; /* DISPID=6 */ /* VT_I4 [3] */ /* property CreditCard */
    var $CreditCard; /* DISPID=6 */ /* property CreditCard */
    var $CreditCard; /* DISPID=7 */ /* VT_BSTR [8] */ /* property CreditAcct */
    var $CreditAcct; /* DISPID=7 */ /* property CreditAcct */
    var $CreditAcct; /* DISPID=8 */ /* VT_BSTR [8] */ /* property CreditCardNumber */
    var $CreditCardNumber; /* DISPID=8 */ /* property CreditCardNumber */
    var $CreditCardNumber; /* DISPID=9 */ /* VT_DATE [7] */ /* property CardValidUntil */
    var $CardValidUntil; /* DISPID=9 */ /* property CardValidUntil */
    var $CardValidUntil; /* DISPID=10 */ /* VT_BSTR [8] */ /* property VoucherNum */
    var $VoucherNum; /* DISPID=10 */ /* property VoucherNum */
    var $VoucherNum; /* DISPID=11 */ /* VT_BSTR [8] */ /* property OwnerIdNum */
    var $OwnerIdNum; /* DISPID=11 */ /* property OwnerIdNum */
    var $OwnerIdNum; /* DISPID=12 */ /* VT_BSTR [8] */ /* property OwnerPhone */
    var $OwnerPhone; /* DISPID=12 */ /* property OwnerPhone */
    var $OwnerPhone; /* DISPID=13 */ /* VT_I4 [3] */ /* property PaymentMethodCode */
    var $PaymentMethodCode; /* DISPID=13 */ /* property PaymentMethodCode */
    var $PaymentMethodCode; /* DISPID=14 */ /* VT_I4 [3] */ /* property NumOfPayments */
    var $NumOfPayments; /* DISPID=14 */ /* property NumOfPayments */
    var $NumOfPayments; /* DISPID=15 */ /* VT_DATE [7] */ /* property FirstPaymentDue */
    var $FirstPaymentDue; /* DISPID=15 */ /* property FirstPaymentDue */
    var $FirstPaymentDue; /* DISPID=16 */ /* VT_R8 [5] */ /* property FirstPaymentSum */
    var $FirstPaymentSum; /* DISPID=16 */ /* property FirstPaymentSum */
    var $FirstPaymentSum; /* DISPID=17 */ /* VT_R8 [5] */ /* property AdditionalPaymentSum */
    var $AdditionalPaymentSum; /* DISPID=17 */ /* property AdditionalPaymentSum */
    var $AdditionalPaymentSum; /* DISPID=18 */ /* VT_R8 [5] */ /* property CreditSum */
    var $CreditSum; /* DISPID=18 */ /* property CreditSum */
    var $CreditSum; /* DISPID=21 */ /* VT_BSTR [8] */ /* property ConfirmationNum */
    var $ConfirmationNum; /* DISPID=21 */ /* property ConfirmationNum */
    var $ConfirmationNum; /* DISPID=22 */ /* VT_I4 [3] */ /* property NumOfCreditPayments */
    var $NumOfCreditPayments; /* DISPID=22 */ /* property NumOfCreditPayments */
    var $NumOfCreditPayments; /* DISPID=23 */ /* ? [29] */ /* property CreditType */
    var $CreditType; /* DISPID=23 */ /* property CreditType */
    var $CreditType; /* DISPID=24 */ /* ? [29] */ /* property SplitPayments */
    var $SplitPayments; /* DISPID=24 */ /* property SplitPayments */
    var $SplitPayments;
}