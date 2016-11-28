<?php
/**
 * Created by PhpStorm.
 * User: E-Commerce 2
 * Date: 28/11/2016
 * Time: 18:15
 */

namespace Litiano\Sap\IdeHelper;



class IBPAddresses { /* GUID={02F225DD-827F-4065-BC4A-14D5F4136D28} */
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
    function Add(
    )
    {
        /* Add */
    }
    /* DISPID=2 */
    function SetCurrentLine(
        /* VT_I4 [3]  */ $LineNum
    )
    {
        /* Set the current line */
    }
    /* DISPID=3 */
    /* VT_I4 [3] */
    /* Lines Count */
    var $Count;

    /* DISPID=4 */
    /* VT_BSTR [8] */
    /* property AddressName */
    var $AddressName;

    /* DISPID=4 */
    /* property AddressName */
    var $AddressName;

    /* DISPID=5 */
    /* VT_BSTR [8] */
    /* property Street */
    var $Street;

    /* DISPID=5 */
    /* property Street */
    var $Street;

    /* DISPID=6 */
    /* VT_BSTR [8] */
    /* property Block */
    var $Block;

    /* DISPID=6 */
    /* property Block */
    var $Block;

    /* DISPID=7 */
    /* VT_BSTR [8] */
    /* property ZipCode */
    var $ZipCode;

    /* DISPID=7 */
    /* property ZipCode */
    var $ZipCode;

    /* DISPID=8 */
    /* VT_BSTR [8] */
    /* property City */
    var $City;

    /* DISPID=8 */
    /* property City */
    var $City;

    /* DISPID=9 */
    /* VT_BSTR [8] */
    /* property County */
    var $County;

    /* DISPID=9 */
    /* property County */
    var $County;

    /* DISPID=10 */
    /* VT_BSTR [8] */
    /* property Country */
    var $Country;

    /* DISPID=10 */
    /* property Country */
    var $Country;

    /* DISPID=11 */
    /* VT_BSTR [8] */
    /* property State */
    var $State;

    /* DISPID=11 */
    /* property State */
    var $State;

    /* DISPID=12 */
    /* VT_BSTR [8] */
    /* property FederalTaxID */
    var $FederalTaxID;

    /* DISPID=12 */
    /* property FederalTaxID */
    var $FederalTaxID;

    /* DISPID=13 */
    /* VT_BSTR [8] */
    /* property TaxCode */
    var $TaxCode;

    /* DISPID=13 */
    /* property TaxCode */
    var $TaxCode;

    /* DISPID=14 */
    /* VT_PTR [26] */
    /* User fields for this object. */
    var $UserFields;

    /* DISPID=15 */
    /* VT_BSTR [8] */
    /* property BuildingFloorRoom */
    var $BuildingFloorRoom;

    /* DISPID=15 */
    /* property BuildingFloorRoom */
    var $BuildingFloorRoom;

    /* DISPID=16 */
    /* ? [29] */
    /* property AddressType */
    var $AddressType;

    /* DISPID=16 */
    /* property AddressType */
    var $AddressType;

    /* DISPID=18 */
    /* VT_BSTR [8] */
    /* property AddressName2 */
    var $AddressName2;

    /* DISPID=18 */
    /* property AddressName2 */
    var $AddressName2;

    /* DISPID=20 */
    /* VT_BSTR [8] */
    /* property AddressName3 */
    var $AddressName3;

    /* DISPID=20 */
    /* property AddressName3 */
    var $AddressName3;

    /* DISPID=21 */
    /* VT_BSTR [8] */
    /* property TypeOfAddress */
    var $TypeOfAddress;

    /* DISPID=21 */
    /* property TypeOfAddress */
    var $TypeOfAddress;

    /* DISPID=22 */
    /* VT_BSTR [8] */
    /* property StreetNo */
    var $StreetNo;

    /* DISPID=22 */
    /* property StreetNo */
    var $StreetNo;

    /* DISPID=23 */
    function Delete(
    )
    {
        /* method Delete */
    }
    /* DISPID=24 */
    /* VT_BSTR [8] */
    /* property BPCode */
    var $BPCode;

    /* DISPID=25 */
    /* VT_I4 [3] */
    /* property RowNum */
    var $RowNum;

}
