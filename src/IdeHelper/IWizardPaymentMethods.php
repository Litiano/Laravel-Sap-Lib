<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class IWizardPaymentMethods
 * GUID={54B31C27-C3D0-41DE-89BA-5E8800D0361D}
 *
 * @property-read mixed|VT_PTR $Browser Get browser
 * @property-read IUserFields $UserFields Get User Fields
 * @property string $PaymentMethodCode property PaymentMethodCode
 * @property string $Description property Description
 * @property int|VT_USERDEFINED $Type property Type
 * @property int|VT_USERDEFINED $PaymentMeans property PaymentMeans
 * @property int|VT_USERDEFINED $CheckAddress property CheckAddress
 * @property int|VT_USERDEFINED $CheckBankDetails property CheckBankDetails
 * @property int|VT_USERDEFINED $CollectionAuthorizationCheck property CollectionAuthorizationCheck
 * @property int|VT_USERDEFINED $BlockForeignPayment property BlockForeignPayment
 * @property int|VT_USERDEFINED $BlockForeignBank property BlockForeignBank
 * @property int|VT_USERDEFINED $CurrencyRestriction property CurrencyRestriction
 * @property int|VT_USERDEFINED $PostOfficeBank property PostOfficeBank
 * @property float $MinimumAmount property MinimumAmount
 * @property float $MaximumAmount property MaximumAmount
 * @property string $DefaultBank property DefaultBank
 * @property-read int $UserSignature property UserSignature
 * @property-read string|VT_DATE $CreationDate property CreationDate
 * @property string $BankCountry property BankCountry
 * @property string $DefaultAccount property DefaultAccount
 * @property-read string $GLAccount property GLAccount
 * @property-read string $Branch property Branch
 * @property string $KeyCode property KeyCode
 * @property string $TransactionType property TransactionType
 * @property string $Format property Format
 * @property int|VT_USERDEFINED $AgentCollection property AgentCollection
 * @property int|VT_USERDEFINED $SendforAcceptance property SendforAcceptance
 * @property int|VT_USERDEFINED $GroupByDate property GroupByDate
 * @property string $DepositNorm property DepositNorm
 * @property int|VT_USERDEFINED $DebitMemo property DebitMemo
 * @property int|VT_USERDEFINED $GroupByPaymentReference property GroupByPaymentReference
 * @property int|VT_USERDEFINED $GroupInvoicesbyPay property GroupInvoicesbyPay
 * @property int|VT_USERDEFINED $DueDateSelection property DueDateSelection
 * @property int $PaymentTermsCode property PaymentTermsCode
 * @property int|VT_USERDEFINED $PosttoGLInterimAccount property PosttoGLInterimAccount
 * @property-read int $BankAccountKey property BankAccountKey
 * @property-read mixed|VT_PTR $CurrencyRestrictions property CurrencyRestrictions
 * @property string $DocType property DocType
 * @property string $Accepted property Accepted
 * @property string $PortfolioID property PortfolioID
 * @property string $CurCode property CurCode
 * @property string $Instruction1 property Instruction1
 * @property string $Instruction2 property Instruction2
 * @property string $PaymentPlace property PaymentPlace
 * @property string $BarcodeDll property BarcodeDll
 * @property int|VT_USERDEFINED $Active property Active
 * @property int|VT_USERDEFINED $GroupInvoicesByPayToBank property GroupInvoicesByPayToBank
 * @property int|VT_USERDEFINED $GroupInvoicesByCurrency property GroupInvoicesByCurrency
 * @property float $BankChargeRate property BankChargeRate
 * @property string $ReportCode property ReportCode
 * @property string $CancelInstruction property CancelInstruction
 * @property string $OccurenceCode property OccurenceCode
 * @property string $MovementCode property MovementCode
 * @property int|VT_USERDEFINED $DirectDebit property DirectDebit
 */
class IWizardPaymentMethods 
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
	 * @param string $bstrCode [in]
	 * @return bool 
	 * GetByKey
	 */
	function GetByKey(
		/* string [8] [in] */ $bstrCode 
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
	 * DISPID=11
	 * @var string $PaymentMethodCode [8] property PaymentMethodCode
	*/
	var $PaymentMethodCode;

	/**
	 * DISPID=12
	 * @var string $Description [8] property Description
	*/
	var $Description;

	/**
	 * DISPID=13
	 * @var int|VT_USERDEFINED $Type [29] property Type
	*/
	var $Type;

	/**
	 * DISPID=14
	 * @var int|VT_USERDEFINED $PaymentMeans [29] property PaymentMeans
	*/
	var $PaymentMeans;

	/**
	 * DISPID=15
	 * @var int|VT_USERDEFINED $CheckAddress [29] property CheckAddress
	*/
	var $CheckAddress;

	/**
	 * DISPID=16
	 * @var int|VT_USERDEFINED $CheckBankDetails [29] property CheckBankDetails
	*/
	var $CheckBankDetails;

	/**
	 * DISPID=17
	 * @var int|VT_USERDEFINED $CollectionAuthorizationCheck [29] property CollectionAuthorizationCheck
	*/
	var $CollectionAuthorizationCheck;

	/**
	 * DISPID=18
	 * @var int|VT_USERDEFINED $BlockForeignPayment [29] property BlockForeignPayment
	*/
	var $BlockForeignPayment;

	/**
	 * DISPID=19
	 * @var int|VT_USERDEFINED $BlockForeignBank [29] property BlockForeignBank
	*/
	var $BlockForeignBank;

	/**
	 * DISPID=20
	 * @var int|VT_USERDEFINED $CurrencyRestriction [29] property CurrencyRestriction
	*/
	var $CurrencyRestriction;

	/**
	 * DISPID=21
	 * @var int|VT_USERDEFINED $PostOfficeBank [29] property PostOfficeBank
	*/
	var $PostOfficeBank;

	/**
	 * DISPID=22
	 * @var float $MinimumAmount [5] property MinimumAmount
	*/
	var $MinimumAmount;

	/**
	 * DISPID=23
	 * @var float $MaximumAmount [5] property MaximumAmount
	*/
	var $MaximumAmount;

	/**
	 * DISPID=24
	 * @var string $DefaultBank [8] property DefaultBank
	*/
	var $DefaultBank;

	/**
	 * DISPID=25
	 * @var int $UserSignature [3] property UserSignature
	*/
	var $UserSignature;

	/**
	 * DISPID=26
	 * @var string|VT_DATE $CreationDate [7] property CreationDate
	*/
	var $CreationDate;

	/**
	 * DISPID=27
	 * @var string $BankCountry [8] property BankCountry
	*/
	var $BankCountry;

	/**
	 * DISPID=28
	 * @var string $DefaultAccount [8] property DefaultAccount
	*/
	var $DefaultAccount;

	/**
	 * DISPID=29
	 * @var string $GLAccount [8] property GLAccount
	*/
	var $GLAccount;

	/**
	 * DISPID=30
	 * @var string $Branch [8] property Branch
	*/
	var $Branch;

	/**
	 * DISPID=31
	 * @var string $KeyCode [8] property KeyCode
	*/
	var $KeyCode;

	/**
	 * DISPID=32
	 * @var string $TransactionType [8] property TransactionType
	*/
	var $TransactionType;

	/**
	 * DISPID=33
	 * @var string $Format [8] property Format
	*/
	var $Format;

	/**
	 * DISPID=34
	 * @var int|VT_USERDEFINED $AgentCollection [29] property AgentCollection
	*/
	var $AgentCollection;

	/**
	 * DISPID=35
	 * @var int|VT_USERDEFINED $SendforAcceptance [29] property SendforAcceptance
	*/
	var $SendforAcceptance;

	/**
	 * DISPID=36
	 * @var int|VT_USERDEFINED $GroupByDate [29] property GroupByDate
	*/
	var $GroupByDate;

	/**
	 * DISPID=37
	 * @var string $DepositNorm [8] property DepositNorm
	*/
	var $DepositNorm;

	/**
	 * DISPID=38
	 * @var int|VT_USERDEFINED $DebitMemo [29] property DebitMemo
	*/
	var $DebitMemo;

	/**
	 * DISPID=39
	 * @var int|VT_USERDEFINED $GroupByPaymentReference [29] property GroupByPaymentReference
	*/
	var $GroupByPaymentReference;

	/**
	 * DISPID=40
	 * @var int|VT_USERDEFINED $GroupInvoicesbyPay [29] property GroupInvoicesbyPay
	*/
	var $GroupInvoicesbyPay;

	/**
	 * DISPID=41
	 * @var int|VT_USERDEFINED $DueDateSelection [29] property DueDateSelection
	*/
	var $DueDateSelection;

	/**
	 * DISPID=42
	 * @var int $PaymentTermsCode [3] property PaymentTermsCode
	*/
	var $PaymentTermsCode;

	/**
	 * DISPID=43
	 * @var int|VT_USERDEFINED $PosttoGLInterimAccount [29] property PosttoGLInterimAccount
	*/
	var $PosttoGLInterimAccount;

	/**
	 * DISPID=44
	 * @var int $BankAccountKey [3] property BankAccountKey
	*/
	var $BankAccountKey;

	/**
	 * DISPID=46
	 * @var mixed|VT_PTR $CurrencyRestrictions [26] property CurrencyRestrictions
	*/
	var $CurrencyRestrictions;

	/**
	 * DISPID=47
	 * @var string $DocType [8] property DocType
	*/
	var $DocType;

	/**
	 * DISPID=48
	 * @var string $Accepted [8] property Accepted
	*/
	var $Accepted;

	/**
	 * DISPID=49
	 * @var string $PortfolioID [8] property PortfolioID
	*/
	var $PortfolioID;

	/**
	 * DISPID=50
	 * @var string $CurCode [8] property CurCode
	*/
	var $CurCode;

	/**
	 * DISPID=51
	 * @var string $Instruction1 [8] property Instruction1
	*/
	var $Instruction1;

	/**
	 * DISPID=52
	 * @var string $Instruction2 [8] property Instruction2
	*/
	var $Instruction2;

	/**
	 * DISPID=53
	 * @var string $PaymentPlace [8] property PaymentPlace
	*/
	var $PaymentPlace;

	/**
	 * DISPID=54
	 * @var string $BarcodeDll [8] property BarcodeDll
	*/
	var $BarcodeDll;

	/**
	 * DISPID=55
	 * @var int|VT_USERDEFINED $Active [29] property Active
	*/
	var $Active;

	/**
	 * DISPID=56
	 * @var int|VT_USERDEFINED $GroupInvoicesByPayToBank [29] property GroupInvoicesByPayToBank
	*/
	var $GroupInvoicesByPayToBank;

	/**
	 * DISPID=57
	 * @var int|VT_USERDEFINED $GroupInvoicesByCurrency [29] property GroupInvoicesByCurrency
	*/
	var $GroupInvoicesByCurrency;

	/**
	 * DISPID=58
	 * @var float $BankChargeRate [5] property BankChargeRate
	*/
	var $BankChargeRate;

	/**
	 * DISPID=59
	 * @var string $ReportCode [8] property ReportCode
	*/
	var $ReportCode;

	/**
	 * DISPID=60
	 * @var string $CancelInstruction [8] property CancelInstruction
	*/
	var $CancelInstruction;

	/**
	 * DISPID=61
	 * @var string $OccurenceCode [8] property OccurenceCode
	*/
	var $OccurenceCode;

	/**
	 * DISPID=62
	 * @var string $MovementCode [8] property MovementCode
	*/
	var $MovementCode;

	/**
	 * DISPID=63
	 * @var int|VT_USERDEFINED $DirectDebit [29] property DirectDebit
	*/
	var $DirectDebit;

}