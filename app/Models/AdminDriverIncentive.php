<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminDriverIncentive extends Model
{
    use HasFactory;

    protected $table = 'admin_driver_incentive';

    public $timestamps = false;

    protected $fillable = [
        'incentive'
    ];
}
