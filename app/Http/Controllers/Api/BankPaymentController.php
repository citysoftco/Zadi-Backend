<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBankPaymentRequest;
use App\Http\Requests\UpdateBankPaymentRequest;
use App\Models\BankPayment;
use App\Models\User;
use App\Services\BankPaymentService;
use App\Services\FileHandleService;
use App\Services\NotificationService;

class BankPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBankPaymentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBankPaymentRequest $request)
    {

        $data = $request->all();
        $user = User::find($data["user_id"]);
        $data["payment_status"] =  "pending";
        $data["receipt_photo"] = FileHandleService::uploadImageInPublicPath($request->receipt_photo, "images/banks/receipts");
        $payment = BankPayment::create($data);
        NotificationService::sendNotificationToStore($data["store_id"], "لديك طلب شحن محفظة جديد", "يريد المستخدم " . $user->name . " أن يشحن مبلغ" . " " . number_format($data["amount"]));
        return response()->json(
            [
                "status" => 1,
                "message" => "Payment Request Sent Successfully",
                "data" => $payment
            ]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BankPayment  $bankPayment
     * @return \Illuminate\Http\Response
     */
    public function show(BankPayment $bankPayment)
    {
        //
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBankPaymentRequest  $request
     * @param  \App\Models\BankPayment  $bankPayment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBankPaymentRequest $request, BankPayment $bankPayment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BankPayment  $bankPayment
     * @return \Illuminate\Http\Response
     */
    public function destroy(BankPayment $bankPayment)
    {
        //
    }
}
