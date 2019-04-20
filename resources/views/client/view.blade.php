@extends('layouts.cli')

@section('page-section')

<div class="col-md-12">
    <div class="col-md-5">
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
                        <div class="col-lg-7">{{$bookings->appointment->durationDate}}</div>
                    @else
                        <div class="col-lg-7">No dates added yet!</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection