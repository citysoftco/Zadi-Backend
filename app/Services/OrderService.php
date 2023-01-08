<?php

namespace App\Services;

use Auth;
use DB;

/**
 * Class OrderService.
 */
class OrderService
{
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
            ->orderBy("store_order_id", "desc")
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
