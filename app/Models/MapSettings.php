<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MapSettings extends Model
{
    use HasFactory;

    protected $table = 'map_settings';
    protected $primaryKey = 'map_id';

    public $timestamps = false;
}
