<?php
/**
 * Created by PhpStorm.
 * User: Litiano
 * Date: 22/06/2017
 * Time: 11:41
 */

namespace Litiano\Sap\Enum;


class BoRcptInvTypes
{
    const it_ClosingBalance = -3,
        it_OpeningBalance = -2,
        it_AllTransactions = -1,
        it_Invoice = 13,
        it_CredItnote = 14,
        it_TaxInvoice = 15,
        it_Return = 16,
        it_PurchaseInvoice = 18,
        it_PurchaseCreditNote = 19,
        it_PurchaseDeliveryNote = 20,
        it_PurchaseReturn = 21,
        it_Receipt = 24,
        it_Deposit = 25,
        it_JournalEntry = 30,
        it_PaymentAdvice = 46,
        it_ChequesForPayment = 57,
        it_StockReconciliations = 58,
        it_GeneralReceiptToStock = 59,
        it_GeneralReleaseFromStock = 60,
        it_TransferBetweenWarehouses = 67,
        it_WorkInstructions = 68,
        it_DeferredDeposit = 76,
        it_CorrectionInvoice = 132,
        it_APCorrectionInvoice = 163,
        it_ARCorrectionInvoice = 165,
        it_DownPayment = 203,
        it_PurchaseDownPayment = 204;
}