<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankAccount extends Model
{
    use HasFactory;


    protected $guarded = ["id"];

    public function bankPayments()
    {
        return $this->hasMany(BankPayment::class, "bank_account_id");
    }
}
