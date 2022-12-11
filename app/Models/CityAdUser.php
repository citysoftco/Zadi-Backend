<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class CityAdUser extends Authenticatable
{
    use HasFactory;
    use Notifiable, HasApiTokens;

    protected $guard = "cityadmin";

    protected $table = "cityadmin";

    public $timestamps = true;

    protected $fillable = [
        'cityadmin_name', 'cityadmin_image', 'cityadmin_phone', 'email', 'password'
    ];

    protected $hidden = [
        'password','device_id'
    ];
}
