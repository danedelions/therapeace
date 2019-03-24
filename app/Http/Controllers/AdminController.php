<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Therapist;
use App\User;
use Mail;
use App\Mail\NewUserWelcome;
use Auth;
use DB;
use App\Http\Requests\UserRequest;
use App\Mail\UserExpiryNotice;



class AdminController extends Controller
{
	public function getDashboard()
    {
    	return view('admin.dashboard'); 
    }

    public function getUserView()
    {
        // if (request()->has('status' != 2)) {
        //     $users = User::where('status', request('status'))
        //         ->paginate(10)->appends('status', request('status'));
        // } else {
        //     $users = User::paginate(10);
        // }

        $users = User::where('status', !2)->paginate(5);
        

    	return view('admin.users', compact('users','newstatus'));
    }

    public function getPendingView()
    {
        $users = User::all()->where('status',2);

    	return view('admin.pending', compact('users'));
    }

    public function getHistoryView()
    {
    	return view('admin.history');
    }

    public function getReportsView()
    {
    	return view('admin.reports');
    }

    public function welcome(User $user)
    { 
        Mail::to($user->email)->send(new NewUserWelcome());
        return redirect()->back();
    }

    // public function notice(User $user)
    // { 
    //     Mail::to($user->email)->send(new UserExpiryNotice());
    //     return redirect()->back();
    // }

    public function statusUpdate(User $user)
    {        
        $user->update(['status' => !$user->status]);
        return redirect()->back();

    }


    

    //admin.users2
    // public function getUserView()
    // {
    //     $users = User::all();
    //     return view('admin.users2', compact('users','newstatus'));
    // }

    /**
     * Displays datatables front end view
     *
     * @return \Illuminate\View\View
     */
    // public function getIndex(User $user)
    // {
    //     return view('admin.users2');
    // }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
     
    // public function anyData()
    // {
    //     return Datatables::of(User::query())->make(true);
    // }
}
