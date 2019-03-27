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
        \DB::transaction(function () use ($request) {
            User::insert([
                'username'  => $request->post('username'),
                'email'     => $request->post('email'),
                'password'  => Hash::make($request->post('password')),
                'user_type' => 'therapist',
                'status' => 2
            ]);

            $users = User::where('username', $request->post('username'))->get();

            $image = $request->file('image')->store(
                "pictures/{$users[0]['username']}",
                'public'
            );

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
                'license_image'  => $request->post('license_image'),
                'nbi_image'      => $request->post('nbi_image'),
                'bc_image'       => $request->post('bc_image'),
            ]);
        });
        // $this->getData();

        return view('login');
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
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TherapistRequest $request, $id)
    {
        $therapist = Therapist::find($id);

        $specialties = collect($request->specialties);
        if ($specialties->isNotEmpty()) {
            $ids = $specialties->map(function ($item) {
                $specialty = Specialty::firstOrCreate(['name' => $item]);
                return $specialty->id;
            });

            $therapist->specialties()->sync($ids);
        }

        $request = $request->validated();
        // dd($request);
        if (isset($request['image'])) {
            $request['image'] = request()->file('image')->store('image', 'public');
        }

        if (isset($request['license_image'])) {
            $request['license_image'] = request()->file('license_image')->store('image', 'public');
        }

        $therapist->fill($request)->save();

        User::where('id', Auth::id())->update(['username' => $request['username'], 'email' => $request['email']]);

        return redirect()->route('get.therapist-account');
    }

    public function therapistAccount(BookingRequest $bookings)
    {
        $therapist = Therapist::whereUserId(Auth::id())->with(['user', 'specialties'])->first();

        $therapist->load([
            'bookingRequest',
            'bookingRequest.client.user',
            'bookingRequest.bookingDetails'
        ]);

        // dd($therapist->toArray());

        return view('therapist.account', compact('therapist'));
    }

    public function therapistAppoint(Client $clients)
    {
        $clients = Client::all();
        return view('therapist.appoint', compact('clients'));
    }

    public function therapistHistory(Client $clients)
    {
        $clients = Client::all();
        return view('therapist.history', compact('clients'));
        // return view('client.book');
    }

    public function therapistMessage()
    {
        return view('therapist.message');
    }

    public function createSpecialties()
    {
        return view('therapist.specialty');
    }

    public function storeSpecialties()
    {
        $specialties;
    }

    public function viewChecklist()
    {
        return view('therapist.checklist');
    } 

    public function viewPending()
    {
        return view('therapist.pending');
    }
}
