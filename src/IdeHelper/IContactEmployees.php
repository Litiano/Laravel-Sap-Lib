<?php
/**
 * Created by PhpStorm.
 * User: H4
 * Date: 29/01/2018
 * Time: 08:53
 */

namespace Litiano\Sap\IdeHelper;



class IContactEmployees { /* GUID={52C8673B-CA79-4476-9F2E-28109AE17545} */
    /* DISPID=1610612736 */
    function QueryInterface(
        /* VT_PTR [26] [in] --> ? [29]  */ &$riid,
        /* VT_PTR [26] [out] --> VT_PTR [26]  */ &$ppvObj
    )
    {
    }
    /* DISPID=1610612737 */
    /* VT_UI4 [19] */
    function AddRef(
    )
    {
    }
    /* DISPID=1610612738 */
    /* VT_UI4 [19] */
    function Release(
    )
    {
    }
    /* DISPID=1610678272 */
    function GetTypeInfoCount(
        /* VT_PTR [26] [out] --> VT_UINT [23]  */ &$pctinfo
    )
    {
    }
    /* DISPID=1610678273 */
    function GetTypeInfo(
        /* VT_UINT [23] [in] */ $itinfo,
        /* VT_UI4 [19] [in] */ $lcid,
        /* VT_PTR [26] [out] --> VT_PTR [26]  */ &$pptinfo
    )
    {
    }
    /* DISPID=1610678274 */
    function GetIDsOfNames(
        /* VT_PTR [26] [in] --> ? [29]  */ &$riid,
        /* VT_PTR [26] [in] --> VT_PTR [26]  */ &$rgszNames,
        /* VT_UINT [23] [in] */ $cNames,
        /* VT_UI4 [19] [in] */ $lcid,
        /* VT_PTR [26] [out] --> VT_I4 [3]  */ &$rgdispid
    )
    {
    }
    /* DISPID=1610678275 */
    function Invoke(
        /* VT_I4 [3] [in] */ $dispidMember,
        /* VT_PTR [26] [in] --> ? [29]  */ &$riid,
        /* VT_UI4 [19] [in] */ $lcid,
        /* VT_UI2 [18] [in] */ $wFlags,
        /* VT_PTR [26] [in] --> ? [29]  */ &$pdispparams,
        /* VT_PTR [26] [out] --> VT_VARIANT [12]  */ &$pvarResult,
        /* VT_PTR [26] [out] --> ? [29]  */ &$pexcepinfo,
        /* VT_PTR [26] [out] --> VT_UINT [23]  */ &$puArgErr
    )
    {
    }
    /* DISPID=2 */
    /* VT_BSTR [8] */
    /* property Position */
    var $Position;

    /* DISPID=2 */
    /* property Position */
    var $Position;

    /* DISPID=3 */
    /* VT_BSTR [8] */
    /* property Address */
    var $Address;

    /* DISPID=3 */
    /* property Address */
    var $Address;

    /* DISPID=4 */
    /* VT_BSTR [8] */
    /* property Phone1 */
    var $Phone1;

    /* DISPID=4 */
    /* property Phone1 */
    var $Phone1;

    /* DISPID=5 */
    /* VT_BSTR [8] */
    /* property Phone2 */
    var $Phone2;

    /* DISPID=5 */
    /* property Phone2 */
    var $Phone2;

    /* DISPID=6 */
    /* VT_BSTR [8] */
    /* property MobilePhone */
    var $MobilePhone;

    /* DISPID=6 */
    /* property MobilePhone */
    var $MobilePhone;

    /* DISPID=7 */
    /* VT_BSTR [8] */
    /* property Fax */
    var $Fax;

    /* DISPID=7 */
    /* property Fax */
    var $Fax;

    /* DISPID=8 */
    /* VT_BSTR [8] */
    /* property E_Mail */
    var $E_Mail;

    /* DISPID=8 */
    /* property E_Mail */
    var $E_Mail;

    /* DISPID=9 */
    /* VT_BSTR [8] */
    /* property Pager */
    var $Pager;

    /* DISPID=9 */
    /* property Pager */
    var $Pager;

    /* DISPID=10 */
    /* VT_BSTR [8] */
    /* property Remarks1 */
    var $Remarks1;

    /* DISPID=10 */
    /* property Remarks1 */
    var $Remarks1;

    /* DISPID=11 */
    /* VT_BSTR [8] */
    /* property Remarks2 */
    var $Remarks2;

    /* DISPID=11 */
    /* property Remarks2 */
    var $Remarks2;

    /* DISPID=12 */
    /* VT_BSTR [8] */
    /* property Password */
    var $Password;

    /* DISPID=12 */
    /* property Password */
    var $Password;

    /* DISPID=13 */
    /* VT_I4 [3] */
    /* property Count */
    var $Count;

    /* DISPID=14 */
    function SetCurrentLine(
        /* VT_I4 [3]  */ $LineNum
    )
    {
        /* method SetCurrentLine */
    }
    /* DISPID=15 */
    function Add(
    )
    {
        /* method Add */
    }
    /* DISPID=16 */
    /* VT_BSTR [8] */
    /* property Name */
    var $Name;

    /* DISPID=16 */
    /* property Name */
    var $Name;

    /* DISPID=17 */
    /* VT_PTR [26] */
    /* User fields for this object. */
    var $UserFields;

    /* DISPID=18 */
    /* VT_I4 [3] */
    /* property InternalCode */
    var $InternalCode;

    /* DISPID=19 */
    /* VT_BSTR [8] */
    /* property PlaceOfBirth */
    var $PlaceOfBirth;

    /* DISPID=19 */
    /* property PlaceOfBirth */
    var $PlaceOfBirth;

    /* DISPID=20 */
    /* VT_DATE [7] */
    /* property DateOfBirth */
    var $DateOfBirth;

    /* DISPID=20 */
    /* property DateOfBirth */
    var $DateOfBirth;

    /* DISPID=21 */
    /* ? [29] */
    /* property Gender */
    var $Gender;

    /* DISPID=21 */
    /* property Gender */
    var $Gender;

    /* DISPID=22 */
    /* VT_BSTR [8] */
    /* property Profession */
    var $Profession;

    /* DISPID=22 */
    /* property Profession */
    var $Profession;

    /* DISPID=23 */
    /* VT_BSTR [8] */
    /* property CardCode */
    var $CardCode;

    /* DISPID=24 */
    /* VT_BSTR [8] */
    /* property Title */
    var $Title;

    /* DISPID=24 */
    /* property Title */
    var $Title;

    /* DISPID=25 */
    /* VT_BSTR [8] */
    /* property CityOfBirth */
    var $CityOfBirth;

    /* DISPID=25 */
    /* property CityOfBirth */
    var $CityOfBirth;

    /* DISPID=26 */
    function Delete(
    )
    {
        /* method Delete */
    }
    /* DISPID=27 */
    /* ? [29] */
    /* property Active */
    var $Active;

    /* DISPID=27 */
    /* property Active */
    var $Active;

    /* DISPID=28 */
    /* VT_BSTR [8] */
    /* property FirstName */
    var $FirstName;

    /* DISPID=28 */
    /* property FirstName */
    var $FirstName;

    /* DISPID=29 */
    /* VT_BSTR [8] */
    /* property MiddleName */
    var $MiddleName;

    /* DISPID=29 */
    /* property MiddleName */
    var $MiddleName;

    /* DISPID=30 */
    /* VT_BSTR [8] */
    /* property LastName */
    var $LastName;

    /* DISPID=30 */
    /* property LastName */
    var $LastName;

    /* DISPID=31 */
    /* VT_BSTR [8] */
    /* property EmailGroupCode */
    var $EmailGroupCode;

    /* DISPID=31 */
    /* property EmailGroupCode */
    var $EmailGroupCode;

    /* DISPID=32 */
    /* ? [29] */
    /* property BlockSendingMarketingContent */
    var $BlockSendingMarketingContent;

    /* DISPID=32 */
    /* property BlockSendingMarketingContent */
    var $BlockSendingMarketingContent;

    /* DISPID=33 */
    /* VT_PTR [26] */
    /* property ContactEmployeeBlockSendingMarketingContents */
    var $ContactEmployeeBlockSendingMarketingContents;

}
bool(true)
