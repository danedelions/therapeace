@extends('layouts.the')

@section('page-section')

<div class="col-md-12">
    <div class="row"> <!-- LABEL->col-form-label INPUT-> form-control -->
        <div class="col-sm-4 col-md-4 col-lg-5">
            <div class="card">
                <div class="card-header bg-info">
                    User Information
                </div>
                <div class="card-body">
                        <center>
                            <img src='{{ asset("storage/{$therapist->image}") }}' style="width:150px;height:150px;">
                            <br>
                                <div><h4>{{$therapist->therapist}}</h4></div>
                        </center>
                        <hr>    
                        <div class="form-row">
                            <label class="col-lg-4"><b>Full Name</b></label>
                            <div class="col-lg-8">{{$therapist->fullName}}</div>
                        </div>
                        <div class="form-row">
                            <label class="col-lg-4"><b>Email</b></label>
                            <div class="col-lg-8">{{ Auth::user()->email }}</div>
                        </div>
                        <div class="form-row">
                            <label class="col-lg-4"><b>Contact Number</b></label>
                            <div class="col-lg-8">{{$therapist->contact}}</div> 
                        </div>
                        <div class="form-row">
                            <label class="col-lg-4"><b>Bio</b></label>
                            <div class="col-lg-8">{{$therapist->user_bio}}</div>
                        </div>
                        <div class="form-row">
                            <label class="col-lg-4"><b>Personal Rate</b></label>
                            <div class="col-lg-8">{{$therapist->personal_rate}}</div>
                        </div>
                        <div class="form-row">
                            <label class="col-lg-4"><b>Specialties</b></label>
                                <div class="col-lg-8">
                                   <span class="badge badge-success"> {!! optional($therapist->specialties)->pluck('name')->implode('</span ><span class="badge badge-success ml-1">') !!}</span>
                                <br>
                                </div>  
                        </div>
                        <div style="display:block; width:x; height:y; text-align:right;">
                            <a href="{{url('/therapist-edit/'. $therapist->id )}}"><i class="far fa-edit"></i> Edit</a>
                        </div>
                </div>
            </div>
        </div>

        <div class="col-md-7">
            <div class="col-sm-5 col-md-5 col-lg-12">
                <div class="card">
                    <div class="card-header bg-info">
                        Client Requests
                    </div>
                    <div class="card-body" style="overflow: scroll; height: 250px;">
                        <div class="form-group">
                            {!! Form::open(['url' => url()->current(), 'method' => 'get']) !!} 
                            <div class="row">
                                <div class="col-md-4">
                                     {!! Form::inputGroup('text', null, 'name', request()->name ?? null, ['placeholder' => 'Client Name']) !!}
                                </div>
                                <div class="col-md-4">
                                    {!! Form::selectGroup(null, 'status', ['' => 'Select Status', '0' => 'Pending', '1' => 'Approved', '2' => 'Rejected', '3' => 'Finished', '4' => 'Cancelled'], request()->status ?? null, ['class' => 'form-control']) !!}
                                </div>
                                <div class="col-md-4">
                                   <button type="submit" class="btn btn-info pull-right"><i class="ti-search"></i> Search</button>
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>Client Name</th>
                                    <th>Diagnosis</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($therapist->bookingRequest as $request)
                                <tr>
                                    <td>{{ $request->client->fullName }}</td>
                                    <td>{{ $request->bookingDetails->diagnosis }} </td>
                                    <td>
                                        @if($request->status == 0)
                                            <span class="badge badge-secondary">Pending</span>  
                                        @elseif($request->status == 1)
                                            <span class="badge badge-success">Approved</span>  
                                        @elseif($request->status == 2)
                                        <span class="badge badge-danger">Rejected</span>
                                        @elseif($request->status == 3)
                                        <span class="badge badge-default">Finished</span>
                                        @elseif($request->status == 4) 
                                        <span class="badge badge-default">Cancelled</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($request->status == 0 || $request->status == 1 || $request->status == 2 || $request->status == 3)
                                            <a class="btn btn-sm btn-info" href="{{ route('therapist.calendar', $request) }}">View</a>
                                        @else

                                        @endif
                                    </td>
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center">No requests</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <br>

            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-info">
                                Ratings
                            </div>
                            <div class="card-body" style="overflow: scroll; height: 250px;">
                                <table class="table table-default">
                                    <thead>
                                        <tr>
                                            <th>Client Name</th>
                                            <th>Rating</th>
                                            <th>Comments</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($therapist->bookingRequest as $request)
                                        @if(!empty($request->report))
                                            <tr>
                                                <td>{{$request->client->fullName}}</td>
                                                <td>
                                                @if(!empty($request->report->rating))
                                                    {{$request->report->rating}}
                                                @else
                                                    n/a
                                                @endif
                                                </td>
                                                <td>
                                                @if(!empty($request->report->reports))
                                                    {{$request->report->reports}}
                                                @else
                                                    n/a
                                                @endif
                                                </td>
                                            </tr>
                                        @elseif(!empty($request->report))
                                            <tr>
                                                <td colspan="4" class="text-center">No Rates</td>
                                            </tr>
                                        @endif

                                        @empty
                                            <tr>
                                                <td colspan="4" class="text-center">No Rates</td>
                                            </tr>
                                    @endforelse
                                    </tbody> 
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('modals')
<div class="modal fade" id="show-request-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header align-items-center">
                <h5 class="modal-title client-name" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <dl class="row">
                    <dt class="col-sm-3">Client Name</dt>
                    <dd class="col-sm-9 client-name"></dd>
                    <dt class="col-sm-3">Address</dt>
                    <dd class="col-sm-9 client-address"></dd>
                    <dt class="col-sm-3">Notes</dt>
                    <dd class="col-sm-9 client-notes"></dd>
                    <dt class="col-sm-3">Contact</dt>
                    <dd class="col-sm-9 client-contact"></dd>
                    <dt class="col-sm-3">Diagnosis</dt>
                    <dd class="col-sm-9 client-diagnosis"></dd>
                </dl>
            </div>
            <div class="modal-footer d-block">
                <div class="row">
                    <div class="col-6 text-left">
                        <button type="button" class="btn btn-success">Approve</button>
                        <button type="button" class="btn btn-warning">Cancel</button>
                    </div>
                    <div class="col-6 text-right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endpush

@push('scripts')
<script>
    $(document).ready(function() {
        
        $('#show-request-modal').on('show.bs.modal', function(e) {
            var details = $(e.relatedTarget).data('booking-details');
            console.log(details)
            $('#show-request-modal .client-name').text(details.client.full_name)
            $('#show-request-modal .client-address').text(details.booking_details.user_address)
            $('#show-request-modal .client-notes').text(details.booking_details.notes)
            $('#show-request-modal .client-contact').text(details.booking_details.contact)
            $('#show-request-modal .client-diagnosis').text(details.booking_details.diagnosis) 
        })
    })
</script>

@endpush