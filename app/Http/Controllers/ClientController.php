<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Requests\UserRequest;
use App\Http\Requests\ClientRequest;
use App\Client;
use App\Therapist;
use App\User;
use DB;
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
            'street' => $request->post('street'),
            'barangay' => $request->post('barangay'),
            'town' => $request->post('town'),
            'province' => $request->post('province'),
            'city' => $request->post('city'),
            'postal_code' => $request->post('postal_code'),

        ]);

         return view('login');
    }

    public function clientFind(Therapist $therapists)
    {
        $therapists = Therapist::all();
        return view('client.find', compact('therapists'));
    }
    public function clientAccount()
    {
        // $client = Client::where('id', Auth::id())->first();
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

    public function search(Request $request, Therapist $therapists)
    {
        $query = $request->get('q');
        if($query)
        {
            $therapists = $query ? Therapist::search($query)->orderBy('id','desc')->paginate(7):Therapist::all();
            return view('client.find', compact('therapists'));
        }
    }
}