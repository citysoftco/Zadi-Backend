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
        $gainedRewards = 0;
        foreach ($rewards as $reward) {
            # 
            if ($amount >= $reward->min_cart_value) {
                $gainedRewards += $amount * $reward->reward_point / $reward->min_cart_value;
                break;
            }
        }
        $user->update(["rewards" => $user->rewards + $gainedRewards]);
    }
}
