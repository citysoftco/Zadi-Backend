<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Carbon\Carbon;

class RewardController extends Controller
{
    public function redeem(Request $request)
    {
        $user_id = $request->user_id;
        $rewards = DB::table('users')
            ->select('rewards', 'wallet')
            ->where('id', $user_id)
            ->first();
        $date_of_recharge = carbon::now();
        $rew = $rewards->rewards;
        if ($rew <= 0) {
            $message = array('status' => '0', 'message' => 'You have not get any rewards yet');
            return $message;
        } else {
            $redeem_points = DB::table('reedem_values')
                ->select('value', 'reward_point')
                ->first();
            $new = $rew * $redeem_points->value / $redeem_points->reward_point;
            $newwallet = $new + $rewards->wallet;
            $upuser = DB::table('users')
                ->where('id', $user_id)
                ->update(['rewards' => 0,
                    'wallet' => $newwallet]);
            if ($upuser) {
                $insert = DB::table('wallet_recharge_history')
                    ->insert(['user_id' => $user_id,
                        'amount' => $new,
                        'date_of_recharge' => $date_of_recharge,
                        'recharge_status' => "success",
                        'payment_gateway' => "Rewards"]);

                $message = array('status' => '1', 'message' => 'Rewards Redeemed');
                return $message;
            } else {
                $message = array('status' => '0', 'message' => 'Something Went Wrong');
                return $message;
            }
        }
    }


    public function rewardvalues(Request $request)
    {
        $redeem_points = DB::table('reedem_values')
            ->first();

        if ($redeem_points) {
            $message = array('status' => '1', 'message' => 'Rewards Point Values', 'data' => $redeem_points);
            return $message;
        } else {
            $message = array('status' => '0', 'message' => 'Something Went Wrong');
            return $message;
        }
    }

    public function rewardlines(Request $request)
    {
        $cart_id = $request->cart_id;
        $check = DB::table('orders')
            ->where('cart_id', $cart_id)
            ->first();

        $user_id = $check->user_id;
        $datee = date('Y-m-d');
        $checkmem = DB::table('users')
            ->where('id', $user_id)
            ->whereDate('mem_plan_expiry', '>=', $datee)
            ->first();
        if ($checkmem) {
            $plan = DB::table('membership_plan')
                ->where('plan_id', $checkmem->membership)
                ->first();
            $reward_point = $plan->reward;

        } else {
            $reward_point = 1;
        }
        $p = $check->total_price;
        $currency = DB::table('currency')
            ->first();
        $cc = DB::table('reward_points')
            ->where('min_cart_value', "<=", $p)
            ->orderBy("min_cart_value", "DESC")
            ->first();
        $text1 = "You will get " . $cc->reward_point * $reward_point . " reward points with successfull completion of this order.";

        $cc2 = DB::table('reward_points')
            ->where('min_cart_value', ">", $cc->min_cart_value)
            ->orderBy("min_cart_value", "ASC")
            ->first();

        if ($cc2) {
            $nu = $cc2->min_cart_value - $p;

            $text2 = "Add items of " . $currency->currency_sign . " " . $nu . " more to get " . $cc2->reward_point * $reward_point . " reward points.";
        } else {
            $text2 = "";
        }

        if ($cc) {
            $message = array('status' => '1', 'message' => 'Checkout Rewards lines', 'line1' => $text1, 'line2' => $text2);
            return $message;
        } else {
            $message = array('status' => '0', 'message' => 'no rewards with this order');
            return $message;
        }
    }
}
