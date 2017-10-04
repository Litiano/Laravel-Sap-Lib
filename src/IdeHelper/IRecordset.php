<?php
/**
 * Created by PhpStorm.
 * User: H4
 * Date: 04/10/2017
 * Time: 00:03
 */

namespace Litiano\Sap\IdeHelper;



class IRecordset { /* GUID={8CA3AB92-1930-4511-4AA8-82D53C3150C3} */
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
    /* DISPID=3 */
    function MoveNext(
    )
    {
        /* Move to the next record */
    }
    /* DISPID=4 */
    function MovePrevious(
    )
    {
        /* Move to the previous record */
    }
    /* DISPID=5 */
    /* VT_BOOL [11] */
    /* Get the Bof record status */
    var $BoF;

    /* DISPID=6 */
    /* VT_BOOL [11] */
    /* Get the Eof record status */
    var $EoF;

    /* DISPID=7 */
    function DoQuery(
        /* VT_BSTR [8]  */ $QueryStr
    )
    {
        /* Runs an SQL query */
    }
    /* DISPID=8 */
    /* VT_I4 [3] */
    /* Get the record count in the set */
    var $RecordCount;

    /* DISPID=9 */
    function SaveXML(
        /* VT_PTR [26] [in][out] --> VT_BSTR [8]  */ &$FileName
    )
    {
        /* Save records as XML document */
    }
    /* DISPID=10 */
    function MoveFirst(
    )
    {
        /* method MoveFirst */
    }
    /* DISPID=11 */
    function MoveLast(
    )
    {
        /* method MoveLast */
    }
    /* DISPID=12 */
    /* VT_PTR [26] */
    /* property Command */
    var $Command;

    /* DISPID=13 */
    /* VT_BSTR [8] */
    function GetAsXML(
    )
    {
        /* Get records as XML */
    }
    /* DISPID=14 */
    function SaveToFile(
        /* VT_BSTR [8] [in] */ $FileName
    )
    {
        /* Save records as XML document */
    }
    /* DISPID=15 */
    /* VT_BSTR [8] */
    function GetFixedXML(
        /* ? [29] [in] */ $xmlMode
    )
    {
        /* method GetFixedXML */
    }
    /* DISPID=16 */
    /* VT_BSTR [8] */
    function GetFixedSchema(
    )
    {
        /* method GetFixedSchema */
    }

    /** @var  IFields */
    var $Fields;
}
