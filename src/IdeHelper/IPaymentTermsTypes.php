<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class IPaymentTermsTypes
 * GUID={F09A4CB0-F8CA-4342-A44D-82DE3395B011}
 *
 * @property-read mixed|VT_PTR $Browser Get Browser
 * @property-read int $GroupNumber property GroupNumber
 * @property string $PaymentTermsGroupName property PaymentTermsGroupName
 * @property int|VT_USERDEFINED $StartFrom property StartFrom
 * @property int $NumberOfAdditionalMonths property NumberOfAdditionalMonths
 * @property int $NumberOfAdditionalDays property NumberOfAdditionalDays
 * @property float $CreditLimit property CreditLimit
 * @property float $GeneralDiscount property GeneralDiscount
 * @property float $InterestOnArrears property InterestOnArrears
 * @property int $PriceListNo property PriceListNo
 * @property float $LoadLimit property LoadLimit
 * @property int|VT_USERDEFINED $OpenReceipt property OpenReceipt
 * @property string $DiscountCode property DiscountCode
 * @property string $DunningCode property DunningCode
 * @property int|VT_USERDEFINED $BaselineDate property BaselineDate
 * @property-read int $NumberOfInstallments property NumberOfInstallments
 * @property int $NumberOfToleranceDays property NumberOfToleranceDays
 * @property-read IUserFields $UserFields property UserFields
 */
class IPaymentTermsTypes 
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
	 * @param int $GroupNum [in]
	 * @return bool 
	 * method GetByKey
	 */
	function GetByKey(
		/* int [3] [in] */ $GroupNum 
	)
	{
	}

	/**
	 * DISPID=7
	 * @var mixed|VT_PTR $Browser [26] Get Browser
	*/
	var $Browser;

	/**
	 * DISPID=8
	 * @return int 
	 * method Close
	 */
	function Close()
	{
	}

	/**
	 * DISPID=9
	 * @var int $GroupNumber [3] property GroupNumber
	*/
	var $GroupNumber;

	/**
	 * DISPID=10
	 * @var string $PaymentTermsGroupName [8] property PaymentTermsGroupName
	*/
	var $PaymentTermsGroupName;

	/**
	 * DISPID=11
	 * @var int|VT_USERDEFINED $StartFrom [29] property StartFrom
	*/
	var $StartFrom;

	/**
	 * DISPID=12
	 * @var int $NumberOfAdditionalMonths [3] property NumberOfAdditionalMonths
	*/
	var $NumberOfAdditionalMonths;

	/**
	 * DISPID=13
	 * @var int $NumberOfAdditionalDays [3] property NumberOfAdditionalDays
	*/
	var $NumberOfAdditionalDays;

	/**
	 * DISPID=14
	 * @var float $CreditLimit [5] property CreditLimit
	*/
	var $CreditLimit;

	/**
	 * DISPID=15
	 * @var float $GeneralDiscount [5] property GeneralDiscount
	*/
	var $GeneralDiscount;

	/**
	 * DISPID=16
	 * @var float $InterestOnArrears [5] property InterestOnArrears
	*/
	var $InterestOnArrears;

	/**
	 * DISPID=17
	 * @var int $PriceListNo [3] property PriceListNo
	*/
	var $PriceListNo;

	/**
	 * DISPID=18
	 * @var float $LoadLimit [5] property LoadLimit
	*/
	var $LoadLimit;

	/**
	 * DISPID=19
	 * @var int|VT_USERDEFINED $OpenReceipt [29] property OpenReceipt
	*/
	var $OpenReceipt;

	/**
	 * DISPID=20
	 * @var string $DiscountCode [8] property DiscountCode
	*/
	var $DiscountCode;

	/**
	 * DISPID=21
	 * @var string $DunningCode [8] property DunningCode
	*/
	var $DunningCode;

	/**
	 * DISPID=22
	 * @var int|VT_USERDEFINED $BaselineDate [29] property BaselineDate
	*/
	var $BaselineDate;

	/**
	 * DISPID=23
	 * @var int $NumberOfInstallments [3] property NumberOfInstallments
	*/
	var $NumberOfInstallments;

	/**
	 * DISPID=24
	 * @var int $NumberOfToleranceDays [3] property NumberOfToleranceDays
	*/
	var $NumberOfToleranceDays;

	/**
	 * DISPID=25
	 * @var IUserFields $UserFields [26] property UserFields
	*/
	var $UserFields;

	/**
	 * DISPID=26
	 * @return string 
	 * Get the object's data in xml format.
	 */
	function GetAsXML()
	{
	}

	/**
	 * DISPID=27
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