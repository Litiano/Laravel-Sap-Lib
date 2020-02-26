<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class IJournalEntries
 * GUID={060F033E-2FC9-4266-90AE-3271AC203A59}
 *
 * @property-read IUserFields $UserFields property UserFields
 * @property-read IJournalEntries_Lines $Lines property Lines
 * @property string|VT_DATE $ReferenceDate property ReferenceDate
 * @property string $Memo property Memo
 * @property string $Reference property Reference
 * @property string $Reference2 property Reference2
 * @property string $TransactionCode property TransactionCode
 * @property string $ProjectCode property ProjectCode
 * @property string|VT_DATE $TaxDate property TaxDate
 * @property-read int $JdtNum property JdtNum
 * @property-read mixed|VT_PTR $Browser User fields for this object.
 * @property string $Indicator property Indicator
 * @property int|VT_USERDEFINED $UseAutoStorno property UseAutoStorno
 * @property string|VT_DATE $StornoDate property StornoDate
 * @property-read int $Count property Count
 * @property string|VT_DATE $VatDate property VatDate
 * @property int $Series property Series
 * @property int|VT_USERDEFINED $StampTax property StampTax
 * @property string|VT_DATE $DueDate property DueDate
 * @property int|VT_USERDEFINED $AutoVAT property AutoVAT
 * @property-read int $Number property Number
 * @property-read int $FolioNumber property FolioNumber
 * @property-read string $FolioPrefixString property FolioPrefixString
 * @property int|VT_USERDEFINED $ReportEU property ReportEU
 * @property int|VT_USERDEFINED $Report347 property Report347
 * @property-read int|VT_USERDEFINED $Printed property Printed
 * @property int $LocationCode property LocationCode
 * @property-read int $Original property Original
 * @property-read string $BaseReference property BaseReference
 * @property int|VT_USERDEFINED $BlockDunningLetter property BlockDunningLetter
 * @property-read int|VT_USERDEFINED $OriginalJournal property OriginalJournal
 * @property int|VT_USERDEFINED $AutomaticWT property AutomaticWT
 * @property-read float $WTSum property WTSum
 * @property-read float $WTSumSC property WTSumSC
 * @property-read float $WTSumFC property WTSumFC
 * @property-read mixed|VT_PTR $WithholdingTaxData property WithholdingTaxData
 * @property int|VT_USERDEFINED $Corisptivi property Corisptivi
 * @property-read string $SignatureInputMessage property SignatureInputMessage
 * @property-read string $SignatureDigest property SignatureDigest
 * @property-read string $CertificationNumber property CertificationNumber
 * @property-read int $PrivateKeyVersion property PrivateKeyVersion
 * @property string $Reference3 property Reference3
 * @property string $DocumentType property DocumentType
 * @property-read int $BlanketAgreementNumber property BlanketAgreementNumber
 * @property int|VT_USERDEFINED $DeferredTax property DeferredTax
 * @property int|VT_USERDEFINED $OperationCode property OperationCode
 * @property int|VT_USERDEFINED $ResidenceNumberType property ResidenceNumberType
 * @property int|VT_USERDEFINED $ECDPostingType property ECDPostingType
 * @property int $ExposedTransNumber property ExposedTransNumber
 * @property-read string $PointOfIssueCode property PointOfIssueCode
 * @property-read int|VT_USERDEFINED $Letter property Letter
 * @property-read int $FolioNumberFrom property FolioNumberFrom
 * @property-read int $FolioNumberTo property FolioNumberTo
 */
class IJournalEntries 
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
	 * @var IJournalEntries_Lines $Lines [26] property Lines
	*/
	var $Lines;

	/**
	 * DISPID=3
	 * @return int 
	 * method Add
	 */
	function Add()
	{
	}

	/**
	 * DISPID=4
	 * @param int $JdtNum 
	 * @return bool 
	 * method GetByKey
	 */
	function GetByKey(
		/* int [3]  */ $JdtNum 
	)
	{
	}

	/**
	 * DISPID=5
	 * @var string|VT_DATE $ReferenceDate [7] property ReferenceDate
	*/
	var $ReferenceDate;

	/**
	 * DISPID=6
	 * @var string $Memo [8] property Memo
	*/
	var $Memo;

	/**
	 * DISPID=7
	 * @var string $Reference [8] property Reference
	*/
	var $Reference;

	/**
	 * DISPID=8
	 * @var string $Reference2 [8] property Reference2
	*/
	var $Reference2;

	/**
	 * DISPID=9
	 * @var string $TransactionCode [8] property TransactionCode
	*/
	var $TransactionCode;

	/**
	 * DISPID=12
	 * @var string $ProjectCode [8] property ProjectCode
	*/
	var $ProjectCode;

	/**
	 * DISPID=14
	 * @var string|VT_DATE $TaxDate [7] property TaxDate
	*/
	var $TaxDate;

	/**
	 * DISPID=15
	 * @var int $JdtNum [3] property JdtNum
	*/
	var $JdtNum;

	/**
	 * DISPID=16
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
	 * DISPID=17
	 * @return int 
	 * method Update
	 */
	function Update()
	{
	}

	/**
	 * DISPID=18
	 * @return int 
	 * method Remove
	 */
	function Remove()
	{
	}

	/**
	 * DISPID=19
	 * @return int 
	 * method Cancel
	 */
	function Cancel()
	{
	}

	/**
	 * DISPID=20
	 * @return int 
	 * method Close
	 */
	function Close()
	{
	}

	/**
	 * DISPID=21
	 * @var mixed|VT_PTR $Browser [26] User fields for this object.
	*/
	var $Browser;

	/**
	 * DISPID=22
	 * @var string $Indicator [8] property Indicator
	*/
	var $Indicator;

	/**
	 * DISPID=23
	 * @var int|VT_USERDEFINED $UseAutoStorno [29] property UseAutoStorno
	*/
	var $UseAutoStorno;

	/**
	 * DISPID=24
	 * @var string|VT_DATE $StornoDate [7] property StornoDate
	*/
	var $StornoDate;

	/**
	 * DISPID=25
	 * @var int $Count [3] property Count
	*/
	var $Count;

	/**
	 * DISPID=26
	 * @param int $LineNum [in]
	 * @return void 
	 * method SetCurrentLine
	 */
	function SetCurrentLine(
		/* int [3] [in] */ $LineNum 
	)
	{
	}

	/**
	 * DISPID=27
	 * @var string|VT_DATE $VatDate [7] property VatDate
	*/
	var $VatDate;

	/**
	 * DISPID=28
	 * @var int $Series [3] property Series
	*/
	var $Series;

	/**
	 * DISPID=29
	 * @var int|VT_USERDEFINED $StampTax [29] property StampTax
	*/
	var $StampTax;

	/**
	 * DISPID=30
	 * @return string 
	 * Get the object's data in xml format.
	 */
	function GetAsXML()
	{
	}

	/**
	 * DISPID=31
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
	 * DISPID=32
	 * @var string|VT_DATE $DueDate [7] property DueDate
	*/
	var $DueDate;

	/**
	 * DISPID=35
	 * @var int|VT_USERDEFINED $AutoVAT [29] property AutoVAT
	*/
	var $AutoVAT;

	/**
	 * DISPID=36
	 * @var int $Number [3] property Number
	*/
	var $Number;

	/**
	 * DISPID=37
	 * @var int $FolioNumber [3] property FolioNumber
	*/
	var $FolioNumber;

	/**
	 * DISPID=38
	 * @var string $FolioPrefixString [8] property FolioPrefixString
	*/
	var $FolioPrefixString;

	/**
	 * DISPID=39
	 * @var int|VT_USERDEFINED $ReportEU [29] property ReportEU
	*/
	var $ReportEU;

	/**
	 * DISPID=40
	 * @var int|VT_USERDEFINED $Report347 [29] property Report347
	*/
	var $Report347;

	/**
	 * DISPID=41
	 * @var int|VT_USERDEFINED $Printed [29] property Printed
	*/
	var $Printed;

	/**
	 * DISPID=42
	 * @var int $LocationCode [3] property LocationCode
	*/
	var $LocationCode;

	/**
	 * DISPID=43
	 * @var int $Original [3] property Original
	*/
	var $Original;

	/**
	 * DISPID=44
	 * @var string $BaseReference [8] property BaseReference
	*/
	var $BaseReference;

	/**
	 * DISPID=45
	 * @var int|VT_USERDEFINED $BlockDunningLetter [29] property BlockDunningLetter
	*/
	var $BlockDunningLetter;

	/**
	 * DISPID=46
	 * @var int|VT_USERDEFINED $OriginalJournal [29] property OriginalJournal
	*/
	var $OriginalJournal;

	/**
	 * DISPID=47
	 * @var int|VT_USERDEFINED $AutomaticWT [29] property AutomaticWT
	*/
	var $AutomaticWT;

	/**
	 * DISPID=48
	 * @var float $WTSum [5] property WTSum
	*/
	var $WTSum;

	/**
	 * DISPID=49
	 * @var float $WTSumSC [5] property WTSumSC
	*/
	var $WTSumSC;

	/**
	 * DISPID=50
	 * @var float $WTSumFC [5] property WTSumFC
	*/
	var $WTSumFC;

	/**
	 * DISPID=51
	 * @var mixed|VT_PTR $WithholdingTaxData [26] property WithholdingTaxData
	*/
	var $WithholdingTaxData;

	/**
	 * DISPID=52
	 * @var int|VT_USERDEFINED $Corisptivi [29] property Corisptivi
	*/
	var $Corisptivi;

	/**
	 * DISPID=62
	 * @var string $SignatureInputMessage [8] property SignatureInputMessage
	*/
	var $SignatureInputMessage;

	/**
	 * DISPID=63
	 * @var string $SignatureDigest [8] property SignatureDigest
	*/
	var $SignatureDigest;

	/**
	 * DISPID=64
	 * @var string $CertificationNumber [8] property CertificationNumber
	*/
	var $CertificationNumber;

	/**
	 * DISPID=65
	 * @var int $PrivateKeyVersion [3] property PrivateKeyVersion
	*/
	var $PrivateKeyVersion;

	/**
	 * DISPID=66
	 * @var string $Reference3 [8] property Reference3
	*/
	var $Reference3;

	/**
	 * DISPID=67
	 * @var string $DocumentType [8] property DocumentType
	*/
	var $DocumentType;

	/**
	 * DISPID=68
	 * @var int $BlanketAgreementNumber [3] property BlanketAgreementNumber
	*/
	var $BlanketAgreementNumber;

	/**
	 * DISPID=69
	 * @var int|VT_USERDEFINED $DeferredTax [29] property DeferredTax
	*/
	var $DeferredTax;

	/**
	 * DISPID=70
	 * @var int|VT_USERDEFINED $OperationCode [29] property OperationCode
	*/
	var $OperationCode;

	/**
	 * DISPID=71
	 * @var int|VT_USERDEFINED $ResidenceNumberType [29] property ResidenceNumberType
	*/
	var $ResidenceNumberType;

	/**
	 * DISPID=72
	 * @var int|VT_USERDEFINED $ECDPostingType [29] property ECDPostingType
	*/
	var $ECDPostingType;

	/**
	 * DISPID=73
	 * @var int $ExposedTransNumber [3] property ExposedTransNumber
	*/
	var $ExposedTransNumber;

	/**
	 * DISPID=74
	 * @var string $PointOfIssueCode [8] property PointOfIssueCode
	*/
	var $PointOfIssueCode;

	/**
	 * DISPID=75
	 * @var int|VT_USERDEFINED $Letter [29] property Letter
	*/
	var $Letter;

	/**
	 * DISPID=76
	 * @var int $FolioNumberFrom [3] property FolioNumberFrom
	*/
	var $FolioNumberFrom;

	/**
	 * DISPID=77
	 * @var int $FolioNumberTo [3] property FolioNumberTo
	*/
	var $FolioNumberTo;

}