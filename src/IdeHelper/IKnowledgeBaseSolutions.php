<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class IKnowledgeBaseSolutions
 * GUID={1E293D13-1EC1-4DF2-A5CC-7FE45030EEE5}
 *
 * @property-read IUserFields $UserFields Get User Fields
 * @property string $ItemCode property ItemCode
 * @property int $Status property Status
 * @property-read int $Owner property Owner
 * @property-read int $CreatedBy property CreatedBy
 * @property-read string|VT_DATE $CreationDate property CreationDate
 * @property-read int $LastUpdatedBy property LastUpdatedBy
 * @property-read string|VT_DATE $LastUpdateDate property LastUpdateDate
 * @property string $Solution property Solution
 * @property string $Symptom property Symptom
 * @property string $Cause property Cause
 * @property string $Description property Description
 * @property-read mixed|VT_PTR $Attachments property Attachments
 * @property-read mixed|VT_PTR $Browser Get Browser
 * @property-read int $SolutionCode property SolutionCode
 * @property int $AttachmentEntry property AttachmentEntry
 */
class IKnowledgeBaseSolutions 
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
	 * @param int $SolutionCode [in]
	 * @return bool 
	 * method GetByKey
	 */
	function GetByKey(
		/* int [3] [in] */ $SolutionCode 
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
	 * @var string $ItemCode [8] property ItemCode
	*/
	var $ItemCode;

	/**
	 * DISPID=8
	 * @var int $Status [3] property Status
	*/
	var $Status;

	/**
	 * DISPID=9
	 * @var int $Owner [3] property Owner
	*/
	var $Owner;

	/**
	 * DISPID=10
	 * @var int $CreatedBy [3] property CreatedBy
	*/
	var $CreatedBy;

	/**
	 * DISPID=11
	 * @var string|VT_DATE $CreationDate [7] property CreationDate
	*/
	var $CreationDate;

	/**
	 * DISPID=12
	 * @var int $LastUpdatedBy [3] property LastUpdatedBy
	*/
	var $LastUpdatedBy;

	/**
	 * DISPID=13
	 * @var string|VT_DATE $LastUpdateDate [7] property LastUpdateDate
	*/
	var $LastUpdateDate;

	/**
	 * DISPID=14
	 * @var string $Solution [8] property Solution
	*/
	var $Solution;

	/**
	 * DISPID=15
	 * @var string $Symptom [8] property Symptom
	*/
	var $Symptom;

	/**
	 * DISPID=16
	 * @var string $Cause [8] property Cause
	*/
	var $Cause;

	/**
	 * DISPID=17
	 * @var string $Description [8] property Description
	*/
	var $Description;

	/**
	 * DISPID=18
	 * @var mixed|VT_PTR $Attachments [26] property Attachments
	*/
	var $Attachments;

	/**
	 * DISPID=19
	 * @var mixed|VT_PTR $Browser [26] Get Browser
	*/
	var $Browser;

	/**
	 * DISPID=20
	 * @var int $SolutionCode [3] property SolutionCode
	*/
	var $SolutionCode;

	/**
	 * DISPID=21
	 * @return int 
	 * method Close
	 */
	function Close()
	{
	}

	/**
	 * DISPID=62
	 * @return string 
	 * Get the object's data in xml format.
	 */
	function GetAsXML()
	{
	}

	/**
	 * DISPID=63
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
	 * DISPID=64
	 * @var int $AttachmentEntry [3] property AttachmentEntry
	*/
	var $AttachmentEntry;

}