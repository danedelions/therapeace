<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use app\User;


class LoginController extends Controller
{
    //

    public function view()
    {
        return view('login');
    }

     
    public function doLogin(Request $request)
    {
    	
        print_r($request->post('success'));
        if (Auth::attempt(array('username' => $request->post('username'), 'password' => $request->post('password')))){
            
            // return "success".Auth::user()->user_type;
            if(Auth::user()->user_type === 'therapist'){
                // view('therapist');
                return redirect(route('get.therapist-account'));

            }else{
                // view('client');
                return redirect(route('get.client-account'));

            }
        }else{
             return "wrong".Auth::attempt(array('username' => $request->post('username'), 'password' => $request->post('password')));
        }
    	    	// user::where('username', 'name');

             return "sakto".Auth::attempt(array('username' => $request->post('username'), 'password' => $request->post('password')));
   
    	    	// user::where('username', 'name');

       
    	//     	// user::where('username', 'name');

        // if(Auth::attempt(array('username' => $request->post('username'), 'password' => $request->post('post')))){

        //     if(Auth::user()->user_type == 'therapist'){
        //         return "success";
        //     } else {
        //         return "wrong";
        //     }
        // }

	}
    public function Logout(Request $request){
    Auth::logout();

    session()->flash('message', 'Some goodbye message');

    return redirect('/login');
  }

}
