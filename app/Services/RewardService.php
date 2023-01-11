<?php

namespace App\Services;

use App\Models\Reward2;
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
                $gainedRewards += $amount * $reward->reward_point / 100;
                // break;
            }
        }
        $user->update(["rewards" => $user->rewards + $gainedRewards]);
    }
    public static function giveRewardToUserPercent($userId, $amount)
    {
        $user = User::find($userId);
        $rewards = Reward2::firstOrNew();
        if ($rewards->is_active) {
            $gainedRewards = $amount * $rewards->reward / 100;

            $user->update([
                "wallet" =>  $user->wallet + $gainedRewards,
                "rewards" => $user->rewards + $gainedRewards
            ]);
        }
    }
}
