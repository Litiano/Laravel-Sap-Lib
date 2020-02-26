<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class IServiceCalls
 * GUID={A93CD1FA-F12F-47B0-8FAB-859692B8A653}
 *
 * @property-read IUserFields $UserFields Get User Fields
 * @property-read mixed|VT_PTR $Browser Get Browser
 * @property-read int $ServiceCallID property ServiceCallID
 * @property string $Subject property Subject
 * @property string $CustomerCode property CustomerCode
 * @property string $CustomerName property CustomerName
 * @property int $ContactCode property ContactCode
 * @property string $ManufacturerSerialNum property ManufacturerSerialNum
 * @property string $InternalSerialNum property InternalSerialNum
 * @property int $ContractID property ContractID
 * @property-read string|VT_DATE $ContractEndDate property ContractEndDate
 * @property string|VT_DATE $ResolutionDate property ResolutionDate
 * @property string|VT_DATE $ResolutionTime property ResolutionTime
 * @property int $Origin property Origin
 * @property string $ItemCode property ItemCode
 * @property string $ItemDescription property ItemDescription
 * @property-read int $ItemGroupCode property ItemGroupCode
 * @property int $Status property Status
 * @property int|VT_USERDEFINED $Priority property Priority
 * @property int $CallType property CallType
 * @property int $ProblemType property ProblemType
 * @property int $AssigneeCode property AssigneeCode
 * @property string $Description property Description
 * @property int $TechnicianCode property TechnicianCode
 * @property string $Resolution property Resolution
 * @property-read mixed|VT_PTR $Activities property Activities
 * @property-read mixed|VT_PTR $Expenses property Expenses
 * @property-read mixed|VT_PTR $Solutions property Solutions
 * @property string|VT_DATE $CreationDate property CreationDate
 * @property string|VT_DATE $CreationTime property CreationTime
 * @property-read int $Responder property Responder
 * @property-read int $UpdatedTime property UpdatedTime
 * @property int|VT_USERDEFINED $BelongsToAQueue property BelongsToAQueue
 * @property-read int $ResponseByTime property ResponseByTime
 * @property-read string|VT_DATE $ResponseByDate property ResponseByDate
 * @property-read string|VT_DATE $ResolutionOnDate property ResolutionOnDate
 * @property-read int $ResponseOnTime property ResponseOnTime
 * @property-read string|VT_DATE $ResponseOnDate property ResponseOnDate
 * @property int $ClosingTime property ClosingTime
 * @property-read string|VT_DATE $AssignedDate property AssignedDate
 * @property string $Queue property Queue
 * @property-read int $ResponseAssignee property ResponseAssignee
 * @property-read int|VT_USERDEFINED $EntitledforService property EntitleforService
 * @property-read int $ResolutionOnTime property ResolutionOnTime
 * @property-read int $AssignedTime property AssignedTime
 * @property string|VT_DATE $ClosingDate property ClosingDate
 * @property int $Series property Series
 * @property int $DocNum property DocNum
 * @property int|VT_USERDEFINED $HandWritten property HandWritten
 * @property-read string $PeriodIndicator property PeriodIndicator
 * @property string|VT_DATE $StartDate property StartDate
 * @property string|VT_DATE $StartTime property StartTime
 * @property string|VT_DATE $EndDuedate property EndDueDate
 * @property string|VT_DATE $EndTime property EndTime
 * @property float $Duration property Duration
 * @property int|VT_USERDEFINED $DurationType property DurationType
 * @property int|VT_USERDEFINED $Reminder property Reminder
 * @property float $ReminderPeriod property ReminderPeriod
 * @property int|VT_USERDEFINED $ReminderType property ReminderType
 * @property int $Location property Location
 * @property string $AddressName property AddressName
 * @property int|VT_USERDEFINED $AddressType property AddressType
 * @property string $Street property Street
 * @property string $City property City
 * @property string $Room property Room
 * @property string $State property State
 * @property string $Country property Country
 * @property int|VT_USERDEFINED $DisplayInCalendar property DisplayInCalendar
 * @property string $CustomerRefNo property CustomerRefNo
 * @property int $ProblemSubType property ProblemSubType
 * @property int $AttachmentEntry property AttachmentEntry
 * @property string|VT_DATE $ClosingTimeEx property ClosingTimeEx
 * @property-read mixed|VT_PTR $Schedulings property Schedulings
 * @property int|VT_USERDEFINED $ServiceBPType property ServiceBPType
 * @property string $BPContactPerson property BPContactPerson
 * @property string $BPPhone1 property BPPhone1
 * @property string $BPPhone2 property BPPhone2
 * @property string $BPCellular property BPCellular
 * @property string $BPFax property BPFax
 * @property string $BPeMail property BPeMail
 * @property string $BPProjectCode property BPProjectCode
 * @property int $BPTerritory property BPTerritory
 * @property string $BPShipToCode property BPShipToCode
 * @property string $BPShipToAddress property BPShipToAddress
 * @property string $BPBillToCode property BPBillToCode
 * @property string $BPBillToAddress property BPBillToAddress
 * @property-read mixed|VT_PTR $BPAddressComponents property BPAddressComponents
 */
class IServiceCalls 
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
	 * @param int $ServiceCallID [in]
	 * @return bool 
	 * method GetByKey
	 */
	function GetByKey(
		/* int [3] [in] */ $ServiceCallID 
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
	 * @var int $ServiceCallID [3] property ServiceCallID
	*/
	var $ServiceCallID;

	/**
	 * DISPID=10
	 * @var string $Subject [8] property Subject
	*/
	var $Subject;

	/**
	 * DISPID=11
	 * @var string $CustomerCode [8] property CustomerCode
	*/
	var $CustomerCode;

	/**
	 * DISPID=12
	 * @var string $CustomerName [8] property CustomerName
	*/
	var $CustomerName;

	/**
	 * DISPID=13
	 * @var int $ContactCode [3] property ContactCode
	*/
	var $ContactCode;

	/**
	 * DISPID=14
	 * @var string $ManufacturerSerialNum [8] property ManufacturerSerialNum
	*/
	var $ManufacturerSerialNum;

	/**
	 * DISPID=15
	 * @var string $InternalSerialNum [8] property InternalSerialNum
	*/
	var $InternalSerialNum;

	/**
	 * DISPID=16
	 * @var int $ContractID [3] property ContractID
	*/
	var $ContractID;

	/**
	 * DISPID=17
	 * @var string|VT_DATE $ContractEndDate [7] property ContractEndDate
	*/
	var $ContractEndDate;

	/**
	 * DISPID=18
	 * @var string|VT_DATE $ResolutionDate [7] property ResolutionDate
	*/
	var $ResolutionDate;

	/**
	 * DISPID=19
	 * @var string|VT_DATE $ResolutionTime [7] property ResolutionTime
	*/
	var $ResolutionTime;

	/**
	 * DISPID=22
	 * @var int $Origin [3] property Origin
	*/
	var $Origin;

	/**
	 * DISPID=23
	 * @var string $ItemCode [8] property ItemCode
	*/
	var $ItemCode;

	/**
	 * DISPID=24
	 * @var string $ItemDescription [8] property ItemDescription
	*/
	var $ItemDescription;

	/**
	 * DISPID=25
	 * @var int $ItemGroupCode [3] property ItemGroupCode
	*/
	var $ItemGroupCode;

	/**
	 * DISPID=26
	 * @var int $Status [3] property Status
	*/
	var $Status;

	/**
	 * DISPID=27
	 * @var int|VT_USERDEFINED $Priority [29] property Priority
	*/
	var $Priority;

	/**
	 * DISPID=28
	 * @var int $CallType [3] property CallType
	*/
	var $CallType;

	/**
	 * DISPID=29
	 * @var int $ProblemType [3] property ProblemType
	*/
	var $ProblemType;

	/**
	 * DISPID=30
	 * @var int $AssigneeCode [3] property AssigneeCode
	*/
	var $AssigneeCode;

	/**
	 * DISPID=31
	 * @var string $Description [8] property Description
	*/
	var $Description;

	/**
	 * DISPID=33
	 * @var int $TechnicianCode [3] property TechnicianCode
	*/
	var $TechnicianCode;

	/**
	 * DISPID=34
	 * @var string $Resolution [8] property Resolution
	*/
	var $Resolution;

	/**
	 * DISPID=35
	 * @var mixed|VT_PTR $Activities [26] property Activities
	*/
	var $Activities;

	/**
	 * DISPID=36
	 * @var mixed|VT_PTR $Expenses [26] property Expenses
	*/
	var $Expenses;

	/**
	 * DISPID=37
	 * @var mixed|VT_PTR $Solutions [26] property Solutions
	*/
	var $Solutions;

	/**
	 * DISPID=38
	 * @var string|VT_DATE $CreationDate [7] property CreationDate
	*/
	var $CreationDate;

	/**
	 * DISPID=39
	 * @var string|VT_DATE $CreationTime [7] property CreationTime
	*/
	var $CreationTime;

	/**
	 * DISPID=41
	 * @var int $Responder [3] property Responder
	*/
	var $Responder;

	/**
	 * DISPID=42
	 * @var int $UpdatedTime [3] property UpdatedTime
	*/
	var $UpdatedTime;

	/**
	 * DISPID=43
	 * @var int|VT_USERDEFINED $BelongsToAQueue [29] property BelongsToAQueue
	*/
	var $BelongsToAQueue;

	/**
	 * DISPID=44
	 * @var int $ResponseByTime [3] property ResponseByTime
	*/
	var $ResponseByTime;

	/**
	 * DISPID=45
	 * @var string|VT_DATE $ResponseByDate [7] property ResponseByDate
	*/
	var $ResponseByDate;

	/**
	 * DISPID=46
	 * @var string|VT_DATE $ResolutionOnDate [7] property ResolutionOnDate
	*/
	var $ResolutionOnDate;

	/**
	 * DISPID=47
	 * @var int $ResponseOnTime [3] property ResponseOnTime
	*/
	var $ResponseOnTime;

	/**
	 * DISPID=48
	 * @var string|VT_DATE $ResponseOnDate [7] property ResponseOnDate
	*/
	var $ResponseOnDate;

	/**
	 * DISPID=49
	 * @var int $ClosingTime [3] property ClosingTime
	*/
	var $ClosingTime;

	/**
	 * DISPID=50
	 * @var string|VT_DATE $AssignedDate [7] property AssignedDate
	*/
	var $AssignedDate;

	/**
	 * DISPID=51
	 * @var string $Queue [8] property Queue
	*/
	var $Queue;

	/**
	 * DISPID=52
	 * @var int $ResponseAssignee [3] property ResponseAssignee
	*/
	var $ResponseAssignee;

	/**
	 * DISPID=53
	 * @var int|VT_USERDEFINED $EntitledforService [29] property EntitleforService
	*/
	var $EntitledforService;

	/**
	 * DISPID=54
	 * @var int $ResolutionOnTime [3] property ResolutionOnTime
	*/
	var $ResolutionOnTime;

	/**
	 * DISPID=55
	 * @var int $AssignedTime [3] property AssignedTime
	*/
	var $AssignedTime;

	/**
	 * DISPID=56
	 * @var string|VT_DATE $ClosingDate [7] property ClosingDate
	*/
	var $ClosingDate;

	/**
	 * DISPID=57
	 * @return string 
	 * Get the object's data in xml format.
	 */
	function GetAsXML()
	{
	}

	/**
	 * DISPID=58
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
	 * DISPID=59
	 * @var int $Series [3] property Series
	*/
	var $Series;

	/**
	 * DISPID=60
	 * @var int $DocNum [3] property DocNum
	*/
	var $DocNum;

	/**
	 * DISPID=61
	 * @var int|VT_USERDEFINED $HandWritten [29] property HandWritten
	*/
	var $HandWritten;

	/**
	 * DISPID=62
	 * @var string $PeriodIndicator [8] property PeriodIndicator
	*/
	var $PeriodIndicator;

	/**
	 * DISPID=63
	 * @var string|VT_DATE $StartDate [7] property StartDate
	*/
	var $StartDate;

	/**
	 * DISPID=64
	 * @var string|VT_DATE $StartTime [7] property StartTime
	*/
	var $StartTime;

	/**
	 * DISPID=65
	 * @var string|VT_DATE $EndDuedate [7] property EndDueDate
	*/
	var $EndDuedate;

	/**
	 * DISPID=66
	 * @var string|VT_DATE $EndTime [7] property EndTime
	*/
	var $EndTime;

	/**
	 * DISPID=67
	 * @var float $Duration [5] property Duration
	*/
	var $Duration;

	/**
	 * DISPID=68
	 * @var int|VT_USERDEFINED $DurationType [29] property DurationType
	*/
	var $DurationType;

	/**
	 * DISPID=69
	 * @var int|VT_USERDEFINED $Reminder [29] property Reminder
	*/
	var $Reminder;

	/**
	 * DISPID=70
	 * @var float $ReminderPeriod [5] property ReminderPeriod
	*/
	var $ReminderPeriod;

	/**
	 * DISPID=71
	 * @var int|VT_USERDEFINED $ReminderType [29] property ReminderType
	*/
	var $ReminderType;

	/**
	 * DISPID=72
	 * @var int $Location [3] property Location
	*/
	var $Location;

	/**
	 * DISPID=73
	 * @var string $AddressName [8] property AddressName
	*/
	var $AddressName;

	/**
	 * DISPID=74
	 * @var int|VT_USERDEFINED $AddressType [29] property AddressType
	*/
	var $AddressType;

	/**
	 * DISPID=75
	 * @var string $Street [8] property Street
	*/
	var $Street;

	/**
	 * DISPID=76
	 * @var string $City [8] property City
	*/
	var $City;

	/**
	 * DISPID=77
	 * @var string $Room [8] property Room
	*/
	var $Room;

	/**
	 * DISPID=78
	 * @var string $State [8] property State
	*/
	var $State;

	/**
	 * DISPID=79
	 * @var string $Country [8] property Country
	*/
	var $Country;

	/**
	 * DISPID=80
	 * @var int|VT_USERDEFINED $DisplayInCalendar [29] property DisplayInCalendar
	*/
	var $DisplayInCalendar;

	/**
	 * DISPID=81
	 * @var string $CustomerRefNo [8] property CustomerRefNo
	*/
	var $CustomerRefNo;

	/**
	 * DISPID=82
	 * @var int $ProblemSubType [3] property ProblemSubType
	*/
	var $ProblemSubType;

	/**
	 * DISPID=83
	 * @var int $AttachmentEntry [3] property AttachmentEntry
	*/
	var $AttachmentEntry;

	/**
	 * DISPID=84
	 * @var string|VT_DATE $ClosingTimeEx [7] property ClosingTimeEx
	*/
	var $ClosingTimeEx;

	/**
	 * DISPID=85
	 * @var mixed|VT_PTR $Schedulings [26] property Schedulings
	*/
	var $Schedulings;

	/**
	 * DISPID=86
	 * @var int|VT_USERDEFINED $ServiceBPType [29] property ServiceBPType
	*/
	var $ServiceBPType;

	/**
	 * DISPID=87
	 * @var string $BPContactPerson [8] property BPContactPerson
	*/
	var $BPContactPerson;

	/**
	 * DISPID=88
	 * @var string $BPPhone1 [8] property BPPhone1
	*/
	var $BPPhone1;

	/**
	 * DISPID=89
	 * @var string $BPPhone2 [8] property BPPhone2
	*/
	var $BPPhone2;

	/**
	 * DISPID=90
	 * @var string $BPCellular [8] property BPCellular
	*/
	var $BPCellular;

	/**
	 * DISPID=91
	 * @var string $BPFax [8] property BPFax
	*/
	var $BPFax;

	/**
	 * DISPID=92
	 * @var string $BPeMail [8] property BPeMail
	*/
	var $BPeMail;

	/**
	 * DISPID=93
	 * @var string $BPProjectCode [8] property BPProjectCode
	*/
	var $BPProjectCode;

	/**
	 * DISPID=94
	 * @var int $BPTerritory [3] property BPTerritory
	*/
	var $BPTerritory;

	/**
	 * DISPID=95
	 * @var string $BPShipToCode [8] property BPShipToCode
	*/
	var $BPShipToCode;

	/**
	 * DISPID=96
	 * @var string $BPShipToAddress [8] property BPShipToAddress
	*/
	var $BPShipToAddress;

	/**
	 * DISPID=97
	 * @var string $BPBillToCode [8] property BPBillToCode
	*/
	var $BPBillToCode;

	/**
	 * DISPID=98
	 * @var string $BPBillToAddress [8] property BPBillToAddress
	*/
	var $BPBillToAddress;

	/**
	 * DISPID=99
	 * @var mixed|VT_PTR $BPAddressComponents [26] property BPAddressComponents
	*/
	var $BPAddressComponents;

}