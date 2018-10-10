<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Therapist;
use App\User;
use App\BookingRequest;
use App\BookingDetail;
use Redirect;
use Auth;
class BookingController extends Controller
{
    public function index($id)
    {
    	$therapist = Therapist::ofUser($id)->first();
    	$client = Client::ofUser(Auth::id())->first();
        return view('client.book', compact('therapist','client'));
    }

    public function submitDetails(Request $request)
    {
    	BookingRequest::create([
    		'therapist_id' => $request->post('therapist_id'),
    		'client_id' => Auth::id(),
    		'name' => $request->post('name'),
    		'status' => 0,
    	]);

    	$bookings = BookingRequest::where('name', $request->post('name'))->get();

    	BookingDetail::create([
    		'booking_id' => $bookings[0]['id'],
    		'diagnosis' => $request->post('diagnosis'),
    		'notes' => $request->post('notes'),
    		'user_address' => $request->post('user_address'),
    		'email' => $request->post('email'),
    		'contact' => $request->post('contact'),
    	]);

    	return Redirect::back();
    }

    // public function showClientRequests(BookingRequest $bookingrequests)
    // {
    //     $bookingrequests = BookingRequest::all();

    //     return view('client.account', compact('bookingrequests'));
    // }

}
