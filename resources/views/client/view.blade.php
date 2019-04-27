@extends('layouts.cli')

@section('page-section')

<div class="col-md-12 row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-info">
                Session Basic Information
            </div>
            <div class="card-body">
                <div class="form-group row">
					<label class="col-lg-4">Client Name</label>
					<div class="col-lg-7">{{$bookings->client->fullName}}</div>
                </div>
                <div class="form-group row">
					<label class="col-lg-4">Therapist</label>
					<div class="col-lg-7">{{$bookings->therapist->fullName}}</div>
                </div>
                <div class="form-group row">
					<label class="col-lg-4">Diagnosis</label>
					<div class="col-lg-7">{{$bookings->bookingDetails->diagnosis}}</div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-4">Session Dates</label>
                    @if(!empty($bookings->appointment->durationDate))
                        <div class="col-lg-7">{{$bookings->appointment->durationDate = date("F j, Y, F j, Y")}}</div>
                    @else
                        <div class="col-lg-7">No dates added yet!</div>
                    @endif
                </div>
            </div>
            <div class="card-footer">
                <div class="col-lg-6">

                            <a href="{{url('/booktherapist/'. $bookings->therapist_id)}}">
                                <button class="btn btn-warning">Re-book therapist</button>
                            </a>     
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-info">
            Session Transaction
            </div>
            <div class="card-body">
                <div class="form-group row">
					<label class="col-lg-4"><b>Therapist Rate</b></label>
					<div class="col-lg-7">{{$bookings->therapist->personal_rate}} per hour</div>
                </div>
                <div class="form-group row">
					<label class="col-lg-4">Session Dates</label>
					<div class="col-lg-7">{{$bookings->appointment->durationDate}}</div>
                </div>
                <div class="form-group row">
					<label class="col-lg-4">Number of Days</label>
					<div class="col-lg-7">{{$bookings->appointment->numberDays}}</div>
                </div>
                <div class="form-group row">
					<label class="col-lg-4">Hours per day</label>
					<div class="col-lg-7">{{$bookings->appointment->dailyHours}}</div>
                </div>
                <div class="form-group row">
					<label class="col-lg-4">Services Availed</label>
					<div class="col-lg-7">
                    @if(!empty($bookings->appointment->other_services))
                        {{$bookings->appointment->other_services}}
                    @else
                        None availed
                    @endif
                    </div>
                </div>
                <div class="form-group row">
					<label class="col-lg-4">Services Availed Fees</label>
					<div class="col-lg-7">
                    @if(!empty($bookings->appointment->other_services_fee))
                        {{$bookings->appointment->other_services_fee}}
                    @else
                        None availed
                    @endif
                    </div>
                </div>
                <hr>
                <div class="form-group row">
					<label class="col-lg-4">Total Price of Session/s</label>
					<div class="col-lg-7">
                        {{$bookings->appointment->totalPrice}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
   

@endsection