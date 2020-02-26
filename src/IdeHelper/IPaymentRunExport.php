<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class IPaymentRunExport
 * GUID={9020ED56-6B7D-4FAC-8D93-B185D1E65A59}
 *
 * @property-read mixed|VT_PTR $Lines property Lines
 * @property-read mixed|VT_PTR $Browser User fields for this object.
 * @property-read string|VT_DATE $RunDate property Date
 * @property-read string $VendorNum property Vendor Number
 * @property-read string $CustomerNum property Customer Number
 * @property-read string $PaymentMethod property Payment Method
 * @property-read int $DocNum property Payment Document No.
 * @property-read string|VT_DATE $FiscalYear property Fiscal Year
 * @property-read string $Countery property Country
 * @property-read string $CompanyTaxNum property Company Tax Number
 * @property-read string $PayeeName property Payee Name
 * @property-read string $PayeePostalCode property Payee Zip Code
 * @property-read string $PayeeCity property Payee City
 * @property-read string $PayeeStreet property Payee Street
 * @property-read string $PayeeCountry property Payee Country
 * @property-read string $PayeeState property Payee State
 * @property-read string $PayeeBankName property Payee Bank Name
 * @property-read string $PayeeBankZip property Payee Bank Zip Code
 * @property-read string $PayeeBankCity property Payee Bank City
 * @property-read string $PayeeBankStreet property Payee Bank Street
 * @property-read string $PayeeBankCountry property Payee Bank Country
 * @property-read string $PayeeBankAccount property Payee Bank Account
 * @property-read string $PayeeBankCode property Payee Bank Code
 * @property-read string $PayeeBankCtrlKey property Payee Bank Control Key
 * @property-read string $PayeeBankSwiftNum property Payee Bank Swift Code
 * @property-read string $PayeeBankIBAN property Payee Bank IBAN
 * @property-read string|VT_DATE $PostingDate property Payment Posting Date
 * @property-read string $BankAccount property Payment Bank Account
 * @property-read string $BankCountry property Payment Bank Country
 * @property-read string $BankCode property Payment Bank Code
 * @property-read string $BankIBAN property Payment Bank IBAN
 * @property-read string $GLAccount property Payment G/L Account
 * @property-read string $Currency property Main Currency
 * @property-read float $DocAmountLocal property Payment Document Amount (LC)
 * @property-read string $DocCurrnecy property Payment Document Currency
 * @property-read float $DocAmountForign property Payment Document Amount (FC)
 * @property-read float $DocCashDiscount property Cash Discount in Payment Docum (LC)
 * @property-read float $DocCashDiscountForign property Cash Discount in Payment Docum (FC)
 * @property-read int $DocNumOffieldPaid property Number of Items Paid
 * @property-read float $DocRate property Payment Document Exchange Rate
 * @property-read int $WizCode property Payment Wizard Code
 * @property-read int|VT_USERDEFINED $CollectionAuthorization property CollectionAuthorization
 * @property-read int|VT_USERDEFINED $PayeeBankPostOffice property PayeeBankPostOffice
 * @property-read int $PayeeBankNextCheckNumber property PayeeBankNextCheckNumber
 * @property-read int|VT_USERDEFINED $PayeeBankHouseBank property PayeeBankHouseBank
 * @property-read string $PayeeBankBlock property PayeeBankBlock
 * @property-read string $PayeeBankCounty property PayeeBankCounty
 * @property-read string $PayeeBankState property PayeeBankState
 * @property-read int|VT_USERDEFINED $PayeeBankBISR property PayeeBankBISR
 * @property-read string $PayeeBankUserNum1 property PayeeBankUserNum1
 * @property-read string $PayeeBankUserNum2 property PayeeBankUserNum2
 * @property-read string $PayeeBankUserNum3 property PayeeBankUserNum3
 * @property-read string $PayeeBankUserNum4 property PayeeBankUserNum4
 * @property-read string $InstructionKey property InstructionKey
 * @property-read string $PaymentFormat property PaymentFormat
 * @property-read string $CompanyName property CompanyName
 * @property-read string $CompanyAddress property CompanyAddress
 * @property-read int|VT_USERDEFINED $Status property Status
 * @property-read string $CompIsrBillerID property CompIsrBillerID
 * @property-read string $VendorIsrBillerID property VendorIsrBillerID
 * @property-read string $AdditionalIdNumber property AdditionalIdNumber
 * @property-read string $OrganizationNumber property OrganizationNumber
 * @property-read string $PayeeBankBranch property PayeeBankBranch
 * @property-read string $PaymentBankBranch property PaymentBankBranch
 * @property-read string $UserName property UserName
 * @property-read string $UserEMail property UserEMail
 * @property-read string $UserMobilePhoneNumber property UserMobilePhoneNumber
 * @property-read string $UserFaxNumber property UserFaxNumber
 * @property-read int $UserDepartment property UserDepartment
 * @property-read int|VT_USERDEFINED $DebitMemo property DebitMemo
 * @property-read int|VT_USERDEFINED $EUInternalTransfer property EUInternalTransfer
 * @property-read string $FilePath property FilePath
 * @property-read string $OrderingParty property OrderingParty
 * @property-read string $PaymentBankControlKey property PaymentBankControlKey
 * @property-read string $PayeeTaxNumber property PayeeTaxNumber
 * @property-read string $PaymentKeyCode property PaymentKeyCode
 * @property-read string $PayeeReferenceDetails property PayeeReferenceDetails
 * @property-read string $FormatName property FormatName
 * @property-read int|VT_USERDEFINED $PaymentDonewithCheck property PaymentDonewithCheck
 * @property-read string $CompanyBlock property CompanyBlock
 * @property-read string $CompanyCity property CompanyCity
 * @property-read string $CompanyCounty property CompanyCounty
 * @property-read string $CompanyState property CompanyState
 * @property-read string $CompanyStreet property CompanyStreet
 * @property-read string $CompanyZipCode property CompanyZipCode
 * @property-read string $PaymentBankCharges property PaymentBankCharges
 * @property-read string $PaymentBankUserNo1 property PaymentBankUserNo1
 * @property-read string $PaymentBankUserNo2 property PaymentBankUserNo2
 * @property-read string $PaymentBankUserNo3 property PaymentBankUserNo3
 * @property-read string $PaymentBankUserNo4 property PaymentBankUserNo4
 * @property-read string $PaymentBankChargesAllocationCode property PaymentBankChargesAllocationCode
 * @property-read int $PaymentOrderNum property PaymentOrderNum
 * @property-read string $FreeText1 property FreeText1
 * @property-read string $FreeText2 property FreeText2
 * @property-read string $FreeText3 property FreeText3
 * @property-read int|VT_USERDEFINED $RowType property RowType
 * @property-read string $UIPCode property UIPCode
 */
class IPaymentRunExport 
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
	 * @param int $PaymentRunExportCode 
	 * @return bool 
	 * method GetByKey
	 */
	function GetByKey(
		/* int [3]  */ $PaymentRunExportCode 
	)
	{
	}

	/**
	 * DISPID=2
	 * @var mixed|VT_PTR $Lines [26] property Lines
	*/
	var $Lines;

	/**
	 * DISPID=3
	 * @var mixed|VT_PTR $Browser [26] User fields for this object.
	*/
	var $Browser;

	/**
	 * DISPID=4
	 * @param string $FileName [in][out]
	 * @return void 
	 * Save the object into xml file
	 */
	function SaveXML(
		/* mixed|VT_PTR [26] [in][out] --> string [8]  */ &$FileName 
	)
	{
	}

	/**
	 * DISPID=5
	 * @var string|VT_DATE $RunDate [7] property Date
	*/
	var $RunDate;

	/**
	 * DISPID=6
	 * @var string $VendorNum [8] property Vendor Number
	*/
	var $VendorNum;

	/**
	 * DISPID=7
	 * @var string $CustomerNum [8] property Customer Number
	*/
	var $CustomerNum;

	/**
	 * DISPID=8
	 * @var string $PaymentMethod [8] property Payment Method
	*/
	var $PaymentMethod;

	/**
	 * DISPID=9
	 * @var int $DocNum [3] property Payment Document No.
	*/
	var $DocNum;

	/**
	 * DISPID=10
	 * @var string|VT_DATE $FiscalYear [7] property Fiscal Year
	*/
	var $FiscalYear;

	/**
	 * DISPID=11
	 * @var string $Countery [8] property Country
	*/
	var $Countery;

	/**
	 * DISPID=12
	 * @var string $CompanyTaxNum [8] property Company Tax Number
	*/
	var $CompanyTaxNum;

	/**
	 * DISPID=13
	 * @var string $PayeeName [8] property Payee Name
	*/
	var $PayeeName;

	/**
	 * DISPID=14
	 * @var string $PayeePostalCode [8] property Payee Zip Code
	*/
	var $PayeePostalCode;

	/**
	 * DISPID=15
	 * @var string $PayeeCity [8] property Payee City
	*/
	var $PayeeCity;

	/**
	 * DISPID=16
	 * @var string $PayeeStreet [8] property Payee Street
	*/
	var $PayeeStreet;

	/**
	 * DISPID=17
	 * @var string $PayeeCountry [8] property Payee Country
	*/
	var $PayeeCountry;

	/**
	 * DISPID=18
	 * @var string $PayeeState [8] property Payee State
	*/
	var $PayeeState;

	/**
	 * DISPID=19
	 * @var string $PayeeBankName [8] property Payee Bank Name
	*/
	var $PayeeBankName;

	/**
	 * DISPID=20
	 * @var string $PayeeBankZip [8] property Payee Bank Zip Code
	*/
	var $PayeeBankZip;

	/**
	 * DISPID=21
	 * @var string $PayeeBankCity [8] property Payee Bank City
	*/
	var $PayeeBankCity;

	/**
	 * DISPID=22
	 * @var string $PayeeBankStreet [8] property Payee Bank Street
	*/
	var $PayeeBankStreet;

	/**
	 * DISPID=23
	 * @var string $PayeeBankCountry [8] property Payee Bank Country
	*/
	var $PayeeBankCountry;

	/**
	 * DISPID=24
	 * @var string $PayeeBankAccount [8] property Payee Bank Account
	*/
	var $PayeeBankAccount;

	/**
	 * DISPID=25
	 * @var string $PayeeBankCode [8] property Payee Bank Code
	*/
	var $PayeeBankCode;

	/**
	 * DISPID=26
	 * @var string $PayeeBankCtrlKey [8] property Payee Bank Control Key
	*/
	var $PayeeBankCtrlKey;

	/**
	 * DISPID=27
	 * @var string $PayeeBankSwiftNum [8] property Payee Bank Swift Code
	*/
	var $PayeeBankSwiftNum;

	/**
	 * DISPID=28
	 * @var string $PayeeBankIBAN [8] property Payee Bank IBAN
	*/
	var $PayeeBankIBAN;

	/**
	 * DISPID=29
	 * @var string|VT_DATE $PostingDate [7] property Payment Posting Date
	*/
	var $PostingDate;

	/**
	 * DISPID=30
	 * @var string $BankAccount [8] property Payment Bank Account
	*/
	var $BankAccount;

	/**
	 * DISPID=31
	 * @var string $BankCountry [8] property Payment Bank Country
	*/
	var $BankCountry;

	/**
	 * DISPID=32
	 * @var string $BankCode [8] property Payment Bank Code
	*/
	var $BankCode;

	/**
	 * DISPID=33
	 * @var string $BankIBAN [8] property Payment Bank IBAN
	*/
	var $BankIBAN;

	/**
	 * DISPID=34
	 * @var string $GLAccount [8] property Payment G/L Account
	*/
	var $GLAccount;

	/**
	 * DISPID=35
	 * @var string $Currency [8] property Main Currency
	*/
	var $Currency;

	/**
	 * DISPID=36
	 * @var float $DocAmountLocal [5] property Payment Document Amount (LC)
	*/
	var $DocAmountLocal;

	/**
	 * DISPID=37
	 * @var string $DocCurrnecy [8] property Payment Document Currency
	*/
	var $DocCurrnecy;

	/**
	 * DISPID=38
	 * @var float $DocAmountForign [5] property Payment Document Amount (FC)
	*/
	var $DocAmountForign;

	/**
	 * DISPID=39
	 * @var float $DocCashDiscount [5] property Cash Discount in Payment Docum (LC)
	*/
	var $DocCashDiscount;

	/**
	 * DISPID=40
	 * @var float $DocCashDiscountForign [5] property Cash Discount in Payment Docum (FC)
	*/
	var $DocCashDiscountForign;

	/**
	 * DISPID=41
	 * @var int $DocNumOffieldPaid [3] property Number of Items Paid
	*/
	var $DocNumOffieldPaid;

	/**
	 * DISPID=42
	 * @var float $DocRate [5] property Payment Document Exchange Rate
	*/
	var $DocRate;

	/**
	 * DISPID=44
	 * @var int $WizCode [3] property Payment Wizard Code
	*/
	var $WizCode;

	/**
	 * DISPID=45
	 * @var int|VT_USERDEFINED $CollectionAuthorization [29] property CollectionAuthorization
	*/
	var $CollectionAuthorization;

	/**
	 * DISPID=46
	 * @var int|VT_USERDEFINED $PayeeBankPostOffice [29] property PayeeBankPostOffice
	*/
	var $PayeeBankPostOffice;

	/**
	 * DISPID=47
	 * @var int $PayeeBankNextCheckNumber [3] property PayeeBankNextCheckNumber
	*/
	var $PayeeBankNextCheckNumber;

	/**
	 * DISPID=48
	 * @var int|VT_USERDEFINED $PayeeBankHouseBank [29] property PayeeBankHouseBank
	*/
	var $PayeeBankHouseBank;

	/**
	 * DISPID=49
	 * @var string $PayeeBankBlock [8] property PayeeBankBlock
	*/
	var $PayeeBankBlock;

	/**
	 * DISPID=50
	 * @var string $PayeeBankCounty [8] property PayeeBankCounty
	*/
	var $PayeeBankCounty;

	/**
	 * DISPID=51
	 * @var string $PayeeBankState [8] property PayeeBankState
	*/
	var $PayeeBankState;

	/**
	 * DISPID=52
	 * @var int|VT_USERDEFINED $PayeeBankBISR [29] property PayeeBankBISR
	*/
	var $PayeeBankBISR;

	/**
	 * DISPID=53
	 * @var string $PayeeBankUserNum1 [8] property PayeeBankUserNum1
	*/
	var $PayeeBankUserNum1;

	/**
	 * DISPID=54
	 * @var string $PayeeBankUserNum2 [8] property PayeeBankUserNum2
	*/
	var $PayeeBankUserNum2;

	/**
	 * DISPID=55
	 * @var string $PayeeBankUserNum3 [8] property PayeeBankUserNum3
	*/
	var $PayeeBankUserNum3;

	/**
	 * DISPID=56
	 * @var string $PayeeBankUserNum4 [8] property PayeeBankUserNum4
	*/
	var $PayeeBankUserNum4;

	/**
	 * DISPID=57
	 * @var string $InstructionKey [8] property InstructionKey
	*/
	var $InstructionKey;

	/**
	 * DISPID=58
	 * @var string $PaymentFormat [8] property PaymentFormat
	*/
	var $PaymentFormat;

	/**
	 * DISPID=59
	 * @var string $CompanyName [8] property CompanyName
	*/
	var $CompanyName;

	/**
	 * DISPID=60
	 * @var string $CompanyAddress [8] property CompanyAddress
	*/
	var $CompanyAddress;

	/**
	 * DISPID=61
	 * @var int|VT_USERDEFINED $Status [29] property Status
	*/
	var $Status;

	/**
	 * DISPID=62
	 * @var string $CompIsrBillerID [8] property CompIsrBillerID
	*/
	var $CompIsrBillerID;

	/**
	 * DISPID=63
	 * @var string $VendorIsrBillerID [8] property VendorIsrBillerID
	*/
	var $VendorIsrBillerID;

	/**
	 * DISPID=64
	 * @var string $AdditionalIdNumber [8] property AdditionalIdNumber
	*/
	var $AdditionalIdNumber;

	/**
	 * DISPID=65
	 * @var string $OrganizationNumber [8] property OrganizationNumber
	*/
	var $OrganizationNumber;

	/**
	 * DISPID=66
	 * @var string $PayeeBankBranch [8] property PayeeBankBranch
	*/
	var $PayeeBankBranch;

	/**
	 * DISPID=67
	 * @var string $PaymentBankBranch [8] property PaymentBankBranch
	*/
	var $PaymentBankBranch;

	/**
	 * DISPID=68
	 * @var string $UserName [8] property UserName
	*/
	var $UserName;

	/**
	 * DISPID=69
	 * @var string $UserEMail [8] property UserEMail
	*/
	var $UserEMail;

	/**
	 * DISPID=70
	 * @var string $UserMobilePhoneNumber [8] property UserMobilePhoneNumber
	*/
	var $UserMobilePhoneNumber;

	/**
	 * DISPID=71
	 * @var string $UserFaxNumber [8] property UserFaxNumber
	*/
	var $UserFaxNumber;

	/**
	 * DISPID=72
	 * @var int $UserDepartment [3] property UserDepartment
	*/
	var $UserDepartment;

	/**
	 * DISPID=73
	 * @var int|VT_USERDEFINED $DebitMemo [29] property DebitMemo
	*/
	var $DebitMemo;

	/**
	 * DISPID=74
	 * @var int|VT_USERDEFINED $EUInternalTransfer [29] property EUInternalTransfer
	*/
	var $EUInternalTransfer;

	/**
	 * DISPID=75
	 * @var string $FilePath [8] property FilePath
	*/
	var $FilePath;

	/**
	 * DISPID=76
	 * @var string $OrderingParty [8] property OrderingParty
	*/
	var $OrderingParty;

	/**
	 * DISPID=77
	 * @var string $PaymentBankControlKey [8] property PaymentBankControlKey
	*/
	var $PaymentBankControlKey;

	/**
	 * DISPID=78
	 * @var string $PayeeTaxNumber [8] property PayeeTaxNumber
	*/
	var $PayeeTaxNumber;

	/**
	 * DISPID=79
	 * @var string $PaymentKeyCode [8] property PaymentKeyCode
	*/
	var $PaymentKeyCode;

	/**
	 * DISPID=80
	 * @var string $PayeeReferenceDetails [8] property PayeeReferenceDetails
	*/
	var $PayeeReferenceDetails;

	/**
	 * DISPID=81
	 * @var string $FormatName [8] property FormatName
	*/
	var $FormatName;

	/**
	 * DISPID=82
	 * @return string 
	 * Get the object's data in xml format.
	 */
	function GetAsXML()
	{
	}

	/**
	 * DISPID=83
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
	 * DISPID=85
	 * @var int|VT_USERDEFINED $PaymentDonewithCheck [29] property PaymentDonewithCheck
	*/
	var $PaymentDonewithCheck;

	/**
	 * DISPID=86
	 * @var string $CompanyBlock [8] property CompanyBlock
	*/
	var $CompanyBlock;

	/**
	 * DISPID=87
	 * @var string $CompanyCity [8] property CompanyCity
	*/
	var $CompanyCity;

	/**
	 * DISPID=88
	 * @var string $CompanyCounty [8] property CompanyCounty
	*/
	var $CompanyCounty;

	/**
	 * DISPID=89
	 * @var string $CompanyState [8] property CompanyState
	*/
	var $CompanyState;

	/**
	 * DISPID=90
	 * @var string $CompanyStreet [8] property CompanyStreet
	*/
	var $CompanyStreet;

	/**
	 * DISPID=91
	 * @var string $CompanyZipCode [8] property CompanyZipCode
	*/
	var $CompanyZipCode;

	/**
	 * DISPID=92
	 * @var string $PaymentBankCharges [8] property PaymentBankCharges
	*/
	var $PaymentBankCharges;

	/**
	 * DISPID=93
	 * @var string $PaymentBankUserNo1 [8] property PaymentBankUserNo1
	*/
	var $PaymentBankUserNo1;

	/**
	 * DISPID=94
	 * @var string $PaymentBankUserNo2 [8] property PaymentBankUserNo2
	*/
	var $PaymentBankUserNo2;

	/**
	 * DISPID=95
	 * @var string $PaymentBankUserNo3 [8] property PaymentBankUserNo3
	*/
	var $PaymentBankUserNo3;

	/**
	 * DISPID=96
	 * @var string $PaymentBankUserNo4 [8] property PaymentBankUserNo4
	*/
	var $PaymentBankUserNo4;

	/**
	 * DISPID=97
	 * @var string $PaymentBankChargesAllocationCode [8] property PaymentBankChargesAllocationCode
	*/
	var $PaymentBankChargesAllocationCode;

	/**
	 * DISPID=98
	 * @var int $PaymentOrderNum [3] property PaymentOrderNum
	*/
	var $PaymentOrderNum;

	/**
	 * DISPID=99
	 * @var string $FreeText1 [8] property FreeText1
	*/
	var $FreeText1;

	/**
	 * DISPID=100
	 * @var string $FreeText2 [8] property FreeText2
	*/
	var $FreeText2;

	/**
	 * DISPID=101
	 * @var string $FreeText3 [8] property FreeText3
	*/
	var $FreeText3;

	/**
	 * DISPID=102
	 * @var int|VT_USERDEFINED $RowType [29] property RowType
	*/
	var $RowType;

	/**
	 * DISPID=103
	 * @var string $UIPCode [8] property UIPCode
	*/
	var $UIPCode;

}