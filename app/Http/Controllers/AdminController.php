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

        $users = User::where('status', '!=', '2')->paginate(8);
        

    	return view('admin.users', compact('users'));
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

    public function notice(User $user)
    { 
        $to_name = 'TO_NAME';
        $to_email = 'chino.boss31@gmail.com';
        $data = array('name'=>"Peace keepers", "body" => "Test mail");
            
        Mail::send('admin.notice', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
                    ->subject('Notice of Renewal');
            $message->from('therapeacemaker@gmail.com','PeaceMakers');
        });

        return redirect()->back()->with('message', 'Successfully sent mail to therapist!');
    }

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
