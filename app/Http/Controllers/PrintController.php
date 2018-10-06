<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Client;

class PrintController extends Controller
{
	public function index()
      {
              $client = Client::all();
              return view('client.printtransaction', compact('client'));
     }

     public function printClient()
     {
              $client = Client::all();
              return view('client.transaction', compact('client'));
     }
}
