<?php
/**
 * Created by PhpStorm.
 * User: Litiano
 * Date: 06/02/2018
 * Time: 15:30
 */

namespace Litiano\Sap\IdeHelper;



class IUserFieldsMD { /* GUID={81D132DE-0549-460D-9BEC-2FEDEAB0A950} */
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
    /* VT_I4 [3] */
    function Add(
    )
    {
        /* method Add */
    }
    /* DISPID=2 */
    function SaveXML(
        /* VT_PTR [26] [in][out] --> VT_BSTR [8]  */ &$FileName
    )
    {
        /* method SaveXML */
    }
    /* DISPID=3 */
    /* VT_I4 [3] */
    function Update(
    )
    {
        /* method Update */
    }
    /* DISPID=4 */
    /* VT_I4 [3] */
    function Remove(
    )
    {
        /* method Remove */
    }
    /* DISPID=5 */
    /* VT_BOOL [11] */
    function GetByKey(
        /* VT_BSTR [8] [in] */ $TableName,
        /* VT_I4 [3] [in] */ $FieldID
    )
    {
        /* method GetByKey */
    }
    /* DISPID=6 */
    /* VT_PTR [26] */
    /* ValidValues */
    /** @var IValidValuesMD */
    var $ValidValues;

    /* DISPID=8 */
    /* VT_BSTR [8] */
    /* Fields name. */
    var $Name;

    /* DISPID=8 */
    /* Fields name. */
    var $Name;

    /* DISPID=9 */
    /* ? [29] */
    /* Fields type. */
    var $Type;

    /* DISPID=9 */
    /* Fields type. */
    var $Type;

    /* DISPID=10 */
    /* VT_I4 [3] */
    /* Fields size. */
    var $Size;

    /* DISPID=10 */
    /* Fields size. */
    var $Size;

    /* DISPID=11 */
    /* VT_BSTR [8] */
    /* Fields description. */
    var $Description;

    /* DISPID=11 */
    /* Fields description. */
    var $Description;

    /* DISPID=12 */
    /* ? [29] */
    /* Property SubType */
    var $SubType;

    /* DISPID=12 */
    /* Property SubType */
    var $SubType;

    /* DISPID=13 */
    /* VT_BSTR [8] */
    /* Property LinkedTable */
    var $LinkedTable;

    /* DISPID=13 */
    /* Property LinkedTable */
    var $LinkedTable;

    /* DISPID=14 */
    /* VT_BSTR [8] */
    /* Property DefaultValue */
    var $DefaultValue;

    /* DISPID=14 */
    /* Property DefaultValue */
    var $DefaultValue;

    /* DISPID=15 */
    /* VT_BSTR [8] */
    /* property TableName */
    var $TableName;

    /* DISPID=15 */
    /* property TableName */
    var $TableName;

    /* DISPID=16 */
    /* VT_I4 [3] */
    /* property FieldID */
    var $FieldID;

    /* DISPID=17 */
    /* VT_I4 [3] */
    /* property EditSize */
    var $EditSize;

    /* DISPID=17 */
    /* property EditSize */
    var $EditSize;

    /* DISPID=18 */
    /* ? [29] */
    /* property Mandatory */
    var $Mandatory;

    /* DISPID=18 */
    /* property Mandatory */
    var $Mandatory;

    /* DISPID=19 */
    /* VT_BSTR [8] */
    function GetAsXML(
    )
    {
        /* Get the object's data in xml format. */
    }
    /* DISPID=20 */
    function SaveToFile(
        /* VT_BSTR [8] [in] */ $FileName
    )
    {
        /* Save the object's data in xml format. */
    }
    /* DISPID=21 */
    /* VT_PTR [26] */
    /* Get Browser */
    var $Browser;

    /* DISPID=22 */
    /* VT_BSTR [8] */
    /* Property LinkedUDO */
    var $LinkedUDO;

    /* DISPID=22 */
    /* Property LinkedUDO */
    var $LinkedUDO;

}
