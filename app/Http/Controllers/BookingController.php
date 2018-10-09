<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Therapist;
use App\User;

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

    public function submitDetails()
    {

    }

}
