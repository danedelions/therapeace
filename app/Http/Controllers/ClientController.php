<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;
use App\Client;
use Hash;
use App\User;


class ClientController extends Controller
{
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
    public function clientHistory()
    {
        return view('client.history');
    }
    public function clientAccount()
    {
        return view('client.account');
    }
    public function clientMessage()
    {
        return view('client.message');
    }
}