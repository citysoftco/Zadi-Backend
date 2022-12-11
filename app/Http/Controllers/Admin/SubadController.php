<?php

namespace App\Http\Controllers\Admin;

use App\Traits\ImageStoragePicker;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;
use Hash;
use Carbon\Carbon;
use Auth;

class SubadController extends Controller
{
    use ImageStoragePicker;

    public function sub(Request $request)
    {
        $admin_email = Auth::guard('admin')->user()->email;
        $admin = DB::table('admin')
            ->leftJoin('roles', 'admin.role_id', '=', 'roles.role_id')
            ->where('admin.email', $admin_email)
            ->first();
        $logo = DB::table('tbl_web_setting')
            ->where('set_id', '1')
            ->first();


        $sub = DB::table('roles')
            ->paginate(10);

        $url_aws = $this->getImageStorage();

        return view('admin.sub.index', compact("admin_email", "sub", "admin", "logo", "url_aws"));
    }

    public function add(Request $request)
    {
        $admin_email = Auth::guard('admin')->user()->email;
        $admin = DB::table('admin')
            ->leftJoin('roles', 'admin.role_id', '=', 'roles.role_id')
            ->where('admin.email', $admin_email)
            ->first();
        $logo = DB::table('tbl_web_setting')
            ->where('set_id', '1')
            ->first();
        $url_aws = $this->getImageStorage();

        return view('admin.sub.add', compact("admin_email", "admin", "logo", "url_aws"));
    }

    public function addnew(Request $request)
    {
        $name = $request->name;
        $dashboard = $request->dashboard;
        $tax = $request->tax;
        $id = $request->id;
        $membership = $request->membership;
        $reports = $request->reports;
        $notification = $request->notification;
        $users = $request->users;
        $category = $request->category;
        $product = $request->product;
        $area = $request->area;
        $store = $request->store;
        $orders = $request->orders;
        $payout = $request->payout;
        $rewards = $request->rewards;
        $delivery_boy = $request->delivery_boy;
        $pages = $request->pages;
        $feedback = $request->feedback;
        $callback = $request->callback;
        $settings = $request->settings;
        $reason = $request->reason;
        $created_at = Carbon::now();

        if ($reason == "") {
            $reason = 0;
        }

        if ($dashboard == "") {
            $dashboard = 0;
        }

        if ($tax == "") {
            $tax = 0;
        }

        if ($id == "") {
            $id = 0;
        }

        if ($category == "") {
            $category = 0;
        }

        if ($membership == "") {
            $membership = 0;
        }

        if ($reports == "") {
            $reports = 0;
        }

        if ($notification == "") {
            $notification = 0;
        }

        if ($users == "") {
            $users = 0;
        }

        if ($product == "") {
            $product = 0;
        }

        if ($area == "") {
            $area = 0;
        }

        if ($store == "") {
            $store = 0;
        }

        if ($orders == "") {
            $orders = 0;
        }

        if ($payout == "") {
            $payout = 0;
        }

        if ($delivery_boy == "") {
            $delivery_boy = 0;
        }

        if ($rewards == "") {
            $rewards = 0;
        }

        if ($pages == "") {
            $pages = 0;
        }

        if ($feedback == "") {
            $feedback = 0;
        }

        if ($callback == "") {
            $callback = 0;
        }


        if ($settings == "") {
            $settings = 0;
        }

        $this->validate(
            $request,
            [
                'name' => 'required',
            ],
            [
                'name.required' => 'Role Name Required',
            ]
        );

        $insert = DB::table('roles')
            ->insertGetId(['role_name' => $name,
                'dashboard' => $dashboard,
                'tax' => $tax,
                'category' => $category,
                'id' => $id,
                'membership' => $membership,
                'reports' => $reports,
                'notification' => $notification,
                'users' => $users,
                'product' => $product,
                'area' => $area,
                'store' => $store,
                'orders' => $orders,
                'payout' => $payout,
                'rewards' => $rewards,
                'delivery_boy' => $delivery_boy,
                'pages' => $pages,
                'feedback' => $feedback,
                'callback' => $callback,
                'notification' => $notification,
                'settings' => $settings,
                'reason' => $reason]);

        return redirect()->back()->withErrors('Added Successfully');
    }

    public function edit(Request $request)
    {

        $id = $request->id;

        $admin_email = Auth::guard('admin')->user()->email;
        $admin = DB::table('admin')
            ->leftJoin('roles', 'admin.role_id', '=', 'roles.role_id')
            ->where('admin.email', $admin_email)
            ->first();
        $logo = DB::table('tbl_web_setting')
            ->where('set_id', '1')
            ->first();
        $sub = DB::table('roles')
            ->where('role_id', $id)
            ->first();
        $url_aws = $this->getImageStorage();

        return view('admin.sub.edit', compact("sub", "id", "admin", "admin_email", "logo", "url_aws"));
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $sub = DB::table('roles')
            ->where('role_id', $id)
            ->first();
        $name = $request->name;
        $dashboard = $request->dashboard;
        $tax = $request->tax;
        $id = $request->id;
        $membership = $request->membership;
        $reports = $request->reports;
        $notification = $request->notification;
        $users = $request->users;
        $category = $request->category;
        $product = $request->product;
        $area = $request->area;
        $store = $request->store;
        $orders = $request->orders;
        $payout = $request->payout;
        $rewards = $request->rewards;
        $delivery_boy = $request->delivery_boy;
        $pages = $request->pages;
        $feedback = $request->feedback;
        $callback = $request->callback;
        $settings = $request->settings;
        $reason = $request->reason;
        $created_at = Carbon::now();

        if ($reason == "") {
            $reason = 0;
        }

        if ($dashboard == "") {
            $dashboard = 0;
        }

        if ($tax == "") {
            $tax = 0;
        }

        if ($id == "") {
            $id = 0;
        }

        if ($category == "") {
            $category = 0;
        }

        if ($membership == "") {
            $membership = 0;
        }

        if ($reports == "") {
            $reports = 0;
        }

        if ($notification == "") {
            $notification = 0;
        }

        if ($users == "") {
            $users = 0;
        }

        if ($product == "") {
            $product = 0;
        }

        if ($area == "") {
            $area = 0;
        }

        if ($store == "") {
            $store = 0;
        }

        if ($orders == "") {
            $orders = 0;
        }

        if ($payout == "") {
            $payout = 0;
        }

        if ($delivery_boy == "") {
            $delivery_boy = 0;
        }

        if ($rewards == "") {
            $rewards = 0;
        }

        if ($pages == "") {
            $pages = 0;
        }

        if ($feedback == "") {
            $feedback = 0;
        }

        if ($callback == "") {
            $callback = 0;
        }


        if ($settings == "") {
            $settings = 0;
        }

        $this->validate(
            $request,
            [

                'name' => 'required',


            ],
            [

                'name.required' => 'Role Name Required',
            ]
        );


        $this->validate(
            $request,
            [

                'name' => 'required',

            ],
            [

                'name.required' => 'Role Name Required',
            ]
        );

        $insert = DB::table('roles')
            ->where('role_id', $id)
            ->update(['role_name' => $name,
                'dashboard' => $dashboard,
                'tax' => $tax,
                'category' => $category,
                'id' => $id,
                'membership' => $membership,
                'reports' => $reports,
                'notification' => $notification,
                'users' => $users,
                'product' => $product,
                'area' => $area,
                'store' => $store,
                'orders' => $orders,
                'payout' => $payout,
                'rewards' => $rewards,
                'delivery_boy' => $delivery_boy,
                'pages' => $pages,
                'feedback' => $feedback,
                'callback' => $callback,
                'notification' => $notification,
                'settings' => $settings,
                'reason' => $reason]);


        return redirect()->back()->withErrors('Updated Successfully');

    }

    public function delete(Request $request)
    {
        $id = $request->id;

        $delete = DB::table('roles')->where('role_id', $id)->delete();

        if ($delete) {
            $delete = DB::table('admin')->where('role_id', $id)->delete();

            return redirect()->back()->withErrors('delete successfully');

        } else {
            return redirect()->back()->withErrors('unsuccessfull delete');
        }
    }
}
