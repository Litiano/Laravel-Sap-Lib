<?php
/**
 * Created by PhpStorm.
 * User: H4
 * Date: 31/01/2018
 * Time: 23:06
 */

namespace Litiano\Sap\IdeHelper;



class IJournalEntries { /* GUID={060F033E-2FC9-4266-90AE-3271AC203A59} */
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
    /* VT_PTR [26] */
    /* property Lines */
    /** @var IJournalEntries_Lines */
    var $Lines;

    /* DISPID=3 */
    /* VT_I4 [3] */
    function Add(
    )
    {
        /* method Add */
    }
    /* DISPID=4 */
    /* VT_BOOL [11] */
    function GetByKey(
        /* VT_I4 [3]  */ $JdtNum
    )
    {
        /* method GetByKey */
    }
    /* DISPID=5 */
    /* VT_DATE [7] */
    /* property ReferenceDate */
    var $ReferenceDate;

    /* DISPID=5 */
    /* property ReferenceDate */
    var $ReferenceDate;

    /* DISPID=6 */
    /* VT_BSTR [8] */
    /* property Memo */
    var $Memo;

    /* DISPID=6 */
    /* property Memo */
    var $Memo;

    /* DISPID=7 */
    /* VT_BSTR [8] */
    /* property Reference */
    var $Reference;

    /* DISPID=7 */
    /* property Reference */
    var $Reference;

    /* DISPID=8 */
    /* VT_BSTR [8] */
    /* property Reference2 */
    var $Reference2;

    /* DISPID=8 */
    /* property Reference2 */
    var $Reference2;

    /* DISPID=9 */
    /* VT_BSTR [8] */
    /* property TransactionCode */
    var $TransactionCode;

    /* DISPID=9 */
    /* property TransactionCode */
    var $TransactionCode;

    /* DISPID=12 */
    /* VT_BSTR [8] */
    /* property ProjectCode */
    var $ProjectCode;

    /* DISPID=12 */
    /* property ProjectCode */
    var $ProjectCode;

    /* DISPID=14 */
    /* VT_DATE [7] */
    /* property TaxDate */
    var $TaxDate;

    /* DISPID=14 */
    /* property TaxDate */
    var $TaxDate;

    /* DISPID=15 */
    /* VT_I4 [3] */
    /* property JdtNum */
    var $JdtNum;

    /* DISPID=16 */
    function SaveXML(
        /* VT_PTR [26] [in][out] --> VT_BSTR [8]  */ &$FileName
    )
    {
        /* method SaveXML */
    }
    /* DISPID=17 */
    /* VT_I4 [3] */
    function Update(
    )
    {
        /* method Update */
    }
    /* DISPID=18 */
    /* VT_I4 [3] */
    function Remove(
    )
    {
        /* method Remove */
    }
    /* DISPID=19 */
    /* VT_I4 [3] */
    function Cancel(
    )
    {
        /* method Cancel */
    }
    /* DISPID=20 */
    /* VT_I4 [3] */
    function Close(
    )
    {
        /* method Close */
    }
    /* DISPID=21 */
    /* VT_PTR [26] */
    /* User fields for this object. */
    var $Browser;

    /* DISPID=22 */
    /* VT_BSTR [8] */
    /* property Indicator */
    var $Indicator;

    /* DISPID=22 */
    /* property Indicator */
    var $Indicator;

    /* DISPID=23 */
    /* ? [29] */
    /* property UseAutoStorno */
    var $UseAutoStorno;

    /* DISPID=23 */
    /* property UseAutoStorno */
    var $UseAutoStorno;

    /* DISPID=24 */
    /* VT_DATE [7] */
    /* property StornoDate */
    var $StornoDate;

    /* DISPID=24 */
    /* property StornoDate */
    var $StornoDate;

    /* DISPID=25 */
    /* VT_I4 [3] */
    /* property Count */
    var $Count;

    /* DISPID=26 */
    function SetCurrentLine(
        /* VT_I4 [3] [in] */ $LineNum
    )
    {
        /* method SetCurrentLine */
    }
    /* DISPID=27 */
    /* VT_DATE [7] */
    /* property VatDate */
    var $VatDate;

    /* DISPID=27 */
    /* property VatDate */
    var $VatDate;

    /* DISPID=28 */
    /* VT_I4 [3] */
    /* property Series */
    var $Series;

    /* DISPID=28 */
    /* property Series */
    var $Series;

    /* DISPID=29 */
    /* ? [29] */
    /* property StampTax */
    var $StampTax;

    /* DISPID=29 */
    /* property StampTax */
    var $StampTax;

    /* DISPID=30 */
    /* VT_BSTR [8] */
    function GetAsXML(
    )
    {
        /* Get the object's data in xml format. */
    }
    /* DISPID=31 */
    function SaveToFile(
        /* VT_BSTR [8] [in] */ $FileName
    )
    {
        /* Save the object's data in xml format. */
    }
    /* DISPID=32 */
    /* VT_DATE [7] */
    /* property DueDate */
    var $DueDate;

    /* DISPID=32 */
    /* property DueDate */
    var $DueDate;

    /* DISPID=35 */
    /* ? [29] */
    /* property AutoVAT */
    var $AutoVAT;

    /* DISPID=35 */
    /* property AutoVAT */
    var $AutoVAT;

    /* DISPID=36 */
    /* VT_I4 [3] */
    /* property Number */
    var $Number;

    /* DISPID=37 */
    /* VT_I4 [3] */
    /* property FolioNumber */
    var $FolioNumber;

    /* DISPID=38 */
    /* VT_BSTR [8] */
    /* property FolioPrefixString */
    var $FolioPrefixString;

    /* DISPID=39 */
    /* ? [29] */
    /* property ReportEU */
    var $ReportEU;

    /* DISPID=39 */
    /* property ReportEU */
    var $ReportEU;

    /* DISPID=40 */
    /* ? [29] */
    /* property Report347 */
    var $Report347;

    /* DISPID=40 */
    /* property Report347 */
    var $Report347;

    /* DISPID=41 */
    /* ? [29] */
    /* property Printed */
    var $Printed;

    /* DISPID=42 */
    /* VT_I4 [3] */
    /* property LocationCode */
    var $LocationCode;

    /* DISPID=42 */
    /* property LocationCode */
    var $LocationCode;

    /* DISPID=43 */
    /* VT_I4 [3] */
    /* property Original */
    var $Original;

    /* DISPID=44 */
    /* VT_BSTR [8] */
    /* property BaseReference */
    var $BaseReference;

    /* DISPID=45 */
    /* ? [29] */
    /* property BlockDunningLetter */
    var $BlockDunningLetter;

    /* DISPID=45 */
    /* property BlockDunningLetter */
    var $BlockDunningLetter;

    /* DISPID=46 */
    /* ? [29] */
    /* property OriginalJournal */
    var $OriginalJournal;

    /* DISPID=47 */
    /* ? [29] */
    /* property AutomaticWT */
    var $AutomaticWT;

    /* DISPID=47 */
    /* property AutomaticWT */
    var $AutomaticWT;

    /* DISPID=48 */
    /* VT_R8 [5] */
    /* property WTSum */
    var $WTSum;

    /* DISPID=49 */
    /* VT_R8 [5] */
    /* property WTSumSC */
    var $WTSumSC;

    /* DISPID=50 */
    /* VT_R8 [5] */
    /* property WTSumFC */
    var $WTSumFC;

    /* DISPID=51 */
    /* VT_PTR [26] */
    /* property WithholdingTaxData */
    var $WithholdingTaxData;

    /* DISPID=52 */
    /* ? [29] */
    /* property Corisptivi */
    var $Corisptivi;

    /* DISPID=52 */
    /* property Corisptivi */
    var $Corisptivi;

    /* DISPID=62 */
    /* VT_BSTR [8] */
    /* property SignatureInputMessage */
    var $SignatureInputMessage;

    /* DISPID=63 */
    /* VT_BSTR [8] */
    /* property SignatureDigest */
    var $SignatureDigest;

    /* DISPID=64 */
    /* VT_BSTR [8] */
    /* property CertificationNumber */
    var $CertificationNumber;

    /* DISPID=65 */
    /* VT_I4 [3] */
    /* property PrivateKeyVersion */
    var $PrivateKeyVersion;

    /* DISPID=66 */
    /* VT_BSTR [8] */
    /* property Reference3 */
    var $Reference3;

    /* DISPID=66 */
    /* property Reference3 */
    var $Reference3;

    /* DISPID=67 */
    /* VT_BSTR [8] */
    /* property DocumentType */
    var $DocumentType;

    /* DISPID=67 */
    /* property DocumentType */
    var $DocumentType;

    /* DISPID=68 */
    /* VT_I4 [3] */
    /* property BlanketAgreementNumber */
    var $BlanketAgreementNumber;

    /* DISPID=69 */
    /* ? [29] */
    /* property DeferredTax */
    var $DeferredTax;

    /* DISPID=69 */
    /* property DeferredTax */
    var $DeferredTax;

    /* DISPID=70 */
    /* ? [29] */
    /* property OperationCode */
    var $OperationCode;

    /* DISPID=70 */
    /* property OperationCode */
    var $OperationCode;

    /* DISPID=71 */
    /* ? [29] */
    /* property ResidenceNumberType */
    var $ResidenceNumberType;

    /* DISPID=71 */
    /* property ResidenceNumberType */
    var $ResidenceNumberType;

    /* DISPID=72 */
    /* ? [29] */
    /* property ECDPostingType */
    var $ECDPostingType;

    /* DISPID=72 */
    /* property ECDPostingType */
    var $ECDPostingType;

    /* DISPID=73 */
    /* VT_I4 [3] */
    /* property ExposedTransNumber */
    var $ExposedTransNumber;

    /* DISPID=73 */
    /* property ExposedTransNumber */
    var $ExposedTransNumber;

    /* DISPID=74 */
    /* VT_BSTR [8] */
    /* property PointOfIssueCode */
    var $PointOfIssueCode;

    /* DISPID=75 */
    /* ? [29] */
    /* property Letter */
    var $Letter;

    /* DISPID=76 */
    /* VT_I4 [3] */
    /* property FolioNumberFrom */
    var $FolioNumberFrom;

    /* DISPID=77 */
    /* VT_I4 [3] */
    /* property FolioNumberTo */
    var $FolioNumberTo;

    /* DISPID=78 */
    /* VT_BSTR [8] */
    /* property ReportingSectionControlStatementVAT */
    var $ReportingSectionControlStatementVAT;

    /* DISPID=78 */
    /* property ReportingSectionControlStatementVAT */
    var $ReportingSectionControlStatementVAT;

    /* DISPID=79 */
    /* ? [29] */
    /* property ExcludeFromTaxReportControlStatementVAT */
    var $ExcludeFromTaxReportControlStatementVAT;

    /* DISPID=79 */
    /* property ExcludeFromTaxReportControlStatementVAT */
    var $ExcludeFromTaxReportControlStatementVAT;

}
