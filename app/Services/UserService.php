<?php

namespace App\Services;

use App\Models\User;
use App\Traits\ImageStoragePicker;
use App\Traits\SendMail;
use App\Traits\SendSms;
use Date;
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
        $data["password"] = Hash::make($data["password"]);
        $data["reg_date"] = now();
        $data["otp_expires_date"] = now()->addMinutes(2);

        $date = date('d-m-Y');
        FileHandleService::getImageStorage();

        if ($request->user_image) {
            $image = $request->user_image;
            $fileName = $image->getClientOriginalName();
            $fileName = str_replace(" ", "-", $fileName);

            if (FileHandleService::$storage_space != "same_server") {
                $image_name = $image->getClientOriginalName();
                $image = $request->file('user_image');
                $data["user_image"] = '/user/' . $image_name;
                Storage::disk(FileHandleService::$storage_space)->put($data["user_image"], fopen($request->file('user_image'), 'r+'), 'public');
            } else {

                $image->move('images/user/' . $date . '/', $fileName);
                $data["user_image"] = '/images/user/' . $date . '/' . $fileName;
            }
        } else {
            $data["user_image"] = 'N/A';
        }
        $data["otp_value"] = OtpService::otpmsg($data["name"], $data["user_phone"]);
        // $data["otp_value"] = rand(12345, 99999);
        $user = User::create($data);
        $user->token = $user->createToken(uniqid())->accessToken;

        if ($data["user_phone"][0] == "0")
            $data["user_phone"] = str_replace_first("0", "", $data["user_phone"]);

        return $user;
    }

    public static function login($request)
    {
        $request['is_verified'] = 1;

        $credentials =  $request->only('user_phone', 'password'/*, 'is_verified'*/);

        if (Auth::guard()->attempt($credentials)) {

            $user = User::where("user_phone", $request->user_phone)->first();

            $token = null;
            if ($user)
                $token = $user->createToken(uniqid())->accessToken;

            $user->token = $token;
            return $user;
        }

        return false;
    }

    public static function verifyOtp($request)
    {
        $data = $request->all();
        $user = User::where("user_phone", $data["user_phone"])->first();
        if ($user->otp_value == $data["otp"] && $user->otp_expires_date > now()) {
            $user->update([
                "is_verified" => 1,
                "otp_value" => null
            ]);
            return $user;
        } else
            return false;
    }

    public static function resendOtp($request)
    {
        $data = $request->all();
        $data["otp_expires_date"] = Carbon::now()->addMinutes(2);
        $user = User::where("user_phone", $data["user_phone"])->first();
        $data["otp_value"] = OtpService::otpmsg($user->name, $user->user_phone);
        $user->update([
            "otp_expires_date" => $data["otp_expires_date"],
            "otp_value" => $data["otp_value"]
        ]);
        return $user;
    }
    public static function forgetPassword($request)
    {
        $data = $request->all();
        $data["new_password"] = Hash::make($data["new_password"]);
        $user = User::where("user_phone", $data["user_phone"])
            ->where("otp_value", $data["otp"])
            ->first();

        if (!$user && $user->otp_expires_date > now())
            return false;

        $user->update(
            [
                "password" => $data["new_password"],
                "otp_value" => null
            ]
        );

        return $user;
    }
}
