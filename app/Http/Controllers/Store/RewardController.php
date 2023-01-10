<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Models\Reward2;
use DB;
use Illuminate\Http\Request;

class RewardController extends Controller
{
    public function reward2()
    {
        $reward = Reward2::firstOrCreate([
            "reward" => 0,
            "is_active" => 1
        ]);

        return view("store.reward2.index", compact("reward"));
    }
}
