@extends('layouts.the')

@section('page-section')
@json($errors->all())

<div class="row">
    <div class="col-md-4">
        <div class="card mb-2">
            <div class="card-header bg-info">
                Booking Details
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="staticEmail" class="font-weight-bold">Client Name</label>
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $bookingRequest->client->fullname }}">
                </div>
                <div class="form-group">
                    <label for="staticEmail" class="font-weight-bold">Address</label>
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $bookingRequest->bookingDetails->user_address }}">
                </div>
                <div class="form-group">
                    <label for="staticEmail" class="font-weight-bold">Notes</label>
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $bookingRequest->bookingDetails->notes }}">
                </div>
                <div class="form-group">
                    <label for="staticEmail" class="font-weight-bold">Contact</label>
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $bookingRequest->bookingDetails->contact }}">
                </div>
                <div class="form-group">
                    <label for="staticEmail" class="font-weight-bold">Diagnosis</label>
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $bookingRequest->bookingDetails->diagnosis }}">
                    <!-- <div class="form-control">{{ $bookingRequest->bookingDetails->diagnosis }}</div> -->
                </div>

                    <hr>
                @if($bookingRequest->is('approved') || $bookingRequest->is('pending'))
                {!! Form::open(['url' => route('therapist.reject.appointment', $bookingRequest), 'method' => 'delete', 'onsubmit' => 'javascript:return confirm("Are you sure?")']) !!}
                    <button type="submit" class="btn btn-warning btn-block">Reject this appointment</button>
                {!! Form::close() !!}
                @elseif($bookingRequest->is('rejected'))
                <div class="alert alert-warning">
                    <p class="mb-0 text-center">
                        <i class="fa fa-notice"></i> This booking request is rejected!
                    </p>
                </div>
                @endif
                <div class="form-group">
                   <button type="submit" class="btn btn-info btn-block">Discharge</button> 
                </div>
                
            </div>
        </div>
        @if(!$bookingRequest->is('rejected'))
        <div class="card">
            <div class="card-header bg-info">
                Set Appointment Details
            </div>
                <div class="card-body">
                @if($bookingRequest->appointment)
                    {!! Form::model($bookingRequest->appointment, ['url' => route('therapist.book.appointment', $bookingRequest)]) !!}
                @else
                    {!! Form::open(['url' => route('therapist.book.appointment', $bookingRequest)]) !!}
                @endif
                    <div class="form-row">
                        <div class="col-6">
                            {!! Form::inputGroup('date', 'Starting', 'start_date') !!}
                        </div>
                        <div class="col-6">
                            {!! Form::inputGroup('time', '&nbsp;', 'start_date_time') !!}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-6">
                            {!! Form::inputGroup('date', 'Until', 'end_date') !!}
                        </div>
                        <div class="col-6">
                            {!! Form::inputGroup('time', '&nbsp;', 'end_date_time') !!}
                        </div>
                    </div>
                    {!! Form::inputGroup('text', 'Other Services Applied', 'other_services') !!}
                    {!! Form::inputGroup('number', 'Fee', 'other_services_fee') !!}
                    <button type="submit" class="btn btn-success">Submit</button>
                {!! Form::close() !!}
            </div>
        </div>
        @endif
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-info">
                Appointment Calendar
            </div>
            <div class="card-body" id="calendar"></div>
        </div>
    </div>
</div>

@endsection



@push('styles')
<link rel="stylesheet" href="{{ asset('fullcalendar/fullcalendar.min.css') }}">    
@endpush



@push('scripts')
<script src="{{ asset('fullcalendar/moment.min.js') }}"></script>
<script src="{{ asset('fullcalendar/fullcalendar.min.js') }}"></script>

<script>
    $(document).ready(function() {
        var events = {!! $events->toJson() !!}
        
        $('#calendar').fullCalendar({
            events:  events
        });
    })
</script>
@endpush

