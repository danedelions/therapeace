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

    // public function __construct()
    // {
    //     $this->middleware('auth')->except(['index', 'store']);
    // }
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
            'streetaddress' => $request->post('streetaddress'),
            'city' => $request->post('city'),
            'town' => $request->post('town'),
            'province' => $request->post('province'), 
            'barangay' => $request->post('barangay'), 
            'postal_code' => $request->post('postal_code'), 
            'therapist' => $request->post('therapist'),
            'license_number' => $request->post('license_number'),
            'expiry_date' => $request->post('expiry_date'),
            'license_image' => $request->post('license_image'),
            'nbi_image' =>$request->post('nbi_image'),
            'bp_image' => $request->post('bp_image'),

        ]);

        return view('login');
    }

    public function edit(Therapist $therapist)
    {
        return view('therapist.edit', compact('therapist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TherapistRequest $request, Therapist $therapist)
    {

        $therapist->where('user_id', $therapist->id)->update($request->only(['image', 'fname', 'lname','contact', 'gender', 'barangay', 'province', 'town', 'city', 'therapist', 'license_number', 'license_image', 'expiry_date', 'nbi_image', 'bp_image']));
        User::where('id', $therapist->id)->update($request->only(['username']));
        return redirect()->route('therapist.account');

        // ClientProfile::where('client_id', $client->id)->update($request->only(['firstname','middlename','lastname','civil_status','birthday']));
        // $post->where('id', $post->id)->update($request->only(['title', 'blog_post']));
        // return redirect()->route('admin/');

    }

    public function therapistAccount(){
        $therapist = Therapist::all();
        return view('therapist.account', compact('therapist'));
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


        // $user = DB::table('users')->where('id', );



        // $user = User::get()->toArray();

        // dd($user);



         return view('therapist.edit');
    }
 
}
      
      