<?php

namespace App\Services;

use Auth;
use Carbon\Carbon;
use DB;
use stdClass;

/**
 * Class OrderService.
 */
class OrderService
{
    public static function getNewDeliveryDate($request)
    {

        $delivery_date =  Carbon::parse($request->delivery_date)->locale("en");

        $storeSchedules = DB::table("store_schedules")
            ->where("store_id", $request->store_id)
            ->get();

        $storeSchedulesCount = $storeSchedules->count();
        if ($storeSchedulesCount < 7) {
            for ($x = 1; $x <= 7; $x++) {
                if ($storeSchedules->where("day_number", $x)->first() == null) {
                    $obj = new stdClass();
                    $obj->day_number = $x;
                    $obj->status = "off";
                    $storeSchedules->push($obj);
                }
            }
        }
        $storeSchedulesCount = $storeSchedules->count();

        $storeSchedules = $storeSchedules->sortBy("day_number")->values();

        $avaibleDaysCount =   $storeSchedules
            ->where("store_id", $request->store_id)
            ->where("status", "on")
            ->count();


        if ($avaibleDaysCount < 1)
            return $delivery_date->toDateString();

        $current = Carbon::now()->locale("en");



        $currentStoreDay = $storeSchedules->where("day_name", $current->dayName)->first();

        if ($current->toTimeString() > $currentStoreDay->store_closing_time && $current->addDay()->toDateString() == $delivery_date->toDateString()) {

            $incrementDays = 0;


            $index = $storeSchedules->search(function ($schedule) use ($currentStoreDay) {
                return $schedule->day_number == $currentStoreDay->day_number;
            }) + 1;
            while ($index < $storeSchedulesCount) {

                if ($storeSchedules[$index]->status == "on") {
                    break;
                }
                $index++;
                $index = $index % $storeSchedulesCount;

                $incrementDays++;
            }
            $delivery_date =  $delivery_date->addDays($incrementDays);
        }
        return $delivery_date->toDateString();
    }
    public static function getPurchasesByDate($storeId, $fromDate, $toDate)
    {
        $orders = DB::table("store_orders")
            ->join("orders", "store_orders.order_cart_id", "=", "orders.cart_id")
            ->join("product_varient", "store_orders.varient_id", "=", "product_varient.varient_id")
            ->join("product", "product_varient.product_id", "=", "product.product_id")
            ->join("categories", "product.cat_id", "=", "categories.cat_id")
            ->where("store_orders.store_id", $storeId)
            ->where("orders.order_status", "Confirmed")
            ->whereBetween("orders.delivery_date", [$fromDate, $toDate])


            // ->where()
            ->orderBy("orders.delivery_date")
            ->get([
                "store_orders.product_name",
                "store_orders.qty",
                "store_orders.unit",
                "store_orders.price as total_price",
                "product_varient.base_price",
                "categories.title as category_name",
                "orders.delivery_date"
            ]);

        return $orders;
    }
}
