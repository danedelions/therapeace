<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Therapist;
use App\User;
use App\Booking;
use App\BookingDetail;

use Auth;
class BookingController extends Controller
{
    public function index($id)
    {
    	$therapist = Therapist::ofUser($id)->first();
    	$client = Client::ofUser(Auth::id())->first();
        return view('client.book', compact('therapist','client'));
    	// return view('client.book');
    }

    public function submitDetails(Request $request,$id)
    {
    	$therapist = Therapist::ofUser($id)->first();
    	$client = Client::ofUser(Auth::id())->first();

    	Booking::create([
    		'therapist_id' => $request->post($therapist->$id),
    		'client_id' => $request->post($client->$id),
    		'status' => $request->post('status'),
    	]);

    	BookingDetail::create([
    		''
    	]);
    }

}
