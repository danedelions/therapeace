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

// Route::get('client', function () {
//     return view('client');
// });


Route::get('about', function () {
    return view('stats_absolute_deviation(a)');
});

Route::get('transaction', function () {
    return view('transaction');
});



Route::resource('therapist' ,'RegistrationController');


Route::resource('client' ,'ClientRegistration');

Route::post('user_login' ,'LoginController@index');

Route::get('admin', function(){
	return view ('admin.dashboard');
});

Route::get('admin', 'AdminController@getDashboard'); 
Route::get('admin-user', 'AdminController@getUserView');
Route::get('admin-pending', 'AdminController@getPendingView');
Route::get('admin-history', 'AdminController@getHistoryView');
Route::get('admin-reports', 'AdminController@getReportsView');  