<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class DeliveryBoyStores extends Model
{
    use HasFactory, Notifiable, HasApiTokens;

    protected $table = 'store_delivery_boy';
    protected $primaryKey = 'dboy_id';

    public $timestamps = false;

    protected $fillable = [
        'boy_name', 'boy_phone', 'boy_city', 'password', 'device_id', 'boy_loc', 'lat', 'lng', 'status', 'store_id', 'added_by', 'ad_dboy_id', 'id_no', 'id_photo', 'id_name'
    ];

    protected $hidden = [
        'password'  
    ];

    protected $guarded = [
        'rem_by_admin'
    ];

    protected $attributes = [
        'device_id'     => NULL,
        'status'        => 1,
        'store_id'      => 0,
    ];
}
