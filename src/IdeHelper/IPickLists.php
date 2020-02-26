<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class IPickLists
 * GUID={A1CC204F-6BD1-417A-A6F8-9A3E7C96D28B}
 *
 * @property-read mixed|VT_PTR $Browser Get browser
 * @property-read IUserFields $UserFields Get User Fields
 * @property-read int $AbsoluteEntry property Absoluteentry
 * @property string $Name property Name
 * @property int $OwnerCode property OwnerCode
 * @property-read string $OwnerName property OwnerName
 * @property string|VT_DATE $PickDate property PickDate
 * @property string $Remarks property Remarks
 * @property-read int|VT_USERDEFINED $Status property Status
 * @property-read string $ObjectType property ObjectType
 * @property-read mixed|VT_PTR $Lines property Lines
 * @property int|VT_USERDEFINED $UseBaseUnits property UseBaseUnits
 */
class IPickLists 
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
	 * method Close
	 */
	function Close()
	{
	}

	/**
	 * DISPID=10
	 * @var int $AbsoluteEntry [3] property Absoluteentry
	*/
	var $AbsoluteEntry;

	/**
	 * DISPID=11
	 * @var string $Name [8] property Name
	*/
	var $Name;

	/**
	 * DISPID=12
	 * @var int $OwnerCode [3] property OwnerCode
	*/
	var $OwnerCode;

	/**
	 * DISPID=13
	 * @var string $OwnerName [8] property OwnerName
	*/
	var $OwnerName;

	/**
	 * DISPID=14
	 * @var string|VT_DATE $PickDate [7] property PickDate
	*/
	var $PickDate;

	/**
	 * DISPID=15
	 * @var string $Remarks [8] property Remarks
	*/
	var $Remarks;

	/**
	 * DISPID=16
	 * @var int|VT_USERDEFINED $Status [29] property Status
	*/
	var $Status;

	/**
	 * DISPID=17
	 * @var string $ObjectType [8] property ObjectType
	*/
	var $ObjectType;

	/**
	 * DISPID=18
	 * @var mixed|VT_PTR $Lines [26] property Lines
	*/
	var $Lines;

	/**
	 * DISPID=19
	 * @param int $lAbsEntry [in]
	 * @return bool 
	 * GetReleasedAllocation
	 */
	function GetReleasedAllocation(
		/* int [3] [in] */ $lAbsEntry 
	)
	{
	}

	/**
	 * DISPID=20
	 * @return int 
	 * method UpdateReleasedAllocation
	 */
	function UpdateReleasedAllocation()
	{
	}

	/**
	 * DISPID=21
	 * @var int|VT_USERDEFINED $UseBaseUnits [29] property UseBaseUnits
	*/
	var $UseBaseUnits;

}