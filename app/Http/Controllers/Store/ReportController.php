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
        // dd($store);
        return view("store.reports.purchases_report", compact("store", 'logo'));
    }
}
