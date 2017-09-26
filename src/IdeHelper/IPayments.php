<?php

namespace Litiano\Sap\IdeHelper;


class IPayments
{ /* GUID={E79D3C41-BFE7-4C5A-B586-4F627E021A1C} */
    /* DISPID=1610612736 */
    function QueryInterface(
        /* VT_PTR [26] [in] --> ? [29]  */
        &$riid,
        /* VT_PTR [26] [out] --> VT_PTR [26]  */
        &$ppvObj
    )
    {
    }
    /* DISPID=1610612737 */
    /* VT_UI4 [19] */
    function AddRef()
    {
    }
    /* DISPID=1610612738 */
    /* VT_UI4 [19] */
    function Release()
    {
    }

    /* DISPID=1610678272 */
    function GetTypeInfoCount(
        /* VT_PTR [26] [out] --> VT_UINT [23]  */
        &$pctinfo
    )
    {
    }

    /* DISPID=1610678273 */
    function GetTypeInfo(
        /* VT_UINT [23] [in] */
        $itinfo,
        /* VT_UI4 [19] [in] */
        $lcid,
        /* VT_PTR [26] [out] --> VT_PTR [26]  */
        &$pptinfo
    )
    {
    }

    /* DISPID=1610678274 */
    function GetIDsOfNames(
        /* VT_PTR [26] [in] --> ? [29]  */
        &$riid,
        /* VT_PTR [26] [in] --> VT_PTR [26]  */
        &$rgszNames,
        /* VT_UINT [23] [in] */
        $cNames,
        /* VT_UI4 [19] [in] */
        $lcid,
        /* VT_PTR [26] [out] --> VT_I4 [3]  */
        &$rgdispid
    )
    {
    }

    /* DISPID=1610678275 */
    function Invoke(
        /* VT_I4 [3] [in] */
        $dispidMember,
        /* VT_PTR [26] [in] --> ? [29]  */
        &$riid,
        /* VT_UI4 [19] [in] */
        $lcid,
        /* VT_UI2 [18] [in] */
        $wFlags,
        /* VT_PTR [26] [in] --> ? [29]  */
        &$pdispparams,
        /* VT_PTR [26] [out] --> VT_VARIANT [12]  */
        &$pvarResult,
        /* VT_PTR [26] [out] --> ? [29]  */
        &$pexcepinfo,
        /* VT_PTR [26] [out] --> VT_UINT [23]  */
        &$puArgErr
    )
    {
    }
    /* DISPID=1 */
    /* VT_PTR [26] */
    /* property UserFields */
    var $UserFields;

    /* DISPID=2 */
    /* VT_I4 [3] */
    function Add()
    {
        /* method Add */
    }
    /* DISPID=3 */
    /* VT_I4 [3] */
    function Update()
    {
        /* method Update */
    }
    /* DISPID=4 */
    /* VT_BOOL [11] */
    function GetByKey(
        /* VT_I4 [3]  */
        $RctEntry
    )
    {
        /* method GetByKey */
    }

    /* DISPID=5 */
    function SaveXML(
        /* VT_PTR [26] [in][out] --> VT_BSTR [8]  */
        &$FileName
    )
    {
        /* method SaveXML */
    }
    /* DISPID=6 */
    /* VT_I4 [3] */
    /* property DocNum */
    var $DocNum;

    /* DISPID=6 */
    /* property DocNum */
    var $DocNum;

    /* DISPID=7 */
    /* ? [29] */
    /* property DocTypte */
    var $DocTypte;

    /* DISPID=7 */
    /* property DocTypte */
    var $DocTypte;

    /* DISPID=8 */
    /* ? [29] */
    /* property HandWritten */
    var $HandWritten;

    /* DISPID=8 */
    /* property HandWritten */
    var $HandWritten;

    /* DISPID=9 */
    /* ? [29] */
    /* property Printed */
    var $Printed;

    /* DISPID=10 */
    /* VT_DATE [7] */
    /* property DocDate */
    var $DocDate;

    /* DISPID=10 */
    /* property DocDate */
    var $DocDate;

    /* DISPID=11 */
    /* VT_BSTR [8] */
    /* property CardCode */
    var $CardCode;

    /* DISPID=11 */
    /* property CardCode */
    var $CardCode;

    /* DISPID=12 */
    /* VT_BSTR [8] */
    /* property CardName */
    var $CardName;

    /* DISPID=12 */
    /* property CardName */
    var $CardName;

    /* DISPID=13 */
    /* VT_BSTR [8] */
    /* property Address */
    var $Address;

    /* DISPID=13 */
    /* property Address */
    var $Address;

    /* DISPID=14 */
    /* VT_BSTR [8] */
    /* property CashAccount */
    var $CashAccount;

    /* DISPID=14 */
    /* property CashAccount */
    var $CashAccount;

    /* DISPID=15 */
    /* VT_BSTR [8] */
    /* property DocCurrency */
    var $DocCurrency;

    /* DISPID=15 */
    /* property DocCurrency */
    var $DocCurrency;

    /* DISPID=16 */
    /* VT_R8 [5] */
    /* property CashSum */
    var $CashSum;

    /* DISPID=16 */
    /* property CashSum */
    var $CashSum;

    /* DISPID=17 */
    /* VT_BSTR [8] */
    /* property CheckAccount */
    var $CheckAccount;

    /* DISPID=17 */
    /* property CheckAccount */
    var $CheckAccount;

    /* DISPID=18 */
    /* VT_BSTR [8] */
    /* property TransferAccount */
    var $TransferAccount;

    /* DISPID=18 */
    /* property TransferAccount */
    var $TransferAccount;

    /* DISPID=19 */
    /* VT_R8 [5] */
    /* property TransferSum */
    var $TransferSum;

    /* DISPID=19 */
    /* property TransferSum */
    var $TransferSum;

    /* DISPID=20 */
    /* VT_DATE [7] */
    /* property TransferDate */
    var $TransferDate;

    /* DISPID=20 */
    /* property TransferDate */
    var $TransferDate;

    /* DISPID=21 */
    /* VT_BSTR [8] */
    /* property TransferReference */
    var $TransferReference;

    /* DISPID=21 */
    /* property TransferReference */
    var $TransferReference;

    /* DISPID=22 */
    /* ? [29] */
    /* property LocalCurrency */
    var $LocalCurrency;

    /* DISPID=22 */
    /* property LocalCurrency */
    var $LocalCurrency;

    /* DISPID=23 */
    /* VT_R8 [5] */
    /* property DocRate */
    var $DocRate;

    /* DISPID=23 */
    /* property DocRate */
    var $DocRate;

    /* DISPID=24 */
    /* VT_BSTR [8] */
    /* property Reference1 */
    var $Reference1;

    /* DISPID=24 */
    /* property Reference1 */
    var $Reference1;

    /* DISPID=25 */
    /* VT_BSTR [8] */
    /* property Reference2 */
    var $Reference2;

    /* DISPID=25 */
    /* property Reference2 */
    var $Reference2;

    /* DISPID=26 */
    /* VT_BSTR [8] */
    /* property CounterReference */
    var $CounterReference;

    /* DISPID=26 */
    /* property CounterReference */
    var $CounterReference;

    /* DISPID=27 */
    /* VT_BSTR [8] */
    /* property Remarks */
    var $Remarks;

    /* DISPID=27 */
    /* property Remarks */
    var $Remarks;

    /* DISPID=28 */
    /* VT_BSTR [8] */
    /* property JournalRemarks */
    var $JournalRemarks;

    /* DISPID=28 */
    /* property JournalRemarks */
    var $JournalRemarks;

    /* DISPID=30 */
    /* VT_I4 [3] */
    /* property ContactPersonCode */
    var $ContactPersonCode;

    /* DISPID=30 */
    /* property ContactPersonCode */
    var $ContactPersonCode;

    /* DISPID=31 */
    /* ? [29] */
    /* property ApplyVAT */
    var $ApplyVAT;

    /* DISPID=31 */
    /* property ApplyVAT */
    var $ApplyVAT;

    /* DISPID=32 */
    /* VT_DATE [7] */
    /* property TaxDate */
    var $TaxDate;

    /* DISPID=32 */
    /* property TaxDate */
    var $TaxDate;

    /* DISPID=33 */
    /* VT_I4 [3] */
    /* property Series */
    var $Series;

    /* DISPID=33 */
    /* property Series */
    var $Series;

    /* DISPID=34 */
    /* VT_BSTR [8] */
    /* property BankCode */
    var $BankCode;

    /* DISPID=34 */
    /* property BankCode */
    var $BankCode;

    /* DISPID=35 */
    /* VT_BSTR [8] */
    /* property BankAccount */
    var $BankAccount;

    /* DISPID=35 */
    /* property BankAccount */
    var $BankAccount;

    /* DISPID=36 */
    /* VT_PTR [26] */
    /* property Checks */
    var $Checks;

    /* DISPID=37 */
    /* VT_PTR [26] */
    /* property Invoices */
    var $Invoices;

    /* DISPID=38 */
    /* VT_PTR [26] */
    /* property CreditCards */
    var $CreditCards;

    /* DISPID=39 */
    /* VT_PTR [26] */
    /* property AccountPayments */
    var $AccountPayments;

    /* DISPID=41 */
    /* VT_BSTR [8] */
    /* property ProjectCode */
    var $ProjectCode;

    /* DISPID=41 */
    /* property ProjectCode */
    var $ProjectCode;

    /* DISPID=42 */
    /* VT_I4 [3] */
    function Remove()
    {
        /* method Remove */
    }
    /* DISPID=43 */
    /* VT_I4 [3] */
    function Cancel()
    {
        /* method Cancel */
    }
    /* DISPID=44 */
    /* VT_I4 [3] */
    function Close()
    {
        /* method Close */
    }
    /* DISPID=45 */
    /* VT_PTR [26] */
    /* User fields for this object. */
    var $Browser;

    /* DISPID=47 */
    /* VT_R8 [5] */
    /* property DeductionPercent */
    var $DeductionPercent;

    /* DISPID=47 */
    /* property DeductionPercent */
    var $DeductionPercent;

    /* DISPID=48 */
    /* VT_R8 [5] */
    /* property DeductionSum */
    var $DeductionSum;

    /* DISPID=48 */
    /* property DeductionSum */
    var $DeductionSum;

    /* DISPID=49 */
    /* VT_R8 [5] */
    /* property CashSumFC */
    var $CashSumFC;

    /* DISPID=50 */
    /* VT_R8 [5] */
    /* property CashSumSys */
    var $CashSumSys;

    /* DISPID=51 */
    /* VT_BSTR [8] */
    /* property BoeAccount */
    var $BoeAccount;

    /* DISPID=51 */
    /* property BoeAccount */
    var $BoeAccount;

    /* DISPID=52 */
    /* VT_R8 [5] */
    /* property BillOfExchangeAmount */
    var $BillOfExchangeAmount;

    /* DISPID=52 */
    /* property BillOfExchangeAmount */
    var $BillOfExchangeAmount;

    /* DISPID=53 */
    /* ? [29] */
    /* property BillofExchangeStatus */
    var $BillofExchangeStatus;

    /* DISPID=53 */
    /* property BillofExchangeStatus */
    var $BillofExchangeStatus;

    /* DISPID=54 */
    /* VT_PTR [26] */
    /* property BillOfExchange */
    var $BillOfExchange;

    /* DISPID=55 */
    /* VT_R8 [5] */
    /* property BillOfExchangeAmountFC */
    var $BillOfExchangeAmountFC;

    /* DISPID=56 */
    /* VT_R8 [5] */
    /* property BillOfExchangeAmountSC */
    var $BillOfExchangeAmountSC;

    /* DISPID=57 */
    /* VT_BSTR [8] */
    /* property BillOfExchangeAgent */
    var $BillOfExchangeAgent;

    /* DISPID=57 */
    /* property BillOfExchangeAgent */
    var $BillOfExchangeAgent;

    /* DISPID=58 */
    /* VT_BSTR [8] */
    /* property WTCode */
    var $WTCode;

    /* DISPID=58 */
    /* property WTCode */
    var $WTCode;

    /* DISPID=59 */
    /* VT_R8 [5] */
    /* property WTAmount */
    var $WTAmount;

    /* DISPID=59 */
    /* property WTAmount */
    var $WTAmount;

    /* DISPID=60 */
    /* VT_R8 [5] */
    /* property WTAmountFC */
    var $WTAmountFC;

    /* DISPID=61 */
    /* VT_R8 [5] */
    /* property WTAmountSC */
    var $WTAmountSC;

    /* DISPID=62 */
    /* VT_BSTR [8] */
    /* property WTAccount */
    var $WTAccount;

    /* DISPID=63 */
    /* VT_R8 [5] */
    /* property WTTaxableAmount */
    var $WTTaxableAmount;

    /* DISPID=64 */
    /* ? [29] */
    /* property Proforma */
    var $Proforma;

    /* DISPID=64 */
    /* property Proforma */
    var $Proforma;

    /* DISPID=65 */
    /* ? [29] */
    /* property PaymentPriority */
    var $PaymentPriority;

    /* DISPID=65 */
    /* property PaymentPriority */
    var $PaymentPriority;

    /* DISPID=66 */
    /* VT_BSTR [8] */
    /* property TaxGroup */
    var $TaxGroup;

    /* DISPID=66 */
    /* property TaxGroup */
    var $TaxGroup;

    /* DISPID=67 */
    /* VT_BSTR [8] */
    /* property PayToBankAccountNo */
    var $PayToBankAccountNo;

    /* DISPID=67 */
    /* property PayToBankAccountNo */
    var $PayToBankAccountNo;

    /* DISPID=68 */
    /* VT_BSTR [8] */
    /* property PayToCode */
    var $PayToCode;

    /* DISPID=68 */
    /* property PayToCode */
    var $PayToCode;

    /* DISPID=69 */
    /* VT_BSTR [8] */
    /* property PayToBankCountry */
    var $PayToBankCountry;

    /* DISPID=69 */
    /* property PayToBankCountry */
    var $PayToBankCountry;

    /* DISPID=70 */
    /* ? [29] */
    /* property IsPayToBank */
    var $IsPayToBank;

    /* DISPID=70 */
    /* property IsPayToBank */
    var $IsPayToBank;

    /* DISPID=71 */
    /* ? [29] */
    /* property DocType */
    var $DocType;

    /* DISPID=71 */
    /* property DocType */
    var $DocType;

    /* DISPID=72 */
    /* ? [29] */
    /* property DocObjectCode */
    var $DocObjectCode;

    /* DISPID=72 */
    /* property DocObjectCode */
    var $DocObjectCode;

    /* DISPID=73 */
    /* VT_I4 [3] */
    /* property DocEntry */
    var $DocEntry;

    /* DISPID=74 */
    /* VT_BSTR [8] */
    /* property PayToBankCode */
    var $PayToBankCode;

    /* DISPID=74 */
    /* property PayToBankCode */
    var $PayToBankCode;

    /* DISPID=75 */
    /* VT_BSTR [8] */
    /* property PayToBankBranch */
    var $PayToBankBranch;

    /* DISPID=75 */
    /* property PayToBankBranch */
    var $PayToBankBranch;

    /* DISPID=76 */
    /* VT_BSTR [8] */
    function GetAsXML()
    {
        /* Get the object's data in xml format. */
    }

    /* DISPID=77 */
    function SaveToFile(
        /* VT_BSTR [8] [in] */
        $FileName
    )
    {
        /* Save the object's data in xml format. */
    }
    /* DISPID=78 */
    /* VT_R8 [5] */
    /* property BankChargeAmount */
    var $BankChargeAmount;

    /* DISPID=78 */
    /* property BankChargeAmount */
    var $BankChargeAmount;

    /* DISPID=79 */
    /* VT_R8 [5] */
    /* property BankChargeAmountInFC */
    var $BankChargeAmountInFC;

    /* DISPID=80 */
    /* VT_R8 [5] */
    /* property BankChargeAmountInSC */
    var $BankChargeAmountInSC;

    /* DISPID=81 */
    /* VT_DATE [7] */
    /* property VatDate */
    var $VatDate;

    /* DISPID=81 */
    /* property VatDate */
    var $VatDate;

    /* DISPID=82 */
    /* VT_BSTR [8] */
    /* property TransactionCode */
    var $TransactionCode;

    /* DISPID=82 */
    /* property TransactionCode */
    var $TransactionCode;

    /* DISPID=83 */
    /* ? [29] */
    /* property PaymentType */
    var $PaymentType;

    /* DISPID=83 */
    /* property PaymentType */
    var $PaymentType;

    /* DISPID=84 */
    /* VT_R8 [5] */
    /* property TransferRealAmount */
    var $TransferRealAmount;

    /* DISPID=84 */
    /* property TransferRealAmount */
    var $TransferRealAmount;

    /* DISPID=85 */
    /* VT_R8 [5] */
    /* property UnderOverpaymentdifference */
    var $UnderOverpaymentdifference;

    /* DISPID=86 */
    /* VT_R8 [5] */
    /* property UnderOverpaymentdiffSC */
    var $UnderOverpaymentdiffSC;

    /* DISPID=87 */
    /* VT_R8 [5] */
    /* property WtBaseSum */
    var $WtBaseSum;

    /* DISPID=87 */
    /* property WtBaseSum */
    var $WtBaseSum;

    /* DISPID=88 */
    /* VT_R8 [5] */
    /* property WtBaseSumFC */
    var $WtBaseSumFC;

    /* DISPID=89 */
    /* VT_R8 [5] */
    /* property WtBaseSumSC */
    var $WtBaseSumSC;

    /* DISPID=90 */
    /* VT_DATE [7] */
    /* property DueDate */
    var $DueDate;

    /* DISPID=90 */
    /* property DueDate */
    var $DueDate;

    /* DISPID=91 */
    /* VT_I4 [3] */
    /* property LocationCode */
    var $LocationCode;

    /* DISPID=91 */
    /* property LocationCode */
    var $LocationCode;

    /* DISPID=92 */
    /* ? [29] */
    /* property Cancelled */
    var $Cancelled;

    /* DISPID=100 */
    /* VT_BSTR [8] */
    /* property ControlAccount */
    var $ControlAccount;

    /* DISPID=100 */
    /* property ControlAccount */
    var $ControlAccount;

    /* DISPID=101 */
    /* VT_R8 [5] */
    /* property UnderOverpaymentdiffFC */
    var $UnderOverpaymentdiffFC;

    /* DISPID=102 */
    /* VT_PTR [26] */
    /* property PrimaryFormItems */
    var $PrimaryFormItems;

    /* DISPID=103 */
    /* VT_I4 [3] */
    function SaveDraftToDocument()
    {
        /* method SaveDraftToDocument */
    }
    /* DISPID=104 */
    /* VT_I4 [3] */
    function GetApprovalTemplates()
    {
        /* method GetApprovalTemplates */
    }
    /* DISPID=105 */
    /* VT_PTR [26] */
    /* property Payments_ApprovalRequests */
    var $Payments_ApprovalRequests;

    /* DISPID=106 */
    /* ? [29] */
    /* property AuthorizationStatus */
    var $AuthorizationStatus;

    /* DISPID=111 */
    /* VT_I4 [3] */
    /* property BPLID */
    var $BPLID;

    /* DISPID=111 */
    /* property BPLID */
    var $BPLID;

    /* DISPID=112 */
    /* VT_BSTR [8] */
    /* property BPLName */
    var $BPLName;

    /* DISPID=113 */
    /* VT_BSTR [8] */
    /* property VATRegNum */
    var $VATRegNum;

}
