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
            
            return "success".Auth::user()->user_type;
            if(Auth::user()->user_type === 'therapist'){
                // view('therapist');
                return redirect('therapist');
            }else {
                // view('client');
                return redirect('client');
            }
        }else{
             return "wrong".Auth::attempt(array('username' => $request->post('username'), 'password' => $request->post('password')));
        }
<<<<<<< HEAD
    	    	// user::where('username', 'name');
=======
<<<<<<< HEAD
             return "sakto".Auth::attempt(array('username' => $request->post('username'), 'password' => $request->post('password')));
   
    	    	// user::where('username', 'name');
=======
       
    	//     	// user::where('username', 'name');
>>>>>>> 343911f030675a1b612f42d8b0b2a196449a0df0

        // if(Auth::attempt(array('username' => $request->post('username'), 'password' => $request->post('post')))){

        //     if(Auth::user()->user_type == 'therapist'){
        //         return "success";
        //     } else {
        //         return "wrong";
        //     }
        // }
>>>>>>> 48de9d7a0fe8812ce236af581338892d9268df2f
	}
}
