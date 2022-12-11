<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class DeliveryBoy extends Model
{
    use HasFactory, Notifiable, HasApiTokens;

    protected $table = 'delivery_boy';
    protected $primaryKey = 'dboy_id';

    public $timestamps = false;

    protected $fillable = [
        'boy_name', 'boy_phone', 'boy_city', 'password', 'device_id', 'boy_loc', 'lat', 'lng', 'store_id', 'store_dboy_id', 'added_by', 'image'
    ];

    protected $hidden = [
        'password'
    ];

    protected $attributes = [
        'device_id'     => NULL,
        'status'        => 1,
        'store_id'      => 0,
        'store_dboy_id' => 0,
    ];
}
