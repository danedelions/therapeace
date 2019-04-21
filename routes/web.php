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
Route::get('/faqs', 'HomeController@index')->name('faqs');

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', function () {

        return view('welcome');
    });

    Route::get('/login', 'LoginController@view')->name('login');
    Route::post('doLogin', 'LoginController@doLogin')->name('post:login');
});

Route::get('/logout', 'LoginController@Logout');
Route::resource('therapist', 'TherapistController');
// Route::resource('therapist' ,'RegistrationController');

Route::get('transaction', function () {
    return view('transaction');
});

// Route::resource('therapist' ,'TherapistController');
Route::resource('client', 'ClientController');

Route::group(['middleware' => 'auth'], function () {
    // ADMIN


    Route::get('/admin-user', 'AdminController@getUserView')->name('get.view');
    Route::get('/admin-pending', 'AdminController@getPendingView')->name('get.pending');
    Route::get('/admin-history', 'AdminController@getHistoryView')->name('get.history');
    Route::get('/admin-reports', 'AdminController@getReportsView')->name('get.reports');

    Route::patch('/status-update/{user}', 'AdminController@statusUpdate')->name('get.update');
    Route::get('/admin-notice/{id}', 'AdminController@notice')->name('get.notice');
    Route::post('{therapist}/accept', 'AcceptTherapistController');

    Route::any('/search', 'AdminController@search')->name('get.search');
    Route::post('{therapist}/accept', 'AcceptTherapistController');

    Route::get('/admin-user/?status={status}', 'AdminController@filterUsers');


    // THERAPIST
    Route::get('/therapist-account', 'TherapistController@therapistAccount')->name('get.therapist-account');
    // Route::get('/therapist-appoint', 'TherapistController@therapistAppoint')->name('get.therapist-appoint');

    Route::get('chat/{recipientId?}', 'MessagingController@index')->name('messaging.index');
    Route::post('chat/{recipientId}', 'MessagingController@sendMessage')->name('messaging.send');

    Route::get('/therapist-edit/{id}', 'TherapistController@edit');
    Route::patch('/therapist-update/{id}', 'TherapistController@update')->name('therapist.update');
    Route::patch('/therapist-account/{booking}', 'BookingController@approveRequest')->name('therapist.accept');
    Route::get('/therapist-checklist/{id}', 'TherapistController@viewChecklist')->name('therapist.checklist');
    Route::get('therapist-calendar/{bookingRequest}', 'TherapistCalander')->name('therapist.calendar');
    Route::post('therapist-calendar/{bookingRequest}',
        'TherapistCalander@saveAppointment')->name('therapist.book.appointment');

    Route::delete('therapist-calendar/{bookingRequest}',
        'TherapistCalander@rejectAppointment')->name('therapist.reject.appointment');

    Route::patch('therapist-calendar/{bookingRequest}', 
        'TherapistCalander@finishedAppointment')->name('therapist.finish.appointment');

    Route::delete('therapist-calendar/{bookingRequest}', 
        'TherapistCalander@cancelAppointment')->name('therapist.cancel.appointment');
    Route::get('/therapist-pending/', 'TherapistController@viewPending')->name('therapist.pending');

    // CLIENT
    Route::get('/client-find', 'ClientController@clientFind')->name('get.client-find');
    Route::get('/client-account', 'ClientController@clientAccount')->name('get.client-account');
    Route::get('/client-edit/{id}', 'ClientController@edit');
    Route::patch('/client-update/{id}', 'ClientController@update');

    Route::get('/client-message', 'ClientController@clientMessage')->name('get.client-message');
    Route::get('/client-search/', 'ClientController@search')->name('get.client-search');
    Route::get('/client-view/{id}', 'ClientController@getView')->name('get.client-view');

    //TRANSACTION
    // Route::get('/client-transaction', 'TransactionController@clientTrans');
    // Route::get('/therapist-transaction', 'TransactionController@therapistTrans');

    //BOOKING
    Route::get('/booktherapist/{id}', 'BookingController@index')->name('get.booktherapist');
    Route::post('/doBookTherapist/', 'BookingController@submitDetails')->name('post.doBook');
    Route::delete('/deleteBooking/{id}', 'BookingController@clientDeleteRequest')->name('post.cancelbooking');

});

