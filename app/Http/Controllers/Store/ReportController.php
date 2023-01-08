<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Auth;
use DB;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function purchasesReport()
    {
        $store = Auth::guard('store')->user();
        $logo = DB::table('tbl_web_setting')
            ->where('set_id', '1')
            ->first();

        $orders = DB::table("store_orders")
            ->join("orders", "store_orders.order_cart_id", "=", "orders.cart_id")
            ->join("product_varient", "store_orders.varient_id", "=", "product_varient.varient_id")
            ->join("product", "product_varient.product_id", "=", "product.product_id")
            ->join("categories", "product.cat_id", "=", "categories.cat_id")
            ->where("store_orders.store_id", Auth::guard("store")->id())
            ->where("orders.order_status", "Confirmed")
            ->where("orders.delivery_date", ">", now())

            // ->where()
            ->orderBy("store_order_id", "desc")
            ->get([
                "store_orders.product_name",
                "store_orders.qty",
                "store_orders.unit",
                "store_orders.price as total_price",
                "product_varient.base_price",
                "categories.title as category_name"
            ]);
        // dd($orders);
        return view("store.reports.purchases_report", compact("store", 'logo', "orders"));
    }
}
