<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MapBoxData extends Model
{
    use HasFactory;

    protected $table = 'mapbox';
    protected $primaryKey = 'map_id';

    public $timestamps = false;
}
