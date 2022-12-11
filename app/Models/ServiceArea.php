<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class ServiceArea extends Model
{
    use HasFactory, Notifiable, HasApiTokens;

    protected $table = 'service_area';
    protected $primaryKey = 'ser_id';

    public $timestamps = false;

    protected $fillable = [
        'society_name', 'society_id', 'store_id', 'city_id'
    ];

    protected $attributes = [
        'delivery_charge'   => 0,
        'added_by'          => 0,
        'enabled'           => 1
    ];
}
