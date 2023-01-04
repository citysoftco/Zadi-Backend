<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class UserRegisterRequest extends FormRequest
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
            "user_phone" => "required|unique:users,user_phone",
            "password" => "required",
            "lat" => "required|numeric",
            "lng" => "required|numeric",
            "address" => "required",
            "user_city" => "required",
            // "user_area" => "required",
            "facebook_id" => "nullable",
            "name" => "required",
            "user_image" => "required|image",
            // "referral_code" => "required"
        ];
    }
}
