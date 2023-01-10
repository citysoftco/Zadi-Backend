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
        if ($data["action"] == "confirm" && $payment->user != null) {
            $payment->update([
                "payment_status" => "confirmed",
                "amount" => $data["amount"]
            ]);
            $payment->user->wallet += $data["amount"];
            $payment->user()->save();
            // $user->update([
            //     "wallet" => $user->wallet + $data["amount"]
            // ]);

            $text = array(
                "التاريخ والزمن : " . $payment->created_at,
                "المرسل : " . $payment->user->name,
                "المرسل إليه : " . $payment->store->store_name,
                "رقم هاتف المرسل : " . $payment->user->user_phone,
                "المبلغ المستلم : " . number_format($data["amount"]),
                "تم شحن رصيدك بنجاح",
                "شكرا لإستخدامك تطبيق زادي"
            );
            NotificationService::sendNotificationToUser(
                $payment->user->id,
                "تأكيد عملية شحن المحفظة",
                implode("\n", $text)
            );
        } else if ($data["action"] == "cancel")
            $payment->update([
                "payment_status" => "cancelled",
                "cancelled_reason" => $data["cancelled_reason"]
            ]);

        return $payment;
    }
}
