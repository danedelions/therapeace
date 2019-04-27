<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use Auth;
use App\User;
use Illuminate\Validation\Rule;


class LoginController extends Controller
{
    public function view()
    {
        return view('login');
    }

    public function doLogin(Request $request)
    {
        $credentials = $request->validate([
            'username' => [
            'required',
                Rule::exists('users')->where(function ($q) {
                    $q->where([['status', '!=', '1'],['status', '!=', '2']]);
                })
            ],


            'password' => 'required',
        ], [
            'username.exists' => 'Username does not exist or is not yet accepted.'
        ]);


        $loggedIn = Auth::attempt($credentials);

//        die(json_encode($credentials));

        if ($loggedIn){

            // return "success".Auth::user()->user_type;
            if(Auth::user()->user_type === 'therapist'){
                // view('therapist');
                if(Auth::user()->status === 2){
                    return redirect()->back();

                }else if (Auth::user()->status === 0) {
                    return redirect(route('get.therapist-account'));
                }

            }else if(Auth::user()->user_type === 'client'){
                // view('client');
                return redirect(route('get.client-find'));
            }else if(Auth::user()->user_type === 'admin'){
                // view('admin');
                return redirect(route('get.view'));
            }
        }else{
            
             return view ('login').Auth::attempt(array('username' => $request->post('username'), 'password' => $request->post('password')));
        }

       // user::where('username', 'name');


        if ($loggedIn) {
            return Auth::user()->homepage();
        } else {
            return redirect()->back()->withErrors();
        }

    }

    public function Logout(Request $request)
    {
        Auth::logout();

        session()->flash('message', 'Some goodbye message');

        return redirect('/');
    }


}

