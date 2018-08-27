<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use app\User;


class LoginController extends Controller
{
    //
     
    public function index(Request $request)
    {
    	
    	print_r($request->post('success'));
    	if (Auth::attempt(array('username' => $request->post('username'), 'password' => $request->post('password')))){

            Auth::user()->user_type;
            if(Auth::user()->user_type === 'therapist'){
            	view('therapist');
            }else {
            	url('/client-accont/{id}');
            }
        }else{
             return "wrong".Auth::attempt(array('username' => $request->post('username'), 'password' => $request->post('password')));
        }
       
    	    	// user::where('username', 'name');
	}
}
