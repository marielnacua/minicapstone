<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FullCalendarController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('full-calendar', [FullCalendarController::class, 'index']);

Route::post('full-calendar/action', [FullCalendarController::class, 'action']);

?>