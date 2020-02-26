<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class IChartOfAccounts
 * GUID={2CF2E472-CA6D-4D8E-8B80-046D28E75C40}
 *
 * @property-read mixed|VT_PTR $Browser User fields for this object.
 * @property string $Code property Code
 * @property string $Name property Name
 * @property-read float $Balance property Balance
 * @property int|VT_USERDEFINED $CashAccount property CashAccount
 * @property int|VT_USERDEFINED $BudgetAccount property BudgetAccount
 * @property int|VT_USERDEFINED $ActiveAccount property ActiveAccount
 * @property-read int|VT_USERDEFINED $PrimaryAccount property PrimaryAccount
 * @property-read int $AccountLevel property AccountLevel
 * @property string $DataExportCode property DataExportCode
 * @property string $FatherAccountKey property FatherAccountKey
 * @property string $ExternalCode property ExternalCode
 * @property int|VT_USERDEFINED $RateConversion property RateConversion
 * @property int|VT_USERDEFINED $TaxLiableAccount property TaxLiableAccount
 * @property int|VT_USERDEFINED $TaxExemptAccount property TaxExemptAccount
 * @property-read int $ExternalReconNo property ExternalReconNo
 * @property-read int $InternalReconNo property InternalReconNo
 * @property int|VT_USERDEFINED $AccountType property AccountType
 * @property string $AcctCurrency property AcctCurrency
 * @property-read float $Balance_syscurr property Balance_syscurr
 * @property-read float $Balance_FrgnCurr property Balance_FrgnCurr
 * @property int|VT_USERDEFINED $Protected property Protected
 * @property int|VT_USERDEFINED $ReconciledAccount property ReconciledAccount
 * @property int|VT_USERDEFINED $LiableForAdvances property LiableForAdvances
 * @property string $ForeignName property ForeignName
 * @property string $Details property Details
 * @property string $ProjectCode property ProjectCode
 * @property int|VT_USERDEFINED $RevaluationCoordinated property RevaluationCoordinated
 * @property int|VT_USERDEFINED $LockManualTransaction property LockManualTransaction
 * @property string $FormatCode property FormatCode
 * @property-read IUserFields $UserFields Get User Fields
 * @property int|VT_USERDEFINED $AllowChangeVatGroup Property AllowChangeVatGroup
 * @property string $DefaultVatGroup Property DefaultVatGroup
 * @property int $Category property Category
 * @property string $TransactionCode property TransactionCode
 * @property int|VT_USERDEFINED $LoadingType Property LoadingType
 * @property string $LoadingFactorCode Property LoadingFactorCode
 * @property string $LoadingFactorCode2 Property LoadingFactorCode2
 * @property string $LoadingFactorCode3 Property LoadingFactorCode3
 * @property string $LoadingFactorCode4 Property LoadingFactorCode4
 * @property string $LoadingFactorCode5 Property LoadingFactorCode5
 * @property string $PlanningLevel Property PlanningLevel
 * @property int $DatevAccount Property DatevAccount
 * @property int|VT_USERDEFINED $DatevAutoAccount Property DatevAutoAccount
 * @property int|VT_USERDEFINED $DatevFirstDataEntry Property DatevFirstDataEntry
 * @property int|VT_USERDEFINED $AllowMultipleLinking property AllowMultipleLinking
 * @property int|VT_USERDEFINED $ProjectRelevant property ProjectRelevant
 * @property int|VT_USERDEFINED $DistributionRuleRelevant property DistributionRuleRelevant
 * @property int|VT_USERDEFINED $DistributionRule2Relevant property DistributionRule2Relevant
 * @property int|VT_USERDEFINED $DistributionRule3Relevant property DistributionRule3Relevant
 * @property int|VT_USERDEFINED $DistributionRule4Relevant property DistributionRule4Relevant
 * @property int|VT_USERDEFINED $DistributionRule5Relevant property DistributionRule5Relevant
 * @property int $BPLID property BPLID
 * @property-read string $BPLName property BPLName
 * @property-read string $VATRegNum property VATRegNum
 * @property int|VT_USERDEFINED $AccountPurposeCode property AccountPurposeCode
 * @property string $ReferentialAccountCode property ReferentialAccountCode
 * @property int|VT_USERDEFINED $ValidFor property ValidFor
 * @property string|VT_DATE $ValidFrom property ValidFrom
 * @property string|VT_DATE $ValidTo property ValidTo
 * @property string $ValidRemarks property ValidRemarks
 * @property int|VT_USERDEFINED $FrozenFor property FrozenFor
 * @property string|VT_DATE $FrozenFrom property FrozenFrom
 * @property string|VT_DATE $FrozenTo property FrozenTo
 * @property string $FrozenRemarks property FrozenRemarks
 * @property int|VT_USERDEFINED $BlockManualPosting property BlockManualPosting
 * @property int|VT_USERDEFINED $CashFlowRelevant property CashFlowRelevant
 */
class IChartOfAccounts 
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
	 * @return int 
	 * method Add
	 */
	function Add()
	{
	}

	/**
	 * DISPID=2
	 * @param string $AccountCode 
	 * @return bool 
	 * method GetByKey
	 */
	function GetByKey(
		/* string [8]  */ $AccountCode 
	)
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
	 * @return int 
	 * method Remove
	 */
	function Remove()
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
	 * @var mixed|VT_PTR $Browser [26] User fields for this object.
	*/
	var $Browser;

	/**
	 * DISPID=7
	 * @var string $Code [8] property Code
	*/
	var $Code;

	/**
	 * DISPID=8
	 * @var string $Name [8] property Name
	*/
	var $Name;

	/**
	 * DISPID=9
	 * @var float $Balance [5] property Balance
	*/
	var $Balance;

	/**
	 * DISPID=10
	 * @var int|VT_USERDEFINED $CashAccount [29] property CashAccount
	*/
	var $CashAccount;

	/**
	 * DISPID=11
	 * @var int|VT_USERDEFINED $BudgetAccount [29] property BudgetAccount
	*/
	var $BudgetAccount;

	/**
	 * DISPID=13
	 * @var int|VT_USERDEFINED $ActiveAccount [29] property ActiveAccount
	*/
	var $ActiveAccount;

	/**
	 * DISPID=14
	 * @var int|VT_USERDEFINED $PrimaryAccount [29] property PrimaryAccount
	*/
	var $PrimaryAccount;

	/**
	 * DISPID=15
	 * @var int $AccountLevel [3] property AccountLevel
	*/
	var $AccountLevel;

	/**
	 * DISPID=16
	 * @var string $DataExportCode [8] property DataExportCode
	*/
	var $DataExportCode;

	/**
	 * DISPID=17
	 * @var string $FatherAccountKey [8] property FatherAccountKey
	*/
	var $FatherAccountKey;

	/**
	 * DISPID=18
	 * @var string $ExternalCode [8] property ExternalCode
	*/
	var $ExternalCode;

	/**
	 * DISPID=20
	 * @var int|VT_USERDEFINED $RateConversion [29] property RateConversion
	*/
	var $RateConversion;

	/**
	 * DISPID=21
	 * @var int|VT_USERDEFINED $TaxLiableAccount [29] property TaxLiableAccount
	*/
	var $TaxLiableAccount;

	/**
	 * DISPID=22
	 * @var int|VT_USERDEFINED $TaxExemptAccount [29] property TaxExemptAccount
	*/
	var $TaxExemptAccount;

	/**
	 * DISPID=23
	 * @var int $ExternalReconNo [3] property ExternalReconNo
	*/
	var $ExternalReconNo;

	/**
	 * DISPID=24
	 * @var int $InternalReconNo [3] property InternalReconNo
	*/
	var $InternalReconNo;

	/**
	 * DISPID=25
	 * @var int|VT_USERDEFINED $AccountType [29] property AccountType
	*/
	var $AccountType;

	/**
	 * DISPID=26
	 * @var string $AcctCurrency [8] property AcctCurrency
	*/
	var $AcctCurrency;

	/**
	 * DISPID=28
	 * @var float $Balance_syscurr [5] property Balance_syscurr
	*/
	var $Balance_syscurr;

	/**
	 * DISPID=29
	 * @var float $Balance_FrgnCurr [5] property Balance_FrgnCurr
	*/
	var $Balance_FrgnCurr;

	/**
	 * DISPID=30
	 * @var int|VT_USERDEFINED $Protected [29] property Protected
	*/
	var $Protected;

	/**
	 * DISPID=31
	 * @var int|VT_USERDEFINED $ReconciledAccount [29] property ReconciledAccount
	*/
	var $ReconciledAccount;

	/**
	 * DISPID=32
	 * @var int|VT_USERDEFINED $LiableForAdvances [29] property LiableForAdvances
	*/
	var $LiableForAdvances;

	/**
	 * DISPID=33
	 * @var string $ForeignName [8] property ForeignName
	*/
	var $ForeignName;

	/**
	 * DISPID=34
	 * @var string $Details [8] property Details
	*/
	var $Details;

	/**
	 * DISPID=35
	 * @var string $ProjectCode [8] property ProjectCode
	*/
	var $ProjectCode;

	/**
	 * DISPID=36
	 * @var int|VT_USERDEFINED $RevaluationCoordinated [29] property RevaluationCoordinated
	*/
	var $RevaluationCoordinated;

	/**
	 * DISPID=38
	 * @var int|VT_USERDEFINED $LockManualTransaction [29] property LockManualTransaction
	*/
	var $LockManualTransaction;

	/**
	 * DISPID=39
	 * @var string $FormatCode [8] property FormatCode
	*/
	var $FormatCode;

	/**
	 * DISPID=40
	 * @var IUserFields $UserFields [26] Get User Fields
	*/
	var $UserFields;

	/**
	 * DISPID=41
	 * @return string 
	 * Get the object's data in xml format.
	 */
	function GetAsXML()
	{
	}

	/**
	 * DISPID=42
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
	 * DISPID=43
	 * @var int|VT_USERDEFINED $AllowChangeVatGroup [29] Property AllowChangeVatGroup
	*/
	var $AllowChangeVatGroup;

	/**
	 * DISPID=44
	 * @var string $DefaultVatGroup [8] Property DefaultVatGroup
	*/
	var $DefaultVatGroup;

	/**
	 * DISPID=45
	 * @var int $Category [3] property Category
	*/
	var $Category;

	/**
	 * DISPID=46
	 * @var string $TransactionCode [8] property TransactionCode
	*/
	var $TransactionCode;

	/**
	 * DISPID=47
	 * @var int|VT_USERDEFINED $LoadingType [29] Property LoadingType
	*/
	var $LoadingType;

	/**
	 * DISPID=48
	 * @var string $LoadingFactorCode [8] Property LoadingFactorCode
	*/
	var $LoadingFactorCode;

	/**
	 * DISPID=49
	 * @var string $LoadingFactorCode2 [8] Property LoadingFactorCode2
	*/
	var $LoadingFactorCode2;

	/**
	 * DISPID=50
	 * @var string $LoadingFactorCode3 [8] Property LoadingFactorCode3
	*/
	var $LoadingFactorCode3;

	/**
	 * DISPID=51
	 * @var string $LoadingFactorCode4 [8] Property LoadingFactorCode4
	*/
	var $LoadingFactorCode4;

	/**
	 * DISPID=52
	 * @var string $LoadingFactorCode5 [8] Property LoadingFactorCode5
	*/
	var $LoadingFactorCode5;

	/**
	 * DISPID=53
	 * @var string $PlanningLevel [8] Property PlanningLevel
	*/
	var $PlanningLevel;

	/**
	 * DISPID=54
	 * @var int $DatevAccount [3] Property DatevAccount
	*/
	var $DatevAccount;

	/**
	 * DISPID=55
	 * @var int|VT_USERDEFINED $DatevAutoAccount [29] Property DatevAutoAccount
	*/
	var $DatevAutoAccount;

	/**
	 * DISPID=56
	 * @var int|VT_USERDEFINED $DatevFirstDataEntry [29] Property DatevFirstDataEntry
	*/
	var $DatevFirstDataEntry;

	/**
	 * DISPID=71
	 * @var int|VT_USERDEFINED $AllowMultipleLinking [29] property AllowMultipleLinking
	*/
	var $AllowMultipleLinking;

	/**
	 * DISPID=72
	 * @var int|VT_USERDEFINED $ProjectRelevant [29] property ProjectRelevant
	*/
	var $ProjectRelevant;

	/**
	 * DISPID=73
	 * @var int|VT_USERDEFINED $DistributionRuleRelevant [29] property DistributionRuleRelevant
	*/
	var $DistributionRuleRelevant;

	/**
	 * DISPID=74
	 * @var int|VT_USERDEFINED $DistributionRule2Relevant [29] property DistributionRule2Relevant
	*/
	var $DistributionRule2Relevant;

	/**
	 * DISPID=75
	 * @var int|VT_USERDEFINED $DistributionRule3Relevant [29] property DistributionRule3Relevant
	*/
	var $DistributionRule3Relevant;

	/**
	 * DISPID=76
	 * @var int|VT_USERDEFINED $DistributionRule4Relevant [29] property DistributionRule4Relevant
	*/
	var $DistributionRule4Relevant;

	/**
	 * DISPID=77
	 * @var int|VT_USERDEFINED $DistributionRule5Relevant [29] property DistributionRule5Relevant
	*/
	var $DistributionRule5Relevant;

	/**
	 * DISPID=91
	 * @var int $BPLID [3] property BPLID
	*/
	var $BPLID;

	/**
	 * DISPID=92
	 * @var string $BPLName [8] property BPLName
	*/
	var $BPLName;

	/**
	 * DISPID=93
	 * @var string $VATRegNum [8] property VATRegNum
	*/
	var $VATRegNum;

	/**
	 * DISPID=94
	 * @var int|VT_USERDEFINED $AccountPurposeCode [29] property AccountPurposeCode
	*/
	var $AccountPurposeCode;

	/**
	 * DISPID=95
	 * @var string $ReferentialAccountCode [8] property ReferentialAccountCode
	*/
	var $ReferentialAccountCode;

	/**
	 * DISPID=96
	 * @var int|VT_USERDEFINED $ValidFor [29] property ValidFor
	*/
	var $ValidFor;

	/**
	 * DISPID=97
	 * @var string|VT_DATE $ValidFrom [7] property ValidFrom
	*/
	var $ValidFrom;

	/**
	 * DISPID=98
	 * @var string|VT_DATE $ValidTo [7] property ValidTo
	*/
	var $ValidTo;

	/**
	 * DISPID=99
	 * @var string $ValidRemarks [8] property ValidRemarks
	*/
	var $ValidRemarks;

	/**
	 * DISPID=100
	 * @var int|VT_USERDEFINED $FrozenFor [29] property FrozenFor
	*/
	var $FrozenFor;

	/**
	 * DISPID=101
	 * @var string|VT_DATE $FrozenFrom [7] property FrozenFrom
	*/
	var $FrozenFrom;

	/**
	 * DISPID=102
	 * @var string|VT_DATE $FrozenTo [7] property FrozenTo
	*/
	var $FrozenTo;

	/**
	 * DISPID=103
	 * @var string $FrozenRemarks [8] property FrozenRemarks
	*/
	var $FrozenRemarks;

	/**
	 * DISPID=104
	 * @var int|VT_USERDEFINED $BlockManualPosting [29] property BlockManualPosting
	*/
	var $BlockManualPosting;

	/**
	 * DISPID=105
	 * @var int|VT_USERDEFINED $CashFlowRelevant [29] property CashFlowRelevant
	*/
	var $CashFlowRelevant;

}