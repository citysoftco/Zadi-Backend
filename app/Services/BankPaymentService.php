<?php

namespace App\Services;

use App\Models\BankPayment;
use App\Models\Store;

/**
 * Class BankPaymentService.
 */
class BankPaymentService
{

    public static function getStoreAllPaymentsPaginated($storeId)
    {
        return BankPayment::with([
            "bankAccount",
            "user"
        ])->where("store_id", $storeId)->paginate(10);
    }

    public static function updateBankPaymentStatus($bankPaymentId, $status, $newAmount)
    {
        $payment = BankPayment::find($bankPaymentId);
        $payment->update([
            "status" => $status,
            "amount" => $newAmount
        ]);

        return $payment;
    }
}
