<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\CalendarApiController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\LoginAdminController;

route::get('/calendar/member/{id}', [CalendarApiController::class, 'calendarMember']);
route::post('/calendar/events', [CalendarApiController::class, 'calendarEvent']);
route::delete('/calendar/delete', [CalendarApiController::class, 'calendarEventDelete']);
route::post('/calendar/update', [CalendarApiController::class, 'calendarEventUpdate']);

route::get('/login', [LoginAdminController::class, 'login']);
route::group(['middleware' => 'auth:api'], function () {
    Route::get('logout', [AuthController::class, 'logout']);
    Route::get('user', [AuthController::class, 'user']);
});
