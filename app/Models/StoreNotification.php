<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class StoreNotification extends Model
{
    use HasFactory, Notifiable, HasApiTokens;

    protected $table = "store_notification";
    protected $primaryKey = 'not_id';

    public $timestamps = false;

    protected $fillable = [
        'store_id', 'not_title', 'image', 'not_message', 'read_by_user'
    ];

    protected $attributes = [
        'read_by_user' => 0
    ];

    protected $dates = [
        'created_at'
    ];
}
