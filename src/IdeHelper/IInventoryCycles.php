<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class IInventoryCycles
 * GUID={C9C6EE8B-66E6-4C3E-91ED-49482CF4B903}
 *
 * @property-read mixed|VT_PTR $Browser Get browser
 * @property-read IUserFields $UserFields Get User Fields
 * @property-read int $CycleCode property CycleCode
 * @property string $CycleName property CycleName
 * @property int|VT_USERDEFINED $Frequency property Frequency
 * @property int $Day property Day
 * @property string|VT_DATE $Hour property Hour
 * @property string|VT_DATE $NextCountingDate property NextCountingDate
 * @property int $Interval property Interval
 * @property int|VT_USERDEFINED $Sunday property Sunday
 * @property int|VT_USERDEFINED $Monday property Monday
 * @property int|VT_USERDEFINED $Tuesday property Tuesday
 * @property int|VT_USERDEFINED $Wednesday property Wednesday
 * @property int|VT_USERDEFINED $Thursday property Thursday
 * @property int|VT_USERDEFINED $Friday property Friday
 * @property int|VT_USERDEFINED $Saturday property Saturday
 * @property int|VT_USERDEFINED $RepeatOption property RepeatOption
 * @property int|VT_USERDEFINED $RecurrenceSequenceSpecifier property RecurrenceSequenceSpecifier
 * @property int $RecurrenceDayInMonth property RecurrenceDayInMonth
 * @property int $RecurrenceMonth property RecurrenceMonth
 * @property int|VT_USERDEFINED $RecurrenceDayOfWeek property RecurrenceDayOfWeek
 * @property int|VT_USERDEFINED $endType property endType
 * @property int $MaxOccurrence property MaxOccurrence
 * @property string|VT_DATE $SeriesEndDate property SeriesEndDate
 */
class IInventoryCycles 
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
	 * @param int $lCode [in]
	 * @return bool 
	 * GetByKey
	 */
	function GetByKey(
		/* int [3] [in] */ $lCode 
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
	 * DISPID=10
	 * @var int $CycleCode [3] property CycleCode
	*/
	var $CycleCode;

	/**
	 * DISPID=11
	 * @var string $CycleName [8] property CycleName
	*/
	var $CycleName;

	/**
	 * DISPID=12
	 * @var int|VT_USERDEFINED $Frequency [29] property Frequency
	*/
	var $Frequency;

	/**
	 * DISPID=13
	 * @var int $Day [3] property Day
	*/
	var $Day;

	/**
	 * DISPID=14
	 * @var string|VT_DATE $Hour [7] property Hour
	*/
	var $Hour;

	/**
	 * DISPID=15
	 * @var string|VT_DATE $NextCountingDate [7] property NextCountingDate
	*/
	var $NextCountingDate;

	/**
	 * DISPID=16
	 * @var int $Interval [3] property Interval
	*/
	var $Interval;

	/**
	 * DISPID=17
	 * @var int|VT_USERDEFINED $Sunday [29] property Sunday
	*/
	var $Sunday;

	/**
	 * DISPID=18
	 * @var int|VT_USERDEFINED $Monday [29] property Monday
	*/
	var $Monday;

	/**
	 * DISPID=19
	 * @var int|VT_USERDEFINED $Tuesday [29] property Tuesday
	*/
	var $Tuesday;

	/**
	 * DISPID=20
	 * @var int|VT_USERDEFINED $Wednesday [29] property Wednesday
	*/
	var $Wednesday;

	/**
	 * DISPID=21
	 * @var int|VT_USERDEFINED $Thursday [29] property Thursday
	*/
	var $Thursday;

	/**
	 * DISPID=22
	 * @var int|VT_USERDEFINED $Friday [29] property Friday
	*/
	var $Friday;

	/**
	 * DISPID=23
	 * @var int|VT_USERDEFINED $Saturday [29] property Saturday
	*/
	var $Saturday;

	/**
	 * DISPID=24
	 * @var int|VT_USERDEFINED $RepeatOption [29] property RepeatOption
	*/
	var $RepeatOption;

	/**
	 * DISPID=25
	 * @var int|VT_USERDEFINED $RecurrenceSequenceSpecifier [29] property RecurrenceSequenceSpecifier
	*/
	var $RecurrenceSequenceSpecifier;

	/**
	 * DISPID=26
	 * @var int $RecurrenceDayInMonth [3] property RecurrenceDayInMonth
	*/
	var $RecurrenceDayInMonth;

	/**
	 * DISPID=27
	 * @var int $RecurrenceMonth [3] property RecurrenceMonth
	*/
	var $RecurrenceMonth;

	/**
	 * DISPID=28
	 * @var int|VT_USERDEFINED $RecurrenceDayOfWeek [29] property RecurrenceDayOfWeek
	*/
	var $RecurrenceDayOfWeek;

	/**
	 * DISPID=29
	 * @var int|VT_USERDEFINED $endType [29] property endType
	*/
	var $endType;

	/**
	 * DISPID=30
	 * @var int $MaxOccurrence [3] property MaxOccurrence
	*/
	var $MaxOccurrence;

	/**
	 * DISPID=31
	 * @var string|VT_DATE $SeriesEndDate [7] property SeriesEndDate
	*/
	var $SeriesEndDate;

}