<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'start_date',
        'start_time',
        'days',
        'full_day',
        'color',
        'memo',
        'attached',
        'is_repeat',
        'is_active',
        'member_id',
    ];
}
