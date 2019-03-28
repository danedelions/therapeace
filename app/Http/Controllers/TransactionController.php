<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Client;
use App\Therapist;
use App\User;
use App\BookingRequest;
use Auth;

class TransactionController extends Controller
{
	public function index()
      {
              // $client = Client::ofUser(Auth::id())->first();
              // return view('client.printtransaction', compact('client'));
     }
     public function clientTrans(BookingRequest $bookingRequest)
     {
          $client = Client::ofUser(Auth::id())->first();
          $bookingRequest->load([
            'client.user',
            'bookingDetails',
            'appointment'
        ]);       

          return view('client.transaction', [
            'bookingRequest' => $bookingRequest,
            'client' => $client
        ]);
     }
     public function printClient()
     {
          $client = Client::ofUser(Auth::id())->first();
          return view('client.printtransaction', compact('client'));
     }

     public function therapistTrans()
     {
          $therapist = Therapist::ofUser(Auth::id())->first();
          return view('therapist.transaction', compact('therapist'));
     }
     public function printTherapist()
     {
          $therapist = Therapist::ofUser(Auth::id())->first();
          return view('therapist.printtransaction', compact('therapist'));
     }
}


