<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Store extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $guard = "stores";

    protected $table = "store";

    public function bankAccounts()
    {
        return $this->hasMany(BankAccount::class, "store_id");
    }
    public function bankPayments()
    {
        return $this->hasMany(BankPayment::class, "store_id");
    }
}
