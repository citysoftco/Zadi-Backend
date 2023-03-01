<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreSubscription extends Model
{
    use HasFactory;
    protected $guarded = ["id"];

    public function store()
    {
        return $this->belongsTo(Store::class, "store_id");
    }

    public function plan()
    {
        return $this->belongsTo(SubscriptionPlan::class, "plan_id");
    }
}
