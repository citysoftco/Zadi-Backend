<?php

namespace App\Services;

use App\Models\User;
use App\Traits\ImageStoragePicker;
use App\Traits\SendMail;
use App\Traits\SendSms;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use League\CommonMark\Extension\CommonMark\Node\Inline\Strong;

/**
 * Class UserService.
 */
class UserService
{
    use SendSms;
    use SendMail;
    use ImageStoragePicker;


    public static function register($request)
    {
        $data = $request->all();
        $data["status"] = 1;
        $data["password"] = Hash::make("password");
        $user = User::create($data);
        $user->token = $user->createToken(uniqid())->accessToken;
        return $user;
    }

    public static function login($request)
    {
        $request['is_verified'] = 1;

        $user = User::where("user_phone", $request->user_phone)->first();

        $token = null;
        if ($user)
            $token = $user->createToken(uniqid())->accessToken;



        $credentials =  $request->only('user_phone', 'password'/*, 'is_verified'*/);

        if (Auth::guard()->attempt($credentials)) {

            $user->token = $token;
            return $user;
        }

        return false;
    }
}
