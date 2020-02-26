<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class IDocuments
 * GUID={A6DA575B-E105-4585-9F4B-50CC4044EEDD}
 *
 * @property-read IDocument_Lines $Lines Invoke the lines object
 * @property int $DocNum Doc num
 * @property int|VT_USERDEFINED $DocType Doc type
 * @property int|VT_USERDEFINED $HandWritten Hand Written
 * @property int|VT_USERDEFINED $Printed Printed
 * @property string|VT_DATE $DocDate Doc date
 * @property string|VT_DATE $DocDueDate Doc due date
 * @property string $CardCode Card code
 * @property string $CardName Card name
 * @property string $Address Address
 * @property string $NumAtCard Num at card
 * @property string $DocCurrency Doc currency
 * @property float $DocRate Doc rate
 * @property float $DocTotal Doc total
 * @property string $Reference1 Referance 1
 * @property string $Reference2 Referance 2
 * @property string $Comments Comments
 * @property string $JournalMemo Jurnal memo
 * @property int $PaymentGroupCode Payment group code
 * @property string|VT_DATE $DocTime Doc time
 * @property int $SalesPersonCode Sales person code
 * @property int $TransportationCode Transportation code
 * @property int|VT_USERDEFINED $Confirmed Confirmed
 * @property int $ImportFileNum Import file num
 * @property int|VT_USERDEFINED $SummeryType Summery type
 * @property int $ContactPersonCode Contact person code
 * @property int|VT_USERDEFINED $ShowSCN Show scn
 * @property int $Series Series
 * @property string|VT_DATE $TaxDate Tax date
 * @property int|VT_USERDEFINED $PartialSupply Partial supply
 * @property-read IUserFields $UserFields Invoke the user fields object
 * @property int|VT_USERDEFINED $DocObjectCode property DocObjectCode
 * @property string $ShipToCode property ShipToCode
 * @property string $Indicator property Indicator
 * @property string $FederalTaxID property FederalTaxID
 * @property-read mixed|VT_PTR $Browser User fields for this object.
 * @property float $DiscountPercent property DiscountPercent
 * @property string $PaymentReference property PaymentReference
 * @property-read int $DocEntry property DocEntry
 * @property-read string|VT_DATE $CreationDate property CreationDate
 * @property-read string|VT_DATE $UpdateDate property UpdateDate
 * @property-read int $FinancialPeriod property FinancialPeriod
 * @property-read int $TransNum property TransNum
 * @property-read float $VatSum property VatSum
 * @property-read float $VatSumSys property VatSumSys
 * @property-read float $VatSumFc property VatSumFc
 * @property-read int|VT_USERDEFINED $NetProcedure property NetProcedure
 * @property float $DocTotalFc property DocTotalFc
 * @property-read float $DocTotalSys property DocTotalSys
 * @property int $Form1099 property Form1099
 * @property string $Box1099 property Box1099
 * @property int|VT_USERDEFINED $RevisionPo property RevisionPo
 * @property string|VT_DATE $RequriedDate property RequriedDate
 * @property string|VT_DATE $CancelDate property CancelDate
 * @property int|VT_USERDEFINED $BlockDunning property BlockDunning
 * @property-read int|VT_USERDEFINED $Submitted property Submitted
 * @property-read int $Segment property Segment
 * @property-read int|VT_USERDEFINED $PickStatus property PickStatus
 * @property int|VT_USERDEFINED $Pick property Pick
 * @property string $PaymentMethod property PaymentMethod
 * @property int|VT_USERDEFINED $PaymentBlock property PaymentBlock
 * @property int $PaymentBlockEntry property PaymentBlockEntry
 * @property string $CentralBankIndicator property CentralBankIndicator
 * @property int|VT_USERDEFINED $MaximumCashDiscount property MaximumCashDiscount
 * @property-read int|VT_USERDEFINED $Reserve property Reserve
 * @property string $Project property Project
 * @property string|VT_DATE $ExemptionValidityDateFrom property ExemptionValidityDateFrom
 * @property string|VT_DATE $ExemptionValidityDateTo property ExemptionValidityDateTo
 * @property int|VT_USERDEFINED $WareHouseUpdateType property WareHouseUpdateType
 * @property-read IDocumentsAdditionalExpenses $Expenses property Expenses
 * @property int|VT_USERDEFINED $Rounding property Rounding
 * @property string $ExternalCorrectedDocNum property ExternalCorrectedDocNum
 * @property int $InternalCorrectedDocNum property InternalCorrectedDocNum
 * @property-read int $NextCorrectingDocument property NextCorrectingDocument
 * @property int|VT_USERDEFINED $DeferredTax property DeferredTax
 * @property string $TaxExemptionLetterNum property TaxExemptionLetterNum
 * @property-read float $WTApplied property WTApplied
 * @property-read float $WTAppliedFC property WTAppliedFC
 * @property-read int|VT_USERDEFINED $BillOfExchangeReserved property BillOfExchangeReserved
 * @property string $AgentCode property AgentCode
 * @property-read float $WTAppliedSC property WTAppliedSC
 * @property-read float $TotalEqualizationTax property TotalEqualizationTax
 * @property-read float $TotalEqualizationTaxFC property TotalEqualizationTaxFC
 * @property-read float $TotalEqualizationTaxSC property TotalEqualizationTaxSC
 * @property int $NumberOfInstallments property NumberOfInstallments
 * @property int|VT_USERDEFINED $ApplyTaxOnFirstInstallment property ApplyTaxOnFirstInstallment
 * @property-read float $WTNonSubjectAmount property WTNonSubjectAmount
 * @property-read float $WTNonSubjectAmountSC property WTNonSubjectAmountSC
 * @property-read float $WTNonSubjectAmountFC property WTNonSubjectAmountFC
 * @property-read float $WTExemptedAmount property WTExemptedAmount
 * @property-read float $WTExemptedAmountSC property WTExemptedAmountSC
 * @property-read float $WTExemptedAmountFC property WTExemptedAmountFC
 * @property-read float $BaseAmountSC property BaseAmountSC
 * @property-read float $BaseAmountFC property BaseAmountFC
 * @property-read float $WTAmountFC property WTAmountFC
 * @property-read float $WTAmountSC property WTAmountSC
 * @property-read float $BaseAmount property BaseAmount
 * @property-read float $WTAmount property WTAmount
 * @property string|VT_DATE $VatDate property VatDate
 * @property string $ManualNumber property ManualNumber
 * @property int|VT_USERDEFINED $UseShpdGoodsAct property UseShpdGoodsAct
 * @property int $FolioNumber property FolioNumber
 * @property int|VT_USERDEFINED $DocumentSubType property DocumentSubType
 * @property string $BPChannelCode property BPChannelCode
 * @property int $BPChannelContact property BPChannelContact
 * @property-read mixed|VT_PTR $WithholdingTaxData property WithholdingTaxData
 * @property string $DocObjectCodeEx property DocObjectCodeEx
 * @property string $Address2 property Address2
 * @property-read int|VT_USERDEFINED $DocumentStatus property DocumentStatus
 * @property-read string $PeriodIndicator property Period Indicator
 * @property string $PayToCode property Pay to code
 * @property int $DocumentsOwner property DocumentsOwner
 * @property string $FolioPrefixString property FolioPrefixString
 * @property int|VT_USERDEFINED $IsPayToBank property IsPayToBank
 * @property string $PayToBankCountry property PayToBankCountry
 * @property string $PayToBankCode property PayToBankCode
 * @property string $PayToBankAccountNo property PayToBankAccountNo
 * @property string $PayToBankBranch property PayToBankBranch
 * @property int $BPL_IDAssignedToInvoice property BPL_IDAssignedToInvoice
 * @property string|VT_DATE $ClosingDate property ClosingDate
 * @property int $SequenceSerial property SequenceSerial
 * @property int $SequenceCode property SequenceCode
 * @property string $SeriesString property SeriesString
 * @property string $SubSeriesString property SubSeriesString
 * @property string $SequenceModel property SequenceModel
 * @property-read ITaxExtension $TaxExtension property TaxExtension
 * @property float $DownPayment property DownPayment
 * @property int|VT_USERDEFINED $ReserveInvoice property ReserveInvoice
 * @property int $LanguageCode property LanguageCode
 * @property string $TrackingNumber property TrackingNumber
 * @property string $PickRemark property PickRemark
 * @property int|VT_USERDEFINED $UseCorrectionVATGroup property UseCorrectionVATGroup
 * @property-read float $TotalDiscount property TotalDiscount
 * @property float $VatPercent property VatPercent
 * @property-read mixed|VT_PTR $Packages property Packages
 * @property-read mixed|VT_PTR $Installments property Installments
 * @property-read mixed|VT_PTR $SpecialLines property SpecialLines
 * @property float $DownPaymentAmount property DownPaymentAmount
 * @property float $DownPaymentPercentage property DownPaymentPercentage
 * @property int|VT_USERDEFINED $DownPaymentType property DownPaymentType
 * @property-read mixed|VT_PTR $DownPaymentsToDraw property DownPaymentsToDraw
 * @property float $DownPaymentAmountFC property DownPaymentAmountFC
 * @property float $DownPaymentAmountSC property DownPaymentAmountSC
 * @property string $OpeningRemarks property OpeningRemarks
 * @property string $ClosingRemarks property ClosingRemarks
 * @property float $RoundingDiffAmount property RoundingDiffAmount
 * @property-read float $RoundingDiffAmountFC property RoundingDiffAmountFC
 * @property-read float $RoundingDiffAmountSC property RoundingDiffAmountSC
 * @property-read int|VT_USERDEFINED $Cancelled property Cancelled
 * @property int|VT_USERDEFINED $InsuranceOperation347 property InsuranceOperation347
 * @property float $ServiceGrossProfitPercent property ServiceGrossProfitPercent
 * @property-read mixed|VT_PTR $AddressExtension property AddressExtension
 * @property string $ControlAccount property ControlAccount
 * @property int|VT_USERDEFINED $ArchiveNonremovableSalesQuotation property ArchiveNonremovableSalesQuotation
 * @property int $GTSChecker property GTSChecker
 * @property int $GTSPayee property GTSPayee
 * @property int $ExtraMonth property ExtraMonth
 * @property int $ExtraDays property ExtraDays
 * @property int $CashDiscountDateOffset property CashDiscountDateOffset
 * @property int|VT_USERDEFINED $StartFrom property StartFrom
 * @property int|VT_USERDEFINED $NTSApproved property NTSApproved
 * @property int $ETaxWebSite property ETaxWebSite
 * @property string $ETaxNumber property ETaxNumber
 * @property string $NTSApprovedNumber property NTSApprovedNumber
 * @property-read string $SignatureInputMessage property SignatureInputMessage
 * @property-read string $SignatureDigest property SignatureDigest
 * @property-read string $CertificationNumber property CertificationNumber
 * @property-read int $PrivateKeyVersion property PrivateKeyVersion
 * @property int $GroupSeries property GroupSeries
 * @property int $GroupNumber property GroupNumber
 * @property int|VT_USERDEFINED $GroupHandWritten property GroupHandWritten
 * @property int|VT_USERDEFINED $ReopenOriginalDocument property ReopenOriginalDocument
 * @property int|VT_USERDEFINED $ReopenManuallyClosedOrCanceledDocument property ReopenManuallyClosedOrCanceledDocument
 * @property int|VT_USERDEFINED $EDocGenerationType property EDocGenerationType
 * @property int $EDocSeries property EDocSeries
 * @property string $EDocNum property EDocNum
 * @property int $EDocExportFormat property EDocExportFormat
 * @property int|VT_USERDEFINED $DownPaymentStatus property DownPaymentStatus
 * @property int|VT_USERDEFINED $CreateOnlineQuotation property CreateOnlineQuotation
 * @property string $POSEquipmentNumber property POSEquipmentNumber
 * @property string $POSManufacturerSerialNumber property POSManufacturerSerialNumber
 * @property int $POSCashierNumber property POSCashierNumber
 * @property int|VT_USERDEFINED $ApplyCurrentVATRatesForDownPaymentsToDraw property ApplyCurrentVATRatesForDownPaymentsToDraw
 * @property int|VT_USERDEFINED $ClosingOption property ClosingOption
 * @property string|VT_DATE $SpecifiedClosingDate property SpecifiedClosingDate
 * @property int|VT_USERDEFINED $OpenForLandedCosts property OpenForLandedCosts
 * @property-read mixed|VT_PTR $Document_ApprovalRequests property Document_ApprovalRequests
 * @property-read int|VT_USERDEFINED $AuthorizationStatus property AuthorizationStatus
 * @property-read float $TotalDiscountFC property TotalDiscountFC
 * @property-read float $TotalDiscountSC property TotalDiscountSC
 * @property int|VT_USERDEFINED $RelevantToGTS property RelevantToGTS
 * @property int|VT_USERDEFINED $EDocStatus property EDocStatus
 * @property string $EDocErrorCode property EDocErrorCode
 * @property string $EDocErrorMessage property EDocErrorMessage
 * @property-read string $BPLName property BPLName
 * @property-read string $VATRegNum property VATRegNum
 * @property int $AnnualInvoiceDeclarationReference property AnnualInvoiceDeclarationReference
 * @property string $Supplier property Supplier
 * @property int $Releaser property Releaser
 * @property int $Receiver property Receiver
 * @property int $BlanketAgreementNumber property BlanketAgreementNumber
 * @property int|VT_USERDEFINED $IsAlteration property IsAlteration
 * @property string|VT_DATE $AssetValueDate property AssetValueDate
 * @property string $Requester property Requester
 * @property string $RequesterName property RequesterName
 * @property int $RequesterBranch property RequesterBranch
 * @property int $RequesterDepartment property RequesterDepartment
 * @property string $RequesterEmail property RequesterEmail
 * @property int|VT_USERDEFINED $SendNotification property SendNotification
 * @property int $AttachmentEntry property AttachmentEntry
 * @property int $ReqType property ReqType
 * @property-read int|VT_USERDEFINED $CancelStatus Property CancelStatus
 * @property int|VT_USERDEFINED $DocumentDelivery Property DocumentDelivery
 * @property int|VT_USERDEFINED $ReuseDocumentNum property ReuseDocumentNum
 * @property int|VT_USERDEFINED $ReuseNotaFiscalNum property ReuseNotaFiscalNum
 * @property string $AuthorizationCode property AuthorizationCode
 * @property string|VT_DATE $StartDeliveryDate property StartDeliveryDate
 * @property string|VT_DATE $StartDeliveryTime property StartDeliveryTime
 * @property string|VT_DATE $EndDeliveryDate property EndDeliveryDate
 * @property string|VT_DATE $EndDeliveryTime property EndDeliveryTime
 * @property string $VehiclePlate property VehiclePlate
 * @property string $ATDocumentType property ATDocumentType
 * @property int|VT_USERDEFINED $ElecCommStatus property ElecCommStatus
 * @property-read string $ElecCommMessage property ElecCommMessage
 * @property int|VT_USERDEFINED $PrintSEPADirect property PrintSEPADirect
 * @property string $FiscalDocNum property FiscalDocNum
 * @property int $POSDailySummaryNo property POSDailySummaryNo
 * @property int $POSReceiptNo property POSReceiptNo
 * @property string $PointOfIssueCode property PointOfIssueCode
 * @property int|VT_USERDEFINED $Letter property Letter
 * @property int $FolioNumberFrom property FolioNumberFrom
 * @property int $FolioNumberTo property FolioNumberTo
 * @property int|VT_USERDEFINED $InterimType property InterimType
 * @property int $RelatedType property RelatedType
 * @property int $RelatedEntry property RelatedEntry
 * @property-read mixed|VT_PTR $WithholdingTaxDataWTX property WithholdingTaxDataWTX
 */
class IDocuments 
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
	 * Add
	 */
	function Add()
	{
	}

	/**
	 * DISPID=2
	 * @var mixed|VT_PTR $Lines [26] Invoke the lines object
	*/
	var $Lines;

	/**
	 * DISPID=3
	 * @var int $DocNum [3] Doc num
	*/
	var $DocNum;

	/**
	 * DISPID=4
	 * @var int|VT_USERDEFINED $DocType [29] Doc type
	*/
	var $DocType;

	/**
	 * DISPID=5
	 * @var int|VT_USERDEFINED $HandWritten [29] Hand Written
	*/
	var $HandWritten;

	/**
	 * DISPID=6
	 * @var int|VT_USERDEFINED $Printed [29] Printed
	*/
	var $Printed;

	/**
	 * DISPID=7
	 * @var string|VT_DATE $DocDate [7] Doc date
	*/
	var $DocDate;

	/**
	 * DISPID=8
	 * @var string|VT_DATE $DocDueDate [7] Doc due date
	*/
	var $DocDueDate;

	/**
	 * DISPID=9
	 * @var string $CardCode [8] Card code
	*/
	var $CardCode;

	/**
	 * DISPID=10
	 * @var string $CardName [8] Card name
	*/
	var $CardName;

	/**
	 * DISPID=11
	 * @var string $Address [8] Address
	*/
	var $Address;

	/**
	 * DISPID=12
	 * @var string $NumAtCard [8] Num at card
	*/
	var $NumAtCard;

	/**
	 * DISPID=13
	 * @var string $DocCurrency [8] Doc currency
	*/
	var $DocCurrency;

	/**
	 * DISPID=14
	 * @var float $DocRate [5] Doc rate
	*/
	var $DocRate;

	/**
	 * DISPID=15
	 * @var float $DocTotal [5] Doc total
	*/
	var $DocTotal;

	/**
	 * DISPID=16
	 * @var string $Reference1 [8] Referance 1
	*/
	var $Reference1;

	/**
	 * DISPID=17
	 * @var string $Reference2 [8] Referance 2
	*/
	var $Reference2;

	/**
	 * DISPID=18
	 * @var string $Comments [8] Comments
	*/
	var $Comments;

	/**
	 * DISPID=19
	 * @var string $JournalMemo [8] Jurnal memo
	*/
	var $JournalMemo;

	/**
	 * DISPID=20
	 * @var int $PaymentGroupCode [3] Payment group code
	*/
	var $PaymentGroupCode;

	/**
	 * DISPID=21
	 * @var string|VT_DATE $DocTime [7] Doc time
	*/
	var $DocTime;

	/**
	 * DISPID=22
	 * @var int $SalesPersonCode [3] Sales person code
	*/
	var $SalesPersonCode;

	/**
	 * DISPID=23
	 * @var int $TransportationCode [3] Transportation code
	*/
	var $TransportationCode;

	/**
	 * DISPID=25
	 * @var int|VT_USERDEFINED $Confirmed [29] Confirmed
	*/
	var $Confirmed;

	/**
	 * DISPID=26
	 * @var int $ImportFileNum [3] Import file num
	*/
	var $ImportFileNum;

	/**
	 * DISPID=27
	 * @var int|VT_USERDEFINED $SummeryType [29] Summery type
	*/
	var $SummeryType;

	/**
	 * DISPID=28
	 * @var int $ContactPersonCode [3] Contact person code
	*/
	var $ContactPersonCode;

	/**
	 * DISPID=29
	 * @var int|VT_USERDEFINED $ShowSCN [29] Show scn
	*/
	var $ShowSCN;

	/**
	 * DISPID=30
	 * @var int $Series [3] Series
	*/
	var $Series;

	/**
	 * DISPID=31
	 * @var string|VT_DATE $TaxDate [7] Tax date
	*/
	var $TaxDate;

	/**
	 * DISPID=32
	 * @var int|VT_USERDEFINED $PartialSupply [29] Partial supply
	*/
	var $PartialSupply;

	/**
	 * DISPID=35
	 * @param int $AbsEntry 
	 * @return bool 
	 * Get by key
	 */
	function GetByKey(
		/* int [3]  */ $AbsEntry 
	)
	{
	}

	/**
	 * DISPID=37
	 * @var IUserFields $UserFields [26] Invoke the user fields object
	*/
	var $UserFields;

	/**
	 * DISPID=38
	 * @param string $FileName [in][out]
	 * @return void 
	 * Save object as XML document
	 */
	function SaveXML(
		/* mixed|VT_PTR [26] [in][out] --> string [8]  */ &$FileName 
	)
	{
	}

	/**
	 * DISPID=39
	 * @return int 
	 * method Update
	 */
	function Update()
	{
	}

	/**
	 * DISPID=40
	 * @var int|VT_USERDEFINED $DocObjectCode [29] property DocObjectCode
	*/
	var $DocObjectCode;

	/**
	 * DISPID=41
	 * @var string $ShipToCode [8] property ShipToCode
	*/
	var $ShipToCode;

	/**
	 * DISPID=42
	 * @var string $Indicator [8] property Indicator
	*/
	var $Indicator;

	/**
	 * DISPID=43
	 * @var string $FederalTaxID [8] property FederalTaxID
	*/
	var $FederalTaxID;

	/**
	 * DISPID=44
	 * @return int 
	 * method Cancel
	 */
	function Cancel()
	{
	}

	/**
	 * DISPID=45
	 * @return int 
	 * method Close
	 */
	function Close()
	{
	}

	/**
	 * DISPID=46
	 * @return int 
	 * method Remove
	 */
	function Remove()
	{
	}

	/**
	 * DISPID=48
	 * @var mixed|VT_PTR $Browser [26] User fields for this object.
	*/
	var $Browser;

	/**
	 * DISPID=49
	 * @var float $DiscountPercent [5] property DiscountPercent
	*/
	var $DiscountPercent;

	/**
	 * DISPID=50
	 * @var string $PaymentReference [8] property PaymentReference
	*/
	var $PaymentReference;

	/**
	 * DISPID=51
	 * @var int $DocEntry [3] property DocEntry
	*/
	var $DocEntry;

	/**
	 * DISPID=52
	 * @var string|VT_DATE $CreationDate [7] property CreationDate
	*/
	var $CreationDate;

	/**
	 * DISPID=53
	 * @var string|VT_DATE $UpdateDate [7] property UpdateDate
	*/
	var $UpdateDate;

	/**
	 * DISPID=54
	 * @var int $FinancialPeriod [3] property FinancialPeriod
	*/
	var $FinancialPeriod;

	/**
	 * DISPID=55
	 * @var int $TransNum [3] property TransNum
	*/
	var $TransNum;

	/**
	 * DISPID=56
	 * @var float $VatSum [5] property VatSum
	*/
	var $VatSum;

	/**
	 * DISPID=57
	 * @var float $VatSumSys [5] property VatSumSys
	*/
	var $VatSumSys;

	/**
	 * DISPID=58
	 * @var float $VatSumFc [5] property VatSumFc
	*/
	var $VatSumFc;

	/**
	 * DISPID=59
	 * @var int|VT_USERDEFINED $NetProcedure [29] property NetProcedure
	*/
	var $NetProcedure;

	/**
	 * DISPID=60
	 * @var float $DocTotalFc [5] property DocTotalFc
	*/
	var $DocTotalFc;

	/**
	 * DISPID=61
	 * @var float $DocTotalSys [5] property DocTotalSys
	*/
	var $DocTotalSys;

	/**
	 * DISPID=62
	 * @var int $Form1099 [3] property Form1099
	*/
	var $Form1099;

	/**
	 * DISPID=63
	 * @var string $Box1099 [8] property Box1099
	*/
	var $Box1099;

	/**
	 * DISPID=64
	 * @var int|VT_USERDEFINED $RevisionPo [29] property RevisionPo
	*/
	var $RevisionPo;

	/**
	 * DISPID=65
	 * @var string|VT_DATE $RequriedDate [7] property RequriedDate
	*/
	var $RequriedDate;

	/**
	 * DISPID=66
	 * @var string|VT_DATE $CancelDate [7] property CancelDate
	*/
	var $CancelDate;

	/**
	 * DISPID=67
	 * @var int|VT_USERDEFINED $BlockDunning [29] property BlockDunning
	*/
	var $BlockDunning;

	/**
	 * DISPID=68
	 * @var int|VT_USERDEFINED $Submitted [29] property Submitted
	*/
	var $Submitted;

	/**
	 * DISPID=69
	 * @var int $Segment [3] property Segment
	*/
	var $Segment;

	/**
	 * DISPID=70
	 * @var int|VT_USERDEFINED $PickStatus [29] property PickStatus
	*/
	var $PickStatus;

	/**
	 * DISPID=71
	 * @var int|VT_USERDEFINED $Pick [29] property Pick
	*/
	var $Pick;

	/**
	 * DISPID=72
	 * @var string $PaymentMethod [8] property PaymentMethod
	*/
	var $PaymentMethod;

	/**
	 * DISPID=73
	 * @var int|VT_USERDEFINED $PaymentBlock [29] property PaymentBlock
	*/
	var $PaymentBlock;

	/**
	 * DISPID=74
	 * @var int $PaymentBlockEntry [3] property PaymentBlockEntry
	*/
	var $PaymentBlockEntry;

	/**
	 * DISPID=75
	 * @var string $CentralBankIndicator [8] property CentralBankIndicator
	*/
	var $CentralBankIndicator;

	/**
	 * DISPID=76
	 * @var int|VT_USERDEFINED $MaximumCashDiscount [29] property MaximumCashDiscount
	*/
	var $MaximumCashDiscount;

	/**
	 * DISPID=77
	 * @var int|VT_USERDEFINED $Reserve [29] property Reserve
	*/
	var $Reserve;

	/**
	 * DISPID=78
	 * @var string $Project [8] property Project
	*/
	var $Project;

	/**
	 * DISPID=80
	 * @var string|VT_DATE $ExemptionValidityDateFrom [7] property ExemptionValidityDateFrom
	*/
	var $ExemptionValidityDateFrom;

	/**
	 * DISPID=81
	 * @var string|VT_DATE $ExemptionValidityDateTo [7] property ExemptionValidityDateTo
	*/
	var $ExemptionValidityDateTo;

	/**
	 * DISPID=82
	 * @var int|VT_USERDEFINED $WareHouseUpdateType [29] property WareHouseUpdateType
	*/
	var $WareHouseUpdateType;

	/**
	 * DISPID=83
	 * @var mixed|VT_PTR $Expenses [26] property Expenses
	*/
	var $Expenses;

	/**
	 * DISPID=84
	 * @var int|VT_USERDEFINED $Rounding [29] property Rounding
	*/
	var $Rounding;

	/**
	 * DISPID=89
	 * @var string $ExternalCorrectedDocNum [8] property ExternalCorrectedDocNum
	*/
	var $ExternalCorrectedDocNum;

	/**
	 * DISPID=90
	 * @var int $InternalCorrectedDocNum [3] property InternalCorrectedDocNum
	*/
	var $InternalCorrectedDocNum;

	/**
	 * DISPID=91
	 * @var int $NextCorrectingDocument [3] property NextCorrectingDocument
	*/
	var $NextCorrectingDocument;

	/**
	 * DISPID=92
	 * @var int|VT_USERDEFINED $DeferredTax [29] property DeferredTax
	*/
	var $DeferredTax;

	/**
	 * DISPID=93
	 * @var string $TaxExemptionLetterNum [8] property TaxExemptionLetterNum
	*/
	var $TaxExemptionLetterNum;

	/**
	 * DISPID=94
	 * @var float $WTApplied [5] property WTApplied
	*/
	var $WTApplied;

	/**
	 * DISPID=95
	 * @var float $WTAppliedFC [5] property WTAppliedFC
	*/
	var $WTAppliedFC;

	/**
	 * DISPID=96
	 * @var int|VT_USERDEFINED $BillOfExchangeReserved [29] property BillOfExchangeReserved
	*/
	var $BillOfExchangeReserved;

	/**
	 * DISPID=97
	 * @var string $AgentCode [8] property AgentCode
	*/
	var $AgentCode;

	/**
	 * DISPID=98
	 * @var float $WTAppliedSC [5] property WTAppliedSC
	*/
	var $WTAppliedSC;

	/**
	 * DISPID=99
	 * @var float $TotalEqualizationTax [5] property TotalEqualizationTax
	*/
	var $TotalEqualizationTax;

	/**
	 * DISPID=100
	 * @var float $TotalEqualizationTaxFC [5] property TotalEqualizationTaxFC
	*/
	var $TotalEqualizationTaxFC;

	/**
	 * DISPID=101
	 * @var float $TotalEqualizationTaxSC [5] property TotalEqualizationTaxSC
	*/
	var $TotalEqualizationTaxSC;

	/**
	 * DISPID=102
	 * @var int $NumberOfInstallments [3] property NumberOfInstallments
	*/
	var $NumberOfInstallments;

	/**
	 * DISPID=103
	 * @var int|VT_USERDEFINED $ApplyTaxOnFirstInstallment [29] property ApplyTaxOnFirstInstallment
	*/
	var $ApplyTaxOnFirstInstallment;

	/**
	 * DISPID=104
	 * @var float $WTNonSubjectAmount [5] property WTNonSubjectAmount
	*/
	var $WTNonSubjectAmount;

	/**
	 * DISPID=105
	 * @var float $WTNonSubjectAmountSC [5] property WTNonSubjectAmountSC
	*/
	var $WTNonSubjectAmountSC;

	/**
	 * DISPID=106
	 * @var float $WTNonSubjectAmountFC [5] property WTNonSubjectAmountFC
	*/
	var $WTNonSubjectAmountFC;

	/**
	 * DISPID=107
	 * @var float $WTExemptedAmount [5] property WTExemptedAmount
	*/
	var $WTExemptedAmount;

	/**
	 * DISPID=108
	 * @var float $WTExemptedAmountSC [5] property WTExemptedAmountSC
	*/
	var $WTExemptedAmountSC;

	/**
	 * DISPID=109
	 * @var float $WTExemptedAmountFC [5] property WTExemptedAmountFC
	*/
	var $WTExemptedAmountFC;

	/**
	 * DISPID=110
	 * @var float $BaseAmountSC [5] property BaseAmountSC
	*/
	var $BaseAmountSC;

	/**
	 * DISPID=111
	 * @var float $BaseAmountFC [5] property BaseAmountFC
	*/
	var $BaseAmountFC;

	/**
	 * DISPID=112
	 * @var float $WTAmountFC [5] property WTAmountFC
	*/
	var $WTAmountFC;

	/**
	 * DISPID=113
	 * @var float $WTAmountSC [5] property WTAmountSC
	*/
	var $WTAmountSC;

	/**
	 * DISPID=114
	 * @var float $BaseAmount [5] property BaseAmount
	*/
	var $BaseAmount;

	/**
	 * DISPID=115
	 * @var float $WTAmount [5] property WTAmount
	*/
	var $WTAmount;

	/**
	 * DISPID=116
	 * @var string|VT_DATE $VatDate [7] property VatDate
	*/
	var $VatDate;

	/**
	 * DISPID=117
	 * @var string $ManualNumber [8] property ManualNumber
	*/
	var $ManualNumber;

	/**
	 * DISPID=118
	 * @var int|VT_USERDEFINED $UseShpdGoodsAct [29] property UseShpdGoodsAct
	*/
	var $UseShpdGoodsAct;

	/**
	 * DISPID=119
	 * @var int $FolioNumber [3] property FolioNumber
	*/
	var $FolioNumber;

	/**
	 * DISPID=120
	 * @var int|VT_USERDEFINED $DocumentSubType [29] property DocumentSubType
	*/
	var $DocumentSubType;

	/**
	 * DISPID=121
	 * @var string $BPChannelCode [8] property BPChannelCode
	*/
	var $BPChannelCode;

	/**
	 * DISPID=122
	 * @var int $BPChannelContact [3] property BPChannelContact
	*/
	var $BPChannelContact;

	/**
	 * DISPID=123
	 * @var mixed|VT_PTR $WithholdingTaxData [26] property WithholdingTaxData
	*/
	var $WithholdingTaxData;

	/**
	 * DISPID=124
	 * @var string $DocObjectCodeEx [8] property DocObjectCodeEx
	*/
	var $DocObjectCodeEx;

	/**
	 * DISPID=125
	 * @var string $Address2 [8] property Address2
	*/
	var $Address2;

	/**
	 * DISPID=126
	 * @var int|VT_USERDEFINED $DocumentStatus [29] property DocumentStatus
	*/
	var $DocumentStatus;

	/**
	 * DISPID=127
	 * @var string $PeriodIndicator [8] property Period Indicator
	*/
	var $PeriodIndicator;

	/**
	 * DISPID=129
	 * @var string $PayToCode [8] property Pay to code
	*/
	var $PayToCode;

	/**
	 * DISPID=130
	 * @var int $DocumentsOwner [3] property DocumentsOwner
	*/
	var $DocumentsOwner;

	/**
	 * DISPID=131
	 * @var string $FolioPrefixString [8] property FolioPrefixString
	*/
	var $FolioPrefixString;

	/**
	 * DISPID=132
	 * @var int|VT_USERDEFINED $IsPayToBank [29] property IsPayToBank
	*/
	var $IsPayToBank;

	/**
	 * DISPID=133
	 * @var string $PayToBankCountry [8] property PayToBankCountry
	*/
	var $PayToBankCountry;

	/**
	 * DISPID=134
	 * @var string $PayToBankCode [8] property PayToBankCode
	*/
	var $PayToBankCode;

	/**
	 * DISPID=135
	 * @var string $PayToBankAccountNo [8] property PayToBankAccountNo
	*/
	var $PayToBankAccountNo;

	/**
	 * DISPID=136
	 * @var string $PayToBankBranch [8] property PayToBankBranch
	*/
	var $PayToBankBranch;

	/**
	 * DISPID=137
	 * @return string 
	 * Get the object's data in xml format.
	 */
	function GetAsXML()
	{
	}

	/**
	 * DISPID=138
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
	 * DISPID=139
	 * @var int $BPL_IDAssignedToInvoice [3] property BPL_IDAssignedToInvoice
	*/
	var $BPL_IDAssignedToInvoice;

	/**
	 * DISPID=140
	 * @var string|VT_DATE $ClosingDate [7] property ClosingDate
	*/
	var $ClosingDate;

	/**
	 * DISPID=141
	 * @var int $SequenceSerial [3] property SequenceSerial
	*/
	var $SequenceSerial;

	/**
	 * DISPID=142
	 * @var int $SequenceCode [3] property SequenceCode
	*/
	var $SequenceCode;

	/**
	 * DISPID=143
	 * @var string $SeriesString [8] property SeriesString
	*/
	var $SeriesString;

	/**
	 * DISPID=144
	 * @var string $SubSeriesString [8] property SubSeriesString
	*/
	var $SubSeriesString;

	/**
	 * DISPID=145
	 * @var string $SequenceModel [8] property SequenceModel
	*/
	var $SequenceModel;

	/**
	 * DISPID=146
	 * @var mixed|VT_PTR $TaxExtension [26] property TaxExtension
	*/
	var $TaxExtension;

	/**
	 * DISPID=147
	 * @var float $DownPayment [5] property DownPayment
	*/
	var $DownPayment;

	/**
	 * DISPID=148
	 * @var int|VT_USERDEFINED $ReserveInvoice [29] property ReserveInvoice
	*/
	var $ReserveInvoice;

	/**
	 * DISPID=149
	 * @var int $LanguageCode [3] property LanguageCode
	*/
	var $LanguageCode;

	/**
	 * DISPID=150
	 * @var string $TrackingNumber [8] property TrackingNumber
	*/
	var $TrackingNumber;

	/**
	 * DISPID=151
	 * @var string $PickRemark [8] property PickRemark
	*/
	var $PickRemark;

	/**
	 * DISPID=152
	 * @var int|VT_USERDEFINED $UseCorrectionVATGroup [29] property UseCorrectionVATGroup
	*/
	var $UseCorrectionVATGroup;

	/**
	 * DISPID=153
	 * @var float $TotalDiscount [5] property TotalDiscount
	*/
	var $TotalDiscount;

	/**
	 * DISPID=154
	 * @var float $VatPercent [5] property VatPercent
	*/
	var $VatPercent;

	/**
	 * DISPID=155
	 * @var mixed|VT_PTR $Packages [26] property Packages
	*/
	var $Packages;

	/**
	 * DISPID=156
	 * @var mixed|VT_PTR $Installments [26] property Installments
	*/
	var $Installments;

	/**
	 * DISPID=157
	 * @var mixed|VT_PTR $SpecialLines [26] property SpecialLines
	*/
	var $SpecialLines;

	/**
	 * DISPID=158
	 * @var float $DownPaymentAmount [5] property DownPaymentAmount
	*/
	var $DownPaymentAmount;

	/**
	 * DISPID=159
	 * @var float $DownPaymentPercentage [5] property DownPaymentPercentage
	*/
	var $DownPaymentPercentage;

	/**
	 * DISPID=160
	 * @var int|VT_USERDEFINED $DownPaymentType [29] property DownPaymentType
	*/
	var $DownPaymentType;

	/**
	 * DISPID=161
	 * @var mixed|VT_PTR $DownPaymentsToDraw [26] property DownPaymentsToDraw
	*/
	var $DownPaymentsToDraw;

	/**
	 * DISPID=162
	 * @var float $DownPaymentAmountFC [5] property DownPaymentAmountFC
	*/
	var $DownPaymentAmountFC;

	/**
	 * DISPID=163
	 * @var float $DownPaymentAmountSC [5] property DownPaymentAmountSC
	*/
	var $DownPaymentAmountSC;

	/**
	 * DISPID=164
	 * @var string $OpeningRemarks [8] property OpeningRemarks
	*/
	var $OpeningRemarks;

	/**
	 * DISPID=165
	 * @var string $ClosingRemarks [8] property ClosingRemarks
	*/
	var $ClosingRemarks;

	/**
	 * DISPID=166
	 * @var float $RoundingDiffAmount [5] property RoundingDiffAmount
	*/
	var $RoundingDiffAmount;

	/**
	 * DISPID=167
	 * @var float $RoundingDiffAmountFC [5] property RoundingDiffAmountFC
	*/
	var $RoundingDiffAmountFC;

	/**
	 * DISPID=168
	 * @var float $RoundingDiffAmountSC [5] property RoundingDiffAmountSC
	*/
	var $RoundingDiffAmountSC;

	/**
	 * DISPID=169
	 * @var int|VT_USERDEFINED $Cancelled [29] property Cancelled
	*/
	var $Cancelled;

	/**
	 * DISPID=171
	 * @return int 
	 * method Reopen
	 */
	function Reopen()
	{
	}

	/**
	 * DISPID=170
	 * @var int|VT_USERDEFINED $InsuranceOperation347 [29] property InsuranceOperation347
	*/
	var $InsuranceOperation347;

	/**
	 * DISPID=172
	 * @var float $ServiceGrossProfitPercent [5] property ServiceGrossProfitPercent
	*/
	var $ServiceGrossProfitPercent;

	/**
	 * DISPID=173
	 * @var mixed|VT_PTR $AddressExtension [26] property AddressExtension
	*/
	var $AddressExtension;

	/**
	 * DISPID=174
	 * @var string $ControlAccount [8] property ControlAccount
	*/
	var $ControlAccount;

	/**
	 * DISPID=175
	 * @var int|VT_USERDEFINED $ArchiveNonremovableSalesQuotation [29] property ArchiveNonremovableSalesQuotation
	*/
	var $ArchiveNonremovableSalesQuotation;

	/**
	 * DISPID=176
	 * @var int $GTSChecker [3] property GTSChecker
	*/
	var $GTSChecker;

	/**
	 * DISPID=177
	 * @var int $GTSPayee [3] property GTSPayee
	*/
	var $GTSPayee;

	/**
	 * DISPID=178
	 * @var int $ExtraMonth [3] property ExtraMonth
	*/
	var $ExtraMonth;

	/**
	 * DISPID=179
	 * @var int $ExtraDays [3] property ExtraDays
	*/
	var $ExtraDays;

	/**
	 * DISPID=180
	 * @var int $CashDiscountDateOffset [3] property CashDiscountDateOffset
	*/
	var $CashDiscountDateOffset;

	/**
	 * DISPID=181
	 * @var int|VT_USERDEFINED $StartFrom [29] property StartFrom
	*/
	var $StartFrom;

	/**
	 * DISPID=182
	 * @var int|VT_USERDEFINED $NTSApproved [29] property NTSApproved
	*/
	var $NTSApproved;

	/**
	 * DISPID=183
	 * @var int $ETaxWebSite [3] property ETaxWebSite
	*/
	var $ETaxWebSite;

	/**
	 * DISPID=184
	 * @var string $ETaxNumber [8] property ETaxNumber
	*/
	var $ETaxNumber;

	/**
	 * DISPID=185
	 * @var string $NTSApprovedNumber [8] property NTSApprovedNumber
	*/
	var $NTSApprovedNumber;

	/**
	 * DISPID=186
	 * @var string $SignatureInputMessage [8] property SignatureInputMessage
	*/
	var $SignatureInputMessage;

	/**
	 * DISPID=187
	 * @var string $SignatureDigest [8] property SignatureDigest
	*/
	var $SignatureDigest;

	/**
	 * DISPID=188
	 * @var string $CertificationNumber [8] property CertificationNumber
	*/
	var $CertificationNumber;

	/**
	 * DISPID=189
	 * @var int $PrivateKeyVersion [3] property PrivateKeyVersion
	*/
	var $PrivateKeyVersion;

	/**
	 * DISPID=190
	 * @var int $GroupSeries [3] property GroupSeries
	*/
	var $GroupSeries;

	/**
	 * DISPID=191
	 * @var int $GroupNumber [3] property GroupNumber
	*/
	var $GroupNumber;

	/**
	 * DISPID=192
	 * @var int|VT_USERDEFINED $GroupHandWritten [29] property GroupHandWritten
	*/
	var $GroupHandWritten;

	/**
	 * DISPID=193
	 * @var int|VT_USERDEFINED $ReopenOriginalDocument [29] property ReopenOriginalDocument
	*/
	var $ReopenOriginalDocument;

	/**
	 * DISPID=194
	 * @var int|VT_USERDEFINED $ReopenManuallyClosedOrCanceledDocument [29] property ReopenManuallyClosedOrCanceledDocument
	*/
	var $ReopenManuallyClosedOrCanceledDocument;

	/**
	 * DISPID=195
	 * @var int|VT_USERDEFINED $EDocGenerationType [29] property EDocGenerationType
	*/
	var $EDocGenerationType;

	/**
	 * DISPID=196
	 * @var int $EDocSeries [3] property EDocSeries
	*/
	var $EDocSeries;

	/**
	 * DISPID=197
	 * @var string $EDocNum [8] property EDocNum
	*/
	var $EDocNum;

	/**
	 * DISPID=198
	 * @var int $EDocExportFormat [3] property EDocExportFormat
	*/
	var $EDocExportFormat;

	/**
	 * DISPID=199
	 * @var int|VT_USERDEFINED $DownPaymentStatus [29] property DownPaymentStatus
	*/
	var $DownPaymentStatus;

	/**
	 * DISPID=200
	 * @var int|VT_USERDEFINED $CreateOnlineQuotation [29] property CreateOnlineQuotation
	*/
	var $CreateOnlineQuotation;

	/**
	 * DISPID=201
	 * @var string $POSEquipmentNumber [8] property POSEquipmentNumber
	*/
	var $POSEquipmentNumber;

	/**
	 * DISPID=202
	 * @var string $POSManufacturerSerialNumber [8] property POSManufacturerSerialNumber
	*/
	var $POSManufacturerSerialNumber;

	/**
	 * DISPID=203
	 * @var int $POSCashierNumber [3] property POSCashierNumber
	*/
	var $POSCashierNumber;

	/**
	 * DISPID=204
	 * @var int|VT_USERDEFINED $ApplyCurrentVATRatesForDownPaymentsToDraw [29] property ApplyCurrentVATRatesForDownPaymentsToDraw
	*/
	var $ApplyCurrentVATRatesForDownPaymentsToDraw;

	/**
	 * DISPID=210
	 * @var int|VT_USERDEFINED $ClosingOption [29] property ClosingOption
	*/
	var $ClosingOption;

	/**
	 * DISPID=211
	 * @var string|VT_DATE $SpecifiedClosingDate [7] property SpecifiedClosingDate
	*/
	var $SpecifiedClosingDate;

	/**
	 * DISPID=212
	 * @var int|VT_USERDEFINED $OpenForLandedCosts [29] property OpenForLandedCosts
	*/
	var $OpenForLandedCosts;

	/**
	 * DISPID=213
	 * @return int 
	 * method SaveDraftToDocument
	 */
	function SaveDraftToDocument()
	{
	}

	/**
	 * DISPID=214
	 * @return int 
	 * method GetApprovalTemplates
	 */
	function GetApprovalTemplates()
	{
	}

	/**
	 * DISPID=215
	 * @var mixed|VT_PTR $Document_ApprovalRequests [26] property Document_ApprovalRequests
	*/
	var $Document_ApprovalRequests;

	/**
	 * DISPID=216
	 * @var int|VT_USERDEFINED $AuthorizationStatus [29] property AuthorizationStatus
	*/
	var $AuthorizationStatus;

	/**
	 * DISPID=217
	 * @param string $FileName [in]
	 * @return int 
	 * method UpdateFromXML
	 */
	function UpdateFromXML(
		/* string [8] [in] */ $FileName 
	)
	{
	}

	/**
	 * DISPID=218
	 * @var float $TotalDiscountFC [5] property TotalDiscountFC
	*/
	var $TotalDiscountFC;

	/**
	 * DISPID=219
	 * @var float $TotalDiscountSC [5] property TotalDiscountSC
	*/
	var $TotalDiscountSC;

	/**
	 * DISPID=220
	 * @var int|VT_USERDEFINED $RelevantToGTS [29] property RelevantToGTS
	*/
	var $RelevantToGTS;

	/**
	 * DISPID=221
	 * @var int|VT_USERDEFINED $EDocStatus [29] property EDocStatus
	*/
	var $EDocStatus;

	/**
	 * DISPID=222
	 * @var string $EDocErrorCode [8] property EDocErrorCode
	*/
	var $EDocErrorCode;

	/**
	 * DISPID=223
	 * @var string $EDocErrorMessage [8] property EDocErrorMessage
	*/
	var $EDocErrorMessage;

	/**
	 * DISPID=224
	 * @var string $BPLName [8] property BPLName
	*/
	var $BPLName;

	/**
	 * DISPID=225
	 * @var string $VATRegNum [8] property VATRegNum
	*/
	var $VATRegNum;

	/**
	 * DISPID=226
	 * @var int $AnnualInvoiceDeclarationReference [3] property AnnualInvoiceDeclarationReference
	*/
	var $AnnualInvoiceDeclarationReference;

	/**
	 * DISPID=227
	 * @var string $Supplier [8] property Supplier
	*/
	var $Supplier;

	/**
	 * DISPID=228
	 * @var int $Releaser [3] property Releaser
	*/
	var $Releaser;

	/**
	 * DISPID=229
	 * @var int $Receiver [3] property Receiver
	*/
	var $Receiver;

	/**
	 * DISPID=230
	 * @var int $BlanketAgreementNumber [3] property BlanketAgreementNumber
	*/
	var $BlanketAgreementNumber;

	/**
	 * DISPID=231
	 * @var int|VT_USERDEFINED $IsAlteration [29] property IsAlteration
	*/
	var $IsAlteration;

	/**
	 * DISPID=232
	 * @return mixed|VT_PTR 
	 * method CreateCancellationDocument
	 */
	function CreateCancellationDocument()
	{
	}

	/**
	 * DISPID=233
	 * @var string|VT_DATE $AssetValueDate [7] property AssetValueDate
	*/
	var $AssetValueDate;

	/**
	 * DISPID=234
	 * @var string $Requester [8] property Requester
	*/
	var $Requester;

	/**
	 * DISPID=235
	 * @var string $RequesterName [8] property RequesterName
	*/
	var $RequesterName;

	/**
	 * DISPID=236
	 * @var int $RequesterBranch [3] property RequesterBranch
	*/
	var $RequesterBranch;

	/**
	 * DISPID=237
	 * @var int $RequesterDepartment [3] property RequesterDepartment
	*/
	var $RequesterDepartment;

	/**
	 * DISPID=238
	 * @var string $RequesterEmail [8] property RequesterEmail
	*/
	var $RequesterEmail;

	/**
	 * DISPID=239
	 * @var int|VT_USERDEFINED $SendNotification [29] property SendNotification
	*/
	var $SendNotification;

	/**
	 * DISPID=240
	 * @var int $AttachmentEntry [3] property AttachmentEntry
	*/
	var $AttachmentEntry;

	/**
	 * DISPID=241
	 * @var int $ReqType [3] property ReqType
	*/
	var $ReqType;

	/**
	 * DISPID=242
	 * @var int|VT_USERDEFINED $CancelStatus [29] Property CancelStatus
	*/
	var $CancelStatus;

	/**
	 * DISPID=243
	 * @var int|VT_USERDEFINED $DocumentDelivery [29] Property DocumentDelivery
	*/
	var $DocumentDelivery;

	/**
	 * DISPID=244
	 * @var int|VT_USERDEFINED $ReuseDocumentNum [29] property ReuseDocumentNum
	*/
	var $ReuseDocumentNum;

	/**
	 * DISPID=245
	 * @var int|VT_USERDEFINED $ReuseNotaFiscalNum [29] property ReuseNotaFiscalNum
	*/
	var $ReuseNotaFiscalNum;

	/**
	 * DISPID=246
	 * @var string $AuthorizationCode [8] property AuthorizationCode
	*/
	var $AuthorizationCode;

	/**
	 * DISPID=247
	 * @var string|VT_DATE $StartDeliveryDate [7] property StartDeliveryDate
	*/
	var $StartDeliveryDate;

	/**
	 * DISPID=248
	 * @var string|VT_DATE $StartDeliveryTime [7] property StartDeliveryTime
	*/
	var $StartDeliveryTime;

	/**
	 * DISPID=249
	 * @var string|VT_DATE $EndDeliveryDate [7] property EndDeliveryDate
	*/
	var $EndDeliveryDate;

	/**
	 * DISPID=250
	 * @var string|VT_DATE $EndDeliveryTime [7] property EndDeliveryTime
	*/
	var $EndDeliveryTime;

	/**
	 * DISPID=251
	 * @var string $VehiclePlate [8] property VehiclePlate
	*/
	var $VehiclePlate;

	/**
	 * DISPID=252
	 * @var string $ATDocumentType [8] property ATDocumentType
	*/
	var $ATDocumentType;

	/**
	 * DISPID=253
	 * @return int 
	 * method HandleApprovalRequest
	 */
	function HandleApprovalRequest()
	{
	}

	/**
	 * DISPID=254
	 * @var int|VT_USERDEFINED $ElecCommStatus [29] property ElecCommStatus
	*/
	var $ElecCommStatus;

	/**
	 * DISPID=255
	 * @var string $ElecCommMessage [8] property ElecCommMessage
	*/
	var $ElecCommMessage;

	/**
	 * DISPID=256
	 * @var int|VT_USERDEFINED $PrintSEPADirect [29] property PrintSEPADirect
	*/
	var $PrintSEPADirect;

	/**
	 * DISPID=257
	 * @var string $FiscalDocNum [8] property FiscalDocNum
	*/
	var $FiscalDocNum;

	/**
	 * DISPID=258
	 * @var int $POSDailySummaryNo [3] property POSDailySummaryNo
	*/
	var $POSDailySummaryNo;

	/**
	 * DISPID=259
	 * @var int $POSReceiptNo [3] property POSReceiptNo
	*/
	var $POSReceiptNo;

	/**
	 * DISPID=260
	 * @var string $PointOfIssueCode [8] property PointOfIssueCode
	*/
	var $PointOfIssueCode;

	/**
	 * DISPID=261
	 * @var int|VT_USERDEFINED $Letter [29] property Letter
	*/
	var $Letter;

	/**
	 * DISPID=262
	 * @var int $FolioNumberFrom [3] property FolioNumberFrom
	*/
	var $FolioNumberFrom;

	/**
	 * DISPID=263
	 * @var int $FolioNumberTo [3] property FolioNumberTo
	*/
	var $FolioNumberTo;

	/**
	 * DISPID=264
	 * @var int|VT_USERDEFINED $InterimType [29] property InterimType
	*/
	var $InterimType;

	/**
	 * DISPID=265
	 * @var int $RelatedType [3] property RelatedType
	*/
	var $RelatedType;

	/**
	 * DISPID=266
	 * @var int $RelatedEntry [3] property RelatedEntry
	*/
	var $RelatedEntry;

	/**
	 * DISPID=267
	 * @var mixed|VT_PTR $WithholdingTaxDataWTX [26] property WithholdingTaxDataWTX
	*/
	var $WithholdingTaxDataWTX;

}