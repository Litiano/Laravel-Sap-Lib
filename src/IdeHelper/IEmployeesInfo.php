<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class IEmployeesInfo
 * GUID={B2CFCDE5-3753-4A47-9199-38D08718B3AE}
 *
 * @property-read IUserFields $UserFields Get User Fields
 * @property-read mixed|VT_PTR $Browser Get Browser
 * @property-read int $EmployeeID property EmployeeID
 * @property string $LastName property LastName
 * @property string $FirstName property FirstName
 * @property string $MiddleName property MiddleName
 * @property int|VT_USERDEFINED $Gender property Gender
 * @property string $JobTitle property JobTitle
 * @property int $EmployeeType property EmployeeType
 * @property int $Department property Department
 * @property int $Branch property Branch
 * @property string $WorkStreet property WorkStreet
 * @property string $WorkBlock property WorkBlock
 * @property string $WorkZipCode property WorkZipCode
 * @property string $WorkCity property WorkCity
 * @property string $WorkCounty property WorkCounty
 * @property string $WorkCountryCode property WorkCountryCode
 * @property string $WorkStateCode property WorkStateCode
 * @property int $Manager property Manager
 * @property int $ApplicationUserID property ApplicationUserID
 * @property int $SalesPersonCode property SalesPersonCode
 * @property string $OfficePhone property OfficePhone
 * @property string $OfficeExtension property OfficeExtension
 * @property string $MobilePhone property MobilePhone
 * @property string $Pager property Pager
 * @property string $HomePhone property HomePhone
 * @property string $Fax property Fax
 * @property string $eMail property eMail
 * @property string|VT_DATE $StartDate property StartDate
 * @property int $StatusCode property StatusCode
 * @property float $Salary property Salary
 * @property int|VT_USERDEFINED $SalaryUnit property SalaryUnit
 * @property float $EmployeeCosts property EmployeeCosts
 * @property int|VT_USERDEFINED $EmployeeCostUnit property EmployeeCostUnit
 * @property string|VT_DATE $TerminationDate property TerminationDate
 * @property int $TreminationReason property TreminationReason
 * @property string $BankCode property BankCode
 * @property string $BankBranch property BankBranch
 * @property string $BankBranchNum property BankBranchNum
 * @property string $BankAccount property BankAccount
 * @property string $HomeStreet property HomeStreet
 * @property string $HomeBlock property HomeBlock
 * @property string $HomeZipCode property HomeZipCode
 * @property string $HomeCity property HomeCity
 * @property string $HomeCounty property HomeCounty
 * @property string $HomeCountry property HomeCountry
 * @property string $HomeState property HomeState
 * @property string|VT_DATE $DateOfBirth property DateOfBirth
 * @property string $CountryOfBirth property CountryOfBirth
 * @property int|VT_USERDEFINED $MartialStatus property MartialStatus
 * @property int $NumOfChildren property NumOfChildren
 * @property string $IdNumber property IdNumber
 * @property string $CitizenshipCountryCode property CitizenshipCountryCode
 * @property string $PassportNumber property PassportNumber
 * @property string|VT_DATE $PassportExpirationDate property PassportExpirationDate
 * @property string $Picture property Picture
 * @property string $Remarks property Remarks
 * @property-read mixed|VT_PTR $Attachments property Attachments
 * @property string $SalaryCurrency property SalaryCurrency
 * @property string $EmployeeCostsCurrency property EmployeeCostsCurrency
 * @property-read mixed|VT_PTR $ReviewsInfo property ReviewsInfo
 * @property-read mixed|VT_PTR $AbsenceInfo property AbsenceInfo
 * @property-read mixed|VT_PTR $PreviousEmpoymentInfo property PreviousEmpoymentInfo
 * @property-read mixed|VT_PTR $EducationInfo property EducationInfo
 * @property-read mixed|VT_PTR $EmployeeRolesInfo property EmployeeRolesInfo
 * @property string $WorkBuildingFloorRoom property WorkBuildingFloorRoom
 * @property string $HomeBuildingFloorRoom property HomeBuildingFloorRoom
 * @property int $AttachmentEntry property AttachmentEntry
 * @property int $Position property Position
 * @property string $CostCenterCode property CostCenterCode
 * @property string $CompanyNumber property CompanyNumber
 * @property int $VacationPreviousYear property VacationPreviousYear
 * @property int $VacationCurrentYear property VacationCurrentYear
 * @property string $MunicipalityKey property MunicipalityKey
 * @property string $TaxClass property TaxClass
 * @property string $IncomeTaxLiability property IncomeTaxLiability
 * @property string $Religion property Religion
 * @property string $PartnerReligion property PartnerReligion
 * @property float $ExemptionAmount property ExemptionAmount
 * @property int|VT_USERDEFINED $ExemptionUnit property ExemptionUnit
 * @property string $ExemptionCurrency property ExemptionCurrency
 * @property float $AdditionalAmount property AdditionalAmount
 * @property int|VT_USERDEFINED $AdditionalUnit property AdditionalUnit
 * @property string $AdditionalCurrency property AdditionalCurrency
 * @property string $TaxOfficeName property TaxOfficeName
 * @property string $TaxOfficeNumber property TaxOfficeNumber
 * @property string $HealthInsuranceName property HealthInsuranceName
 * @property string $HealthInsuranceCode property HealthInsuranceCode
 * @property string $HealthInsuranceType property HealthInsuranceType
 * @property string $SocialInsuranceNumber property SocialInsuranceNumber
 * @property string $ProfessionStatus property ProfessionStatus
 * @property string $EducationStatus property EducationStatus
 * @property string $PersonGroup property PersonGroup
 * @property string $JobTitleCode property JobTitleCode
 * @property string $BankCodeForDATEV property BankCodeForDATEV
 * @property int|VT_USERDEFINED $DeviatingBankAccountOwner property DeviatingBankAccountOwner
 * @property string $SpouseFirstName property SpouseFirstName
 * @property string $SpouseSurname property SpouseSurname
 * @property string $ExternalEmployeeNumber property ExternalEmployeeNumber
 * @property string $BirthPlace property BirthPlace
 * @property int|VT_USERDEFINED $PaymentMethod property PaymentMethod
 * @property-read mixed|VT_PTR $SavingsPaymentInfo property SavingsPaymentInfo
 * @property int $STDCode property STDCode
 * @property string $CPF property CPF
 * @property string $CRCNumber property CRCNumber
 * @property int|VT_USERDEFINED $AccountantResponsible property AccountantResponsible
 * @property int|VT_USERDEFINED $LegalRepresentative property LegalRepresentative
 * @property int|VT_USERDEFINED $DIRFResponsible property DIRFResponsible
 * @property string $CRCState property CRCState
 * @property int|VT_USERDEFINED $Active property Active
 * @property string $IDType property IDType
 * @property int $BPLID property BPLID
 * @property string|VT_DATE $PassportIssueDate property PassportIssueDate
 * @property string $PassportIssuer property PassportIssuer
 * @property int|VT_USERDEFINED $QualificationCode property QualificationCode
 * @property int|VT_USERDEFINED $PRWebAccess property PRWebAccess
 * @property-read int|VT_USERDEFINED $PreviousPRWebAccess property PreviousPRWebAccess
 * @property-read mixed|VT_PTR $EmployeeBranchAssignment property EmployeeBranchAssignment
 * @property string $WorkStreetNumber property WorkStreetNumber
 * @property string $HomeStreetNumber property HomeStreetNumber
 */
class IEmployeesInfo 
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
	 * @param int $EmployeeID [in]
	 * @return bool 
	 * method GetByKey
	 */
	function GetByKey(
		/* int [3] [in] */ $EmployeeID 
	)
	{
	}

	/**
	 * DISPID=6
	 * @var IUserFields $UserFields [26] Get User Fields
	*/
	var $UserFields;

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
	 * @var int $EmployeeID [3] property EmployeeID
	*/
	var $EmployeeID;

	/**
	 * DISPID=10
	 * @var string $LastName [8] property LastName
	*/
	var $LastName;

	/**
	 * DISPID=11
	 * @var string $FirstName [8] property FirstName
	*/
	var $FirstName;

	/**
	 * DISPID=12
	 * @var string $MiddleName [8] property MiddleName
	*/
	var $MiddleName;

	/**
	 * DISPID=13
	 * @var int|VT_USERDEFINED $Gender [29] property Gender
	*/
	var $Gender;

	/**
	 * DISPID=14
	 * @var string $JobTitle [8] property JobTitle
	*/
	var $JobTitle;

	/**
	 * DISPID=15
	 * @var int $EmployeeType [3] property EmployeeType
	*/
	var $EmployeeType;

	/**
	 * DISPID=16
	 * @var int $Department [3] property Department
	*/
	var $Department;

	/**
	 * DISPID=17
	 * @var int $Branch [3] property Branch
	*/
	var $Branch;

	/**
	 * DISPID=18
	 * @var string $WorkStreet [8] property WorkStreet
	*/
	var $WorkStreet;

	/**
	 * DISPID=19
	 * @var string $WorkBlock [8] property WorkBlock
	*/
	var $WorkBlock;

	/**
	 * DISPID=20
	 * @var string $WorkZipCode [8] property WorkZipCode
	*/
	var $WorkZipCode;

	/**
	 * DISPID=21
	 * @var string $WorkCity [8] property WorkCity
	*/
	var $WorkCity;

	/**
	 * DISPID=22
	 * @var string $WorkCounty [8] property WorkCounty
	*/
	var $WorkCounty;

	/**
	 * DISPID=23
	 * @var string $WorkCountryCode [8] property WorkCountryCode
	*/
	var $WorkCountryCode;

	/**
	 * DISPID=24
	 * @var string $WorkStateCode [8] property WorkStateCode
	*/
	var $WorkStateCode;

	/**
	 * DISPID=25
	 * @var int $Manager [3] property Manager
	*/
	var $Manager;

	/**
	 * DISPID=26
	 * @var int $ApplicationUserID [3] property ApplicationUserID
	*/
	var $ApplicationUserID;

	/**
	 * DISPID=27
	 * @var int $SalesPersonCode [3] property SalesPersonCode
	*/
	var $SalesPersonCode;

	/**
	 * DISPID=28
	 * @var string $OfficePhone [8] property OfficePhone
	*/
	var $OfficePhone;

	/**
	 * DISPID=29
	 * @var string $OfficeExtension [8] property OfficeExtension
	*/
	var $OfficeExtension;

	/**
	 * DISPID=30
	 * @var string $MobilePhone [8] property MobilePhone
	*/
	var $MobilePhone;

	/**
	 * DISPID=31
	 * @var string $Pager [8] property Pager
	*/
	var $Pager;

	/**
	 * DISPID=32
	 * @var string $HomePhone [8] property HomePhone
	*/
	var $HomePhone;

	/**
	 * DISPID=33
	 * @var string $Fax [8] property Fax
	*/
	var $Fax;

	/**
	 * DISPID=34
	 * @var string $eMail [8] property eMail
	*/
	var $eMail;

	/**
	 * DISPID=35
	 * @var string|VT_DATE $StartDate [7] property StartDate
	*/
	var $StartDate;

	/**
	 * DISPID=36
	 * @var int $StatusCode [3] property StatusCode
	*/
	var $StatusCode;

	/**
	 * DISPID=37
	 * @var float $Salary [5] property Salary
	*/
	var $Salary;

	/**
	 * DISPID=38
	 * @var int|VT_USERDEFINED $SalaryUnit [29] property SalaryUnit
	*/
	var $SalaryUnit;

	/**
	 * DISPID=39
	 * @var float $EmployeeCosts [5] property EmployeeCosts
	*/
	var $EmployeeCosts;

	/**
	 * DISPID=40
	 * @var int|VT_USERDEFINED $EmployeeCostUnit [29] property EmployeeCostUnit
	*/
	var $EmployeeCostUnit;

	/**
	 * DISPID=41
	 * @var string|VT_DATE $TerminationDate [7] property TerminationDate
	*/
	var $TerminationDate;

	/**
	 * DISPID=42
	 * @var int $TreminationReason [3] property TreminationReason
	*/
	var $TreminationReason;

	/**
	 * DISPID=43
	 * @var string $BankCode [8] property BankCode
	*/
	var $BankCode;

	/**
	 * DISPID=44
	 * @var string $BankBranch [8] property BankBranch
	*/
	var $BankBranch;

	/**
	 * DISPID=45
	 * @var string $BankBranchNum [8] property BankBranchNum
	*/
	var $BankBranchNum;

	/**
	 * DISPID=46
	 * @var string $BankAccount [8] property BankAccount
	*/
	var $BankAccount;

	/**
	 * DISPID=47
	 * @var string $HomeStreet [8] property HomeStreet
	*/
	var $HomeStreet;

	/**
	 * DISPID=48
	 * @var string $HomeBlock [8] property HomeBlock
	*/
	var $HomeBlock;

	/**
	 * DISPID=49
	 * @var string $HomeZipCode [8] property HomeZipCode
	*/
	var $HomeZipCode;

	/**
	 * DISPID=50
	 * @var string $HomeCity [8] property HomeCity
	*/
	var $HomeCity;

	/**
	 * DISPID=51
	 * @var string $HomeCounty [8] property HomeCounty
	*/
	var $HomeCounty;

	/**
	 * DISPID=52
	 * @var string $HomeCountry [8] property HomeCountry
	*/
	var $HomeCountry;

	/**
	 * DISPID=53
	 * @var string $HomeState [8] property HomeState
	*/
	var $HomeState;

	/**
	 * DISPID=54
	 * @var string|VT_DATE $DateOfBirth [7] property DateOfBirth
	*/
	var $DateOfBirth;

	/**
	 * DISPID=55
	 * @var string $CountryOfBirth [8] property CountryOfBirth
	*/
	var $CountryOfBirth;

	/**
	 * DISPID=56
	 * @var int|VT_USERDEFINED $MartialStatus [29] property MartialStatus
	*/
	var $MartialStatus;

	/**
	 * DISPID=57
	 * @var int $NumOfChildren [3] property NumOfChildren
	*/
	var $NumOfChildren;

	/**
	 * DISPID=58
	 * @var string $IdNumber [8] property IdNumber
	*/
	var $IdNumber;

	/**
	 * DISPID=59
	 * @var string $CitizenshipCountryCode [8] property CitizenshipCountryCode
	*/
	var $CitizenshipCountryCode;

	/**
	 * DISPID=60
	 * @var string $PassportNumber [8] property PassportNumber
	*/
	var $PassportNumber;

	/**
	 * DISPID=61
	 * @var string|VT_DATE $PassportExpirationDate [7] property PassportExpirationDate
	*/
	var $PassportExpirationDate;

	/**
	 * DISPID=62
	 * @var string $Picture [8] property Picture
	*/
	var $Picture;

	/**
	 * DISPID=63
	 * @var string $Remarks [8] property Remarks
	*/
	var $Remarks;

	/**
	 * DISPID=64
	 * @var mixed|VT_PTR $Attachments [26] property Attachments
	*/
	var $Attachments;

	/**
	 * DISPID=65
	 * @var string $SalaryCurrency [8] property SalaryCurrency
	*/
	var $SalaryCurrency;

	/**
	 * DISPID=66
	 * @var string $EmployeeCostsCurrency [8] property EmployeeCostsCurrency
	*/
	var $EmployeeCostsCurrency;

	/**
	 * DISPID=67
	 * @var mixed|VT_PTR $ReviewsInfo [26] property ReviewsInfo
	*/
	var $ReviewsInfo;

	/**
	 * DISPID=68
	 * @var mixed|VT_PTR $AbsenceInfo [26] property AbsenceInfo
	*/
	var $AbsenceInfo;

	/**
	 * DISPID=69
	 * @var mixed|VT_PTR $PreviousEmpoymentInfo [26] property PreviousEmpoymentInfo
	*/
	var $PreviousEmpoymentInfo;

	/**
	 * DISPID=70
	 * @var mixed|VT_PTR $EducationInfo [26] property EducationInfo
	*/
	var $EducationInfo;

	/**
	 * DISPID=71
	 * @var mixed|VT_PTR $EmployeeRolesInfo [26] property EmployeeRolesInfo
	*/
	var $EmployeeRolesInfo;

	/**
	 * DISPID=72
	 * @return string 
	 * Get the object's data in xml format.
	 */
	function GetAsXML()
	{
	}

	/**
	 * DISPID=73
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
	 * DISPID=74
	 * @var string $WorkBuildingFloorRoom [8] property WorkBuildingFloorRoom
	*/
	var $WorkBuildingFloorRoom;

	/**
	 * DISPID=75
	 * @var string $HomeBuildingFloorRoom [8] property HomeBuildingFloorRoom
	*/
	var $HomeBuildingFloorRoom;

	/**
	 * DISPID=76
	 * @var int $AttachmentEntry [3] property AttachmentEntry
	*/
	var $AttachmentEntry;

	/**
	 * DISPID=77
	 * @var int $Position [3] property Position
	*/
	var $Position;

	/**
	 * DISPID=91
	 * @var string $CostCenterCode [8] property CostCenterCode
	*/
	var $CostCenterCode;

	/**
	 * DISPID=92
	 * @var string $CompanyNumber [8] property CompanyNumber
	*/
	var $CompanyNumber;

	/**
	 * DISPID=93
	 * @var int $VacationPreviousYear [3] property VacationPreviousYear
	*/
	var $VacationPreviousYear;

	/**
	 * DISPID=94
	 * @var int $VacationCurrentYear [3] property VacationCurrentYear
	*/
	var $VacationCurrentYear;

	/**
	 * DISPID=95
	 * @var string $MunicipalityKey [8] property MunicipalityKey
	*/
	var $MunicipalityKey;

	/**
	 * DISPID=96
	 * @var string $TaxClass [8] property TaxClass
	*/
	var $TaxClass;

	/**
	 * DISPID=97
	 * @var string $IncomeTaxLiability [8] property IncomeTaxLiability
	*/
	var $IncomeTaxLiability;

	/**
	 * DISPID=98
	 * @var string $Religion [8] property Religion
	*/
	var $Religion;

	/**
	 * DISPID=99
	 * @var string $PartnerReligion [8] property PartnerReligion
	*/
	var $PartnerReligion;

	/**
	 * DISPID=100
	 * @var float $ExemptionAmount [5] property ExemptionAmount
	*/
	var $ExemptionAmount;

	/**
	 * DISPID=101
	 * @var int|VT_USERDEFINED $ExemptionUnit [29] property ExemptionUnit
	*/
	var $ExemptionUnit;

	/**
	 * DISPID=102
	 * @var string $ExemptionCurrency [8] property ExemptionCurrency
	*/
	var $ExemptionCurrency;

	/**
	 * DISPID=103
	 * @var float $AdditionalAmount [5] property AdditionalAmount
	*/
	var $AdditionalAmount;

	/**
	 * DISPID=104
	 * @var int|VT_USERDEFINED $AdditionalUnit [29] property AdditionalUnit
	*/
	var $AdditionalUnit;

	/**
	 * DISPID=105
	 * @var string $AdditionalCurrency [8] property AdditionalCurrency
	*/
	var $AdditionalCurrency;

	/**
	 * DISPID=106
	 * @var string $TaxOfficeName [8] property TaxOfficeName
	*/
	var $TaxOfficeName;

	/**
	 * DISPID=107
	 * @var string $TaxOfficeNumber [8] property TaxOfficeNumber
	*/
	var $TaxOfficeNumber;

	/**
	 * DISPID=108
	 * @var string $HealthInsuranceName [8] property HealthInsuranceName
	*/
	var $HealthInsuranceName;

	/**
	 * DISPID=109
	 * @var string $HealthInsuranceCode [8] property HealthInsuranceCode
	*/
	var $HealthInsuranceCode;

	/**
	 * DISPID=110
	 * @var string $HealthInsuranceType [8] property HealthInsuranceType
	*/
	var $HealthInsuranceType;

	/**
	 * DISPID=111
	 * @var string $SocialInsuranceNumber [8] property SocialInsuranceNumber
	*/
	var $SocialInsuranceNumber;

	/**
	 * DISPID=112
	 * @var string $ProfessionStatus [8] property ProfessionStatus
	*/
	var $ProfessionStatus;

	/**
	 * DISPID=113
	 * @var string $EducationStatus [8] property EducationStatus
	*/
	var $EducationStatus;

	/**
	 * DISPID=114
	 * @var string $PersonGroup [8] property PersonGroup
	*/
	var $PersonGroup;

	/**
	 * DISPID=115
	 * @var string $JobTitleCode [8] property JobTitleCode
	*/
	var $JobTitleCode;

	/**
	 * DISPID=116
	 * @var string $BankCodeForDATEV [8] property BankCodeForDATEV
	*/
	var $BankCodeForDATEV;

	/**
	 * DISPID=117
	 * @var int|VT_USERDEFINED $DeviatingBankAccountOwner [29] property DeviatingBankAccountOwner
	*/
	var $DeviatingBankAccountOwner;

	/**
	 * DISPID=118
	 * @var string $SpouseFirstName [8] property SpouseFirstName
	*/
	var $SpouseFirstName;

	/**
	 * DISPID=119
	 * @var string $SpouseSurname [8] property SpouseSurname
	*/
	var $SpouseSurname;

	/**
	 * DISPID=120
	 * @var string $ExternalEmployeeNumber [8] property ExternalEmployeeNumber
	*/
	var $ExternalEmployeeNumber;

	/**
	 * DISPID=121
	 * @var string $BirthPlace [8] property BirthPlace
	*/
	var $BirthPlace;

	/**
	 * DISPID=122
	 * @var int|VT_USERDEFINED $PaymentMethod [29] property PaymentMethod
	*/
	var $PaymentMethod;

	/**
	 * DISPID=123
	 * @var mixed|VT_PTR $SavingsPaymentInfo [26] property SavingsPaymentInfo
	*/
	var $SavingsPaymentInfo;

	/**
	 * DISPID=124
	 * @var int $STDCode [3] property STDCode
	*/
	var $STDCode;

	/**
	 * DISPID=125
	 * @var string $CPF [8] property CPF
	*/
	var $CPF;

	/**
	 * DISPID=126
	 * @var string $CRCNumber [8] property CRCNumber
	*/
	var $CRCNumber;

	/**
	 * DISPID=127
	 * @var int|VT_USERDEFINED $AccountantResponsible [29] property AccountantResponsible
	*/
	var $AccountantResponsible;

	/**
	 * DISPID=128
	 * @var int|VT_USERDEFINED $LegalRepresentative [29] property LegalRepresentative
	*/
	var $LegalRepresentative;

	/**
	 * DISPID=129
	 * @var int|VT_USERDEFINED $DIRFResponsible [29] property DIRFResponsible
	*/
	var $DIRFResponsible;

	/**
	 * DISPID=130
	 * @var string $CRCState [8] property CRCState
	*/
	var $CRCState;

	/**
	 * DISPID=131
	 * @var int|VT_USERDEFINED $Active [29] property Active
	*/
	var $Active;

	/**
	 * DISPID=132
	 * @var string $IDType [8] property IDType
	*/
	var $IDType;

	/**
	 * DISPID=133
	 * @var int $BPLID [3] property BPLID
	*/
	var $BPLID;

	/**
	 * DISPID=134
	 * @var string|VT_DATE $PassportIssueDate [7] property PassportIssueDate
	*/
	var $PassportIssueDate;

	/**
	 * DISPID=135
	 * @var string $PassportIssuer [8] property PassportIssuer
	*/
	var $PassportIssuer;

	/**
	 * DISPID=136
	 * @var int|VT_USERDEFINED $QualificationCode [29] property QualificationCode
	*/
	var $QualificationCode;

	/**
	 * DISPID=137
	 * @var int|VT_USERDEFINED $PRWebAccess [29] property PRWebAccess
	*/
	var $PRWebAccess;

	/**
	 * DISPID=138
	 * @var int|VT_USERDEFINED $PreviousPRWebAccess [29] property PreviousPRWebAccess
	*/
	var $PreviousPRWebAccess;

	/**
	 * DISPID=139
	 * @var mixed|VT_PTR $EmployeeBranchAssignment [26] property EmployeeBranchAssignment
	*/
	var $EmployeeBranchAssignment;

	/**
	 * DISPID=140
	 * @var string $WorkStreetNumber [8] property WorkStreetNumber
	*/
	var $WorkStreetNumber;

	/**
	 * DISPID=141
	 * @var string $HomeStreetNumber [8] property HomeStreetNumber
	*/
	var $HomeStreetNumber;

}