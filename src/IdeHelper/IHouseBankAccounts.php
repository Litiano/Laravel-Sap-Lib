<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class IHouseBankAccounts
 * GUID={B83BBBFA-E5AF-48B4-B147-2DE092BF1E64}
 *
 * @property-read mixed|VT_PTR $Browser Get browser
 * @property-read IUserFields $UserFields Get User Fields
 * @property-read string $BankCode property BankCode
 * @property string $AccNo property AccNo
 * @property string $Branch property Branch
 * @property int $NextCheckNo property NextCheckNo
 * @property string $GLAccount property GLAccount
 * @property string $Street property Street
 * @property string $Block property Block
 * @property string $ZipCode property ZipCode
 * @property string $City property City
 * @property string $County property County
 * @property-read string $Country property Country
 * @property string $State property State
 * @property int|VT_USERDEFINED $BISR property BISR
 * @property string $ControlKey property ControlKey
 * @property string $UserNo1 property UserNo1
 * @property string $UserNo2 property UserNo2
 * @property string $UserNo3 property UserNo3
 * @property string $UserNo4 property UserNo4
 * @property string $IBAN property IBAN
 * @property string $DebtofDiscountedBillofExc property DebtofDiscountedBillofExc
 * @property int $ToleranceDays property ToleranceDays
 * @property float $MinAmountofBillofExchang property MinAmountofBillofExchang
 * @property float $MaxAmountofBillofExchan property MaxAmountofBillofExchan
 * @property float $DiscountLimit property DiscountLimit
 * @property int $DaysInAdvance property DaysInAdvance
 * @property string $BankonCollection property BankonCollection
 * @property string $BankonDiscounted property BankonDiscounted
 * @property string $GLInterimAccount property GLInterimAccount
 * @property-read int $AbsoluteEntry property AbsoluteEntry
 * @property int $BankKey property BankKey
 * @property int|VT_USERDEFINED $LockChecksPrinting property LockChecksPrinting
 * @property string $TemplateName property TemplateName
 * @property void $MaximumLines property MaximumLines
 * @property int|VT_USERDEFINED $PrintOn property PrintOn
 * @property string $CustomerIdNumber property CustomerIdNumber
 * @property string $ISRBillerID property ISRBillerID
 * @property int $ISRType property ISRType
 * @property string $AccountCheckDigit property AccountCheckDigit
 * @property int $OurNumber property OurNumber
 * @property string $AgreementNumber property AgreementNumber
 * @property string $AddressType property AddrType
 * @property string $StreetNo property StreetNo
 * @property string $Building property Building
 * @property int $IncomingPaymentSeries property IncomingPaymentSeries
 * @property int $OutgoingPaymentSeries property OutgoingPaymentSeries
 * @property int $JournalEntrySeries property JournalEntrySeries
 * @property string $ImportFileName property ImportFileName
 * @property string $AccountName property AccountName
 * @property string $BICSwiftCode property BICSwiftCode
 * @property string $FineAccount property FineAccount
 * @property string $InterestAccount property InterestAccount
 * @property string $DiscountAccount property DiscountAccount
 * @property string $ServiceFeeAccount property ServiceFeeAccount
 * @property string $IOFTaxAccount property IOFTaxAccount
 * @property string $OtherExpensesAccount property OtherExpensesAccount
 * @property string $OtherIncomesAccount property OtherIncomesAccount
 * @property string $RetornoFileName property RetornoFileName
 * @property string $BranchCheckDigit property BranchCheckDigit
 * @property string $CollectionCode property CollectionCode
 * @property int $FileSeqNextNumber property FileSeqNextNumber
 */
class IHouseBankAccounts 
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
	 * @param string $bstrFileName [in]
	 * @return void 
	 * SaveToFile
	 */
	function SaveToFile(
		/* string [8] [in] */ $bstrFileName 
	)
	{
	}

	/**
	 * DISPID=2
	 * @param string $pbstrFileName [in][out]
	 * @return void 
	 * method SaveXML
	 */
	function SaveXML(
		/* mixed|VT_PTR [26] [in][out] --> string [8]  */ &$pbstrFileName 
	)
	{
	}

	/**
	 * DISPID=3
	 * @return string 
	 * GetAsXML
	 */
	function GetAsXML()
	{
	}

	/**
	 * DISPID=4
	 * @var mixed|VT_PTR $Browser [26] Get browser
	*/
	var $Browser;

	/**
	 * DISPID=5
	 * @var IUserFields $UserFields [26] Get User Fields
	*/
	var $UserFields;

	/**
	 * DISPID=6
	 * @param int $lAbsEntry [in]
	 * @return bool 
	 * GetByKey
	 */
	function GetByKey(
		/* int [3] [in] */ $lAbsEntry 
	)
	{
	}

	/**
	 * DISPID=7
	 * @return int 
	 * method Add
	 */
	function Add()
	{
	}

	/**
	 * DISPID=8
	 * @return int 
	 * method Update
	 */
	function Update()
	{
	}

	/**
	 * DISPID=9
	 * @return int 
	 * method Remove
	 */
	function Remove()
	{
	}

	/**
	 * DISPID=10
	 * @var string $BankCode [8] property BankCode
	*/
	var $BankCode;

	/**
	 * DISPID=11
	 * @var string $AccNo [8] property AccNo
	*/
	var $AccNo;

	/**
	 * DISPID=12
	 * @var string $Branch [8] property Branch
	*/
	var $Branch;

	/**
	 * DISPID=13
	 * @var int $NextCheckNo [3] property NextCheckNo
	*/
	var $NextCheckNo;

	/**
	 * DISPID=14
	 * @var string $GLAccount [8] property GLAccount
	*/
	var $GLAccount;

	/**
	 * DISPID=15
	 * @var string $Street [8] property Street
	*/
	var $Street;

	/**
	 * DISPID=16
	 * @var string $Block [8] property Block
	*/
	var $Block;

	/**
	 * DISPID=17
	 * @var string $ZipCode [8] property ZipCode
	*/
	var $ZipCode;

	/**
	 * DISPID=18
	 * @var string $City [8] property City
	*/
	var $City;

	/**
	 * DISPID=19
	 * @var string $County [8] property County
	*/
	var $County;

	/**
	 * DISPID=20
	 * @var string $Country [8] property Country
	*/
	var $Country;

	/**
	 * DISPID=21
	 * @var string $State [8] property State
	*/
	var $State;

	/**
	 * DISPID=22
	 * @var int|VT_USERDEFINED $BISR [29] property BISR
	*/
	var $BISR;

	/**
	 * DISPID=23
	 * @var string $ControlKey [8] property ControlKey
	*/
	var $ControlKey;

	/**
	 * DISPID=24
	 * @var string $UserNo1 [8] property UserNo1
	*/
	var $UserNo1;

	/**
	 * DISPID=25
	 * @var string $UserNo2 [8] property UserNo2
	*/
	var $UserNo2;

	/**
	 * DISPID=26
	 * @var string $UserNo3 [8] property UserNo3
	*/
	var $UserNo3;

	/**
	 * DISPID=27
	 * @var string $UserNo4 [8] property UserNo4
	*/
	var $UserNo4;

	/**
	 * DISPID=28
	 * @var string $IBAN [8] property IBAN
	*/
	var $IBAN;

	/**
	 * DISPID=29
	 * @var string $DebtofDiscountedBillofExc [8] property DebtofDiscountedBillofExc
	*/
	var $DebtofDiscountedBillofExc;

	/**
	 * DISPID=30
	 * @var int $ToleranceDays [3] property ToleranceDays
	*/
	var $ToleranceDays;

	/**
	 * DISPID=31
	 * @var float $MinAmountofBillofExchang [5] property MinAmountofBillofExchang
	*/
	var $MinAmountofBillofExchang;

	/**
	 * DISPID=32
	 * @var float $MaxAmountofBillofExchan [5] property MaxAmountofBillofExchan
	*/
	var $MaxAmountofBillofExchan;

	/**
	 * DISPID=33
	 * @var float $DiscountLimit [5] property DiscountLimit
	*/
	var $DiscountLimit;

	/**
	 * DISPID=34
	 * @var int $DaysInAdvance [3] property DaysInAdvance
	*/
	var $DaysInAdvance;

	/**
	 * DISPID=35
	 * @var string $BankonCollection [8] property BankonCollection
	*/
	var $BankonCollection;

	/**
	 * DISPID=36
	 * @var string $BankonDiscounted [8] property BankonDiscounted
	*/
	var $BankonDiscounted;

	/**
	 * DISPID=37
	 * @var string $GLInterimAccount [8] property GLInterimAccount
	*/
	var $GLInterimAccount;

	/**
	 * DISPID=41
	 * @var int $AbsoluteEntry [3] property AbsoluteEntry
	*/
	var $AbsoluteEntry;

	/**
	 * DISPID=42
	 * @var int $BankKey [3] property BankKey
	*/
	var $BankKey;

	/**
	 * DISPID=43
	 * @var int|VT_USERDEFINED $LockChecksPrinting [29] property LockChecksPrinting
	*/
	var $LockChecksPrinting;

	/**
	 * DISPID=44
	 * @var string $TemplateName [8] property TemplateName
	*/
	var $TemplateName;

	/**
	 * DISPID=46
	 * @var void $MaximumLines [24] property MaximumLines
	*/
	var $MaximumLines;

	/**
	 * DISPID=47
	 * @var int|VT_USERDEFINED $PrintOn [29] property PrintOn
	*/
	var $PrintOn;

	/**
	 * DISPID=48
	 * @var string $CustomerIdNumber [8] property CustomerIdNumber
	*/
	var $CustomerIdNumber;

	/**
	 * DISPID=49
	 * @var string $ISRBillerID [8] property ISRBillerID
	*/
	var $ISRBillerID;

	/**
	 * DISPID=50
	 * @var int $ISRType [3] property ISRType
	*/
	var $ISRType;

	/**
	 * DISPID=51
	 * @var string $AccountCheckDigit [8] property AccountCheckDigit
	*/
	var $AccountCheckDigit;

	/**
	 * DISPID=52
	 * @var int $OurNumber [3] property OurNumber
	*/
	var $OurNumber;

	/**
	 * DISPID=53
	 * @var string $AgreementNumber [8] property AgreementNumber
	*/
	var $AgreementNumber;

	/**
	 * DISPID=54
	 * @var string $AddressType [8] property AddrType
	*/
	var $AddressType;

	/**
	 * DISPID=55
	 * @var string $StreetNo [8] property StreetNo
	*/
	var $StreetNo;

	/**
	 * DISPID=56
	 * @var string $Building [8] property Building
	*/
	var $Building;

	/**
	 * DISPID=57
	 * @var int $IncomingPaymentSeries [3] property IncomingPaymentSeries
	*/
	var $IncomingPaymentSeries;

	/**
	 * DISPID=58
	 * @var int $OutgoingPaymentSeries [3] property OutgoingPaymentSeries
	*/
	var $OutgoingPaymentSeries;

	/**
	 * DISPID=59
	 * @var int $JournalEntrySeries [3] property JournalEntrySeries
	*/
	var $JournalEntrySeries;

	/**
	 * DISPID=60
	 * @var string $ImportFileName [8] property ImportFileName
	*/
	var $ImportFileName;

	/**
	 * DISPID=61
	 * @var string $AccountName [8] property AccountName
	*/
	var $AccountName;

	/**
	 * DISPID=62
	 * @var string $BICSwiftCode [8] property BICSwiftCode
	*/
	var $BICSwiftCode;

	/**
	 * DISPID=63
	 * @var string $FineAccount [8] property FineAccount
	*/
	var $FineAccount;

	/**
	 * DISPID=64
	 * @var string $InterestAccount [8] property InterestAccount
	*/
	var $InterestAccount;

	/**
	 * DISPID=65
	 * @var string $DiscountAccount [8] property DiscountAccount
	*/
	var $DiscountAccount;

	/**
	 * DISPID=66
	 * @var string $ServiceFeeAccount [8] property ServiceFeeAccount
	*/
	var $ServiceFeeAccount;

	/**
	 * DISPID=67
	 * @var string $IOFTaxAccount [8] property IOFTaxAccount
	*/
	var $IOFTaxAccount;

	/**
	 * DISPID=68
	 * @var string $OtherExpensesAccount [8] property OtherExpensesAccount
	*/
	var $OtherExpensesAccount;

	/**
	 * DISPID=69
	 * @var string $OtherIncomesAccount [8] property OtherIncomesAccount
	*/
	var $OtherIncomesAccount;

	/**
	 * DISPID=70
	 * @var string $RetornoFileName [8] property RetornoFileName
	*/
	var $RetornoFileName;

	/**
	 * DISPID=71
	 * @var string $BranchCheckDigit [8] property BranchCheckDigit
	*/
	var $BranchCheckDigit;

	/**
	 * DISPID=72
	 * @var string $CollectionCode [8] property CollectionCode
	*/
	var $CollectionCode;

	/**
	 * DISPID=73
	 * @var int $FileSeqNextNumber [3] property FileSeqNextNumber
	*/
	var $FileSeqNextNumber;

}