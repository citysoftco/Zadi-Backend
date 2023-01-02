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

    public static function updateBankPaymentStatus($bankPaymentId, $data)
    {
        $payment = BankPayment::find($bankPaymentId);
        if ($data["action"] == "confirm")
            $payment->update([
                "payment_status" => "confirmed",
                "amount" => $data["amount"]
            ]);
        else if ($data["action"] == "cancel")
            $payment->update([
                "payment_status" => "cancelled",
                "cancelled_reason" => $data["cancelled_reason"]
            ]);

        return $payment;
    }
}
