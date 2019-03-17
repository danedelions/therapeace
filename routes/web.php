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
	Route::get('/therapist-specialty/', 'TherapistController@createSpecialties')->name('get.therapist-specialty');
	Route::patch('/therapist-account/{booking}', 'BookingController@approveRequest')->name('therapist.accept');
	Route::get('/therapist-checklist/', 'TherapistController@viewChecklist')->name('therapist.checklist');
// CLIENT
	Route::get('/client-find', 'ClientController@clientFind')->name('get.client-find');
	Route::get('/client-account', 'ClientController@clientAccount')->name('get.client-account');
	Route::get('/client-edit/{id}', 'ClientController@edit');
	Route::patch('/client-update/{id}' ,'ClientController@update');
	Route::get('/client-history', 'ClientController@clientHistory')->name('get.client-history');
	Route::get('/client-message', 'ClientController@clientMessage')->name('get.client-message');
	Route::get('/client-search/', 'ClientController@search')->name('get.client-search');

//PRINTING
	Route::get('/client-transaction', 'PrintController@clientTrans');
	Route::get('/printclient','PrintController@printclient');

	Route::get('/therapist-transaction', 'PrintController@therapistTrans');
	Route::get('/printtherapist','PrintController@printtherapist');

//BOOKING

	Route::get('/booktherapist/{id}', 'BookingController@index')->name('get.booktherapist');
	Route::post('/doBookTherapist/','BookingController@submitDetails')->name('post.doBook');

// ADMIN LOG IN

	//Route::get('/admin', 'AdminLoginController@getLogin')->name('get.admin');

// ADMIN

	Route::get('/admin-dashboard', 'AdminController@getDashboard')->name('get.dashboard');
	Route::get('/admin-user', 'AdminController@getUserView')->name('get.view');
	Route::get('/admin-pending', 'AdminController@getPendingView')->name('get.pending');;
	Route::get('/admin-history', 'AdminController@getHistoryView')->name('get.history');;
	Route::get('/admin-reports', 'AdminController@getReportsView')->name('get.reports');;

// EMAIL

	Route::get('/email/{user}', 'AdminController@welcome')->name('sendWelcome');
	// Route::get('email/{user}', 'AdminController@notice')->name('sendNotice');

// STATUS OF USER

	Route::patch('/admin-user/{user}', 'AdminController@statusUpdate')->name('admin.status-update');
});




