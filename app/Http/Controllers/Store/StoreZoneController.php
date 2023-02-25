<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStoreZoneRequest;
use App\Http\Requests\UpdateStoreZoneRequest;
use App\Models\Store;
use App\Models\StoreZone;
use App\Services\StoreZoneService;
use Auth;
use DB;
use Grimzy\LaravelMysqlSpatial\Types\LineString;
use Grimzy\LaravelMysqlSpatial\Types\Point;
use Grimzy\LaravelMysqlSpatial\Types\Polygon;

class StoreZoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logo = DB::table('tbl_web_setting')
            ->where('set_id', '1')
            ->first();

        $storeId = Auth::guard("store")->id();
        $zones = StoreZoneService::getAllZonesPaginated($storeId);
        $store = Store::find($storeId);
        return view("store.zones.list", compact("store", "zones", "logo"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $store = Store::find(Auth::guard("store")->id());
        $logo = DB::table('tbl_web_setting')
            ->where('set_id', '1')
            ->first();
        return view("store.zones.create", compact("store", "logo"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStoreZoneRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStoreZoneRequest $request)
    {

        $data = $request->validated();
        foreach (explode('),(', trim($data["coordinates"], '()')) as $index => $single_array) {
            if ($index == 0) {
                $lastcord = explode(',', $single_array);
            }
            $coords = explode(',', $single_array);
            $polygon[] = new Point($coords[0], $coords[1]);
        }
        $polygon[] = new Point($lastcord[0], $lastcord[1]);
        $data["coordinates"] = new Polygon([new LineString($polygon)]);
        $data["store_id"] = Auth::guard("store")->id();
        $zone =   StoreZone::create($data);

        return redirect()->route("store-zones.index")->withSuccess(trans('keywords.Added Successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StoreZone  $storeZone
     * @return \Illuminate\Http\Response
     */
    public function show(StoreZone $storeZone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StoreZone  $storeZone
     * @return \Illuminate\Http\Response
     */
    public function edit(StoreZone $storeZone)
    {
        $store = Store::find(Auth::guard("store")->id());
        $logo = DB::table('tbl_web_setting')
            ->where('set_id', '1')
            ->first();
        $zone = $storeZone;
        return view("store.zones.edit", compact("store", "logo", "zone"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStoreZoneRequest  $request
     * @param  \App\Models\StoreZone  $storeZone
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStoreZoneRequest $request, StoreZone $storeZone)
    {
        $data = $request->validated();
        if (isset($data["coordinates"])) {
            foreach (explode('),(', trim($data["coordinates"], '()')) as $index => $single_array) {
                if ($index == 0) {
                    $lastcord = explode(',', $single_array);
                }
                $coords = explode(',', $single_array);
                $polygon[] = new Point($coords[0], $coords[1]);
            }
            $polygon[] = new Point($lastcord[0], $lastcord[1]);
            $data["coordinates"] = new Polygon([new LineString($polygon)]);
        } else
            unset($data["coordinates"]);
        $data["store_id"] = Auth::guard("store")->id();
        $storeZone->update($data);

        return back()->withSuccess(trans('keywords.Updated Successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StoreZone  $storeZone
     * @return \Illuminate\Http\Response
     */
    public function destroy(StoreZone $storeZone)
    {
        $storeZone->delete();
        return back()->withSuccess(trans('keywords.Deleted Successfully'));
    }
}
