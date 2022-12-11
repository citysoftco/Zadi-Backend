<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GMapsData extends Model
{
    use HasFactory;

    protected $table = 'map_api';

    public $timestamps = false;
}
