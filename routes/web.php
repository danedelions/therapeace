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
	Route::get('user_login' ,'LoginController@view')->name('get:login');
	Route::get('login' ,'LoginController@view')->name('get:login');
	Route::post('doLogin','LoginController@index')->name('post:login');
});
<<<<<<< HEAD
	


// Route::get('login', function () {
//     return view('login');
// }); 




// Route::resource('therapist' ,'RegistrationController');
=======
>>>>>>> 19fe21dbe0d250c551828a250e598deb0e61b70c

Route::get('transaction', function () {
    return view('transaction');
});

Route::get('/therapist-account', 'TherapistController@therapistAccount');
Route::get('/therapist-appoint', 'TherapistController@therapistAppoint');
Route::get('/therapist-history', 'TherapistController@therapistHistory');

Route::get('/therapist-message', 'TherapistController@therapistMessage');


Route::resource('therapist' ,'TherapistController');

// Route::resource('client', 'ClientController');
// Route::get('client-find', 'ClientRegistration@clientFind');
// Route::get('client-history', 'ClientRegistration@clientHistory');
// Route::get('client-account/{id}', 'ClientRegistration@clientAccount');

//PLEASE GROUP YOUR ROUTES//

Route::get('client-find', 'ClientController@clientFind');
Route::get('client-history', 'ClientController@clientHistory');
Route::get('client-account', 'ClientController@clientAccount');
Route::get('client-message', 'ClientController@clientMessage');
Route::resource('client', 'ClientController');

Route::get('client-find', 'ClientController@clientFind');
Route::get('client-history/{id}', 'ClientController@clientHistory');
Route::get('client-account/{id}', 'ClientController@clientAccount');



Route::get('/admin/home', 'AdminController@getDashboard'); 
Route::get('/user', 'AdminController@getUserView');
Route::get('/pending', 'AdminController@getPendingView');
Route::get('/history', 'AdminController@getHistoryView');
Route::get('/reports', 'AdminController@getReportsView');




