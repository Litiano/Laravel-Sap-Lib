<?php

/**
 * Created by PhpStorm.
 * User: E-Commerce 2
 * Date: 25/11/2016
 * Time: 16:00
 */
namespace Litiano\Sap\IdeHelper;

class IDocuments { /* GUID={A6DA575B-E105-4585-9F4B-50CC4044EEDD} */
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
    /**
     * @var $Lines IDocument_Lines
     */
    var $Lines;

    /* DISPID=3 */
    /* VT_I4 [3] */
    /* Doc num */
    var $DocNum;

    /* DISPID=3 */
    /* Doc num */
    var $DocNum;

    /* DISPID=4 */
    /* ? [29] */
    /* Doc type */
    var $DocType;

    /* DISPID=4 */
    /* Doc type */
    var $DocType;

    /* DISPID=5 */
    /* ? [29] */
    /* Hand Written */
    var $HandWritten;

    /* DISPID=5 */
    /* Hand Written */
    var $HandWritten;

    /* DISPID=6 */
    /* ? [29] */
    /* Printed */
    var $Printed;

    /* DISPID=7 */
    /* VT_DATE [7] */
    /* Doc date */
    var $DocDate;

    /* DISPID=7 */
    /* Doc date */
    var $DocDate;

    /* DISPID=8 */
    /* VT_DATE [7] */
    /* Doc due date */
    var $DocDueDate;

    /* DISPID=8 */
    /* Doc due date */
    var $DocDueDate;

    /* DISPID=9 */
    /* VT_BSTR [8] */
    /* Card code */
    var $CardCode;

    /* DISPID=9 */
    /* Card code */
    var $CardCode;

    /* DISPID=10 */
    /* VT_BSTR [8] */
    /* Card name */
    var $CardName;

    /* DISPID=10 */
    /* Card name */
    var $CardName;

    /* DISPID=11 */
    /* VT_BSTR [8] */
    /* Address */
    var $Address;

    /* DISPID=11 */
    /* Address */
    var $Address;

    /* DISPID=12 */
    /* VT_BSTR [8] */
    /* Num at card */
    var $NumAtCard;

    /* DISPID=12 */
    /* Num at card */
    var $NumAtCard;

    /* DISPID=13 */
    /* VT_BSTR [8] */
    /* Doc currency */
    var $DocCurrency;

    /* DISPID=13 */
    /* Doc currency */
    var $DocCurrency;

    /* DISPID=14 */
    /* VT_R8 [5] */
    /* Doc rate */
    var $DocRate;

    /* DISPID=14 */
    /* Doc rate */
    var $DocRate;

    /* DISPID=15 */
    /* VT_R8 [5] */
    /* Doc total */
    var $DocTotal;

    /* DISPID=15 */
    /* Doc total */
    var $DocTotal;

    /* DISPID=16 */
    /* VT_BSTR [8] */
    /* Referance 1 */
    var $Reference1;

    /* DISPID=16 */
    /* Referance 1 */
    var $Reference1;

    /* DISPID=17 */
    /* VT_BSTR [8] */
    /* Referance 2 */
    var $Reference2;

    /* DISPID=17 */
    /* Referance 2 */
    var $Reference2;

    /* DISPID=18 */
    /* VT_BSTR [8] */
    /* Comments */
    var $Comments;

    /* DISPID=18 */
    /* Comments */
    var $Comments;

    /* DISPID=19 */
    /* VT_BSTR [8] */
    /* Jurnal memo */
    var $JournalMemo;

    /* DISPID=19 */
    /* Jurnal memo */
    var $JournalMemo;

    /* DISPID=20 */
    /* VT_I4 [3] */
    /* Payment group code */
    var $PaymentGroupCode;

    /* DISPID=20 */
    /* Payment group code */
    var $PaymentGroupCode;

    /* DISPID=21 */
    /* VT_DATE [7] */
    /* Doc time */
    var $DocTime;

    /* DISPID=21 */
    /* Doc time */
    var $DocTime;

    /* DISPID=22 */
    /* VT_I4 [3] */
    /* Sales person code */
    var $SalesPersonCode;

    /* DISPID=22 */
    /* Sales person code */
    var $SalesPersonCode;

    /* DISPID=23 */
    /* VT_I4 [3] */
    /* Transportation code */
    var $TransportationCode;

    /* DISPID=23 */
    /* Transportation code */
    var $TransportationCode;

    /* DISPID=25 */
    /* ? [29] */
    /* Confirmed */
    var $Confirmed;

    /* DISPID=25 */
    /* Confirmed */
    var $Confirmed;

    /* DISPID=26 */
    /* VT_I4 [3] */
    /* Import file num */
    var $ImportFileNum;

    /* DISPID=27 */
    /* ? [29] */
    /* Summery type */
    var $SummeryType;

    /* DISPID=27 */
    /* Summery type */
    var $SummeryType;

    /* DISPID=28 */
    /* VT_I4 [3] */
    /* Contact person code */
    var $ContactPersonCode;

    /* DISPID=28 */
    /* Contact person code */
    var $ContactPersonCode;

    /* DISPID=29 */
    /* ? [29] */
    /* Show scn */
    var $ShowSCN;

    /* DISPID=29 */
    /* Show scn */
    var $ShowSCN;

    /* DISPID=30 */
    /* VT_I4 [3] */
    /* Series */
    var $Series;

    /* DISPID=30 */
    /* Series */
    var $Series;

    /* DISPID=31 */
    /* VT_DATE [7] */
    /* Tax date */
    var $TaxDate;

    /* DISPID=31 */
    /* Tax date */
    var $TaxDate;

    /* DISPID=32 */
    /* ? [29] */
    /* Partial supply */
    var $PartialSupply;

    /* DISPID=32 */
    /* Partial supply */
    var $PartialSupply;

    /* DISPID=35 */
    /* VT_BOOL [11] */
    function GetByKey(
        /* VT_I4 [3]  */ $AbsEntry
    )
    {
        /* Get by key */
    }
    /* DISPID=37 */
    /* VT_PTR [26] */
    /* Invoke the user fields object */
    var $UserFields;

    /* DISPID=38 */
    function SaveXML(
        /* VT_PTR [26] [in][out] --> VT_BSTR [8]  */ &$FileName
    )
    {
        /* Save object as XML document */
    }
    /* DISPID=39 */
    /* VT_I4 [3] */
    function Update(
    )
    {
        /* method Update */
    }
    /* DISPID=40 */
    /* ? [29] */
    /* property DocObjectCode */
    var $DocObjectCode;

    /* DISPID=40 */
    /* property DocObjectCode */
    var $DocObjectCode;

    /* DISPID=41 */
    /* VT_BSTR [8] */
    /* property ShipToCode */
    var $ShipToCode;

    /* DISPID=41 */
    /* property ShipToCode */
    var $ShipToCode;

    /* DISPID=42 */
    /* VT_BSTR [8] */
    /* property Indicator */
    var $Indicator;

    /* DISPID=42 */
    /* property Indicator */
    var $Indicator;

    /* DISPID=43 */
    /* VT_BSTR [8] */
    /* property FederalTaxID */
    var $FederalTaxID;

    /* DISPID=43 */
    /* property FederalTaxID */
    var $FederalTaxID;

    /* DISPID=44 */
    /* VT_I4 [3] */
    function Cancel(
    )
    {
        /* method Cancel */
    }
    /* DISPID=45 */
    /* VT_I4 [3] */
    function Close(
    )
    {
        /* method Close */
    }
    /* DISPID=46 */
    /* VT_I4 [3] */
    function Remove(
    )
    {
        /* method Remove */
    }
    /* DISPID=48 */
    /* VT_PTR [26] */
    /* User fields for this object. */
    var $Browser;

    /* DISPID=49 */
    /* VT_R8 [5] */
    /* property DiscountPercent */
    var $DiscountPercent;

    /* DISPID=49 */
    /* property DiscountPercent */
    var $DiscountPercent;

    /* DISPID=50 */
    /* VT_BSTR [8] */
    /* property PaymentReference */
    var $PaymentReference;

    /* DISPID=51 */
    /* VT_I4 [3] */
    /* property DocEntry */
    var $DocEntry;

    /* DISPID=52 */
    /* VT_DATE [7] */
    /* property CreationDate */
    var $CreationDate;

    /* DISPID=53 */
    /* VT_DATE [7] */
    /* property UpdateDate */
    var $UpdateDate;

    /* DISPID=54 */
    /* VT_I4 [3] */
    /* property FinancialPeriod */
    var $FinancialPeriod;

    /* DISPID=55 */
    /* VT_I4 [3] */
    /* property TransNum */
    var $TransNum;

    /* DISPID=56 */
    /* VT_R8 [5] */
    /* property VatSum */
    var $VatSum;

    /* DISPID=57 */
    /* VT_R8 [5] */
    /* property VatSumSys */
    var $VatSumSys;

    /* DISPID=58 */
    /* VT_R8 [5] */
    /* property VatSumFc */
    var $VatSumFc;

    /* DISPID=59 */
    /* ? [29] */
    /* property NetProcedure */
    var $NetProcedure;

    /* DISPID=60 */
    /* VT_R8 [5] */
    /* property DocTotalFc */
    var $DocTotalFc;

    /* DISPID=61 */
    /* VT_R8 [5] */
    /* property DocTotalSys */
    var $DocTotalSys;

    /* DISPID=62 */
    /* VT_I4 [3] */
    /* property Form1099 */
    var $Form1099;

    /* DISPID=62 */
    /* property Form1099 */
    var $Form1099;

    /* DISPID=63 */
    /* VT_BSTR [8] */
    /* property Box1099 */
    var $Box1099;

    /* DISPID=63 */
    /* property Box1099 */
    var $Box1099;

    /* DISPID=64 */
    /* ? [29] */
    /* property RevisionPo */
    var $RevisionPo;

    /* DISPID=64 */
    /* property RevisionPo */
    var $RevisionPo;

    /* DISPID=65 */
    /* VT_DATE [7] */
    /* property RequriedDate */
    var $RequriedDate;

    /* DISPID=65 */
    /* property RequriedDate */
    var $RequriedDate;

    /* DISPID=66 */
    /* VT_DATE [7] */
    /* property CancelDate */
    var $CancelDate;

    /* DISPID=66 */
    /* property CancelDate */
    var $CancelDate;

    /* DISPID=67 */
    /* ? [29] */
    /* property BlockDunning */
    var $BlockDunning;

    /* DISPID=67 */
    /* property BlockDunning */
    var $BlockDunning;

    /* DISPID=68 */
    /* ? [29] */
    /* property Submitted */
    var $Submitted;

    /* DISPID=69 */
    /* VT_I4 [3] */
    /* property Segment */
    var $Segment;

    /* DISPID=70 */
    /* ? [29] */
    /* property PickStatus */
    var $PickStatus;

    /* DISPID=71 */
    /* ? [29] */
    /* property Pick */
    var $Pick;

    /* DISPID=72 */
    /* VT_BSTR [8] */
    /* property PaymentMethod */
    var $PaymentMethod;

    /* DISPID=72 */
    /* property PaymentMethod */
    var $PaymentMethod;

    /* DISPID=73 */
    /* ? [29] */
    /* property PaymentBlock */
    var $PaymentBlock;

    /* DISPID=73 */
    /* property PaymentBlock */
    var $PaymentBlock;

    /* DISPID=74 */
    /* VT_I4 [3] */
    /* property PaymentBlockEntry */
    var $PaymentBlockEntry;

    /* DISPID=74 */
    /* property PaymentBlockEntry */
    var $PaymentBlockEntry;

    /* DISPID=75 */
    /* VT_BSTR [8] */
    /* property CentralBankIndicator */
    var $CentralBankIndicator;

    /* DISPID=75 */
    /* property CentralBankIndicator */
    var $CentralBankIndicator;

    /* DISPID=76 */
    /* ? [29] */
    /* property MaximumCashDiscount */
    var $MaximumCashDiscount;

    /* DISPID=76 */
    /* property MaximumCashDiscount */
    var $MaximumCashDiscount;

    /* DISPID=77 */
    /* ? [29] */
    /* property Reserve */
    var $Reserve;

    /* DISPID=78 */
    /* VT_BSTR [8] */
    /* property Project */
    var $Project;

    /* DISPID=78 */
    /* property Project */
    var $Project;

    /* DISPID=80 */
    /* VT_DATE [7] */
    /* property ExemptionValidityDateFrom */
    var $ExemptionValidityDateFrom;

    /* DISPID=80 */
    /* property ExemptionValidityDateFrom */
    var $ExemptionValidityDateFrom;

    /* DISPID=81 */
    /* VT_DATE [7] */
    /* property ExemptionValidityDateTo */
    var $ExemptionValidityDateTo;

    /* DISPID=81 */
    /* property ExemptionValidityDateTo */
    var $ExemptionValidityDateTo;

    /* DISPID=82 */
    /* ? [29] */
    /* property WareHouseUpdateType */
    var $WareHouseUpdateType;

    /* DISPID=82 */
    /* property WareHouseUpdateType */
    var $WareHouseUpdateType;

    /* DISPID=83 */
    /* VT_PTR [26] */
    /* property Expenses */
    /**
     * @var $Expenses IDocumentsAdditionalExpenses
     */
    var $Expenses;

    /* DISPID=84 */
    /* ? [29] */
    /* property Rounding */
    var $Rounding;

    /* DISPID=84 */
    /* property Rounding */
    var $Rounding;

    /* DISPID=89 */
    /* VT_BSTR [8] */
    /* property ExternalCorrectedDocNum */
    var $ExternalCorrectedDocNum;

    /* DISPID=89 */
    /* property ExternalCorrectedDocNum */
    var $ExternalCorrectedDocNum;

    /* DISPID=90 */
    /* VT_I4 [3] */
    /* property InternalCorrectedDocNum */
    var $InternalCorrectedDocNum;

    /* DISPID=90 */
    /* property InternalCorrectedDocNum */
    var $InternalCorrectedDocNum;

    /* DISPID=91 */
    /* VT_I4 [3] */
    /* property NextCorrectingDocument */
    var $NextCorrectingDocument;

    /* DISPID=92 */
    /* ? [29] */
    /* property DeferredTax */
    var $DeferredTax;

    /* DISPID=92 */
    /* property DeferredTax */
    var $DeferredTax;

    /* DISPID=93 */
    /* VT_BSTR [8] */
    /* property TaxExemptionLetterNum */
    var $TaxExemptionLetterNum;

    /* DISPID=93 */
    /* property TaxExemptionLetterNum */
    var $TaxExemptionLetterNum;

    /* DISPID=94 */
    /* VT_R8 [5] */
    /* property WTApplied */
    var $WTApplied;

    /* DISPID=95 */
    /* VT_R8 [5] */
    /* property WTAppliedFC */
    var $WTAppliedFC;

    /* DISPID=96 */
    /* ? [29] */
    /* property BillOfExchangeReserved */
    var $BillOfExchangeReserved;

    /* DISPID=97 */
    /* VT_BSTR [8] */
    /* property AgentCode */
    var $AgentCode;

    /* DISPID=97 */
    /* property AgentCode */
    var $AgentCode;

    /* DISPID=98 */
    /* VT_R8 [5] */
    /* property WTAppliedSC */
    var $WTAppliedSC;

    /* DISPID=99 */
    /* VT_R8 [5] */
    /* property TotalEqualizationTax */
    var $TotalEqualizationTax;

    /* DISPID=100 */
    /* VT_R8 [5] */
    /* property TotalEqualizationTaxFC */
    var $TotalEqualizationTaxFC;

    /* DISPID=101 */
    /* VT_R8 [5] */
    /* property TotalEqualizationTaxSC */
    var $TotalEqualizationTaxSC;

    /* DISPID=102 */
    /* VT_I4 [3] */
    /* property NumberOfInstallments */
    var $NumberOfInstallments;

    /* DISPID=102 */
    /* property NumberOfInstallments */
    var $NumberOfInstallments;

    /* DISPID=103 */
    /* ? [29] */
    /* property ApplyTaxOnFirstInstallment */
    var $ApplyTaxOnFirstInstallment;

    /* DISPID=103 */
    /* property ApplyTaxOnFirstInstallment */
    var $ApplyTaxOnFirstInstallment;

    /* DISPID=104 */
    /* VT_R8 [5] */
    /* property WTNonSubjectAmount */
    var $WTNonSubjectAmount;

    /* DISPID=105 */
    /* VT_R8 [5] */
    /* property WTNonSubjectAmountSC */
    var $WTNonSubjectAmountSC;

    /* DISPID=106 */
    /* VT_R8 [5] */
    /* property WTNonSubjectAmountFC */
    var $WTNonSubjectAmountFC;

    /* DISPID=107 */
    /* VT_R8 [5] */
    /* property WTExemptedAmount */
    var $WTExemptedAmount;

    /* DISPID=108 */
    /* VT_R8 [5] */
    /* property WTExemptedAmountSC */
    var $WTExemptedAmountSC;

    /* DISPID=109 */
    /* VT_R8 [5] */
    /* property WTExemptedAmountFC */
    var $WTExemptedAmountFC;

    /* DISPID=110 */
    /* VT_R8 [5] */
    /* property BaseAmountSC */
    var $BaseAmountSC;

    /* DISPID=111 */
    /* VT_R8 [5] */
    /* property BaseAmountFC */
    var $BaseAmountFC;

    /* DISPID=112 */
    /* VT_R8 [5] */
    /* property WTAmountFC */
    var $WTAmountFC;

    /* DISPID=113 */
    /* VT_R8 [5] */
    /* property WTAmountSC */
    var $WTAmountSC;

    /* DISPID=114 */
    /* VT_R8 [5] */
    /* property BaseAmount */
    var $BaseAmount;

    /* DISPID=115 */
    /* VT_R8 [5] */
    /* property WTAmount */
    var $WTAmount;

    /* DISPID=116 */
    /* VT_DATE [7] */
    /* property VatDate */
    var $VatDate;

    /* DISPID=116 */
    /* property VatDate */
    var $VatDate;

    /* DISPID=117 */
    /* VT_BSTR [8] */
    /* property ManualNumber */
    var $ManualNumber;

    /* DISPID=117 */
    /* property ManualNumber */
    var $ManualNumber;

    /* DISPID=118 */
    /* ? [29] */
    /* property UseShpdGoodsAct */
    var $UseShpdGoodsAct;

    /* DISPID=118 */
    /* property UseShpdGoodsAct */
    var $UseShpdGoodsAct;

    /* DISPID=119 */
    /* VT_I4 [3] */
    /* property FolioNumber */
    var $FolioNumber;

    /* DISPID=119 */
    /* property FolioNumber */
    var $FolioNumber;

    /* DISPID=120 */
    /* ? [29] */
    /* property DocumentSubType */
    var $DocumentSubType;

    /* DISPID=120 */
    /* property DocumentSubType */
    var $DocumentSubType;

    /* DISPID=121 */
    /* VT_BSTR [8] */
    /* property BPChannelCode */
    var $BPChannelCode;

    /* DISPID=121 */
    /* property BPChannelCode */
    var $BPChannelCode;

    /* DISPID=122 */
    /* VT_I4 [3] */
    /* property BPChannelContact */
    var $BPChannelContact;

    /* DISPID=122 */
    /* property BPChannelContact */
    var $BPChannelContact;

    /* DISPID=123 */
    /* VT_PTR [26] */
    /* property WithholdingTaxData */
    var $WithholdingTaxData;

    /* DISPID=124 */
    /* VT_BSTR [8] */
    /* property DocObjectCodeEx */
    var $DocObjectCodeEx;

    /* DISPID=124 */
    /* property DocObjectCodeEx */
    var $DocObjectCodeEx;

    /* DISPID=125 */
    /* VT_BSTR [8] */
    /* property Address2 */
    var $Address2;

    /* DISPID=125 */
    /* property Address2 */
    var $Address2;

    /* DISPID=126 */
    /* ? [29] */
    /* property DocumentStatus */
    var $DocumentStatus;

    /* DISPID=127 */
    /* VT_BSTR [8] */
    /* property Period Indicator */
    var $PeriodIndicator;

    /* DISPID=129 */
    /* VT_BSTR [8] */
    /* property Pay to code */
    var $PayToCode;

    /* DISPID=129 */
    /* property Pay to code */
    var $PayToCode;

    /* DISPID=130 */
    /* VT_I4 [3] */
    /* property DocumentsOwner */
    var $DocumentsOwner;

    /* DISPID=130 */
    /* property DocumentsOwner */
    var $DocumentsOwner;

    /* DISPID=131 */
    /* VT_BSTR [8] */
    /* property FolioPrefixString */
    var $FolioPrefixString;

    /* DISPID=131 */
    /* property FolioPrefixString */
    var $FolioPrefixString;

    /* DISPID=132 */
    /* ? [29] */
    /* property IsPayToBank */
    var $IsPayToBank;

    /* DISPID=132 */
    /* property IsPayToBank */
    var $IsPayToBank;

    /* DISPID=133 */
    /* VT_BSTR [8] */
    /* property PayToBankCountry */
    var $PayToBankCountry;

    /* DISPID=133 */
    /* property PayToBankCountry */
    var $PayToBankCountry;

    /* DISPID=134 */
    /* VT_BSTR [8] */
    /* property PayToBankCode */
    var $PayToBankCode;

    /* DISPID=134 */
    /* property PayToBankCode */
    var $PayToBankCode;

    /* DISPID=135 */
    /* VT_BSTR [8] */
    /* property PayToBankAccountNo */
    var $PayToBankAccountNo;

    /* DISPID=135 */
    /* property PayToBankAccountNo */
    var $PayToBankAccountNo;

    /* DISPID=136 */
    /* VT_BSTR [8] */
    /* property PayToBankBranch */
    var $PayToBankBranch;

    /* DISPID=136 */
    /* property PayToBankBranch */
    var $PayToBankBranch;

    /* DISPID=137 */
    /* VT_BSTR [8] */
    function GetAsXML(
    )
    {
        /* Get the object's data in xml format. */
    }
    /* DISPID=138 */
    function SaveToFile(
        /* VT_BSTR [8] [in] */ $FileName
    )
    {
        /* Save the object's data in xml format. */
    }
    /* DISPID=50 */
    /* property PaymentReference */
    var $PaymentReference;

    /* DISPID=139 */
    /* VT_I4 [3] */
    /* property BPL_IDAssignedToInvoice */
    var $BPL_IDAssignedToInvoice;

    /* DISPID=139 */
    /* property BPL_IDAssignedToInvoice */
    var $BPL_IDAssignedToInvoice;

    /* DISPID=140 */
    /* VT_DATE [7] */
    /* property ClosingDate */
    var $ClosingDate;

    /* DISPID=140 */
    /* property ClosingDate */
    var $ClosingDate;

    /* DISPID=141 */
    /* VT_I4 [3] */
    /* property SequenceSerial */
    var $SequenceSerial;

    /* DISPID=141 */
    /* property SequenceSerial */
    var $SequenceSerial;

    /* DISPID=142 */
    /* VT_I4 [3] */
    /* property SequenceCode */
    var $SequenceCode;

    /* DISPID=142 */
    /* property SequenceCode */
    var $SequenceCode;

    /* DISPID=143 */
    /* VT_BSTR [8] */
    /* property SeriesString */
    var $SeriesString;

    /* DISPID=143 */
    /* property SeriesString */
    var $SeriesString;

    /* DISPID=144 */
    /* VT_BSTR [8] */
    /* property SubSeriesString */
    var $SubSeriesString;

    /* DISPID=144 */
    /* property SubSeriesString */
    var $SubSeriesString;

    /* DISPID=145 */
    /* VT_BSTR [8] */
    /* property SequenceModel */
    var $SequenceModel;

    /* DISPID=145 */
    /* property SequenceModel */
    var $SequenceModel;

    /* DISPID=146 */
    /* VT_PTR [26] */
    /* property TaxExtension */
    var $TaxExtension;

    /* DISPID=147 */
    /* VT_R8 [5] */
    /* property DownPayment */
    var $DownPayment;

    /* DISPID=147 */
    /* property DownPayment */
    var $DownPayment;

    /* DISPID=148 */
    /* ? [29] */
    /* property ReserveInvoice */
    var $ReserveInvoice;

    /* DISPID=149 */
    /* VT_I4 [3] */
    /* property LanguageCode */
    var $LanguageCode;

    /* DISPID=149 */
    /* property LanguageCode */
    var $LanguageCode;

    /* DISPID=150 */
    /* VT_BSTR [8] */
    /* property TrackingNumber */
    var $TrackingNumber;

    /* DISPID=150 */
    /* property TrackingNumber */
    var $TrackingNumber;

    /* DISPID=151 */
    /* VT_BSTR [8] */
    /* property PickRemark */
    var $PickRemark;

    /* DISPID=151 */
    /* property PickRemark */
    var $PickRemark;

    /* DISPID=26 */
    /* Import file num */
    var $ImportFileNum;

    /* DISPID=152 */
    /* ? [29] */
    /* property UseCorrectionVATGroup */
    var $UseCorrectionVATGroup;

    /* DISPID=152 */
    /* property UseCorrectionVATGroup */
    var $UseCorrectionVATGroup;

    /* DISPID=153 */
    /* VT_R8 [5] */
    /* property TotalDiscount */
    var $TotalDiscount;

    /* DISPID=71 */
    /* property Pick */
    var $Pick;

    /* DISPID=154 */
    /* VT_R8 [5] */
    /* property VatPercent */
    var $VatPercent;

    /* DISPID=154 */
    /* property VatPercent */
    var $VatPercent;

    /* DISPID=155 */
    /* VT_PTR [26] */
    /* property Packages */
    var $Packages;

    /* DISPID=156 */
    /* VT_PTR [26] */
    /* property Installments */
    var $Installments;

    /* DISPID=157 */
    /* VT_PTR [26] */
    /* property SpecialLines */
    var $SpecialLines;

    /* DISPID=148 */
    /* property ReserveInvoice */
    var $ReserveInvoice;

    /* DISPID=158 */
    /* VT_R8 [5] */
    /* property DownPaymentAmount */
    var $DownPaymentAmount;

    /* DISPID=159 */
    /* VT_R8 [5] */
    /* property DownPaymentPercentage */
    var $DownPaymentPercentage;

    /* DISPID=159 */
    /* property DownPaymentPercentage */
    var $DownPaymentPercentage;

    /* DISPID=160 */
    /* ? [29] */
    /* property DownPaymentType */
    var $DownPaymentType;

    /* DISPID=160 */
    /* property DownPaymentType */
    var $DownPaymentType;

    /* DISPID=161 */
    /* VT_PTR [26] */
    /* property DownPaymentsToDraw */
    var $DownPaymentsToDraw;

    /* DISPID=162 */
    /* VT_R8 [5] */
    /* property DownPaymentAmountFC */
    var $DownPaymentAmountFC;

    /* DISPID=163 */
    /* VT_R8 [5] */
    /* property DownPaymentAmountSC */
    var $DownPaymentAmountSC;

    /* DISPID=158 */
    /* property DownPaymentAmount */
    var $DownPaymentAmount;

    /* DISPID=162 */
    /* property DownPaymentAmountFC */
    var $DownPaymentAmountFC;

    /* DISPID=163 */
    /* property DownPaymentAmountSC */
    var $DownPaymentAmountSC;

    /* DISPID=164 */
    /* VT_BSTR [8] */
    /* property OpeningRemarks */
    var $OpeningRemarks;

    /* DISPID=164 */
    /* property OpeningRemarks */
    var $OpeningRemarks;

    /* DISPID=165 */
    /* VT_BSTR [8] */
    /* property ClosingRemarks */
    var $ClosingRemarks;

    /* DISPID=165 */
    /* property ClosingRemarks */
    var $ClosingRemarks;

    /* DISPID=166 */
    /* VT_R8 [5] */
    /* property RoundingDiffAmount */
    var $RoundingDiffAmount;

    /* DISPID=166 */
    /* property RoundingDiffAmount */
    var $RoundingDiffAmount;

    /* DISPID=167 */
    /* VT_R8 [5] */
    /* property RoundingDiffAmountFC */
    var $RoundingDiffAmountFC;

    /* DISPID=168 */
    /* VT_R8 [5] */
    /* property RoundingDiffAmountSC */
    var $RoundingDiffAmountSC;

    /* DISPID=169 */
    /* ? [29] */
    /* property Cancelled */
    var $Cancelled;

    /* DISPID=171 */
    /* VT_I4 [3] */
    function Reopen(
    )
    {
        /* method Reopen */
    }
    /* DISPID=170 */
    /* ? [29] */
    /* property InsuranceOperation347 */
    var $InsuranceOperation347;

    /* DISPID=170 */
    /* property InsuranceOperation347 */
    var $InsuranceOperation347;

    /* DISPID=60 */
    /* property DocTotalFc */
    var $DocTotalFc;

    /* DISPID=6 */
    /* Printed */
    var $Printed;

    /* DISPID=172 */
    /* VT_R8 [5] */
    /* property ServiceGrossProfitPercent */
    var $ServiceGrossProfitPercent;

    /* DISPID=172 */
    /* property ServiceGrossProfitPercent */
    var $ServiceGrossProfitPercent;

    /* DISPID=173 */
    /* VT_PTR [26] */
    /* property AddressExtension */
    var $AddressExtension;

    /* DISPID=174 */
    /* VT_BSTR [8] */
    /* property ControlAccount */
    var $ControlAccount;

    /* DISPID=174 */
    /* property ControlAccount */
    var $ControlAccount;

    /* DISPID=175 */
    /* ? [29] */
    /* property ArchiveNonremovableSalesQuotation */
    var $ArchiveNonremovableSalesQuotation;

    /* DISPID=175 */
    /* property ArchiveNonremovableSalesQuotation */
    var $ArchiveNonremovableSalesQuotation;

    /* DISPID=176 */
    /* VT_I4 [3] */
    /* property GTSChecker */
    var $GTSChecker;

    /* DISPID=176 */
    /* property GTSChecker */
    var $GTSChecker;

    /* DISPID=177 */
    /* VT_I4 [3] */
    /* property GTSPayee */
    var $GTSPayee;

    /* DISPID=177 */
    /* property GTSPayee */
    var $GTSPayee;

    /* DISPID=178 */
    /* VT_I4 [3] */
    /* property ExtraMonth */
    var $ExtraMonth;

    /* DISPID=178 */
    /* property ExtraMonth */
    var $ExtraMonth;

    /* DISPID=179 */
    /* VT_I4 [3] */
    /* property ExtraDays */
    var $ExtraDays;

    /* DISPID=179 */
    /* property ExtraDays */
    var $ExtraDays;

    /* DISPID=180 */
    /* VT_I4 [3] */
    /* property CashDiscountDateOffset */
    var $CashDiscountDateOffset;

    /* DISPID=180 */
    /* property CashDiscountDateOffset */
    var $CashDiscountDateOffset;

    /* DISPID=181 */
    /* ? [29] */
    /* property StartFrom */
    var $StartFrom;

    /* DISPID=181 */
    /* property StartFrom */
    var $StartFrom;

    /* DISPID=182 */
    /* ? [29] */
    /* property NTSApproved */
    var $NTSApproved;

    /* DISPID=182 */
    /* property NTSApproved */
    var $NTSApproved;

    /* DISPID=183 */
    /* VT_I4 [3] */
    /* property ETaxWebSite */
    var $ETaxWebSite;

    /* DISPID=183 */
    /* property ETaxWebSite */
    var $ETaxWebSite;

    /* DISPID=184 */
    /* VT_BSTR [8] */
    /* property ETaxNumber */
    var $ETaxNumber;

    /* DISPID=184 */
    /* property ETaxNumber */
    var $ETaxNumber;

    /* DISPID=185 */
    /* VT_BSTR [8] */
    /* property NTSApprovedNumber */
    var $NTSApprovedNumber;

    /* DISPID=185 */
    /* property NTSApprovedNumber */
    var $NTSApprovedNumber;

    /* DISPID=186 */
    /* VT_BSTR [8] */
    /* property SignatureInputMessage */
    var $SignatureInputMessage;

    /* DISPID=187 */
    /* VT_BSTR [8] */
    /* property SignatureDigest */
    var $SignatureDigest;

    /* DISPID=188 */
    /* VT_BSTR [8] */
    /* property CertificationNumber */
    var $CertificationNumber;

    /* DISPID=189 */
    /* VT_I4 [3] */
    /* property PrivateKeyVersion */
    var $PrivateKeyVersion;

    /* DISPID=190 */
    /* VT_I4 [3] */
    /* property GroupSeries */
    var $GroupSeries;

    /* DISPID=190 */
    /* property GroupSeries */
    var $GroupSeries;

    /* DISPID=191 */
    /* VT_I4 [3] */
    /* property GroupNumber */
    var $GroupNumber;

    /* DISPID=191 */
    /* property GroupNumber */
    var $GroupNumber;

    /* DISPID=192 */
    /* ? [29] */
    /* property GroupHandWritten */
    var $GroupHandWritten;

    /* DISPID=192 */
    /* property GroupHandWritten */
    var $GroupHandWritten;

    /* DISPID=193 */
    /* ? [29] */
    /* property ReopenOriginalDocument */
    var $ReopenOriginalDocument;

    /* DISPID=193 */
    /* property ReopenOriginalDocument */
    var $ReopenOriginalDocument;

    /* DISPID=194 */
    /* ? [29] */
    /* property ReopenManuallyClosedOrCanceledDocument */
    var $ReopenManuallyClosedOrCanceledDocument;

    /* DISPID=194 */
    /* property ReopenManuallyClosedOrCanceledDocument */
    var $ReopenManuallyClosedOrCanceledDocument;

    /* DISPID=195 */
    /* ? [29] */
    /* property EDocGenerationType */
    var $EDocGenerationType;

    /* DISPID=195 */
    /* property EDocGenerationType */
    var $EDocGenerationType;

    /* DISPID=196 */
    /* VT_I4 [3] */
    /* property EDocSeries */
    var $EDocSeries;

    /* DISPID=196 */
    /* property EDocSeries */
    var $EDocSeries;

    /* DISPID=197 */
    /* VT_BSTR [8] */
    /* property EDocNum */
    var $EDocNum;

    /* DISPID=198 */
    /* VT_I4 [3] */
    /* property EDocExportFormat */
    var $EDocExportFormat;

    /* DISPID=198 */
    /* property EDocExportFormat */
    var $EDocExportFormat;

    /* DISPID=199 */
    /* ? [29] */
    /* property DownPaymentStatus */
    var $DownPaymentStatus;

    /* DISPID=199 */
    /* property DownPaymentStatus */
    var $DownPaymentStatus;

    /* DISPID=200 */
    /* ? [29] */
    /* property CreateOnlineQuotation */
    var $CreateOnlineQuotation;

    /* DISPID=200 */
    /* property CreateOnlineQuotation */
    var $CreateOnlineQuotation;

    /* DISPID=201 */
    /* VT_BSTR [8] */
    /* property POSEquipmentNumber */
    var $POSEquipmentNumber;

    /* DISPID=201 */
    /* property POSEquipmentNumber */
    var $POSEquipmentNumber;

    /* DISPID=202 */
    /* VT_BSTR [8] */
    /* property POSManufacturerSerialNumber */
    var $POSManufacturerSerialNumber;

    /* DISPID=202 */
    /* property POSManufacturerSerialNumber */
    var $POSManufacturerSerialNumber;

    /* DISPID=203 */
    /* VT_I4 [3] */
    /* property POSCashierNumber */
    var $POSCashierNumber;

    /* DISPID=203 */
    /* property POSCashierNumber */
    var $POSCashierNumber;

    /* DISPID=204 */
    /* ? [29] */
    /* property ApplyCurrentVATRatesForDownPaymentsToDraw */
    var $ApplyCurrentVATRatesForDownPaymentsToDraw;

    /* DISPID=204 */
    /* property ApplyCurrentVATRatesForDownPaymentsToDraw */
    var $ApplyCurrentVATRatesForDownPaymentsToDraw;

    /* DISPID=210 */
    /* ? [29] */
    /* property ClosingOption */
    var $ClosingOption;

    /* DISPID=210 */
    /* property ClosingOption */
    var $ClosingOption;

    /* DISPID=211 */
    /* VT_DATE [7] */
    /* property SpecifiedClosingDate */
    var $SpecifiedClosingDate;

    /* DISPID=211 */
    /* property SpecifiedClosingDate */
    var $SpecifiedClosingDate;

    /* DISPID=212 */
    /* ? [29] */
    /* property OpenForLandedCosts */
    var $OpenForLandedCosts;

    /* DISPID=212 */
    /* property OpenForLandedCosts */
    var $OpenForLandedCosts;

    /* DISPID=213 */
    /* VT_I4 [3] */
    function SaveDraftToDocument(
    )
    {
        /* method SaveDraftToDocument */
    }
    /* DISPID=214 */
    /* VT_I4 [3] */
    function GetApprovalTemplates(
    )
    {
        /* method GetApprovalTemplates */
    }
    /* DISPID=215 */
    /* VT_PTR [26] */
    /* property Document_ApprovalRequests */
    var $Document_ApprovalRequests;

    /* DISPID=216 */
    /* ? [29] */
    /* property AuthorizationStatus */
    var $AuthorizationStatus;

    /* DISPID=217 */
    /* VT_I4 [3] */
    function UpdateFromXML(
        /* VT_BSTR [8] [in] */ $FileName
    )
    {
        /* method UpdateFromXML */
    }
    /* DISPID=218 */
    /* VT_R8 [5] */
    /* property TotalDiscountFC */
    var $TotalDiscountFC;

    /* DISPID=219 */
    /* VT_R8 [5] */
    /* property TotalDiscountSC */
    var $TotalDiscountSC;

    /* DISPID=220 */
    /* ? [29] */
    /* property RelevantToGTS */
    var $RelevantToGTS;

    /* DISPID=220 */
    /* property RelevantToGTS */
    var $RelevantToGTS;

    /* DISPID=221 */
    /* ? [29] */
    /* property EDocStatus */
    var $EDocStatus;

    /* DISPID=221 */
    /* property EDocStatus */
    var $EDocStatus;

    /* DISPID=222 */
    /* VT_BSTR [8] */
    /* property EDocErrorCode */
    var $EDocErrorCode;

    /* DISPID=222 */
    /* property EDocErrorCode */
    var $EDocErrorCode;

    /* DISPID=223 */
    /* VT_BSTR [8] */
    /* property EDocErrorMessage */
    var $EDocErrorMessage;

    /* DISPID=223 */
    /* property EDocErrorMessage */
    var $EDocErrorMessage;

    /* DISPID=224 */
    /* VT_BSTR [8] */
    /* property BPLName */
    var $BPLName;

    /* DISPID=225 */
    /* VT_BSTR [8] */
    /* property VATRegNum */
    var $VATRegNum;

    /* DISPID=226 */
    /* VT_I4 [3] */
    /* property AnnualInvoiceDeclarationReference */
    var $AnnualInvoiceDeclarationReference;

    /* DISPID=226 */
    /* property AnnualInvoiceDeclarationReference */
    var $AnnualInvoiceDeclarationReference;

    /* DISPID=227 */
    /* VT_BSTR [8] */
    /* property Supplier */
    var $Supplier;

    /* DISPID=227 */
    /* property Supplier */
    var $Supplier;

    /* DISPID=228 */
    /* VT_I4 [3] */
    /* property Releaser */
    var $Releaser;

    /* DISPID=228 */
    /* property Releaser */
    var $Releaser;

    /* DISPID=229 */
    /* VT_I4 [3] */
    /* property Receiver */
    var $Receiver;

    /* DISPID=229 */
    /* property Receiver */
    var $Receiver;

    /* DISPID=230 */
    /* VT_I4 [3] */
    /* property BlanketAgreementNumber */
    var $BlanketAgreementNumber;

    /* DISPID=230 */
    /* property BlanketAgreementNumber */
    var $BlanketAgreementNumber;

    /* DISPID=231 */
    /* ? [29] */
    /* property IsAlteration */
    var $IsAlteration;

    /* DISPID=231 */
    /* property IsAlteration */
    var $IsAlteration;

}
