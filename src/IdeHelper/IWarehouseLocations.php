<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class IWarehouseLocations
 * GUID={18E244C5-2925-44E3-9DF7-3D8E38583DE0}
 *
 * @property-read mixed|VT_PTR $Browser Get browser
 * @property-read IUserFields $UserFields Get User Fields
 * @property-read int $Code property Code
 * @property string $Name property Name
 * @property string $LSTVATNumber property LSTVATNumber
 * @property string $CSTNumber property CSTNumber
 * @property string $ExemptionNumber property ExemptionNumber
 * @property string $TANNumber property TANNumber
 * @property string $ServiceTaxNumber property ServiceTaxNumber
 * @property string $AssesseeType property AssesseeType
 * @property string $CompanyType property CompanyType
 * @property string $NatureOfBusiness property NatureOfBusiness
 * @property string $TINNumber property TINNumber
 * @property-read string $RegistrationType property RegistrationType
 * @property string $EccNumber property EccNumber
 * @property string $CERange property CERange
 * @property string $CEDivision property CEDivision
 * @property string $CECommissionerate property CECommissionerate
 * @property string $ManufacturerCode property ManufacturerCode
 * @property string $Jurisdiction property Jurisdiction
 * @property string $Street property Street
 * @property string $Block property Block
 * @property string $ZipCode property ZipCode
 * @property string $City property City
 * @property string $County property County
 * @property string $Country property Country
 * @property string $State property State
 * @property string $PANNumber property PANNumber
 * @property string $CERegisterNumber property CERegisterNumber
 * @property string $BuildingFloorRoom property BuildingFloorRoom
 */
class IWarehouseLocations 
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
	 * @param int $lCode [in]
	 * @return bool 
	 * GetByKey
	 */
	function GetByKey(
		/* int [3] [in] */ $lCode 
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
	 * @var int $Code [3] property Code
	*/
	var $Code;

	/**
	 * DISPID=10
	 * @var string $Name [8] property Name
	*/
	var $Name;

	/**
	 * DISPID=11
	 * @var string $LSTVATNumber [8] property LSTVATNumber
	*/
	var $LSTVATNumber;

	/**
	 * DISPID=12
	 * @var string $CSTNumber [8] property CSTNumber
	*/
	var $CSTNumber;

	/**
	 * DISPID=13
	 * @var string $ExemptionNumber [8] property ExemptionNumber
	*/
	var $ExemptionNumber;

	/**
	 * DISPID=14
	 * @var string $TANNumber [8] property TANNumber
	*/
	var $TANNumber;

	/**
	 * DISPID=15
	 * @var string $ServiceTaxNumber [8] property ServiceTaxNumber
	*/
	var $ServiceTaxNumber;

	/**
	 * DISPID=16
	 * @var string $AssesseeType [8] property AssesseeType
	*/
	var $AssesseeType;

	/**
	 * DISPID=17
	 * @var string $CompanyType [8] property CompanyType
	*/
	var $CompanyType;

	/**
	 * DISPID=18
	 * @var string $NatureOfBusiness [8] property NatureOfBusiness
	*/
	var $NatureOfBusiness;

	/**
	 * DISPID=19
	 * @var string $TINNumber [8] property TINNumber
	*/
	var $TINNumber;

	/**
	 * DISPID=20
	 * @var string $RegistrationType [8] property RegistrationType
	*/
	var $RegistrationType;

	/**
	 * DISPID=21
	 * @var string $EccNumber [8] property EccNumber
	*/
	var $EccNumber;

	/**
	 * DISPID=22
	 * @var string $CERange [8] property CERange
	*/
	var $CERange;

	/**
	 * DISPID=23
	 * @var string $CEDivision [8] property CEDivision
	*/
	var $CEDivision;

	/**
	 * DISPID=24
	 * @var string $CECommissionerate [8] property CECommissionerate
	*/
	var $CECommissionerate;

	/**
	 * DISPID=25
	 * @var string $ManufacturerCode [8] property ManufacturerCode
	*/
	var $ManufacturerCode;

	/**
	 * DISPID=26
	 * @var string $Jurisdiction [8] property Jurisdiction
	*/
	var $Jurisdiction;

	/**
	 * DISPID=27
	 * @var string $Street [8] property Street
	*/
	var $Street;

	/**
	 * DISPID=28
	 * @var string $Block [8] property Block
	*/
	var $Block;

	/**
	 * DISPID=29
	 * @var string $ZipCode [8] property ZipCode
	*/
	var $ZipCode;

	/**
	 * DISPID=30
	 * @var string $City [8] property City
	*/
	var $City;

	/**
	 * DISPID=31
	 * @var string $County [8] property County
	*/
	var $County;

	/**
	 * DISPID=32
	 * @var string $Country [8] property Country
	*/
	var $Country;

	/**
	 * DISPID=33
	 * @var string $State [8] property State
	*/
	var $State;

	/**
	 * DISPID=34
	 * @var string $PANNumber [8] property PANNumber
	*/
	var $PANNumber;

	/**
	 * DISPID=35
	 * @var string $CERegisterNumber [8] property CERegisterNumber
	*/
	var $CERegisterNumber;

	/**
	 * DISPID=36
	 * @var string $BuildingFloorRoom [8] property BuildingFloorRoom
	*/
	var $BuildingFloorRoom;

}