<?php

/**
 * Created by Litiano.
 * User: Litiano Moura
 * Date: 25/11/2016
 * Time: 13:16
 */

/**
 * IDE-HeLPER para classe COM.
 */

if(!defined("CLSCTX_INPROC_SERVER")){ define("CLSCTX_INPROC_SERVER", 1);}
if(!defined("CLSCTX_INPROC_HANDLER")){ define("CLSCTX_INPROC_HANDLER", 2);}
if(!defined("CLSCTX_LOCAL_SERVER")){ define("CLSCTX_LOCAL_SERVER", 4);}
if(!defined("CLSCTX_REMOTE_SERVER")){ define("CLSCTX_REMOTE_SERVER", 16);}
if(!defined("CLSCTX_SERVER")){ define("CLSCTX_SERVER", 21);}
if(!defined("CLSCTX_ALL")){ define("CLSCTX_ALL", 23);}
if(!defined("VT_NULL")){ define("VT_NULL", 1);}
if(!defined("VT_EMPTY")){ define("VT_EMPTY", 0);}
if(!defined("VT_UI1")){ define("VT_UI1", 17);}
if(!defined("VT_I1")){ define("VT_I1", 16);}
if(!defined("VT_UI2")){ define("VT_UI2", 18);}
if(!defined("VT_I2")){ define("VT_I2", 2);}
if(!defined("VT_UI4")){ define("VT_UI4", 19);}
if(!defined("VT_I4")){ define("VT_I4", 3);}
if(!defined("VT_R4")){ define("VT_R4", 4);}
if(!defined("VT_R8")){ define("VT_R8", 5);}
if(!defined("VT_BOOL")){ define("VT_BOOL", 11);}
if(!defined("VT_ERROR")){ define("VT_ERROR", 10);}
if(!defined("VT_CY")){ define("VT_CY", 6);}
if(!defined("VT_DATE")){ define("VT_DATE", 7);}
if(!defined("VT_BSTR")){ define("VT_BSTR", 8);}
if(!defined("VT_DECIMAL")){ define("VT_DECIMAL", 14);}
if(!defined("VT_UNKNOWN")){ define("VT_UNKNOWN", 13);}
if(!defined("VT_DISPATCH")){ define("VT_DISPATCH", 9);}
if(!defined("VT_VARIANT")){ define("VT_VARIANT", 12);}
if(!defined("VT_INT")){ define("VT_INT", 22);}
if(!defined("VT_UINT")){ define("VT_UINT", 23);}
if(!defined("VT_ARRAY")){ define("VT_ARRAY", 8192);}
if(!defined("VT_BYREF")){ define("VT_BYREF", 16384);}
if(!defined("CP_ACP")){ define("CP_ACP", 0);}
if(!defined("CP_MACCP")){ define("CP_MACCP", 2);}
if(!defined("CP_OEMCP")){ define("CP_OEMCP", 1);}
if(!defined("CP_UTF7")){ define("CP_UTF7", 65000);}
if(!defined("CP_UTF8")){ define("CP_UTF8", 65001);}
if(!defined("CP_SYMBOL")){ define("CP_SYMBOL", 42);}
if(!defined("CP_THREAD_ACP")){ define("CP_THREAD_ACP", 3);}
if(!defined("VARCMP_LT")){ define("VARCMP_LT", 0);}
if(!defined("VARCMP_EQ")){ define("VARCMP_EQ", 1);}
if(!defined("VARCMP_GT")){ define("VARCMP_GT", 2);}
if(!defined("VARCMP_NULL")){ define("VARCMP_NULL", 3);}
if(!defined("NORM_IGNORECASE")){ define("NORM_IGNORECASE", 1);}
if(!defined("NORM_IGNORENONSPACE")){ define("NORM_IGNORENONSPACE", 2);}
if(!defined("NORM_IGNORESYMBOLS")){ define("NORM_IGNORESYMBOLS", 4);}
if(!defined("NORM_IGNOREWIDTH")){ define("NORM_IGNOREWIDTH", 131072);}
if(!defined("NORM_IGNOREKANATYPE")){ define("NORM_IGNOREKANATYPE", 65536);}
if(!defined("DISP_E_DIVBYZERO")){ define("DISP_E_DIVBYZERO", -1);}
if(!defined("DISP_E_OVERFLOW")){ define("DISP_E_OVERFLOW", -1);}
if(!defined("DISP_E_BADINDEX")){ define("DISP_E_BADINDEX", -1);}
if(!defined("MK_E_UNAVAILABLE")){ define("MK_E_UNAVAILABLE", -1);}

if(!function_exists("com_print_typeinfo")){
    /**
     * @param COM $com
     * @param string|null $dispinterface
     * @param bool $wantsink
     */
    function com_print_typeinfo(COM $com, $dispinterface = null, $wantsink = false){}
}

class COM
{
    /**
     * COM constructor.
     * @param string $module_name
     * @param mixed|null $server_name
     * @param int|null $codepage
     * @param string|null $typelib
     */
    public function __construct($module_name, $server_name = null, $codepage = null, $typelib = null){}
}
