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



        $currentStoreDay = $storeSchedules->where("day_name", $current->dayName)->where("order_time_status", "on")->first();

        if ($currentStoreDay == null)
            return null;

        if ($current->toTimeString() > $currentStoreDay->store_orders_closing_time && $current->copy()->addDay()->toDateString() == $delivery_date->toDateString()) {
            $index = ($storeSchedules->search(function ($schedule) use ($currentStoreDay) {
                return $schedule->day_number == $currentStoreDay->day_number;
            }) + 2) % $storeSchedulesCount;
            while ($index < $storeSchedulesCount) {
                $delivery_date->addDay();
                if ($storeSchedules[$index]->status == "on") {
                    break;
                }

                $index++;
                $index = $index % $storeSchedulesCount;
            }
        }
        $aviableDay =  self::getAviableOrderDeliveryDay($delivery_date, $storeSchedules, $request->store_id);
        return $aviableDay;
        // return $delivery_date->toDateString();
    }
    public static function getAviableOrderDeliveryDay($deliveryDate, $daysList, $storeId)
    {

        $daysListCount = count($daysList);

        $startDayIndex = $daysList->search(function ($schedule) use ($deliveryDate) {
            return $schedule->day_name == $deliveryDate->dayName;
        });

        while ($startDayIndex < $daysListCount) {

            if ($daysList[$startDayIndex]->status == "on") {
                $ordersCount = DB::table("orders")
                    ->where("store_id", $storeId)
                    ->whereDate("delivery_date", $deliveryDate->toDateString())
                    ->count();
                if ($ordersCount < 20)
                    break;
            }
            $startDayIndex++;
            $startDayIndex = $startDayIndex % $daysListCount;
            $deliveryDate->addDay();
        }
        return $deliveryDate->toDateString();
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
