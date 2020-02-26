<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class IMaterialRevaluation
 * GUID={461F000F-9DB2-45D0-808D-FA552126FF16}
 *
 * @property-read IMaterialRevaluation_lines $Lines Invoke the lines object
 * @property-read int $DocNum Doc num
 * @property string|VT_DATE $DocDate Doc date
 * @property-read string $Reference1 Referance 1
 * @property string $Reference2 Referance 2
 * @property string $Comments Comments
 * @property string $JournalMemo Jurnal memo
 * @property-read string|VT_DATE $DocTime Doc time
 * @property int $Series Series
 * @property string|VT_DATE $TaxDate Tax date
 * @property-read IUserFields $UserFields Invoke the user fields object
 * @property-read mixed|VT_PTR $Browser User fields for this object.
 * @property-read int $DocEntry property DocEntry
 * @property-read string|VT_DATE $CreationDate property CreationDate
 * @property-read string|VT_DATE $UpdateDate property UpdateDate
 * @property-read int $TransNum property TransNum
 * @property string $RevalType property RevalType
 * @property string $RevaluationIncomeAccount property RevaluationIncomeAccount
 * @property string $RevaluationExpenseAccount property RevaluationExpenseAccount
 * @property-read string $DataSource property DataSource
 * @property-read int $UserSignature property UserSignature
 * @property int|VT_USERDEFINED $InflationRevaluation property InflationRevaluation
 * @property string $CardCode property CardCode
 * @property string $CardName property CardName
 */
class IMaterialRevaluation 
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
	 * @return int 
	 * Add
	 */
	function Add()
	{
	}

	/**
	 * DISPID=2
	 * @var IMaterialRevaluation_lines $Lines [26] Invoke the lines object
	*/
	var $Lines;

	/**
	 * DISPID=3
	 * @var int $DocNum [3] Doc num
	*/
	var $DocNum;

	/**
	 * DISPID=4
	 * @var string|VT_DATE $DocDate [7] Doc date
	*/
	var $DocDate;

	/**
	 * DISPID=5
	 * @var string $Reference1 [8] Referance 1
	*/
	var $Reference1;

	/**
	 * DISPID=6
	 * @var string $Reference2 [8] Referance 2
	*/
	var $Reference2;

	/**
	 * DISPID=7
	 * @var string $Comments [8] Comments
	*/
	var $Comments;

	/**
	 * DISPID=8
	 * @var string $JournalMemo [8] Jurnal memo
	*/
	var $JournalMemo;

	/**
	 * DISPID=9
	 * @var string|VT_DATE $DocTime [7] Doc time
	*/
	var $DocTime;

	/**
	 * DISPID=10
	 * @var int $Series [3] Series
	*/
	var $Series;

	/**
	 * DISPID=11
	 * @var string|VT_DATE $TaxDate [7] Tax date
	*/
	var $TaxDate;

	/**
	 * DISPID=12
	 * @param int $AbsEntry 
	 * @return bool 
	 * Get by key
	 */
	function GetByKey(
		/* int [3]  */ $AbsEntry 
	)
	{
	}

	/**
	 * DISPID=13
	 * @var IUserFields $UserFields [26] Invoke the user fields object
	*/
	var $UserFields;

	/**
	 * DISPID=14
	 * @param string $FileName [in][out]
	 * @return void 
	 * Save object as XML document
	 */
	function SaveXML(
		/* mixed|VT_PTR [26] [in][out] --> string [8]  */ &$FileName 
	)
	{
	}

	/**
	 * DISPID=15
	 * @return int 
	 * method Update
	 */
	function Update()
	{
	}

	/**
	 * DISPID=16
	 * @return int 
	 * method Cancel
	 */
	function Cancel()
	{
	}

	/**
	 * DISPID=17
	 * @return int 
	 * method Close
	 */
	function Close()
	{
	}

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
	 * @var mixed|VT_PTR $Browser [26] User fields for this object.
	*/
	var $Browser;

	/**
	 * DISPID=20
	 * @var int $DocEntry [3] property DocEntry
	*/
	var $DocEntry;

	/**
	 * DISPID=21
	 * @var string|VT_DATE $CreationDate [7] property CreationDate
	*/
	var $CreationDate;

	/**
	 * DISPID=22
	 * @var string|VT_DATE $UpdateDate [7] property UpdateDate
	*/
	var $UpdateDate;

	/**
	 * DISPID=23
	 * @var int $TransNum [3] property TransNum
	*/
	var $TransNum;

	/**
	 * DISPID=24
	 * @var string $RevalType [8] property RevalType
	*/
	var $RevalType;

	/**
	 * DISPID=25
	 * @var string $RevaluationIncomeAccount [8] property RevaluationIncomeAccount
	*/
	var $RevaluationIncomeAccount;

	/**
	 * DISPID=26
	 * @var string $RevaluationExpenseAccount [8] property RevaluationExpenseAccount
	*/
	var $RevaluationExpenseAccount;

	/**
	 * DISPID=27
	 * @var string $DataSource [8] property DataSource
	*/
	var $DataSource;

	/**
	 * DISPID=28
	 * @var int $UserSignature [3] property UserSignature
	*/
	var $UserSignature;

	/**
	 * DISPID=29
	 * @return string 
	 * Get the object's data in xml format.
	 */
	function GetAsXML()
	{
	}

	/**
	 * DISPID=30
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
	 * DISPID=51
	 * @var int|VT_USERDEFINED $InflationRevaluation [29] property InflationRevaluation
	*/
	var $InflationRevaluation;

	/**
	 * DISPID=52
	 * @var string $CardCode [8] property CardCode
	*/
	var $CardCode;

	/**
	 * DISPID=53
	 * @var string $CardName [8] property CardName
	*/
	var $CardName;

}