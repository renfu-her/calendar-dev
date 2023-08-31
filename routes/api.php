<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\CalendarApiController;

route::get('/calendar/member/{id}', [CalendarApiController::class, 'calendarMember']);
route::post('/calendar/events', [CalendarApiController::class, 'calendarEvent']);
