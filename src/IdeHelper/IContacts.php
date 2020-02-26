<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class IContacts
 * GUID={96D7BBA9-27E7-4893-BC78-CC4313BE0DD1}
 *
 * @property string $CardCode property CardCode
 * @property string $Notes property Notes
 * @property string|VT_DATE $ContactDate property ContactDate
 * @property string|VT_DATE $ContactTime property ContactTime
 * @property string|VT_DATE $Recontact property Recontact
 * @property int|VT_USERDEFINED $Closed property Closed
 * @property string|VT_DATE $CloseDate property CloseDate
 * @property string $Phone property Phone
 * @property string $Fax property Fax
 * @property string $Subject property Subject
 * @property int $DocType property DocType
 * @property-read string $DocNum property DocNum
 * @property string $DocEntry property DocEntry
 * @property-read mixed|VT_PTR $Attachments property Attachments
 * @property-read mixed|VT_PTR $Browser User fields for this object.
 * @property-read int $ContactCode property ContactCode
 * @property int|VT_USERDEFINED $Priority property Priority
 * @property string $Details property Details
 * @property int|VT_USERDEFINED $Activity property Activity
 * @property int $ActivityType property ActivityType
 * @property int $Location property Location
 * @property string|VT_DATE $StartTime property StartTime
 * @property string|VT_DATE $EndTime property EndTime
 * @property float $Duration property Duration
 * @property int|VT_USERDEFINED $DurationType property DurationType
 * @property int $SalesEmployee property SalesEmployee
 * @property int $ContactPersonCode property ContactPersonCode
 * @property int $HandledBy property HandledBy
 * @property-read IUserFields $UserFields Get User Fields
 * @property int|VT_USERDEFINED $Reminder property Reminder
 * @property float $ReminderPeriod property ReminderPeriod
 * @property int|VT_USERDEFINED $ReminderType property ReminderType
 * @property string $City property City
 * @property int|VT_USERDEFINED $Personalflag property Personalflag
 * @property string $Street property Street
 * @property-read int $ParentobjectId property ParentobjectId
 * @property-read string $Parentobjecttype property Parentobjecttype
 * @property string $Room property Room
 * @property int|VT_USERDEFINED $Inactiveflag property Inactiveflag
 * @property string $State property State
 * @property int $PreviousActivity property PreviousActivity
 * @property string $Country property Country
 * @property int $Status property Status
 * @property int|VT_USERDEFINED $Tentativeflag property Tentativeflag
 * @property string|VT_DATE $EndDuedate property EndDuedate
 * @property string $DocTypeEx property DocTypeEx
 * @property int $AttachmentEntry property AttachmentEntry
 * @property string|VT_DATE $StartDate property StartDate
 */
class IContacts 
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
	 * @return int 
	 * method Update
	 */
	function Update()
	{
	}

	/**
	 * DISPID=3
	 * @param int $ContactCode 
	 * @return bool 
	 * method GetByKey
	 */
	function GetByKey(
		/* int [3]  */ $ContactCode 
	)
	{
	}

	/**
	 * DISPID=4
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
	 * DISPID=5
	 * @var string $CardCode [8] property CardCode
	*/
	var $CardCode;

	/**
	 * DISPID=6
	 * @var string $Notes [8] property Notes
	*/
	var $Notes;

	/**
	 * DISPID=7
	 * @var string|VT_DATE $ContactDate [7] property ContactDate
	*/
	var $ContactDate;

	/**
	 * DISPID=8
	 * @var string|VT_DATE $ContactTime [7] property ContactTime
	*/
	var $ContactTime;

	/**
	 * DISPID=9
	 * @var string|VT_DATE $Recontact [7] property Recontact
	*/
	var $Recontact;

	/**
	 * DISPID=10
	 * @var int|VT_USERDEFINED $Closed [29] property Closed
	*/
	var $Closed;

	/**
	 * DISPID=11
	 * @var string|VT_DATE $CloseDate [7] property CloseDate
	*/
	var $CloseDate;

	/**
	 * DISPID=13
	 * @var string $Phone [8] property Phone
	*/
	var $Phone;

	/**
	 * DISPID=14
	 * @var string $Fax [8] property Fax
	*/
	var $Fax;

	/**
	 * DISPID=15
	 * @var string $Subject [8] property Subject
	*/
	var $Subject;

	/**
	 * DISPID=16
	 * @var int $DocType [3] property DocType
	*/
	var $DocType;

	/**
	 * DISPID=17
	 * @var string $DocNum [8] property DocNum
	*/
	var $DocNum;

	/**
	 * DISPID=18
	 * @var string $DocEntry [8] property DocEntry
	*/
	var $DocEntry;

	/**
	 * DISPID=19
	 * @var mixed|VT_PTR $Attachments [26] property Attachments
	*/
	var $Attachments;

	/**
	 * DISPID=20
	 * @var mixed|VT_PTR $Browser [26] User fields for this object.
	*/
	var $Browser;

	/**
	 * DISPID=21
	 * @var int $ContactCode [3] property ContactCode
	*/
	var $ContactCode;

	/**
	 * DISPID=22
	 * @var int|VT_USERDEFINED $Priority [29] property Priority
	*/
	var $Priority;

	/**
	 * DISPID=23
	 * @var string $Details [8] property Details
	*/
	var $Details;

	/**
	 * DISPID=24
	 * @var int|VT_USERDEFINED $Activity [29] property Activity
	*/
	var $Activity;

	/**
	 * DISPID=25
	 * @var int $ActivityType [3] property ActivityType
	*/
	var $ActivityType;

	/**
	 * DISPID=26
	 * @var int $Location [3] property Location
	*/
	var $Location;

	/**
	 * DISPID=27
	 * @var string|VT_DATE $StartTime [7] property StartTime
	*/
	var $StartTime;

	/**
	 * DISPID=28
	 * @var string|VT_DATE $EndTime [7] property EndTime
	*/
	var $EndTime;

	/**
	 * DISPID=29
	 * @var float $Duration [5] property Duration
	*/
	var $Duration;

	/**
	 * DISPID=30
	 * @var int|VT_USERDEFINED $DurationType [29] property DurationType
	*/
	var $DurationType;

	/**
	 * DISPID=31
	 * @var int $SalesEmployee [3] property SalesEmployee
	*/
	var $SalesEmployee;

	/**
	 * DISPID=32
	 * @var int $ContactPersonCode [3] property ContactPersonCode
	*/
	var $ContactPersonCode;

	/**
	 * DISPID=33
	 * @var int $HandledBy [3] property HandledBy
	*/
	var $HandledBy;

	/**
	 * DISPID=34
	 * @var IUserFields $UserFields [26] Get User Fields
	*/
	var $UserFields;

	/**
	 * DISPID=35
	 * @var int|VT_USERDEFINED $Reminder [29] property Reminder
	*/
	var $Reminder;

	/**
	 * DISPID=36
	 * @var float $ReminderPeriod [5] property ReminderPeriod
	*/
	var $ReminderPeriod;

	/**
	 * DISPID=37
	 * @var int|VT_USERDEFINED $ReminderType [29] property ReminderType
	*/
	var $ReminderType;

	/**
	 * DISPID=38
	 * @var string $City [8] property City
	*/
	var $City;

	/**
	 * DISPID=39
	 * @var int|VT_USERDEFINED $Personalflag [29] property Personalflag
	*/
	var $Personalflag;

	/**
	 * DISPID=40
	 * @var string $Street [8] property Street
	*/
	var $Street;

	/**
	 * DISPID=41
	 * @var int $ParentobjectId [3] property ParentobjectId
	*/
	var $ParentobjectId;

	/**
	 * DISPID=42
	 * @var string $Parentobjecttype [8] property Parentobjecttype
	*/
	var $Parentobjecttype;

	/**
	 * DISPID=43
	 * @var string $Room [8] property Room
	*/
	var $Room;

	/**
	 * DISPID=44
	 * @var int|VT_USERDEFINED $Inactiveflag [29] property Inactiveflag
	*/
	var $Inactiveflag;

	/**
	 * DISPID=45
	 * @var string $State [8] property State
	*/
	var $State;

	/**
	 * DISPID=46
	 * @var int $PreviousActivity [3] property PreviousActivity
	*/
	var $PreviousActivity;

	/**
	 * DISPID=47
	 * @var string $Country [8] property Country
	*/
	var $Country;

	/**
	 * DISPID=48
	 * @var int $Status [3] property Status
	*/
	var $Status;

	/**
	 * DISPID=49
	 * @var int|VT_USERDEFINED $Tentativeflag [29] property Tentativeflag
	*/
	var $Tentativeflag;

	/**
	 * DISPID=50
	 * @var string|VT_DATE $EndDuedate [7] property EndDuedate
	*/
	var $EndDuedate;

	/**
	 * DISPID=51
	 * @var string $DocTypeEx [8] property DocTypeEx
	*/
	var $DocTypeEx;

	/**
	 * DISPID=52
	 * @return string 
	 * Get the object's data in xml format.
	 */
	function GetAsXML()
	{
	}

	/**
	 * DISPID=53
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
	 * DISPID=55
	 * @var int $AttachmentEntry [3] property AttachmentEntry
	*/
	var $AttachmentEntry;

	/**
	 * DISPID=56
	 * @var string|VT_DATE $StartDate [7] property StartDate
	*/
	var $StartDate;

}