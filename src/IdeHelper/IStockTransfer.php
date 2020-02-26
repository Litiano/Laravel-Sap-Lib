<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class IStockTransfer
 * GUID={8DD14B84-6D7B-49E9-8137-A3E7F9A3642F}
 *
 * @property-read IStockTransfer_Lines $Lines property Lines
 * @property int $Series property Series
 * @property-read int|VT_USERDEFINED $Printed property Printed
 * @property string|VT_DATE $DocDate property DocDate
 * @property string $CardCode property CardCode
 * @property string $CardName property CardName
 * @property string $Address property Address
 * @property string $Reference1 property Reference1
 * @property string $Reference2 property Reference2
 * @property string $Comments property Comments
 * @property string $JournalMemo property JournalMemo
 * @property int $PriceList property PriceList
 * @property int $SalesPersonCode property SalesPersonCode
 * @property string $FromWarehouse property FromWarehouse
 * @property-read mixed|VT_PTR $Browser User fields for this object.
 * @property-read int $DocEntry property DocEntry
 * @property-read string|VT_DATE $CreationDate property CreationDate
 * @property-read string|VT_DATE $UpdateDate property UpdateDate
 * @property-read int $FinancialPeriod property FinancialPeriod
 * @property-read int $TransNum property TransNum
 * @property-read int $DocNum property DocNum
 * @property string|VT_DATE $TaxDate property TaxDate
 * @property int $ContactPerson property ContactPerson
 * @property-read IUserFields $UserFields property UserFields
 * @property string $FolioPrefixString property FolioPrefixString
 * @property int $FolioNumber property FolioNumber
 * @property-read mixed|VT_PTR $TaxExtension property TaxExtension
 * @property int|VT_USERDEFINED $DocObjectCode property DocObjectCode
 * @property string|VT_DATE $DueDate property DueDate
 * @property-read mixed|VT_PTR $StockTransfer_ApprovalRequests property StockTransfer_ApprovalRequests
 * @property-read int|VT_USERDEFINED $AuthorizationStatus property AuthorizationStatus
 * @property-read int $BPLID property BPLID
 * @property-read string $BPLName property BPLName
 * @property-read string $VATRegNum property VATRegNum
 * @property string $ToWarehouse property ToWarehouse
 * @property string $AuthorizationCode property AuthorizationCode
 * @property string|VT_DATE $StartDeliveryDate property StartDeliveryDate
 * @property string|VT_DATE $StartDeliveryTime property StartDeliveryTime
 * @property string|VT_DATE $EndDeliveryDate property EndDeliveryDate
 * @property string|VT_DATE $EndDeliveryTime property EndDeliveryTime
 * @property string $VehiclePlate property VehiclePlate
 * @property string $ATDocumentType property ATDocumentType
 * @property int $EDocExportFormat property EDocExportFormat
 * @property int|VT_USERDEFINED $ElecCommStatus property ElecCommStatus
 * @property-read string $ElecCommMessage property ElecCommMessage
 * @property string $PointOfIssueCode property PointOfIssueCode
 * @property int|VT_USERDEFINED $Letter property Letter
 * @property int $FolioNumberFrom property FolioNumberFrom
 * @property int $FolioNumberTo property FolioNumberTo
 * @property int $AttachmentEntry property AttachmentEntry
 * @property-read int|VT_USERDEFINED $DocumentStatus property DocumentStatus
 */
class IStockTransfer 
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
	 * @var IStockTransfer_Lines $Lines [26] property Lines
	*/
	var $Lines;

	/**
	 * DISPID=2
	 * @return int 
	 * Add
	 */
	function Add()
	{
	}

	/**
	 * DISPID=3
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
	 * DISPID=4
	 * @return int 
	 * method Update
	 */
	function Update()
	{
	}

	/**
	 * DISPID=5
	 * @var int $Series [3] property Series
	*/
	var $Series;

	/**
	 * DISPID=6
	 * @var int|VT_USERDEFINED $Printed [29] property Printed
	*/
	var $Printed;

	/**
	 * DISPID=7
	 * @var string|VT_DATE $DocDate [7] property DocDate
	*/
	var $DocDate;

	/**
	 * DISPID=8
	 * @var string $CardCode [8] property CardCode
	*/
	var $CardCode;

	/**
	 * DISPID=9
	 * @var string $CardName [8] property CardName
	*/
	var $CardName;

	/**
	 * DISPID=10
	 * @var string $Address [8] property Address
	*/
	var $Address;

	/**
	 * DISPID=11
	 * @var string $Reference1 [8] property Reference1
	*/
	var $Reference1;

	/**
	 * DISPID=12
	 * @var string $Reference2 [8] property Reference2
	*/
	var $Reference2;

	/**
	 * DISPID=13
	 * @var string $Comments [8] property Comments
	*/
	var $Comments;

	/**
	 * DISPID=14
	 * @var string $JournalMemo [8] property JournalMemo
	*/
	var $JournalMemo;

	/**
	 * DISPID=15
	 * @var int $PriceList [3] property PriceList
	*/
	var $PriceList;

	/**
	 * DISPID=16
	 * @var int $SalesPersonCode [3] property SalesPersonCode
	*/
	var $SalesPersonCode;

	/**
	 * DISPID=17
	 * @var string $FromWarehouse [8] property FromWarehouse
	*/
	var $FromWarehouse;

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
	 * @var int $DocEntry [3] property DocEntry
	*/
	var $DocEntry;

	/**
	 * DISPID=23
	 * @var string|VT_DATE $CreationDate [7] property CreationDate
	*/
	var $CreationDate;

	/**
	 * DISPID=24
	 * @var string|VT_DATE $UpdateDate [7] property UpdateDate
	*/
	var $UpdateDate;

	/**
	 * DISPID=25
	 * @var int $FinancialPeriod [3] property FinancialPeriod
	*/
	var $FinancialPeriod;

	/**
	 * DISPID=26
	 * @var int $TransNum [3] property TransNum
	*/
	var $TransNum;

	/**
	 * DISPID=27
	 * @var int $DocNum [3] property DocNum
	*/
	var $DocNum;

	/**
	 * DISPID=28
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
	 * DISPID=29
	 * @var string|VT_DATE $TaxDate [7] property TaxDate
	*/
	var $TaxDate;

	/**
	 * DISPID=30
	 * @var int $ContactPerson [3] property ContactPerson
	*/
	var $ContactPerson;

	/**
	 * DISPID=31
	 * @var IUserFields $UserFields [26] property UserFields
	*/
	var $UserFields;

	/**
	 * DISPID=32
	 * @return string 
	 * Get the object's data in xml format.
	 */
	function GetAsXML()
	{
	}

	/**
	 * DISPID=33
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
	 * DISPID=34
	 * @var string $FolioPrefixString [8] property FolioPrefixString
	*/
	var $FolioPrefixString;

	/**
	 * DISPID=35
	 * @var int $FolioNumber [3] property FolioNumber
	*/
	var $FolioNumber;

	/**
	 * DISPID=36
	 * @var mixed|VT_PTR $TaxExtension [26] property TaxExtension
	*/
	var $TaxExtension;

	/**
	 * DISPID=37
	 * @var int|VT_USERDEFINED $DocObjectCode [29] property DocObjectCode
	*/
	var $DocObjectCode;

	/**
	 * DISPID=38
	 * @var string|VT_DATE $DueDate [7] property DueDate
	*/
	var $DueDate;

	/**
	 * DISPID=39
	 * @return int 
	 * method GetApprovalTemplates
	 */
	function GetApprovalTemplates()
	{
	}

	/**
	 * DISPID=40
	 * @return int 
	 * method SaveDraftToDocument
	 */
	function SaveDraftToDocument()
	{
	}

	/**
	 * DISPID=41
	 * @var mixed|VT_PTR $StockTransfer_ApprovalRequests [26] property StockTransfer_ApprovalRequests
	*/
	var $StockTransfer_ApprovalRequests;

	/**
	 * DISPID=42
	 * @var int|VT_USERDEFINED $AuthorizationStatus [29] property AuthorizationStatus
	*/
	var $AuthorizationStatus;

	/**
	 * DISPID=43
	 * @var int $BPLID [3] property BPLID
	*/
	var $BPLID;

	/**
	 * DISPID=44
	 * @var string $BPLName [8] property BPLName
	*/
	var $BPLName;

	/**
	 * DISPID=45
	 * @var string $VATRegNum [8] property VATRegNum
	*/
	var $VATRegNum;

	/**
	 * DISPID=46
	 * @var string $ToWarehouse [8] property ToWarehouse
	*/
	var $ToWarehouse;

	/**
	 * DISPID=47
	 * @var string $AuthorizationCode [8] property AuthorizationCode
	*/
	var $AuthorizationCode;

	/**
	 * DISPID=48
	 * @var string|VT_DATE $StartDeliveryDate [7] property StartDeliveryDate
	*/
	var $StartDeliveryDate;

	/**
	 * DISPID=49
	 * @var string|VT_DATE $StartDeliveryTime [7] property StartDeliveryTime
	*/
	var $StartDeliveryTime;

	/**
	 * DISPID=50
	 * @var string|VT_DATE $EndDeliveryDate [7] property EndDeliveryDate
	*/
	var $EndDeliveryDate;

	/**
	 * DISPID=51
	 * @var string|VT_DATE $EndDeliveryTime [7] property EndDeliveryTime
	*/
	var $EndDeliveryTime;

	/**
	 * DISPID=52
	 * @var string $VehiclePlate [8] property VehiclePlate
	*/
	var $VehiclePlate;

	/**
	 * DISPID=53
	 * @var string $ATDocumentType [8] property ATDocumentType
	*/
	var $ATDocumentType;

	/**
	 * DISPID=54
	 * @var int $EDocExportFormat [3] property EDocExportFormat
	*/
	var $EDocExportFormat;

	/**
	 * DISPID=55
	 * @return int 
	 * method HandleApprovalRequest
	 */
	function HandleApprovalRequest()
	{
	}

	/**
	 * DISPID=56
	 * @var int|VT_USERDEFINED $ElecCommStatus [29] property ElecCommStatus
	*/
	var $ElecCommStatus;

	/**
	 * DISPID=57
	 * @var string $ElecCommMessage [8] property ElecCommMessage
	*/
	var $ElecCommMessage;

	/**
	 * DISPID=58
	 * @var string $PointOfIssueCode [8] property PointOfIssueCode
	*/
	var $PointOfIssueCode;

	/**
	 * DISPID=59
	 * @var int|VT_USERDEFINED $Letter [29] property Letter
	*/
	var $Letter;

	/**
	 * DISPID=60
	 * @var int $FolioNumberFrom [3] property FolioNumberFrom
	*/
	var $FolioNumberFrom;

	/**
	 * DISPID=61
	 * @var int $FolioNumberTo [3] property FolioNumberTo
	*/
	var $FolioNumberTo;

	/**
	 * DISPID=62
	 * @var int $AttachmentEntry [3] property AttachmentEntry
	*/
	var $AttachmentEntry;

	/**
	 * DISPID=63
	 * @var int|VT_USERDEFINED $DocumentStatus [29] property DocumentStatus
	*/
	var $DocumentStatus;

}