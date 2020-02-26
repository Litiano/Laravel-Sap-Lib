<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class INotaFiscalUsage
 * GUID={E2C5A384-883B-4963-A4A4-30C6F553818F}
 *
 * @property-read IUserFields $UserFields Get User Fields
 * @property-read int $ID property ID
 * @property string $Usage property Usage
 * @property-read mixed|VT_PTR $Browser Get Browser
 * @property string $IncomingInStateCFOPCode property IncomingInStateCFOPCode
 * @property string $IncomingOutStateCFOPCode property IncomingOutStateCFOPCode
 * @property string $IncomingImportCFOPCode property IncomingImportCFOPCode
 * @property string $OutgoingInStateCFOPCode property OutgoingInStateCFOPCode
 * @property string $OutgoingOutStateCFOPCode property OutgoingOutStateCFOPCode
 * @property string $OutgoingExportCFOPCode property OutgoingExportCFOPCode
 * @property string $Description property Description
 * @property int|VT_USERDEFINED $ThirdParty property ThirdParty
 */
class INotaFiscalUsage 
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
	 * @var IUserFields $UserFields [26] Get User Fields
	*/
	var $UserFields;

	/**
	 * DISPID=2
	 * @var int $ID [3] property ID
	*/
	var $ID;

	/**
	 * DISPID=3
	 * @var string $Usage [8] property Usage
	*/
	var $Usage;

	/**
	 * DISPID=4
	 * @return int 
	 * method Add
	 */
	function Add()
	{
	}

	/**
	 * DISPID=5
	 * @return int 
	 * method Update
	 */
	function Update()
	{
	}

	/**
	 * DISPID=6
	 * @return int 
	 * method Remove
	 */
	function Remove()
	{
	}

	/**
	 * DISPID=7
	 * @param int $ID 
	 * @return bool 
	 * method GetByKey
	 */
	function GetByKey(
		/* int [3]  */ $ID 
	)
	{
	}

	/**
	 * DISPID=8
	 * @var mixed|VT_PTR $Browser [26] Get Browser
	*/
	var $Browser;

	/**
	 * DISPID=9
	 * @return string 
	 * Get the object's data in xml format.
	 */
	function GetAsXML()
	{
	}

	/**
	 * DISPID=10
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
	 * @var string $IncomingInStateCFOPCode [8] property IncomingInStateCFOPCode
	*/
	var $IncomingInStateCFOPCode;

	/**
	 * DISPID=13
	 * @var string $IncomingOutStateCFOPCode [8] property IncomingOutStateCFOPCode
	*/
	var $IncomingOutStateCFOPCode;

	/**
	 * DISPID=14
	 * @var string $IncomingImportCFOPCode [8] property IncomingImportCFOPCode
	*/
	var $IncomingImportCFOPCode;

	/**
	 * DISPID=15
	 * @var string $OutgoingInStateCFOPCode [8] property OutgoingInStateCFOPCode
	*/
	var $OutgoingInStateCFOPCode;

	/**
	 * DISPID=16
	 * @var string $OutgoingOutStateCFOPCode [8] property OutgoingOutStateCFOPCode
	*/
	var $OutgoingOutStateCFOPCode;

	/**
	 * DISPID=17
	 * @var string $OutgoingExportCFOPCode [8] property OutgoingExportCFOPCode
	*/
	var $OutgoingExportCFOPCode;

	/**
	 * DISPID=18
	 * @var string $Description [8] property Description
	*/
	var $Description;

	/**
	 * DISPID=19
	 * @var int|VT_USERDEFINED $ThirdParty [29] property ThirdParty
	*/
	var $ThirdParty;

}