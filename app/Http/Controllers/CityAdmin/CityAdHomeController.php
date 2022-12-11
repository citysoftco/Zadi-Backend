<?php

namespace App\Http\Controllers\CityAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Traits\ImageStoragePicker;
use App\Models\WebSettings;
use App\Models\CityStatsModel;
use Illuminate\Http\Request;
use App\Models\CityAdUser as User;
use App\Models\Orders;
use App\Models\Stores;
use App\Models\StoreOrders;
use App\Models\Users;
use Carbon\carbon;
use Auth;
use Session;
use Hash;

class CityAdHomeController extends Controller
{
    use AuthenticatesUsers;
    use ImageStoragePicker;

    public function __construct()
    {
        $this->middleware('guest:cityadmin');
    } 

    public function cityHome(Request $request){
        $logo = WebSettings::first();
        $url_aws = $this->getImageStorage();
        $cityadmin = User::select('cityadmin_name as name', 'cityadmin_image as image', 'cityadmin_phone', 'email')
                        ->where('email', Auth::guard('cityadmin')->user()->email)
                        ->first();
                        
        $currentDate = Carbon::now();
        $currentDate1 = Carbon::now();
        $agoDate = $currentDate->subDays($currentDate->dayOfWeek)->subWeek();
        $from = date('Y-m-d', strtotime($agoDate));
        $nowDate = $currentDate1->subDays($currentDate1->dayOfWeek);
        $to = date('Y-m-d', strtotime($nowDate));
        $ddate = Date('Y-m-d');
        $next_date = date('Y-m-d', strtotime($ddate . ' + ' . '1' . ' days'));

        $last_week = Orders::where('order_status', "Completed")
                            ->orWhere('order_status', "completed")
                            ->whereBetween('delivery_date', [$from, $to])
                            ->sum('total_price');
        $this_week = Orders::where('order_status', "Completed")
                            ->orWhere('order_status', "completed")
                            ->whereBetween('delivery_date', [$to, $next_date])
                            ->sum('total_price');
        $difference=Orders::getOrdersIndex($last_week, $this_week);

        $last_week_ord = Orders::where('order_status', "Completed")
                            ->orWhere('order_status', "completed")
                            ->whereBetween('delivery_date', [$from, $to])
                            ->count();
        $this_week_ord = Orders::where('order_status', "!=", "Completed")
                            ->orWhere('order_status', "!=", "completed")
                            ->whereBetween('delivery_date', [$to, $next_date])
                            ->count();
        $diff_ord=Orders::getOrdersIndex($last_week_ord, $this_week_ord);
        
        $last_week_can = Orders::where('order_status', "Cancelled")
                            ->whereBetween('delivery_date', [$from, $to])
                            ->count();
        $this_week_can = Orders::where('order_status', "Cancelled")
                            ->whereBetween('delivery_date', [$to, $next_date])
                            ->count();
        $diff_can = Orders::getOrdersIndex($last_week_can, $this_week_can);

        $last_week_pen = Orders::where('order_status', "pending")
                            ->whereBetween('delivery_date', [$from, $to])
                            ->count();
        $this_week_pen = Orders::where('order_status', "pending")
                            ->whereBetween('delivery_date', [$to, $next_date])
                            ->count();
        $diff_pen = Orders::getOrdersIndex($last_week_pen, $this_week_pen);

        $last_week_usr = Users::select('id')->whereBetween('reg_date', [$from, $to])->count();

        $this_week_usr = Users::select('id')->whereBetween('reg_date', [$to, $next_date])->count();
        
        $diff_usr = Orders::getOrdersIndex($last_week_usr, $this_week_usr);

        $total_earnings = Orders::where('order_status', 'Completed')->sum('total_price');
        $today_earnings = Orders::where('order_status', 'Completed')->orWhere('delivery_date', $ddate)->sum('total_price');

        $store_earning = Stores::select()
                                ->join('orders', 'store.id', '=', 'orders.store_id')
                                ->groupBy('orders.order_status', 'store.admin_share')
                                ->where('orders.order_status', 'Completed')
                                ->where('orders.payment_method', '!=', NULL)
                                ->first();
        if($store_earning){
            if($store_earning->sumprice != NULL){
                $store_earnings = $store_earning->sumprice;
            } else {
                $store_earning = 0;
            }
        } else {
            $store_earnings = 0;
        }

        $admin_earnings = (isset($store_earnings)&&$store_earnings>0) ? $total_earnings - $store_earnings:$total_earnings;
        $date = date('Y-m-d');

        $topselling = StoreOrders::selectRaw('store_orders.store_id, store_orders.product_name, store_orders.varient_id, store_orders.varient_image, store_orders.quantity, store_orders.unit, store_orders.description, count(store_orders.varient_id) as count,SUM(store_orders.qty) as totalqty, SUM(store_orders.price) as revenue')
                                  ->join('orders', 'store_orders.order_cart_id', '=', 'orders.cart_id')
                                  ->groupBy('store_orders.store_id', 'store_orders.product_name', 'store_orders.varient_id', 'store_orders.varient_image', 'store_orders.quantity', 'store_orders.unit', 'store_orders.description')
                                  ->orderBy('count', 'desc')
                                  ->where('orders.order_status', 'Completed')
                                  ->whereBetween('orders.delivery_date', [$to, $next_date])
                                  ->limit(5)
                                  ->get();
        
        $ongoin = Orders::select('*')
                        ->join('store', 'orders.store_id', '=', 'store.id')
                        ->join('address', 'orders.address_id', '=', 'address.address_id')
                        ->join('delivery_boy', 'orders.dboy_id', '=', 'delivery_boy.dboy_id')
                        ->join('users', 'orders.user_id', '=', 'users.id')
                        ->where('orders.order_status', '!=', NULL)
                        ->where('orders.payment_method', '!=', NULL)
                        ->orderBy('orders.order_id', 'DESC')
                        ->limit(5)
                        ->get();

        $details = Orders::where('store_orders.store_approval', 1)
                        ->join('store_orders', 'orders.cart_id', '=', 'store_orders.order_cart_id')
                        ->get();

        return view('cityadmin.cityadhome', compact('logo', 'url_aws', 'cityadmin', 'total_earnings', 'store_earnings', 'admin_earnings', 'today_earnings', 'last_week', 'difference', 'this_week', 'diff_ord', 'last_week_ord', 'this_week_ord', 'last_week_can', 'this_week_can', 'diff_can', 'diff_pen', 'last_week_pen', 'this_week_pen', 'diff_usr', 'last_week_usr', 'this_week_usr', 'topselling', 'ongoin', 'to', 'next_date', 'details'));
    }
}
