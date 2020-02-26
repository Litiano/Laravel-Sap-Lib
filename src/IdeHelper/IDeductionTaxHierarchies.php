<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class IDeductionTaxHierarchies
 * GUID={33DDE1AB-5C1F-454E-840A-884CF62A6747}
 *
 * @property-read mixed|VT_PTR $Browser Get browser
 * @property-read IUserFields $UserFields Get User Fields
 * @property-read int $AbsEntry property AbsEntry
 * @property string $BPCode property BPCode
 * @property string $HierarchyCode property HierarchyCode
 * @property string $HierarchyName property HierarchyName
 * @property string|VT_DATE $ValidFrom property ValidFrom
 * @property string|VT_DATE $ValidUntil property ValidUntil
 * @property-read mixed|VT_PTR $Lines property Lines
 * @property float $DeductionPercent property DeductionPercent
 * @property float $MaximumTotal property MaximumTotal
 * @property-read string|VT_DATE $LastUpdated property LastUpdated
 */
class IDeductionTaxHierarchies 
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
	 * DISPID=10
	 * @var int $AbsEntry [3] property AbsEntry
	*/
	var $AbsEntry;

	/**
	 * DISPID=11
	 * @var string $BPCode [8] property BPCode
	*/
	var $BPCode;

	/**
	 * DISPID=12
	 * @var string $HierarchyCode [8] property HierarchyCode
	*/
	var $HierarchyCode;

	/**
	 * DISPID=13
	 * @var string $HierarchyName [8] property HierarchyName
	*/
	var $HierarchyName;

	/**
	 * DISPID=14
	 * @var string|VT_DATE $ValidFrom [7] property ValidFrom
	*/
	var $ValidFrom;

	/**
	 * DISPID=15
	 * @var string|VT_DATE $ValidUntil [7] property ValidUntil
	*/
	var $ValidUntil;

	/**
	 * DISPID=16
	 * @var mixed|VT_PTR $Lines [26] property Lines
	*/
	var $Lines;

	/**
	 * DISPID=17
	 * @var float $DeductionPercent [5] property DeductionPercent
	*/
	var $DeductionPercent;

	/**
	 * DISPID=18
	 * @var float $MaximumTotal [5] property MaximumTotal
	*/
	var $MaximumTotal;

	/**
	 * DISPID=19
	 * @var string|VT_DATE $LastUpdated [7] property LastUpdated
	*/
	var $LastUpdated;

}