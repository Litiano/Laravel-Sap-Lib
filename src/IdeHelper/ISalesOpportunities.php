<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class ISalesOpportunities
 * GUID={4F06C847-96F8-4421-B1C7-2FA41FCB0CFF}
 *
 * @property-read IUserFields $UserFields Get User Fields
 * @property-read mixed|VT_PTR $Browser Get Browser
 * @property-read int $SequentialNo property SequentialNo
 * @property string $CardCode property CardCode
 * @property int $SalesPerson property SalesPerson
 * @property int $ContactPerson property ContactPerson
 * @property int $Source property Source
 * @property int $InterestField1 property InterestField1
 * @property int $InterestField2 property InterestField2
 * @property int $InterestField3 property InterestField3
 * @property int $InterestLevel property InterestLevel
 * @property string|VT_DATE $StartDate property StartDate
 * @property string|VT_DATE $PredictedClosingDate property PredictedClosingDate
 * @property-read float $MaxLocalTotal property MaxLocalTotal
 * @property-read float $MaxSystemTotal property MaxSystemTotal
 * @property-read float $WeightedSumLC property WeightedSumLC
 * @property-read float $WeightedSumSC property WeightedSumSC
 * @property float $GrossProfit property GrossProfit
 * @property float $GrossProfitTotalLocal property GrossProfitTotalLocal
 * @property-read float $GrossProfitTotalSystem property GrossProfitTotalSystem
 * @property string $Remarks property Remarks
 * @property int|VT_USERDEFINED $Status property Status
 * @property int $ReasonForClosing property ReasonForClosing
 * @property float $TotalAmountLocal property TotalAmountLocal
 * @property-read float $TotalAmounSystem property TotalAmounSystem
 * @property-read float $ClosingGrossProfitLocal property ClosingGrossProfitLocal
 * @property-read float $ClosingGrossProfitSystem property ClosingGrossProfitSystem
 * @property-read float $ClosingPercentage property ClosingPercentage
 * @property-read float $CurrentStageNo property CurrentStageNo
 * @property-read mixed|VT_PTR $Lines property OpportunitiesLines
 * @property-read mixed|VT_PTR $Competition property OpportunitiesCompetition
 * @property-read mixed|VT_PTR $Partners property Partners
 * @property string $OpportunityName property OpportunityName
 * @property int $Industry property Industry
 * @property-read int $LinkedDocumentType property LinkedDocumentType
 * @property int $DataOwnershipfield property DataOwnershipfield
 * @property string $StatusRemarks property StatusRemarks
 * @property string $ProjectCode property ProjectCode
 * @property string $BPChanelName property BPChanelName
 * @property-read int $UserSignature property UserSignature
 * @property string $CustomerName property CustomerName
 * @property-read string $DocumentCheckbox property DocumentCheckbox
 * @property-read string $LinkedDocumentNumber property LinkedDocumentNumber
 * @property int $Territory property Territory
 * @property string|VT_DATE $ClosingDate property ClosingDate
 * @property int $BPChannelContact property BPChannelContact
 * @property string $BPChanelCode property BPChanelCode
 * @property int|VT_USERDEFINED $ClosingType property ClosingType
 * @property-read mixed|VT_PTR $Interests property Interests
 * @property-read mixed|VT_PTR $Reasons property Reasons
 * @property int $AttachmentEntry property AttachmentEntry
 * @property-read int $CurrentStageNumber property CurrentStageNumber
 * @property int|VT_USERDEFINED $OpportunityType property OpportunityType
 */
class ISalesOpportunities 
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
	 * @param int $OpprId [in]
	 * @return bool 
	 * method GetByKey
	 */
	function GetByKey(
		/* int [3] [in] */ $OpprId 
	)
	{
	}

	/**
	 * DISPID=6
	 * @var IUserFields $UserFields [26] Get User Fields
	*/
	var $UserFields;

	/**
	 * DISPID=7
	 * @var mixed|VT_PTR $Browser [26] Get Browser
	*/
	var $Browser;

	/**
	 * DISPID=8
	 * @return int 
	 * method Close
	 */
	function Close()
	{
	}

	/**
	 * DISPID=9
	 * @var int $SequentialNo [3] property SequentialNo
	*/
	var $SequentialNo;

	/**
	 * DISPID=10
	 * @var string $CardCode [8] property CardCode
	*/
	var $CardCode;

	/**
	 * DISPID=11
	 * @var int $SalesPerson [3] property SalesPerson
	*/
	var $SalesPerson;

	/**
	 * DISPID=12
	 * @var int $ContactPerson [3] property ContactPerson
	*/
	var $ContactPerson;

	/**
	 * DISPID=13
	 * @var int $Source [3] property Source
	*/
	var $Source;

	/**
	 * DISPID=14
	 * @var int $InterestField1 [3] property InterestField1
	*/
	var $InterestField1;

	/**
	 * DISPID=15
	 * @var int $InterestField2 [3] property InterestField2
	*/
	var $InterestField2;

	/**
	 * DISPID=16
	 * @var int $InterestField3 [3] property InterestField3
	*/
	var $InterestField3;

	/**
	 * DISPID=17
	 * @var int $InterestLevel [3] property InterestLevel
	*/
	var $InterestLevel;

	/**
	 * DISPID=18
	 * @var string|VT_DATE $StartDate [7] property StartDate
	*/
	var $StartDate;

	/**
	 * DISPID=20
	 * @var string|VT_DATE $PredictedClosingDate [7] property PredictedClosingDate
	*/
	var $PredictedClosingDate;

	/**
	 * DISPID=21
	 * @var float $MaxLocalTotal [5] property MaxLocalTotal
	*/
	var $MaxLocalTotal;

	/**
	 * DISPID=22
	 * @var float $MaxSystemTotal [5] property MaxSystemTotal
	*/
	var $MaxSystemTotal;

	/**
	 * DISPID=23
	 * @var float $WeightedSumLC [5] property WeightedSumLC
	*/
	var $WeightedSumLC;

	/**
	 * DISPID=24
	 * @var float $WeightedSumSC [5] property WeightedSumSC
	*/
	var $WeightedSumSC;

	/**
	 * DISPID=25
	 * @var float $GrossProfit [5] property GrossProfit
	*/
	var $GrossProfit;

	/**
	 * DISPID=26
	 * @var float $GrossProfitTotalLocal [5] property GrossProfitTotalLocal
	*/
	var $GrossProfitTotalLocal;

	/**
	 * DISPID=27
	 * @var float $GrossProfitTotalSystem [5] property GrossProfitTotalSystem
	*/
	var $GrossProfitTotalSystem;

	/**
	 * DISPID=28
	 * @var string $Remarks [8] property Remarks
	*/
	var $Remarks;

	/**
	 * DISPID=29
	 * @var int|VT_USERDEFINED $Status [29] property Status
	*/
	var $Status;

	/**
	 * DISPID=31
	 * @var int $ReasonForClosing [3] property ReasonForClosing
	*/
	var $ReasonForClosing;

	/**
	 * DISPID=32
	 * @var float $TotalAmountLocal [5] property TotalAmountLocal
	*/
	var $TotalAmountLocal;

	/**
	 * DISPID=33
	 * @var float $TotalAmounSystem [5] property TotalAmounSystem
	*/
	var $TotalAmounSystem;

	/**
	 * DISPID=34
	 * @var float $ClosingGrossProfitLocal [5] property ClosingGrossProfitLocal
	*/
	var $ClosingGrossProfitLocal;

	/**
	 * DISPID=35
	 * @var float $ClosingGrossProfitSystem [5] property ClosingGrossProfitSystem
	*/
	var $ClosingGrossProfitSystem;

	/**
	 * DISPID=36
	 * @var float $ClosingPercentage [5] property ClosingPercentage
	*/
	var $ClosingPercentage;

	/**
	 * DISPID=37
	 * @var float $CurrentStageNo [5] property CurrentStageNo
	*/
	var $CurrentStageNo;

	/**
	 * DISPID=38
	 * @var mixed|VT_PTR $Lines [26] property OpportunitiesLines
	*/
	var $Lines;

	/**
	 * DISPID=39
	 * @var mixed|VT_PTR $Competition [26] property OpportunitiesCompetition
	*/
	var $Competition;

	/**
	 * DISPID=40
	 * @var mixed|VT_PTR $Partners [26] property Partners
	*/
	var $Partners;

	/**
	 * DISPID=41
	 * @var string $OpportunityName [8] property OpportunityName
	*/
	var $OpportunityName;

	/**
	 * DISPID=42
	 * @var int $Industry [3] property Industry
	*/
	var $Industry;

	/**
	 * DISPID=43
	 * @var int $LinkedDocumentType [3] property LinkedDocumentType
	*/
	var $LinkedDocumentType;

	/**
	 * DISPID=44
	 * @var int $DataOwnershipfield [3] property DataOwnershipfield
	*/
	var $DataOwnershipfield;

	/**
	 * DISPID=45
	 * @var string $StatusRemarks [8] property StatusRemarks
	*/
	var $StatusRemarks;

	/**
	 * DISPID=46
	 * @var string $ProjectCode [8] property ProjectCode
	*/
	var $ProjectCode;

	/**
	 * DISPID=47
	 * @var string $BPChanelName [8] property BPChanelName
	*/
	var $BPChanelName;

	/**
	 * DISPID=48
	 * @var int $UserSignature [3] property UserSignature
	*/
	var $UserSignature;

	/**
	 * DISPID=49
	 * @var string $CustomerName [8] property CustomerName
	*/
	var $CustomerName;

	/**
	 * DISPID=50
	 * @var string $DocumentCheckbox [8] property DocumentCheckbox
	*/
	var $DocumentCheckbox;

	/**
	 * DISPID=51
	 * @var string $LinkedDocumentNumber [8] property LinkedDocumentNumber
	*/
	var $LinkedDocumentNumber;

	/**
	 * DISPID=52
	 * @var int $Territory [3] property Territory
	*/
	var $Territory;

	/**
	 * DISPID=53
	 * @var string|VT_DATE $ClosingDate [7] property ClosingDate
	*/
	var $ClosingDate;

	/**
	 * DISPID=54
	 * @var int $BPChannelContact [3] property BPChannelContact
	*/
	var $BPChannelContact;

	/**
	 * DISPID=55
	 * @var string $BPChanelCode [8] property BPChanelCode
	*/
	var $BPChanelCode;

	/**
	 * DISPID=56
	 * @var int|VT_USERDEFINED $ClosingType [29] property ClosingType
	*/
	var $ClosingType;

	/**
	 * DISPID=57
	 * @var mixed|VT_PTR $Interests [26] property Interests
	*/
	var $Interests;

	/**
	 * DISPID=58
	 * @var mixed|VT_PTR $Reasons [26] property Reasons
	*/
	var $Reasons;

	/**
	 * DISPID=59
	 * @return string 
	 * Get the object's data in xml format.
	 */
	function GetAsXML()
	{
	}

	/**
	 * DISPID=60
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
	 * DISPID=62
	 * @var int $AttachmentEntry [3] property AttachmentEntry
	*/
	var $AttachmentEntry;

	/**
	 * DISPID=63
	 * @var int $CurrentStageNumber [3] property CurrentStageNumber
	*/
	var $CurrentStageNumber;

	/**
	 * DISPID=64
	 * @var int|VT_USERDEFINED $OpportunityType [29] property OpportunityType
	*/
	var $OpportunityType;

}