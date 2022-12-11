<?php

namespace App\Http\Controllers\CityAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\ImageStoragePicker;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\CityAdUser as CityAdmin;
use App\Models\WebSettings;
use App\Models\Users;
use App\Models\Stores;
use App\Models\UserNotification;
use App\Models\StoreNotification;
use App\Models\FCM;
use Session;
use Auth;

class CityAdNotifyController extends Controller
{
    use AuthenticatesUsers, ImageStoragePicker;

    public function cityAdNotifyUser(Request $request)
    {
        $logo = WebSettings::first();
        $url_aws = $this->getImageStorage();
        $cityadmin = CityAdmin::select('cityadmin_name as name', 'cityadmin_image as image', 'cityadmin_phone', 'email')
                        ->where('email', Auth::guard('cityadmin')->user()->email)
                        ->first();
        return view('cityadmin.notification.notifyuser', compact('logo', 'url_aws', 'cityadmin'));
    }

    public function cityAdSendNotifyUser(Request $request)
    {
        $this->validate(
            $request,
                [
                    'notification_title' => 'required',
                    'notification_text' => 'required',
                    'category_image' => 'required|mimes:jpeg,png,jpg|max:400',
             
                ],
                [
                    'notification_title.required' => 'Enter notification title.',
                    'notification_text.required' => 'Enter notification text.',
                    'category_image.required' => 'Enter Image for Notification',
                ]
        );

        $notification_title = $request->notification_title;
        $notification_text = $request->notification_text;
        $date = date('d-m-Y');
        
        if($request->hasFile('category_image')){
            $category_image = $request->category_image;
            $fileName = $category_image->getClientOriginalName();
            $fileName = str_replace(" ", "-", $fileName);
            $category_image->move('images/category/'.$date.'/', $fileName);
            $category_image = 'images/category/'.$date.'/'.$fileName;
        } else {
            $category_image = 'N/A';
        }
        
        $getDevice = Users::select('id as user_id', 'device_id')
                          ->where('device_id', '!=', null)
                          ->groupBy('device_id')
                          ->get();
        
        if(count($getDevice) == 0) return redirect()->back()->withErrors('Something Went Wrong');
        
        $FCModel = FCM::select('server_key')->first();
        $fcm_key = $FCModel->server_key;

        $send_status = 0;       // 0 - No Errors Sending, 1 - Errors while sending through FCM

        foreach($getDevice as $devices){
            $token = $devices->device_id;

            $notification = [
                'title' =>  $notification_title,
                'body'  =>  $notification_text,
                'image' =>  $category_image,
                'sound' =>  true
            ];

            $extraNotificationData = ["message" => $notification,'image' => $category_image];

            $fcmNotification = [
                'to'            => $token, //single token
                'notification'  => $notification,
                'data'          => $extraNotificationData,
                'image'         => $category_image
            ];

            $result = $FCModel->sendMessage($fcm_key, $fcmNotification);
            if($result){
                $user_notification = 
                UserNotification::create([
                    'user_id'       => $devices->user_id,
                    'noti_title'    => $notification['title'],
                    'image'         => $notification['image'],
                    'noti_message'  => $notification['body'],
                    'read_by_user'  => 0
                ]);
            } else {
                $send_status = 1;
            }
        }
        if($send_status!==0){
            return redirect()->back()->withErrors("We are sorry. Some messages couldn't reach their destination because technical difficulties. Try again later.");
        } else {
            return redirect()->back()->withSuccess('All messages were sent successfully to Users');
        }
    }

    public function cityAdNotifyVendor(Request $request)
    {
        $logo = WebSettings::first();
        $url_aws = $this->getImageStorage();
        $cityadmin = CityAdmin::select('cityadmin_name as name', 'cityadmin_image as image', 'cityadmin_phone', 'email')
                        ->where('email', Auth::guard('cityadmin')->user()->email)
                        ->first();
        return view('cityadmin.notification.notifyvendor', compact('logo', 'url_aws', 'cityadmin'));
    }

    public function cityAdSendNotifyVendor(Request $request)
    {
         $this->validate(
            $request,
                [
                    'notification_title' => 'required',
                    'notification_text' => 'required',
                    'category_image' => 'required|mimes:jpeg,png,jpg|max:400',
             
                ],
                [
                    'notification_title.required' => 'Enter notification title.',
                    'notification_text.required' => 'Enter notification text.',
                    'category_image.required' => 'Enter Image for Notification',
                ]
        );

        $notification_title = $request->notification_title;
        $notification_text = $request->notification_text;
        $date = date('d-m-Y');
        
        if($request->hasFile('category_image')){
            $category_image = $request->category_image;
            $fileName = $category_image->getClientOriginalName();
            $fileName = str_replace(" ", "-", $fileName);
            $category_image->move('images/category/'.$date.'/', $fileName);
            $category_image = 'images/category/'.$date.'/'.$fileName;
        } else {
            $category_image = 'N/A';
        }

        $getDevice = Stores::select('id as store_id', 'device_id')
                          ->where('device_id', '!=', null)
                          ->groupBy('device_id')
                          ->get();
        
         if(count($getDevice) == 0) return redirect()->back()->withErrors('Something Went Wrong');
        
        $FCModel = FCM::select('server_key')->first();
        $fcm_key = $FCModel->server_key;

        $send_status = 0;       // 0 - No Errors Sending, 1 - Errors while sending through FCM

        foreach($getDevice as $devices){
            $token = $devices->device_id;

            $notification = [
                'title' =>  $notification_title,
                'body'  =>  $notification_text,
                'image' =>  $category_image,
                'sound' =>  true
            ];

            $extraNotificationData = ["message" => $notification,'image' => $category_image];

            $fcmNotification = [
                'to'            => $token, //single token
                'notification'  => $notification,
                'data'          => $extraNotificationData,
                'image'         => $category_image
            ];

            $result = $FCModel->sendMessage($fcm_key, $fcmNotification);
            if($result){
                $store_notification = 
                StoreNotification::create([
                    'store_id'     => $devices->store_id,
                    'not_title'    => $notification['title'],
                    'image'        => $notification['image'],
                    'not_message'  => $notification['body'],
                    'read_by_user' => 0
                ]);
            } else {
                $send_status = 1;
            }
        }
        if($send_status!==0){
            return redirect()->back()->withErrors("We are sorry. Some messages couldn't reach their destination because technical difficulties. Try again later.");
        } else {
            return redirect()->back()->withSuccess('All messages were sent successfully to recipients');
        }
    }
}