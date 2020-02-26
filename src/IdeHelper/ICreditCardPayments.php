<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class ICreditCardPayments
 * GUID={874D0559-C968-49F1-9562-E57E493A47AB}
 *
 * @property-read mixed|VT_PTR $Browser Get browser
 * @property-read IUserFields $UserFields Get User Fields
 * @property string $DueDateCode property DueDateCode
 * @property string $DueDateName property DueDateName
 * @property int|VT_USERDEFINED $DueDatesType property DueDatesType
 * @property int $PaymentAfterDays property PaymentAfterDays
 * @property int $PaymentAfterMonths property PaymentAfterMonths
 * @property int $FromDay1 property FromDay1
 * @property int $ToDay1 property ToDay1
 * @property int $PaymentDay1 property PaymentDay1
 * @property int $NoOfMonths1 property NoOfMonths1
 * @property int $FromDay2 property FromDay2
 * @property int $ToDay2 property ToDay2
 * @property int $PaymentDay2 property PaymentDay2
 * @property int $NoOfMonths2 property NoOfMonths2
 * @property int $FromDay3 property FromDay3
 * @property int $ToDay3 property ToDay3
 * @property int $PaymentDay3 property PaymentDay3
 * @property int $NoOfMonths3 property NoOfMonths3
 * @property int $FromDay4 property FromDay4
 * @property int $ToDay4 property ToDay4
 * @property int $PaymentDay4 property PaymentDay4
 * @property int $NoOfMonths4 property NoOfMonths4
 */
class ICreditCardPayments 
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
	 * @param string $bstrCode [in]
	 * @return bool 
	 * GetByKey
	 */
	function GetByKey(
		/* string [8] [in] */ $bstrCode 
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
	 * DISPID=10
	 * @return int 
	 * method Remove
	 */
	function Remove()
	{
	}

	/**
	 * DISPID=12
	 * @var string $DueDateCode [8] property DueDateCode
	*/
	var $DueDateCode;

	/**
	 * DISPID=13
	 * @var string $DueDateName [8] property DueDateName
	*/
	var $DueDateName;

	/**
	 * DISPID=14
	 * @var int|VT_USERDEFINED $DueDatesType [29] property DueDatesType
	*/
	var $DueDatesType;

	/**
	 * DISPID=15
	 * @var int $PaymentAfterDays [3] property PaymentAfterDays
	*/
	var $PaymentAfterDays;

	/**
	 * DISPID=16
	 * @var int $PaymentAfterMonths [3] property PaymentAfterMonths
	*/
	var $PaymentAfterMonths;

	/**
	 * DISPID=17
	 * @var int $FromDay1 [3] property FromDay1
	*/
	var $FromDay1;

	/**
	 * DISPID=18
	 * @var int $ToDay1 [3] property ToDay1
	*/
	var $ToDay1;

	/**
	 * DISPID=19
	 * @var int $PaymentDay1 [3] property PaymentDay1
	*/
	var $PaymentDay1;

	/**
	 * DISPID=20
	 * @var int $NoOfMonths1 [3] property NoOfMonths1
	*/
	var $NoOfMonths1;

	/**
	 * DISPID=21
	 * @var int $FromDay2 [3] property FromDay2
	*/
	var $FromDay2;

	/**
	 * DISPID=22
	 * @var int $ToDay2 [3] property ToDay2
	*/
	var $ToDay2;

	/**
	 * DISPID=23
	 * @var int $PaymentDay2 [3] property PaymentDay2
	*/
	var $PaymentDay2;

	/**
	 * DISPID=24
	 * @var int $NoOfMonths2 [3] property NoOfMonths2
	*/
	var $NoOfMonths2;

	/**
	 * DISPID=25
	 * @var int $FromDay3 [3] property FromDay3
	*/
	var $FromDay3;

	/**
	 * DISPID=26
	 * @var int $ToDay3 [3] property ToDay3
	*/
	var $ToDay3;

	/**
	 * DISPID=27
	 * @var int $PaymentDay3 [3] property PaymentDay3
	*/
	var $PaymentDay3;

	/**
	 * DISPID=28
	 * @var int $NoOfMonths3 [3] property NoOfMonths3
	*/
	var $NoOfMonths3;

	/**
	 * DISPID=29
	 * @var int $FromDay4 [3] property FromDay4
	*/
	var $FromDay4;

	/**
	 * DISPID=30
	 * @var int $ToDay4 [3] property ToDay4
	*/
	var $ToDay4;

	/**
	 * DISPID=31
	 * @var int $PaymentDay4 [3] property PaymentDay4
	*/
	var $PaymentDay4;

	/**
	 * DISPID=32
	 * @var int $NoOfMonths4 [3] property NoOfMonths4
	*/
	var $NoOfMonths4;

}