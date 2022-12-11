<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class CountryCode extends Model
{
    use HasFactory, Notifiable, HasApiTokens;

    protected $table = 'country_code';
    protected $primaryKey = 'code_id';

    public $timestamps = false;

    protected $fillable = [
        'country_code'
    ];
}
