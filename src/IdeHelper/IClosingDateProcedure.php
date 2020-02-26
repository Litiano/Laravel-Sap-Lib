<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class IClosingDateProcedure
 * GUID={910FEA90-B652-4099-9817-3AA0CF635963}
 *
 * @property-read IUserFields $UserFields Get User Fields
 * @property-read int $ClosingDateNum property ClosingDateNum
 * @property-read string $ClosingDateCode property ClosingDateCode
 * @property-read int|VT_USERDEFINED $BaselineDate property BaselineDate
 * @property-read int|VT_USERDEFINED $DueMonth property DueMonth
 * @property-read int $ExtraMonth property ExtraMonth
 * @property-read int $ExtraDay property ExtraDay
 * @property-read mixed|VT_PTR $Browser Get Browser
 */
class IClosingDateProcedure 
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
	 * @var int $ClosingDateNum [3] property ClosingDateNum
	*/
	var $ClosingDateNum;

	/**
	 * DISPID=3
	 * @var string $ClosingDateCode [8] property ClosingDateCode
	*/
	var $ClosingDateCode;

	/**
	 * DISPID=4
	 * @var int|VT_USERDEFINED $BaselineDate [29] property BaselineDate
	*/
	var $BaselineDate;

	/**
	 * DISPID=5
	 * @var int|VT_USERDEFINED $DueMonth [29] property DueMonth
	*/
	var $DueMonth;

	/**
	 * DISPID=6
	 * @var int $ExtraMonth [3] property ExtraMonth
	*/
	var $ExtraMonth;

	/**
	 * DISPID=7
	 * @var int $ExtraDay [3] property ExtraDay
	*/
	var $ExtraDay;

	/**
	 * DISPID=8
	 * @var mixed|VT_PTR $Browser [26] Get Browser
	*/
	var $Browser;

	/**
	 * DISPID=9
	 * @param int $ClosingDateNum 
	 * @return bool 
	 * method GetByKey
	 */
	function GetByKey(
		/* int [3]  */ $ClosingDateNum 
	)
	{
	}

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
	 * @param string $FileName [in]
	 * @return void 
	 * Save the object's data in xml format.
	 */
	function SaveToFile(
		/* string [8] [in] */ $FileName 
	)
	{
	}

}