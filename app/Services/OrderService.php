<?php

namespace App\Services;

use App\Models\Store;
use Auth;
use Carbon\Carbon;
use DateInterval;
use DB;
use PhpParser\Node\Stmt\Break_;
use stdClass;

/**
 * Class OrderService.
 */
class OrderService
{
    public static function getStoreSchedulesSorted($storeId)
    {
        $storeSchedules = DB::table("store_schedules")
            ->where("store_id", $storeId)
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
        $storeSchedules = $storeSchedules->sortBy("day_number")->values();

        return $storeSchedules;
    }
    public static function filterDeliveryDate($request)
    {

        $delivery_date =  Carbon::parse($request->delivery_date)->locale("en");

        $storeSchedules = self::getStoreSchedulesSorted($request->store_id);

        $avaibleDaysCount = $storeSchedules
            ->where("store_id", $request->store_id)
            ->where("status", "on")
            ->count();

        $current = Carbon::now()->locale("en");

        $currentStoreDay = $storeSchedules->where("day_name", $current->dayName)->where("order_time_status", "on")->first();


        if ($avaibleDaysCount > 1)
            if ($currentStoreDay != null)
                if ($current->toTimeString() > $currentStoreDay->store_orders_closing_time && $current->copy()->addDay()->toDateString() == $delivery_date->toDateString()) {
                    $index = ($storeSchedules->search(function ($schedule) use ($delivery_date) {
                        return $schedule->day_name == $delivery_date->dayName;
                    }) + 1) % 7;
                    while ($index < 7) {
                        $delivery_date->addDay();
                        if ($storeSchedules[$index]->status == "on") {
                            break;
                        }

                        $index++;
                        $index = $index % 7;
                    }
                }
        $availableDay =  self::getAvailableOrderDeliveryDay($storeSchedules, $request->store_id, $delivery_date->copy());
        return $availableDay;
        // return $delivery_date->toDateString();
    }
    public static function getAvailableOrderDeliveryDay($daysList, $storeId, $deliveryDate = null)
    {
        $daysListCount = count($daysList);
        $startDayIndex = $daysList->search(function ($schedule) use ($deliveryDate) {
            return $schedule->day_name == $deliveryDate->dayName;
        });
        $store = Store::find($storeId);

        if ($store->orders_limit < 1 || $store->orders_limit == null)
            return $deliveryDate->copy()->toDateString();

        if ($store->unlimited_orders != 1) {
            while ($startDayIndex < $daysListCount) {
                if ($daysList[$startDayIndex]->status == "on") {

                    $ordersCount =  DB::table("orders")
                        ->where("store_id", $storeId)
                        ->whereDate("delivery_date", $deliveryDate->toDateString())
                        ->whereNotNull("payment_status")
                        ->where(function ($q) {
                            $q->where("order_status", "Pending")
                                ->orWhere("order_status", "Confirmed");
                        })
                        ->count("delivery_date");

                    if ($store->orders_limit > $ordersCount) {
                        break;
                    }
                }

                $startDayIndex++;
                $startDayIndex = $startDayIndex % $daysListCount;
                $deliveryDate->addDay();
            }
        }

        return $deliveryDate->copy()->toDateString();
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
