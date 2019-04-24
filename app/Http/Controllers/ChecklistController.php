<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BookingRequest;
use App\Checklist;

class ChecklistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function viewChecklist($bookingID)
    {
        $booking = BookingRequest::find($bookingID);
        return view('therapist.checklist', compact('booking'));
    } 

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $checklist = Checklist::create([
            'booking_id'            => $request->post('booking_id'),
            'therapist_id'          => $request->post('therapist_id'),
            'client_id'             => $request->post('client_id'),
            'chief_complaint'       => $request->post('chief_complaint'),
            'vital_sign'            => $request->post('vital_sign'),
            'bp'                    => $request->post('bp'),
            'pr'                    => $request->post('pr'),
            'rr'                    => $request->post('rr'),
            'assessment'            => $request->post('assessment'),
            'area_ue'               => $request->post('area_ue'),
            'area_le'               => $request->post('area_le'),
            'arom'                  => $request->post('arom'),
            'prom'                  => $request->post('prom'),
            'massage_area'          => $request->post('massage_area'),
            'massage_min'           => $request->post('massage_min'),
            'stretching_hold'       => $request->post('stretching_hold'),
            'stretching_sets'       => $request->post('stretching_sets'),
            'estens_area'           => $request->post('estens_area'),
            'estens_min'            => $request->post('estens_min'),
            'resistance_weight'     => $request->post('resistance_weight'),
            'resistance_motion'     => $request->post('resistance_motion'),
            'resistance_reps'       => $request->post('resistance_reps'),
            'resistance_sets'       => $request->post('resistance_sets'),
            'other_text'            => $request->post('other_text')
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
