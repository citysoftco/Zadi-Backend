<?php

namespace App\Http\Controllers\Admin;

use App\Traits\ImageStoragePicker;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;
use Auth;
use Illuminate\Support\Facades\Storage;

class SubController extends Controller
{
    use ImageStoragePicker;

    public function list(Request $request)
    {
        $title = "Sub Category List";
        $admin_email = Auth::guard('admin')->user()->email;
        $admin = DB::table('admin')
            ->leftJoin('roles', 'admin.role_id', '=', 'roles.role_id')
            ->where('admin.email', $admin_email)
            ->first();
        $logo = DB::table('tbl_web_setting')
            ->where('set_id', '1')
            ->first();

        $category = DB::table('categories')
            ->leftJoin('categories as catt', 'categories.parent', '=', 'catt.cat_id')
            ->select('categories.*', 'catt.title as tttt')
            ->where('categories.level', 1)
            ->paginate(100);

        $adminTopApp = DB::table('categories')
            ->get();

        $url_aws = $this->getImageStorage();

        return view('admin.category.sub.index', compact('title', "admin", "logo", "category", "adminTopApp", "url_aws"));
    }

    public function AddCategory(Request $request)
    {
        $title = "Add Category";
        $admin_email = Auth::guard('admin')->user()->email;

        $admin = DB::table('admin')
            ->leftJoin('roles', 'admin.role_id', '=', 'roles.role_id')
            ->where('admin.email', $admin_email)
            ->first();
        $logo = DB::table('tbl_web_setting')
            ->where('set_id', '1')
            ->first();
        $category = DB::table('categories')
            ->where('level', 0)
            ->get();

        $url_aws = $this->getImageStorage();

        return view('admin.category.sub.add', compact("category", "admin_email", "logo", "admin", "title", "url_aws"));
    }

    public function EditCategory(Request $request)
    {
        $category_id = $request->category_id;
        $title = "Edit Category";
        $admin_email = Auth::guard('admin')->user()->email;;
        $admin = DB::table('admin')
            ->leftJoin('roles', 'admin.role_id', '=', 'roles.role_id')
            ->where('admin.email', $admin_email)
            ->first();
        $logo = DB::table('tbl_web_setting')
            ->where('set_id', '1')
            ->first();
        $category = DB::table('categories')
            ->where('cat_id', '!=', $category_id)
            ->get();

        $cat = DB::table('categories')
            ->where('cat_id', $category_id)
            ->first();
        $url_aws = $this->getImageStorage();

        return view('admin.category.sub.edit', compact("category", "admin_email", "admin", "logo", "cat", "title", "url_aws"));
    }

    public function DeleteCategory(Request $request)
    {
        $category_id = $request->category_id;

        $delete = DB::table('categories')->where('cat_id', $request->category_id)->delete();
        if ($delete) {
            $deleteproduct = DB::table('product')
                ->where('cat_id', $request->category_id)->delete();

            $deletechild = DB::table('categories')
                ->where('parent', $request->category_id)->delete();
            return redirect()->back()->withSuccess(trans('keywords.Deleted Successfully'));
        } else {
            return redirect()->back()->withErrors(trans('keywords.Nothing to Update'));
        }
    }

    public function add2home(Request $request)
    {
        $id = $request->id;
        $add = '2';
        $check = DB::table('categories')
            ->where('status', $add)
            ->get();


        if (count($check) < 6) {
            $update = DB::table('categories')
                ->where('cat_id', $id)
                ->update(['status' => $add]);

            if ($update) {
                return redirect()->back()->withSuccess('added to homepage');
            } else {
                return redirect()->back()->withErrors("Something wents wrong");
            }
        } else {
            return redirect()->back()->withErrors("Home category space is full");
        }
    }

    public function delfromhome(Request $request)
    {
        $id = $request->id;
        $add = '1';
        $update = DB::table('categories')
            ->where('cat_id', $id)
            ->update(['status' => $add]);

        if ($update) {
            return redirect()->back()->withSuccess('removed from homepage');
        } else {
            return redirect()->back()->withErrors("Something wents wrong");
        }
    }
}
