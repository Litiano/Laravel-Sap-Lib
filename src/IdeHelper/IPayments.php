<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class IPayments
 * GUID={E79D3C41-BFE7-4C5A-B586-4F627E021A1C}
 *
 * @property-read IUserFields $UserFields property UserFields
 * @property int $DocNum property DocNum
 * @property int|VT_USERDEFINED $DocTypte property DocTypte
 * @property int|VT_USERDEFINED $HandWritten property HandWritten
 * @property-read int|VT_USERDEFINED $Printed property Printed
 * @property string|VT_DATE $DocDate property DocDate
 * @property string $CardCode property CardCode
 * @property string $CardName property CardName
 * @property string $Address property Address
 * @property string $CashAccount property CashAccount
 * @property string $DocCurrency property DocCurrency
 * @property float $CashSum property CashSum
 * @property string $CheckAccount property CheckAccount
 * @property string $TransferAccount property TransferAccount
 * @property float $TransferSum property TransferSum
 * @property string|VT_DATE $TransferDate property TransferDate
 * @property string $TransferReference property TransferReference
 * @property int|VT_USERDEFINED $LocalCurrency property LocalCurrency
 * @property float $DocRate property DocRate
 * @property string $Reference1 property Reference1
 * @property string $Reference2 property Reference2
 * @property string $CounterReference property CounterReference
 * @property string $Remarks property Remarks
 * @property string $JournalRemarks property JournalRemarks
 * @property int $ContactPersonCode property ContactPersonCode
 * @property int|VT_USERDEFINED $ApplyVAT property ApplyVAT
 * @property string|VT_DATE $TaxDate property TaxDate
 * @property int $Series property Series
 * @property string $BankCode property BankCode
 * @property string $BankAccount property BankAccount
 * @property-read mixed|VT_PTR $Checks property Checks
 * @property-read IPayments_Invoices $Invoices property Invoices
 * @property-read IPayments_CreditCards $CreditCards property CreditCards
 * @property-read mixed|VT_PTR $AccountPayments property AccountPayments
 * @property string $ProjectCode property ProjectCode
 * @property-read mixed|VT_PTR $Browser User fields for this object.
 * @property float $DeductionPercent property DeductionPercent
 * @property float $DeductionSum property DeductionSum
 * @property-read float $CashSumFC property CashSumFC
 * @property-read float $CashSumSys property CashSumSys
 * @property string $BoeAccount property BoeAccount
 * @property float $BillOfExchangeAmount property BillOfExchangeAmount
 * @property int|VT_USERDEFINED $BillofExchangeStatus property BillofExchangeStatus
 * @property-read mixed|VT_PTR $BillOfExchange property BillOfExchange
 * @property-read float $BillOfExchangeAmountFC property BillOfExchangeAmountFC
 * @property-read float $BillOfExchangeAmountSC property BillOfExchangeAmountSC
 * @property string $BillOfExchangeAgent property BillOfExchangeAgent
 * @property string $WTCode property WTCode
 * @property float $WTAmount property WTAmount
 * @property-read float $WTAmountFC property WTAmountFC
 * @property-read float $WTAmountSC property WTAmountSC
 * @property-read string $WTAccount property WTAccount
 * @property-read float $WTTaxableAmount property WTTaxableAmount
 * @property int|VT_USERDEFINED $Proforma property Proforma
 * @property int|VT_USERDEFINED $PaymentPriority property PaymentPriority
 * @property string $TaxGroup property TaxGroup
 * @property string $PayToBankAccountNo property PayToBankAccountNo
 * @property string $PayToCode property PayToCode
 * @property string $PayToBankCountry property PayToBankCountry
 * @property int|VT_USERDEFINED $IsPayToBank property IsPayToBank
 * @property int|VT_USERDEFINED $DocType property DocType
 * @property int|VT_USERDEFINED $DocObjectCode property DocObjectCode
 * @property-read int $DocEntry property DocEntry
 * @property string $PayToBankCode property PayToBankCode
 * @property string $PayToBankBranch property PayToBankBranch
 * @property float $BankChargeAmount property BankChargeAmount
 * @property-read float $BankChargeAmountInFC property BankChargeAmountInFC
 * @property-read float $BankChargeAmountInSC property BankChargeAmountInSC
 * @property string|VT_DATE $VatDate property VatDate
 * @property string $TransactionCode property TransactionCode
 * @property int|VT_USERDEFINED $PaymentType property PaymentType
 * @property float $TransferRealAmount property TransferRealAmount
 * @property-read float $UnderOverpaymentdifference property UnderOverpaymentdifference
 * @property-read float $UnderOverpaymentdiffSC property UnderOverpaymentdiffSC
 * @property float $WtBaseSum property WtBaseSum
 * @property-read float $WtBaseSumFC property WtBaseSumFC
 * @property-read float $WtBaseSumSC property WtBaseSumSC
 * @property string|VT_DATE $DueDate property DueDate
 * @property int $LocationCode property LocationCode
 * @property-read int|VT_USERDEFINED $Cancelled property Cancelled
 * @property string $ControlAccount property ControlAccount
 * @property-read float $UnderOverpaymentdiffFC property UnderOverpaymentdiffFC
 * @property-read mixed|VT_PTR $PrimaryFormItems property PrimaryFormItems
 * @property-read mixed|VT_PTR $Payments_ApprovalRequests property Payments_ApprovalRequests
 * @property-read int|VT_USERDEFINED $AuthorizationStatus property AuthorizationStatus
 * @property int $BPLID property BPLID
 * @property-read string $BPLName property BPLName
 * @property-read string $VATRegNum property VATRegNum
 * @property-read mixed|VT_PTR $WithholdingTaxDataWTX property WithholdingTaxDataWTX
 * @property-read mixed|VT_PTR $WithholdingTaxCertificates property WithholdingCertificate
 */
class IPayments 
{
	/**
	 * DISPID=1610612736
	 * @param int|VT_USERDEFINED $riid [in]
	 * @param mixed|VT_PTR $ppvObj [out]
	 * @return void 
	 */
	function QueryInterface(
		/* mixed|VT_PTR [26] [in] --> int|VT_USERDEFINED [29]  */ &$riid,
		/* mixed|VT_PTR [26] [out] --> mixed|VT_PTR [26]  */ &$ppvObj 
	)
	{
	}

	/**
	 * DISPID=1610612737
	 * @return string 
	 */
	function AddRef()
	{
	}

	/**
	 * DISPID=1610612738
	 * @return string 
	 */
	function Release()
	{
	}

	/**
	 * DISPID=1610678272
	 * @param int $pctinfo [out]
	 * @return void 
	 */
	function GetTypeInfoCount(
		/* mixed|VT_PTR [26] [out] --> int [23]  */ &$pctinfo 
	)
	{
	}

	/**
	 * DISPID=1610678273
	 * @param int $itinfo [in]
	 * @param string $lcid [in]
	 * @param mixed|VT_PTR $pptinfo [out]
	 * @return void 
	 */
	function GetTypeInfo(
		/* int [23] [in] */ $itinfo,
		/* string [19] [in] */ $lcid,
		/* mixed|VT_PTR [26] [out] --> mixed|VT_PTR [26]  */ &$pptinfo 
	)
	{
	}

	/**
	 * DISPID=1610678274
	 * @param int|VT_USERDEFINED $riid [in]
	 * @param mixed|VT_PTR $rgszNames [in]
	 * @param int $cNames [in]
	 * @param string $lcid [in]
	 * @param int $rgdispid [out]
	 * @return void 
	 */
	function GetIDsOfNames(
		/* mixed|VT_PTR [26] [in] --> int|VT_USERDEFINED [29]  */ &$riid,
		/* mixed|VT_PTR [26] [in] --> mixed|VT_PTR [26]  */ &$rgszNames,
		/* int [23] [in] */ $cNames,
		/* string [19] [in] */ $lcid,
		/* mixed|VT_PTR [26] [out] --> int [3]  */ &$rgdispid 
	)
	{
	}

	/**
	 * DISPID=1610678275
	 * @param int $dispidMember [in]
	 * @param int|VT_USERDEFINED $riid [in]
	 * @param string $lcid [in]
	 * @param string $wFlags [in]
	 * @param int|VT_USERDEFINED $pdispparams [in]
	 * @param variant|VT_VARIANT $pvarResult [out]
	 * @param int|VT_USERDEFINED $pexcepinfo [out]
	 * @param int $puArgErr [out]
	 * @return void 
	 */
	function Invoke(
		/* int [3] [in] */ $dispidMember,
		/* mixed|VT_PTR [26] [in] --> int|VT_USERDEFINED [29]  */ &$riid,
		/* string [19] [in] */ $lcid,
		/* string [18] [in] */ $wFlags,
		/* mixed|VT_PTR [26] [in] --> int|VT_USERDEFINED [29]  */ &$pdispparams,
		/* mixed|VT_PTR [26] [out] --> variant|VT_VARIANT [12]  */ &$pvarResult,
		/* mixed|VT_PTR [26] [out] --> int|VT_USERDEFINED [29]  */ &$pexcepinfo,
		/* mixed|VT_PTR [26] [out] --> int [23]  */ &$puArgErr 
	)
	{
	}

	/**
	 * DISPID=1
	 * @var IUserFields $UserFields [26] property UserFields
	*/
	var $UserFields;

	/**
	 * DISPID=2
	 * @return int 
	 * method Add
	 */
	function Add()
	{
	}

	/**
	 * DISPID=3
	 * @return int 
	 * method Update
	 */
	function Update()
	{
	}

	/**
	 * DISPID=4
	 * @param int $RctEntry 
	 * @return bool 
	 * method GetByKey
	 */
	function GetByKey(
		/* int [3]  */ $RctEntry 
	)
	{
	}

	/**
	 * DISPID=5
	 * @param string $FileName [in][out]
	 * @return void 
	 * method SaveXML
	 */
	function SaveXML(
		/* mixed|VT_PTR [26] [in][out] --> string [8]  */ &$FileName 
	)
	{
	}

	/**
	 * DISPID=6
	 * @var int $DocNum [3] property DocNum
	*/
	var $DocNum;

	/**
	 * DISPID=7
	 * @var int|VT_USERDEFINED $DocTypte [29] property DocTypte
	*/
	var $DocTypte;

	/**
	 * DISPID=8
	 * @var int|VT_USERDEFINED $HandWritten [29] property HandWritten
	*/
	var $HandWritten;

	/**
	 * DISPID=9
	 * @var int|VT_USERDEFINED $Printed [29] property Printed
	*/
	var $Printed;

	/**
	 * DISPID=10
	 * @var string|VT_DATE $DocDate [7] property DocDate
	*/
	var $DocDate;

	/**
	 * DISPID=11
	 * @var string $CardCode [8] property CardCode
	*/
	var $CardCode;

	/**
	 * DISPID=12
	 * @var string $CardName [8] property CardName
	*/
	var $CardName;

	/**
	 * DISPID=13
	 * @var string $Address [8] property Address
	*/
	var $Address;

	/**
	 * DISPID=14
	 * @var string $CashAccount [8] property CashAccount
	*/
	var $CashAccount;

	/**
	 * DISPID=15
	 * @var string $DocCurrency [8] property DocCurrency
	*/
	var $DocCurrency;

	/**
	 * DISPID=16
	 * @var float $CashSum [5] property CashSum
	*/
	var $CashSum;

	/**
	 * DISPID=17
	 * @var string $CheckAccount [8] property CheckAccount
	*/
	var $CheckAccount;

	/**
	 * DISPID=18
	 * @var string $TransferAccount [8] property TransferAccount
	*/
	var $TransferAccount;

	/**
	 * DISPID=19
	 * @var float $TransferSum [5] property TransferSum
	*/
	var $TransferSum;

	/**
	 * DISPID=20
	 * @var string|VT_DATE $TransferDate [7] property TransferDate
	*/
	var $TransferDate;

	/**
	 * DISPID=21
	 * @var string $TransferReference [8] property TransferReference
	*/
	var $TransferReference;

	/**
	 * DISPID=22
	 * @var int|VT_USERDEFINED $LocalCurrency [29] property LocalCurrency
	*/
	var $LocalCurrency;

	/**
	 * DISPID=23
	 * @var float $DocRate [5] property DocRate
	*/
	var $DocRate;

	/**
	 * DISPID=24
	 * @var string $Reference1 [8] property Reference1
	*/
	var $Reference1;

	/**
	 * DISPID=25
	 * @var string $Reference2 [8] property Reference2
	*/
	var $Reference2;

	/**
	 * DISPID=26
	 * @var string $CounterReference [8] property CounterReference
	*/
	var $CounterReference;

	/**
	 * DISPID=27
	 * @var string $Remarks [8] property Remarks
	*/
	var $Remarks;

	/**
	 * DISPID=28
	 * @var string $JournalRemarks [8] property JournalRemarks
	*/
	var $JournalRemarks;

	/**
	 * DISPID=30
	 * @var int $ContactPersonCode [3] property ContactPersonCode
	*/
	var $ContactPersonCode;

	/**
	 * DISPID=31
	 * @var int|VT_USERDEFINED $ApplyVAT [29] property ApplyVAT
	*/
	var $ApplyVAT;

	/**
	 * DISPID=32
	 * @var string|VT_DATE $TaxDate [7] property TaxDate
	*/
	var $TaxDate;

	/**
	 * DISPID=33
	 * @var int $Series [3] property Series
	*/
	var $Series;

	/**
	 * DISPID=34
	 * @var string $BankCode [8] property BankCode
	*/
	var $BankCode;

	/**
	 * DISPID=35
	 * @var string $BankAccount [8] property BankAccount
	*/
	var $BankAccount;

	/**
	 * DISPID=36
	 * @var mixed|VT_PTR $Checks [26] property Checks
	*/
	var $Checks;

	/**
	 * DISPID=37
	 * @var IPayments_Invoices $Invoices [26] property Invoices
	*/
	var $Invoices;

	/**
	 * DISPID=38
	 * @var IPayments_CreditCards $CreditCards [26] property CreditCards
	*/
	var $CreditCards;

	/**
	 * DISPID=39
	 * @var mixed|VT_PTR $AccountPayments [26] property AccountPayments
	*/
	var $AccountPayments;

	/**
	 * DISPID=41
	 * @var string $ProjectCode [8] property ProjectCode
	*/
	var $ProjectCode;

	/**
	 * DISPID=42
	 * @return int 
	 * method Remove
	 */
	function Remove()
	{
	}

	/**
	 * DISPID=43
	 * @return int 
	 * method Cancel
	 */
	function Cancel()
	{
	}

	/**
	 * DISPID=44
	 * @return int 
	 * method Close
	 */
	function Close()
	{
	}

	/**
	 * DISPID=45
	 * @var mixed|VT_PTR $Browser [26] User fields for this object.
	*/
	var $Browser;

	/**
	 * DISPID=47
	 * @var float $DeductionPercent [5] property DeductionPercent
	*/
	var $DeductionPercent;

	/**
	 * DISPID=48
	 * @var float $DeductionSum [5] property DeductionSum
	*/
	var $DeductionSum;

	/**
	 * DISPID=49
	 * @var float $CashSumFC [5] property CashSumFC
	*/
	var $CashSumFC;

	/**
	 * DISPID=50
	 * @var float $CashSumSys [5] property CashSumSys
	*/
	var $CashSumSys;

	/**
	 * DISPID=51
	 * @var string $BoeAccount [8] property BoeAccount
	*/
	var $BoeAccount;

	/**
	 * DISPID=52
	 * @var float $BillOfExchangeAmount [5] property BillOfExchangeAmount
	*/
	var $BillOfExchangeAmount;

	/**
	 * DISPID=53
	 * @var int|VT_USERDEFINED $BillofExchangeStatus [29] property BillofExchangeStatus
	*/
	var $BillofExchangeStatus;

	/**
	 * DISPID=54
	 * @var mixed|VT_PTR $BillOfExchange [26] property BillOfExchange
	*/
	var $BillOfExchange;

	/**
	 * DISPID=55
	 * @var float $BillOfExchangeAmountFC [5] property BillOfExchangeAmountFC
	*/
	var $BillOfExchangeAmountFC;

	/**
	 * DISPID=56
	 * @var float $BillOfExchangeAmountSC [5] property BillOfExchangeAmountSC
	*/
	var $BillOfExchangeAmountSC;

	/**
	 * DISPID=57
	 * @var string $BillOfExchangeAgent [8] property BillOfExchangeAgent
	*/
	var $BillOfExchangeAgent;

	/**
	 * DISPID=58
	 * @var string $WTCode [8] property WTCode
	*/
	var $WTCode;

	/**
	 * DISPID=59
	 * @var float $WTAmount [5] property WTAmount
	*/
	var $WTAmount;

	/**
	 * DISPID=60
	 * @var float $WTAmountFC [5] property WTAmountFC
	*/
	var $WTAmountFC;

	/**
	 * DISPID=61
	 * @var float $WTAmountSC [5] property WTAmountSC
	*/
	var $WTAmountSC;

	/**
	 * DISPID=62
	 * @var string $WTAccount [8] property WTAccount
	*/
	var $WTAccount;

	/**
	 * DISPID=63
	 * @var float $WTTaxableAmount [5] property WTTaxableAmount
	*/
	var $WTTaxableAmount;

	/**
	 * DISPID=64
	 * @var int|VT_USERDEFINED $Proforma [29] property Proforma
	*/
	var $Proforma;

	/**
	 * DISPID=65
	 * @var int|VT_USERDEFINED $PaymentPriority [29] property PaymentPriority
	*/
	var $PaymentPriority;

	/**
	 * DISPID=66
	 * @var string $TaxGroup [8] property TaxGroup
	*/
	var $TaxGroup;

	/**
	 * DISPID=67
	 * @var string $PayToBankAccountNo [8] property PayToBankAccountNo
	*/
	var $PayToBankAccountNo;

	/**
	 * DISPID=68
	 * @var string $PayToCode [8] property PayToCode
	*/
	var $PayToCode;

	/**
	 * DISPID=69
	 * @var string $PayToBankCountry [8] property PayToBankCountry
	*/
	var $PayToBankCountry;

	/**
	 * DISPID=70
	 * @var int|VT_USERDEFINED $IsPayToBank [29] property IsPayToBank
	*/
	var $IsPayToBank;

	/**
	 * DISPID=71
	 * @var int|VT_USERDEFINED $DocType [29] property DocType
	*/
	var $DocType;

	/**
	 * DISPID=72
	 * @var int|VT_USERDEFINED $DocObjectCode [29] property DocObjectCode
	*/
	var $DocObjectCode;

	/**
	 * DISPID=73
	 * @var int $DocEntry [3] property DocEntry
	*/
	var $DocEntry;

	/**
	 * DISPID=74
	 * @var string $PayToBankCode [8] property PayToBankCode
	*/
	var $PayToBankCode;

	/**
	 * DISPID=75
	 * @var string $PayToBankBranch [8] property PayToBankBranch
	*/
	var $PayToBankBranch;

	/**
	 * DISPID=76
	 * @return string 
	 * Get the object's data in xml format.
	 */
	function GetAsXML()
	{
	}

	/**
	 * DISPID=77
	 * @param string $FileName [in]
	 * @return void 
	 * Save the object's data in xml format.
	 */
	function SaveToFile(
		/* string [8] [in] */ $FileName 
	)
	{
	}

	/**
	 * DISPID=78
	 * @var float $BankChargeAmount [5] property BankChargeAmount
	*/
	var $BankChargeAmount;

	/**
	 * DISPID=79
	 * @var float $BankChargeAmountInFC [5] property BankChargeAmountInFC
	*/
	var $BankChargeAmountInFC;

	/**
	 * DISPID=80
	 * @var float $BankChargeAmountInSC [5] property BankChargeAmountInSC
	*/
	var $BankChargeAmountInSC;

	/**
	 * DISPID=81
	 * @var string|VT_DATE $VatDate [7] property VatDate
	*/
	var $VatDate;

	/**
	 * DISPID=82
	 * @var string $TransactionCode [8] property TransactionCode
	*/
	var $TransactionCode;

	/**
	 * DISPID=83
	 * @var int|VT_USERDEFINED $PaymentType [29] property PaymentType
	*/
	var $PaymentType;

	/**
	 * DISPID=84
	 * @var float $TransferRealAmount [5] property TransferRealAmount
	*/
	var $TransferRealAmount;

	/**
	 * DISPID=85
	 * @var float $UnderOverpaymentdifference [5] property UnderOverpaymentdifference
	*/
	var $UnderOverpaymentdifference;

	/**
	 * DISPID=86
	 * @var float $UnderOverpaymentdiffSC [5] property UnderOverpaymentdiffSC
	*/
	var $UnderOverpaymentdiffSC;

	/**
	 * DISPID=87
	 * @var float $WtBaseSum [5] property WtBaseSum
	*/
	var $WtBaseSum;

	/**
	 * DISPID=88
	 * @var float $WtBaseSumFC [5] property WtBaseSumFC
	*/
	var $WtBaseSumFC;

	/**
	 * DISPID=89
	 * @var float $WtBaseSumSC [5] property WtBaseSumSC
	*/
	var $WtBaseSumSC;

	/**
	 * DISPID=90
	 * @var string|VT_DATE $DueDate [7] property DueDate
	*/
	var $DueDate;

	/**
	 * DISPID=91
	 * @var int $LocationCode [3] property LocationCode
	*/
	var $LocationCode;

	/**
	 * DISPID=92
	 * @var int|VT_USERDEFINED $Cancelled [29] property Cancelled
	*/
	var $Cancelled;

	/**
	 * DISPID=100
	 * @var string $ControlAccount [8] property ControlAccount
	*/
	var $ControlAccount;

	/**
	 * DISPID=101
	 * @var float $UnderOverpaymentdiffFC [5] property UnderOverpaymentdiffFC
	*/
	var $UnderOverpaymentdiffFC;

	/**
	 * DISPID=102
	 * @var mixed|VT_PTR $PrimaryFormItems [26] property PrimaryFormItems
	*/
	var $PrimaryFormItems;

	/**
	 * DISPID=103
	 * @return int 
	 * method SaveDraftToDocument
	 */
	function SaveDraftToDocument()
	{
	}

	/**
	 * DISPID=104
	 * @return int 
	 * method GetApprovalTemplates
	 */
	function GetApprovalTemplates()
	{
	}

	/**
	 * DISPID=105
	 * @var mixed|VT_PTR $Payments_ApprovalRequests [26] property Payments_ApprovalRequests
	*/
	var $Payments_ApprovalRequests;

	/**
	 * DISPID=106
	 * @var int|VT_USERDEFINED $AuthorizationStatus [29] property AuthorizationStatus
	*/
	var $AuthorizationStatus;

	/**
	 * DISPID=111
	 * @var int $BPLID [3] property BPLID
	*/
	var $BPLID;

	/**
	 * DISPID=112
	 * @var string $BPLName [8] property BPLName
	*/
	var $BPLName;

	/**
	 * DISPID=113
	 * @var string $VATRegNum [8] property VATRegNum
	*/
	var $VATRegNum;

	/**
	 * DISPID=114
	 * @return int 
	 * method CancelbyCurrentSystemDate
	 */
	function CancelbyCurrentSystemDate()
	{
	}

	/**
	 * DISPID=115
	 * @var mixed|VT_PTR $WithholdingTaxDataWTX [26] property WithholdingTaxDataWTX
	*/
	var $WithholdingTaxDataWTX;

	/**
	 * DISPID=116
	 * @var mixed|VT_PTR $WithholdingTaxCertificates [26] property WithholdingCertificate
	*/
	var $WithholdingTaxCertificates;

}