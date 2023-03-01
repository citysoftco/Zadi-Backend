<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscriptionPlan extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function subscriptions()
    {
        return $this->hasMany(StoreSubscription::class, "plan_id");
    }
}
