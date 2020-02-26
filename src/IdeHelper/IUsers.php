<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class IUsers
 * GUID={ED256951-E65E-40BF-A2E9-2A21741D8720}
 *
 * @property-read mixed|VT_PTR $Browser Get Browser
 * @property-read int $InternalKey property InternalKey
 * @property string $UserPassword property UserPassword
 * @property string $UserCode property UserCode
 * @property string $UserName property UserName
 * @property int|VT_USERDEFINED $Superuser property Superuser
 * @property string $eMail property eMail
 * @property string $MobilePhoneNumber property MobilePhoneNumber
 * @property string $Defaults property Defaults
 * @property string $FaxNumber property FaxNumber
 * @property int $Branch property Branch
 * @property int $Department property Department
 * @property-read IUserFields $UserFields property UserFields
 * @property-read mixed|VT_PTR $UserPermission property UserPermission
 * @property int|VT_USERDEFINED $Locked property Locked
 * @property-read int|VT_USERDEFINED $Group property Group
 * @property float $MaxDiscountGeneral property MaxDiscountGeneral
 * @property float $MaxDiscountSales property MaxDiscountSales
 * @property float $MaxDiscountPurchase property MaxDiscountPurchase
 * @property int|VT_USERDEFINED $CashLimit property CashLimit
 * @property float $MaxCashAmtForIncmngPayts property MaxCashAmtForIncmngPayts
 * @property-read string|VT_DATE $LastLogoutDate property LastLogoutDate
 * @property-read string|VT_DATE $LastLoginTime property LastLoginTime
 * @property-read string|VT_DATE $LastLogoutTime property LastLogoutTime
 * @property-read string|VT_DATE $LastPasswordChangeTime property LastPasswordChangeTime
 * @property-read string $LastPasswordChangedBy property LastPasswordChangedBy
 * @property-read mixed|VT_PTR $UserActionRecord property UserActionRecord
 * @property-read mixed|VT_PTR $UserBranchAssignment property UserBranchAssignment
 */
class IUsers 
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
	 * @param int $InternalKey [in]
	 * @return bool 
	 * method GetByKey
	 */
	function GetByKey(
		/* int [3] [in] */ $InternalKey 
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
	 * @var int $InternalKey [3] property InternalKey
	*/
	var $InternalKey;

	/**
	 * DISPID=10
	 * @var string $UserPassword [8] property UserPassword
	*/
	var $UserPassword;

	/**
	 * DISPID=11
	 * @var string $UserCode [8] property UserCode
	*/
	var $UserCode;

	/**
	 * DISPID=12
	 * @var string $UserName [8] property UserName
	*/
	var $UserName;

	/**
	 * DISPID=13
	 * @var int|VT_USERDEFINED $Superuser [29] property Superuser
	*/
	var $Superuser;

	/**
	 * DISPID=14
	 * @var string $eMail [8] property eMail
	*/
	var $eMail;

	/**
	 * DISPID=15
	 * @var string $MobilePhoneNumber [8] property MobilePhoneNumber
	*/
	var $MobilePhoneNumber;

	/**
	 * DISPID=16
	 * @var string $Defaults [8] property Defaults
	*/
	var $Defaults;

	/**
	 * DISPID=17
	 * @var string $FaxNumber [8] property FaxNumber
	*/
	var $FaxNumber;

	/**
	 * DISPID=18
	 * @var int $Branch [3] property Branch
	*/
	var $Branch;

	/**
	 * DISPID=19
	 * @var int $Department [3] property Department
	*/
	var $Department;

	/**
	 * DISPID=20
	 * @var IUserFields $UserFields [26] property UserFields
	*/
	var $UserFields;

	/**
	 * DISPID=21
	 * @var mixed|VT_PTR $UserPermission [26] property UserPermission
	*/
	var $UserPermission;

	/**
	 * DISPID=22
	 * @return string 
	 * Get the object's data in xml format.
	 */
	function GetAsXML()
	{
	}

	/**
	 * DISPID=23
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
	 * DISPID=24
	 * @var int|VT_USERDEFINED $Locked [29] property Locked
	*/
	var $Locked;

	/**
	 * DISPID=25
	 * @var int|VT_USERDEFINED $Group [29] property Group
	*/
	var $Group;

	/**
	 * DISPID=26
	 * @var float $MaxDiscountGeneral [5] property MaxDiscountGeneral
	*/
	var $MaxDiscountGeneral;

	/**
	 * DISPID=27
	 * @var float $MaxDiscountSales [5] property MaxDiscountSales
	*/
	var $MaxDiscountSales;

	/**
	 * DISPID=28
	 * @var float $MaxDiscountPurchase [5] property MaxDiscountPurchase
	*/
	var $MaxDiscountPurchase;

	/**
	 * DISPID=29
	 * @var int|VT_USERDEFINED $CashLimit [29] property CashLimit
	*/
	var $CashLimit;

	/**
	 * DISPID=30
	 * @var float $MaxCashAmtForIncmngPayts [5] property MaxCashAmtForIncmngPayts
	*/
	var $MaxCashAmtForIncmngPayts;

	/**
	 * DISPID=41
	 * @var string|VT_DATE $LastLogoutDate [7] property LastLogoutDate
	*/
	var $LastLogoutDate;

	/**
	 * DISPID=42
	 * @var string|VT_DATE $LastLoginTime [7] property LastLoginTime
	*/
	var $LastLoginTime;

	/**
	 * DISPID=43
	 * @var string|VT_DATE $LastLogoutTime [7] property LastLogoutTime
	*/
	var $LastLogoutTime;

	/**
	 * DISPID=44
	 * @var string|VT_DATE $LastPasswordChangeTime [7] property LastPasswordChangeTime
	*/
	var $LastPasswordChangeTime;

	/**
	 * DISPID=45
	 * @var string $LastPasswordChangedBy [8] property LastPasswordChangedBy
	*/
	var $LastPasswordChangedBy;

	/**
	 * DISPID=46
	 * @var mixed|VT_PTR $UserActionRecord [26] property UserActionRecord
	*/
	var $UserActionRecord;

	/**
	 * DISPID=61
	 * @var mixed|VT_PTR $UserBranchAssignment [26] property UserBranchAssignment
	*/
	var $UserBranchAssignment;

}