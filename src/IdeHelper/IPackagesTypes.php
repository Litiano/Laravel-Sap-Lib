<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class IPackagesTypes
 * GUID={CE69987E-8F99-4FC1-8C86-837E5246AFA2}
 *
 * @property string $Type property Type
 * @property-read int $Code property Code
 * @property-read IUserFields $UserFields Get User Fields
 * @property-read mixed|VT_PTR $Browser Get Browser
 * @property float $Length1 property Length1
 * @property int $Length1Unit property Length1Unit
 * @property float $Length2 property Length2
 * @property int $Length2Unit property Length2Unit
 * @property float $Width1 property Width1
 * @property int $Width1Unit property Width1Unit
 * @property float $Width2 property Width2
 * @property int $Width2Unit property Width2Unit
 * @property float $Height1 property Height1
 * @property int $Height1Unit property Height1Unit
 * @property float $Height2 property Height2
 * @property int $Height2Unit property Height2Unit
 * @property float $Volume property Volume
 * @property int $VolumeUnit property VolumeUnit
 * @property float $Weight1 property Weight1
 * @property int $Weight1Unit property Weight1Unit
 * @property float $Weight2 property Weight2
 * @property int $Weight2Unit property Weight2Unit
 */
class IPackagesTypes 
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
	 * @var string $Type [8] property Type
	*/
	var $Type;

	/**
	 * DISPID=2
	 * @var int $Code [3] property Code
	*/
	var $Code;

	/**
	 * DISPID=3
	 * @return int 
	 * method Add
	 */
	function Add()
	{
	}

	/**
	 * DISPID=4
	 * @return int 
	 * method Update
	 */
	function Update()
	{
	}

	/**
	 * DISPID=5
	 * @return int 
	 * method Remove
	 */
	function Remove()
	{
	}

	/**
	 * DISPID=6
	 * @param int $lCode [in]
	 * @return bool 
	 * method GetByKey
	 */
	function GetByKey(
		/* int [3] [in] */ $lCode 
	)
	{
	}

	/**
	 * DISPID=7
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
	 * DISPID=8
	 * @var IUserFields $UserFields [26] Get User Fields
	*/
	var $UserFields;

	/**
	 * DISPID=9
	 * @var mixed|VT_PTR $Browser [26] Get Browser
	*/
	var $Browser;

	/**
	 * DISPID=10
	 * @return string 
	 * Get the object's data in xml format.
	 */
	function GetAsXML()
	{
	}

	/**
	 * DISPID=11
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
	 * DISPID=12
	 * @var float $Length1 [5] property Length1
	*/
	var $Length1;

	/**
	 * DISPID=13
	 * @var int $Length1Unit [3] property Length1Unit
	*/
	var $Length1Unit;

	/**
	 * DISPID=14
	 * @var float $Length2 [5] property Length2
	*/
	var $Length2;

	/**
	 * DISPID=15
	 * @var int $Length2Unit [3] property Length2Unit
	*/
	var $Length2Unit;

	/**
	 * DISPID=16
	 * @var float $Width1 [5] property Width1
	*/
	var $Width1;

	/**
	 * DISPID=17
	 * @var int $Width1Unit [3] property Width1Unit
	*/
	var $Width1Unit;

	/**
	 * DISPID=18
	 * @var float $Width2 [5] property Width2
	*/
	var $Width2;

	/**
	 * DISPID=19
	 * @var int $Width2Unit [3] property Width2Unit
	*/
	var $Width2Unit;

	/**
	 * DISPID=20
	 * @var float $Height1 [5] property Height1
	*/
	var $Height1;

	/**
	 * DISPID=21
	 * @var int $Height1Unit [3] property Height1Unit
	*/
	var $Height1Unit;

	/**
	 * DISPID=22
	 * @var float $Height2 [5] property Height2
	*/
	var $Height2;

	/**
	 * DISPID=23
	 * @var int $Height2Unit [3] property Height2Unit
	*/
	var $Height2Unit;

	/**
	 * DISPID=24
	 * @var float $Volume [5] property Volume
	*/
	var $Volume;

	/**
	 * DISPID=25
	 * @var int $VolumeUnit [3] property VolumeUnit
	*/
	var $VolumeUnit;

	/**
	 * DISPID=26
	 * @var float $Weight1 [5] property Weight1
	*/
	var $Weight1;

	/**
	 * DISPID=27
	 * @var int $Weight1Unit [3] property Weight1Unit
	*/
	var $Weight1Unit;

	/**
	 * DISPID=28
	 * @var float $Weight2 [5] property Weight2
	*/
	var $Weight2;

	/**
	 * DISPID=29
	 * @var int $Weight2Unit [3] property Weight2Unit
	*/
	var $Weight2Unit;

}