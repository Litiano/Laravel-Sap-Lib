<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class IMessages
 * GUID={C4DCA924-9189-4969-8609-8564D6E5AFAA}
 *
 * @property int|VT_USERDEFINED $Priority property Priority
 * @property string $Subject property Subject
 * @property string $MessageText property MessageText
 * @property-read mixed|VT_PTR $Attachments property Attachments
 * @property-read mixed|VT_PTR $Recipients property Recipients
 * @property int $AttachmentEntry property AttachmentEntry
 */
class IMessages 
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
	 * @var int|VT_USERDEFINED $Priority [29] property Priority
	*/
	var $Priority;

	/**
	 * DISPID=3
	 * @var string $Subject [8] property Subject
	*/
	var $Subject;

	/**
	 * DISPID=4
	 * @var string $MessageText [8] property MessageText
	*/
	var $MessageText;

	/**
	 * DISPID=7
	 * @param string $Title 
	 * @param string $Text 
	 * @param int|VT_USERDEFINED $Object
	 * @param string $ObjectKey 
	 * @return void 
	 * method AddDataColumn
	 */
	function AddDataColumn(
		/* string [8]  */ $Title,
		/* string [8]  */ $Text,
		/* int|VT_USERDEFINED [29]  */ $Object,
		/* string [8]  */ $ObjectKey 
	)
	{
	}

	/**
	 * DISPID=8
	 * @var mixed|VT_PTR $Attachments [26] property Attachments
	*/
	var $Attachments;

	/**
	 * DISPID=9
	 * @var mixed|VT_PTR $Recipients [26] property Recipients
	*/
	var $Recipients;

	/**
	 * DISPID=10
	 * @var int $AttachmentEntry [3] property AttachmentEntry
	*/
	var $AttachmentEntry;

}