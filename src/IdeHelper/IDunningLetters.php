<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class IDunningLetters
 * GUID={F8DE7AAE-13BF-46BD-A4B0-CD9535AAED63}
 *
 * @property string $FeeCurrency property FeeCurrency
 * @property int $RowNumber property RowNumber
 * @property string $LetterFormat property LetterFormat
 * @property string $Effectiveafter property Effectiveafter
 * @property string $MinimumBalanceCurrency property MinimumBalanceCurrency
 * @property float $Feeperletter property Feeperletter
 * @property int|VT_USERDEFINED $CalcInterest property CalcInterest
 * @property float $MinimumBalance property MinimumBalance
 * @property-read IUserFields $UserFields Get User Fields
 * @property-read mixed|VT_PTR $Browser Get Browser
 */
class IDunningLetters 
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
	 * @var string $FeeCurrency [8] property FeeCurrency
	*/
	var $FeeCurrency;

	/**
	 * DISPID=2
	 * @var int $RowNumber [3] property RowNumber
	*/
	var $RowNumber;

	/**
	 * DISPID=3
	 * @var string $LetterFormat [8] property LetterFormat
	*/
	var $LetterFormat;

	/**
	 * DISPID=4
	 * @var string $Effectiveafter [8] property Effectiveafter
	*/
	var $Effectiveafter;

	/**
	 * DISPID=5
	 * @var string $MinimumBalanceCurrency [8] property MinimumBalanceCurrency
	*/
	var $MinimumBalanceCurrency;

	/**
	 * DISPID=6
	 * @var float $Feeperletter [5] property Feeperletter
	*/
	var $Feeperletter;

	/**
	 * DISPID=7
	 * @var int|VT_USERDEFINED $CalcInterest [29] property CalcInterest
	*/
	var $CalcInterest;

	/**
	 * DISPID=8
	 * @var float $MinimumBalance [5] property MinimumBalance
	*/
	var $MinimumBalance;

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
	 * @return int 
	 * method Update
	 */
	function Update()
	{
	}

	/**
	 * DISPID=11
	 * @return int 
	 * method Remove
	 */
	function Remove()
	{
	}

	/**
	 * DISPID=12
	 * @param int $lID [in]
	 * @return bool 
	 * method GetByKey
	 */
	function GetByKey(
		/* int [3] [in] */ $lID 
	)
	{
	}

	/**
	 * DISPID=13
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
	 * DISPID=16
	 * @var IUserFields $UserFields [26] Get User Fields
	*/
	var $UserFields;

	/**
	 * DISPID=17
	 * @var mixed|VT_PTR $Browser [26] Get Browser
	*/
	var $Browser;

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

}