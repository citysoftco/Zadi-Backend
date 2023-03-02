<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreImageRequest;
use App\Http\Requests\UpdateImageRequest;
use App\Models\Image;
use Auth;
use DB;
use Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Images";
        $admin_email = Auth::guard('admin')->user()->email;
        $admin = DB::table('admin')
            ->leftJoin('roles', 'admin.role_id', '=', 'roles.role_id')
            ->where('admin.email', $admin_email)
            ->first();
        $logo = DB::table('tbl_web_setting')
            ->where('set_id', '1')
            ->first();


        $images  = Image::latest()->paginate(5);

        return view('admin.images.index', compact('title', "admin", "logo", "images"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Subscription Plans";
        $admin_email = Auth::guard('admin')->user()->email;
        $admin = DB::table('admin')
            ->leftJoin('roles', 'admin.role_id', '=', 'roles.role_id')
            ->where('admin.email', $admin_email)
            ->first();
        $logo = DB::table('tbl_web_setting')
            ->where('set_id', '1')
            ->first();



        return view('admin.images.add', compact('title', "admin", "logo"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreImageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreImageRequest $request)
    {
        $data = $request->validated();

        $imageName = time() . "-" . $request->file("image")->getClientOriginalName();
        $data["path"] = $request->file("image")->storeAs("images/gallary", $imageName, "public");
        $image =  Image::create($data);


        session()->flash("success", __("keywords.Added Successfully"));
        return redirect()->route("admin-images.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit($imageId)
    {
        $title = "Subscription Plans";
        $admin_email = Auth::guard('admin')->user()->email;
        $admin = DB::table('admin')
            ->leftJoin('roles', 'admin.role_id', '=', 'roles.role_id')
            ->where('admin.email', $admin_email)
            ->first();
        $logo = DB::table('tbl_web_setting')
            ->where('set_id', '1')
            ->first();
        $image = Image::findOrFail($imageId);
        return view('admin.images.edit', compact('title', "admin", "logo", "image"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateImageRequest  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateImageRequest $request, $imageId)
    {
        $data = $request->validated();

        if ($request->image) {
            $imageName = time() . "-" . $request->file("image")->getClientOriginalName();
            $data["path"] = $request->file("image")->storeAs("images/gallary", $imageName, "public");
        }
        $image =  Image::findOrFail($imageId);
        $image->update($data);

        session()->flash("success", __("keywords.Updated Successfully"));
        return redirect()->route("admin-images.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy($imageId)
    {
        $image = Image::findOrFail($imageId);
        $image->delete();
        session()->flash("success", __("keywords.Deleted Successfully"));
        return redirect()->route("admin-images.index");
    }
}
