<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class ISalesTaxCodes
 * GUID={A07F5790-711E-49FC-9843-935F7C8CDB85}
 *
 * @property int|VT_USERDEFINED $ValidForAR property ValidForAR
 * @property int|VT_USERDEFINED $ValidForAP property ValidForAP
 * @property-read int $UserSignature property UserSignature
 * @property-read float $Rate property Rate
 * @property string $Name property Name
 * @property int|VT_USERDEFINED $Freight property Freight
 * @property string $Code property Code
 * @property-read mixed|VT_PTR $Lines property Lines
 * @property-read mixed|VT_PTR $Browser Get Browser
 * @property-read IUserFields $UserFields property UserFields
 * @property int|VT_USERDEFINED $IsItemLevel property IsItemLevel
 * @property int|VT_USERDEFINED $Inactive property Inactive
 * @property int|VT_USERDEFINED $FADebit property FADebit
 * @property int $TypeFormulaCombId property TypeFormulaCombId
 * @property string $CFOPIn property CFOPIn
 * @property string $CFOPOut property CFOPOut
 */
class ISalesTaxCodes 
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
	 * @var int|VT_USERDEFINED $ValidForAR [29] property ValidForAR
	*/
	var $ValidForAR;

	/**
	 * DISPID=2
	 * @var int|VT_USERDEFINED $ValidForAP [29] property ValidForAP
	*/
	var $ValidForAP;

	/**
	 * DISPID=3
	 * @var int $UserSignature [3] property UserSignature
	*/
	var $UserSignature;

	/**
	 * DISPID=4
	 * @var float $Rate [5] property Rate
	*/
	var $Rate;

	/**
	 * DISPID=5
	 * @var string $Name [8] property Name
	*/
	var $Name;

	/**
	 * DISPID=6
	 * @var int|VT_USERDEFINED $Freight [29] property Freight
	*/
	var $Freight;

	/**
	 * DISPID=7
	 * @var string $Code [8] property Code
	*/
	var $Code;

	/**
	 * DISPID=8
	 * @var mixed|VT_PTR $Lines [26] property Lines
	*/
	var $Lines;

	/**
	 * DISPID=9
	 * @return int 
	 * method Add
	 */
	function Add()
	{
	}

	/**
	 * DISPID=10
	 * @param string $Key [in]
	 * @return bool 
	 * method GetByKey
	 */
	function GetByKey(
		/* string [8] [in] */ $Key 
	)
	{
	}

	/**
	 * DISPID=11
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
	 * DISPID=12
	 * @return int 
	 * method Update
	 */
	function Update()
	{
	}

	/**
	 * DISPID=13
	 * @return string 
	 * Get the object's data in xml format.
	 */
	function GetAsXML()
	{
	}

	/**
	 * DISPID=14
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
	 * DISPID=15
	 * @var mixed|VT_PTR $Browser [26] Get Browser
	*/
	var $Browser;

	/**
	 * DISPID=16
	 * @var IUserFields $UserFields [26] property UserFields
	*/
	var $UserFields;

	/**
	 * DISPID=17
	 * @var int|VT_USERDEFINED $IsItemLevel [29] property IsItemLevel
	*/
	var $IsItemLevel;

	/**
	 * DISPID=18
	 * @var int|VT_USERDEFINED $Inactive [29] property Inactive
	*/
	var $Inactive;

	/**
	 * DISPID=19
	 * @var int|VT_USERDEFINED $FADebit [29] property FADebit
	*/
	var $FADebit;

	/**
	 * DISPID=20
	 * @var int $TypeFormulaCombId [3] property TypeFormulaCombId
	*/
	var $TypeFormulaCombId;

	/**
	 * DISPID=21
	 * @var string $CFOPIn [8] property CFOPIn
	*/
	var $CFOPIn;

	/**
	 * DISPID=22
	 * @var string $CFOPOut [8] property CFOPOut
	*/
	var $CFOPOut;

}