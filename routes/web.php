<?php

use Illuminate\Support\Facades\Route;
use Spatie\GoogleCalendar\Event;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    


    $event = new Event;
    $event->name = 'test form app';
    $event->startDateTime = Carbon\Carbon::now();
    $event->endDateTime = Carbon\Carbon::now()->addHour();
    $event->save();

    $eventList = Event::get();
    dd($eventList);
    // $e = $e[0];
    // dd($e->startDateTime->toDateTimeString());
    // dd($e->summary);
});
