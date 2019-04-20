<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Client;
use App\Therapist;
use App\User;
use App\Admin;
use Mail;
use Auth;
use DB;
use App\Http\Requests\UserRequest;
use App\Mail\UserExpiryNotice;
use App\Http\Requests\TherapistRequest;



class AdminController extends Controller
{
	public function getUserView(Request $request)
    {
        $users = User::where([['status', '!=', '2'], ['user_type', '!=', 'admin']])->paginate(7);     

    	return view('admin.users', compact('users'));
    }

    public function getPendingView()
    {
        $users = User::where('status',2)->paginate(7);

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

    public function notice(Request $request, $id)
    {         
        Mail::send(new UserExpiryNotice($id));

        return redirect()->back()->with('message', 'Successfully sent mail to therapist!');
    }

    public function statusUpdate(User $user)
    {        
        $user->update(['status' => !$user->status]);
        return redirect()->back();

    }

    public function filterUsers(User $users, $status)
    {
       
        if(request()->has('status')){
            $users = User::where([['status', request('status')], ['user_type', '!=', 'admin']])->paginate(7);    
        }else{
            $users = User::where([['status', '!=', '2'], ['user_type', '!=', 'admin']])->paginate(7);
        }        

        return view('admin.users', compact('users'));
    }
    

  /*$username = User::where('username',$request['username'])->first();
        $email = User::where('email', $request['email'])->first();

        $to_name = $username[0]['username'];
        $to_email = $email[0]['email'];
        // $data = array('name'=>"Peace keepers", "body" => "Test mail");
            
        Mail::send('admin.notice', function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
                    ->subject('Notice of Renewal');
            $message->from('therapeacemaker@gmail.com','PeaceMakers');
        });*/
}
