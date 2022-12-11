<?php

namespace App\Http\Controllers\Admin;

use App\Traits\ImageStoragePicker;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;
use Auth;

class PagesController extends Controller
{
    use ImageStoragePicker;

    public function about_us(Request $request)
    {
        $title = "About Us";
        $admin_email = Auth::guard('admin')->user()->email;
        $admin = DB::table('admin')
            ->leftJoin('roles', 'admin.role_id', '=', 'roles.role_id')
            ->where('admin.email', $admin_email)
            ->first();
        $logo = DB::table('tbl_web_setting')
            ->where('set_id', '1')
            ->first();
        $check = DB::table('aboutuspage')
            ->first();
        $url_aws = $this->getImageStorage();
        return view('admin.about_us', compact('title', "admin", "logo", "check", "url_aws"));
    }

    public function updateabout_us(Request $request)
    {
        $title = "About Us";
        $description = $request->description;
        $check = DB::table('aboutuspage')
            ->first();

        if ($check) {
            $update = DB::table('aboutuspage')
                ->update(['description' => $description]);
        } else {
            $update = DB::table('aboutuspage')
                ->insert(['title' => $title,
                    'description' => $description]);
        }
        if ($update) {
            return redirect()->back()->withSuccess(trans('keywords.Updated successfully'));
        } else {
            return redirect()->back()->withErrors(trans('keywords.Something Wents Wrong'));
        }
    }

    public function terms(Request $request)
    {
        $title = "Terms & Condition";
        $admin_email = Auth::guard('admin')->user()->email;
        $admin = DB::table('admin')
            ->leftJoin('roles', 'admin.role_id', '=', 'roles.role_id')
            ->where('admin.email', $admin_email)
            ->first();
        $logo = DB::table('tbl_web_setting')
            ->where('set_id', '1')
            ->first();
        $check = DB::table('termspage')
            ->first();
        $url_aws = $this->getImageStorage();
        return view('admin.terms', compact('title', "admin", "logo", "check", "url_aws"));
    }

    public function updateterms(Request $request)
    {
        $title = "Terms & Condition";
        $description = $request->description;
        $check = DB::table('termspage')
            ->first();

        if ($check) {
            $update = DB::table('termspage')
                ->update(['description' => $description]);
        } else {
            $update = DB::table('termspage')
                ->insert(['title' => $title,
                    'description' => $description]);
        }
        if ($update) {
            return redirect()->back()->withSuccess(trans('keywords.Updated successfully'));
        } else {
            return redirect()->back()->withErrors(trans('keywords.Something Wents Wrong'));
        }
    }
}
