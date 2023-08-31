<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Calendar;
use App\Models\Member;

class CalendarApiController extends Controller
{
    // calendar + member
    public function calendarMember(Request $request, $id)
    {

        $member = Member::find($id);
        $calendar = $member->calendars;

        return response()->json(['data' => $calendar]);
    }
}
