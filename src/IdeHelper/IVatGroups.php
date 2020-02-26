<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class IVatGroups
 * GUID={8F4727F1-1991-4F80-8363-F7E1ABD6AF5E}
 *
 * @property-read IUserFields $UserFields Get User Fields
 * @property-read mixed|VT_PTR $Browser Get Browser
 * @property string $Code property Code
 * @property string $Name property Name
 * @property int|VT_USERDEFINED $Category property Category
 * @property string $TaxAccount property TaxAccount
 * @property int|VT_USERDEFINED $EU property EU
 * @property string $TriangularDeal property TriangularDeal
 * @property int|VT_USERDEFINED $AcquisitionReverse property AcquisitionReverse
 * @property float $NonDeduct property NonDeduct
 * @property string $AcquisitionTax property AcquisitionTax
 * @property string $GoodsShipment property GoodsShipment
 * @property string $NonDeductAcc property NonDeductAcc
 * @property string $DeferredTaxAcc property DeferredTaxAcc
 * @property int|VT_USERDEFINED $Correction property Correction
 * @property string $VatCorrection property VatCorrection
 * @property-read mixed|VT_PTR $VatGroups_Lines property VatGroups_Lines
 * @property string $EqualizationTaxAccount property EqualizationTaxAccount
 * @property string $ServiceSupply property ServiceSupply
 * @property int|VT_USERDEFINED $Inactive property Inactive
 * @property int|VT_USERDEFINED $TaxTypeBlackList property TaxTypeBlackList
 * @property int|VT_USERDEFINED $Report349Code property Report349Code
 * @property string $VATInRevenueAccount property VATInRevenueAccount
 * @property string $DownPaymentTaxOffsetAccount property DownPaymentTaxOffsetAccount
 * @property string $CashDiscountAccount property CashDiscountAccount
 * @property string $VATDeductibleAccount property VATDeductibleAccount
 * @property int|VT_USERDEFINED $TaxRegion property TaxRegion
 */
class IVatGroups 
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
	 * @param string $bstrGroupCode [in]
	 * @return bool 
	 * GetByKey
	 */
	function GetByKey(
		/* string [8] [in] */ $bstrGroupCode 
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
	 * @var IUserFields $UserFields [26] Get User Fields
	*/
	var $UserFields;

	/**
	 * DISPID=4
	 * @var mixed|VT_PTR $Browser [26] Get Browser
	*/
	var $Browser;

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
	 * @return int 
	 * method Update
	 */
	function Update()
	{
	}

	/**
	 * DISPID=7
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
	 * DISPID=14
	 * @var int|VT_USERDEFINED $Category [29] property Category
	*/
	var $Category;

	/**
	 * DISPID=15
	 * @var string $TaxAccount [8] property TaxAccount
	*/
	var $TaxAccount;

	/**
	 * DISPID=16
	 * @var int|VT_USERDEFINED $EU [29] property EU
	*/
	var $EU;

	/**
	 * DISPID=17
	 * @var string $TriangularDeal [8] property TriangularDeal
	*/
	var $TriangularDeal;

	/**
	 * DISPID=18
	 * @var int|VT_USERDEFINED $AcquisitionReverse [29] property AcquisitionReverse
	*/
	var $AcquisitionReverse;

	/**
	 * DISPID=19
	 * @var float $NonDeduct [5] property NonDeduct
	*/
	var $NonDeduct;

	/**
	 * DISPID=20
	 * @var string $AcquisitionTax [8] property AcquisitionTax
	*/
	var $AcquisitionTax;

	/**
	 * DISPID=21
	 * @var string $GoodsShipment [8] property GoodsShipment
	*/
	var $GoodsShipment;

	/**
	 * DISPID=22
	 * @var string $NonDeductAcc [8] property NonDeductAcc
	*/
	var $NonDeductAcc;

	/**
	 * DISPID=23
	 * @var string $DeferredTaxAcc [8] property DeferredTaxAcc
	*/
	var $DeferredTaxAcc;

	/**
	 * DISPID=24
	 * @var int|VT_USERDEFINED $Correction [29] property Correction
	*/
	var $Correction;

	/**
	 * DISPID=25
	 * @var string $VatCorrection [8] property VatCorrection
	*/
	var $VatCorrection;

	/**
	 * DISPID=26
	 * @var mixed|VT_PTR $VatGroups_Lines [26] property VatGroups_Lines
	*/
	var $VatGroups_Lines;

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
	 * @var string $EqualizationTaxAccount [8] property EqualizationTaxAccount
	*/
	var $EqualizationTaxAccount;

	/**
	 * DISPID=30
	 * @var string $ServiceSupply [8] property ServiceSupply
	*/
	var $ServiceSupply;

	/**
	 * DISPID=31
	 * @var int|VT_USERDEFINED $Inactive [29] property Inactive
	*/
	var $Inactive;

	/**
	 * DISPID=32
	 * @var int|VT_USERDEFINED $TaxTypeBlackList [29] property TaxTypeBlackList
	*/
	var $TaxTypeBlackList;

	/**
	 * DISPID=33
	 * @var int|VT_USERDEFINED $Report349Code [29] property Report349Code
	*/
	var $Report349Code;

	/**
	 * DISPID=34
	 * @var string $VATInRevenueAccount [8] property VATInRevenueAccount
	*/
	var $VATInRevenueAccount;

	/**
	 * DISPID=35
	 * @var string $DownPaymentTaxOffsetAccount [8] property DownPaymentTaxOffsetAccount
	*/
	var $DownPaymentTaxOffsetAccount;

	/**
	 * DISPID=36
	 * @var string $CashDiscountAccount [8] property CashDiscountAccount
	*/
	var $CashDiscountAccount;

	/**
	 * DISPID=37
	 * @var string $VATDeductibleAccount [8] property VATDeductibleAccount
	*/
	var $VATDeductibleAccount;

	/**
	 * DISPID=38
	 * @var int|VT_USERDEFINED $TaxRegion [29] property TaxRegion
	*/
	var $TaxRegion;

}