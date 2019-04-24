<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\UserRequest;
use App\Mail\UserExpiryNotice;
use App\Http\Requests\TherapistRequest;
use App\Client;
use App\Therapist;
use App\User;
use App\Admin;
use App\BookingRequest;
use Mail;
use Auth;
use DB;


class AdminController extends Controller
{
	public function getUserView(Request $request)
    {

        $query = User::query();

        $this->beforeIndex($query);

        $users = $query->where([['status', '!=', '1'],['status', '!=', '2'], ['user_type', '!=', 'admin']])->paginate(7);

        return view('admin.users', compact('users'));
    }

    public function beforeIndex($query)
     {   
         $request = request();

         $query->when($request->username, function ($q) use ($request) {
             $q->where('username', 'like', "%{$request->username}%");
         });

         $query->when($request->email, function ($q) use ($request) {
             $q->where('email', 'like', "%{$request->email}%");
         });

         $query->when($request->status, function ($q) use ($request) {
            $q->where('status', 'like', "%{$request->status}%");
         });

         //  $query->when($request->therapist, function ($q) use ($request) {
         //    $q->where('therapist', 'like', "%{$request->therapist->therapist}%");
         // });
         $query->with(['client', 'therapist']);
     }

    public function getPendingView(Request $request)
    {
        $query = User::query();

        $this->beforeIndex($query);

        $users = $query->where('status',2)->paginate(7);

    	return view('admin.pending', compact('users'));
    }

    public function getHistoryView()
    {
        $bookrequest = BookingRequest::where('status',3)->paginate(7);

        // $users = $query->where([['status', '!=', '1'],['status', '!=', '2'], ['user_type', '!=', 'admin']])->paginate(7);

    	return view('admin.history', compact('bookrequest'));
    }

    public function getReportsView()
    {   
        $bookrequest = BookingRequest::where('status',3)->paginate(7);

    	return view('admin.reports', compact('bookrequest'));
    }

    public function notice(Request $request, $id)
    {         
        Mail::send(new UserExpiryNotice($id));

        return redirect()->back();
    }

    public function statusUpdate(User $user)
    {        
        $user->update(['status' => !$user->status]);

        return redirect()->back();
    }

    public function getBlockUserView(Request $request)
    {
        $query = User::query();

        $this->beforeIndex($query);

        $users = $query->where([['status','1'], ['user_type', '!=', 'admin']])->paginate(7);

        return view('admin.blockusers', compact('users'));
    }    

   
      
}
