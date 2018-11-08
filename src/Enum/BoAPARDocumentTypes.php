<?php
/**
 * Created by PhpStorm.
 * User: H4
 * Date: 07/11/2018
 * Time: 22:55
 */

namespace Litiano\Sap\Enum;


class BoAPARDocumentTypes
{
    const bodt_Invoice = 13, // 0x0000000D
        bodt_CreditNote = 14, // 0x0000000E
        bodt_DeliveryNote = 15, // 0x0000000F
        bodt_Return = 16, // 0x00000010
        bodt_Order = 17, // 0x00000011
        bodt_PurchaseInvoice = 18, // 0x00000012
        bodt_PurchaseCreditNote = 19, // 0x00000013
        bodt_PurchaseDeliveryNote = 20, // 0x00000014
        bodt_PurchaseReturn = 21, // 0x00000015
        bodt_PurchaseOrder = 22, // 0x00000016
        bodt_Quotation = 23, // 0x00000017
        bodt_CorrectionAPInvoice = 163, // 0x000000A3
        bodt_CorrectionARInvoice = 165, // 0x000000A5
        bodt_PurchaseQutation = 540000006; // 0x202FBF06
}