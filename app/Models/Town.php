<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use App\Models\Cities;

class Town extends Model
{
    use HasFactory, Notifiable, HasApiTokens;
    protected $table = 'society';

    protected $primaryKey = 'society_id';

    public $timestamps = false;

    protected $fillable = [
        'society_name', 'city_id' 
    ];
}
