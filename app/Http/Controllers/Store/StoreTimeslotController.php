<?php

namespace App\Http\Controllers\Store;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Store;
use App\Models\StoreSchedule;
use App\Models\WorkDay;
use DB;
use Session;
use Auth;
use Carbon\Carbon;

class StoreTimeslotController extends Controller
{
    public function timeslot(Request $request)
    {
        $title = "Home";
        $currency = DB::table('currency')
            ->first();
        $email = Auth::guard('store')->user()->email;
        $store = DB::table('store')
            ->where('email', $email)
            ->first();
        $logo = DB::table('tbl_web_setting')
            ->where('set_id', '1')
            ->first();
        $time_slot_id = $request->time_slot_id;

        $city = DB::table('store')
            ->where('id', $store->id)
            ->first();

        $del_charge = DB::table('freedeliverycart')
            ->where('store_id', $store->id)
            ->first();

        $minmax = DB::table('minimum_maximum_order_value')
            ->where('store_id', $store->id)
            ->first();

        $incentive = DB::table('store_driver_incentive')
            ->where('store_id', $store->id)
            ->first();

        // return view('store.time_slot.time_slotadd', compact('title', "city", 'store', 'logo', 'email', 'del_charge', 'minmax', 'incentive', 'currency'));

        $StoreSchedules = StoreSchedule::where("store_id", $city->id)->get();
        $daysList = Carbon::getDays();


        return view('store.time_slot.time_slotadd', compact('title', "city", 'store', 'logo', 'email', 'del_charge', 'minmax', 'incentive', 'currency', 'StoreSchedules', 'daysList'));
    }
    public function ordersLimit(Request $request)
    {
        $data = $request->all();

        if (isset($data["unlimited_orders"]))
            $data["unlimited_orders"] = true;
        else
            $data["unlimited_orders"] = false;

        $storeId = Auth::guard("store")->id();

        $store = DB::table('store')->where("id", $storeId)
            ->update([
                "orders_limit" => $data["orders_limit"],
                "unlimited_orders" => $data["unlimited_orders"]
            ]);

        return redirect()->back()->withSuccess(trans('keywords.Updated Successfully'));
    }
    public function timeslotupdate(Request $request)
    {
        $title = "Home";
        // $email = Auth::guard('store')->user()->email;
        // $store = DB::table('store')
        //     ->where('email', $email)
        //     ->first();
        // $store_id = $store->id;
        // $open_hrs = $request->open_hrs;
        // $close_hrs = $request->close_hrs;
        // $interval = $request->interval;

        // $insert = DB::table('store')
        //     ->where('id', $store_id)
        //     ->update([
        //         'store_opening_time' => $open_hrs,
        //         'store_closing_time' => $close_hrs,
        //         'time_interval' => $interval
        //     ]);

        $data = $request->all();

        $id = Auth::guard("store")->id();

        for ($x = 0; $x <= 6; $x++) {
            if (!isset($data["status$x"]) || $data["status$x"] != "on")
                $data["status$x"] = "off";



            StoreSchedule::updateOrCreate([
                "day_name" => $data["day_name$x"],
                "store_id" => $id
            ], [
                "day_name" => $data["day_name$x"],
                "day_number" => $data["day_number$x"],
                "status" => $data["status$x"],
                "store_opening_time" => $data["store_opening_time$x"],
                "store_closing_time" => $data["store_closing_time$x"],
            ]);
        }
        return redirect()->back()->withSuccess(trans('keywords.Updated Successfully'));
    }

    public function updateOrdersTime(Request $request)
    {
        $title = "Home";
        // $email = Auth::guard('store')->user()->email;
        // $store = DB::table('store')
        //     ->where('email', $email)
        //     ->first();
        // $store_id = $store->id;
        // $open_hrs = $request->open_hrs;
        // $close_hrs = $request->close_hrs;
        // $interval = $request->interval;

        // $insert = DB::table('store')
        //     ->where('id', $store_id)
        //     ->update([
        //         'store_opening_time' => $open_hrs,
        //         'store_closing_time' => $close_hrs,
        //         'time_interval' => $interval
        //     ]);

        $data = $request->all();

        $id = Auth::guard("store")->id();

        for ($x = 0; $x <= 6; $x++) {
            if (!isset($data["order_time_status$x"]) || $data["order_time_status$x"] != "on")
                $data["order_time_status$x"] = "off";



            StoreSchedule::updateOrCreate([
                "day_name" => $data["day_name$x"],
                "store_id" => $id
            ], [
                "day_name" => $data["day_name$x"],
                "day_number" => $data["day_number$x"],
                "order_time_status" => $data["order_time_status$x"],
                "store_orders_opening_time" => $data["store_orders_opening_time$x"],
                "store_orders_closing_time" => $data["store_orders_closing_time$x"],
            ]);
        }
        return redirect()->back()->withSuccess(trans('keywords.Updated Successfully'));
    }
    public function updatedel_charge(Request $request)
    {
        $del_charge = 0;
        $min_cart_value = $request->min_cart_value;
        $email = Auth::guard('store')->user()->email;
        $store = DB::table('store')
            ->where('email', $email)
            ->first();
        $store_id = $store->id;
        $this->validate(
            $request,
            [
                'min_cart_value' => 'required',
            ],
            [
                'min_cart_value.required' => 'Enter Minimum Cart Value'
            ]
        );

        $check = DB::table('freedeliverycart')
            ->where('store_id', $store_id)
            ->first();

        if ($check) {


            $update = DB::table('freedeliverycart')
                ->where('store_id', $store_id)
                ->update([
                    'min_cart_value' => $min_cart_value,
                    'del_charge' => $del_charge
                ]);
        } else {
            $update = DB::table('freedeliverycart')
                ->insert([
                    'min_cart_value' => $min_cart_value,
                    'del_charge' => $del_charge, 'store_id' => $store_id
                ]);
        }
        if ($update) {
            return redirect()->back()->withSuccess(trans('keywords.Updated Successfully'));
        } else {
            return redirect()->back()->withErrors(trans('keywords.Something Wents Wrong'));
        }
    }

    public function amountupdate(Request $request)
    {
        $title = "Home";
        $min_max_id = $request->min_max_id;
        $min_value = $request->min_value;
        $max_value = $request->max_value;
        $email = Auth::guard('store')->user()->email;
        $store = DB::table('store')
            ->where('email', $email)
            ->first();
        $store_id = $store->id;
        $this->validate(
            $request,
            [
                'min_value' => 'required',
                'max_value' => 'required',
            ],
            [
                'min_value.required' => 'Min Value Required',
                'max_value.required' => 'Max Value Required',
            ]
        );

        $check = DB::table('minimum_maximum_order_value')
            ->where('store_id', $store_id)
            ->first();

        if ($check) {
            $insert = DB::table('minimum_maximum_order_value')
                ->where('store_id', $store_id)
                ->update([
                    'min_value' => $min_value,
                    'max_value' => $max_value

                ]);
        } else {
            $insert = DB::table('minimum_maximum_order_value')
                ->insert([
                    'min_value' => $min_value,
                    'max_value' => $max_value,
                    'store_id' => $store_id
                ]);
        }

        return redirect()->back()->withSuccess(trans('keywords.Updated Successfully'));
    }

    public function updateincentive(Request $request)
    {
        $email = Auth::guard('store')->user()->email;
        $store = DB::table('store')
            ->where('email', $email)
            ->first();
        $incentive = $request->incentive;
        $this->validate(
            $request,
            [
                'incentive' => 'required',
            ],
            [
                'incentive.required' => 'Enter Driver Incentive',
            ]
        );

        $check = DB::table('store_driver_incentive')
            ->where('store_id', $store->id)
            ->first();

        if ($check) {
            $update = DB::table('store_driver_incentive')
                ->where('store_id', $store->id)
                ->update(['incentive' => $incentive]);
        } else {
            $update = DB::table('store_driver_incentive')
                ->insert(['incentive' => $incentive, 'store_id' => $store->id]);
        }

        if ($update) {
            return redirect()->back()->withSuccess(trans('keywords.Updated Successfully'));
        } else {
            return redirect()->back()->withErrors(trans('keywords.Something Wents Wrong'));
        }
    }
}
