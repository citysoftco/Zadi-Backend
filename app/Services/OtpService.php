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


        $otp = random_int(12345, 99999);
        $msg = urlencode('Zadi App: your activation code is ' . $otp . "\n\n\n\nE+RdiZp3hz8");

        // $apiResponse = Http::post('https://api.gawali.net', [
        //     'username'      => 'zadi',
        //     'password'      => 'C2022!@##@!s',
        //     "text_encode"   => "GSM-7",
        //     'phone'         =>  $user_phone,
        //     'text'          =>  $msg,

        // ]);


        return  $otp;
    }
}
