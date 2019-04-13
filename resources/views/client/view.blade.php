@extends('layouts.cli')

@section('page-section')

@if($client->booking->is('rejected') ||$booking->is('pending') )
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-danger">
             Oops!
            </div>
            <div class="card-body text-center">
                This request has been rejected or is not yet approved!
            </div>
        </div>
    </div>
@elseif($booking->is('approved'))
<!-- display message and transaction -->
<div class="col-md-12">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-info">
            Session Information
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-lg-4">Client Name</label>
					<div class="col-lg-8">{{ $client->fullName }}</div>

                    <label class="col-lg-4">Therapist Name</label>
					<div class="col-lg-8"> {{ $client->id}}</div>

                    <label class="col-lg-4">Diagnosis</label>
					<div class="col-lg-8"> {{ $booking->bookingDetails->diagnosis}}</div>     
                </div>
            </div>
        </div>
    </div>
</div>
@elseif($booking->is('finished'))
<!-- display transaction only -->
<div class="col-md-12">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-info">
            Session Information
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-lg-4">Client Name</label>
					<div class="col-lg-8">{{ $client->fullName }}</div>

                    <label class="col-lg-4">Therapist Name</label>
					<div class="col-lg-8"> {{ $client->id}}</div>

                    <div class="card col-md-12">
                        <label for="">Transaction Details</label>

                    </div>
                    

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endif

@endsection