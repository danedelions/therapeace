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

Route::group(['middleware' => 'guest'], function(){
	Route::get('/', function () {
    	return view('welcome');
	});
	Route::get('/login' ,'LoginController@view')->name('login');
	Route::post('doLogin','LoginController@doLogin')->name('post:login');

});

Route::get('/logout','LoginController@Logout');

Route::resource('therapist' ,'TherapistController');

// Route::resource('therapist' ,'RegistrationController');


Route::get('transaction', function () {
    return view('transaction');
});

// Route::resource('therapist' ,'TherapistController');
Route::resource('client', 'ClientController');

Route::group(['middleware' => 'auth'], function(){

// THERAPIST
	Route::get('/therapist-account', 'TherapistController@therapistAccount')->name('get.therapist-account');
	Route::get('/therapist-appoint', 'TherapistController@therapistAppoint')->name('get.therapist-appoint');
	Route::get('/therapist-history', 'TherapistController@therapistHistory')->name('get.therapist-history');
	Route::get('/therapist-message', 'TherapistController@therapistMessage');
	Route::get('/therapist-edit/{id}' ,'TherapistController@edit');
	Route::patch('/therapist-update/{id}' ,'TherapistController@update')->name('therapist.update');

// CLIENT
	Route::get('/client-find', 'ClientController@clientFind')->name('get.client-find');
	Route::get('/client-account', 'ClientController@clientAccount')->name('get.client-account');
	Route::get('/client-edit', 'ClientController@clientEdit')->name('get.client-edit');
	Route::get('/client-history', 'ClientController@clientHistory')->name('get.client-history');;
	Route::get('/client-message', 'ClientController@clientMessage')->name('get.client-message');;

// Admin Side
// Route::get('admin', 'AdminController@getDashboard')->name('get.admin'); 
// Route::get('admin-user', 'AdminController@getUserView');
// Route::get('admin-pending', 'AdminController@getPendingView');
// Route::get('admin-history', 'AdminController@getHistoryView');
// Route::get('admin-reports', 'AdminController@getReportsView');
// Route::get('email/{user}', 'AdminController@email')->name('sendEmail');
// Route::patch('admin-user/{user}', 'AdminController@statusUpdate')->name('admin.status-update'); 

});


// Route::get('/admin/home', 'AdminController@getDashboard'); 
// Route::get('/admin/ user', 'AdminController@getUserView');
// Route::get('/admin/pending', 'AdminController@getPendingView');
// Route::get('/admin/history', 'AdminController@getHistoryView');
// Route::get('/admin/reports', 'AdminController@getReportsView');

// Route::get('admin', function(){
// 	return view ('admin.dashboard');
// });


// Admin Side
Route::get('admin', 'AdminController@getDashboard')->name('get.admin'); 
Route::get('admin-user', 'AdminController@getUserView')->name('get.view');
Route::get('admin-pending', 'AdminController@getPendingView');
Route::get('admin-history', 'AdminController@getHistoryView');
Route::get('admin-reports', 'AdminController@getReportsView');
Route::get('email/{user}', 'AdminController@email')->name('sendEmail');
Route::patch('admin-user/{user}', 'AdminController@statusUpdate')->name('admin.status-update');


