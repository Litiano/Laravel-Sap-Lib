<?php
/**
 * Created by PhpStorm.
 * User: E-Commerce 2
 * Date: 09/03/2017
 * Time: 11:49
 */

namespace Litiano\Sap\IdeHelper;



class IDeposit { /* GUID={29A116DF-AE12-4A45-A5F0-3436E170B26B} */
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
    /* property DepositNumber */
    var $DepositNumber;

    /* DISPID=11 */
    /* ? [29] */
    /* property DepositType */
    var $DepositType;

    /* DISPID=11 */
    /* property DepositType */
    var $DepositType;

    /* DISPID=12 */
    /* VT_DATE [7] */
    /* property DepositDate */
    var $DepositDate;

    /* DISPID=12 */
    /* property DepositDate */
    var $DepositDate;

    /* DISPID=13 */
    /* VT_BSTR [8] */
    /* property DepositCurrency */
    var $DepositCurrency;

    /* DISPID=13 */
    /* property DepositCurrency */
    var $DepositCurrency;

    /* DISPID=14 */
    /* VT_BSTR [8] */
    /* property DepositAccount */
    var $DepositAccount;

    /* DISPID=14 */
    /* property DepositAccount */
    var $DepositAccount;

    /* DISPID=15 */
    /* VT_BSTR [8] */
    /* property DepositorName */
    var $DepositorName;

    /* DISPID=15 */
    /* property DepositorName */
    var $DepositorName;

    /* DISPID=16 */
    /* VT_BSTR [8] */
    /* property Bank */
    var $Bank;

    /* DISPID=16 */
    /* property Bank */
    var $Bank;

    /* DISPID=17 */
    /* VT_BSTR [8] */
    /* property BankAccountNum */
    var $BankAccountNum;

    /* DISPID=17 */
    /* property BankAccountNum */
    var $BankAccountNum;

    /* DISPID=18 */
    /* VT_BSTR [8] */
    /* property BankBranch */
    var $BankBranch;

    /* DISPID=18 */
    /* property BankBranch */
    var $BankBranch;

    /* DISPID=19 */
    /* VT_BSTR [8] */
    /* property BankReference */
    var $BankReference;

    /* DISPID=19 */
    /* property BankReference */
    var $BankReference;

    /* DISPID=20 */
    /* VT_BSTR [8] */
    /* property JournalRemarks */
    var $JournalRemarks;

    /* DISPID=20 */
    /* property JournalRemarks */
    var $JournalRemarks;

    /* DISPID=21 */
    /* VT_R8 [5] */
    /* property TotalLC */
    var $TotalLC;

    /* DISPID=21 */
    /* property TotalLC */
    var $TotalLC;

    /* DISPID=22 */
    /* VT_R8 [5] */
    /* property TotalFC */
    var $TotalFC;

    /* DISPID=23 */
    /* VT_R8 [5] */
    /* property TotalSC */
    var $TotalSC;

    /* DISPID=24 */
    /* VT_BSTR [8] */
    /* property AllocationAccount */
    var $AllocationAccount;

    /* DISPID=24 */
    /* property AllocationAccount */
    var $AllocationAccount;

    /* DISPID=25 */
    /* VT_R8 [5] */
    /* property DocRate */
    var $DocRate;

    /* DISPID=25 */
    /* property DocRate */
    var $DocRate;

    /* DISPID=26 */
    /* VT_BSTR [8] */
    /* property TaxAccount */
    var $TaxAccount;

    /* DISPID=26 */
    /* property TaxAccount */
    var $TaxAccount;

    /* DISPID=27 */
    /* VT_R8 [5] */
    /* property TaxAmount */
    var $TaxAmount;

    /* DISPID=27 */
    /* property TaxAmount */
    var $TaxAmount;

    /* DISPID=28 */
    /* VT_BSTR [8] */
    /* property CommissionAccount */
    var $CommissionAccount;

    /* DISPID=28 */
    /* property CommissionAccount */
    var $CommissionAccount;

    /* DISPID=29 */
    /* VT_R8 [5] */
    /* property Commission */
    var $Commission;

    /* DISPID=29 */
    /* property Commission */
    var $Commission;

    /* DISPID=30 */
    /* VT_DATE [7] */
    /* property CommissionDate */
    var $CommissionDate;

    /* DISPID=30 */
    /* property CommissionDate */
    var $CommissionDate;

    /* DISPID=31 */
    /* VT_BSTR [8] */
    /* property TaxCode */
    var $TaxCode;

    /* DISPID=31 */
    /* property TaxCode */
    var $TaxCode;

    /* DISPID=32 */
    /* ? [29] */
    /* property DepositAccountType */
    var $DepositAccountType;

    /* DISPID=32 */
    /* property DepositAccountType */
    var $DepositAccountType;

    /* DISPID=33 */
    /* VT_PTR [26] */
    /* property Checks */
    var $Checks;

    /* DISPID=34 */
    /* VT_PTR [26] */
    /* property Credits */
    /** @var ICreditLines */
    var $Credits;

    /* DISPID=35 */
    /* VT_PTR [26] */
    /* property BOEs */
    var $BOEs;

    /* DISPID=36 */
    /* ? [29] */
    /* property ReconcileAfterDeposit */
    var $ReconcileAfterDeposit;

    /* DISPID=36 */
    /* property ReconcileAfterDeposit */
    var $ReconcileAfterDeposit;

    /* DISPID=37 */
    /* VT_BSTR [8] */
    /* property VoucherAccount */
    var $VoucherAccount;

    /* DISPID=37 */
    /* property VoucherAccount */
    var $VoucherAccount;

    /* DISPID=38 */
    /* VT_I4 [3] */
    /* property AbsEntry */
    var $AbsEntry;

    /* DISPID=39 */
    /* VT_I4 [3] */
    /* property Series */
    var $Series;

    /* DISPID=39 */
    /* property Series */
    var $Series;

    /* DISPID=40 */
    /* VT_BSTR [8] */
    /* property Project */
    var $Project;

    /* DISPID=40 */
    /* property Project */
    var $Project;

    /* DISPID=41 */
    /* VT_BSTR [8] */
    /* property DistributionRule */
    var $DistributionRule;

    /* DISPID=41 */
    /* property DistributionRule */
    var $DistributionRule;

    /* DISPID=42 */
    /* VT_BSTR [8] */
    /* property DistributionRule2 */
    var $DistributionRule2;

    /* DISPID=42 */
    /* property DistributionRule2 */
    var $DistributionRule2;

    /* DISPID=43 */
    /* VT_BSTR [8] */
    /* property DistributionRule3 */
    var $DistributionRule3;

    /* DISPID=43 */
    /* property DistributionRule3 */
    var $DistributionRule3;

    /* DISPID=44 */
    /* VT_BSTR [8] */
    /* property DistributionRule4 */
    var $DistributionRule4;

    /* DISPID=44 */
    /* property DistributionRule4 */
    var $DistributionRule4;

    /* DISPID=45 */
    /* VT_BSTR [8] */
    /* property DistributionRule5 */
    var $DistributionRule5;

    /* DISPID=45 */
    /* property DistributionRule5 */
    var $DistributionRule5;

    /* DISPID=46 */
    /* VT_BSTR [8] */
    /* property CommissionCurrency */
    var $CommissionCurrency;

    /* DISPID=46 */
    /* property CommissionCurrency */
    var $CommissionCurrency;

    /* DISPID=47 */
    /* VT_R8 [5] */
    /* property CommissionSC */
    var $CommissionSC;

    /* DISPID=48 */
    /* VT_R8 [5] */
    /* property CommissionFC */
    var $CommissionFC;

    /* DISPID=49 */
    /* VT_R8 [5] */
    /* property TaxAmountSC */
    var $TaxAmountSC;

    /* DISPID=50 */
    /* VT_R8 [5] */
    /* property TaxAmountFC */
    var $TaxAmountFC;

    /* DISPID=51 */
    /* VT_I4 [3] */
    /* property BPLID */
    var $BPLID;

    /* DISPID=51 */
    /* property BPLID */
    var $BPLID;

    /* DISPID=52 */
    /* VT_PTR [26] */
    /* Get User Fields */
    var $UserFields;

    /* DISPID=53 */
    /* ? [29] */
    /* property CheckDepositType */
    var $CheckDepositType;

    /* DISPID=53 */
    /* property CheckDepositType */
    var $CheckDepositType;

}
