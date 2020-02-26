<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class IUserPermissionTree
 * GUID={55ACC8CD-3412-452A-9AF8-304A0A56FD3B}
 *
 * @property int $UserSignature property UserSignature
 * @property-read int $DisplayOrder property DisplayOrder
 * @property string $PermissionID property PermissionID
 * @property int|VT_USERDEFINED $Options property Options
 * @property string $Name property Name
 * @property-read int $Levels property Levels
 * @property int|VT_USERDEFINED $IsItem property IsItem
 * @property string $ParentID property ParentID
 * @property-read mixed|VT_PTR $UserPermissionForms property UserPermissionForms
 * @property-read IUserFields $UserFields Get User Fields
 * @property-read mixed|VT_PTR $Browser Get Browser
 */
class IUserPermissionTree 
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
	 * @var int $UserSignature [3] property UserSignature
	*/
	var $UserSignature;

	/**
	 * DISPID=2
	 * @var int $DisplayOrder [3] property DisplayOrder
	*/
	var $DisplayOrder;

	/**
	 * DISPID=3
	 * @var string $PermissionID [8] property PermissionID
	*/
	var $PermissionID;

	/**
	 * DISPID=4
	 * @var int|VT_USERDEFINED $Options [29] property Options
	*/
	var $Options;

	/**
	 * DISPID=5
	 * @var string $Name [8] property Name
	*/
	var $Name;

	/**
	 * DISPID=6
	 * @var int $Levels [3] property Levels
	*/
	var $Levels;

	/**
	 * DISPID=7
	 * @var int|VT_USERDEFINED $IsItem [29] property IsItem
	*/
	var $IsItem;

	/**
	 * DISPID=8
	 * @var string $ParentID [8] property ParentID
	*/
	var $ParentID;

	/**
	 * DISPID=9
	 * @var mixed|VT_PTR $UserPermissionForms [26] property UserPermissionForms
	*/
	var $UserPermissionForms;

	/**
	 * DISPID=10
	 * @return int 
	 * method Add
	 */
	function Add()
	{
	}

	/**
	 * DISPID=11
	 * @param string $PermissionID [in]
	 * @return bool 
	 * method GetByKey
	 */
	function GetByKey(
		/* string [8] [in] */ $PermissionID 
	)
	{
	}

	/**
	 * DISPID=12
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
	 * DISPID=13
	 * @return int 
	 * method Update
	 */
	function Update()
	{
	}

	/**
	 * DISPID=14
	 * @var IUserFields $UserFields [26] Get User Fields
	*/
	var $UserFields;

	/**
	 * DISPID=15
	 * @var mixed|VT_PTR $Browser [26] Get Browser
	*/
	var $Browser;

	/**
	 * DISPID=16
	 * @return string 
	 * Get the object's data in xml format.
	 */
	function GetAsXML()
	{
	}

	/**
	 * DISPID=17
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
	 * DISPID=18
	 * @return int 
	 * method Remove
	 */
	function Remove()
	{
	}

}