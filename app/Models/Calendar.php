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

    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    public static function getEventsInCalendarFormatForMember($memberId)
    {
        $events = self::where('member_id', $memberId)->orderBy('start_date')->get();

        $result = [];

        foreach ($events as $event) {
            if (!isset($result[$event->start_date])) {
                $result[$event->start_date] = [];
            }

            $result[$event->start_date][] = $event->title;
        }

        return $result;
    }
}
