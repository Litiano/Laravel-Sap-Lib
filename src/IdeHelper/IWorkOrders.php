<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class IWorkOrders
 * GUID={7615E097-E207-4E8D-A114-74031034136B}
 *
 * @property-read mixed|VT_PTR $Browser User fields for this object.
 * @property-read mixed|VT_PTR $Lines Invoke the lines object
 * @property int|VT_USERDEFINED $Status property Status
 * @property-read int|VT_USERDEFINED $Canceled property Canceled
 * @property string|VT_DATE $OrderDate property OrderDate
 * @property string|VT_DATE $WorkStartDate property WorkStartDate
 * @property string|VT_DATE $ExpectedCompletionDate property ExpectedCompletionDate
 * @property string|VT_DATE $WorkFinishDate property WorkFinishDate
 * @property string $ReceiverName property ReceiverName
 * @property string $OrdererCode property OrdererCode
 * @property string $OrdererName property OrdererName
 * @property string $CustomerRefNo property CustomerRefNo
 * @property-read float $OrderTotal property OrderTotal
 * @property-read string $TotalCurrency property TotalCurrency
 * @property string|VT_DATE $GenerationTime property GenerationTime
 * @property string $Comment property Comment
 * @property-read int $InstructionNumber property InstructionNumber
 * @property int $ContactPerson property ContactPerson
 * @property int $Series property Series
 * @property string $ActiveAccountCode property ActiveAccountCode
 * @property float $WorkSum property WorkSum
 * @property string $JournalRemarks property JournalRemarks
 * @property int $PriceListNum property PriceListNum
 * @property-read int $FinancialPeriod property FinancialPeriod
 * @property-read IUserFields $UserFields Get User Fields
 * @property-read int $OrderNum property OrderNum
 */
class IWorkOrders 
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
	 * method Add
	 */
	function Add()
	{
	}

	/**
	 * DISPID=2
	 * @param int $WkoKey 
	 * @return bool 
	 * method GetByKey
	 */
	function GetByKey(
		/* int [3]  */ $WkoKey 
	)
	{
	}

	/**
	 * DISPID=3
	 * @return int 
	 * method Update
	 */
	function Update()
	{
	}

	/**
	 * DISPID=5
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
	 * DISPID=6
	 * @var mixed|VT_PTR $Browser [26] User fields for this object.
	*/
	var $Browser;

	/**
	 * DISPID=7
	 * @var mixed|VT_PTR $Lines [26] Invoke the lines object
	*/
	var $Lines;

	/**
	 * DISPID=8
	 * @var int|VT_USERDEFINED $Status [29] property Status
	*/
	var $Status;

	/**
	 * DISPID=9
	 * @var int|VT_USERDEFINED $Canceled [29] property Canceled
	*/
	var $Canceled;

	/**
	 * DISPID=10
	 * @var string|VT_DATE $OrderDate [7] property OrderDate
	*/
	var $OrderDate;

	/**
	 * DISPID=11
	 * @var string|VT_DATE $WorkStartDate [7] property WorkStartDate
	*/
	var $WorkStartDate;

	/**
	 * DISPID=12
	 * @var string|VT_DATE $ExpectedCompletionDate [7] property ExpectedCompletionDate
	*/
	var $ExpectedCompletionDate;

	/**
	 * DISPID=13
	 * @var string|VT_DATE $WorkFinishDate [7] property WorkFinishDate
	*/
	var $WorkFinishDate;

	/**
	 * DISPID=14
	 * @var string $ReceiverName [8] property ReceiverName
	*/
	var $ReceiverName;

	/**
	 * DISPID=15
	 * @var string $OrdererCode [8] property OrdererCode
	*/
	var $OrdererCode;

	/**
	 * DISPID=16
	 * @var string $OrdererName [8] property OrdererName
	*/
	var $OrdererName;

	/**
	 * DISPID=17
	 * @var string $CustomerRefNo [8] property CustomerRefNo
	*/
	var $CustomerRefNo;

	/**
	 * DISPID=18
	 * @var float $OrderTotal [5] property OrderTotal
	*/
	var $OrderTotal;

	/**
	 * DISPID=19
	 * @var string $TotalCurrency [8] property TotalCurrency
	*/
	var $TotalCurrency;

	/**
	 * DISPID=20
	 * @var string|VT_DATE $GenerationTime [7] property GenerationTime
	*/
	var $GenerationTime;

	/**
	 * DISPID=21
	 * @var string $Comment [8] property Comment
	*/
	var $Comment;

	/**
	 * DISPID=22
	 * @var int $InstructionNumber [3] property InstructionNumber
	*/
	var $InstructionNumber;

	/**
	 * DISPID=23
	 * @var int $ContactPerson [3] property ContactPerson
	*/
	var $ContactPerson;

	/**
	 * DISPID=24
	 * @var int $Series [3] property Series
	*/
	var $Series;

	/**
	 * DISPID=25
	 * @var string $ActiveAccountCode [8] property ActiveAccountCode
	*/
	var $ActiveAccountCode;

	/**
	 * DISPID=26
	 * @var float $WorkSum [5] property WorkSum
	*/
	var $WorkSum;

	/**
	 * DISPID=27
	 * @var string $JournalRemarks [8] property JournalRemarks
	*/
	var $JournalRemarks;

	/**
	 * DISPID=28
	 * @var int $PriceListNum [3] property PriceListNum
	*/
	var $PriceListNum;

	/**
	 * DISPID=29
	 * @var int $FinancialPeriod [3] property FinancialPeriod
	*/
	var $FinancialPeriod;

	/**
	 * DISPID=30
	 * @return int 
	 * method Cancel
	 */
	function Cancel()
	{
	}

	/**
	 * DISPID=32
	 * @var IUserFields $UserFields [26] Get User Fields
	*/
	var $UserFields;

	/**
	 * DISPID=33
	 * @var int $OrderNum [3] property OrderNum
	*/
	var $OrderNum;

	/**
	 * DISPID=34
	 * @return string 
	 * Get the object's data in xml format.
	 */
	function GetAsXML()
	{
	}

	/**
	 * DISPID=35
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