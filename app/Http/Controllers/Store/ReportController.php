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

        $orders =
            OrderService::getPurchasesByDate(Auth::guard("store")->id(), now(), now()->addDays(1));
        return view("store.reports.purchases_report", compact("store", 'logo', "orders"));
    }
}
