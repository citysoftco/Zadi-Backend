<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Traits\ImageStoragePicker;
use App\Http\Controllers\Controller;
use App\Http\Requests\ForgetPasswordRequest;
use App\Http\Requests\UserRegister;
use App\Http\Requests\UserRegisterRequest;
use Illuminate\Support\Facades\Http;
use DB;
use Carbon\Carbon;
use App\Traits\SendSms;
use App\Traits\SendMail;
use App\Models\User;
use App\Services\UserService;
use JWTAuth;
use Auth;
use Hash;
use Illuminate\Support\Facades\DB as FacadesDB;

/**
 * @group Users
 */
class UserController extends Controller
{
    use SendSms;
    use SendMail;
    use ImageStoragePicker;

    private $user;
    public function __construct()
    {
        $this->user = new UserService();
    }
    public function guard()
    {
        return Auth::guard();
    }


    public function social_login(Request $request)
    {

        $logintype = $request->type;
        $device_id = $request->device_id;
        if ($logintype == 'google') {
            $user_email = $request->user_email;
            $checkuser = DB::table('users')
                ->leftJoin('city', 'users.user_city', '=', 'city.city_id')
                ->leftJoin('society', 'users.user_area', '=', 'society.society_id')
                ->select('users.*', 'city.city_name', 'society.society_name')
                ->where('users.email', $user_email)
                ->where('users.is_verified', '!=', 0)
                ->first();

            if ($checkuser) {
                $updateDeviceId = DB::table('users')
                    ->where('email', $user_email)
                    ->update(['device_id' => $device_id]);
                $user = User::where('email', $user_email)
                    ->first();

                $token = $user->createToken('token')->accessToken;

                $user_id = $user->id;
                $sum = DB::table('store_orders')
                    ->where('store_approval', $user_id)
                    ->where('order_cart_id', "incart")
                    ->select(DB::raw('SUM(store_orders.price) as sum'), DB::raw('COUNT(store_orders.store_order_id) as count'))
                    ->first();

                if ($sum && $user_id != NULL) {
                    $countp = $sum->count;
                } else {
                    $countp = 0;
                }
                $checkuser->cart_count = $countp;

                $message = array('status' => '1', 'message' => 'Login Successfully', 'data' => $checkuser, 'token' => $token);
                return $message;
            } else {
                $delete = DB::table('users')
                    ->where('email', $user_email)
                    ->where('is_verified', 0)
                    ->delete();


                $Userreg = DB::table('users')
                    ->insertGetId(['email' => $user_email, 'name' => 'User', 'is_verified' => 0]);

                DB::table('notificationby')
                    ->insert([
                        'user_id' => $Userreg,
                        'sms' => '1',
                        'app' => '1',
                        'email' => '1'
                    ]);
                $message = array('status' => '2', 'message' => 'go to register details page', 'data' => $user_email);
                return $message;
            }
        } elseif ($logintype == 'apple') {
            $email = $request->user_email;
            $fb_id = $request->apple_id;
            $checkuser = DB::table('users')
                ->leftJoin('city', 'users.user_city', '=', 'city.city_id')
                ->leftJoin('society', 'users.user_area', '=', 'society.society_id')
                ->select('users.*', 'city.city_name', 'society.society_name')
                ->where('users.is_verified', '!=', 0)
                ->where('users.facebook_id', $fb_id)
                ->orWhere('users.email', $email)
                ->first();

            if ($checkuser) {
                $updateDeviceId = DB::table('users')
                    ->where('facebook_id', $fb_id)
                    ->orWhere('email', $email)
                    ->update(['device_id' => $device_id]);
                $user = User::where('facebook_id', $fb_id)
                    ->orWhere('email', $email)
                    ->first();
                $token = $user->createToken('token')->accessToken;
                $user_id = $user->id;
                $sum = DB::table('store_orders')
                    ->where('store_approval', $user_id)
                    ->where('order_cart_id', "incart")
                    ->select(DB::raw('SUM(store_orders.price) as sum'), DB::raw('COUNT(store_orders.store_order_id) as count'))
                    ->first();

                if ($sum && $user_id != NULL) {
                    $countp = $sum->count;
                } else {
                    $countp = 0;
                }
                $checkuser->cart_count = $countp;

                $message = array('status' => '1', 'message' => 'Login Successfully', 'data' => $checkuser, 'token' => $token);
                return $message;
            } else {
                $delete = DB::table('users')
                    ->where('is_verified', '!=', 0)
                    ->where('facebook_id', $fb_id)
                    ->orWhere('email', $email)
                    ->delete();

                $Userreg = DB::table('users')
                    ->insertGetId(['email' => $email, 'facebook_id' => $fb_id, 'name' => 'User', 'is_verified' => 0]);

                $appsetting = DB::table('notificationby')
                    ->insert([
                        'user_id' => $Userreg,
                        'sms' => '1',
                        'app' => '1',
                        'email' => '1'
                    ]);
                $message = array('status' => '4', 'message' => 'go to register details page', 'apple_id' => $fb_id);
                return $message;
            }
        } else {
            $email = $request->user_email;
            $fb_id = $request->facebook_id;
            if ($fb_id == NULL && $email != NULL) {
                $checkuser = DB::table('users')
                    ->leftJoin('city', 'users.user_city', '=', 'city.city_id')
                    ->leftJoin('society', 'users.user_area', '=', 'society.society_id')
                    ->select('users.*', 'city.city_name', 'society.society_name')
                    ->where('users.email', $email)
                    ->where('users.is_verified', '!=', 0)
                    ->first();
            } elseif ($fb_id != NULL) {
                $checkuser = DB::table('users')
                    ->leftJoin('city', 'users.user_city', '=', 'city.city_id')
                    ->leftJoin('society', 'users.user_area', '=', 'society.society_id')
                    ->select('users.*', 'city.city_name', 'society.society_name')
                    ->where('users.facebook_id', $fb_id)
                    ->where('users.is_verified', '!=', 0)
                    ->first();
            } else {
                $message = array('status' => '3', 'message' => 'go to register details page', 'fb_id' => NULL);
                return $message;
            }
            if ($checkuser) {
                $updateDeviceId = DB::table('users')
                    ->where('facebook_id', $fb_id)
                    ->orWhere('email', $email)
                    ->update(['device_id' => $device_id]);
                $user = User::where('facebook_id', $fb_id)
                    ->orWhere('email', $email)
                    ->first();
                $token = $user->createToken('token')->accessToken;
                $user_id = $user->id;
                $sum = DB::table('store_orders')
                    ->where('store_approval', $user_id)
                    ->where('order_cart_id', "incart")
                    ->select(DB::raw('SUM(store_orders.price) as sum'), DB::raw('COUNT(store_orders.store_order_id) as count'))
                    ->first();

                if ($sum && $user_id != NULL) {
                    $countp = $sum->count;
                } else {
                    $countp = 0;
                }
                $checkuser->cart_count = $countp;

                $message = array('status' => '1', 'message' => 'Login Successfully', 'data' => $checkuser, 'token' => $token);
                return $message;
            } else {
                $delete = DB::table('users')
                    ->where('is_verified', 0)
                    ->where('facebook_id', $fb_id)
                    ->orWhere('email', $email)
                    ->delete();

                $Userreg = DB::table('users')
                    ->insertGetId(['email' => $email, 'facebook_id' => $fb_id, 'name' => 'User', 'is_verified' => 0]);

                $appsetting = DB::table('notificationby')
                    ->insert([
                        'user_id' => $Userreg,
                        'sms' => '1',
                        'app' => '1',
                        'email' => '1'
                    ]);

                $message = array('status' => '3', 'message' => 'go to register details page', 'fb_id' => $fb_id);
                return $message;
            }
        }
    }

    public function oldLogin(Request $request)
    {
        $user_phone = $request->user_phone;
        $device_id = $request->device_id;
        $reg_date = date('Y-m-d');

        $checkUser = DB::table('users')
            ->where('user_phone', $user_phone)
            ->where('is_verified', 1)
            ->first();



        if ($checkUser) {
            $Userdetails = DB::table('users')
                ->where('user_phone', $user_phone)
                ->first();

            $updateDeviceId = DB::table('users')
                ->where('user_phone', $user_phone)
                ->update(['device_id' => $device_id]);
            $chars = "0123456789";
            $otpval = "";
            for ($i = 0; $i < 6; $i++) {
                $otpval .= $chars[mt_rand(0, strlen($chars) - 1)];
            }

            $firebase_st = DB::table('firebase')
                ->first();
            if ($firebase_st->status == 0) {
                $otpcode = $this->otpmsg($Userdetails->name, $user_phone);
                $updateotp = DB::table('users')
                    ->where('user_phone', $user_phone)
                    ->update(['otp_value' => $otpcode]);
            }
            $message = array('status' => '1', 'message' => 'Verify OTP for Login', 'data' => $Userdetails);
            return $message;
        } else {
            $unvuser = DB::table('users')
                ->where('user_phone', $user_phone)
                ->where('is_verified', 0)
                ->first();

            if ($unvuser) {
                $delete = DB::table('users')
                    ->where('user_phone', $user_phone)
                    ->where('is_verified', 0)
                    ->delete();
            }

            $Userreg = DB::table('users')
                ->insertGetId(['user_phone' => $user_phone, 'name' => 'User', 'is_verified' => 0, 'reg_date' => $reg_date]);

            $Userdetails = DB::table('users')
                ->where('user_phone', $user_phone)
                ->first();

            $appsetting = DB::table('notificationby')
                ->insert([
                    'user_id' => $Userreg,
                    'sms' => '1',
                    'app' => '1',
                    'email' => '1'
                ]);


            $message = array('status' => '2', 'message' => 'go to register details page', 'data' => $user_phone);
            return $message;
        }
    }

    public function login(Request $request)
    {
        $request['is_verified'] = 1;

        $user = User::where("user_phone", $request->user_phone)->first();

        $token = $user->createToken(uniqid())->accessToken;


        $credentials =  $request->only('user_phone', 'password'/*, 'is_verified'*/);

        if (!$this->guard()->attempt($credentials)) {

            return $this->createErrorResponse(0, 'Unauthorized', 401);
        }
        $user->token = $token;
        return response()->json($user);
        // return $this->respondWithToken($token);
    }

    protected function respondWithToken($token)
    {

        $data = [
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60,
            'user'       => auth()->user()
        ];

        return $this->createSuccessResponse(1, 'data', $data, 200);
    }

    public function validates(Request $request)
    {
        return response()->json(['error' => 'UnAuthorised'], 401);
    }

    /** 
     * Function: verifyotpfirebase
     * Params: Request Laravel Object $request
     * Description: 
     */
    public function verifyotpfirebase(Request $request)
    {
        $phone = $request->user_phone;
        $status = strtolower($request->status);
        $device_id = $request->device_id;
        $checuss = User::first();
        $referral_code = $request->referral_code;
        $smsby = DB::table('smsby')
            ->first();
        $created_at = Carbon::now();
        // check for otp verify
        $getUser = DB::table('users')
            ->where('user_phone', $phone)
            ->first();

        $user_name = $getUser->name;
        $user_phone = $getUser->user_phone;
        $user_email = $getUser->email;
        $ver = $getUser->is_verified;

        if ($getUser) {
            if ($status == "success") {
                if ($ver == 0) {
                    if ($referral_code != NULL) {
                        $getReferredUser1 = DB::table('users')
                            ->where('referral_code', $referral_code)
                            ->first();
                        $getuser = DB::table('users')
                            ->where('user_phone', $user_phone)
                            ->first();
                        if ($getReferredUser1) {

                            $insertReferral = DB::table('tbl_referral')
                                ->insert([
                                    'user_id' => $getuser->id,
                                    'referral_by' => $getReferredUser1->id,
                                    'created_at' => $created_at,
                                ]);
                            $getScratchCard = DB::table('referral_points')
                                ->first();

                            $scratch_card_offers = json_decode($getScratchCard->points);
                            $earning = rand($scratch_card_offers->min, $scratch_card_offers->max);

                            $earn = "You've won ₹ " . $earning;
                            /////referral by user//////
                            $userupdate = DB::table('users')
                                ->where('referral_code', $referral_code)
                                ->update(['wallet' => $getReferredUser1->wallet + $earning]);
                            //////referral to user /////////
                            $userupdate2 = DB::table('users')
                                ->where('user_phone', $phone)
                                ->update(['wallet' => $earning]);
                        } else {
                            $message = array('status' => '0', 'message' => 'wrong referral code');
                            return $message;
                        }
                    } else {
                        $getReferral = DB::table('tbl_referral')
                            ->where('user_id', $getUser->id)
                            ->first();

                        if ($getReferral) {
                            $getScratchCard = DB::table('referral_points')
                                ->first();

                            $scratch_card_offers = json_decode($getScratchCard->points);
                            $earning = rand($scratch_card_offers->min, $scratch_card_offers->max);

                            $earn = "You've won ₹ " . $earning;

                            $getReferredUser1 = DB::table('users')
                                ->select("wallet")
                                ->where('id', $getUser->id)
                                ->first();

                            if ($getReferredUser1) {
                                $userupdate = DB::table('users')
                                    ->where('id', $getReferral->referral_by)
                                    ->update(['wallet' => $getReferredUser1->wallet + $earning]);
                            }
                        }
                    }
                }
                // verify phone
                $getUser2 = User::where('user_phone', $phone)
                    ->update([
                        'is_verified' => 1,
                        'otp_value' => NULL
                    ]);
                $updateDeviceId = DB::table('users')
                    ->where('user_phone', $phone)
                    ->update(['device_id' => $device_id]);
                if ($ver == 0) {
                    $welcomemessage = $this->welmsg($user_name, $user_phone, $user_email);

                    $welcomemail = $this->welmail($user_name, $user_phone, $user_email);
                }
                $user = User::where('user_phone', $phone)
                    ->first();
                $token = $user->createToken('token')->accessToken;
                $user_id = $user->id;
                $sum = DB::table('store_orders')
                    ->where('store_approval', $user_id)
                    ->where('order_cart_id', "incart")
                    ->select(DB::raw('SUM(store_orders.price) as sum'), DB::raw('COUNT(store_orders.store_order_id) as count'))
                    ->first();

                if ($sum && $user_id != NULL) {
                    $countp = $sum->count;
                } else {
                    $countp = 0;
                }

                $getUser->cart_count = $countp;

                $message = array('status' => '1', 'message' => "Phone Verified! login successfully", 'data' => $getUser, 'token' => $token);
                return $message;
            } else {
                $message = array('status' => '0', 'message' => "Wrong OTPss");
                return $message;
            }
        } else {
            $message = array('status' => '0', 'message' => "User not registered");
            return $message;
        }
    }


    public function register_details(UserRegisterRequest $request)
    {


        $user_phone = $request->user_phone;
        // $user_email = $request->user_phone;

        $password = Hash::make($request->password);
        $fb_id = $request->fb_id;
        $lat =  $request->lat;
        $lng = $request->lng;
        $address = $request->address;
        $user_city = $request->user_city;
        $user_area = $request->user_area;
        $fb_id = $request->facebook_id;
        $name = $request->name;
        $reg_date = now();


        $u_name1 = str_replace(' ', '', $name);
        $u_name2 = str_replace('.', '', $u_name1);
        $u_name3 = str_replace('-', '', $u_name2);
        $u_name = str_replace(',', '', $u_name3);
        $referral_code1 = $request->referral_code;
        $startingg = str_replace(' ', '', $u_name);
        $startingg1 = strtoupper(substr($u_name, 0, 3));

        $chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $referral_code = "";
        for ($i = 0; $i < 5; $i++) {
            $referral_code .= $chars[mt_rand(0, strlen($chars) - 1)];
        }
        $referral_c = $startingg1 . $referral_code;



        $date = date('d-m-Y');
        $this->getImageStorage();

        if ($request->user_image) {
            $image = $request->user_image;
            $fileName = $image->getClientOriginalName();
            $fileName = str_replace(" ", "-", $fileName);

            if ($this->storage_space != "same_server") {
                $image_name = $image->getClientOriginalName();
                $image = $request->file('user_image');
                $filePath = '/user/' . $image_name;
                Storage::disk($this->storage_space)->put($filePath, fopen($request->file('user_image'), 'r+'), 'public');
            } else {

                $image->move('images/user/' . $date . '/', $fileName);
                $filePath = '/images/user/' . $date . '/' . $fileName;
            }
        } else {
            $filePath = 'N/A';
        }

        $check = DB::table('users')
            ->where('user_phone', $user_phone)
            // ->orWhere('email', $user_email)
            ->first();

        if ($check != null) {
            $message = array('status' => '0', 'message' => 'User Already Registered with this email or phone number');
            return $message;
        } else {
            $user = User::create([
                'name' => $name,
                'address' => $address,
                'lat' => $lat,
                'lng' => $lng,
                /*'email' => $user_email,*/
                'user_phone' => $user_phone,
                'user_city' => $user_city,
                'user_area' => $user_area,
                'user_image' => $filePath,
                'referral_code' => $referral_c,
                'password' => $password,
                'reg_date' => $reg_date,
            ]);
            $otpcode = $this->otpmsg($name, $user_phone);
            $updateotp = DB::table('users')
                ->where('user_phone', $user_phone)
                ->update(['otp_value' => $otpcode]);
            $message = array('status' => '1', 'message' => 'User registerd successfuly', 'data' => $user);
            return $message;
        }


        if ($fb_id == NULL) {
            $check = DB::table('users')
                ->where('user_phone', $user_phone)
                // ->orWhere('email', $user_email)
                ->first();
        } else {
            $check = DB::table('users')
                ->where('user_phone', $user_phone)
                // ->orWhere('email', $user_email)
                ->orWhere('facebook_id', $fb_id)
                ->first();
        }

        if ($check) {



            if ($check->is_verified != 0) {
                $message = array('status' => '0', 'message' => 'User Already Registered with this email or phone number');
                return $message;
            }
            $updateUser = DB::table('users')
                ->where('id', $check->id)
                ->update(['name' => $name, 'address' => $address, 'lat' => $lat, 'lng' => $lng, /*'email' => $user_email,*/ 'user_phone' => $user_phone, 'user_city' => $user_city, 'user_area' => $user_area, 'user_image' => $filePath, 'referral_code' => $referral_c, 'password' => $password]);

            $chars = "0123456789";
            $otpval = "";
            for ($i = 0; $i < 6; $i++) {
                $otpval .= $chars[mt_rand(0, strlen($chars) - 1)];
            }
            $user = User::where('user_phone', $user_phone)->first();
            $firebase_st = DB::table('firebase')
                ->first();
            // if ($firebase_st->status == 0) {
            //     $otpcode = $this->otpmsg($name , $user_phone);
            //     $updateotp = DB::table('users')
            //         ->where('user_phone', $user_phone)
            //         ->update(['otp_value' => $otpcode]);
            // }
            // dd($otpval);
            $created_at = Carbon::now();

            if ($referral_code1 != NULL) {
                $getReferredUser1 = DB::table('users')
                    ->where('referral_code', $referral_code1)
                    ->first();
                $getuser = DB::table('users')
                    ->where('user_phone', $user_phone)
                    ->first();
                if ($getReferredUser1) {
                    $insertReferral = DB::table('tbl_referral')
                        ->insert([
                            'user_id' => $getuser->id,
                            'referral_by' => $getReferredUser1->id,
                            'created_at' => $created_at,
                        ]);
                    $getScratchCard = DB::table('referral_points')
                        ->first();

                    $scratch_card_offers = json_decode($getScratchCard->points);
                    $earning = rand($scratch_card_offers->min, $scratch_card_offers->max);

                    $earn = "You've won ₹ " . $earning;
                    //////referral to user /////////
                    $userupdate2 = DB::table('users')
                        ->where('user_phone', $user_phone)
                        ->update(['wallet' => $earning]);
                } else {
                    $message = array('status' => '0', 'message' => 'wrong referral code');
                    return $message;
                }
            }
            $otpcode = $this->otpmsg($name, $user_phone);
            $updateotp = DB::table('users')
                ->where('user_phone', $user_phone)
                ->update(['otp_value' => $otpcode]);
            $message = array('status' => '1', 'message' => 'verify otp', 'data' => $user);
            return $message;
        } else {
            $message = array('status' => '0', 'message' => 'User Not Founds');
            return $message;
        }
        // $data = $this->register_details($request);
        // return response()->json($data);
    }

    public function myprofile(Request $request)
    {
        $user_id = $request->user_id;
        $user = DB::table('users')
            ->leftJoin('city', 'users.user_city', '=', 'city.city_id')
            ->leftJoin('society', 'users.user_area', '=', 'society.society_id')
            ->select('users.*', 'city.city_name', 'society.society_name')
            ->where('users.id', $user_id)
            ->first();
        $order = DB::table('orders')
            ->join('store', 'orders.store_id', '=', 'store.id')
            ->join('users', 'orders.user_id', '=', 'users.id')
            ->join('address', 'orders.address_id', '=', 'address.address_id')
            ->where('orders.user_id', $user_id)
            ->where('orders.order_status', '!=', 'NULL')
            ->where('orders.payment_method', '!=', NULL)
            ->count();

        $orderspent = DB::table('orders')
            ->where('order_status', '!=', 'Cancelled')
            ->where('order_status', '!=', NULL)
            ->where('payment_method', '!=', NULL)
            ->where('payment_method', '!=', 'COD')
            ->where('payment_method', '!=', 'cod')
            ->where('user_id', $user_id)
            ->sum('total_price');

        $ordersaved = DB::table('orders')
            ->select(DB::raw('SUM(total_products_mrp)- SUM(price_without_delivery)+SUM(coupon_discount) as overalldiscount'))
            ->where('order_status', '!=', 'Cancelled')
            ->where('order_status', '!=', NULL)
            ->where('payment_method', '!=', NULL)
            ->where('payment_method', '!=', 'COD')
            ->where('payment_method', '!=', 'cod')
            ->where('user_id', $user_id)
            ->first();

        if ($user) {
            $user = User::where('id', $user_id)
                ->first();
            $user->total_orders = $order;
            $user->total_spent = round($orderspent, 2);
            $user->total_save = round($ordersaved->overalldiscount, 2);
            $token = $user->createToken('token')->accessToken;
            $sum = DB::table('store_orders')
                ->where('store_approval', $user_id)
                ->where('order_cart_id', "incart")
                ->select(DB::raw('SUM(store_orders.price) as sum'), DB::raw('COUNT(store_orders.store_order_id) as count'))
                ->first();

            if ($sum && $user_id != NULL) {
                $countp = $sum->count;
            } else {
                $countp = 0;
            }
            $user->cart_count = $countp;
            $message = array('status' => '1', 'message' => 'User Profile', 'data' => $user, 'token' => $token);
            return $message;
        } else {
            $message = array('status' => '0', 'message' => 'User not found');
            return $message;
        }
    }

    public function forgotPassword(Request $request)
    {
        $user_phone = $request->user_phone;
        $otp = $request->otp;
        $new_password = $request->new_password;
        $new_password_confirm = $request->new_password_confirm;
        $user = User::where("user_phone", $user_phone)->first();
        if (!$user) {
            return response()->json([
                'status' => '0',
                'message' => 'User not registered'
            ], 422);
        }
        $user = $user->where("otp_value", $otp)->first();
        if (!$user) {
            return response()->json([
                'status' => '0',
                'message' => 'Otp Not Valid'
            ], 422);
        }


        return true;

        /*
                $user_phone = $request->user_phone;

        $checkUser = DB::table('users')
            ->where('user_phone', $user_phone)
            ->where('is_verified', 1)
            ->first();

        if ($checkUser) {
            $chars = "0123456789";
            $otpval = "";
            for ($i = 0; $i < 4; $i++) {
                $otpval .= $chars[mt_rand(0, strlen($chars) - 1)];
            }
            // $firebase_st = DB::table('firebase')
            //     ->first();
            // if ($firebase_st->status == 0) {
            //     $otpmsg = $this->otpmsg($otpval, $user_phone);
            // }
            $otp = $this->otpmsg($checkUser->name, $user_phone);

            $updateOtp = DB::table('users')
                ->where('user_phone', $user_phone)
                ->update(['otp_value' => $otp]);

            if ($updateOtp) {
                // $checkUser1 = DB::table('users')
                //     ->where('user_phone', $user_phone)
                //     ->first();

                $message = array('status' => '1', 'message' => 'Verify OTP', 'otp' => $otp, 'data' => $checkUser);
                return $message;
            } else {
                $message = array('status' => '0', 'message' => 'Something wrong');
                return $message;
            }
        } else {
            $message = array('status' => '0', 'message' => 'User not registered');
            return $message;
        }
        */
    }

    public function verifyOtpPass(Request $request)
    {
        $phone = $request->user_phone;
        $otp = $request->otp;
        $checuss = DB::table('users')
            ->first();
        // check for otp verify
        $getUser = DB::table('users')
            ->where('user_phone', $phone)
            ->first();
        if ($getUser->is_verified == 1) {
            $message = array('status' => '1', 'message' => "User Is Verifed", 'data' => $getUser);
            return response()->json($message);
        }
        if ($getUser) {
            $getotp = $getUser->otp_value;

            if ($otp == $getotp) {
                User::where('user_phone', $phone)
                    ->update([
                        'is_verified' => 1,
                        'otp_value' => NULL
                    ]);
                $message = array('status' => '1', 'message' => "Otp Matched Successfully", 'data' => $getUser);
                return $message;
            } else {
                $message = array('status' => '0', 'message' => "Wrong OTP");
                return $message;
            }
        } else {
            $message = array('status' => '0', 'message' => "User not registered");
            return $message;
        }
    }

    public function verifyOtpPassfb(Request $request)
    {
        $phone = $request->user_phone;
        $status = $request->status;

        // check for otp verify
        $getUser = DB::table('users')
            ->where('user_phone', $phone)
            ->first();

        if ($getUser) {
            if ($status == 'success') {
                $message = array('status' => '1', 'message' => "Otp Matched Successfully", 'data' => $getUser);
                return $message;
            } else {
                $message = array('status' => '0', 'message' => "Wrong OTP");
                return $message;
            }
        } else {
            $message = array('status' => '0', 'message' => "User not registered");
            return $message;
        }
    }

    public function verifyOtp(Request $request)
    {
        $phone = $request->user_phone;
        $otp = $request->otp;

        // check for otp verify
        $getUser = DB::table('users')
            ->where('user_phone', $phone)
            ->first();

        $device_id = $request->device_id;

        $referral_code = $request->referral_code;
        $smsby = DB::table('smsby')
            ->first();

        if ($getUser) {
            $user_name = $getUser->name;
            $user_phone = $getUser->user_phone;
            $user_email = $getUser->email;
            $ver = $getUser->is_verified;
            $getotp = $getUser->otp_value;
            if ($otp == $getotp) {
                // verify phone
                $getUser2 = User::where('user_phone', $phone)
                    ->update([
                        'is_verified' => 1,
                        'otp_value' => NULL
                    ]);

                if ($ver == 0) {
                    if ($referral_code != NULL) {
                        $getReferredUser1 = DB::table('users')
                            ->where('referral_code', $referral_code)
                            ->first();
                        $getuser = DB::table('users')
                            ->where('user_phone', $user_phone)
                            ->first();
                        if ($getReferredUser1) {
                            $insertReferral = DB::table('tbl_referral')
                                ->insert([
                                    'user_id' => $getuser->id,
                                    'referral_by' => $getReferredUser1->id,
                                    'created_at' => $created_at,
                                ]);
                            $getScratchCard = DB::table('referral_points')
                                ->first();

                            $scratch_card_offers = json_decode($getScratchCard->points);
                            $earning = rand($scratch_card_offers->min, $scratch_card_offers->max);

                            $earn = "You've won ₹ " . $earning;
                            /////referral by user//////
                            $userupdate = DB::table('users')
                                ->where('referral_code', $referral_code)
                                ->update(['wallet' => $getReferredUser1->wallet + $earning]);
                            //////referral to user /////////
                            $userupdate2 = DB::table('users')
                                ->where('user_phone', $phone)
                                ->update(['wallet' => $earning]);
                        } else {
                            $message = array('status' => '0', 'message' => 'wrong referral code');
                            return $message;
                        }
                    }
                }
                $updateDeviceId = DB::table('users')
                    ->where('user_phone', $phone)
                    ->update(['device_id' => $device_id]);
                if ($ver == 0) {
                    $welcomemessage = $this->welmsg($user_name, $user_phone, $user_email);

                    $welcomemail = $this->welmail($user_name, $user_phone, $user_email);
                }
                $user = User::where('user_phone', $phone)
                    ->first();
                $token = $user->createToken('token')->accessToken;
                $message = array('status' => '1', 'message' => "Phone Verified! login successfully", 'data' => $getUser, 'token' => $token);
                return $message;
            } else {
                $message = array('status' => '0', 'message' => "Wrong OTP");
                return $message;
            }
        } else {
            $message = array('status' => '0', 'message' => "User not registered");
            return $message;
        }
    }

    public function changePassword(Request $request)
    {
        $user_phone = $request->user_phone;
        $password = Hash::make($request->user_password);

        $getUser = DB::table('users')
            ->where('user_phone', $user_phone)
            ->first();

        if ($getUser) {
            $updateOtp = DB::table('users')
                ->where('user_phone', $user_phone)
                ->update(['password' => $password]);

            if ($updateOtp) {
                $checkUser1 = DB::table('users')
                    ->where('user_phone', $user_phone)
                    ->first();

                $message = array('status' => '1', 'message' => 'Password changed', 'data' => $checkUser1);
                return $message;
            } else {
                $message = array('status' => '0', 'message' => 'Use Another Password');
                return $message;
            }
        } else {
            $message = array('status' => '0', 'message' => "User not registered");
            return $message;
        }
    }

    public function profile_edit(Request $request)
    {
        $user_id = $request->user_id;
        $checuss = DB::table('users')
            ->first();
        $user_name = $request->user_name;
        $user_city = $request->user_city;
        $user_area = $request->user_area;
        $user_email = $request->user_email;
        $user_phone = $request->user_phone;
        $user_image = $request->user_image;
        $uu = DB::table('users')
            ->where('id', $user_id)
            ->first();
        if ($uu->user_phone == "9999999999") {
            $user = User::where('id', $user_id)
                ->first();
            $token = $user->createToken('token')->accessToken;
            $message = array('status' => '0', 'message' => 'You can not change the details for demo account');
            return $message;
        } else {
            $user_password = $uu->password;
            $date = date('d-m-Y');

            $this->getImageStorage();

            if ($request->user_image) {
                $image = $request->user_image;
                $fileName = $image->getClientOriginalName();
                $fileName = str_replace(" ", "-", $fileName);


                if ($this->storage_space != "same_server") {
                    $image_name = $image->getClientOriginalName();
                    $image = $request->file('user_image');
                    $filePath = '/user/' . $image_name;
                    Storage::disk($this->storage_space)->put($filePath, fopen($request->file('user_image'), 'r+'), 'public');
                } else {

                    $image->move('images/user/' . $date . '/', $fileName);
                    $filePath = '/images/user/' . $date . '/' . $fileName;
                }
            } else {
                $filePath = $uu->user_image;
            }

            $checkUser = DB::table('users')
                ->where('user_phone', $user_phone)
                ->where('id', '!=', $user_id)
                ->first();
            if ($checkUser && $checkUser->is_verified == 1) {
                $message = array('status' => '0', 'message' => 'This Phone number is attached with another account');
                return $message;
            } else {

                $insertUser = DB::table('users')
                    ->where('id', $user_id)
                    ->update([
                        'name' => $user_name,
                        'email' => $user_email,
                        'user_city' => $user_city,
                        'user_area' => $user_area,
                        'user_phone' => $user_phone,
                        'user_image' => $filePath,
                        'password' => $user_password,
                    ]);

                $Userdetails = DB::table('users')
                    ->where('id', $user_id)
                    ->first();


                if ($insertUser) {
                    $user = User::where('id', $user_id)
                        ->first();
                    $token = $user->createToken('token')->accessToken;
                    $message = array('status' => '1', 'message' => 'Profile Updated', 'data' => $Userdetails, 'token' => $token);
                    return $message;
                } else {
                    $message = array('status' => '0', 'message' => 'Nothing To Update');
                    return $message;
                }
            }
        }
    }

    public function user_block_check(Request $request)
    {
        $user_id = $request->user_id;
        $user = DB::table('users')
            ->select('block')
            ->where('id', $user_id)
            ->first();

        if ($user) {
            if ($user->block == 1) {
                $message = array('status' => '1', 'message' => 'User is Blocked');
                return $message;
            } else {
                $message = array('status' => '2', 'message' => 'User is Active');
                return $message;
            }
        } else {
            $message = array('status' => '0', 'message' => 'User not found');
            return $message;
        }
    }

    public function resendotp(Request $request)
    {
        $phone = $request->user_phone;


        $getUser = DB::table('users')
            ->where('user_phone', $phone)
            ->first();

        if ($getUser != null) {
            $otpcode = $this->otpmsg($getUser->name, $phone);

            $updateotp = DB::table('users')
                ->where('user_phone', $phone)
                ->update(['otp_value' => $otpcode]);
            $message = array('status' => '1', 'message' => 'Otp sent', 'data' => $getUser);

            return $message;
        } else {
            $message = array('status' => '0', 'message' => 'User Not Founds');
            return $message;
        }
    }

    public function login_with_email(Request $request)
    {
        $user_email = $request->email;
        $user_password = $request->password;
        $device_id = $request->device_id;
        $checkUser = DB::table('users')
            ->where('email', $user_email)
            ->first();

        if ($checkUser) {

            $checkUserreg = DB::table('users')
                ->where('email', $user_email)
                ->first();

            if (Hash::check($user_password, $checkUserreg->password)) {
                $updateDeviceId = DB::table('users')
                    ->where('email', $user_email)
                    ->update(['device_id' => $device_id]);

                $user = User::where('email', $user_email)
                    ->first();

                $user_id = $user->id;
                $sum = DB::table('store_orders')
                    ->where('store_approval', $user_id)
                    ->where('order_cart_id', "incart")
                    ->select(DB::raw('SUM(store_orders.price) as sum'), DB::raw('COUNT(store_orders.store_order_id) as count'))
                    ->first();

                if ($sum && $user_id != NULL) {
                    $countp = $sum->count;
                } else {
                    $countp = 0;
                }
                $user->cart_count = $countp;
                $token = $user->createToken('token')->accessToken;
                $message = array('status' => '1', 'message' => 'login successfully', 'data' => $user, 'token' => $token);
                return $message;
            } else {
                $message = array('status' => '0', 'message' => 'Wrong Password');
                return $message;
            }
        } else {
            $message = array('status' => '2', 'message' => 'User not Registered');
            return $message;
        }
    }

    public function verifyPhone(Request $request)
    {
        $phone = $request->user_phone;
        $otp = $request->otp;
        $device_id = $request->device_id;
        $checuss = User::first();
        $referral_code = $request->referral_code;
        $smsby = DB::table('smsby')
            ->first();
        $created_at = Carbon::now();
        // check for otp verify
        $getUser = DB::table('users')
            ->where('user_phone', $phone)
            ->first();

        $user_name = $getUser->name;
        $user_phone = $getUser->user_phone;
        $user_email = $getUser->email;
        $ver = $getUser->is_verified;

        if ($getUser) {
            $getotp = $getUser->otp_value;

            if ($otp == $getotp) {
                if ($ver == 0) {
                    if ($referral_code != NULL) {
                        $getReferredUser1 = DB::table('users')
                            ->where('referral_code', $referral_code)
                            ->first();
                        $getuser = DB::table('users')
                            ->where('user_phone', $user_phone)
                            ->first();
                        if ($getReferredUser1) {
                            $insertReferral = DB::table('tbl_referral')
                                ->insert([
                                    'user_id' => $getuser->id,
                                    'referral_by' => $getReferredUser1->id,
                                    'created_at' => $created_at,
                                ]);
                            $getScratchCard = DB::table('referral_points')
                                ->first();

                            $scratch_card_offers = json_decode($getScratchCard->points);
                            $earning = rand($scratch_card_offers->min, $scratch_card_offers->max);

                            $earn = "You've won ₹ " . $earning;
                            /////referral by user//////
                            $userupdate = DB::table('users')
                                ->where('referral_code', $referral_code)
                                ->update(['wallet' => $getReferredUser1->wallet + $earning]);
                            //////referral to user /////////
                            $userupdate2 = DB::table('users')
                                ->where('user_phone', $phone)
                                ->update(['wallet' => $earning]);
                        } else {
                            $message = array('status' => '0', 'message' => 'wrong referral code');
                            return $message;
                        }
                    } else {
                        $getReferral = DB::table('tbl_referral')
                            ->where('user_id', $getUser->id)
                            ->first();
                        if ($getReferral) {
                            $getScratchCard = DB::table('referral_points')
                                ->first();

                            $scratch_card_offers = json_decode($getScratchCard->points);
                            $earning = rand($scratch_card_offers->min, $scratch_card_offers->max);

                            $earn = "You've won ₹ " . $earning;

                            $userupdate = DB::table('users')
                                ->where('id', $getReferral->referral_by)
                                ->update(['wallet' => $getReferredUser1->wallet + $earning]);
                        }
                    }
                }
                // verify phone
                $getUser2 = User::where('user_phone', $phone)
                    ->update([
                        'is_verified' => 1,
                        'otp_value' => NULL
                    ]);
                $updateDeviceId = DB::table('users')
                    ->where('user_phone', $phone)
                    ->update(['device_id' => $device_id]);
                if ($ver == 0) {
                    $welcomemessage = $this->welmsg($user_name, $user_phone, $user_email);

                    $welcomemail = $this->welmail($user_name, $user_phone, $user_email);
                }
                $user = User::where('user_phone', $phone)
                    ->first();
                $token = $user->createToken('token')->accessToken;
                $user_id = $user->id;
                $sum = DB::table('store_orders')
                    ->where('store_approval', $user_id)
                    ->where('order_cart_id', "incart")
                    ->select(DB::raw('SUM(store_orders.price) as sum'), DB::raw('COUNT(store_orders.store_order_id) as count'))
                    ->first();

                if ($sum && $user_id != NULL) {
                    $countp = $sum->count;
                } else {
                    $countp = 0;
                }

                $getUser->cart_count = $countp;

                $message = array('status' => '1', 'message' => "Phone Verified! login successfully", 'data' => $getUser, 'token' => $token);
                return $message;
            } else {
                $message = array('status' => '0', 'message' => "Wrong OTP");
                return $message;
            }
        } else {
            $message = array('status' => '0', 'message' => "User not registered");
            return $message;
        }
    }
}
