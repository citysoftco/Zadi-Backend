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

        // $otp = rand(12345, 99999);

        $otp = random_int(12345, 99999);
        //'Welcome ' . $user_name . 
        $msg = urlencode('Zadi App: your activation code is ' . $otp . "\nE+RdiZp3hz8");
        // $msg = "E+RdiZp3hz8";

        $apiResponse = Http::post('https://api.gawali.net', [
            'username'      => 'zadi',
            'password'      => 'C2022!@##@!s',
            "text_encode"   => "GSM-7",
            'phone'         =>  $user_phone,
            'text'          =>  $msg,

        ]);


        return  $otp;
    }
}
