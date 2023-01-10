<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reward2 extends Model
{
    use HasFactory;

    protected $table = "percent_reward";
    protected $guarded = ["id"];
}
