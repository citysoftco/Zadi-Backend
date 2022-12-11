<?php

namespace App\Http\Controllers\CityAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Traits\ImageStoragePicker;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\CityAdUser as CityAdmin;
use App\Models\WebSettings;
use App\Models\MapSettings;
use App\Models\MapBoxData;
use App\Models\GMapsData;
use App\Models\Cities;
use App\Models\IdTypes;
use App\Models\ServiceArea;
use App\Models\Town;
use App\Models\Stores;
use App\Models\StoreCityAdmin;
use App\Models\StoreOrders;
use App\Models\StoreProducts;
use App\Models\StoreNotification;
use App\Models\Orders;
use Session;
use Auth;
class CityAdStoreController extends Controller
{
    use AuthenticatesUsers, ImageStoragePicker;

    public function __construct()
    {
        $this->middleware('guest:cityadmin');
    }

    public function cityAdStoreList(Type $var = null)
    {
        $logo = WebSettings::first();
        $url_aws = $this->getImageStorage();
        $cityadmin = CityAdmin::select('id', 'cityadmin_name as name', 'cityadmin_image as image', 'cityadmin_phone', 'email')
                        ->where('email', Auth::guard('cityadmin')->user()->email)
                        ->firstOrFail();
        $city = StoreCityAdmin::select('*')
                                ->join('store', 'stores_cityadmin.store_id', '=', 'store.id', "left")                        
                                ->where('stores_cityadmin.is_assigned', '1')
                                ->where('stores_cityadmin.cityadmin_owner', $cityadmin->id)
                                ->paginate(10);
        return view('cityadmin.store.storeclist', compact('logo', 'url_aws', 'cityadmin', 'city'));
    }

    public function cityAdStoreAdd(Request $request)
    {
        $logo = WebSettings::first();
        $url_aws = $this->getImageStorage();
        $cityadmin = CityAdmin::select('id', 'cityadmin_name as name', 'cityadmin_image as image', 'cityadmin_phone', 'email')
                        ->where('email', Auth::guard('cityadmin')->user()->email)
                        ->firstOrFail();
        $city = Cities::all();
        $id = IdTypes::all();
        $mapset = MapSettings::select('mapbox', 'google_map')->firstOrFail();
        if($mapset) {
            if($mapset->mapbox==1){
              $server_key = MapBoxData::select('mapbox_api')->firstOrFail();
              $server_key = $server_key->mapbox_api;
            } else {
              $server_key = GMapsData::select('map_api_key')->firstOrFail();
              $server_key = $server_key->map_api_key;
            }
        }
        return view('cityadmin.store.storeadd', compact('logo', 'url_aws', 'cityadmin', 'city', 'id', 'mapset', 'server_key'));
    }

    public function cityAdStoreAddNew(Request $request)
    {
         $this->validate(
            $request,
            [
                'store_name' => 'required',
                'emp_name' => 'required',
                'number' => 'required',
                'range' => 'required',
                'address' => 'required',
                'start_time' => 'required',
                'end_time' => 'required',
                'interval' => 'required',
                'email' => 'required',
                'password' => 'required',
                'image' => 'required|mimes:jpeg,png,jpg|max:1000',
                'orders' => 'required',
                'id_name' => 'required',
                'id_numb' => 'required',
                'id_img' => 'required|mimes:jpeg,png,jpg|max:1000',
            ],
            [
                'store_name.required' => 'Store Name Required',
                'emp_name.required' => 'Employee Name Required',
                'number.required' => 'Phone Number Required',
                'range.required' => 'Enter delivery range',
                'start_time.required' => 'Enter Start time',
                'end_time.required' => 'Enter End time',
                'interval.required' => 'Enter Timeslot Interval',
                'address.required' => 'Enter store address',
                'email.required' => 'E-mail Address Required',
                'password.required' => 'Password Required',
                'image.required' => 'Image Required',
                'orders.required' => 'Enter Orders Per Slot',
                'id_name.required' => 'Select ID',
                'id_numb.required' => 'Insert ID number',
                'id_img.required' => 'Insert ID Photo'
            ]
        );

        $number = $request->number;
        $email = $request->email;
        $store_exists = Store::select('phone_number', 'email')
                             ->where('phone_number', $number)
                             ->orWhere('email', $email)
                             ->first();

        if($store_exists){
            if(($store_exists->phone_number==$number)&&($store_exists->email==$email)){
                return redirect()->back()->withErrors(trans('keywords.This Phone Number and Email Are Already Registered With Another Store'));
            } else if($store_exists->phone_number==$number){
                return redirect()->back()->withErrors(trans('keywords.This Phone Number is Already Registered With Another Store'));
            } else if($store_exists->email==$email){
                return redirect()->back()->withErrors(trans('keywords.This Email is Already Registered With Another Store'));
            }else{
                return redirect()->back()->withErrors(trans('keywords.Something Wents Wrong'));
            }
        }

        $city = Cities::where("city_name", $request->city)->first();
        if(!$city) return redirect()->back()->withErrors(trans('keywords.City_missing'));

        $address = str_replace(" ", "+", $request->address);
        $address1 = str_replace("-", "+", $address);

        if(!isset($lat)||(!isset($lng))){
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

        if ($request->hasFile('image')) {
            $image = $request->image;
            $fileName = $image->getClientOriginalName();
            $fileName = str_replace(" ", "-", $fileName);
            $this->getImageStorage();

            if ($this->storage_space != "same_server") {
                $image_name = $image->getClientOriginalName();
                $image = $request->file('image');
                $filePath = '/store/' . $image_name;
                Storage::disk($this->storage_space)->put($filePath, fopen($request->file('image'), 'r+'), 'public');
            } else {
                $image->move('images/store/' . $date . '/', $fileName);
                $filePath = '/images/store/' . $date . '/' . $fileName;
            }
        } else {
            return redirect()->back()->withErrors(trans('keywords.Image Required'));
        }

        if ($request->hasFile('id_img')) {
            $id_img = $request->id_img;
            $fileName11 = $id_img->getClientOriginalName();
            $fileName11 = str_replace(" ", "-", $fileName11);

            $this->getImageStorage();

            if ($this->storage_space != "same_server") {
                $image_name = $id_img->getClientOriginalName();
                $id_img = $request->file('id_img');
                $filePath11 = '/store/' . $image_name;
                Storage::disk($this->storage_space)->put($filePath11, fopen($request->file('id_img'), 'r+'), 'public');
            } else {
                $id_img->move('images/store/' . $date . '/', $fileName);
                $filePath11 = '/images/store/' . $date . '/' . $fileName;
            }
        } else {
            return redirect()->back()->withErrors(trans('keywords.Image Required'));
        }

        $city_id = $city->city_id;
        $id_name = $request->id_name;
        $id_img = $request->id_img;
        $id_numb = $request->id_numb;
        $range = $request->range;
        $password = Hash::make($request->password);
        $orders_per_slot = $request->orders;
        $share = $request->share;
        $discount = str_replace("%", '', $share);

        $start_time = $request->start_time;
        $end_time = $request->end_time;
        $interval = $request->interval;
        $date = date('d-m-Y');
        $store_name = $request->store_name;
        $emp_name = $request->emp_name;

        $store = new Store;
        $store->store_name = $store_name;
        $store->employee_name  = $emp_name;
        $store->phone_number   = $number;
        $store->store_photo= $filePath;
        $store->city   = $city->name;
        $store->city_id= $city_id;
        $store->admin_share= $discount;
        $store->email  = $email;
        $store->password   = $password;
        $store->del_range  = $range;
        $store->lat= $lat;
        $store->lng= $lng;
        $store->address= $address1;
        $store->store_opening_time = $start_time;
        $store->store_closing_time = $end_time;
        $store->time_interval  = $interval;
        $store->orders = $orders_per_slot;
        $store->id_type = $id_name;
        $store->id_number = $id_numb;
        $store->id_photo = $filePath11;
        $store->save();

        if($store){
            $towns = Town::where('city_id', $city_id)->get();
            $cityadmin = CityAdmin::select('id')
                        ->where('email', Auth::guard('cityadmin')->user()->email)
                        ->firstOrFail();

            foreach($towns as $town){
                ServiceArea::create([
                    'store_id' => $store->id,
                    'society_name' => $town->society_name,
                    'society_id' => $town->society_id,
                    'delivery_charge' => 0,
                    'added_by' => $cityadmin->id,
                    'city_id' => $city_id
                ]);
            }
            return redirect()->back()->withSuccess(trans('keywords.Added Successfully'));
        }else{
            return redirect()->back()->withErrors(trans('keywords.Something Wents Wrong'));
        }
    }

    public function cityAdStoreEdit(Request $request)
    {
        $store_id = $request->id;
        $logo = WebSettings::first();
        $url_aws = $this->getImageStorage();
        $cityadmin = CityAdmin::select('id', 'cityadmin_name as name', 'cityadmin_image as image', 'cityadmin_phone', 'email')
                        ->where('email', Auth::guard('cityadmin')->user()->email)
                        ->firstOrFail();
        $city = Cities::all();
        $id = IdTypes::all();
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
        $store = Stores::where('id', $store_id)->firstOrFail();
        return view('cityadmin.store.storeedit', compact('logo', 'url_aws', 'cityadmin', 'city', 'id', 'mapset', 'server_key', 'store'));
    }

    public function cityAdStoreUpdate(Request $request)
    {
        $id = $request->id;
        $this->validate(
            $request,
            [
                'store_name' => 'required',
                'emp_name' => 'required',
                'number' => 'required',
                'range' => 'required',
                'address' => 'required',
                'start_time' => 'required',
                'end_time' => 'required',
                'interval' => 'required',
                'email' => 'required',
                'password' => 'required',
                'orders' => 'required',
                'id_name' => 'required',
                'id_numb' => 'required'
            ],
            [
                'store_name.required' => 'Store Name Required',
                'emp_name.required' => 'Employee Name Required',
                'number.required' => 'Phone Number Required',
                'range.required' => 'Enter delivery range',
                'start_time.required' => 'Enter Start time',
                'end_time.required' => 'Enter End time',
                'interval.required' => 'Enter Timeslot Interval',
                'address.required' => 'Enter store address',
                'email.required' => 'E-mail Address Required',
                'password.required' => 'Password Required',
                'orders.required' => 'Enter Orders Per Slot',
                'id_name.required' => 'Select ID',
                'id_numb.required' => 'Insert ID number'
            ]
        );

        $number = $request->number;
        $email = $request->email;
        $store = Store::select('store_photo', 'password', 'id_photo')
                             ->where('id', $id)
                             ->first();
        $city = Cities::where("city_name", $request->city)->first();
        $old_pass = $store->password;
        if($request->password !== $old_pass){
            $password=Hash::make($request->password);
        }else{
            $password = $old_pass;
        }

        if(!$city) return redirect()->back()->withErrors(trans('keywords.City_missing'));

        $address = str_replace(" ", "+", $request->address);
        $address1 = str_replace("-", "+", $address);

        if(!isset($lat)||(!isset($lng))){
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

        $image = $store->store_photo;
        $date = date('d-m-Y');
        if ($request->hasFile('image')) {
            $this->validate(
                $request,
                [
                    'image' => 'required|mimes:jpeg,png,jpg|max:1000',
                ],
                [
                    'image.required' => 'Choose Store image.',
                ]
            );

            if (file_exists($image)) {
                unlink($image);
            }
            $image = $request->image;
            $fileName = $image->getClientOriginalName();
            $fileName = str_replace(" ", "-", $fileName);

            if ($this->storage_space != "same_server") {
                $image_name = $image->getClientOriginalName();
                $image = $request->file('image');
                $filePath = '/store/' . $image_name;
                Storage::disk($this->storage_space)->put($filePath, fopen($request->file('image'), 'r+'), 'public');
            } else {
                $image->move('images/store/' . $date . '/', $fileName);
                $filePath = '/images/store/' . $date . '/' . $fileName;
            }
        } else {
            $filePath = $image;
        }

        if ($request->hasFile('id_img')) {
            $this->validate(
                $request,
                [
                    'id_img' => 'required|mimes:jpeg,png,jpg|max:1000',
                ],
                [
                    'id_img.required' => 'Choose ID image.',
                ]
            );
            $id_img = $request->id_img;
            $fileName11 = $id_img->getClientOriginalName();
            $fileName11 = str_replace(" ", "-", $fileName11);

            if ($this->storage_space != "same_server") {
                $image_name = $id_img->getClientOriginalName();
                $id_img = $request->file('id_img');
                $filePath11 = '/store/' . $image_name;
                Storage::disk($this->storage_space)->put($filePath11, fopen($request->file('id_img'), 'r+'), 'public');
            } else {
                $id_img->move('images/store/' . $date . '/', $fileName11);
                $filePath11 = '/images/store/' . $date . '/' . $fileName11;
            }
        } else {
            $filePath11 = $store->id_photo;
        }

        $share = $request->share;
        $store_name = $request->store_name;
        $emp_name = $request->emp_name;
        $id_name = $filePath;
        $id_img = $filePath11;
        $id_numb = $request->id_numb;

        $range = $request->range;
        $orders_per_slot = $request->orders;
        $start_time = $request->start_time;
        $end_time = $request->end_time;
        $interval = $request->interval;

        $updated = Store::where('id', $id)->update([
            'store_name'        => $store_name,
            'employee_name'     => $emp_name,
            'phone_number'      => $number,
            'store_photo'       => $filePath,
            'city'              => $city->name,
            'city_id'           => $city_id,
            'admin_share'       => $discount,
            'email'             => $email,
            'password'          => $password,
            'del_range'         => $range,
            'lat'               => $lat,
            'lng'               => $lng,
            'address'           => $address1,
            'store_opening_time'=> $start_time,
            'store_closing_time'=> $end_time,
            'time_interval'     => $interval,
            'orders'            => $orders_per_slot,
            'id_type'           => $id_name,
            'id_number'         => $id_numb,
            'id_photo'          => $filePath11,
        ]);
        if($updated){
            return redirect()->back()->withSuccess(trans('keywords.Updated Successfully'));
        } else {
            return redirect()->back()->withErrors(trans('keywords.Something Wents Wrong'));
        }
    }

    public function cityAdStoreDelete(Request $request)
    {
        $store_id = $request->id;
        $delete = Stores::where('id', $store_id)->delete();
        if($delete){
            StoreProducts::where('store_id', $store_id)->delete();
            Orders::where('store_id', $store_id)->delete();
            StoreOrders::where('store_id', $store_id)->delete();
            StoreNotification::where('store_id', $store_id)->delete();
            return redirect()->back()->withSuccess(trans('keywords.Updated Successfully'));
        } else {
            return redirect()->back()->withErrors(trans('keywords.Something Wents Wrong'));
        }
    }

    public function cityAdStoreOrdersToday(Request $request)
    {
        /* if(isset($request->id)){

        } else {

        } */
        $logo = WebSettings::first();
        $url_aws = $this->getImageStorage();
        $cityadmin = CityAdmin::select('id', 'cityadmin_name as name', 'cityadmin_image as image', 'cityadmin_phone', 'email')
                        ->where('email', Auth::guard('cityadmin')->user()->email)
                        ->firstOrFail();
        $ord = Orders::select('*')
                        ->join('store', 'orders.store_id', '=', 'store.id')
                        ->join('address', 'orders.address_id', '=', 'address.address_id')
                        ->join('delivery_boy', 'orders.dboy_id', '=', 'delivery_boy.dboy_id')
                        ->join('users', 'orders.user_id', '=', 'users.id')
                        ->orderBy('orders.delivery_date', 'DESC')
                        ->where('order_status', 'completed')
                        ->orWhere('order_status', 'Completed')
                        ->paginate(25);
        $details = Orders::where('store_orders.store_approval', 1)
                            ->join('store_orders', 'orders.cart_id', '=', 'store_orders.order_cart_id')
                            ->get();
        
        return view('cityadmin.store.orders', compact('logo', 'url_aws', 'cityadmin', 'ord', 'details'));
    }
}
