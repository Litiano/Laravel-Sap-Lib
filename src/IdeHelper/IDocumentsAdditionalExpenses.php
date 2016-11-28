<?php
/**
 * Created by PhpStorm.
 * User: E-Commerce 2
 * Date: 25/11/2016
 * Time: 16:02
 */

namespace Litiano\Sap\IdeHelper;


class IDocumentsAdditionalExpenses { /* GUID={FF458A30-213D-4BAC-BA26-F06E1F4A7E4E} */
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
    /* property Count */
    var $Count;

    /* DISPID=2 */
    function SetCurrentLine(
        /* VT_I4 [3]  */ $LineNum
    )
    {
        /* method SetCurrentLine */
    }
    /* DISPID=3 */
    function Add(
    )
    {
        /* method Add */
    }
    /* DISPID=4 */
    /* VT_I4 [3] */
    /* property ExpenseCode */
    var $ExpenseCode;

    /* DISPID=4 */
    /* property ExpenseCode */
    var $ExpenseCode;

    /* DISPID=5 */
    /* VT_R8 [5] */
    /* property LineTotal */
    var $LineTotal;

    /* DISPID=5 */
    /* property LineTotal */
    var $LineTotal;

    /* DISPID=6 */
    /* VT_R8 [5] */
    /* property LineTotalFC */
    var $LineTotalFC;

    /* DISPID=7 */
    /* VT_R8 [5] */
    /* property LineTotalSys */
    var $LineTotalSys;

    /* DISPID=8 */
    /* VT_R8 [5] */
    /* property PaidToDate */
    var $PaidToDate;

    /* DISPID=9 */
    /* VT_R8 [5] */
    /* property PaidToDateFC */
    var $PaidToDateFC;

    /* DISPID=10 */
    /* VT_R8 [5] */
    /* property PaidToDateSys */
    var $PaidToDateSys;

    /* DISPID=11 */
    /* VT_BSTR [8] */
    /* property Remarks */
    var $Remarks;

    /* DISPID=11 */
    /* property Remarks */
    var $Remarks;

    /* DISPID=12 */
    /* ? [29] */
    /* property DistributionMethod */
    var $DistributionMethod;

    /* DISPID=12 */
    /* property DistributionMethod */
    var $DistributionMethod;

    /* DISPID=13 */
    /* ? [29] */
    /* property TaxLiable */
    var $TaxLiable;

    /* DISPID=14 */
    /* VT_BSTR [8] */
    /* property VatGroup */
    var $VatGroup;

    /* DISPID=14 */
    /* property VatGroup */
    var $VatGroup;

    /* DISPID=15 */
    /* VT_R8 [5] */
    /* property TaxPercent */
    var $TaxPercent;

    /* DISPID=16 */
    /* VT_R8 [5] */
    /* property TaxSum */
    var $TaxSum;

    /* DISPID=17 */
    /* VT_R8 [5] */
    /* property TaxSumFC */
    var $TaxSumFC;

    /* DISPID=18 */
    /* VT_R8 [5] */
    /* property TaxSumSys */
    var $TaxSumSys;

    /* DISPID=19 */
    /* VT_R8 [5] */
    /* property DeductibleTaxSum */
    var $DeductibleTaxSum;

    /* DISPID=19 */
    /* property DeductibleTaxSum */
    var $DeductibleTaxSum;

    /* DISPID=20 */
    /* VT_R8 [5] */
    /* property DeductibleTaxSumFC */
    var $DeductibleTaxSumFC;

    /* DISPID=21 */
    /* VT_R8 [5] */
    /* property DeductibleTaxSumSys */
    var $DeductibleTaxSumSys;

    /* DISPID=22 */
    /* ? [29] */
    /* property AquisitionTax */
    var $AquisitionTax;

    /* DISPID=23 */
    /* VT_BSTR [8] */
    /* property TaxCode */
    var $TaxCode;

    /* DISPID=23 */
    /* property TaxCode */
    var $TaxCode;

    /* DISPID=24 */
    /* ? [29] */
    /* property TaxType */
    var $TaxType;

    /* DISPID=25 */
    /* VT_R8 [5] */
    /* property TaxPaid */
    var $TaxPaid;

    /* DISPID=26 */
    /* VT_R8 [5] */
    /* property TaxPaidFC */
    var $TaxPaidFC;

    /* DISPID=27 */
    /* VT_R8 [5] */
    /* property TaxPaidSys */
    var $TaxPaidSys;

    /* DISPID=28 */
    /* VT_R8 [5] */
    /* property EqualizationTaxPercent */
    var $EqualizationTaxPercent;

    /* DISPID=29 */
    /* VT_R8 [5] */
    /* property EqualizationTaxSum */
    var $EqualizationTaxSum;

    /* DISPID=30 */
    /* VT_R8 [5] */
    /* property EqualizationTaxFC */
    var $EqualizationTaxFC;

    /* DISPID=31 */
    /* VT_R8 [5] */
    /* property EqualizationTaxSys */
    var $EqualizationTaxSys;

    /* DISPID=32 */
    /* VT_R8 [5] */
    /* property TaxTotalSum */
    var $TaxTotalSum;

    /* DISPID=33 */
    /* VT_R8 [5] */
    /* property TaxTotalSumFC */
    var $TaxTotalSumFC;

    /* DISPID=34 */
    /* VT_R8 [5] */
    /* property TaxTotalSumSys */
    var $TaxTotalSumSys;

    /* DISPID=35 */
    /* VT_PTR [26] */
    /* property UserFields */
    var $UserFields;

    /* DISPID=36 */
    /* VT_I4 [3] */
    /* property BaseDocEntry */
    var $BaseDocEntry;

    /* DISPID=36 */
    /* property BaseDocEntry */
    var $BaseDocEntry;

    /* DISPID=37 */
    /* VT_I4 [3] */
    /* property BaseDocLine */
    var $BaseDocLine;

    /* DISPID=37 */
    /* property BaseDocLine */
    var $BaseDocLine;

    /* DISPID=38 */
    /* VT_I4 [3] */
    /* property BaseDocType */
    var $BaseDocType;

    /* DISPID=38 */
    /* property BaseDocType */
    var $BaseDocType;

    /* DISPID=41 */
    /* VT_I4 [3] */
    /* property BaseDocumentReference */
    var $BaseDocumentReference;

    /* DISPID=42 */
    /* VT_I4 [3] */
    /* property LineNum */
    var $LineNum;

    /* DISPID=43 */
    /* ? [29] */
    /* property LastPurchasePrice */
    var $LastPurchasePrice;

    /* DISPID=43 */
    /* property LastPurchasePrice */
    var $LastPurchasePrice;

    /* DISPID=44 */
    /* ? [29] */
    /* property Status */
    var $Status;

    /* DISPID=45 */
    /* ? [29] */
    /* property Stock */
    var $Stock;

    /* DISPID=45 */
    /* property Stock */
    var $Stock;

    /* DISPID=46 */
    /* VT_I4 [3] */
    /* property TargetAbsEntry */
    var $TargetAbsEntry;

    /* DISPID=47 */
    /* VT_I4 [3] */
    /* property TargetType */
    var $TargetType;

    /* DISPID=48 */
    /* ? [29] */
    /* property WTLiable */
    var $WTLiable;

    /* DISPID=48 */
    /* property WTLiable */
    var $WTLiable;

    /* DISPID=49 */
    /* VT_BSTR [8] */
    /* property DistributionRule */
    var $DistributionRule;

    /* DISPID=49 */
    /* property DistributionRule */
    var $DistributionRule;

    /* DISPID=61 */
    /* VT_PTR [26] */
    /* property TaxJurisdictions */
    var $TaxJurisdictions;

    /* DISPID=62 */
    /* VT_BSTR [8] */
    /* property Project */
    var $Project;

    /* DISPID=62 */
    /* property Project */
    var $Project;

    /* DISPID=63 */
    /* VT_BSTR [8] */
    /* property DistributionRule2 */
    var $DistributionRule2;

    /* DISPID=63 */
    /* property DistributionRule2 */
    var $DistributionRule2;

    /* DISPID=64 */
    /* VT_BSTR [8] */
    /* property DistributionRule3 */
    var $DistributionRule3;

    /* DISPID=64 */
    /* property DistributionRule3 */
    var $DistributionRule3;

    /* DISPID=65 */
    /* VT_BSTR [8] */
    /* property DistributionRule4 */
    var $DistributionRule4;

    /* DISPID=65 */
    /* property DistributionRule4 */
    var $DistributionRule4;

    /* DISPID=66 */
    /* VT_BSTR [8] */
    /* property DistributionRule5 */
    var $DistributionRule5;

    /* DISPID=66 */
    /* property DistributionRule5 */
    var $DistributionRule5;

    /* DISPID=16 */
    /* property TaxSum */
    var $TaxSum;

}
