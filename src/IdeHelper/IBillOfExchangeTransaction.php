<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class IBillOfExchangeTransaction
 * GUID={DB038EC5-97EC-4D04-8E6A-AF01A5C05900}
 *
 * @property int|VT_USERDEFINED $StatusFrom property StatusFrom
 * @property int|VT_USERDEFINED $StatusTo property StatusTo
 * @property-read string|VT_DATE $TransactionDate property TransactionDate
 * @property-read string|VT_DATE $TransactionTime property TransactionTime
 * @property int|VT_USERDEFINED $IsBoeReconciled property IsBoeReconciled
 * @property-read int $TransactionNumber property TransactionNumber
 * @property string|VT_DATE $PostingDate property PostingDate
 * @property string|VT_DATE $TaxDate property TaxDate
 * @property-read mixed|VT_PTR $Lines property Lines
 * @property-read mixed|VT_PTR $Deposits property Deposits
 * @property-read mixed|VT_PTR $BankPages property BankPages
 * @property-read IUserFields $UserFields property UserFields
 * @property-read int $BOETransactionkey property BOETransactionkey
 * @property-read mixed|VT_PTR $Browser Get Browser
 */
class IBillOfExchangeTransaction 
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
	 * method Add
	 */
	function Add()
	{
	}

	/**
	 * DISPID=5
	 * @param int $InternalKey [in]
	 * @return bool 
	 * method GetByKey
	 */
	function GetByKey(
		/* int [3] [in] */ $InternalKey 
	)
	{
	}

	/**
	 * DISPID=6
	 * @var int|VT_USERDEFINED $StatusFrom [29] property StatusFrom
	*/
	var $StatusFrom;

	/**
	 * DISPID=7
	 * @var int|VT_USERDEFINED $StatusTo [29] property StatusTo
	*/
	var $StatusTo;

	/**
	 * DISPID=8
	 * @var string|VT_DATE $TransactionDate [7] property TransactionDate
	*/
	var $TransactionDate;

	/**
	 * DISPID=9
	 * @var string|VT_DATE $TransactionTime [7] property TransactionTime
	*/
	var $TransactionTime;

	/**
	 * DISPID=10
	 * @var int|VT_USERDEFINED $IsBoeReconciled [29] property IsBoeReconciled
	*/
	var $IsBoeReconciled;

	/**
	 * DISPID=11
	 * @var int $TransactionNumber [3] property TransactionNumber
	*/
	var $TransactionNumber;

	/**
	 * DISPID=12
	 * @var string|VT_DATE $PostingDate [7] property PostingDate
	*/
	var $PostingDate;

	/**
	 * DISPID=13
	 * @var string|VT_DATE $TaxDate [7] property TaxDate
	*/
	var $TaxDate;

	/**
	 * DISPID=14
	 * @var mixed|VT_PTR $Lines [26] property Lines
	*/
	var $Lines;

	/**
	 * DISPID=15
	 * @var mixed|VT_PTR $Deposits [26] property Deposits
	*/
	var $Deposits;

	/**
	 * DISPID=16
	 * @var mixed|VT_PTR $BankPages [26] property BankPages
	*/
	var $BankPages;

	/**
	 * DISPID=17
	 * @var IUserFields $UserFields [26] property UserFields
	*/
	var $UserFields;

	/**
	 * DISPID=18
	 * @var int $BOETransactionkey [3] property BOETransactionkey
	*/
	var $BOETransactionkey;

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

}