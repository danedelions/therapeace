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

	Route::get('/',function() {
		return view('welcome');   
	});
	Route::get('user_login', 'LoginController@view')->name('get:login');
	Route::get('login', 'LoginController@view')->name('get:login');
	Route::view('doLogin', 'LoginController@index')->name('post:login');
});


// Route::get('login', function () {
//     return view('login');
// }); 


// Route::resource('therapist' ,'RegistrationController');

Route::get('transaction', function () {
    return view('transaction');
});


Route::get('/therapist-account', 'TherapistController@therapistAccount');
Route::get('/therapist-appoint', 'TherapistController@therapistAppoint');
Route::get('/therapist-history', 'TherapistController@therapistHistory');

Route::resource('therapist' ,'TherapistController');


Route::resource('client', 'ClientController');
Route::get('client-find', 'ClientRegistration@clientFind');
Route::get('client-history', 'ClientRegistration@clientHistory');
Route::get('client-account/{id}', 'ClientRegistration@clientAccount');

	// Route::get('client-find', 'ClientRegistration@findTherapist');
// Route::get('client-history', 'ClientRegistration@clientHistory');
// Route::get('client-account', 'ClientRegistration@clientAccount');




Route::get('client-find', 'ClientController@clientFind');
Route::get('client-history', 'ClientController@clientHistory');
Route::get('client-account', 'ClientController@clientAccount');
Route::get('client-message', 'ClientController@clientMessage');
Route::resource('client', 'ClientController');

Route::get('client-find', 'ClientController@clientFind');
Route::get('client-history/{id}', 'ClientController@clientHistory');
Route::get('client-account/{id}', 'ClientController@clientAccount');


// Route::get('user-login' ,'LoginController@view');
// Route::post('logged', 'LoginController@doLogin');


Route::get('admin', function(){
	return view ('admin.dashboard');
});

Route::get('admin', 'AdminController@getDashboard'); 
Route::get('admin-user', 'AdminController@getUserView');
Route::get('admin-pending', 'AdminController@getPendingView');
Route::get('admin-history', 'AdminController@getHistoryView');
Route::get('admin-reports', 'AdminController@getReportsView');  