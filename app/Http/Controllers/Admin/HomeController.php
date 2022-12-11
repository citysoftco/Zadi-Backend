<?php

namespace App\Http\Controllers\Admin;

use App\Traits\ImageStoragePicker;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use Session;
use Carbon\carbon;

class HomeController extends Controller
{
    use ImageStoragePicker;

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function adminHome(Request $request)
    {
        $title = "Dashboard";
        $admin_email = Auth::guard('admin')->user()->email;
        $admin = DB::table('admin')
            ->leftJoin('roles', 'admin.role_id', '=', 'roles.role_id')
            ->where('admin.email', $admin_email)
            ->first();
        $logo = DB::table('tbl_web_setting')
            ->where('set_id', '1')
            ->first();
        $currentDate = Carbon::now();
        $currentDate1 = Carbon::now();
        $agoDate = $currentDate->subDays($currentDate->dayOfWeek)->subWeek();
        $from = date('Y-m-d', strtotime($agoDate));
        $nowDate = $currentDate1->subDays($currentDate1->dayOfWeek);

        $to = date('Y-m-d', strtotime($nowDate));
        $ddate = Date('Y-m-d');
        $next_date = date('Y-m-d', strtotime($ddate . ' + ' . '1' . ' days'));

        $last_week = DB::table('orders')
            ->where('order_status', 'Completed')
            ->whereBetween('delivery_date', [$from, $to])
            ->sum('total_price');

        $this_week = DB::table('orders')
            ->where('order_status', 'Completed')
            ->whereBetween('delivery_date', [$to, $next_date])
            ->sum('total_price');
        $la = $last_week / 100;
        if ($la == 0) {
            $difference = $this_week;
        } else {
            $difference = ($this_week - $last_week) / $la;
        }

        $last_week_ord = DB::table('orders')
            ->where('order_status', 'Completed')
            ->whereBetween('delivery_date', [$from, $to])
            ->count();

        $this_week_ord = DB::table('orders')
            ->where('order_status', '!=', 'Cancelled')
            ->whereBetween('delivery_date', [$to, $next_date])
            ->count();

        $la1 = $last_week_ord / 100;
        if ($la1 == 0) {
            $diff_ord = $this_week_ord;
        } else {
            $diff_ord = ($this_week_ord - $last_week_ord) / $la1;
        }

        $last_week_can = DB::table('orders')
            ->where('order_status', 'Cancelled')
            ->whereBetween('delivery_date', [$from, $to])
            ->count();

        $this_week_can = DB::table('orders')
            ->where('order_status', 'Cancelled')
            ->whereBetween('delivery_date', [$to, $next_date])
            ->count();

        $la2 = $last_week_can / 100;
        if ($la2 == 0) {
            $diff_can = $this_week_can;
        } else {
            $diff_can = ($this_week_can - $last_week_can) / $la2;
        }

        $last_week_pen = DB::table('orders')
            ->where('order_status', 'pending')
            ->whereBetween('delivery_date', [$from, $to])
            ->count();

        $this_week_pen = DB::table('orders')
            ->where('order_status', 'pending')
            ->whereBetween('delivery_date', [$to, $next_date])
            ->count();

        $la3 = $last_week_pen / 100;
        if ($la3 == 0) {
            $diff_pen = $this_week_pen;
        } else {
            $diff_pen = ($this_week_pen - $last_week_pen) / $la3;
        }

        $last_week_usr = DB::table('users')
            ->whereBetween('reg_date', [$from, $to])
            ->count();
        $this_week_usr = DB::table('users')
            ->whereBetween('reg_date', [$to, $next_date])
            ->count();

        $la4 = $last_week_usr / 100;
        if ($la4 == 0) {
            $diff_usr = $this_week_usr;
        } else {
            $diff_usr = ($this_week_usr - $last_week_usr) / $la4;
        }

        $total_earnings = DB::table('orders')
            ->where('order_status', 'Completed')
            ->sum('total_price');


        $today_earnings = DB::table('orders')
            ->where('order_status', 'Completed')
            ->where('delivery_date', $ddate)
            ->sum('total_price');

        $store_earning = DB::table('store')
            ->join('orders', 'store.id', '=', 'orders.store_id')
            ->select(DB::raw('SUM(orders.price_without_delivery)-SUM(orders.price_without_delivery)*(store.admin_share)/100 as sumprice'))
            ->groupBy('orders.order_status', 'store.admin_share')
            ->where('orders.order_status', 'Completed')
            ->where('orders.payment_method', '!=', NULL)
            ->first();
        if ($store_earning) {
            if ($store_earning->sumprice != NULL) {
                $store_earnings = $store_earning->sumprice;
            } else {
                $store_earnings = 0;
            }
        } else {
            $store_earnings = 0;
        }

        $admin_earnings = $total_earnings - $store_earnings;

        $date = date('Y-m-d');

        $topselling = DB::table('store_orders')
            ->join('orders', 'store_orders.order_cart_id', '=', 'orders.cart_id')
            ->select('store_orders.store_id', 'store_orders.product_name', 'store_orders.varient_id', 'store_orders.varient_image', 'store_orders.quantity', 'store_orders.unit', 'store_orders.description', DB::raw('count(store_orders.varient_id) as count'), DB::raw('SUM(store_orders.qty) as totalqty'), DB::raw('SUM(store_orders.price) as revenue'))
            ->groupBy('store_orders.store_id', 'store_orders.product_name', 'store_orders.varient_id', 'store_orders.varient_image', 'store_orders.quantity', 'store_orders.unit', 'store_orders.description')
            ->orderBy('count', 'desc')
            ->where('orders.order_status', 'Completed')
            ->whereBetween('orders.delivery_date', [$to, $next_date])
            ->limit(5)
            ->get();

        $ongoin = DB::table('orders')
            ->join('store', 'orders.store_id', '=', 'store.id')
            ->join('address', 'orders.address_id', '=', 'address.address_id')
            ->join('delivery_boy', 'orders.dboy_id', '=', 'delivery_boy.dboy_id')
            ->join('users', 'orders.user_id', '=', 'users.id')
            ->where('orders.order_status', '!=', NULL)
            ->where('orders.payment_method', '!=', NULL)
            ->orderBy('orders.order_id', 'DESC')
            ->limit(5)
            ->get();

        $url_aws = $this->getImageStorage();

        $details = DB::table('orders')
            ->join('store_orders', 'orders.cart_id', '=', 'store_orders.order_cart_id')
            ->where('store_orders.store_approval', 1)
            ->get();
        return view('admin.home', compact('title', "admin", "logo", "total_earnings", "store_earnings", "admin_earnings", "today_earnings", "last_week", "difference", "this_week", "diff_ord", "last_week_ord", "this_week_ord", "last_week_can", "this_week_can", "diff_can", "diff_pen", "last_week_pen", "this_week_pen", "diff_usr", "last_week_usr", "this_week_usr", "topselling", "ongoin", "url_aws", "to", "next_date", "details"));
    }
}
