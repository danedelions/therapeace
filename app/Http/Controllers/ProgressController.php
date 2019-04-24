<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Progress;

class ProgressController extends Controller
{
    
    public function storeProgress(Request $request)
    {
        $progress = Progress::create([
            'booking_id'        => $request->post('booking_id'),
            'therapist_id'      => $request->post('therapist_id'),
            'client_id'         => $request->post('client_id'),
            'session_date'  =>  $request->post('session_date'),
            'progress'      =>  $request->post('progress')
        ]);

       
        return redirect()->back();
    }
}
