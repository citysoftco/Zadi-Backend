<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverIncentive extends Model
{
    use HasFactory;

    protected $table = 'driver_incentive';

    public $timestamps = false;

    protected $fillable = [
        'dboy_id', 'earned_till_now', 'paid_till_now', 'remaining'
    ];
}
