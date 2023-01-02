<?php

namespace App\Services;

use App\Models\Store;
use App\Models\User;
use App\Models\UserNotification;
use DB;
use Illuminate\Support\Facades\Http;

/**
 * Class NotificationService.
 */
class NotificationService
{
    public static function sendNotificationToUser($userId,  $title, $text)
    {
        $user = User::find($userId);
        $getFcm = DB::table('fcm')
            ->first();



        $notification_title = $title;
        $notification_text = $text;


        UserNotification::create([
            'user_id' => $user->id,
            'noti_title' => $notification_title,
            'noti_message' => $notification_text,

        ]);

        $url = 'https://fcm.googleapis.com/fcm/send';
        $customData = $url;
        $json_data =
            [
                "registration_ids" => [$user->device_id],
                "notification" => [
                    "body" => $notification_text,
                    "title" => $notification_title,
                    // "image" => $notify_image
                ],
                "data" => [
                    "extra" => $customData
                ]
            ];
        $data = json_encode($json_data);

        //header with content_type api key
        $headers = array(
            'Content-Type:application/json',
            'Authorization:key=' . $getFcm->server_key
        );

        // Http::withHeaders($headers)->post($url, $json_data);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $result = curl_exec($ch);
        if ($result === FALSE) {
            die('Oops! FCM Send Error: ' . curl_error($ch));
        }
        curl_close($ch);
        unset($device_id); // unset the array value
    }
    public static function sendNotificationToStore($storeId,  $title, $text)
    {
        $store = Store::find($storeId);
        $getFcm = DB::table('fcm')
            ->first();



        $notification_title = $title;
        $notification_text = $text;

        $insertNotification = DB::table('store_notification')
            ->insert([
                'store_id' => $store->id,
                'not_title' => $notification_title,
                'not_message' => $notification_text,
                // 'image' => $filePath,
            ]);

        // $store_name = $getDevice->store_name;
        $fcmUrl = 'https://fcm.googleapis.com/fcm/send';
        // $token = $getDevice->device_id;


        $notification = [
            'title' => "Hey " . $store->store_name . ", " . $notification_title,
            'body' => $notification_text,
            // 'image' => $notify_image,
            'sound' => true,
        ];

        $extraNotificationData = ["message" => $notification,/* 'image' => $notify_image,*/];

        $fcmNotification = [
            'to' => $store->device_id, //single token
            'notification' => $notification,
            'data' => $extraNotificationData,
        ];

        $headers = [
            'Authorization: key=' . $getFcm->server_key,
            'Content-Type: application/json'
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $fcmUrl);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fcmNotification));
        $result = curl_exec($ch);
        curl_close($ch);
    }
}
