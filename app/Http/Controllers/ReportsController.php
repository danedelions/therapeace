<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Report;

class ReportsController extends Controller
{
    public function storeRating(Request $request)
    {
        $report = Report::create([
            'booking_id'            => $request->post('booking_id'),
            'therapist_id'          => $request->post('therapist_id'),
            'client_id'             => $request->post('client_id'),
            'rating'                => $request->post('rating'),
            'reports'               => $request->post('reports')
        ]);

        return redirect()->back();
    }
}
