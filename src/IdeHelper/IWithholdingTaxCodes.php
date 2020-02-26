<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class IWithholdingTaxCodes
 * GUID={1B31BF62-5F56-4A20-876D-1B7BC75824C9}
 *
 * @property-read mixed|VT_PTR $Browser Get browser
 * @property-read IUserFields $UserFields Get User Fields
 * @property string $WTCode property WTCode
 * @property string $WTName property WTName
 * @property int|VT_USERDEFINED $Category property Category
 * @property int|VT_USERDEFINED $BaseType property BaseType
 * @property float $BaseAmount property BaseAmount
 * @property string $OfficialCode property OfficialCode
 * @property string $Account property Account
 * @property int|VT_USERDEFINED $WithholdingType property WithholdingType
 * @property int|VT_USERDEFINED $RoundingType property RoundingType
 * @property-read mixed|VT_PTR $Lines property Lines
 * @property int $Section property Section
 * @property float $Threshold property Threshold
 * @property float $Surcharge property Surcharge
 * @property int|VT_USERDEFINED $Concessional property Concessional
 * @property int $Assessee property Assessee
 * @property string $APTDSAccount property APTDSAccount
 * @property string $APSurchargeAccount property APSurchargeAccount
 * @property string $APCessAccount property APCessAccount
 * @property string $APHSCAccount property APHSCAccount
 * @property string $ARTDSAccount property ARTDSAccount
 * @property string $ARSurchargeAccount property ARSurchargeAccount
 * @property string $ARCessAccount property ARCessAccount
 * @property string $ARHSCAccount property ARHSCAccount
 * @property int $Location property Location
 * @property int|VT_USERDEFINED $ReturnType property ReturnType
 * @property int|VT_USERDEFINED $Inactive property Inactive
 * @property int $CSTCodeIncomingID property CSTCodeIncomingID
 * @property int $CSTCodeOutgoingID property CSTCodeOutgoingID
 * @property string $NatureOfCalculationBaseCode property NatureOfCalculationBaseCode
 * @property int $TypeID property TypeID
 * @property-read float $Rate property Rate
 * @property-read string|VT_DATE $Effectivefrom property EffectiveFrom
 * @property float $MinimumTaxableAmount property MinimumTaxableAmount
 * @property int|VT_USERDEFINED $IsProgressiveTax property IsProgressiveTax
 * @property string $Currency property Currency
 */
class IWithholdingTaxCodes 
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
	 * @param string $bstrWtCode [in]
	 * @return bool 
	 * GetByKey
	 */
	function GetByKey(
		/* string [8] [in] */ $bstrWtCode 
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
	 * DISPID=10
	 * @var string $WTCode [8] property WTCode
	*/
	var $WTCode;

	/**
	 * DISPID=11
	 * @var string $WTName [8] property WTName
	*/
	var $WTName;

	/**
	 * DISPID=12
	 * @var int|VT_USERDEFINED $Category [29] property Category
	*/
	var $Category;

	/**
	 * DISPID=13
	 * @var int|VT_USERDEFINED $BaseType [29] property BaseType
	*/
	var $BaseType;

	/**
	 * DISPID=14
	 * @var float $BaseAmount [5] property BaseAmount
	*/
	var $BaseAmount;

	/**
	 * DISPID=15
	 * @var string $OfficialCode [8] property OfficialCode
	*/
	var $OfficialCode;

	/**
	 * DISPID=16
	 * @var string $Account [8] property Account
	*/
	var $Account;

	/**
	 * DISPID=17
	 * @var int|VT_USERDEFINED $WithholdingType [29] property WithholdingType
	*/
	var $WithholdingType;

	/**
	 * DISPID=18
	 * @var int|VT_USERDEFINED $RoundingType [29] property RoundingType
	*/
	var $RoundingType;

	/**
	 * DISPID=19
	 * @var mixed|VT_PTR $Lines [26] property Lines
	*/
	var $Lines;

	/**
	 * DISPID=20
	 * @var int $Section [3] property Section
	*/
	var $Section;

	/**
	 * DISPID=21
	 * @var float $Threshold [5] property Threshold
	*/
	var $Threshold;

	/**
	 * DISPID=22
	 * @var float $Surcharge [5] property Surcharge
	*/
	var $Surcharge;

	/**
	 * DISPID=23
	 * @var int|VT_USERDEFINED $Concessional [29] property Concessional
	*/
	var $Concessional;

	/**
	 * DISPID=24
	 * @var int $Assessee [3] property Assessee
	*/
	var $Assessee;

	/**
	 * DISPID=25
	 * @var string $APTDSAccount [8] property APTDSAccount
	*/
	var $APTDSAccount;

	/**
	 * DISPID=26
	 * @var string $APSurchargeAccount [8] property APSurchargeAccount
	*/
	var $APSurchargeAccount;

	/**
	 * DISPID=27
	 * @var string $APCessAccount [8] property APCessAccount
	*/
	var $APCessAccount;

	/**
	 * DISPID=28
	 * @var string $APHSCAccount [8] property APHSCAccount
	*/
	var $APHSCAccount;

	/**
	 * DISPID=29
	 * @var string $ARTDSAccount [8] property ARTDSAccount
	*/
	var $ARTDSAccount;

	/**
	 * DISPID=30
	 * @var string $ARSurchargeAccount [8] property ARSurchargeAccount
	*/
	var $ARSurchargeAccount;

	/**
	 * DISPID=31
	 * @var string $ARCessAccount [8] property ARCessAccount
	*/
	var $ARCessAccount;

	/**
	 * DISPID=32
	 * @var string $ARHSCAccount [8] property ARHSCAccount
	*/
	var $ARHSCAccount;

	/**
	 * DISPID=33
	 * @var int $Location [3] property Location
	*/
	var $Location;

	/**
	 * DISPID=34
	 * @var int|VT_USERDEFINED $ReturnType [29] property ReturnType
	*/
	var $ReturnType;

	/**
	 * DISPID=35
	 * @var int|VT_USERDEFINED $Inactive [29] property Inactive
	*/
	var $Inactive;

	/**
	 * DISPID=36
	 * @var int $CSTCodeIncomingID [3] property CSTCodeIncomingID
	*/
	var $CSTCodeIncomingID;

	/**
	 * DISPID=37
	 * @var int $CSTCodeOutgoingID [3] property CSTCodeOutgoingID
	*/
	var $CSTCodeOutgoingID;

	/**
	 * DISPID=38
	 * @var string $NatureOfCalculationBaseCode [8] property NatureOfCalculationBaseCode
	*/
	var $NatureOfCalculationBaseCode;

	/**
	 * DISPID=39
	 * @var int $TypeID [3] property TypeID
	*/
	var $TypeID;

	/**
	 * DISPID=40
	 * @var float $Rate [5] property Rate
	*/
	var $Rate;

	/**
	 * DISPID=41
	 * @var string|VT_DATE $Effectivefrom [7] property EffectiveFrom
	*/
	var $Effectivefrom;

	/**
	 * DISPID=42
	 * @var float $MinimumTaxableAmount [5] property MinimumTaxableAmount
	*/
	var $MinimumTaxableAmount;

	/**
	 * DISPID=43
	 * @var int|VT_USERDEFINED $IsProgressiveTax [29] property IsProgressiveTax
	*/
	var $IsProgressiveTax;

	/**
	 * DISPID=44
	 * @var string $Currency [8] property Currency
	*/
	var $Currency;

}