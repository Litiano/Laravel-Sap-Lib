<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class IServiceContracts
 * GUID={5C594028-D730-4298-952E-4616C5047BC6}
 *
 * @property-read IUserFields $UserFields Get User Fields
 * @property-read int $ContractID property ContractID
 * @property string $CustomerCode property CustomerCode
 * @property string $CustomerName property CustomerName
 * @property int $ContactCode property ContactCode
 * @property int $Owner property Owner
 * @property int|VT_USERDEFINED $Status property Status
 * @property string $ContractTemplate property ContractTemplate
 * @property int|VT_USERDEFINED $ContractType property ContractType
 * @property int|VT_USERDEFINED $Renewal property Renewal
 * @property int $ReminderTime property ReminderTime
 * @property int|VT_USERDEFINED $RemindUnit property RemindUnit
 * @property-read int $DurationOfCoverage property DurationOfCoverage
 * @property string|VT_DATE $StartDate property StartDate
 * @property string|VT_DATE $EndDate property EndDate
 * @property int $ResolutionTime property ResolutionTime
 * @property int|VT_USERDEFINED $ResolutionUnit property ResolutionUnit
 * @property string $Description property Description
 * @property int|VT_USERDEFINED $MondayEnabled property MondayEnabled
 * @property int|VT_USERDEFINED $TuesdayEnabled property TuesdayEnabled
 * @property int|VT_USERDEFINED $WednesdayEnabled property WednesdayEnabled
 * @property int|VT_USERDEFINED $ThursdayEnabled property ThursdayEnabled
 * @property int|VT_USERDEFINED $FridayEnabled property FridayEnabled
 * @property int|VT_USERDEFINED $SaturdayEnabled property SaturdayEnabled
 * @property int|VT_USERDEFINED $SundayEnabled property SundayEnabled
 * @property string|VT_DATE $MondayStart property MondayStart
 * @property string|VT_DATE $MondayEnd property MondayEnd
 * @property string|VT_DATE $TuesdayStart property TuesdayStart
 * @property string|VT_DATE $TuesdayEnd property TuesdayEnd
 * @property string|VT_DATE $WednesdayStart property WednesdayStart
 * @property string|VT_DATE $WednesdayEnd property WednesdayEnd
 * @property string|VT_DATE $ThursdayStart property ThursdayStart
 * @property string|VT_DATE $ThursdayEnd property ThursdayEnd
 * @property string|VT_DATE $FridayStart property FridayStart
 * @property string|VT_DATE $FridayEnd property FridayEnd
 * @property string|VT_DATE $SaturdayStart property SaturdayStart
 * @property string|VT_DATE $SaturdayEnd property SaturdayEnd
 * @property string|VT_DATE $SundayStart property SundayStart
 * @property string|VT_DATE $SundayEnd property SundayEnd
 * @property int|VT_USERDEFINED $IncludeParts property IncludeParts
 * @property int|VT_USERDEFINED $IncludeLabor property IncludeLabor
 * @property int|VT_USERDEFINED $IncludeTravel property IncludeTravel
 * @property-read mixed|VT_PTR $Attachments property Attachments
 * @property-read string $TemplateRemarks property TemplateRemarks
 * @property string $Remarks property Remarks
 * @property-read mixed|VT_PTR $Browser Get Browser
 * @property-read mixed|VT_PTR $Lines property Lines
 * @property int|VT_USERDEFINED $IncludeHolidays property IncludeHolidays
 * @property int|VT_USERDEFINED $ServiceType property ServiceType
 * @property int|VT_USERDEFINED $ResponseUnit property ResponseUnit
 * @property int $ResponseTime property ResponseTime
 * @property string|VT_DATE $TerminationDate property TerminationDate
 * @property int $AttachmentEntry property AttachmentEntry
 * @property int|VT_USERDEFINED $ServiceBPType property ServiceBPType
 */
class IServiceContracts 
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
	 * @param int $ContractID [in]
	 * @return bool 
	 * method GetByKey
	 */
	function GetByKey(
		/* int [3] [in] */ $ContractID 
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
	 * @var int $ContractID [3] property ContractID
	*/
	var $ContractID;

	/**
	 * DISPID=8
	 * @var string $CustomerCode [8] property CustomerCode
	*/
	var $CustomerCode;

	/**
	 * DISPID=9
	 * @var string $CustomerName [8] property CustomerName
	*/
	var $CustomerName;

	/**
	 * DISPID=10
	 * @var int $ContactCode [3] property ContactCode
	*/
	var $ContactCode;

	/**
	 * DISPID=11
	 * @var int $Owner [3] property Owner
	*/
	var $Owner;

	/**
	 * DISPID=12
	 * @var int|VT_USERDEFINED $Status [29] property Status
	*/
	var $Status;

	/**
	 * DISPID=13
	 * @var string $ContractTemplate [8] property ContractTemplate
	*/
	var $ContractTemplate;

	/**
	 * DISPID=14
	 * @var int|VT_USERDEFINED $ContractType [29] property ContractType
	*/
	var $ContractType;

	/**
	 * DISPID=15
	 * @var int|VT_USERDEFINED $Renewal [29] property Renewal
	*/
	var $Renewal;

	/**
	 * DISPID=16
	 * @var int $ReminderTime [3] property ReminderTime
	*/
	var $ReminderTime;

	/**
	 * DISPID=17
	 * @var int|VT_USERDEFINED $RemindUnit [29] property RemindUnit
	*/
	var $RemindUnit;

	/**
	 * DISPID=18
	 * @var int $DurationOfCoverage [3] property DurationOfCoverage
	*/
	var $DurationOfCoverage;

	/**
	 * DISPID=19
	 * @var string|VT_DATE $StartDate [7] property StartDate
	*/
	var $StartDate;

	/**
	 * DISPID=20
	 * @var string|VT_DATE $EndDate [7] property EndDate
	*/
	var $EndDate;

	/**
	 * DISPID=21
	 * @var int $ResolutionTime [3] property ResolutionTime
	*/
	var $ResolutionTime;

	/**
	 * DISPID=22
	 * @var int|VT_USERDEFINED $ResolutionUnit [29] property ResolutionUnit
	*/
	var $ResolutionUnit;

	/**
	 * DISPID=23
	 * @var string $Description [8] property Description
	*/
	var $Description;

	/**
	 * DISPID=25
	 * @var int|VT_USERDEFINED $MondayEnabled [29] property MondayEnabled
	*/
	var $MondayEnabled;

	/**
	 * DISPID=26
	 * @var int|VT_USERDEFINED $TuesdayEnabled [29] property TuesdayEnabled
	*/
	var $TuesdayEnabled;

	/**
	 * DISPID=27
	 * @var int|VT_USERDEFINED $WednesdayEnabled [29] property WednesdayEnabled
	*/
	var $WednesdayEnabled;

	/**
	 * DISPID=28
	 * @var int|VT_USERDEFINED $ThursdayEnabled [29] property ThursdayEnabled
	*/
	var $ThursdayEnabled;

	/**
	 * DISPID=29
	 * @var int|VT_USERDEFINED $FridayEnabled [29] property FridayEnabled
	*/
	var $FridayEnabled;

	/**
	 * DISPID=30
	 * @var int|VT_USERDEFINED $SaturdayEnabled [29] property SaturdayEnabled
	*/
	var $SaturdayEnabled;

	/**
	 * DISPID=31
	 * @var int|VT_USERDEFINED $SundayEnabled [29] property SundayEnabled
	*/
	var $SundayEnabled;

	/**
	 * DISPID=32
	 * @var string|VT_DATE $MondayStart [7] property MondayStart
	*/
	var $MondayStart;

	/**
	 * DISPID=33
	 * @var string|VT_DATE $MondayEnd [7] property MondayEnd
	*/
	var $MondayEnd;

	/**
	 * DISPID=34
	 * @var string|VT_DATE $TuesdayStart [7] property TuesdayStart
	*/
	var $TuesdayStart;

	/**
	 * DISPID=35
	 * @var string|VT_DATE $TuesdayEnd [7] property TuesdayEnd
	*/
	var $TuesdayEnd;

	/**
	 * DISPID=36
	 * @var string|VT_DATE $WednesdayStart [7] property WednesdayStart
	*/
	var $WednesdayStart;

	/**
	 * DISPID=37
	 * @var string|VT_DATE $WednesdayEnd [7] property WednesdayEnd
	*/
	var $WednesdayEnd;

	/**
	 * DISPID=38
	 * @var string|VT_DATE $ThursdayStart [7] property ThursdayStart
	*/
	var $ThursdayStart;

	/**
	 * DISPID=39
	 * @var string|VT_DATE $ThursdayEnd [7] property ThursdayEnd
	*/
	var $ThursdayEnd;

	/**
	 * DISPID=40
	 * @var string|VT_DATE $FridayStart [7] property FridayStart
	*/
	var $FridayStart;

	/**
	 * DISPID=41
	 * @var string|VT_DATE $FridayEnd [7] property FridayEnd
	*/
	var $FridayEnd;

	/**
	 * DISPID=42
	 * @var string|VT_DATE $SaturdayStart [7] property SaturdayStart
	*/
	var $SaturdayStart;

	/**
	 * DISPID=43
	 * @var string|VT_DATE $SaturdayEnd [7] property SaturdayEnd
	*/
	var $SaturdayEnd;

	/**
	 * DISPID=44
	 * @var string|VT_DATE $SundayStart [7] property SundayStart
	*/
	var $SundayStart;

	/**
	 * DISPID=45
	 * @var string|VT_DATE $SundayEnd [7] property SundayEnd
	*/
	var $SundayEnd;

	/**
	 * DISPID=46
	 * @var int|VT_USERDEFINED $IncludeParts [29] property IncludeParts
	*/
	var $IncludeParts;

	/**
	 * DISPID=47
	 * @var int|VT_USERDEFINED $IncludeLabor [29] property IncludeLabor
	*/
	var $IncludeLabor;

	/**
	 * DISPID=48
	 * @var int|VT_USERDEFINED $IncludeTravel [29] property IncludeTravel
	*/
	var $IncludeTravel;

	/**
	 * DISPID=49
	 * @var mixed|VT_PTR $Attachments [26] property Attachments
	*/
	var $Attachments;

	/**
	 * DISPID=50
	 * @var string $TemplateRemarks [8] property TemplateRemarks
	*/
	var $TemplateRemarks;

	/**
	 * DISPID=51
	 * @var string $Remarks [8] property Remarks
	*/
	var $Remarks;

	/**
	 * DISPID=53
	 * @var mixed|VT_PTR $Browser [26] Get Browser
	*/
	var $Browser;

	/**
	 * DISPID=54
	 * @return int 
	 * method Close
	 */
	function Close()
	{
	}

	/**
	 * DISPID=55
	 * @var mixed|VT_PTR $Lines [26] property Lines
	*/
	var $Lines;

	/**
	 * DISPID=56
	 * @var int|VT_USERDEFINED $IncludeHolidays [29] property IncludeHolidays
	*/
	var $IncludeHolidays;

	/**
	 * DISPID=57
	 * @var int|VT_USERDEFINED $ServiceType [29] property ServiceType
	*/
	var $ServiceType;

	/**
	 * DISPID=58
	 * @var int|VT_USERDEFINED $ResponseUnit [29] property ResponseUnit
	*/
	var $ResponseUnit;

	/**
	 * DISPID=59
	 * @var int $ResponseTime [3] property ResponseTime
	*/
	var $ResponseTime;

	/**
	 * DISPID=60
	 * @var string|VT_DATE $TerminationDate [7] property TerminationDate
	*/
	var $TerminationDate;

	/**
	 * DISPID=61
	 * @return string 
	 * Get the object's data in xml format.
	 */
	function GetAsXML()
	{
	}

	/**
	 * DISPID=62
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
	 * DISPID=63
	 * @var int $AttachmentEntry [3] property AttachmentEntry
	*/
	var $AttachmentEntry;

	/**
	 * DISPID=64
	 * @var int|VT_USERDEFINED $ServiceBPType [29] property ServiceBPType
	*/
	var $ServiceBPType;

}