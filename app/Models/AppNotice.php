<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppNotice extends Model
{
    use HasFactory;

    protected $table = 'app_notice';
    public $timestamps = false;
    protected $primaryKey = 'app_notice_id';
}
