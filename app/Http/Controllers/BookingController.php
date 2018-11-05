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
    	$bookingRequest = BookingRequest::create([
    		'therapist_id' => $request->post('therapist_id'),
    		'client_id' => Auth::id(),
    		'name' => $request->post('name'),
    		'status' => 0,
    	]);

        $bookingRequest->bookingDetails()->create([
            'diagnosis' => $request->post('diagnosis'),
            'notes' => $request->post('notes'),
            'user_address' => $request->post('user_address'),
            'email' => $request->post('email'),
            'contact' => $request->post('contact'),
        ]);

    	return redirect()->route('get.client-find');
    }

    public function approveRequest(BookingDetail $bookingrequest)
    {
        $bookingrequest->update(['status' != $bookingrequest->status]);
        
    }

}
