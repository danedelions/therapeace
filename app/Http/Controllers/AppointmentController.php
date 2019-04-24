<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Calendar;
use App\Appointment;

class AppointmentController extends Controller
{
    public function addEvent()
    {
    	$appointments = Appointment::create([
    		'therapist_id' => Auth::id(),
    		''
    	]);
    }
}
