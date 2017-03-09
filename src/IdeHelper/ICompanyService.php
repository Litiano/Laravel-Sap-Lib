<?php
/**
 * Created by PhpStorm.
 * User: E-Commerce 2
 * Date: 09/03/2017
 * Time: 10:35
 */

namespace Litiano\Sap\IdeHelper;


class ICompanyService { /* GUID={9D202A0D-3D49-47E0-AC0D-90333C553E85} */
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
    /* DISPID=1 */
    /* VT_DISPATCH [9] */
    function GetDataInterface(
        /* ? [29] [in] */ $enumMSDI
    )
    {
        /* GetDataInterface */
    }
    /* DISPID=2 */
    /* VT_DISPATCH [9] */
    function GetDataInterfaceFromXMLFile(
        /* VT_BSTR [8] [in] */ $bstrFileName
    )
    {
        /* GetDataInterfaceFromXMLFile */
    }
    /* DISPID=3 */
    /* VT_DISPATCH [9] */
    function GetDataInterfaceFromXMLString(
        /* VT_BSTR [8] [in] */ $bstrXMLString
    )
    {
        /* GetDataInterfaceFromXMLString */
    }
    /* DISPID=10 */
    /* VT_DISPATCH [9] */
    function GetBusinessService(
        /* ? [29] [in] */ $enumServiceType
    )
    {
        if($enumServiceType == 25){return new IDepositsService();}
        /* GetBusinessService */
    }
    /* DISPID=11 */
    /* VT_PTR [26] */
    function GetCompanyInfo(
    )
    {
        /* GetCompanyInfo */
    }
    /* DISPID=12 */
    function UpdateCompanyInfo(
        /* VT_PTR [26] [in] --> ? [29]  */ &$pICompanyInfo
    )
    {
        /* UpdateCompanyInfo */
    }
    /* DISPID=13 */
    /* VT_PTR [26] */
    function GetAdminInfo(
    )
    {
        /* GetAdminInfo */
    }
    /* DISPID=14 */
    function UpdateAdminInfo(
        /* VT_PTR [26] [in] --> ? [29]  */ &$pIAdminInfo
    )
    {
        /* UpdateAdminInfo */
    }
    /* DISPID=15 */
    /* VT_PTR [26] */
    function CreatePeriod(
        /* VT_PTR [26] [in] --> ? [29]  */ &$pIPeriodCategory
    )
    {
        /* CreatePeriod */
    }
    /* DISPID=16 */
    /* VT_PTR [26] */
    function GetPeriods(
    )
    {
        /* GetPeriods */
    }
    /* DISPID=17 */
    /* VT_PTR [26] */
    function GetPeriod(
        /* VT_PTR [26] [in] --> ? [29]  */ &$pIPeriodCategoryParams
    )
    {
        /* GetPeriod */
    }
    /* DISPID=18 */
    function UpdatePeriod(
        /* VT_PTR [26] [in] --> ? [29]  */ &$pIPeriodCategory
    )
    {
        /* UpdatePeriod */
    }
    /* DISPID=19 */
    /* VT_PTR [26] */
    function GetFinancePeriods(
        /* VT_PTR [26] [in] --> ? [29]  */ &$pIPeriodCategoryParams
    )
    {
        /* GetFinancePeriods */
    }
    /* DISPID=20 */
    /* VT_PTR [26] */
    function GetFinancePeriod(
        /* VT_PTR [26] [in] --> ? [29]  */ &$pIFinancePeriodParams
    )
    {
        /* GetFinancePeriod */
    }
    /* DISPID=21 */
    function UpdateFinancePeriod(
        /* VT_PTR [26] [in] --> ? [29]  */ &$pIFinancePeriod
    )
    {
        /* UpdateFinancePeriod */
    }
    /* DISPID=22 */
    /* VT_PTR [26] */
    function CreatePeriodWithFinanceParams(
        /* VT_PTR [26] [in] --> ? [29]  */ &$pIPeriodCategory,
        /* VT_PTR [26] [in] --> ? [29]  */ &$pIFinancePeriodParams
    )
    {
        /* CreatePeriodWithFinanceParams */
    }
    /* DISPID=23 */
    /* VT_PTR [26] */
    function GetFeaturesStatus(
    )
    {
        /* GetFeaturesStatus */
    }
    /* DISPID=24 */
    /* VT_PTR [26] */
    function GetBlob(
        /* VT_PTR [26] [in] --> ? [29]  */ &$pIBlobParams
    )
    {
        /* GetBlob */
    }
    /* DISPID=25 */
    function SetBlob(
        /* VT_PTR [26] [in] --> ? [29]  */ &$pIBlobParams,
        /* VT_PTR [26] [in] --> ? [29]  */ &$pIBlob
    )
    {
        /* SetBlob */
    }
    /* DISPID=26 */
    /* VT_PTR [26] */
    function GetPathAdmin(
    )
    {
        /* GetPathAdmin */
    }
    /* DISPID=27 */
    function UpdatePathAdmin(
        /* VT_PTR [26] [in] --> ? [29]  */ &$pIPathAdmin
    )
    {
        /* UpdatePathAdmin */
    }
    /* DISPID=28 */
    /* VT_PTR [26] */
    function GetGeneralService(
        /* VT_BSTR [8] [in] */ $sServiceCode
    )
    {
        /* GetGeneralService */
    }
    /* DISPID=29 */
    function UpdateUserLicense(
        /* VT_PTR [26] [in] --> ? [29]  */ &$pIUserLicenseParams
    )
    {
        /* UpdateUserLicense */
    }
    /* DISPID=30 */
    function LoadBlobFromFile(
        /* VT_PTR [26] [in] --> ? [29]  */ &$pIBlobParams
    )
    {
        /* LoadBlobFromFile */
    }
    /* DISPID=31 */
    function SaveBlobToFile(
        /* VT_PTR [26] [in] --> ? [29]  */ &$pIBlobParams
    )
    {
        /* SaveBlobToFile */
    }
    /* DISPID=32 */
    /* VT_BOOL [11] */
    function IsUserLicensed(
        /* VT_BSTR [8] [in] */ $bstrUserName,
        /* VT_BSTR [8] [in] */ $bstrLicType
    )
    {
        /* IsUserLicensed */
    }
    /* DISPID=33 */
    /* VT_BSTR [8] */
    function GetServiceMetaData(
        /* ? [29] [in] */ $ServiceCode
    )
    {
        /* GetServiceMetaData */
    }
    /* DISPID=34 */
    /* VT_PTR [26] */
    function RoundDecimal(
        /* VT_PTR [26] [in] --> ? [29]  */ &$pIDecimalData
    )
    {
        /* RoundDecimal */
    }
}
