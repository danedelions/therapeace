<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;


class LoginController extends Controller
{
    //
     
    public function index(Request $request)
    {
    	
    	print_r($request->post('success'));
    	if (Auth::attempt(array('username' => $request->post('username'), 'password' => $request->post('password')))){

            echo "success". Auth::user()->user_type;
            if(Auth::user()->user_type === 'therapist'){
            	view('therapist');
            }else {
            	view('client');
            }
        }else{
             return "wrong".Auth::attempt(array('username' => $request->post('username'), 'password' => $request->post('password')));
        }
       
    	    	// user::where('username', 'name');
	}
}
