<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class UserNotification extends Model
{
    use HasFactory, Notifiable, HasApiTokens;

    protected $table = "user_notification";
    protected $primaryKey = 'noti_id';

    public $timestamps = false;

    protected $fillable = [
        'user_id', 'noti_title', 'image', 'noti_message', 'read_by_user'
    ];

    protected $attributes = [
        'read_by_user' => 0
    ];

    protected $dates = [
        'created_at'
    ];
}
