<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBankPaymentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "store_id" => "required",
            "description" => "nullable",
            "receipt_photo" => "required|image",
            "payment_for" => "required",
            "bank_account_id" => "required",
            "user_id" => "required",
            "amount" => "required|numeric"
        ];
    }
}
