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

    // calendar event 的刪除
    public function calendarEventDelete(Request $request)
    {
        $calendar = Calendar::where('start_date', $request->start_date)->where('title', $request->title)->first();
        $calendar->delete();
        return response()->json('deleted');
    }

    // calendar event 的更新
    public function calendarEventUpdate(Request $request)
    {
        $calendar = Calendar::where('start_date', $request->start_date)->where('title', $request->title)->first();
        $calendar->update($request->all());
        return response()->json($calendar);
    }
}
