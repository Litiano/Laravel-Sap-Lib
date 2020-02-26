<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class IUserFieldsMD
 * GUID={81D132DE-0549-460D-9BEC-2FEDEAB0A950}
 *
 * @property-read IValidValuesMD $ValidValues ValidValues
 * @property string $Name Fields name.
 * @property int|VT_USERDEFINED $Type Fields type.
 * @property int $Size Fields size.
 * @property string $Description Fields description.
 * @property int|VT_USERDEFINED $SubType Property SubType
 * @property string $LinkedTable Property LinkedTable
 * @property string $DefaultValue Property DefaultValue
 * @property string $TableName property TableName
 * @property-read int $FieldID property FieldID
 * @property int $EditSize property EditSize
 * @property int|VT_USERDEFINED $Mandatory property Mandatory
 * @property-read mixed|VT_PTR $Browser Get Browser
 * @property string $LinkedUDO Property LinkedUDO
 * @property int|VT_USERDEFINED $LinkedSystemObject Property LinkedSystemObject
 */
class IUserFieldsMD 
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
	 * @param string $TableName [in]
	 * @param int $FieldID [in]
	 * @return bool 
	 * method GetByKey
	 */
	function GetByKey(
		/* string [8] [in] */ $TableName,
		/* int [3] [in] */ $FieldID 
	)
	{
	}

	/**
	 * DISPID=6
	 * @var IValidValuesMD $ValidValues [26] ValidValues
	*/
	var $ValidValues;

	/**
	 * DISPID=8
	 * @var string $Name [8] Fields name.
	*/
	var $Name;

	/**
	 * DISPID=9
	 * @var int|VT_USERDEFINED $Type [29] Fields type.
	*/
	var $Type;

	/**
	 * DISPID=10
	 * @var int $Size [3] Fields size.
	*/
	var $Size;

	/**
	 * DISPID=11
	 * @var string $Description [8] Fields description.
	*/
	var $Description;

	/**
	 * DISPID=12
	 * @var int|VT_USERDEFINED $SubType [29] Property SubType
	*/
	var $SubType;

	/**
	 * DISPID=13
	 * @var string $LinkedTable [8] Property LinkedTable
	*/
	var $LinkedTable;

	/**
	 * DISPID=14
	 * @var string $DefaultValue [8] Property DefaultValue
	*/
	var $DefaultValue;

	/**
	 * DISPID=15
	 * @var string $TableName [8] property TableName
	*/
	var $TableName;

	/**
	 * DISPID=16
	 * @var int $FieldID [3] property FieldID
	*/
	var $FieldID;

	/**
	 * DISPID=17
	 * @var int $EditSize [3] property EditSize
	*/
	var $EditSize;

	/**
	 * DISPID=18
	 * @var int|VT_USERDEFINED $Mandatory [29] property Mandatory
	*/
	var $Mandatory;

	/**
	 * DISPID=19
	 * @return string 
	 * Get the object's data in xml format.
	 */
	function GetAsXML()
	{
	}

	/**
	 * DISPID=20
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
	 * DISPID=21
	 * @var mixed|VT_PTR $Browser [26] Get Browser
	*/
	var $Browser;

	/**
	 * DISPID=22
	 * @var string $LinkedUDO [8] Property LinkedUDO
	*/
	var $LinkedUDO;

	/**
	 * DISPID=23
	 * @var int|VT_USERDEFINED $LinkedSystemObject [29] Property LinkedSystemObject
	*/
	var $LinkedSystemObject;

}