<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stores extends Model
{
    use HasFactory;

    protected $table = 'store';

    public $timestamps = false;

    protected $fillable = [
        'store_name', 'employee_name', 'phone_number', 'store_photo', 'city', 'city_id', 'admin_share', 'device_id', 'email', 'password', 'del_range', 'lat', 'lng', 'address', 'store_opening_time', 'store_closing_time', 'time_interval' 
    ];

    protected $attributes = [
        'device_id' => NULL,
        'admin_share' => 0,
        'admin_approval' => 1,
        'orders' => 1,
        'store_status' => 1
    ];
}
