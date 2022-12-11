<?php

namespace App\Http\Controllers\CityAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Traits\ImageStoragePicker;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\CityAdUser as CityAdmin;
use App\Models\WebSettings;
use App\Models\CountryCode;
use App\Models\Cities;
use App\Models\IdTypes;
use App\Models\MapSettings;
use App\Models\MapBoxData;
use App\Models\GMapsData;
/* use App\Models\DriverIncentive; */
use App\Models\DeliveryBoy;
use App\Models\ServiceArea;
use App\Models\DeliveryBoyStores;
use App\Models\Stores;
use App\Models\Currency;
use App\Models\AdminDriverIncentive;
use Session;
use Auth;

class CityAdDBoyController extends Controller
{
    use AuthenticatesUsers, ImageStoragePicker;

    public function __construct()
    {
        $this->middleware('guest:cityadmin');
    }

    public function cityAdDBoyList(Request $request)
    {
        $logo = WebSettings::first();
        $url_aws = $this->getImageStorage();
        $cityadmin = CityAdmin::select('id', 'cityadmin_name as name', 'cityadmin_image as image', 'cityadmin_phone', 'email')
                        ->where('email', Auth::guard('cityadmin')->user()->email)
                        ->firstOrFail();
        $delivery_boy = DeliveryBoy::where('added_by', strval($cityadmin->id))->paginate(10);
        return view('cityadmin.dboy.list', compact('logo', 'url_aws', 'cityadmin', 'delivery_boy'));
    }

    public function cityAdDBoyAdd(Request $request)
    {
        $logo = WebSettings::first();
        $url_aws = $this->getImageStorage();
        $cityadmin = CityAdmin::select('cityadmin_name as name', 'cityadmin_image as image', 'cityadmin_phone', 'email')
                        ->where('email', Auth::guard('cityadmin')->user()->email)
                        ->firstOrFail();
        $area = ServiceArea::select('ser_id as area_id', 'society_name as area_name')
                        ->get();
        $stores = Stores::select('id', 'store_name')
                        ->get();
        $city = Cities::all();
        $id_types = IdTypes::all();
        $mapset = MapSettings::select('mapbox', 'google_map')->firstOrFail();
        if($mapset) {
            if($mapset->mapbox==1){
              $server_key = MapBoxData::select('mapbox_api')->firstOrFail();  
              $server_key = $server_key->mapbox_api;
            } else {
              $server_key =  GMapsData::select('map_api_key')->firstOrFail();
              $server_key = $server_key->map_api_key;
            }
        }
        return view('cityadmin.dboy.add', compact('logo', 'url_aws', 'cityadmin', 'city', 'area', 'stores', 'mapset', 'server_key', 'id_types'));
    }
    
    public function cityAdDBoyAddNew(Request $request)
    {
        $this->validate($request,[
            'boy_name'         => 'required',
            'boy_phone'        => 'required',
            'password'                 => 'required',
            'images'        => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        
        $name = $request->boy_name;
        $phone = $request->boy_phone;
        $password = $request->password;
        $boy_loc = $request->boy_loc;
        $id_number = $request->id_number;
        $id_type = $request->id_type;
        $city = $request->city;
        $date = date('d-m-Y');
        if ($request->hasFile('images')) {
            $image = $request->images;
            $fileName = $image->getClientOriginalName();
            $fileName = str_replace(" ", "-", $fileName);

            $this->getImageStorage();

            if ($this->storage_space != "same_server") {
                $image_name = $image->getClientOriginalName();
                $image = $request->file('images');
                $filePath = '/dboy/' . $image_name;
                Storage::disk($this->storage_space)->put($filePath, fopen($request->file('images'), 'r+'), 'public');
            } else {
                $image->move('images/dboy/' . $date . '/', $fileName);
                $filePath = '/images/dboy/' . $date . '/' . $fileName;
            }
        } else {
            return redirect()->back()->withErrors('Image missing. Complete required fields before continuing');
        }
        $address = str_replace(" ", "+", $boy_loc);
        $address1 = str_replace("-", "+", $address);
        $lat = $request->lat;
        $lng = $request->lng;

        $cityadmin = CityAdmin::select('id')
                        ->where('email', Auth::guard('cityadmin')->user()->email)
                        ->firstOrFail();
        $mapset = MapSettings::select('mapbox', 'google_map')->firstOrFail();
        $delivery_boy_record = DeliveryBoy::select('dboy_id')
                                         ->where('boy_phone', $phone)->first();

        if($delivery_boy_record) return redirect()->back()->withErrors(trans('keywords.This Phone Number Is Already Registered With Another Delivery Boy'));

        $stores = $request->selectedstore;
        if($stores == NULL) return redirect()->back()->withErrors(trans('keywords.Please Select any Store(s)'));

        if(!isset($lat)||(!isset($lng))){
            if($mapset->google_map==1){
                $server_key =  GMapsData::select('map_api_key')->firstOrFail();
                $server_key = $server_key->map_api_key;
                $response = json_decode(file_get_contents("https://maps.googleapis.com/maps/api/geocode/json?address=" . urlencode($address1) . "&key=" . $server_key));
                $lat = $response->results[0]->geometry->location->lat;
                $lng = $response->results[0]->geometry->location->lng;
            }else{
                return redirect()->back()->withErrors(trans('keywords.Error Validating Address'));
            }
        }

        $delivery_boy = new DeliveryBoy;
        $delivery_boy->boy_name = $name;
        $delivery_boy->boy_phone = $phone;
        $delivery_boy->password = $password;
        $delivery_boy->boy_loc = $boy_loc;
        $delivery_boy->lat = $lat;    
        $delivery_boy->lng = $lng;
        $delivery_boy->status = 1;
        $delivery_boy->id_no = $id_number;
        $delivery_boy->id_name = $id_type;
        $delivery_boy->boy_city = $city;
        $delivery_boy->store_id = 0;
        $delivery_boy->store_dboy_id = 0;
        $delivery_boy->added_by = $cityadmin->id;    
        $delivery_boy->id_photo= $filePath;
        $delivery_boy->save();
        
        if($delivery_boy){
            foreach($stores as $store){
                DeliveryBoyStores::create([
                    'boy_name'  =>  $name, 
                    'boy_phone' =>  $phone,
                    'boy_city'  =>  $city,
                    'password'  =>  $password,
                    'boy_loc'   =>  $boy_loc,
                    'lat'       =>  $lat,
                    'lng'       =>  $lng,
                    'status'    =>  1,
                    'store_id'  =>  $store,
                    'added_by'  =>  $cityadmin->id,
                    'ad_dboy_id'=>  $delivery_boy->dboy_id,
                    'id_no'     =>  $id_number,
                    'id_photo'  =>  $filePath,
                    'id_name'   =>  $id_type
                ]);
            }
            return redirect()->back()->withSuccess(trans('keywords.Added Successfully'));
        } else {
            return redirect()->back()->withErrors(trans('keywords.Something Wents Wrong'));
        }
    }
    
    public function cityAdDBoyEdit(Request $request)
    {
        $logo = WebSettings::first();
        $url_aws = $this->getImageStorage();
        $cityadmin = CityAdmin::select('id', 'cityadmin_name as name', 'cityadmin_image as image', 'cityadmin_phone', 'email')
                        ->where('email', Auth::guard('cityadmin')->user()->email)
                        ->firstOrFail();
        $d_boy = DeliveryBoy::all()->where('dboy_id', $request->id)
                                  ->first();
        $assigned_stores = DeliveryBoyStores::all()
                                            ->where('added_by', $cityadmin->id)
                                            ->where('ad_dboy_id', $d_boy->dboy_id);
        $area = ServiceArea::select('ser_id as area_id', 'society_name as area_name')
                        ->get();
        $stores = Stores::all();
        $city = Cities::all();
        $id_types = IdTypes::all();
        $mapset = MapSettings::select('mapbox', 'google_map')->firstOrFail();
        if($mapset) {
            if($mapset->mapbox==1){
              $server_key = MapBoxData::select('mapbox_api')->firstOrFail();  
              $server_key = $server_key->mapbox_api;
            } else {
              $server_key =  GMapsData::select('map_api_key')->firstOrFail();
              $server_key = $server_key->map_api_key;
            }
        }
        if (count($assigned_stores) > 0) {
            foreach ($assigned_stores as $assigned_storess) {
                $aci[] = $assigned_storess->store_id;
            }
        } else {
            $aci = array();
        }
        return view('cityadmin.dboy.edit', compact('logo', 'url_aws', 'cityadmin', 'd_boy', 'aci', 'city', 'area', 'stores', 'mapset', 'server_key', 'id_types'));
    }
    
    public function cityAdDBoyUpdate(Request $request)
    {
        $this->validate($request,[
            'boy_name'         => 'required',
            'boy_phone'        => 'required',
            'password'         => 'required',
            'image'           => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $id = $request->id;
        $name = $request->boy_name;
        $phone = $request->boy_phone;
        $password = $request->password;
        $boy_loc = $request->boy_loc;
        $id_number = $request->id_number;
        $id_type = $request->id_type;
        $city = $request->city;
        $date = date('d-m-Y');
        if ($request->hasFile('image')) {
            $image = $request->image;
            $fileName = $image->getClientOriginalName();
            $fileName = str_replace(" ", "-", $fileName);

            $this->getImageStorage();

            if ($this->storage_space != "same_server") {
                $image_name = $image->getClientOriginalName();
                $image = $request->file('image');
                $filePath = '/dboy/' . $image_name;
                Storage::disk($this->storage_space)->put($filePath, fopen($request->file('image'), 'r+'), 'public');
            } else {
                $image->move('images/dboy/' . $date . '/', $fileName);
                $filePath = '/images/dboy/' . $date . '/' . $fileName;
            }
        } else {
            return redirect()->back()->withErrors(trans('keywords.Image Required'));
        }
        $address = str_replace(" ", "+", $boy_loc);
        $address1 = str_replace("-", "+", $address);
        $lat = $request->lat;
        $lng = $request->lng;

        $cityadmin = CityAdmin::select('id')
                        ->where('email', Auth::guard('cityadmin')->user()->email)
                        ->firstOrFail();
        $mapset = MapSettings::select('mapbox', 'google_map')->firstOrFail();
        
        $stores = $request->selectedstore;
        if($stores == NULL) return redirect()->back()->withErrors(trans('keywords.Please Select any Store(s)'));

        if(!isset($lat)||(!isset($lng))){
            if($mapset->google_map==1){
                $server_key =  GMapsData::select('map_api_key')->firstOrFail();
                $server_key = $server_key->map_api_key;
                $response = json_decode(file_get_contents("https://maps.googleapis.com/maps/api/geocode/json?address=" . urlencode($address1) . "&key=" . $server_key));
                $lat = $response->results[0]->geometry->location->lat;
                $lng = $response->results[0]->geometry->location->lng;
            }else{
                return redirect()->back()->withErrors(trans('keywords.Error Validating Address'));
            }
        }

        $delivery_boy=DeliveryBoy::where('dboy_id', $id)->update([
            'boy_name'  => $name,
            'boy_phone' => $phone,
            'password'  => $password,
            'boy_loc'   => $boy_loc,
            'lat'       => $lat,    
            'lng'       => $lng,
            'status'    => 1,
            'id_no'     => $id_number,
            'id_name'   => $id_type,
            'boy_city'  => $city,   
            'id_photo'  => $filePath,
        ]);
        
        if($delivery_boy){
            foreach($stores as $store){
                DeliveryBoyStores::where('store_id', $store)->update([
                    'boy_name'  =>  $name, 
                    'boy_phone' =>  $phone,
                    'boy_city'  =>  $city,
                    'password'  =>  $password,
                    'boy_loc'   =>  $boy_loc,
                    'lat'       =>  $lat,
                    'lng'       =>  $lng,
                    'status'    =>  1,
                    'id_no'     =>  $id_number,
                    'id_photo'  =>  $filePath,
                    'id_name'   =>  $id_type,
                ]);
            }
            return redirect()->back()->withSuccess(trans('keywords.Updated sucessfully'));
        } else {
            return redirect()->back()->withErrors(trans('keywords.Something Wents Wrong'));
        }
    }
    
    public function cityAdDBoyDelete(Request $request)
    {
        $dboy_id = $request->id;
        $dboy_record = DeliveryBoy::select('dboy_id')
                                         ->where('dboy_id', $dboy_id)->delete();
        if($dboy_record){
            $dboy_stores_record = DeliveryBoyStores::select('ad_dboy_id')
                                                    ->where('ad_dboy_id', $dboy_id)->delete();
            return redirect()->back()->withSuccess(trans('keywords.Deleted Successfully'));
        } else {
            return redirect()->back()->withErrors(trans('keywords.Record Not Found'));
        }
    }

    public function cityAdDBoyListCommision(Request $request)
    {
        $logo = WebSettings::first();
        $url_aws = $this->getImageStorage();
        $cityadmin = CityAdmin::select('id', 'cityadmin_name as name', 'cityadmin_image as image', 'cityadmin_phone', 'email')
                        ->where('email', Auth::guard('cityadmin')->user()->email)
                        ->firstOrFail();
        $currency = Currency::first();
        $incentive = AdminDriverIncentive::first();
        /* Keep for further implementation (cityadmin.dboy.comlist)
            $delivery_boy = DriverIncentive::select('*')
                                    ->join('delivery_boy', 'delivery_boy.dboy_id', '=', 'driver_incentive.dboy_id', 'right outer')
                                    ->where('added_by', strval($cityadmin->id))->paginate(10); */
        return view('cityadmin.dboy.incentive', compact('logo', 'url_aws', 'cityadmin', 'currency', 'incentive'));
    }   

    public function cityAdDBoyAddCommision(Request $request)
    {
        $this->validate($request,[
            'incentive'         => 'required',
        ]);
        $incentive = $request->incentive;
        $update = AdminDriverIncentive::where('id', 1)->update([
            'incentive'=> $incentive
        ]);
        if($update){
          return redirect()->back()->withSuccess(trans('keywords.Updated sucessfully'));
        } else {
            return redirect()->back()->withErrors(trans('keywords.Something Wents Wrong'));
        }
    }

}
