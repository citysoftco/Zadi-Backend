<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Traits\ImageStoragePicker;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\CityAdUser as CityAdmin;
use App\Models\WebSettings;
use App\Models\Admin;
use App\Models\MapSettings;
use App\Models\MapBoxData;
use App\Models\GMapsData;
use App\Models\Cities;
use App\Models\IdTypes;
use App\Models\Stores;
use App\Models\StoreCityAdmin;
use Auth;
use Session;
use Hash;

class CityAdminController extends Controller
{
    use AuthenticatesUsers, ImageStoragePicker;

    public function cityAdminList(Request $request)
    {
        $logo = WebSettings::first();
        $url_aws = $this->getImageStorage();
        $admin_email = Auth::guard('admin')->user()->email;
        $admin = Admin::select('*')
                        ->join("roles", "admin.role_id", "=", "roles.role_id", "left")
                        ->where('admin.email', $admin_email)
                        ->first();
        $cityadminers = CityAdmin::select('id', 'cityadmin_name as name', 'cityadmin_image as image', 'cityadmin_phone as phone', 'email', 'cityadmin_address as address')
                                  ->paginate(15);
        return view('admin.cityadmin.list', compact('logo', 'url_aws', 'admin', 'cityadminers'));
    }

    public function cityAdminAdd(Request $request)
    {
        $logo = WebSettings::first();
        $url_aws = $this->getImageStorage();
        $admin_email = Auth::guard('admin')->user()->email;
        $admin = Admin::select('*')
                        ->join("roles", "admin.role_id", "=", "roles.role_id", "left")
                        ->where('admin.email', $admin_email)
                        ->first();
        $city = Cities::all();
        $id_types = IdTypes::all();
        $stores = Stores::all();
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
        return view('admin.cityadmin.add', compact('logo', 'url_aws', 'admin', 'city', 'id_types', 'mapset', 'server_key', 'stores'));
    }

    public function cityAdminNew(Request $request)
    {
        $this->validate($request,[
            'name'         => 'required',
            'phone'        => 'required',
            'email'        => 'required',
            'city'         => 'required',
            'id_type'      => 'required',
            'id_number'    => 'required',
            'address'      => 'required',
            'images'        => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        
        $name = $request->name;
        $phone = $request->phone;
        $email = $request->email;
        $password = Hash::make($request->password);
        $city = $request->city;
        $id_number = $request->id_number;
        $id_type = $request->id_type;
        $date = date('d-m-Y');
        $stores = $request->selectedstore;
        if($stores == NULL) return redirect()->back()->withErrors(trans('keywords.Please Select any Store(s)'));

        $cityadmin_record=CityAdmin::select('id')->where('email', $email)->first();
        if($cityadmin_record) return redirect()->back()->withErrors('User existant under that email. Provide a new one');

        if ($request->hasFile('images')) {
            $image = $request->images;
            $fileName = $image->getClientOriginalName();
            $fileName = str_replace(" ", "-", $fileName);

            $this->getImageStorage();

            if ($this->storage_space != "same_server") {
                $image_name = $image->getClientOriginalName();
                $image = $request->file('images');
                $filePath = '/cityadmin/' . $image_name;
                Storage::disk($this->storage_space)->put($filePath, fopen($request->file('images'), 'r+'), 'public');
            } else {
                $image->move('images/cityadmin/' . $date . '/', $fileName);
                $filePath = '/images/cityadmin/' . $date . '/' . $fileName;
            }
        } else {
            return redirect()->back()->withErrors('Image missing. Complete required fields before continuing');
        }
        $address = str_replace(" ", "+", $request->address);
        $address1 = str_replace("-", "+", $address);
        $lat = $request->lat;
        $lng = $request->lng;

        $mapset = MapSettings::select('mapbox', 'google_map')->firstOrFail();
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

        $cityadminer = new CityAdmin();
        $cityadminer->city_id = $city;
        $cityadminer->cityadmin_name = $name;
        $cityadminer->cityadmin_image = $filePath;
        $cityadminer->cityadmin_phone = $phone;
        $cityadminer->email = $email;
        $cityadminer->password = $password;
        $cityadminer->status = '1';
        $cityadminer->cityadmin_address = $address1;
        $cityadminer->device_id = 'n/a';
        $cityadminer->lat = $lat;
        $cityadminer->lng = $lng;
        $cityadminer->id_type = $id_type;
        $cityadminer->id_no = $id_number;
        $cityadminer->id_photo = $filePath;
        $cityadminer->save();

        if($cityadminer){
            foreach($stores as $store){
                StoreCityAdmin::create([
                    'cityadmin_owner' => $cityadminer->id,
                    'store_id'=> $store,
                ]);
            }
            return redirect()->back()->withSuccess(trans('keywords.Added Successfully'));
        }else{
            return redirect()->back()->withErrors(trans('keywords.Something Wents Wrong'));
        }
    }

    public function cityAdminEdit(Request $request)
    {
        $logo = WebSettings::first();
        $url_aws = $this->getImageStorage();
        $admin_email = Auth::guard('admin')->user()->email;
        $admin = Admin::select('*')
                        ->join("roles", "admin.role_id", "=", "roles.role_id", "left")
                        ->where('admin.email', $admin_email)
                        ->first();
        $cityadminers = CityAdmin::all()->where('id', $request->id)->first();
        $city = Cities::all();
        $id_types = IdTypes::all();
        $stores = Stores::all();
        $assigned_stores = StoreCityAdmin::all()->where('cityadmin_owner', $request->id)
                                                ->where('is_assigned', '1');
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
        return view('admin.cityadmin.edit', compact('logo', 'url_aws', 'admin', 'cityadminers', 'city', 'id_types', 'stores', 'aci', 'mapset', 'server_key'));
    }

    public function cityAdminUpdate(Request $request)
    {
        $this->validate($request,[
            'name'         => 'required',
            'phone'        => 'required',
            'email'        => 'required',
            'city'         => 'required',
            'id_type'      => 'required',
            'id_number'    => 'required',
            'address'      => 'required',
            'images'        => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        
        $id_adminer = $request->id;
        $name = $request->name;
        $phone = $request->phone;
        $email = $request->email;
        $password = $request->password;
        $pass = CityAdmin::where('email', $email)
                          ->where('password', $password)
                          ->first();

        if(!$pass){
            $password = Hash::make($password);
        }

        $city = $request->city;
        $id_number = $request->id_number;
        $id_type = $request->id_type;

        $stores = $request->selectedstore;
        if($stores == NULL) return redirect()->back()->withErrors(trans('keywords.Please Select any Store(s)'));
        $date = date('d-m-Y');
        if ($request->hasFile('images')) {
            $image = $request->images;
            $fileName = $image->getClientOriginalName();
            $fileName = str_replace(" ", "-", $fileName);

            $this->getImageStorage();

            if ($this->storage_space != "same_server") {
                $image_name = $image->getClientOriginalName();
                $image = $request->file('images');
                $filePath = '/cityadmin/' . $image_name;
                Storage::disk($this->storage_space)->put($filePath, fopen($request->file('images'), 'r+'), 'public');
            } else {
                $image->move('images/cityadmin/' . $date . '/', $fileName);
                $filePath = '/images/cityadmin/' . $date . '/' . $fileName;
            }
        } else {
            return redirect()->back()->withErrors(trans('keywords.Image Required'));
        }

        $address = str_replace(" ", "+", $request->address);
        $address1 = str_replace("-", "+", $address);
        $lat = $request->lat;
        $lng = $request->lng;

        $mapset = MapSettings::select('mapbox', 'google_map')->firstOrFail();
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

        $cityadminer = CityAdmin::where('id', $id_adminer)->update([
            'city_id' => $city,
            'cityadmin_name' => $name,
            'cityadmin_image' => $filePath,
            'cityadmin_phone' => $phone,
            'email' => $email,
            'password' => $password,
            'status' => '1',
            'cityadmin_address' => $address1,
            'device_id' => 'n/a',
            'lat' => $lat,
            'lng' => $lng,
            'id_type' => $id_type,
            'id_no' => $id_number,
            'id_photo' => $filePath,
        ]);
        
        if($cityadminer){
            $stores_assigned=StoreCityAdmin::all()->where('cityadmin_owner', $id_adminer);
            if($stores_assigned){
                StoreCityAdmin::where('cityadmin_owner', $id_adminer)->update([
                    'is_assigned'=> '0'
                ]);

                foreach($stores as $selstores){
                    StoreCityAdmin::where('cityadmin_owner', $id_adminer)
                                         ->where('store_id', $selstores)
                                         ->update([
                                            'is_assigned' => '1'
                                         ]);               
                }
                return redirect()->back()->withSuccess(trans('keywords.Updated sucessfully'));    
            }else{
                return redirect()->back()->withErrors(trans('keywords.Something Wents Wrong'));
            }
            return redirect()->back()->withSuccess(trans('keywords.Updated sucessfully'));
        }else{
            return redirect()->back()->withErrors(trans('keywords.Something Wents Wrong'));
        }
    }

    public function cityAdminDelete(Request $request)
    {
        $cityadminer_id = $request->id;
        $delete_asigned_stores = StoreCityAdmin::where('cityadmin_owner', $cityadminer_id)->delete();

        if($delete_asigned_stores){
            $cityadmin_delete = CityAdmin::where('id', $cityadminer_id)->delete();
            return redirect()->back()->withSuccess(trans('keywords.Deleted Successfully'));
        }else{
            return redirect()->back()->withErrors(trans('keywords.Something Wents Wrong'));
        }
    }

    public function cityAdminSecretLogin(Request $request)
    {
        
    }
}