<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;
use App\Therapist;
use App\Client;
use App\User;
use Hash;
use Auth;

class ClientController extends Controller
{

    public function __construct()
    {

        $this->middleware('auth')->except(['index', 'store']);


    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('clientregistration');
    }

    public function store(ClientRequest $request)
    {

        User::insert([

            'username' => $request->post('username'),
            'email' => $request->post('email'),
            'password' =>Hash::make($request->post('password')),
            'user_type' => 'client'

            ]);


          $users = User::where('username', $request->post('username'))->get()->toArray();

        Client::insert([

            'user_id' =>$users[0]['id'],
            'fname' => $request->post('fname'),
            'lname' => $request->post('lname'),
            'contact' => $request->post('number'), 
            'gender' => $request->post('gender'), 
            'barangay' => $request->post('barangay'),
            'province' => $request->post('province'),
            'town' => $request->post('town'),
            'city' => $request->post('city'), 

        ]);

         return view('login');
    }

    public function clientFind()
    {
        return view('client.find');
    }
    public function clientAccount()
    {
        // $client = Client::all();
        $client = Client::where('id', Auth::id())->first();
        return view('client.account', compact('client'));
    }
    public function edit($id)
    {
        $client = Client::find($id);
        return view('client.edit', compact('client', 'id'));
    }
    public function update(Request $request, $id)
    {

    }
    public function clientHistory(Client $client)
    {
        $client = Client::all();
        return view('client.history', compact('client'));
    }
    public function clientMessage()
    {
        return view('client.message');
    }

    public function search(){

    }
}