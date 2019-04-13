@extends('layouts.the')

@section('page-section')
@json($errors->all())

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-info">
                Booking Details
            </div>
            <div class="card-body">
                <div class="form-row">
                    <div class="col-md-3">
                        <label for="staticEmail" class="font-weight-bold">Client Name</label>
                        <div class="form-control-plaintext" id="staticEmail">
                            {{ $bookingRequest->client->fullname }}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="staticEmail" class="font-weight-bold">Address</label>
                        <div class="form-control-plaintext" id="staticEmail">
                            {{ $bookingRequest->bookingDetails->user_address }}
                        </div>
                    </div>
                    <div class="col-md-5">
                        <label for="staticEmail" class="font-weight-bold">Notes</label>
                        <div class="form-control-plaintext" id="staticEmail">
                            {{ $bookingRequest->bookingDetails->notes }}
                        </div>
                    </div>
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
                            {!! Form::inputGroup('date', 'Dates of Session', 'start_date') !!}
                        </div>
                        
                        <div class="col-6">
                            {!! Form::inputGroup('date', '&nbsp;', 'end_date') !!}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-6">
                            {!! Form::inputGroup('time', 'Time of Session', 'start_date_time') !!}
                        </div>
                    </div>
                </div>
                
                <hr>
                <div class="row col-md-8 offset-7   ">
                        <div class="col-md-4">
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
                        </div>
                        
                    </div>
                  </div>
                </div>
                <!-- end of view modal -->
            </div>
        </div>
    </div>
</div>
<br>
    <div class="row">
        <div class="col-md-4">
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

