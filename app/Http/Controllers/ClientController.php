<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;
use App\Client;
use Hash;
use App\User;
use Validator;

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
    public function clientAccount(Client $client)
    {
        $clients = Client::all();
        return view('client.account', compact('clients'));
    }
    public function clientEdit($id)
    {
        $clients = Client::find($id);
        return view('client.edit', compact('clients', 'id'));
    }
    public function clientUpdate(Request $request, $id)
    {
        $this->validate($request, array(
            'fname' => 'required|alpha_spaces', 
            'lname' =>  'required|alpha_spaces',
            'contact' => 'numeric|between:1,20',
            'gender' => 'required',
            'barangay' => 'required' ,
            'province' => 'required' ,
            'town' => 'required',
            'city' => 'required',
        ));

        $client = Client::find($id);

        $client->fname = $request->get('fname');
        $client->lname = $request->get('lname');
        $client->contact = $request->get('contact');
        $client->gender = $request->get('gender');
        $client->barangay = $request->get('barangay');
        $client->province = $request->get('province');
        $client->town = $request->get('town');
        $client->city = $request->get('city');

        $client->save();

        return redirect()->route('get.client.account');
    }
    public function clientHistory(Client $client)
    {
        $clients = Client::all();
        return view('client.history', compact('clients'));
    }
    public function clientMessage()
    {
        return view('client.message');
    }

    public function search(){

    }
}