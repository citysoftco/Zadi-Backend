<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Models\Store;
use App\Services\OrderService;
use Auth;
use Carbon\Carbon;
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

        $fromDate = date('Y-m-d', now()->timestamp);
        $toDate = date('Y-m-d', now()->addDays(1)->timestamp);

        $orders =
            OrderService::getPurchasesByDate(Auth::guard("store")->id(), $fromDate, $toDate);
        return view("store.reports.purchases_report", compact("store", 'logo', "orders", "fromDate", "toDate"));
    }
    public function showPurchasesReport(Request $request)
    {
        $store = Auth::guard('store')->user();
        $logo = DB::table('tbl_web_setting')
            ->where('set_id', '1')
            ->first();


        $orders =
            OrderService::getPurchasesByDate(Auth::guard("store")->id(), $request->from_date, $request->to_date);
        $fromDate = $request->from_date;
        $toDate = $request->to_date;

        $orders =
            OrderService::getPurchasesByDate(Auth::guard("store")->id(), $fromDate, $toDate);
        return view("store.reports.purchases_report", compact("store", 'logo', "orders", "fromDate", "toDate"));
    }
}
