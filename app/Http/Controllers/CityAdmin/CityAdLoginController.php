<?php

namespace App\Http\Controllers\CityAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Traits\ImageStoragePicker;
use App\Models\WebSettings;
use Auth;
use Session;
use Hash;

class CityAdLoginController extends Controller
{
    use AuthenticatesUsers;
    use ImageStoragePicker;

    protected $redirectTo = 'cityadmin';

    public function __construct()
    {
        $this->middleware('guest:cityadmin')->except('logout');
    } 
    
    public function cityAdLogin(Request $request){
        if(Auth::guard('cityadmin')->check()){
            return redirect()->route('cityadhome');
        } else {
            $logo = WebSettings::first();
            $url_aws = $this->getImageStorage();
            return view('cityadmin.auth.login', compact('url_aws', 'logo'));
        }
    }

    public function cityAdGetCheckLogin()
    {
        return redirect()->route('cityadmin-login')->withErrors(trans('keywords.Enter Credentials'));
    }

    public function cityAdCheckLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        
        if(Auth::guard('cityadmin')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
            return redirect()->route('cityadhome');
        }else{
            return redirect()->back()->withErrors(trans('keywords.User or Password Incorrect'));
        }
    }

    public function cityAdLogOut()
    {
        Auth::guard('cityadmin')->logout();
        return redirect()->route('cityadmin-login')->withErrors(trans('keywords.logged out'));
    }

    protected function guard()
    {
        return Auth::guard('cityadmin');
    }
}
