<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class ISBObob
 * GUID={268D6CC3-E244-4AD7-B009-16C8ED7F710A}
 *
 */
class ISBObob 
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
	 * @param int|VT_USERDEFINED $CardType 
	 * @return mixed|VT_PTR 
	 * method GetBPList
	 */
	function GetBPList(
		/* int|VT_USERDEFINED [29]  */ $CardType 
	)
	{
	}

	/**
	 * DISPID=2
	 * @param string $CardCode [in]
	 * @param string|VT_DATE $refDate [in]
	 * @return mixed|VT_PTR 
	 * method GetDueDate
	 */
	function GetDueDate(
		/* string [8] [in] */ $CardCode,
		/* string|VT_DATE [7] [in] */ $refDate 
	)
	{
	}

	/**
	 * DISPID=3
	 * @return mixed|VT_PTR 
	 * method GetSystemCurrency
	 */
	function GetSystemCurrency()
	{
	}

	/**
	 * DISPID=4
	 * @return mixed|VT_PTR 
	 * method GetLocalCurrency
	 */
	function GetLocalCurrency()
	{
	}

	/**
	 * DISPID=5
	 * @param string $Currency [in]
	 * @param string|VT_DATE $Date [in]
	 * @return mixed|VT_PTR 
	 * method GetCurrencyRate
	 */
	function GetCurrencyRate(
		/* string [8] [in] */ $Currency,
		/* string|VT_DATE [7] [in] */ $Date 
	)
	{
	}

	/**
	 * DISPID=6
	 * @param string $Index [in]
	 * @param string|VT_DATE $Date [in]
	 * @return mixed|VT_PTR 
	 * method GetIndexRate
	 */
	function GetIndexRate(
		/* string [8] [in] */ $Index,
		/* string|VT_DATE [7] [in] */ $Date 
	)
	{
	}

	/**
	 * DISPID=7
	 * @param string $CardCode [in]
	 * @param string $ItemCode [in]
	 * @param float $amount [in]
	 * @param string|VT_DATE $Date [in]
	 * @return mixed|VT_PTR 
	 * method GetItemPrice
	 */
	function GetItemPrice(
		/* string [8] [in] */ $CardCode,
		/* string [8] [in] */ $ItemCode,
		/* float [5] [in] */ $amount,
		/* string|VT_DATE [7] [in] */ $Date 
	)
	{
	}

	/**
	 * DISPID=8
	 * @return mixed|VT_PTR 
	 * method GetItemList
	 */
	function GetItemList()
	{
	}

	/**
	 * DISPID=9
	 * @return mixed|VT_PTR 
	 * method GetUserList
	 */
	function GetUserList()
	{
	}

	/**
	 * DISPID=10
	 * @return mixed|VT_PTR 
	 * method GetWareHouseList
	 */
	function GetWareHouseList()
	{
	}

	/**
	 * DISPID=11
	 * @param string $Currency [in]
	 * @param string|VT_DATE $Date [in]
	 * @param float $Value [in]
	 * @param bool $Update [in]
	 * @return void 
	 * method SetCurrencyRate
	 */
	function SetCurrencyRate(
		/* string [8] [in] */ $Currency,
		/* string|VT_DATE [7] [in] */ $Date,
		/* float [5] [in] */ $Value,
		/* bool [11] [in] */ $Update 
	)
	{
	}

	/**
	 * DISPID=12
	 * @param string $CardCode [in]
	 * @return mixed|VT_PTR 
	 * method GetContactEmployees
	 */
	function GetContactEmployees(
		/* string [8] [in] */ $CardCode 
	)
	{
	}

	/**
	 * DISPID=13
	 * @param string|VT_DATE $inDate [in]
	 * @return mixed|VT_PTR 
	 * method Format_DateToString
	 */
	function Format_DateToString(
		/* string|VT_DATE [7] [in] */ $inDate 
	)
	{
	}

	/**
	 * DISPID=14
	 * @param string $inStr [in]
	 * @return mixed|VT_PTR 
	 * method Format_StringToDate
	 */
	function Format_StringToDate(
		/* string [8] [in] */ $inStr 
	)
	{
	}

	/**
	 * DISPID=15
	 * @param float $inMoney [in]
	 * @param int|VT_USERDEFINED $inPrecision [in]
	 * @return mixed|VT_PTR 
	 * method Format_MoneyToString
	 */
	function Format_MoneyToString(
		/* float [5] [in] */ $inMoney,
		/* int|VT_USERDEFINED [29] [in] */ $inPrecision 
	)
	{
	}

	/**
	 * DISPID=17
	 * @param int|VT_USERDEFINED $ObjNum [in]
	 * @param string $PropName [in]
	 * @param string $Value [in]
	 * @param int|VT_USERDEFINED $Condition [in]
	 * @return mixed|VT_PTR 
	 * method GetObjectKeyBySingleValue
	 */
	function GetObjectKeyBySingleValue(
		/* int|VT_USERDEFINED [29] [in] */ $ObjNum,
		/* string [8] [in] */ $PropName,
		/* string [8] [in] */ $Value,
		/* int|VT_USERDEFINED [29] [in] */ $Condition 
	)
	{
	}

	/**
	 * DISPID=18
	 * @param string $enumName [in]
	 * @param int $enumValue [in]
	 * @return string 
	 * method ConvertEnumValueToValidValue
	 */
	function ConvertEnumValueToValidValue(
		/* string [8] [in] */ $enumName,
		/* int [3] [in] */ $enumValue 
	)
	{
	}

	/**
	 * DISPID=19
	 * @param string $enumName [in]
	 * @param string $ValidValue [in]
	 * @return int 
	 * method ConvertValidValueToEnumValue
	 */
	function ConvertValidValueToEnumValue(
		/* string [8] [in] */ $enumName,
		/* string [8] [in] */ $ValidValue 
	)
	{
	}

	/**
	 * DISPID=20
	 * @param int|VT_USERDEFINED $ObjNum [in]
	 * @param string $ObjectName [in]
	 * @param string $PropertyName [in]
	 * @param int $enumValue [in]
	 * @return string 
	 * method GetValidValueDescription
	 */
	function GetValidValueDescription(
		/* int|VT_USERDEFINED [29] [in] */ $ObjNum,
		/* string [8] [in] */ $ObjectName,
		/* string [8] [in] */ $PropertyName,
		/* int [3] [in] */ $enumValue 
	)
	{
	}

	/**
	 * DISPID=21
	 * @param string $AccountCode [in]
	 * @param bool $AddSeperator [in]
	 * @return mixed|VT_PTR 
	 * method GetAccountSegmentsByCode
	 */
	function GetAccountSegmentsByCode(
		/* string [8] [in] */ $AccountCode,
		/* bool [11] [in] */ $AddSeperator 
	)
	{
	}

	/**
	 * DISPID=22
	 * @param string $TableName [in]
	 * @return mixed|VT_PTR 
	 * method GetTableFieldList
	 */
	function GetTableFieldList(
		/* string [8] [in] */ $TableName 
	)
	{
	}

	/**
	 * DISPID=23
	 * @param string $TableName [in]
	 * @param string $FieldName [in]
	 * @return mixed|VT_PTR 
	 * method GetFieldValidValues
	 */
	function GetFieldValidValues(
		/* string [8] [in] */ $TableName,
		/* string [8] [in] */ $FieldName 
	)
	{
	}

	/**
	 * DISPID=24
	 * @param int|VT_USERDEFINED $Object [in]
	 * @return mixed|VT_PTR 
	 * method GetObjectPermission
	 */
	function GetObjectPermission(
		/* int|VT_USERDEFINED [29] [in] */ $Object 
	)
	{
	}

	/**
	 * DISPID=25
	 * @return mixed|VT_PTR 
	 * method GetTableList
	 */
	function GetTableList()
	{
	}

	/**
	 * DISPID=26
	 * @param string $UserName [in]
	 * @param string $PermissionID [in]
	 * @return mixed|VT_PTR 
	 * method GetSystemPermission
	 */
	function GetSystemPermission(
		/* string [8] [in] */ $UserName,
		/* string [8] [in] */ $PermissionID 
	)
	{
	}

	/**
	 * DISPID=27
	 * @param string $UserName [in]
	 * @param string $PermissionID [in]
	 * @param int $Permission [in]
	 * @return void 
	 * method SetSystemPermission
	 */
	function SetSystemPermission(
		/* string [8] [in] */ $UserName,
		/* string [8] [in] */ $PermissionID,
		/* int [3] [in] */ $Permission 
	)
	{
	}

	/**
	 * DISPID=28
	 * @param string $bstrKey [in]
	 * @param string $pbstrRsltEwaUserName [out]
	 * @param string $pbstrRsltEwaPassword [out]
	 * @return void 
	 * method GetEwaParameters
	 */
	function GetEwaParameters(
		/* string [8] [in] */ $bstrKey,
		/* mixed|VT_PTR [26] [out] --> string [8]  */ &$pbstrRsltEwaUserName,
		/* mixed|VT_PTR [26] [out] --> string [8]  */ &$pbstrRsltEwaPassword 
	)
	{
	}

	/**
	 * DISPID=29
	 * @param string $bstrKey [in]
	 * @param string $bstrEwaUserName [in]
	 * @param string $bstrEwaPassword [in]
	 * @return void 
	 * method PutEwaParameters
	 */
	function PutEwaParameters(
		/* string [8] [in] */ $bstrKey,
		/* string [8] [in] */ $bstrEwaUserName,
		/* string [8] [in] */ $bstrEwaPassword 
	)
	{
	}

}