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
                    $q->where('status', '!=', '2');
                })
            ],
            'password' => 'required',
        ], [
            'username.exists' => 'Username does not exist or is not yet accepted.'
        ]);


        $loggedIn = Auth::attempt($credentials);

//        die(json_encode($credentials));

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
