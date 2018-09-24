<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Therapist;
use App\Client;
use App\User;
use Hash;
use Illuminate\Http\Request\TherapistRequest;
use Illuminate\Http\Request\UserRequest;

class TherapistController extends Controller
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
        return view('therapistregistration');
    }

   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        User::insert([

            'username' => $request->post('username'),
            'email' => $request->post('email'),
            'password' =>Hash::make($request->post('password')),
            'user_type' => 'therapist'

            ]);


          $users = User::where('username', $request->post('username'))->get()->toArray();


        Therapist::insert([

            'user_id' =>$users[0]['id'],
            'image' => $request->post('image'),
            'fname' => $request->post('fname'),
            'lname' => $request->post('lname'),
            'contact' => $request->post('number'), 
            'gender' => $request->post('gender'), 
            'barangay' => $request->post('barangay'),
            'province' => $request->post('province'),
            'town' => $request->post('town'),
            'city' => $request->post('city'), 
            'therapist' => $request->post('therapist'),
            'license_number' => $request->post('license_number'),
            'expiry_date' => $request->post('expiry_date'),
            'license_image' => $request->post('license_image'),
            'nbi_image' =>$request->post('nbi_image'),
            'bp_image' => $request->post('bp_image'),

        ]);

        return ('login');
    }

    public function therapistAccount(){

        return view('therapist.account');
    }
    public function therapistAppoint(){

        return view('therapist.appoint');
    }
    public function therapistHistory(){

        return view('therapist.history');
    }
    public function therapistMessage(){

        return view('therapist.message');
    }
       public function therapistEdit(){

        return view('therapist.edit');
    }
 
}
      
      