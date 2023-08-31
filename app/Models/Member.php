<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'address',
        'avatar',
        'google_id',
        'facebook_id',
        'remember_token',
        'email_verified_at',
        'last_login_at',
        'is_active',
    ];

    public function calendars()
    {
        return $this->hasMany(Calendar::class);
    }
}
