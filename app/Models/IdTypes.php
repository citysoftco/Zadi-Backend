<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdTypes extends Model
{
    use HasFactory;

    protected $table = 'id_types';
    protected $primaryKey = 'type_id';

    public $timestamps = false;

    protected $fillable = [
        'name'
    ];
}
