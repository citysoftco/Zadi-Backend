<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Cities extends Model
{
    use HasFactory, Notifiable, HasApiTokens;

    protected $table = 'city';
    protected $primaryKey = 'city_id';

    public $timestamps = false;

     protected $fillable = [
        'city_name'
    ];
}
