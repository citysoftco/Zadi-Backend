<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Models\Reward2;
use App\Traits\ImageStoragePicker;
use Auth;
use DB;
use Illuminate\Http\Request;

class RewardController extends Controller
{
    use ImageStoragePicker;
    public function reward2()
    {
        $title = "hi";
        $reward = Reward2::firstOrNew();
        $logo = DB::table('tbl_web_setting')
            ->where('set_id', '1')
            ->first();
        $store = Auth::guard('store')->user();

        $url_aws = $this->getImageStorage();

        return view("store.reward2.edit", compact('title', "store", 'reward', 'logo', 'url_aws'));
    }

    public function rewardupdate2(Request $request)
    {
        $data = $request->all();
        $data["store_id"] = Auth::guard("store")->id();
        if ($request->is_active)
            $data["is_active"] = 1;
        else
            $data["is_active"] = 0;

        $reward = Reward2::updateOrCreate(["store_id" => $data["store_id"]], $data);


        // $reward->update($data);

        return redirect()->back()->withSuccess(trans('keywords.Updated Successfully'));
    }
}
