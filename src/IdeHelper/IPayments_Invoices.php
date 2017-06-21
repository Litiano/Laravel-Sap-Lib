<?php
/**
 * Created by PhpStorm.
 * User: Litiano
 * Date: 21/06/2017
 * Time: 09:35
 */

namespace Litiano\Sap\IdeHelper;


class IPayments_Invoices
{
    /* GUID={AB7947CF-8191-498D-8B3C-8E04A00957E7} */ /* DISPID=1610612736 */
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
    var $LineNum; /* DISPID=6 */ /* VT_I4 [3] */ /* property DocEntry */
    var $DocEntry; /* DISPID=6 */ /* property DocEntry */
    var $DocEntry; /* DISPID=7 */ /* VT_R8 [5] */ /* property SumApplied */
    var $SumApplied; /* DISPID=7 */ /* property SumApplied */
    var $SumApplied; /* DISPID=8 */ /* VT_R8 [5] */ /* property AppliedFC */
    var $AppliedFC; /* DISPID=8 */ /* property AppliedFC */
    var $AppliedFC; /* DISPID=11 */ /* VT_I4 [3] */ /* property DocLine */
    var $DocLine; /* DISPID=11 */ /* property DocLine */
    var $DocLine; /* DISPID=12 */ /* ? [29] */ /* property InvoiceType */
    var $InvoiceType; /* DISPID=12 */ /* property InvoiceType */
    var $InvoiceType; /* DISPID=13 */ /* VT_R8 [5] */ /* property DiscountPercent */
    var $DiscountPercent; /* DISPID=13 */ /* property DiscountPercent */
    var $DiscountPercent; /* DISPID=14 */ /* VT_R8 [5] */ /* property PaidSum */
    var $PaidSum; /* DISPID=15 */ /* VT_I4 [3] */ /* property InstallmentId */
    var $InstallmentId; /* DISPID=15 */ /* property InstallmentId */
    var $InstallmentId; /* DISPID=16 */ /* VT_R8 [5] */ /* property WitholdingTaxApplied */
    var $WitholdingTaxApplied; /* DISPID=17 */ /* VT_R8 [5] */ /* property WitholdingTaxAppliedFC */
    var $WitholdingTaxAppliedFC; /* DISPID=18 */ /* VT_R8 [5] */ /* property WitholdingTaxAppliedSC */
    var $WitholdingTaxAppliedSC; /* DISPID=19 */ /* VT_DATE [7] */ /* property LinkDate */
    var $LinkDate; /* DISPID=20 */ /* VT_BSTR [8] */ /* property DistributionRule */
    var $DistributionRule; /* DISPID=20 */ /* property DistributionRule */
    var $DistributionRule; /* DISPID=21 */ /* VT_BSTR [8] */ /* property DistributionRule2 */
    var $DistributionRule2; /* DISPID=21 */ /* property DistributionRule2 */
    var $DistributionRule2; /* DISPID=22 */ /* VT_BSTR [8] */ /* property DistributionRule3 */
    var $DistributionRule3; /* DISPID=22 */ /* property DistributionRule3 */
    var $DistributionRule3; /* DISPID=23 */ /* VT_BSTR [8] */ /* property DistributionRule4 */
    var $DistributionRule4; /* DISPID=23 */ /* property DistributionRule4 */
    var $DistributionRule4; /* DISPID=24 */ /* VT_BSTR [8] */ /* property DistributionRule5 */
    var $DistributionRule5; /* DISPID=24 */ /* property DistributionRule5 */
    var $DistributionRule5; /* DISPID=25 */ /* VT_R8 [5] */ /* property TotalDiscount */
    var $TotalDiscount; /* DISPID=25 */ /* property TotalDiscount */
    var $TotalDiscount; /* DISPID=26 */ /* VT_R8 [5] */ /* property TotalDiscountFC */
    var $TotalDiscountFC; /* DISPID=26 */ /* property TotalDiscountFC */
    var $TotalDiscountFC; /* DISPID=27 */ /* VT_R8 [5] */ /* property TotalDiscountSC */
    var $TotalDiscountSC;
}