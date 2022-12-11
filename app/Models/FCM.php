<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FCM extends Model
{
    use HasFactory;

    protected $guard = "cityadmin";

    protected $table = "fcm";

    public $timestamps = false;

    private $fcm_url='https://fcm.googleapis.com/fcm/send';


    public function sendMessage(string $fcm_key, array $fcmNotification){
        if(!function_exists('curl_version')||is_null($fcmNotification)||is_null($fcm_key)) return redirect()->back()->withErrors("Something went wrong before sending FCM. Check with System's admin");
        $curl=curl_init();
        $headers = [
            'Authorization: key='.$fcm_key,
            'Content-Type: application/json'
        ];

        $options = array(
            CURLOPT_URL => $this->fcm_url,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => json_encode($fcmNotification),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_HTTPHEADER => $headers
        );

        curl_setopt_array($curl, $options);
        $result = curl_exec($curl);
        curl_close($curl);
        return $result;
    } 
}
