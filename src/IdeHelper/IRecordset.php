<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class IRecordset
 * GUID={8CA3AB92-1930-4511-4AA8-82D53C3150C3}
 *
 * @property-read bool $BoF Get the Bof record status
 * @property-read bool $EoF Get the Eof record status
 * @property-read int $RecordCount Get the record count in the set
 * @property-read mixed|VT_PTR $Command property Command
 */
class IRecordset 
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
	 * DISPID=3
	 * @return void 
	 * Move to the next record
	 */
	function MoveNext()
	{
	}

	/**
	 * DISPID=4
	 * @return void 
	 * Move to the previous record
	 */
	function MovePrevious()
	{
	}

	/**
	 * DISPID=5
	 * @var bool $BoF [11] Get the Bof record status
	*/
	var $BoF;

	/**
	 * DISPID=6
	 * @var bool $EoF [11] Get the Eof record status
	*/
	var $EoF;

	/**
	 * DISPID=7
	 * @param string $QueryStr 
	 * @return void 
	 * Runs an SQL query
	 */
	function DoQuery(
		/* string [8]  */ $QueryStr 
	)
	{
	}

	/**
	 * DISPID=8
	 * @var int $RecordCount [3] Get the record count in the set
	*/
	var $RecordCount;

	/**
	 * DISPID=9
	 * @param string $FileName [in][out]
	 * @return void 
	 * Save records as XML document
	 */
	function SaveXML(
		/* mixed|VT_PTR [26] [in][out] --> string [8]  */ &$FileName 
	)
	{
	}

	/**
	 * DISPID=10
	 * @return void 
	 * method MoveFirst
	 */
	function MoveFirst()
	{
	}

	/**
	 * DISPID=11
	 * @return void 
	 * method MoveLast
	 */
	function MoveLast()
	{
	}

	/**
	 * DISPID=12
	 * @var mixed|VT_PTR $Command [26] property Command
	*/
	var $Command;

	/**
	 * DISPID=13
	 * @return string 
	 * Get records as XML
	 */
	function GetAsXML()
	{
	}

	/**
	 * DISPID=14
	 * @param string $FileName [in]
	 * @return void 
	 * Save records as XML document
	 */
	function SaveToFile(
		/* string [8] [in] */ $FileName 
	)
	{
	}

	/**
	 * DISPID=15
	 * @param int|VT_USERDEFINED $xmlMode [in]
	 * @return string 
	 * method GetFixedXML
	 */
	function GetFixedXML(
		/* int|VT_USERDEFINED [29] [in] */ $xmlMode 
	)
	{
	}

	/**
	 * DISPID=16
	 * @return string 
	 * method GetFixedSchema
	 */
	function GetFixedSchema()
	{
	}

}