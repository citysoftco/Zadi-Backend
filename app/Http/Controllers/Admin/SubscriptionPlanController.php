<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSubscriptionPlanRequest;
use App\Http\Requests\UpdateSubscriptionPlanRequest;
use App\Models\SubscriptionPlan;
use Auth;
use DB;

class SubscriptionPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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


        $subscriptions = DB::table('subscription_plans')->get();

        return view('admin.subscription_plans.index', compact('title', "admin", "logo", "subscriptions"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Create Subscription Plans";
        $admin_email = Auth::guard('admin')->user()->email;
        $admin = DB::table('admin')
            ->leftJoin('roles', 'admin.role_id', '=', 'roles.role_id')
            ->where('admin.email', $admin_email)
            ->first();
        $logo = DB::table('tbl_web_setting')
            ->where('set_id', '1')
            ->first();



        return view('admin.subscription_plans.add', compact('title', "admin", "logo"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSubscriptionPlanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubscriptionPlanRequest $request)
    {
        $data = $request->validated();
        if ($request->image) {
            $imageName = time() . "-" . $request->file("image")->getClientOriginalName();
            $data["image"] = $request->file("image")->storeAs("images/plans", $imageName, "public");
        }

        $subscriptionPlan =  SubscriptionPlan::create($data);

        return redirect()->route("subscription-plans.index")->withSuccess(__("keywords.Added Successfully"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubscriptionPlan  $subscriptionPlan
     * @return \Illuminate\Http\Response
     */
    public function show(SubscriptionPlan $subscriptionPlan)
    {
        $title = "Create Subscription Plans";
        $admin_email = Auth::guard('admin')->user()->email;
        $admin = DB::table('admin')
            ->leftJoin('roles', 'admin.role_id', '=', 'roles.role_id')
            ->where('admin.email', $admin_email)
            ->first();
        $logo = DB::table('tbl_web_setting')
            ->where('set_id', '1')
            ->first();



        return view('admin.subscription_plans.edit', compact('title', "admin", "logo", "subscriptionPlan"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubscriptionPlan  $subscriptionPlan
     * @return \Illuminate\Http\Response
     */
    public function edit(SubscriptionPlan $subscriptionPlan)
    {
        $title = "Create Subscription Plans";
        $admin_email = Auth::guard('admin')->user()->email;
        $admin = DB::table('admin')
            ->leftJoin('roles', 'admin.role_id', '=', 'roles.role_id')
            ->where('admin.email', $admin_email)
            ->first();
        $logo = DB::table('tbl_web_setting')
            ->where('set_id', '1')
            ->first();



        return view('admin.subscription_plans.edit', compact('title', "admin", "logo", "subscriptionPlan"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubscriptionPlanRequest  $request
     * @param  \App\Models\SubscriptionPlan  $subscriptionPlan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubscriptionPlanRequest $request, SubscriptionPlan $subscriptionPlan)
    {
        $data = $request->validated();
        if ($request->image) {
            $imageName = time() . "-" . $request->file("image")->getClientOriginalName();
            $data["image"] = $request->file("image")->storeAs("images/plans", $imageName, "public");
        }

        $subscriptionPlan->update($data);

        return redirect()->route("subscription-plans.index")->withSuccess(__("keywords.Added Successfully"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubscriptionPlan  $subscriptionPlan
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubscriptionPlan $subscriptionPlan)
    {
        $subscriptionPlan->delete();

        return back()->withSuccess(__("keywords.Deleted Successfully"));
    }
}
