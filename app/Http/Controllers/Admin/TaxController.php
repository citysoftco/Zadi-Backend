<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Traits\ImageStoragePicker;
use Auth;
use DB;
use Illuminate\Http\Request;
use Session;

class TaxController extends Controller
{
    use ImageStoragePicker;

    public function taxlist(Request $request)
    {
        $title = "Tax Type List";
        $admin_email = Auth::guard('admin')->user()->email;
        $admin = DB::table('admin')
            ->leftJoin('roles', 'admin.role_id', '=', 'roles.role_id')
            ->where('admin.email', $admin_email)
            ->first();
        $logo = DB::table('tbl_web_setting')
            ->where('set_id', '1')
            ->first();

        $tax = DB::table('tax_types')
            ->get();

        $url_aws = $this->getImageStorage();

        return view('admin.tax.list', compact('title', 'tax', 'admin', 'logo', 'url_aws'));
    }

    public function tax(Request $request)
    {
        $title = "Home";
        $admin_email = Auth::guard('admin')->user()->email;
        $admin = DB::table('admin')
            ->leftJoin('roles', 'admin.role_id', '=', 'roles.role_id')
            ->where('admin.email', $admin_email)
            ->first();
        $logo = DB::table('tbl_web_setting')
            ->where('set_id', '1')
            ->first();

        $tax = DB::table('tax_types')
            ->get();

        $url_aws = $this->getImageStorage();

        return view('admin.tax.add', compact('title', 'tax', 'admin', 'logo', "url_aws"));
    }

    public function taxadd(Request $request)
    {
        $title = "Home";

        $city = $request->tax;
        $cities = strtoupper($city);

        $this->validate(
            $request,
            [
                'tax' => 'required',
            ],
            [
                'tax.required' => 'Tax type Name Required',
            ]
        );

        $insert = DB::table('tax_types')
            ->insert([
                'name' => $cities,
            ]);

        return redirect()->back()->withSuccess(trans('keywords.Added Successfully'));
    }

    public function taxedit(Request $request)
    {
        $title = "Update Tax Types";
        $admin_email = Auth::guard('admin')->user()->email;
        $admin = DB::table('admin')
            ->leftJoin('roles', 'admin.role_id', '=', 'roles.role_id')
            ->where('admin.email', $admin_email)
            ->first();
        $logo = DB::table('tbl_web_setting')
            ->where('set_id', '1')
            ->first();
        $city_id = $request->tax_id;

        $tax = DB::table('tax_types')
            ->where('tax_id', $city_id)
            ->first();
        $url_aws = $this->getImageStorage();

        return view('admin.tax.edit', compact('title', 'tax', 'admin', 'logo', 'url_aws'));
    }

    public function taxupdate(Request $request)
    {
        $title = "Update Tax Types";
        $city_id = $request->tax_id;
        $city = $request->tax;
        $cities = strtoupper($city);
        $this->validate(
            $request,
            [
                'tax' => 'required',
            ],
            [
                'tax.required' => 'Tax Type Name Required',
            ]
        );

        $check = DB::table('tax_types')
            ->where('tax_id', $city_id)
            ->first();

        $insert = DB::table('tax_types')
            ->where('tax_id', $city_id)
            ->update([
                'name' => $cities,
            ]);

        if ($insert) {
            DB::table('categories')
                ->where('tx_id', $city_id)
                ->update(['tax_name' => $cities]);

            return redirect()->back()->withSuccess(trans('keywords.Updated Successfully'));
        } else {
            return redirect()->back()->withErrors(trans('keywords.Something Wents Wrong'));
        }
    }

    public function taxdelete(Request $request)
    {
        $city_id = $request->tax_id;

        $city = DB::table('tax_types')
            ->where('tax_id', $city_id)
            ->first();

        $delete = DB::table('tax_types')->where('tax_id', $city_id)->delete();

        if ($delete) {
            return redirect()->back()->withSuccess(trans('keywords.Deleted Successfully'));
        } else {
            return redirect()->back()->withErrors(trans('keywords.Something Wents Wrong'));
        }
    }
}
