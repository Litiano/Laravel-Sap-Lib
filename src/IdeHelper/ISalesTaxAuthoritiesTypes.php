<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class ISalesTaxAuthoritiesTypes
 * GUID={450A7F0E-0D42-4720-907E-C672EE2F6382}
 *
 * @property-read int $UserSignature property UserSignature
 * @property string $Name property Name
 * @property int|VT_USERDEFINED $VAT property VAT
 * @property-read int $Numerator property Numerator
 * @property-read mixed|VT_PTR $Browser Get Browser
 * @property-read IUserFields $UserFields property UserFields
 * @property int|VT_USERDEFINED $TaxCreditControl property TaxCreditControl
 * @property int $NfTaxId property NfTaxId
 * @property int $TaxParamSetId property TaxParamSetId
 */
class ISalesTaxAuthoritiesTypes 
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
	 * @var int $UserSignature [3] property UserSignature
	*/
	var $UserSignature;

	/**
	 * DISPID=2
	 * @var string $Name [8] property Name
	*/
	var $Name;

	/**
	 * DISPID=3
	 * @var int|VT_USERDEFINED $VAT [29] property VAT
	*/
	var $VAT;

	/**
	 * DISPID=4
	 * @var int $Numerator [3] property Numerator
	*/
	var $Numerator;

	/**
	 * DISPID=5
	 * @return int 
	 * method Add
	 */
	function Add()
	{
	}

	/**
	 * DISPID=6
	 * @param int $Key [in]
	 * @return bool 
	 * method GetByKey
	 */
	function GetByKey(
		/* int [3] [in] */ $Key 
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
	 * @return int 
	 * method Update
	 */
	function Update()
	{
	}

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
	 * DISPID=11
	 * @var mixed|VT_PTR $Browser [26] Get Browser
	*/
	var $Browser;

	/**
	 * DISPID=12
	 * @var IUserFields $UserFields [26] property UserFields
	*/
	var $UserFields;

	/**
	 * DISPID=13
	 * @var int|VT_USERDEFINED $TaxCreditControl [29] property TaxCreditControl
	*/
	var $TaxCreditControl;

	/**
	 * DISPID=14
	 * @var int $NfTaxId [3] property NfTaxId
	*/
	var $NfTaxId;

	/**
	 * DISPID=15
	 * @var int $TaxParamSetId [3] property TaxParamSetId
	*/
	var $TaxParamSetId;

}