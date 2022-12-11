<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebSettings extends Model
{
    use HasFactory;

    protected $table = 'tbl_web_setting';

    protected $primaryKey = 'set_id';

    public $timestamps = false;

}
