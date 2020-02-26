<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class ICustomerEquipmentCards
 * GUID={D8BCB8BC-6DD1-4D3A-ABBF-FA7A18396B2C}
 *
 * @property-read IUserFields $UserFields Get User Fields
 * @property-read mixed|VT_PTR $Browser Get Browser
 * @property-read int $EquipmentCardNum property EquipmentCardNum
 * @property string $CustomerCode property CustomerCode
 * @property string $CustomerName property CustomerName
 * @property int $ContactEmployeeCode property ContactEmployeeCode
 * @property string $DirectCustomerCode property DirectCustomerCode
 * @property string $DirectCustomerName property DirectCustomerName
 * @property string $ManufacturerSerialNum property ManufacturerSerialNum
 * @property string $InternalSerialNum property InternalSerialNum
 * @property string $ItemCode property itemCode
 * @property string $ItemDescription property ItemDescription
 * @property int $InvoiceCode property InvoiceCode
 * @property-read int $InvoiceNumber property InvoiceNumber
 * @property-read string|VT_DATE $DeliveryDate property DeliveryDate
 * @property-read string $ContactPhone property ContactPhone
 * @property string $Street property Street
 * @property string $Block property Block
 * @property string $ZipCode property ZipCode
 * @property string $City property City
 * @property string $County property County
 * @property string $CountryCode property CountryCode
 * @property string $StateCode property StateCode
 * @property string $InstallLocation property InstallLocation
 * @property-read mixed|VT_PTR $Attachments property Attachments
 * @property int $DeliveryCode property DeliveryCode
 * @property-read int $DeliveryNumber property DeliveryNumber
 * @property int|VT_USERDEFINED $StatusOfSerialNumber property StatusOfSerialNumber
 * @property int $ReplaceSN property ReplaceSN
 * @property int $DefaultTechnician property Defaulttechnician
 * @property int $ReplacedBySN property ReplacedBySN
 * @property int $Defaultterritory property Defaultterritory
 * @property string $BuildingFloorRoom property BuildingFloorRoom
 * @property int $AttachmentEntry property AttachmentEntry
 * @property int|VT_USERDEFINED $ServiceBPType property ServiceBPType
 */
class ICustomerEquipmentCards 
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
	 * @param int $EquipmentCardNum [in]
	 * @return bool 
	 * method GetByKey
	 */
	function GetByKey(
		/* int [3] [in] */ $EquipmentCardNum 
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
	 * @var int $EquipmentCardNum [3] property EquipmentCardNum
	*/
	var $EquipmentCardNum;

	/**
	 * DISPID=10
	 * @var string $CustomerCode [8] property CustomerCode
	*/
	var $CustomerCode;

	/**
	 * DISPID=11
	 * @var string $CustomerName [8] property CustomerName
	*/
	var $CustomerName;

	/**
	 * DISPID=12
	 * @var int $ContactEmployeeCode [3] property ContactEmployeeCode
	*/
	var $ContactEmployeeCode;

	/**
	 * DISPID=13
	 * @var string $DirectCustomerCode [8] property DirectCustomerCode
	*/
	var $DirectCustomerCode;

	/**
	 * DISPID=14
	 * @var string $DirectCustomerName [8] property DirectCustomerName
	*/
	var $DirectCustomerName;

	/**
	 * DISPID=15
	 * @var string $ManufacturerSerialNum [8] property ManufacturerSerialNum
	*/
	var $ManufacturerSerialNum;

	/**
	 * DISPID=16
	 * @var string $InternalSerialNum [8] property InternalSerialNum
	*/
	var $InternalSerialNum;

	/**
	 * DISPID=22
	 * @var string $ItemCode [8] property itemCode
	*/
	var $ItemCode;

	/**
	 * DISPID=23
	 * @var string $ItemDescription [8] property ItemDescription
	*/
	var $ItemDescription;

	/**
	 * DISPID=24
	 * @var int $InvoiceCode [3] property InvoiceCode
	*/
	var $InvoiceCode;

	/**
	 * DISPID=25
	 * @var int $InvoiceNumber [3] property InvoiceNumber
	*/
	var $InvoiceNumber;

	/**
	 * DISPID=26
	 * @var string|VT_DATE $DeliveryDate [7] property DeliveryDate
	*/
	var $DeliveryDate;

	/**
	 * DISPID=27
	 * @var string $ContactPhone [8] property ContactPhone
	*/
	var $ContactPhone;

	/**
	 * DISPID=28
	 * @var string $Street [8] property Street
	*/
	var $Street;

	/**
	 * DISPID=29
	 * @var string $Block [8] property Block
	*/
	var $Block;

	/**
	 * DISPID=30
	 * @var string $ZipCode [8] property ZipCode
	*/
	var $ZipCode;

	/**
	 * DISPID=31
	 * @var string $City [8] property City
	*/
	var $City;

	/**
	 * DISPID=32
	 * @var string $County [8] property County
	*/
	var $County;

	/**
	 * DISPID=33
	 * @var string $CountryCode [8] property CountryCode
	*/
	var $CountryCode;

	/**
	 * DISPID=34
	 * @var string $StateCode [8] property StateCode
	*/
	var $StateCode;

	/**
	 * DISPID=35
	 * @var string $InstallLocation [8] property InstallLocation
	*/
	var $InstallLocation;

	/**
	 * DISPID=39
	 * @var mixed|VT_PTR $Attachments [26] property Attachments
	*/
	var $Attachments;

	/**
	 * DISPID=40
	 * @var int $DeliveryCode [3] property DeliveryCode
	*/
	var $DeliveryCode;

	/**
	 * DISPID=41
	 * @var int $DeliveryNumber [3] property DeliveryNumber
	*/
	var $DeliveryNumber;

	/**
	 * DISPID=42
	 * @var int|VT_USERDEFINED $StatusOfSerialNumber [29] property StatusOfSerialNumber
	*/
	var $StatusOfSerialNumber;

	/**
	 * DISPID=43
	 * @var int $ReplaceSN [3] property ReplaceSN
	*/
	var $ReplaceSN;

	/**
	 * DISPID=44
	 * @var int $DefaultTechnician [3] property Defaulttechnician
	*/
	var $DefaultTechnician;

	/**
	 * DISPID=45
	 * @var int $ReplacedBySN [3] property ReplacedBySN
	*/
	var $ReplacedBySN;

	/**
	 * DISPID=46
	 * @var int $Defaultterritory [3] property Defaultterritory
	*/
	var $Defaultterritory;

	/**
	 * DISPID=47
	 * @return string 
	 * Get the object's data in xml format.
	 */
	function GetAsXML()
	{
	}

	/**
	 * DISPID=48
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
	 * DISPID=49
	 * @var string $BuildingFloorRoom [8] property BuildingFloorRoom
	*/
	var $BuildingFloorRoom;

	/**
	 * DISPID=50
	 * @var int $AttachmentEntry [3] property AttachmentEntry
	*/
	var $AttachmentEntry;

	/**
	 * DISPID=51
	 * @var int|VT_USERDEFINED $ServiceBPType [29] property ServiceBPType
	*/
	var $ServiceBPType;

}