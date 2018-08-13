<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('safety', function () {
    return view('safety');
});

Route::get('login', function () {
    return view('login');
});

Route::get('client', function () {
    return view('client');
});

Route::get('personal', function () {
    return view('personal');
});

Route::get('address', function () {
    return view('address');
});

Route::get('therapist', function () {
    return view('therapist');
});
Route::get('about', function () {
    return view('stats_absolute_deviation(a)');
});







