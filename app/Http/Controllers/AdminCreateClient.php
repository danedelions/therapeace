<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Requests\UserRequest;
use App\Http\Requests\ClientRequest;
use App\BookingRequest;
use App\Client;
use App\Therapist;
use App\User;
use App\UserAddress;
use DB;
use Hash;
use Auth;
use App\Specialty;
use Carbon\Carbon;
use Illuminate\Validation\Rule;

class AdminCreateClient extends Controller
{
    public function index()
    {
        return view('admin.createclient');
    }
    public function store(Request $request)
    {
        // $validatedInput = $request->validate([
        //     'email' => 'unique:users,email'
        // ]);

        \DB::transaction(function () use ($request) {
            User::insert([
                'username'  => $request->post('username'),
                'email'     => $request->post('email'),
                'password'  => Hash::make($request->post('password')),
                'status'    => 0,
                'user_type' => 'client'
            ]);
            $users  = User::where('username', $request->post('username'))->get();
            $client = Client::insert([
                'user_id'         => $users[0]['id'],
                'fname'           => $request->post('fname'),
                'lname'           => $request->post('lname'),
                'contact'         => $request->post('number'),
                'gender'          => $request->post('gender'),
                'city'            => $request->post('city'),
                'province'        => $request->post('province'),
                'res_detail'      => $request->post('res_detail'),
                'street'          => $request->post('street'),
                'brgy'            => $request->post('brgy'),
                'building'        => $request->post('building'),
                'landmark'        => $request->post('landmark'),
                'address_remarks' => $request->post('address_remarks')
            ]);
        });
        
        // Session::flash('message', 'Successfully created client!');
        return view('/admin-user');
    }
}
