<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Client;
use App\Client;
use Auth;

class PrintController extends Controller
{
	public function index()
      {
              $client = Client::ofUser(Auth::id())->first();
              return view('client.printtransaction', compact('client'));
     }

     public function printClient()
     {
              $client = Client::ofUser(Auth::id())->first();
              return view('client.transaction', compact('client'));
     }
}


