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

use App\Events\FormSubmitted;
    
    Route::group(['middleware' => 'guest'], function () {

    Route::get('/login', 'LoginController@view')->name('login');
    Route::post('doLogin', 'LoginController@doLogin')->name('post:login');
    Route::get('/', function () {

            return view('welcome');
        });
        Route::view('/faqs', 'faqs')->name('faqs');
        Route::get('/login', 'LoginController@view')->name('login');
        Route::post('doLogin', 'LoginController@doLogin')->name('post:login');

// PUSHER SAMPLE
        Route::get('/listener', function(){
            return view('pusher.listener');
    });
        Route::get('/handler', function(){
            return view('pusher.handler');
    });
        Route::post('/handler', function(){
            //this is the post
            $notifyTextMessage = request()->notifyTextMessage;

            event(new FormSubmitted($notifyTextMessage));
    });
// SAMPLE
    });


    Route::get('/logout', 'LoginController@Logout');
    Route::resource('therapist', 'TherapistController');
    Route::resource('client', 'ClientController');
    Route::resource('admin', 'AdminController');

    Route::group(['middleware' => 'auth'], function () {
    // ADMIN
    Route::get('/admin-dashboard', 'AdminController@getDashboard')->name('get.dashboard');
    Route::get('/admin-login', 'AdminController@login')->name('get.login');

    Route::get('/admin-user', 'AdminController@getUserView')->name('get.view');

    Route::get('/admin-pending', 'AdminController@getPendingView')->name('get.pending');
    Route::get('/admin-history', 'AdminController@getHistoryView')->name('get.history');
    Route::get('/admin-reports', 'AdminController@getReportsView')->name('get.reports');
    Route::get('/admin-blockusers', 'AdminController@getBlockUserView')->name('get.blockuser');

    Route::resource('addclient', 'AdminCreateClient');
    Route::resource('addtherapist', 'AdminCreateTherapist');

    Route::get('/admin-user/?status={status}', 'AdminController@filterUsers');
    Route::get('/admin-notice/{id}', 'AdminController@notice')->name('get.notice');    
    Route::patch('/status-update/{user}', 'AdminController@statusUpdate')->name('get.update');
    Route::post('{therapist}/accept', 'AcceptTherapistController');
    Route::delete('/admin-user/{id}', 'AdminController@delete')->name('admin.delete'); 
    // END ADMIN

    // THERAPIST
    Route::get('/therapist-account', 'TherapistController@therapistAccount')->name('get.therapist-account');

    // Route::get('chat/{recipientId?}', 'MessagingController@index')->name('messaging.index');
    // Route::post('chat/{recipientId}', 'MessagingController@sendMessage')->name('messaging.send');


    // MESSAGING CLIENT
    Route::get('therapist-messages/{recipientId?}', 'MessagingController@therapistindex')->name('therapist.index');
    Route::post('therapist-messages/{recipientId}', 'MessagingController@therapistsend')->name('therapist.send');

    Route::delete('doDeleteReply/{recipientId}', 'MessagingController@deleteReply')->name('therapist.delete.reply');
    Route::delete('doRemoveReply/{recipientId}', 'MessagingController@removeReply')->name('therapist.remove.reply');

    // MESSAGING THERAPIST
    Route::get('client-messages/{recipientId?}', 'MessagingController@clientindex')->name('client.index');
    Route::post('client-messages/{recipientId}', 'MessagingController@clientsend')->name('client.send');

    Route::delete('doDelete/{recipientId}', 'MessagingController@delete')->name('client.delete.reply');
    Route::delete('doRemove/{recipientId}', 'MessagingController@remove')->name('client.remove.reply');



    Route::get('/therapist-edit/{id}', 'TherapistController@edit');
    Route::patch('/therapist-update/{id}', 'TherapistController@update')->name('therapist.update');
    Route::patch('/therapist-account/{booking}', 'BookingController@approveRequest')->name('therapist.accept');
    Route::get('/therapist-checklist/{bookingRequest}', 'ChecklistController@viewChecklist')->name('get.therapist.checklist');
    Route::get('therapist-calendar/{bookingRequest}', 'TherapistCalander')->name('therapist.calendar');
    Route::resource('checklist', 'ChecklistController');
    
    Route::post('/giveProgress', 'ProgressController@storeProgress')->name('post.store-progress');

    Route::post('therapist-calendar/{bookingRequest}',
        'TherapistCalander@saveAppointment')->name('therapist.book.appointment');

    Route::delete('doReject/{bookingRequest}',
        'TherapistCalander@rejectAppointment')->name('therapist.reject.appointment');
    
    Route::patch('doFinish/{bookingRequest}', 
        'TherapistCalander@finishedAppointment')->name('therapist.finish.appointment');

    Route::delete('doCancel/{bookingRequest}', 
        'TherapistCalander@cancelAppointment')->name('therapist.cancel.appointment');
    
    Route::delete('doDelete/{bookingRequest}',
        'TherapistCalander@deleteRequest')->name('therapist.delete.appointment');
    
    // CLIENT
    Route::get('/client-find', 'ClientController@clientFind')->name('get.client-find');
    Route::get('/client-account', 'ClientController@clientAccount')->name('get.client-account');
    Route::get('/client-edit/{id}', 'ClientController@edit');
    Route::patch('/client-update/{id}', 'ClientController@update');

    Route::get('/client-message', 'ClientController@clientMessage')->name('get.client-message');
    Route::get('/client-search/', 'ClientController@search')->name('get.client-search');
    Route::get('/client-view/{id}', 'ClientController@getView')->name('get.client-view');
    Route::post('/rateSession', 'ReportsController@storeRating')->name('post.rate-session');
    

    //PRINTING
    

    //BOOKING
    Route::get('/booktherapist/{id}', 'BookingController@index')->name('get.booktherapist');
    Route::post('/doBookTherapist/', 'BookingController@submitDetails')->name('post.doBook');

    // REPORT


});

    // validation ajax request
    Route::post('client-validation', 'ClientController@checkClientValidation');
    Route::post('therapist-validation', 'TherapistController@checkTherapistValidation');

    Route::post('client-username-validation', 'ClientController@checkClientUsername');
    Route::post('therapist-username-validation', 'TherapistController@checkTherapistUsername');



    Route::delete('doDeleteUser/{id}','AdminController@delete')->name('admin.delete');