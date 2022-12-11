<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class StoreCityAdmin extends Model
{
    use HasFactory, Notifiable, HasApiTokens;

    protected $table = 'stores_cityadmin';
    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'cityadmin_owner', 'store_id'
    ];
}
