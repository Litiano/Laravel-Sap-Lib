<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class IUserObjectsMD
 * GUID={2E2720A5-8F7C-45D3-BF5A-DD5BE3769F84}
 *
 * @property string $TableName property TableName
 * @property string $Code property Code
 * @property string $LogTableName property LogTableName
 * @property int|VT_USERDEFINED $CanCreateDefaultForm property CanCreateDefaultForm
 * @property int|VT_USERDEFINED $ObjectType property ObjectType
 * @property string $ExtensionName property ExtensionName
 * @property int|VT_USERDEFINED $CanCancel property CanCancel
 * @property int|VT_USERDEFINED $CanDelete property CanDelete
 * @property int|VT_USERDEFINED $CanLog property CanLog
 * @property int|VT_USERDEFINED $ManageSeries property ManageSeries
 * @property int|VT_USERDEFINED $CanFind property CanFind
 * @property int|VT_USERDEFINED $CanYearTransfer property CanYearTransfer
 * @property string $Name property Name
 * @property int|VT_USERDEFINED $CanClose property CanClose
 * @property-read mixed|VT_PTR $FindColumns property FindColumns
 * @property-read mixed|VT_PTR $FormColumns property FormColumns
 * @property-read mixed|VT_PTR $ChildTables property ChildTables
 * @property int|VT_USERDEFINED $OverwriteDllfile property OverwriteDllfile
 * @property-read mixed|VT_PTR $Browser Get Browser
 * @property int|VT_USERDEFINED $UseUniqueFormType property UseUniqueFormType
 * @property int|VT_USERDEFINED $CanArchive property CanArchive
 * @property int|VT_USERDEFINED $MenuItem property MenuItem
 * @property string $MenuCaption property MenuCaption
 * @property int $FatherMenuID property FatherMenuID
 * @property int $Position property Position
 * @property string $MenuUID property MenuUID
 * @property int|VT_USERDEFINED $EnableEnhancedForm property EnableEnhancedForm
 * @property int|VT_USERDEFINED $RebuildEnhancedForm property RebuildEnhancedForm
 * @property string $FormSRF property FormSRF
 * @property-read mixed|VT_PTR $EnhancedFormColumns property EnhancedFormColumns
 * @property int|VT_USERDEFINED $CanApprove property CanApprove
 * @property string $TemplateID property TemplateID
 */
class IUserObjectsMD 
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
	 * @var string $TableName [8] property TableName
	*/
	var $TableName;

	/**
	 * DISPID=2
	 * @var string $Code [8] property Code
	*/
	var $Code;

	/**
	 * DISPID=3
	 * @var string $LogTableName [8] property LogTableName
	*/
	var $LogTableName;

	/**
	 * DISPID=4
	 * @var int|VT_USERDEFINED $CanCreateDefaultForm [29] property CanCreateDefaultForm
	*/
	var $CanCreateDefaultForm;

	/**
	 * DISPID=5
	 * @var int|VT_USERDEFINED $ObjectType [29] property ObjectType
	*/
	var $ObjectType;

	/**
	 * DISPID=6
	 * @var string $ExtensionName [8] property ExtensionName
	*/
	var $ExtensionName;

	/**
	 * DISPID=7
	 * @var int|VT_USERDEFINED $CanCancel [29] property CanCancel
	*/
	var $CanCancel;

	/**
	 * DISPID=8
	 * @var int|VT_USERDEFINED $CanDelete [29] property CanDelete
	*/
	var $CanDelete;

	/**
	 * DISPID=9
	 * @var int|VT_USERDEFINED $CanLog [29] property CanLog
	*/
	var $CanLog;

	/**
	 * DISPID=10
	 * @var int|VT_USERDEFINED $ManageSeries [29] property ManageSeries
	*/
	var $ManageSeries;

	/**
	 * DISPID=11
	 * @var int|VT_USERDEFINED $CanFind [29] property CanFind
	*/
	var $CanFind;

	/**
	 * DISPID=12
	 * @var int|VT_USERDEFINED $CanYearTransfer [29] property CanYearTransfer
	*/
	var $CanYearTransfer;

	/**
	 * DISPID=13
	 * @var string $Name [8] property Name
	*/
	var $Name;

	/**
	 * DISPID=14
	 * @var int|VT_USERDEFINED $CanClose [29] property CanClose
	*/
	var $CanClose;

	/**
	 * DISPID=15
	 * @return int 
	 * method Add
	 */
	function Add()
	{
	}

	/**
	 * DISPID=16
	 * @param string $Code [in]
	 * @return bool 
	 * method GetByKey
	 */
	function GetByKey(
		/* string [8] [in] */ $Code 
	)
	{
	}

	/**
	 * DISPID=17
	 * @return int 
	 * method Update
	 */
	function Update()
	{
	}

	/**
	 * DISPID=18
	 * @return int 
	 * method Remove
	 */
	function Remove()
	{
	}

	/**
	 * DISPID=21
	 * @var mixed|VT_PTR $FindColumns [26] property FindColumns
	*/
	var $FindColumns;

	/**
	 * DISPID=22
	 * @var mixed|VT_PTR $FormColumns [26] property FormColumns
	*/
	var $FormColumns;

	/**
	 * DISPID=23
	 * @var mixed|VT_PTR $ChildTables [26] property ChildTables
	*/
	var $ChildTables;

	/**
	 * DISPID=25
	 * @var int|VT_USERDEFINED $OverwriteDllfile [29] property OverwriteDllfile
	*/
	var $OverwriteDllfile;

	/**
	 * DISPID=26
	 * @var mixed|VT_PTR $Browser [26] Get Browser
	*/
	var $Browser;

	/**
	 * DISPID=27
	 * @var int|VT_USERDEFINED $UseUniqueFormType [29] property UseUniqueFormType
	*/
	var $UseUniqueFormType;

	/**
	 * DISPID=28
	 * @var int|VT_USERDEFINED $CanArchive [29] property CanArchive
	*/
	var $CanArchive;

	/**
	 * DISPID=29
	 * @var int|VT_USERDEFINED $MenuItem [29] property MenuItem
	*/
	var $MenuItem;

	/**
	 * DISPID=30
	 * @var string $MenuCaption [8] property MenuCaption
	*/
	var $MenuCaption;

	/**
	 * DISPID=31
	 * @var int $FatherMenuID [3] property FatherMenuID
	*/
	var $FatherMenuID;

	/**
	 * DISPID=32
	 * @var int $Position [3] property Position
	*/
	var $Position;

	/**
	 * DISPID=33
	 * @var string $MenuUID [8] property MenuUID
	*/
	var $MenuUID;

	/**
	 * DISPID=34
	 * @var int|VT_USERDEFINED $EnableEnhancedForm [29] property EnableEnhancedForm
	*/
	var $EnableEnhancedForm;

	/**
	 * DISPID=35
	 * @var int|VT_USERDEFINED $RebuildEnhancedForm [29] property RebuildEnhancedForm
	*/
	var $RebuildEnhancedForm;

	/**
	 * DISPID=36
	 * @var string $FormSRF [8] property FormSRF
	*/
	var $FormSRF;

	/**
	 * DISPID=37
	 * @var mixed|VT_PTR $EnhancedFormColumns [26] property EnhancedFormColumns
	*/
	var $EnhancedFormColumns;

	/**
	 * DISPID=38
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
	 * DISPID=39
	 * @return string 
	 * Get table's data in xml format.
	 */
	function GetAsXML()
	{
	}

	/**
	 * DISPID=40
	 * @var int|VT_USERDEFINED $CanApprove [29] property CanApprove
	*/
	var $CanApprove;

	/**
	 * DISPID=41
	 * @var string $TemplateID [8] property TemplateID
	*/
	var $TemplateID;

}