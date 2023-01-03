<?php

namespace App\Services;

use App\Models\User;
use DB;

/**
 * Class RewardService.
 */
class RewardService
{

    public static function giveRewardToUser($userId, $amount)
    {
        $user = User::find($userId);
        $rewards = DB::table("reward_points")->orderBy("min_cart_value", "desc")->get();
        foreach ($rewards as $reward) {
            if ($amount >= $reward->min_cart_value) {
                $user->update(["rewards" => $user->rewards + $reward->reward_point]);
                break;
            }
        }
    }
}
