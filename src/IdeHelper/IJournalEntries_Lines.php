<?php
/**
 * Created by PhpStorm.
 * User: H4
 * Date: 31/01/2018
 * Time: 23:24
 */

namespace Litiano\Sap\IdeHelper;



class IJournalEntries_Lines { /* GUID={55053980-777B-44CF-8D76-84DD975171AA} */
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
    /* property UserFields */
    var $UserFields;

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
    function Add(
    )
    {
        /* method Add */
    }
    /* DISPID=5 */
    /* VT_I4 [3] */
    /* property Line_ID */
    var $Line_ID;

    /* DISPID=6 */
    /* VT_BSTR [8] */
    /* property AccountCode */
    var $AccountCode;

    /* DISPID=6 */
    /* property AccountCode */
    var $AccountCode;

    /* DISPID=7 */
    /* VT_R8 [5] */
    /* property Debit */
    var $Debit;

    /* DISPID=7 */
    /* property Debit */
    var $Debit;

    /* DISPID=8 */
    /* VT_R8 [5] */
    /* property Credit */
    var $Credit;

    /* DISPID=8 */
    /* property Credit */
    var $Credit;

    /* DISPID=9 */
    /* VT_R8 [5] */
    /* property FCDebit */
    var $FCDebit;

    /* DISPID=9 */
    /* property FCDebit */
    var $FCDebit;

    /* DISPID=10 */
    /* VT_R8 [5] */
    /* property FCCredit */
    var $FCCredit;

    /* DISPID=10 */
    /* property FCCredit */
    var $FCCredit;

    /* DISPID=11 */
    /* VT_BSTR [8] */
    /* property FCCurrency */
    var $FCCurrency;

    /* DISPID=11 */
    /* property FCCurrency */
    var $FCCurrency;

    /* DISPID=12 */
    /* VT_DATE [7] */
    /* property DueDate */
    var $DueDate;

    /* DISPID=12 */
    /* property DueDate */
    var $DueDate;

    /* DISPID=13 */
    /* VT_BSTR [8] */
    /* property ShortName */
    var $ShortName;

    /* DISPID=13 */
    /* property ShortName */
    var $ShortName;

    /* DISPID=14 */
    /* VT_BSTR [8] */
    /* property ContraAccount */
    var $ContraAccount;

    /* DISPID=14 */
    /* property ContraAccount */
    var $ContraAccount;

    /* DISPID=15 */
    /* VT_BSTR [8] */
    /* property LineMemo */
    var $LineMemo;

    /* DISPID=15 */
    /* property LineMemo */
    var $LineMemo;

    /* DISPID=16 */
    /* VT_DATE [7] */
    /* property ReferenceDate1 */
    var $ReferenceDate1;

    /* DISPID=16 */
    /* property ReferenceDate1 */
    var $ReferenceDate1;

    /* DISPID=17 */
    /* VT_DATE [7] */
    /* property ReferenceDate2 */
    var $ReferenceDate2;

    /* DISPID=17 */
    /* property ReferenceDate2 */
    var $ReferenceDate2;

    /* DISPID=18 */
    /* VT_BSTR [8] */
    /* property Reference1 */
    var $Reference1;

    /* DISPID=18 */
    /* property Reference1 */
    var $Reference1;

    /* DISPID=19 */
    /* VT_BSTR [8] */
    /* property Reference2 */
    var $Reference2;

    /* DISPID=19 */
    /* property Reference2 */
    var $Reference2;

    /* DISPID=20 */
    /* VT_BSTR [8] */
    /* property ProjectCode */
    var $ProjectCode;

    /* DISPID=20 */
    /* property ProjectCode */
    var $ProjectCode;

    /* DISPID=22 */
    /* VT_BSTR [8] */
    /* property CostingCode */
    var $CostingCode;

    /* DISPID=22 */
    /* property CostingCode */
    var $CostingCode;

    /* DISPID=23 */
    /* VT_DATE [7] */
    /* property TaxDate */
    var $TaxDate;

    /* DISPID=23 */
    /* property TaxDate */
    var $TaxDate;

    /* DISPID=24 */
    /* VT_R8 [5] */
    /* property BaseSum */
    var $BaseSum;

    /* DISPID=24 */
    /* property BaseSum */
    var $BaseSum;

    /* DISPID=25 */
    /* VT_BSTR [8] */
    /* property TaxGroup */
    var $TaxGroup;

    /* DISPID=25 */
    /* property TaxGroup */
    var $TaxGroup;

    /* DISPID=26 */
    /* VT_R8 [5] */
    /* property DebitSys */
    var $DebitSys;

    /* DISPID=27 */
    /* VT_R8 [5] */
    /* property CreditSys */
    var $CreditSys;

    /* DISPID=28 */
    /* VT_DATE [7] */
    /* property VatDate */
    var $VatDate;

    /* DISPID=28 */
    /* property VatDate */
    var $VatDate;

    /* DISPID=29 */
    /* ? [29] */
    /* property VatLine */
    var $VatLine;

    /* DISPID=29 */
    /* property VatLine */
    var $VatLine;

    /* DISPID=30 */
    /* VT_R8 [5] */
    /* property SystemBaseAmount */
    var $SystemBaseAmount;

    /* DISPID=30 */
    /* property SystemBaseAmount */
    var $SystemBaseAmount;

    /* DISPID=31 */
    /* VT_R8 [5] */
    /* property VatAmount */
    var $VatAmount;

    /* DISPID=32 */
    /* VT_R8 [5] */
    /* property SystemVatAmount */
    var $SystemVatAmount;

    /* DISPID=33 */
    /* VT_R8 [5] */
    /* property Gross Value */
    var $GrossValue;

    /* DISPID=34 */
    /* VT_BSTR [8] */
    /* property AdditionalReference */
    var $AdditionalReference;

    /* DISPID=34 */
    /* property AdditionalReference */
    var $AdditionalReference;

    /* DISPID=35 */
    /* VT_I4 [3] */
    /* property CheckAbs */
    var $CheckAbs;

    /* DISPID=33 */
    /* property Gross Value */
    var $GrossValue;

    /* DISPID=32 */
    /* property SystemVatAmount */
    var $SystemVatAmount;

    /* DISPID=31 */
    /* property VatAmount */
    var $VatAmount;

    /* DISPID=26 */
    /* property DebitSys */
    var $DebitSys;

    /* DISPID=27 */
    /* property CreditSys */
    var $CreditSys;

    /* DISPID=36 */
    /* VT_BSTR [8] */
    /* property CostingCode2 */
    var $CostingCode2;

    /* DISPID=36 */
    /* property CostingCode2 */
    var $CostingCode2;

    /* DISPID=37 */
    /* VT_BSTR [8] */
    /* property CostingCode3 */
    var $CostingCode3;

    /* DISPID=37 */
    /* property CostingCode3 */
    var $CostingCode3;

    /* DISPID=38 */
    /* VT_BSTR [8] */
    /* property CostingCode4 */
    var $CostingCode4;

    /* DISPID=38 */
    /* property CostingCode4 */
    var $CostingCode4;

    /* DISPID=39 */
    /* VT_BSTR [8] */
    /* property TaxCode */
    var $TaxCode;

    /* DISPID=39 */
    /* property TaxCode */
    var $TaxCode;

    /* DISPID=40 */
    /* ? [29] */
    /* property TaxPostAccount */
    var $TaxPostAccount;

    /* DISPID=40 */
    /* property TaxPostAccount */
    var $TaxPostAccount;

    /* DISPID=41 */
    /* VT_I4 [3] */
    /* property LocationCode */
    var $LocationCode;

    /* DISPID=41 */
    /* property LocationCode */
    var $LocationCode;

    /* DISPID=42 */
    /* VT_BSTR [8] */
    /* property CostingCode5 */
    var $CostingCode5;

    /* DISPID=42 */
    /* property CostingCode5 */
    var $CostingCode5;

    /* DISPID=43 */
    /* VT_R8 [5] */
    /* property EqualizationTaxAmount */
    var $EqualizationTaxAmount;

    /* DISPID=44 */
    /* VT_R8 [5] */
    /* property SystemEqualizationTaxAmount */
    var $SystemEqualizationTaxAmount;

    /* DISPID=45 */
    /* VT_R8 [5] */
    /* property TotalTax */
    var $TotalTax;

    /* DISPID=46 */
    /* VT_R8 [5] */
    /* property SystemTotalTax */
    var $SystemTotalTax;

    /* DISPID=47 */
    /* ? [29] */
    /* property WTLiable */
    var $WTLiable;

    /* DISPID=47 */
    /* property WTLiable */
    var $WTLiable;

    /* DISPID=48 */
    /* ? [29] */
    /* property WTRow */
    var $WTRow;

    /* DISPID=48 */
    /* property WTRow */
    var $WTRow;

    /* DISPID=49 */
    /* VT_BSTR [8] */
    /* property ControlAccount */
    var $ControlAccount;

    /* DISPID=49 */
    /* property ControlAccount */
    var $ControlAccount;

    /* DISPID=50 */
    /* ? [29] */
    /* property PaymentBlock */
    var $PaymentBlock;

    /* DISPID=50 */
    /* property PaymentBlock */
    var $PaymentBlock;

    /* DISPID=51 */
    /* VT_I4 [3] */
    /* property BlockReason */
    var $BlockReason;

    /* DISPID=51 */
    /* property BlockReason */
    var $BlockReason;

    /* DISPID=52 */
    /* VT_BSTR [8] */
    /* property FederalTaxID */
    var $FederalTaxID;

    /* DISPID=52 */
    /* property FederalTaxID */
    var $FederalTaxID;

    /* DISPID=53 */
    /* VT_PTR [26] */
    /* property PrimaryFormItems */
    var $PrimaryFormItems;

    /* DISPID=61 */
    /* VT_I4 [3] */
    /* property BPLID */
    var $BPLID;

    /* DISPID=61 */
    /* property BPLID */
    var $BPLID;

    /* DISPID=62 */
    /* VT_BSTR [8] */
    /* property BPLName */
    var $BPLName;

    /* DISPID=63 */
    /* VT_BSTR [8] */
    /* property VATRegNum */
    var $VATRegNum;

    /* DISPID=54 */
    /* ? [29] */
    /* property PaymentOrdered */
    var $PaymentOrdered;

    /* DISPID=64 */
    /* VT_I4 [3] */
    /* property ExposedTransNumber */
    var $ExposedTransNumber;

    /* DISPID=64 */
    /* property ExposedTransNumber */
    var $ExposedTransNumber;

    /* DISPID=65 */
    /* VT_I4 [3] */
    /* property DocumentArray */
    var $DocumentArray;

    /* DISPID=66 */
    /* VT_I4 [3] */
    /* property DocumentLine */
    var $DocumentLine;

}
