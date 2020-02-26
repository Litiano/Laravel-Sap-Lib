<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class ICustomsGroups
 * GUID={842F5C3F-67A6-42B4-8181-98EFB9520A5F}
 *
 * @property-read mixed|VT_PTR $Browser Get browser
 * @property-read IUserFields $UserFields Get User Fields
 * @property-read int $Code property Code
 * @property string $Name property Name
 * @property string $Number property Number
 * @property float $Customs property Customs
 * @property float $Purchase property Purchase
 * @property float $Other property Other
 * @property float $Total property Total
 * @property-read int|VT_USERDEFINED $Locked property Locked
 * @property string $CustomsAllocationAccount property CustomsAllocationAccount
 * @property string $CustomsExpenseAccount property CustomsExpenseAccount
 * @property string $PortAddress property PortAddress
 * @property string $PortState property PortState
 */
class ICustomsGroups 
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
	 * @param int $lGroupCode [in]
	 * @return bool 
	 * GetByKey
	 */
	function GetByKey(
		/* int [3] [in] */ $lGroupCode 
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
	 * @var int $Code [3] property Code
	*/
	var $Code;

	/**
	 * DISPID=11
	 * @var string $Name [8] property Name
	*/
	var $Name;

	/**
	 * DISPID=12
	 * @var string $Number [8] property Number
	*/
	var $Number;

	/**
	 * DISPID=13
	 * @var float $Customs [5] property Customs
	*/
	var $Customs;

	/**
	 * DISPID=14
	 * @var float $Purchase [5] property Purchase
	*/
	var $Purchase;

	/**
	 * DISPID=15
	 * @var float $Other [5] property Other
	*/
	var $Other;

	/**
	 * DISPID=16
	 * @var float $Total [5] property Total
	*/
	var $Total;

	/**
	 * DISPID=17
	 * @var int|VT_USERDEFINED $Locked [29] property Locked
	*/
	var $Locked;

	/**
	 * DISPID=18
	 * @return int 
	 * method Remove
	 */
	function Remove()
	{
	}

	/**
	 * DISPID=19
	 * @var string $CustomsAllocationAccount [8] property CustomsAllocationAccount
	*/
	var $CustomsAllocationAccount;

	/**
	 * DISPID=20
	 * @var string $CustomsExpenseAccount [8] property CustomsExpenseAccount
	*/
	var $CustomsExpenseAccount;

	/**
	 * DISPID=21
	 * @var string $PortAddress [8] property PortAddress
	*/
	var $PortAddress;

	/**
	 * DISPID=22
	 * @var string $PortState [8] property PortState
	*/
	var $PortState;

}