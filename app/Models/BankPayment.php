<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankPayment extends Model
{
    use HasFactory;


    protected $guarded = ["id"];

    public function bankAccount()
    {
        return $this->belongsTo(BankAccount::class, "bank_account_id");
    }
    public function store()
    {
        return $this->belongsTo(Store::class, "store_id");
    }
    public function user()
    {
        return $this->belongsTo(User::class, "user_id");
    }
}
