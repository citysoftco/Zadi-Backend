<?php

namespace App\Http\Controllers\CityAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\ImageStoragePicker;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\CityAdUser as CityAdmin;
use App\Models\WebSettings;
use App\Models\Cities;
use App\Models\Address;
use App\Models\MapSettings;
use App\Models\MapBoxData;
use App\Models\GMapsData;
use App\Models\ServiceArea;
use App\Models\Stores;
use App\Models\Town;
use App\Models\IdTypes;
use Session;
use Auth;

class AreaController extends Controller
{
    use AuthenticatesUsers, ImageStoragePicker;

    public function __construct()
    {
        $this->middleware('guest:cityadmin');
    }

    public function cityAdAreaList(Request $request)
    {
        $logo = WebSettings::first();
        $url_aws = $this->getImageStorage();
        $cityadmin = CityAdmin::select('id', 'cityadmin_name as name', 'cityadmin_image as image', 'cityadmin_phone', 'email')
                        ->where('email', Auth::guard('cityadmin')->user()->email)
                        ->firstOrFail();
        $city = Town::select('*')
                    ->join('city', 'society.city_id', '=', 'city.city_id')        
                    ->paginate(15);
        return view('cityadmin.area.arealist', compact('logo', 'url_aws', 'cityadmin', 'city'));
    }

    public function cityAdAreaAdd(Request $request)
    {
        $logo = WebSettings::first();
        $url_aws = $this->getImageStorage();
        $cityadmin = CityAdmin::select('id', 'cityadmin_name as name', 'cityadmin_image as image', 'cityadmin_phone', 'email')
                        ->where('email', Auth::guard('cityadmin')->user()->email)
                        ->firstOrFail();
        $city = Cities::select('*')
                        ->paginate(15);
        $area = ServiceArea::select('ser_id as area_id', 'society_name as area_name')
                        ->get();
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
        return view('cityadmin.area.areadd', compact('logo', 'url_aws', 'cityadmin', 'city', 'area', 'mapset', 'server_key')); 
    }

    public function cityAdAreaNew(Request $request)
    {
        $this->validate(
            $request,
            [
                'society' => 'required',
            ],
            [
                'society.required' => 'Society Name Required',
            ]
        );
        $society = $request->society;
        $city = $request->city;

        $check = Town::where('society_name', $society)->first();

        if($check) {
            return redirect()->back()->withErrors(trans('keywords.Already Added'));
        }

        $town = new Town;
        $town->society_name = $society;
        $town->city_id = $city;
        $town->save();
        if($town){
            $stores_in_town = Stores::select('id')
                                    ->where('city_id', $city)
                                    ->get();
            
            foreach($stores_in_town as $store){    
                ServiceArea::create([
                        'society_name' => $society,
                        'society_id' => $town->id,
                        'store_id' => $store->id,
                        'city_id' => $city
                ]);
            }
            return redirect()->back()->withSuccess(trans('keywords.Added Successfully'));
        } else {
            return redirect()->back()->withSuccess(trans('keywords.Error_creating_record'));
        }
    }

    public function cityAdAreaEdit(Request $request)
    {
        $society_id = $request->id;
        $logo = WebSettings::first();
        $url_aws = $this->getImageStorage();
        $cityadmin = CityAdmin::select('id', 'cityadmin_name as name', 'cityadmin_image as image', 'cityadmin_phone', 'email')
                        ->where('email', Auth::guard('cityadmin')->user()->email)
                        ->firstOrFail();
        $town = Town::where('society_id', $society_id)->first();
        $city = Cities::where('city_id', $town->city_id)->first();
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

        return view('cityadmin.area.areaedit', compact('logo', 'url_aws', 'cityadmin', 'mapset', 'city', 'town', 'server_key'));
    }

    public function cityAdAreaUpdate(Request $request)
    {
         $this->validate(
            $request,
            [
                'society' => 'required',
            ],
            [
                'society.required' => 'Society Name Required',
            ]
        );

        $id = $request->id;
        $society = $request->society;
        $city = $request->city;

        $check_record = Town::select('society_name')->where('society_name', '=', $society)
                            ->where('society_id', '!=', $id)
                            ->first();

        if($check_record) return redirect()->back()->withErrors(trans('keywords.Already Added'));

        $town = Town::where('society_id', $id)->update(['society_name' => $society]);

        if($town){
            $service_area = ServiceArea::where('society_id', $id)->update(['society_name'=> $society]);
            
            if($service_area){
                $address = Address::where('society_id', $id)->get();
                if(count($address)>0){
                    $address = Address::where('society_id', $id)->update(['society_name'=> $society]);
                }
                return redirect()->back()->withSuccess(trans('keywords.Updated Successfully'));
            }else{
                return redirect()->back()->withErrors(trans('keywords.Error_updating_record'));
            }    
        } else {
            return redirect()->back()->withErrors(trans('keywords.Error_updating_record'));
        }
    }

    public function cityAdAreaDelete(Request $request)
    {
        $id = $request->id;
        $town_deleted = Town::where('society_id', $id)->delete();
        if($town_deleted){
            $service_area = ServiceArea::where('society_id', $id)->delete();
            if($service_area){
                $address = Address::where('society_id', $id)->get();
                if(count($address)>0){
                    $address = Address::where('society_id', $id)->delete();
                }
                return redirect()->back()->withSuccess(trans('keywords.Deleted sucessfully'));
            } else {
                return redirect()->back()->withErrors(trans('keywords.Error_deleting_record'));    
            }
        } else {
            return redirect()->back()->withErrors(trans('keywords.Error_deleting_record'));
        }
    }
}
