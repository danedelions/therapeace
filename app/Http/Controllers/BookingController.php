<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Therapist;
use App\User;
use App\BookingRequest;
use App\BookingDetail;
use Redirect;
use Auth;
use Illuminate\Validation\Rule;
class BookingController extends Controller
{
    public function index($id)
    {
    	$therapist = Therapist::ofUser($id)->first();
    	$client = Client::ofUser(Auth::id())->first();

        return view('client.book', compact('therapist','client'));
    }

    public function submitDetails(Request $request)
    {
        $validatedInput = $request->validate([
            'diagnosis' => 'required|regex:/^[\pL\s\-]+$/u',
            'therapist_id' => 'required',
            'name' => 'required',
            'patient' => 'required'
        ],
        [
            'diagnosis.alpha' => 'Diagnosis should not contain numbers!',
            'diagnosis.required' => 'Input your diagnosis!'
        ]);

    	$bookingRequest = BookingRequest::create([
    		'therapist_id' => $request->post('therapist_id'),
    		'client_id' => Auth::id(),
    		'name' => $request->post('name'),
    		'status' => 0,
        ]);
        
        $users = Auth::id();
        $image = $request->file('image')->store(
            "booking/{$therapist}",
            'public'
        );

        
        $bookingRequest->bookingDetails()->create([
                'patient'=> $request->post('patient'),
                'diagnosis' => $request->post('diagnosis'),
                'image' => $image,
                'notes' => $request->post('notes'),
                'user_address' => $request->post('user_address'),
                'email' => $request->post('email'),
                'contact' => $request->post('contact')
        ]);

    	return redirect()->route('get.client-account');
    }

}
