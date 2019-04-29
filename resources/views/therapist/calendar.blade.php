@extends('layouts.the')

@section('page-section')
<!-- @json($errors->all()) -->

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
                    <div class="col-md-3">
                        <label for="staticEmail" class="font-weight-bold">Contact</label>
                        <div class="form-control-plaintext" id="staticEmail">
                            {{ $bookingRequest->bookingDetails->contact }}
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <label for="staticEmail" class="font-weight-bold">Diagnosis</label>
                        <div class="form-control-plaintext" id="staticEmail">
                            {{ $bookingRequest->bookingDetails->diagnosis }}
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label for="staticEmail" class="font-weight-bold">Diagnosis Image</label>
                        <div class="form-control-plaintext" id="staticEmail">
                        <a data-toggle="modal" data-target="#view-diagnosis-{{ $bookingRequest->bookingDetails->image }}">
                            <button type="submit" class="btn btn-sm btn-info btn-block">
                            <i class="fa fa-eyes"></i>&nbsp;View</button></a>
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
                        @if($bookingRequest->is('approved'))
                            {!! Form::open(['url' => route('therapist.finish.appointment', $bookingRequest), 'method' => 'patch', 'onsubmit' => 'javascript:return confirm("Are you sure you want to end?")']) !!}
                            <button type="submit" class="btn btn-sm btn-info btn-block"><i class="fas fa-eject"></i>&nbsp;Discharge</button>
                            {!! Form::close() !!}
                        @elseif($bookingRequest->is('finished'))
                            @if(empty($bookingRequest->checklist))
                                <a href="{{url('/therapist-checklist/'.$bookingRequest->id)}}">
                                <button type="submit" class="btn btn-sm btn-info btn-warning">
                                <i class="fas fa-plus"></i>&nbsp;Fill Progress Checklist</button></a>
                            @else
                                <div class="alert alert-success">
                                    <p class="mb-0 text-center">
                                        <i class="fa fa-notice"></i> This booking request is finished!
                                    </p>
                                </div>
                            
                            @endif
                                  
                        @endif
                      
                    </div>

                        
                        </div>

                </div>
            </div>
        </div>
    </div>

<!-- View progress-->
<div class="modal fade" id="view-progress-{{ $bookingRequest->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header col-sm-12 col-md-12 col-lg-12">
                <div class="col-sm-7">
                    <h5 class="modal-title" style="text-align: center" id="exampleModalLabel">PROGRESS NOTES</h5> 
                </div>
                <div class="col-sm-4">
                @if($bookingRequest->is('finished') || $bookingRequest->is('pending'))

                @else
                    <a data-toggle="modal" data-target="#add-progress-{{ $bookingRequest->id }}">
                    <button type="submit" class="btn btn-sm btn-success btn-block">
                    <i class="far fa-plus-square"></i>&nbsp;Add Progress</button></a>
                @endif
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="modalView">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="row">
                        <div class="card col-sm-12 col-md-12 col-lg-12" style="overflow: scroll; height:400px">
                            @if(!empty($bookingRequest->checklist))
                            <div class="row">
                                <label class="label col-sm-4" ><b>Checklist</b></label>
                            </div>
                            <div class="row">
                                <label class="label col-sm-4"><b>Chief Complaint</b></label>
                                <div class="col-sm-8">
                                @if(!empty($bookingRequest->checklist->chief_complaint))
                                    {{$bookingRequest->checklist->chief_complaint}}
                                @else
                                    ...
                                @endif
                                </div>
                            </div>
                            <div class="row">
                                <label class="label col-sm-4"><b>Vital Signs</b></label>
                                <div class="col-sm-8">
                                @if(!empty($bookingRequest->checklist->vital_sign))
                                    {{$bookingRequest->checklist->vital_sign}}
                                @else
                                    ...
                                @endif
                                </div>
                            </div>
                            <div class="row">
                                <label class="col label"><b>BP</b></label>
                                <div class="col">
                                @if(!empty($bookingRequest->checklist->bp))
                                    {{$bookingRequest->checklist->bp}}
                                @else
                                    ...
                                @endif
                                </div>
                                <label class="col label"><b>PR</b></label>
                                <div class="col">
                                @if(!empty($bookingRequest->checklist->pp))
                                    {{$bookingRequest->checklist->pp}}
                                @else
                                    ...
                                @endif
                                </div>
                                <label class="col label"><b>RR</b></label>
                                <div class="col">
                                @if(!empty($bookingRequest->checklist->rr))
                                    {{$bookingRequest->checklist->rr}}
                                @else
                                    ...
                                @endif
                                </div>
                            </div>
                            <div class="row">
                                <label class="label col-sm-4"><b>Assessment</b></label>
                                <div class="col-sm-8">
                                @if(!empty($bookingRequest->checklist->assessment))
                                    {{$bookingRequest->checklist->assessment}}
                                @else
                                    ...
                                @endif
                                </div>
                            </div>
                            <div class="row">
                                <label class="label col-sm-4"><b>/P/:</b></label>
                                <div class="col-sm-8">
                                @if(!empty($bookingRequest->checklist->area_ue))
                                    {{$bookingRequest->checklist->area_ue}}
                                @else
                                    ...
                                @endif
                                </div>
                            </div>
                            <div class="row">
                                <label class="label col-sm-4"><b>AROM</b></label>
                                <div class="col-sm-8">
                                @if(!empty($bookingRequest->checklist->arom))
                                    {{$bookingRequest->checklist->arom}}
                                @else
                                    ...
                                @endif
                                </div>
                            </div>
                            <div class="row">
                                <label class="label col-sm-4"><b>PROM</b></label>
                                <div class="col-sm-8">
                                @if(!empty($bookingRequest->checklist->prom))
                                    {{$bookingRequest->checklist->prom}}
                                @else
                                    ...
                                @endif
                                </div>
                            </div>
                            <div class="row">
                                <label class="label col"><b>Massage Area</b></label>
                                <div class="col">
                                @if(!empty($bookingRequest->checklist->massage_area))
                                    {{$bookingRequest->checklist->massage_area}}
                                @else
                                    ...
                                @endif
                                </div>
                                <label class="label col"><b>Min</b></label>
                                <div class="col">
                                @if(!empty($bookingRequest->checklist->massage_min))
                                    {{$bookingRequest->checklist->massage_min}}
                                @else
                                    ...
                                @endif
                                </div>
                            </div>
                            <div class="row">
                                <label class="label col"><b>Stretching Hold</b></label>
                                <div class="col">
                                @if(!empty($bookingRequest->checklist->stretching_hold))
                                    {{$bookingRequest->checklist->stretching_hold}}
                                @else
                                    ...
                                @endif
                                </div>
                                <label class="label col"><b>Sets</b></label>
                                <div class="col">
                                @if(!empty($bookingRequest->checklist->stretching_sets))
                                    {{$bookingRequest->checklist->stretching_sets}}
                                @else
                                    ...
                                @endif
                                </div>
                            </div>
                            <div class="row">
                                <label class="label col"><b>ES/TENS</b></label>
                                <div class="col">
                                @if(!empty($bookingRequest->checklist->estens_area))
                                    {{$bookingRequest->checklist->estens_area}}
                                @else
                                    ...
                                @endif
                                </div>
                                <label class="label col"><b>Min</b></label>
                                <div class="col">
                                @if(!empty($bookingRequest->checklist->estens_min))
                                    {{$bookingRequest->checklist->estens_min}}
                                @else
                                    ...
                                @endif
                                </div>
                            </div>
                            <div class="row">
                                <label class="label col"><b>Resistance Weight</b></label>
                                <div class="col">
                                @if(!empty($bookingRequest->checklist->resistance_weight))
                                    {{$bookingRequest->checklist->resistance_weight}}
                                @else
                                    ...
                                @endif
                                </div>
                                <label class="label col"><b>Motion</b></label>
                                <div class="col">
                                @if(!empty($bookingRequest->checklist->resistance_motion))
                                    {{$bookingRequest->checklist->resistance_motion}}
                                @else
                                    ...
                                @endif
                                </div>
                            </div>
                            <div class="row">
                                <label class="label col"><b>Resistance Reps</b></label>
                                <div class="col">
                                @if(!empty($bookingRequest->checklist->resistance_reps))
                                    {{$bookingRequest->checklist->resistance_reps}}
                                @else
                                    ...
                                @endif
                                </div>
                                <label class="label col"><b>Sets</b></label>
                                <div class="col">
                                @if(!empty($bookingRequest->checklist->resistance_sets))
                                    {{$bookingRequest->checklist->resistance_sets}}
                                @else
                                    ...
                                @endif
                                </div>
                            </div>
                            <div class="row">
                                <label class="label col-sm-4"><b>Other</b></label>
                                <div class="col-sm-8">
                                @if(!empty($bookingRequest->checklist->other_text))
                                    {{$bookingRequest->checklist->other_text}}
                                @else
                                    ...
                                @endif
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                            <label class="label col-sm-4"><b>Progress Notes</b></label>
                                <div class="col-sm-12">
                                    @if(!empty($bookingRequest->progress))
                                    <table class="table col-sm-12">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Progress</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><div class="col">{!! optional($bookingRequest->progress)->pluck('session_date')->implode('</div>') !!}</td>
                                                <td><div class="col">{!! optional($bookingRequest->progress)->pluck('progress')->implode('</div>') !!}</td>
                                            </tr>
                                        </tbody>     
                                    </table>
                                    
                                    @else
                                        ...
                                    @endif
                                </div>
                            </div>

                            @elseif(empty($bookingRequest->checklist))
                                <label class="label" style="text-align: center; margin-top: 20px;"><b>NO CHECKLIST</b></label>
                                
                                <hr>
                                
                                <div class="row">
                                <label class="label col-sm-4"><b>Progress Notes</b></label>
                                    <div class="col-sm-12">
                                        @if(!empty($bookingRequest->progress))
                                        <table class="table col-sm-12">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Progress</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><div class="col">{!! optional($bookingRequest->progress)->pluck('session_date')->implode('</div>') !!}</td>
                                                    <td><div class="col">{!! optional($bookingRequest->progress)->pluck('progress')->implode('</div>') !!}</td>
                                                </tr>
                                            </tbody>     
                                        </table>
                                        @else
                                            ...
                                        @endif
                                    </div>
                                </div>
                            @else
                                
                            @endif

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
                            <label>Add to {{$bookingRequest->client->fullName}}'s progress</label>
                            {!! Form::open(['url' => route('post.store-progress'), 'method' => 'post']) !!} 
                             {{ csrf_field() }}
                                    <input type="hidden" name="booking_id" value="{{$bookingRequest->id}}">
                                    <input type="hidden" name="client_id" value="{{$bookingRequest->client->user_id}}">
                                    <input type="hidden" name="therapist_id" value="{{$bookingRequest->therapist->user_id}}">
                            <div class="form-group col-sm-12 col-md-12 col-lg-12">
                                <label>Progress Date:</label>
                                <input class="form-control required" placeholder="Progress Date"  name="session_date" type="date">
                            </div>
                            <div class="form-group col-sm-12 col-md-12 col-lg-12">
                                <label>New Detail:</label><br>
                                    <textarea class="form-control" name="progress">    
                                    </textarea>
                            </div>
                            <button type="submit" class="btn btn-sm btn-success btn-block pull-right"><i class="fas fa-check-square"></i>&nbsp;Done Progress</button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>                    
            </div>
            <div class="modal-footer">
                
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
                
            </div>
        </div>                    
      </div>
    </div>
  </div>
</div>
<!-- end of view modal -->

<!-- View Dignosis image-->
<div class="modal fade" id="view-diagnosis-{{ $bookingRequest->bookingDetails->image }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <img src='{{    asset("storage/{$bookingRequest->bookingDetails->image}")}}'   
                 style="width:440px;height:550px; text-align: center; ">
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
                    @if(Session::has('msg'))
                        <p class="alert alert-success" style="text-align: center">{{ Session::get('msg') }}</p>
                    @endif
                    <div class="card-body">
                    @if($bookingRequest->appointment)
                        {!! Form::model($bookingRequest->appointment, ['url' => route('therapist.book.appointment', $bookingRequest)]) !!}
                    @else
                        {!! Form::open(['url' => route('therapist.book.appointment', $bookingRequest)]) !!}
                    @endif
                        <div class="form-row">
                            <div class="col-6">
                                {!! Form::inputGroup('date', 'From', 'start_date') !!}
                            </div>
                            <div class="col-6">
                                {!! Form::inputGroup('date', 'To', 'end_date') !!}
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-6">
                                
                                {!! Form::inputGroup('time', '&nbsp;', 'start_date_time') !!}
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