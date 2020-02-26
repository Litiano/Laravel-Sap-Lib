<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class IUserDefaultGroups
 * GUID={DD85FFF4-93C1-4673-9129-175B77C1CC4C}
 *
 * @property-read mixed|VT_PTR $Browser Get browser
 * @property-read IUserFields $UserFields Get User Fields
 * @property string $Code property Code
 * @property string $Name property Name
 * @property string $Warehouse property Warehouse
 * @property int $SalesEmployee property SalesEmployee
 * @property string $BPforInvoicePayment property BPforInvoicePayment
 * @property string $CashAccount property CashAccount
 * @property string $CheckingAcct property CheckingAcct
 * @property int|VT_USERDEFINED $PrintReceipt property PrintReceipt
 * @property int|VT_USERDEFINED $PrintInvoiceandPaymentinS property PrintInvoiceandPaymentinS
 * @property int $WindowsColor property WindowsColor
 * @property string $Address property Address
 * @property string $Country property Country
 * @property string $PrintingHeader property PrintingHeader
 * @property string $PhoneNumber1 property PhoneNumber1
 * @property string $PhoneNumber2 property PhoneNumber2
 * @property string $FaxNumber property FaxNumber
 * @property string $eMail property eMail
 * @property string $AddressinForeignLanguage property AddressinForeignLanguage
 * @property string $PrintingHeaderInForeignLangu property PrintingHeaderInForeignLangu
 * @property string $PhoneNumber1ForeignLang property PhoneNumber1ForeignLang
 * @property string $PhoneNumber2ForeignLang property PhoneNumber2ForeignLang
 * @property string $FaxNumberForeignLang property FaxNumberForeignLang
 * @property string $DefaultTaxCode property DefaultTaxCode
 * @property string $AdditionalIdNumber property AdditionalIdNumber
 * @property-read int $UserSignature property UserSignature
 * @property int|VT_USERDEFINED $UseTax property UseTax
 * @property int|VT_USERDEFINED $UseWarehouseAddressinAPD property UseWarehouseAddressinAPD
 * @property-read mixed|VT_PTR $DefaultCreditCards property DefaultCreditCards
 * @property-read mixed|VT_PTR $DefaultDocuments property DefaultDocuments
 * @property int $BPLID property BPLID
 * @property int|VT_USERDEFINED $AssetInDoc property AssetInDoc
 * @property string $DefaultPTICode property DefaultPTICode
 */
class IUserDefaultGroups 
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
	 * @param string $bstrCode [in]
	 * @return bool 
	 * GetByKey
	 */
	function GetByKey(
		/* string [8] [in] */ $bstrCode 
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
	 * DISPID=9
	 * @return int 
	 * method Remove
	 */
	function Remove()
	{
	}

	/**
	 * DISPID=11
	 * @var string $Code [8] property Code
	*/
	var $Code;

	/**
	 * DISPID=12
	 * @var string $Name [8] property Name
	*/
	var $Name;

	/**
	 * DISPID=13
	 * @var string $Warehouse [8] property Warehouse
	*/
	var $Warehouse;

	/**
	 * DISPID=14
	 * @var int $SalesEmployee [3] property SalesEmployee
	*/
	var $SalesEmployee;

	/**
	 * DISPID=15
	 * @var string $BPforInvoicePayment [8] property BPforInvoicePayment
	*/
	var $BPforInvoicePayment;

	/**
	 * DISPID=16
	 * @var string $CashAccount [8] property CashAccount
	*/
	var $CashAccount;

	/**
	 * DISPID=17
	 * @var string $CheckingAcct [8] property CheckingAcct
	*/
	var $CheckingAcct;

	/**
	 * DISPID=19
	 * @var int|VT_USERDEFINED $PrintReceipt [29] property PrintReceipt
	*/
	var $PrintReceipt;

	/**
	 * DISPID=20
	 * @var int|VT_USERDEFINED $PrintInvoiceandPaymentinS [29] property PrintInvoiceandPaymentinS
	*/
	var $PrintInvoiceandPaymentinS;

	/**
	 * DISPID=21
	 * @var int $WindowsColor [3] property WindowsColor
	*/
	var $WindowsColor;

	/**
	 * DISPID=22
	 * @var string $Address [8] property Address
	*/
	var $Address;

	/**
	 * DISPID=23
	 * @var string $Country [8] property Country
	*/
	var $Country;

	/**
	 * DISPID=24
	 * @var string $PrintingHeader [8] property PrintingHeader
	*/
	var $PrintingHeader;

	/**
	 * DISPID=25
	 * @var string $PhoneNumber1 [8] property PhoneNumber1
	*/
	var $PhoneNumber1;

	/**
	 * DISPID=26
	 * @var string $PhoneNumber2 [8] property PhoneNumber2
	*/
	var $PhoneNumber2;

	/**
	 * DISPID=27
	 * @var string $FaxNumber [8] property FaxNumber
	*/
	var $FaxNumber;

	/**
	 * DISPID=28
	 * @var string $eMail [8] property eMail
	*/
	var $eMail;

	/**
	 * DISPID=29
	 * @var string $AddressinForeignLanguage [8] property AddressinForeignLanguage
	*/
	var $AddressinForeignLanguage;

	/**
	 * DISPID=30
	 * @var string $PrintingHeaderInForeignLangu [8] property PrintingHeaderInForeignLangu
	*/
	var $PrintingHeaderInForeignLangu;

	/**
	 * DISPID=31
	 * @var string $PhoneNumber1ForeignLang [8] property PhoneNumber1ForeignLang
	*/
	var $PhoneNumber1ForeignLang;

	/**
	 * DISPID=32
	 * @var string $PhoneNumber2ForeignLang [8] property PhoneNumber2ForeignLang
	*/
	var $PhoneNumber2ForeignLang;

	/**
	 * DISPID=33
	 * @var string $FaxNumberForeignLang [8] property FaxNumberForeignLang
	*/
	var $FaxNumberForeignLang;

	/**
	 * DISPID=34
	 * @var string $DefaultTaxCode [8] property DefaultTaxCode
	*/
	var $DefaultTaxCode;

	/**
	 * DISPID=35
	 * @var string $AdditionalIdNumber [8] property AdditionalIdNumber
	*/
	var $AdditionalIdNumber;

	/**
	 * DISPID=36
	 * @var int $UserSignature [3] property UserSignature
	*/
	var $UserSignature;

	/**
	 * DISPID=37
	 * @var int|VT_USERDEFINED $UseTax [29] property UseTax
	*/
	var $UseTax;

	/**
	 * DISPID=38
	 * @var int|VT_USERDEFINED $UseWarehouseAddressinAPD [29] property UseWarehouseAddressinAPD
	*/
	var $UseWarehouseAddressinAPD;

	/**
	 * DISPID=39
	 * @var mixed|VT_PTR $DefaultCreditCards [26] property DefaultCreditCards
	*/
	var $DefaultCreditCards;

	/**
	 * DISPID=40
	 * @var mixed|VT_PTR $DefaultDocuments [26] property DefaultDocuments
	*/
	var $DefaultDocuments;

	/**
	 * DISPID=51
	 * @var int $BPLID [3] property BPLID
	*/
	var $BPLID;

	/**
	 * DISPID=52
	 * @var int|VT_USERDEFINED $AssetInDoc [29] property AssetInDoc
	*/
	var $AssetInDoc;

	/**
	 * DISPID=53
	 * @var string $DefaultPTICode [8] property DefaultPTICode
	*/
	var $DefaultPTICode;

}