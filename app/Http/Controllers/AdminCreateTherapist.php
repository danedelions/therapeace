<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use App\User;
use App\Client;
use App\Specialty;
use App\Therapist;
use App\BookingRequest;
use Illuminate\Http\Request;
use App\Http\Requests\TherapistRequest;
use Carbon\Carbon;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Requests\UserRequest;
use App\Http\Requests\ClientRequest;
use App\UserAddress;
use DB;

class AdminCreateTherapist extends Controller
{
    public function index()
    {
        return view('admin.createtherapist');
    }

    public function store(Request $request)
    {

        \DB::transaction(function () use ($request) {
            User::insert([
                'username'  => $request->post('username'),
                'email'     => $request->post('email'),
                'password'  => Hash::make($request->post('password')),
                'user_type' => 'therapist',
                'status'    => 2,
            ]);

            $users = User::where('username', $request->post('username'))->get();
    
            // $image = $request->file('image')->store(
            //     "pictures/{$users[0]['username']}",
            //     'public'
            // );

            // $licenseimage_front = $request->file('licenseimage_front')->store(
            //     "licensepicture/front/{$users[0]['username']}",
            //     'public'
            // );
            //  $licenseimage_back = $request->file('licenseimage_back')->store(
            //     "licensepicture/back/{$users[0]['username']}",
            //     'public'
            // );
            // $nbi_image     = $request->file('nbi_image')->store(
            //     "pictures/{$users[0]['username']}",
            //     'public'
            // );
            // $bc_image      = $request->file('bc_image')->store(
            //     "pictures/{$users[0]['username']}",
            //     'public'
            // );
            Therapist::insert([
                'user_id'        => $users[0]['id'],
                'image'          => $image,
                'fname'          => $request->post('fname'),
                'lname'          => $request->post('lname'),
                'contact'        => $request->post('number'),
                'gender'         => $request->post('gender'),
                'streetaddress'  => $request->post('streetaddress'),
                'city'           => $request->post('city'),
                'province'       => $request->post('province'),
                'barangay'       => $request->post('barangay'),
                'postal_code'    => $request->post('postal_code'),
                'longitude'      => $request->post('longitude'),
                'latitude'       => $request->post('latitude'),
                'therapist'      => $request->post('therapist'),
                'license_number' => $request->post('license_number'),
                'expiry_date'    => $request->post('expiry_date'),
                'licenseimage_front'  => $licenseimage_front,
                'licenseimage_back'  => $licenseimage_back,
                'nbi_image'      => $nbi_image,
                'bc_image'       => $bc_image,
                'user_bio'       => $request->post('user_bio'),
                'personal_rate'  => 500.00

            ]);
        });


        return view('admin.createtherapist');
    }

    public function edit($userId)
    {
        $specialties = Specialty::select('name')->pluck('name', 'name');
        $therapist   = Therapist::with(['user', 'specialties'])->find($userId);

        return view('therapist.edit', compact('therapist', 'specialties'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     * @return \Illuminate\Http\Response
     */
    public function update(TherapistRequest $request, $id)
    {  
        $therapist = Therapist::findOrFail($id);
        $therapist->update($request->all());

        $specialties = collect($request->specialties);
        if($specialties->isNotEmpty()){
             $ids = $specialties->map(function ($item) {
                $specialty = Specialty::firstOrCreate(['name' => $item]);
                return $specialty->id;
            });
            $therapist->specialties()->sync($ids);
        }

        $users = User::where('username', $request['username'])->first();

        if($request->hasFile('$/image')) {
            $image = $request->file('$/image')->store(
                "pictures/{$users[0]['username']}",
                'public'
            );
            
            $therapist->image = $image;
        }

        if($request->hasFile('licenseimage_front')) {
            $licenseimage_front = $request->file('licenseimage_front')->store(
                "licensepicture/front/{$users[0]['username']}",
                'public'
            );
            
            $therapist->licenseimage_front = $licenseimage_front;
        }
        
        if($request->hasFile('licenseimage_back')) {
            $licenseimage_back = $request->file('licenseimage_back')->store(
                "licensepicture/back/{$users[0]['username']}",
                'public'
            );
            
            $therapist->licenseimage_back = $licenseimage_back;
        }        

        $request = $request->validated();

        $therapist->fill($request)->save();
        User::where('id', Auth::id())->update(['username' => $request['username'], 'email' => $request['email']]);

        return redirect()->route('get.therapist-account');
    }
}
