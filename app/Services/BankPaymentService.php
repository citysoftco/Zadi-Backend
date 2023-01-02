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
        ])->where("store_id", $storeId)->latest()->paginate(10);
    }

    public static function updateBankPaymentStatus($bankPaymentId, $data)
    {
        $payment = BankPayment::find($bankPaymentId);
        if ($data["action"] == "confirm") {
            $payment->update([
                "payment_status" => "confirmed",
                "amount" => $data["amount"]
            ]);
            NotificationService::sendNotificationToUser($payment->user->id, "تم تأكيد عملية الدفع بنجاح", "لقد تم شحن مبلغ " . number_format($payment->amount) . " في محفظتك \n شكرا لإختيارك زادي");
        } else if ($data["action"] == "cancel")
            $payment->update([
                "payment_status" => "cancelled",
                "cancelled_reason" => $data["cancelled_reason"]
            ]);

        return $payment;
    }
}
