<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

class ClientController extends Controller
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
        return view('clientregistration');
    }

    public function store(Request $request)
    {
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
                'street'          => $request->post('street'),
                'brgy'            => $request->post('brgy'),
                'res_detail'      => $request->post('res_detail'),
                'building'        => $request->post('building'),
                'landmark'        => $request->post('landmark'),
                'address_remarks' => $request->post('address_remarks')
            ]);

        });

        return view('login');
    }

    public function clientFind(Therapist $therapists, Request $request)
    {
        $therapists  = Therapist::query()
                                ->whereHas('user', function ($q) {
                                    $q->where('status', '=', '0');
                                })
                                ->when($type = $request->therapist, function ($q) use ($type) {
                                    $q->where('therapist', $type);
                                })
                                ->when($specialties = $request->t_specialties, function ($q) use ($specialties) {
                                    $q->whereHas('specialties', function ($q) use ($specialties) {
                                        $wq->whereIn('specialties.name', $specialties);
                                    });
                                })->get();
        $specialties = Specialty::select('name')->pluck('name', 'name');

        return view('client.find', compact('therapists', 'specialties'));
    }

    public function clientAccount(Request $request)
    {
        $query = Client::query();

        $client = $query->whereUserId(Auth::id())->with('user');

        $client->with([
            'booking' => function ($q) use ($request){
                $q->when($request->status, function ($q) use ($request)  {
                    $q->where('status', $request->status);
                })
                ->when($request->name, function ($q) use ($request) {
                    $q->whereHas('therapist', function ($q) use($request) {
                        $q->whereRaw('CONCAT(fname, " ", lname) LIKE "%'.$request->name.'%"');
                    });
                })
                ->with(['therapist.user', 'bookingDetails']);
            },
        ]);

        $client = $client->first();

        return view('client.account', compact('client'));
    }  


    public function edit($userId)
    {
        $client = Client::find($userId);

        return view('client.edit', compact('client'));
    }

    public function update(ClientRequest $request, $id)
    {
        // dd($therapist->toArray());
        $client  = Client::find($id);
        $request = $request->validated();
        // dd($request);

        $client->fill($request)->save();
        User::where('id', Auth::id())->update(['username' => $request['username'], 'email' => $request['email']]);

        return redirect()->route('get.client-account');
    }

    public function clientHistory(Therapist $therapists)
    {
        $therapists = Therapist::all();

        return view('client.history', compact('therapists'));
    }

    public function clientMessage()
    {
        $therapists = Therapist::all();

        return view('client.message', compact('therapists'));
    }

    public function search(Request $request, Therapist $therapists)
    {

        $query = $request->get('q');
        if ($query) {
            $therapists = $query ? Therapist::search($query)->orderBy('id', 'desc')->paginate(7) : Therapist::all();

            return view('client.find', compact('therapists'));
        }
    }

    public function getView($bookingID)
    {
        $bookings = BookingRequest::find($bookingID);

        return view('client.view', compact('bookings'));
    }

    public function cancelAppointment(Request $request, BookingRequest $bookingRequest)
    {

        $bookingRequest->cancel();

        return redirect()->back()->with('cancelStatus', true);
    }
}