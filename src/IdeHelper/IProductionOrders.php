<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class IProductionOrders
 * GUID={1C7C966F-B713-42BF-9A74-0B15A649E63D}
 *
 * @property-read mixed|VT_PTR $Browser Get browser
 * @property-read IUserFields $UserFields Get User Fields
 * @property-read int $AbsoluteEntry property AbsoluteEntry
 * @property-read int $DocumentNumber property DocumentNumber
 * @property int $Series property Series
 * @property string $ItemNo property ItemNo
 * @property int|VT_USERDEFINED $ProductionOrderStatus property ProductionOrderStatus
 * @property int|VT_USERDEFINED $ProductionOrderType property ProductionOrderType
 * @property float $PlannedQuantity property PlannedQuantity
 * @property-read float $CompletedQuantity property CompletedQuantity
 * @property-read float $RejectedQuantity property RejectedQuantity
 * @property string|VT_DATE $PostingDate property PostingDate
 * @property string|VT_DATE $DueDate property DueDate
 * @property int $ProductionOrderOriginEntry property ProductionOrderOriginEntry
 * @property-read int $ProductionOrderOriginNumber property ProductionOrderOriginNumber
 * @property int|VT_USERDEFINED $ProductionOrderOrigin property ProductionOrderOrigin
 * @property-read int $UserSignature property UserSignature
 * @property string $Remarks property Remarks
 * @property string|VT_DATE $ClosingDate property ClosingDate
 * @property-read string|VT_DATE $ReleaseDate property ReleaseDate
 * @property string $CustomerCode property CustomerCode
 * @property string $Warehouse property Warehouse
 * @property-read string $InventoryUOM property InventoryUOM
 * @property string $JournalRemarks property JournalRemarks
 * @property-read int $TransactionNumber property TransactionNumber
 * @property-read string|VT_DATE $CreationDate property CreationDate
 * @property-read IProductionOrders_Lines $Lines property Lines
 * @property-read int|VT_USERDEFINED $Printed property Printed
 * @property string $DistributionRule property DistributionRule
 * @property string $Project property Project
 * @property string $DistributionRule2 property DistributionRule2
 * @property string $DistributionRule3 property DistributionRule3
 * @property string $DistributionRule4 property DistributionRule4
 * @property string $DistributionRule5 property DistributionRule5
 * @property-read mixed|VT_PTR $SalesOrderLines property SalesOrderLines
 * @property-read int $UoMEntry property UoMEntry
 * @property string|VT_DATE $StartDate property StartDate
 */
class IProductionOrders 
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
	 * method Cancel
	 */
	function Cancel()
	{
	}

	/**
	 * DISPID=12
	 * @var int $AbsoluteEntry [3] property AbsoluteEntry
	*/
	var $AbsoluteEntry;

	/**
	 * DISPID=13
	 * @var int $DocumentNumber [3] property DocumentNumber
	*/
	var $DocumentNumber;

	/**
	 * DISPID=14
	 * @var int $Series [3] property Series
	*/
	var $Series;

	/**
	 * DISPID=15
	 * @var string $ItemNo [8] property ItemNo
	*/
	var $ItemNo;

	/**
	 * DISPID=16
	 * @var int|VT_USERDEFINED $ProductionOrderStatus [29] property ProductionOrderStatus
	*/
	var $ProductionOrderStatus;

	/**
	 * DISPID=17
	 * @var int|VT_USERDEFINED $ProductionOrderType [29] property ProductionOrderType
	*/
	var $ProductionOrderType;

	/**
	 * DISPID=18
	 * @var float $PlannedQuantity [5] property PlannedQuantity
	*/
	var $PlannedQuantity;

	/**
	 * DISPID=19
	 * @var float $CompletedQuantity [5] property CompletedQuantity
	*/
	var $CompletedQuantity;

	/**
	 * DISPID=20
	 * @var float $RejectedQuantity [5] property RejectedQuantity
	*/
	var $RejectedQuantity;

	/**
	 * DISPID=21
	 * @var string|VT_DATE $PostingDate [7] property PostingDate
	*/
	var $PostingDate;

	/**
	 * DISPID=22
	 * @var string|VT_DATE $DueDate [7] property DueDate
	*/
	var $DueDate;

	/**
	 * DISPID=23
	 * @var int $ProductionOrderOriginEntry [3] property ProductionOrderOriginEntry
	*/
	var $ProductionOrderOriginEntry;

	/**
	 * DISPID=24
	 * @var int $ProductionOrderOriginNumber [3] property ProductionOrderOriginNumber
	*/
	var $ProductionOrderOriginNumber;

	/**
	 * DISPID=25
	 * @var int|VT_USERDEFINED $ProductionOrderOrigin [29] property ProductionOrderOrigin
	*/
	var $ProductionOrderOrigin;

	/**
	 * DISPID=26
	 * @var int $UserSignature [3] property UserSignature
	*/
	var $UserSignature;

	/**
	 * DISPID=27
	 * @var string $Remarks [8] property Remarks
	*/
	var $Remarks;

	/**
	 * DISPID=28
	 * @var string|VT_DATE $ClosingDate [7] property ClosingDate
	*/
	var $ClosingDate;

	/**
	 * DISPID=29
	 * @var string|VT_DATE $ReleaseDate [7] property ReleaseDate
	*/
	var $ReleaseDate;

	/**
	 * DISPID=30
	 * @var string $CustomerCode [8] property CustomerCode
	*/
	var $CustomerCode;

	/**
	 * DISPID=31
	 * @var string $Warehouse [8] property Warehouse
	*/
	var $Warehouse;

	/**
	 * DISPID=32
	 * @var string $InventoryUOM [8] property InventoryUOM
	*/
	var $InventoryUOM;

	/**
	 * DISPID=33
	 * @var string $JournalRemarks [8] property JournalRemarks
	*/
	var $JournalRemarks;

	/**
	 * DISPID=34
	 * @var int $TransactionNumber [3] property TransactionNumber
	*/
	var $TransactionNumber;

	/**
	 * DISPID=35
	 * @var string|VT_DATE $CreationDate [7] property CreationDate
	*/
	var $CreationDate;

	/**
	 * DISPID=36
	 * @var IProductionOrders_Lines $Lines [26] property Lines
	*/
	var $Lines;

	/**
	 * DISPID=37
	 * @var int|VT_USERDEFINED $Printed [29] property Printed
	*/
	var $Printed;

	/**
	 * DISPID=38
	 * @var string $DistributionRule [8] property DistributionRule
	*/
	var $DistributionRule;

	/**
	 * DISPID=39
	 * @var string $Project [8] property Project
	*/
	var $Project;

	/**
	 * DISPID=40
	 * @var string $DistributionRule2 [8] property DistributionRule2
	*/
	var $DistributionRule2;

	/**
	 * DISPID=41
	 * @var string $DistributionRule3 [8] property DistributionRule3
	*/
	var $DistributionRule3;

	/**
	 * DISPID=42
	 * @var string $DistributionRule4 [8] property DistributionRule4
	*/
	var $DistributionRule4;

	/**
	 * DISPID=43
	 * @var string $DistributionRule5 [8] property DistributionRule5
	*/
	var $DistributionRule5;

	/**
	 * DISPID=44
	 * @var mixed|VT_PTR $SalesOrderLines [26] property SalesOrderLines
	*/
	var $SalesOrderLines;

	/**
	 * DISPID=45
	 * @var int $UoMEntry [3] property UoMEntry
	*/
	var $UoMEntry;

	/**
	 * DISPID=46
	 * @var string|VT_DATE $StartDate [7] property StartDate
	*/
	var $StartDate;

}