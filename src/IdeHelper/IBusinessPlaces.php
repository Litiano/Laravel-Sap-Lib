<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class IBusinessPlaces
 * GUID={6C92660E-0507-4C90-8DDB-1C5B61AB41AA}
 *
 * @property-read mixed|VT_PTR $Browser Get browser
 * @property-read IUserFields $UserFields Get User Fields
 * @property-read int $BPLID property BPLID
 * @property string $BPLName property BPLName
 * @property string $BPLNameForeign property BPLNameForeign
 * @property string $VATRegNum property VATRegNum
 * @property string $RepName property RepName
 * @property string $Industry property Industry
 * @property string $Business property Business
 * @property string $Address property Address
 * @property string $Addressforeign property Addressforeign
 * @property int|VT_USERDEFINED $MainBPL property MainBPL
 * @property string $TaxOfficeNo property TaxOfficeNo
 * @property int|VT_USERDEFINED $Disabled property Disabled
 * @property-read mixed|VT_PTR $IENumbers Get IENumbers
 * @property string $DefaultCustomerID property DefaultCustomerID
 * @property string $DefaultVendorID property DefaultVendorID
 * @property string $DefaultWarehouseID property DefaultWarehouseID
 * @property string $DefaultTaxCode property DefaultTaxCode
 * @property string $TaxOffice property TaxOffice
 * @property string $FederalTaxID property FederalTaxID
 * @property string $FederalTaxID2 property FederalTaxID2
 * @property string $FederalTaxID3 property FederalTaxID3
 * @property string $AdditionalIdNumber property AdditionalIdNumber
 * @property int $NatureOfCompanyCode property NatureOfCompanyCode
 * @property int $EconomicActivityTypeCode property EconomicActivityTypeCode
 * @property string $CreditContributionOriginCode property CreditContributionOriginCode
 * @property string $IPIPeriodCode property IPIPeriodCode
 * @property int $CooperativeAssociationTypeCode property CooperativeAssociationTypeCode
 * @property int $ProfitTaxationCode property ProfitTaxationCode
 * @property int $CompanyQualificationCode property CompanyQualificationCode
 * @property int $DeclarerTypeCode property DeclarerTypeCode
 * @property string $PreferredStateCode property PreferredStateCode
 * @property string $AddressType property AddressType
 * @property string $Street property Street
 * @property string $StreetNo property StreetNo
 * @property string $Building property Building
 * @property string $ZipCode property ZipCode
 * @property string $Block property Block
 * @property string $City property City
 * @property string $State property State
 * @property string $County property County
 * @property string $Country property Country
 * @property string $AliasName proprety AliasName
 * @property string $CommercialRegister property CommercialRegister
 * @property string|VT_DATE $DateOfIncorporation property DateOfIncorporation
 * @property string $SPEDProfile property SPEDProfile
 * @property int $EnvironmentType property EnvironmentType
 * @property int|VT_USERDEFINED $Opting4ICMS property Opting4ICMS
 * @property-read mixed|VT_PTR $TributaryInfos property TributaryInfos
 * @property string $PaymentClearingAccount property PaymentClearingAccount
 * @property string $GlobalLocationNumber property GlobalLocationNumber
 * @property string $DefaultResourceWarehouseID property DefaultResourceWarehouseID
 */
class IBusinessPlaces 
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
	 * @param int $lBplId [in]
	 * @return bool 
	 * GetByKey
	 */
	function GetByKey(
		/* int [3] [in] */ $lBplId 
	)
	{
	}

	/**
	 * DISPID=7
	 * @var int $BPLID [3] property BPLID
	*/
	var $BPLID;

	/**
	 * DISPID=8
	 * @var string $BPLName [8] property BPLName
	*/
	var $BPLName;

	/**
	 * DISPID=9
	 * @var string $BPLNameForeign [8] property BPLNameForeign
	*/
	var $BPLNameForeign;

	/**
	 * DISPID=10
	 * @var string $VATRegNum [8] property VATRegNum
	*/
	var $VATRegNum;

	/**
	 * DISPID=11
	 * @var string $RepName [8] property RepName
	*/
	var $RepName;

	/**
	 * DISPID=12
	 * @var string $Industry [8] property Industry
	*/
	var $Industry;

	/**
	 * DISPID=13
	 * @var string $Business [8] property Business
	*/
	var $Business;

	/**
	 * DISPID=14
	 * @var string $Address [8] property Address
	*/
	var $Address;

	/**
	 * DISPID=15
	 * @var string $Addressforeign [8] property Addressforeign
	*/
	var $Addressforeign;

	/**
	 * DISPID=16
	 * @var int|VT_USERDEFINED $MainBPL [29] property MainBPL
	*/
	var $MainBPL;

	/**
	 * DISPID=17
	 * @var string $TaxOfficeNo [8] property TaxOfficeNo
	*/
	var $TaxOfficeNo;

	/**
	 * DISPID=18
	 * @var int|VT_USERDEFINED $Disabled [29] property Disabled
	*/
	var $Disabled;

	/**
	 * DISPID=19
	 * @var mixed|VT_PTR $IENumbers [26] Get IENumbers
	*/
	var $IENumbers;

	/**
	 * DISPID=20
	 * @return int 
	 * Method Update
	 */
	function Update()
	{
	}

	/**
	 * DISPID=31
	 * @var string $DefaultCustomerID [8] property DefaultCustomerID
	*/
	var $DefaultCustomerID;

	/**
	 * DISPID=32
	 * @var string $DefaultVendorID [8] property DefaultVendorID
	*/
	var $DefaultVendorID;

	/**
	 * DISPID=33
	 * @var string $DefaultWarehouseID [8] property DefaultWarehouseID
	*/
	var $DefaultWarehouseID;

	/**
	 * DISPID=34
	 * @var string $DefaultTaxCode [8] property DefaultTaxCode
	*/
	var $DefaultTaxCode;

	/**
	 * DISPID=35
	 * @var string $TaxOffice [8] property TaxOffice
	*/
	var $TaxOffice;

	/**
	 * DISPID=36
	 * @var string $FederalTaxID [8] property FederalTaxID
	*/
	var $FederalTaxID;

	/**
	 * DISPID=37
	 * @var string $FederalTaxID2 [8] property FederalTaxID2
	*/
	var $FederalTaxID2;

	/**
	 * DISPID=38
	 * @var string $FederalTaxID3 [8] property FederalTaxID3
	*/
	var $FederalTaxID3;

	/**
	 * DISPID=39
	 * @var string $AdditionalIdNumber [8] property AdditionalIdNumber
	*/
	var $AdditionalIdNumber;

	/**
	 * DISPID=40
	 * @var int $NatureOfCompanyCode [3] property NatureOfCompanyCode
	*/
	var $NatureOfCompanyCode;

	/**
	 * DISPID=41
	 * @var int $EconomicActivityTypeCode [3] property EconomicActivityTypeCode
	*/
	var $EconomicActivityTypeCode;

	/**
	 * DISPID=42
	 * @var string $CreditContributionOriginCode [8] property CreditContributionOriginCode
	*/
	var $CreditContributionOriginCode;

	/**
	 * DISPID=43
	 * @var string $IPIPeriodCode [8] property IPIPeriodCode
	*/
	var $IPIPeriodCode;

	/**
	 * DISPID=44
	 * @var int $CooperativeAssociationTypeCode [3] property CooperativeAssociationTypeCode
	*/
	var $CooperativeAssociationTypeCode;

	/**
	 * DISPID=45
	 * @return int 
	 * method Add
	 */
	function Add()
	{
	}

	/**
	 * DISPID=46
	 * @return int 
	 * method Remove
	 */
	function Remove()
	{
	}

	/**
	 * DISPID=47
	 * @var int $ProfitTaxationCode [3] property ProfitTaxationCode
	*/
	var $ProfitTaxationCode;

	/**
	 * DISPID=48
	 * @var int $CompanyQualificationCode [3] property CompanyQualificationCode
	*/
	var $CompanyQualificationCode;

	/**
	 * DISPID=49
	 * @var int $DeclarerTypeCode [3] property DeclarerTypeCode
	*/
	var $DeclarerTypeCode;

	/**
	 * DISPID=50
	 * @var string $PreferredStateCode [8] property PreferredStateCode
	*/
	var $PreferredStateCode;

	/**
	 * DISPID=51
	 * @var string $AddressType [8] property AddressType
	*/
	var $AddressType;

	/**
	 * DISPID=52
	 * @var string $Street [8] property Street
	*/
	var $Street;

	/**
	 * DISPID=53
	 * @var string $StreetNo [8] property StreetNo
	*/
	var $StreetNo;

	/**
	 * DISPID=54
	 * @var string $Building [8] property Building
	*/
	var $Building;

	/**
	 * DISPID=55
	 * @var string $ZipCode [8] property ZipCode
	*/
	var $ZipCode;

	/**
	 * DISPID=56
	 * @var string $Block [8] property Block
	*/
	var $Block;

	/**
	 * DISPID=57
	 * @var string $City [8] property City
	*/
	var $City;

	/**
	 * DISPID=58
	 * @var string $State [8] property State
	*/
	var $State;

	/**
	 * DISPID=59
	 * @var string $County [8] property County
	*/
	var $County;

	/**
	 * DISPID=60
	 * @var string $Country [8] property Country
	*/
	var $Country;

	/**
	 * DISPID=61
	 * @var string $AliasName [8] proprety AliasName
	*/
	var $AliasName;

	/**
	 * DISPID=62
	 * @var string $CommercialRegister [8] property CommercialRegister
	*/
	var $CommercialRegister;

	/**
	 * DISPID=63
	 * @var string|VT_DATE $DateOfIncorporation [7] property DateOfIncorporation
	*/
	var $DateOfIncorporation;

	/**
	 * DISPID=64
	 * @var string $SPEDProfile [8] property SPEDProfile
	*/
	var $SPEDProfile;

	/**
	 * DISPID=65
	 * @var int $EnvironmentType [3] property EnvironmentType
	*/
	var $EnvironmentType;

	/**
	 * DISPID=66
	 * @var int|VT_USERDEFINED $Opting4ICMS [29] property Opting4ICMS
	*/
	var $Opting4ICMS;

	/**
	 * DISPID=67
	 * @var mixed|VT_PTR $TributaryInfos [26] property TributaryInfos
	*/
	var $TributaryInfos;

	/**
	 * DISPID=68
	 * @var string $PaymentClearingAccount [8] property PaymentClearingAccount
	*/
	var $PaymentClearingAccount;

	/**
	 * DISPID=69
	 * @var string $GlobalLocationNumber [8] property GlobalLocationNumber
	*/
	var $GlobalLocationNumber;

	/**
	 * DISPID=70
	 * @var string $DefaultResourceWarehouseID [8] property DefaultResourceWarehouseID
	*/
	var $DefaultResourceWarehouseID;

}