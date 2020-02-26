<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class IBankPages
 * GUID={5BB202A1-E560-4E34-ACB3-2ECA52FFB274}
 *
 * @property string $AccountCode property AccountCode
 * @property-read int $Sequence property Sequence
 * @property-read string $AccountName property AccountName
 * @property string $Reference property Reference
 * @property string|VT_DATE $DueDate property DueDate
 * @property string $Memo property Memo
 * @property float $DebitAmount property DebitAmount
 * @property float $CreditAmount property CreditAmount
 * @property-read int $BankMatch property BankMatch
 * @property-read string $DataSource property DataSource
 * @property-read int $UserSignature property UserSignature
 * @property string $ExternalCode property ExternalCode
 * @property string $CardCode property CardCode
 * @property string $CardName property CardName
 * @property int $StatementNumber property StatementNumber
 * @property int $InvoiceNumber property InvoiceNumber
 * @property int|VT_USERDEFINED $PaymentCreated property PaymentCreated
 * @property int $VisualOrder property VisualOrder
 * @property int|VT_USERDEFINED $DocNumberType property DocNumberType
 * @property string $PaymentReference property PaymentReference
 * @property string $InvoiceNumberEx property InvoiceNumberEx
 * @property-read mixed|VT_PTR $Browser Get Browser
 * @property-read IUserFields $UserFields property UserFields
 * @property string $BICSwiftCode property BICSwiftCode
 */
class IBankPages 
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
	 * method Update
	 */
	function Update()
	{
	}

	/**
	 * DISPID=4
	 * @return int 
	 * method Remove
	 */
	function Remove()
	{
	}

	/**
	 * DISPID=5
	 * @param string $AccountCode [in]
	 * @param int $Sequence [in]
	 * @return bool 
	 * method GetByKey
	 */
	function GetByKey(
		/* string [8] [in] */ $AccountCode,
		/* int [3] [in] */ $Sequence 
	)
	{
	}

	/**
	 * DISPID=6
	 * @var string $AccountCode [8] property AccountCode
	*/
	var $AccountCode;

	/**
	 * DISPID=7
	 * @var int $Sequence [3] property Sequence
	*/
	var $Sequence;

	/**
	 * DISPID=8
	 * @var string $AccountName [8] property AccountName
	*/
	var $AccountName;

	/**
	 * DISPID=9
	 * @var string $Reference [8] property Reference
	*/
	var $Reference;

	/**
	 * DISPID=10
	 * @var string|VT_DATE $DueDate [7] property DueDate
	*/
	var $DueDate;

	/**
	 * DISPID=11
	 * @var string $Memo [8] property Memo
	*/
	var $Memo;

	/**
	 * DISPID=12
	 * @var float $DebitAmount [5] property DebitAmount
	*/
	var $DebitAmount;

	/**
	 * DISPID=13
	 * @var float $CreditAmount [5] property CreditAmount
	*/
	var $CreditAmount;

	/**
	 * DISPID=14
	 * @var int $BankMatch [3] property BankMatch
	*/
	var $BankMatch;

	/**
	 * DISPID=15
	 * @var string $DataSource [8] property DataSource
	*/
	var $DataSource;

	/**
	 * DISPID=16
	 * @var int $UserSignature [3] property UserSignature
	*/
	var $UserSignature;

	/**
	 * DISPID=17
	 * @var string $ExternalCode [8] property ExternalCode
	*/
	var $ExternalCode;

	/**
	 * DISPID=18
	 * @var string $CardCode [8] property CardCode
	*/
	var $CardCode;

	/**
	 * DISPID=19
	 * @var string $CardName [8] property CardName
	*/
	var $CardName;

	/**
	 * DISPID=20
	 * @var int $StatementNumber [3] property StatementNumber
	*/
	var $StatementNumber;

	/**
	 * DISPID=21
	 * @var int $InvoiceNumber [3] property InvoiceNumber
	*/
	var $InvoiceNumber;

	/**
	 * DISPID=22
	 * @var int|VT_USERDEFINED $PaymentCreated [29] property PaymentCreated
	*/
	var $PaymentCreated;

	/**
	 * DISPID=23
	 * @var int $VisualOrder [3] property VisualOrder
	*/
	var $VisualOrder;

	/**
	 * DISPID=24
	 * @var int|VT_USERDEFINED $DocNumberType [29] property DocNumberType
	*/
	var $DocNumberType;

	/**
	 * DISPID=25
	 * @var string $PaymentReference [8] property PaymentReference
	*/
	var $PaymentReference;

	/**
	 * DISPID=26
	 * @var string $InvoiceNumberEx [8] property InvoiceNumberEx
	*/
	var $InvoiceNumberEx;

	/**
	 * DISPID=27
	 * @return string 
	 * Get the object's data in xml format.
	 */
	function GetAsXML()
	{
	}

	/**
	 * DISPID=28
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
	 * DISPID=29
	 * @var mixed|VT_PTR $Browser [26] Get Browser
	*/
	var $Browser;

	/**
	 * DISPID=30
	 * @var IUserFields $UserFields [26] property UserFields
	*/
	var $UserFields;

	/**
	 * DISPID=31
	 * @var string $BICSwiftCode [8] property BICSwiftCode
	*/
	var $BICSwiftCode;

}