<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('stats_absolute_deviation(a)t', function () {
    return 'about me';
});


Route::get('mail', function () {
    return 'mail feature';
});


Route::resource('sendmail','mail_controller') ;

Route::get('reporting', function () {
    return 'reporting feature';
});
