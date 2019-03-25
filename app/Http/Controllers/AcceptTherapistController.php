<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Therapist;

class AcceptTherapistController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, Therapist $therapist)
    {
        $therapist->accept();

        return redirect()->back()->with('message', 'Successfully accecpted the therapist!');
    }
}
