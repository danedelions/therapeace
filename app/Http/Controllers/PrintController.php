<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Client;

class PrintController extends Controller
{
	public function index()
      {
              $clients = Client::all();
              return view('client.printtransaction', compact('clients'));
     }

     public function printClient()
     {
              $clients = Client::all();
              return view('client.transaction', compact('clients'));
     }
}
