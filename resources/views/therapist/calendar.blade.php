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
                
                <div class="form-row">
                    <div class="col-sm-3 col-md-3 col-lg-3">
                        <label for="staticEmail" class="font-weight-bold">Contact</label>
                        <div class="form-control-plaintext" id="staticEmail">
                            {{ $bookingRequest->bookingDetails->contact }}
                        </div>
                    </div>
                    
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <label for="staticEmail" class="font-weight-bold">Diagnosis</label>
                        <div class="form-control-plaintext" id="staticEmail">
                            {{ $bookingRequest->bookingDetails->diagnosis }}
                        </div>
                    </div>

                    <div class="col-sm-2 col-md-2 col-lg-2">
                        <label for="staticEmail" class="font-weight-bold">Diagnosis Image</label>
                       <a data-toggle="modal" data-target="#view-image-{{ $bookingRequest->id }}"><button type="submit" class="btn btn-sm btn-info btn-block"><i class="far fa-eye"></i>&nbsp;View Diagnosis</button></a>

                    <div class="col-md-4">
                        <label for="staticEmail" class="font-weight-bold">IMAGE</label>
                        <div class="form-control-plaintext" id="staticEmail">
                            <img src='{{ asset("storage/{$bookingRequest->bookingDetails->image}") }}' style="width:150px;height:150px;">
                        </div>

                    </div>
                </div>
                
                <hr>

                <div class="row col-md-8 offset-4">
                    <div class="col-sm-4 col-md-4 col-lg-4">
                       <a data-toggle="modal" data-target="#view-progress-{{ $bookingRequest->id }}"><button type="submit" class="btn btn-sm btn-info btn-block"><i class="far fa-eye"></i>&nbsp;View Progress</button> </a>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        @if($bookingRequest->is('approved') || $bookingRequest->is('pending'))
                        {!! Form::open(['url' => route('therapist.reject.appointment', $bookingRequest), 'method' => 'delete', 'onsubmit' => 'javascript:return confirm("Are you sure?")']) !!}
                            <button type="submit" class="btn btn-sm btn-warning btn-block"><i class="fas fa-ban"></i>&nbsp;Reject appointment</button>
                        {!! Form::close() !!}
                        @elseif($bookingRequest->is('rejected'))
                            <div class="alert alert-warning">
                                <p class="mb-0 text-center">
                                    <i class="fa fa-notice"></i> This booking request is rejected!
                                </p>
                            </div>
                        @endif
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                       <a data-toggle="modal" data-target="#view-modal-{{ $bookingRequest->id }}"><button type="submit" class="btn btn-sm btn-info btn-block"><i class="fas fa-eject"></i>&nbsp;Discharge</button> </a>
                    </div>

                <div class="row col-md-8 offset-7">
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
                        <div class="col-md-4">
                        @if($bookingRequest->is('approved'))
                            {!! Form::open(['url' => route('therapist.finish.appointment', $bookingRequest), 'method' => 'patch', 'onsubmit' => 'javascript:return confirm("Are you sure you want to end?")']) !!}
                                <button type="submit" class="btn btn-info btn-block">Discharge</button>
                            {!! Form::close() !!}
                        @elseif($bookingRequest->is('finished'))
                            <div class="alert alert-success">
                                <p class="mb-0 text-center">
                                    <i class="fa fa-notice"></i> This booking request is finished!
                                </p>
                            </div>      
                        @endif
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- View Discharge-->
<div class="modal fade" id="view-modal-{{ $bookingRequest->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Wait...</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="modalView">
            <br>
                <div class="col-sm-12">
                    <center><h5>Do you want to set another appointment with this patient?</h5></center><br>
                    <center>
                        <a class="btn btn-danger" href="{{url('/therapist-checklist/'.$bookingRequest->id)}}">No</a>
                        <button class="btn btn-success">Yes</button>
                    </center>
                </div>                    
            </div>
        </div>
    </div>
</div>
<!-- end of view discharge -->

<!-- View progress-->
<div class="modal fade" id="view-progress-{{ $bookingRequest->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header col-sm-12 col-md-12 col-lg-12">
                <div class="col-sm-7">
                    <h5 class="modal-title" id="exampleModalLabel">Progress Report</h5>
                </div>
                <div class="col-sm-4">
                    <a data-toggle="modal" data-target="#add-progress-{{ $bookingRequest->id }}"><button type="submit" class="btn btn-sm btn-success btn-block"><i class="far fa-plus-square"></i>&nbsp;Add Progress</button></a>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="modalView">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="row">
                        <div class="card col-sm-12 col-md-12 col-lg-12">
                            <label>Date:</label>
                            <p>HELLO</p>
                        </div>
                        &nbsp;
                        <div class="card col-sm-12 col-md-12 col-lg-12">
                            <label>Date:</label>
                            <p>HELLO</p>
                        </div>
                    </div>
                </div>                    
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>
<!-- end of view modal -->

<!-- Add progress-->
<div class="modal fade" id="add-progress-{{ $bookingRequest->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header col-sm-12 col-md-12 col-lg-12">
                <h5 class="modal-title" id="exampleModalLabel">New Progress</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body" id="modalView">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group col-sm-12 col-md-12 col-lg-12">
                                <label>Progress Date:</label>
                                <input class="form-control required" placeholder="Progress Date"  name="progress_date" type="date">
                            </div>
                            <div class="form-group col-sm-12 col-md-12 col-lg-12">
                                <label>New Detail:</label><br>
                                <textarea class="form-control">    
                                </textarea>
                            </div>
                        </div>
                    </div>
                </div>                    
            </div>
            <div class="modal-footer">
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <a data-toggle="modal" data-target="#done-progress-{{ $bookingRequest->id }}"><button type="submit" class="btn btn-sm btn-success btn-block pull-right"><i class="fas fa-check-square"></i>&nbsp;Done Progress</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of view modal -->



<!-- View License image-->
<div class="modal fade" id="view-image-{{ $bookingRequest->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
        </div>
      <div class="modal-body" id="modalView">
        <br>
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <!-- <img src='{{ asset("storage/{$bookingRequest->bookingDetails->image['license_image']}") }}' style="width:412px;height:732px; text-align: center; "> -->
            </div>
        </div>                    
      </div>
    </div>
  </div>
</div>
<!-- end of view modal -->

<br>

    <div class="row">
        <div class="col-md-4">
            @if(!$bookingRequest->is('rejected') && !$bookingRequest->is('finished'))
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