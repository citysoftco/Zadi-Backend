<?php

namespace App\Services;

use Http;

/**
 * Class OtpService.
 */
class OtpService
{
    public static function otpmsg($user_name, $user_phone)
    {
        $otp = rand(12345, 99999);
        $msg =  $otp . ' Welcome ' . $user_name . ' to Zadi application your activation OTP';

        $apiResponse = Http::post('https://api.gawali.net/', [
            'username'      => 'zadi',
            'password'      => 'C2022!@##@!s',
            "text_encode"   => "utf-8",
            'phone'         =>  $user_phone,
            'text'          =>  $msg,

        ]);


        return  $otp;
    }
}
