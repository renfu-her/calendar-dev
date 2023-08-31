<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Calendar;
use App\Models\Member;

class CalendarApiController extends Controller
{
    // calendar + member
    public function calendarMember(Request $request, $memberId)
    {

        $calendarEvents = Calendar::getEventsInCalendarFormatForMember($memberId);
        return response()->json($calendarEvents);
    }

    // calendar event 的寫入
    public function calendarEvent(Request $request)
    {
        $calendar = Calendar::create($request->all());
        return response()->json($calendar);
    }
}
