<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBankAccountRequest extends FormRequest
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
            "account_number" => "required",
            "bank_name" => "required",
            "branch_name" => "nullable",
            "bank_logo" => "nullable",
            "account_status" => "required",
            "account_name" => "required"
        ];
    }
}
