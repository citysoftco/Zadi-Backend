<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Grimzy\LaravelMysqlSpatial\Eloquent\SpatialTrait;

class StoreZone extends Model
{
    use HasFactory, SpatialTrait;

    protected $guarded = ["id"];

    protected $spatialFields = [
        'coordinates'
    ];
}
