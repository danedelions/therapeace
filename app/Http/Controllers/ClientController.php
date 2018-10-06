<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requests\UserRequest;
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

    public function store(Request $request)
    {

        User::insert([

            'username' => $request->post('username'),
            'email' => $request->post('email'),
            'password' =>Hash::make($request->post('password')),
            'user_type' => 'client'

            ]);


          $users = User::where('username', $request->post('username'))->get();

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
        $client = Client::ofUser(Auth::id())->first();
        return view('client.account', compact('client'));
    }
    public function edit($userId)
    {
        $client = Client::find($userId);
        return view('client.edit', compact('client'));
    }
    public function update(ClientRequest $request, $id)
    {
        // dd($therapist->toArray());
        $client = Client::find($id);
        $request = $request->validated();
        // dd($request);
            
        $client->fill($request)->save();

        User::where('id', Auth::id())->update(['username' => $request['username'], 'email' => $request['email']]);


        return redirect()->route('get.client-account');


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