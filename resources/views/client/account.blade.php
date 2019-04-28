@extends('layouts.cli')

@section('title', 'Account')

@section('page-section')

<div class="row"> <!-- LABEL->col-form-label INPUT-> form-control -->
    <div class="col-md-5">
      <div class="card">
        <div class="card-header bg-info">
          User Information
        </div>
        <div class="card-body">
            <div class="form-row">
              <label class="col-md-4"><b>Username</b></label>
              <div class="col-md-8">{{ Auth::user()->username }}</div>
            </div>
            <div class="form-row">
              <label class="col-md-4"><b>Name</b></label>
              <div class="col-md-8">{{ $client->fullname }}</div>
            </div>
            <div class="form-row">
              <label class="col-md-4"><b>Email</b></label>
              <div class="col-md-8">{{ Auth::user()->email }}</div>
            </div>
            <div class="form-row">
              <label class="col-md-4"><b>Contact Number</b></label>
              <div class="col-md-8">{{ $client->contact }}</div>
            </div>
            <div class="form-row">
              <label class="col-md-4"><b>Gender</b></label>
              <div class="col-md-8">{{ $client->gender }}</div>
            </div>
            <div class="form-row">
              <label class="col-md-4"><b>Address</b></label>
              <div class="col-md-8">{{$client->address}}</div>
            </div>
            <div style="display:block; width:x; height:y; text-align:right;">
              <a href="{{url('/client-edit/'. $client->id )}}}"><i class="far fa-edit"></i> Edit</a>
            </div>
        </div>
      </div>
    </div>

    <div class="col-md-7">
      <div class="card">
        <div class="card-header bg-info">
          Sent Requests
        </div>

        <div class="card-body" style="overflow: scroll; height: 250px;">
              {!! Form::open(['url' => url()->current(), 'method' => 'get']) !!} 
                <div class="row">
                  <div class="col-md-4">
                      {!! Form::inputGroup('text', null, 'name', request()->name ?? null, ['placeholder' => 'Therapist Name']) !!}
                  </div>
                  <div class="col-md-4">
                      {!! Form::selectGroup(null, 'status', ['' => 'Select Status', '0' => 'Pending', '1' => 'Approved', '2' => 'Rejected', '3' => 'Finished', '4' => 'Cancelled'], request()->status ?? null, ['class' => 'form-control']) !!}
                  </div>
                  <div class="col-md-4">
                    <button type="submit" class="btn btn-info pull-right"><i class="ti-search"></i> Search</button>
                  </div>
                </div>
              {!! Form::close() !!}  
          <table class="table table-default">
            <thead>
              <tr>
                <th>Therapist Name</th>
                <th>Diagnosis</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($client->booking->sortByDesc('id') as $row)
                @if(!empty($row))
                  <tr>
                    <td><b>{{ $row->therapist->fullname }}</b></td>
                    <td>{{ $row->bookingDetails->diagnosis }}</td>
                    <td>
                                    @if($row->status == 0)
                                        <span class="badge badge-secondary">Pending</span>  
                                    @elseif($row->status == 1)
                                        <span class="badge badge-success">Approved</span>  
                                    @elseif($row->status == 2)
                                    <span class="badge badge-danger">Rejected</span>
                                    @elseif($row->status == 3)
                                    <span class="badge badge-primary">Finished</span>  
                                      @elseif($row->status == 4)
                                    <span class="badge badge-default">Cancelled</span> 
                                    @endif
                                </td>
                    <td>
                      @if($row->status == 1)
                      <div class="dropdown">
                        <button class="btn btn-sm btn-info dropdown-toggle" data-id="{{ $row['id'] }}"
                                type="button" id="dropdownMenu1" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                          Actons
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                          <a class="dropdown-item" style="color:green;"href="{{url('/client-view/'.$row->id)}}"><i class="far fa-eye" style="color:green;"></i>&nbspView</a>
                          {!! Form::open(['url' => route('therapist.cancel.appointment', $row->id), 'method' => 'delete', 'onsubmit' => 'javascript:return confirm("Are you sure?")']) !!}
                            <a class="dropdown-item" style="color:red;"><i class="fas fa-ban" style="color:red;"></i>
                          &nbspCancel
                          {!! Form::close() !!}
                          </a>
                        </div>
                      </div>
                      @elseif($row->status == 0)
                        {!! Form::open(['url' => route('therapist.cancel.appointment', $row->id), 'method' => 'delete', 'onsubmit' => 'javascript:return confirm("Are you sure?")']) !!}
                          <button class="btn btn-sm btn-outline-danger">Cancel</button>
                          {!! Form::close() !!}
                      @elseif($row->status == 3)
                        <a href="{{url('/client-view/'.$row->id)}}"><button class="btn btn-sm btn-outline-info">View</button></a>
                      
                      @elseif($row->status == 4)

                      

                      @endif
                    </td>
                  </tr>
                @elseif(empty($row))
                  <tr>
                    <td colspan="4" class="text-center">No requests</td>
                  </tr>
                @endif
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
        <br>
      <div class="card">
        <div class="card-header bg-info">
          Therapist's Notes
        </div>          
        <div class="card-body" style="overflow: scroll; height: 250px;">
          <table class="table table-default">
            <thead>
              <tr>
                <th>Therapist Name</th>
                <th>Dates of Session</th>
                <th>Diagnosis</th>  
                <th>Action</th>   
              </tr>
            </thead>
            <tbody>
              @foreach($client->booking->sortByDesc('id') as $row)
                @if($row->status == 3)
                  <tr>
                    <td><b>{{$row->therapist->fullName}}</b></td>
                    <td>{{$row->appointment->durationDate}}</td>
                    <td>{{$row->bookingDetails->diagnosis}}</td>
                    <td>
                      <div class="dropdown">
                        <button class="btn btn-sm btn-info dropdown-toggle" data-id="{{ $row['id'] }}"
                                  type="button" id="dropdownMenu1" data-toggle="dropdown"
                                  aria-haspopup="true" aria-expanded="false">
                            Actons
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                          <a class="dropdown-item" data-toggle="modal" data-target="#viewModal-{{$row['id']}}" >&nbsp<i class="fas fa-info"></i>&nbsp;&nbsp;Rate</a>
                          <a class="dropdown-item" data-toggle="modal" data-target="#view-modal-{{$row['id']}}"><i class="fas fa-sticky-note"></i>&nbsp;&nbsp;Notes</a>
                        </div>
                      </div>

                      <!-- View Modal-->
                      <div class="modal fade" id="view-modal-{{ $row['id'] }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header bg-info">
                              <h5 class="modal-title">Therapist Notes</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body" id="modalView">
                              <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="row">
                                  <div class="card col-sm-12 col-md-12 col-lg-12" style="overflow: scroll; height:400px">
                                    <div class="row">
                                      <label class="label col-sm-4"><b>Chief Complaint</b></label>
                                        <div class="col-sm-8">
                                          @if(!empty($row->checklist->chief_complaint))
                                            {{$row->checklist->chief_complaint}}
                                          @else
                                            ...
                                          @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                      <label class="label col-sm-4"><b>Vital Sign</b></label>
                                        <div class="col-sm-8">
                                          @if(!empty($row->checklist->vital_sign))
                                            {{$row->checklist->vital_sign}}
                                          @else
                                            ...
                                          @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                          <label class="col label"><b>BP</b></label>
                                          <div class="col">
                                          @if(!empty($row->checklist->bp))
                                              {{$row->checklist->bp}}
                                          @else
                                              ...
                                          @endif
                                          </div>
                                          <label class="col label"><b>PR</b></label>
                                          <div class="col">
                                          @if(!empty($row->checklist->pp))
                                              {{$row->checklist->pp}}
                                          @else
                                              ...
                                          @endif
                                          </div>
                                          <label class="col label"><b>RR</b></label>
                                          <div class="col">
                                          @if(!empty($row->checklist->rr))
                                              {{$row->checklist->rr}}
                                          @else
                                              ...
                                          @endif
                                          </div>
                                    </div>
                                    <div class="row">
                                      <label class="label col-sm-4"><b>Assessment</b></label>
                                        <div class="col-sm-8">
                                          @if(!empty($row->checklist->assessment))
                                            {{$row->checklist->assessment}}
                                          @else
                                            ...
                                          @endif
                                      </div>
                                    </div>
                                    <div class="row">
                                      <label class="label col-sm-4"><b>/P/:</b></label>
                                        <div class="col-sm-8">
                                          @if(!empty($row->checklist->area_ue))
                                            {{$row->checklist->area_ue}}
                                          @else
                                            ...
                                          @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                      <label class="label col-sm-4"><b>AROM</b></label>
                                        <div class="col-sm-8">
                                          @if(!empty($row->checklist->arom))
                                            {{$row->checklist->arom}}
                                          @else
                                            ...
                                          @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                      <label class="label col-sm-4"><b>PROM</b></label>
                                        <div class="col-sm-8">
                                          @if(!empty($row->checklist->prom))
                                            {{$row->checklist->prom}}
                                          @else
                                            ...
                                          @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                      <label class="label col"><b>Massage Area</b></label>
                                        <div class="col">
                                          @if(!empty($row->checklist->massage_area))
                                            {{$row->checklist->massage_area}}
                                          @else
                                            ...
                                          @endif
                                        </div>
                                      <label class="label col"><b>Min</b></label>
                                        <div class="col">
                                          @if(!empty($row->checklist->massage_min))
                                            {{$row->checklist->massage_min}}
                                          @else
                                            ...
                                          @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                      <label class="label col"><b>Stretching Hold</b></label>
                                        <div class="col">
                                          @if(!empty($row->checklist->stretching_hold))
                                            {{$row->checklist->stretching_hold}}
                                          @else
                                            ...
                                          @endif
                                        </div>
                                      <label class="label col"><b>Sets</b></label>
                                        <div class="col">
                                          @if(!empty($row->checklist->stretching_sets))
                                            {{$row->checklist->stretching_sets}}
                                          @else
                                            ...
                                          @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                      <label class="label col"><b>ES/TENS</b></label>
                                        <div class="col">
                                          @if(!empty($row->checklist->estens_area))
                                            {{$row->checklist->estens_area}}
                                          @else
                                            ...
                                          @endif
                                        </div>
                                      <label class="label col"><b>Min</b></label>
                                        <div class="col">
                                          @if(!empty($row->checklist->estens_min))
                                            {{$row->checklist->estens_min}}
                                          @else
                                            ...
                                          @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="label col"><b>Resistance Weight</b></label>
                                        <div class="col">
                                        @if(!empty($row->checklist->resistance_weight))
                                            {{$row->checklist->resistance_weight}}
                                        @else
                                            ...
                                        @endif
                                        </div>
                                        <label class="label col"><b>Motion</b></label>
                                        <div class="col">
                                        @if(!empty($row->checklist->resistance_motion))
                                            {{$row->checklist->resistance_motion}}
                                        @else
                                            ...
                                        @endif
                                        </div>
                                    </div>
                            <div class="row">
                                <label class="label col"><b>Resistance Reps</b></label>
                                <div class="col">
                                @if(!empty($row->checklist->resistance_reps))
                                    {{$row->checklist->resistance_reps}}
                                @else
                                    ...
                                @endif
                                </div>
                                <label class="label col"><b>Sets</b></label>
                                <div class="col">
                                @if(!empty($row->checklist->resistance_sets))
                                    {{$row->checklist->resistance_sets}}
                                @else
                                    ...
                                @endif
                                </div>
                            </div>
                            <div class="row">
                                <label class="label col-sm-4"><b>Other</b></label>
                                <div class="col-sm-8">
                                @if(!empty($row->checklist->other_text))
                                    {{$row->checklist->other_text}}
                                @else
                                    ...
                                @endif
                                </div>
                            </div>
                                      <div class="row">
                                        <label class="label col-sm-4"><b>Progress Notes</b></label>
                                      </div>
                                      
                                      <div class="row">
                                        <div class="col">
                                          <table class="table">
                                            <thead>
                                              <tr>
                                                <th>Date</th>
                                                <th>Notes</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              @foreach($row->progress as $progress)
                                                <tr>
                                                  <td>{{$progress->session_date}}</td>
                                                  <td>{{$progress->progress}}</td>
                                                </tr>
                                              @endforeach
                                            </tbody>
                                          </table>
                                          
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                    <!-- end of view modal -->

                      <!-- START OF MODAL -->
                        <div class="modal fade" id="viewModal-{{$row['id']}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                      <div class="modal-header bg-info">
                                          <h5 class="modal-title">Session Information</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                          </button>
                                      </div>
                                        @if(empty($row->report))
                                          <div class="modal-body">
                                            <LABEL>Rate <b>{{$row->therapist->fullname}}</b></LABEL>
                                            <div class="form-group">
                                                  {!! Form::open(['url' => route('post.rate-session'), 'method' => 'post']) !!} 
                                                    {{ csrf_field() }}
                                                    <div class="stars">
                                                      <input type="hidden" name="booking_id" value="{{$row->id}}">
                                                      <input type="hidden" name="therapist_id" value="{{$row->therapist_id}}">
                                                      <input type="hidden" name="client_id" value="{{$row->client_id}}">
                                                      <input class="star star-5" id="star-5" type="radio" name="rating" value="5" />
                                                      <label class="star star-5" for="star-5"></label>
                                                      <input class="star star-4" id="star-4" type="radio" name="rating" value="4"/>
                                                      <label class="star star-4" for="star-4"></label>
                                                      <input class="star star-3" id="star-3" type="radio" name="rating" value="3"/>
                                                      <label class="star star-3" for="star-3"></label>
                                                      <input class="star star-2" id="star-2" type="radio" name="rating" value="2"/>
                                                      <label class="star star-2" for="star-2"></label>
                                                      <input class="star star-1" id="star-1" type="radio" name="rating" value="1"/>
                                                      <label class="star star-1" for="star-1"></label>
                                                    </div>
                                                    <h6 font-weight-bold>Do you have any concern? Write to us!</h6>
                                                    <div class="form-group">
                                                        <textarea  name="reports" placeholder="Add a comment/complaint here..." class="md-textarea form-control" rows="4"></textarea>
                                                    </div>
                                                    <div class="modal-footer d-flex justify-content-center">
                                                      <button type="Submit" class="btn btn-success">Send Report&nbsp;&nbsp;<i class="far fa-paper-plane"></i></button>
                                                    </div>
                                                  {!! Form::close() !!}
                                            </div>
                                          </div>
                                        @elseif(!empty($client->report))
                                          <div class="col-md-12">
                                              <div class="card-body col-md-12">
                                                Thank you for rating! Rest assured we will read what you've written.
                                              </div>
                                          </div>
                                        @endif
                                    </div>
                                </div>
                              </div>
                        </div>
                      <!-- END OF MODAL -->
                      </td>  
                    </tr>
                    
                  @endif
                @endforeach 
              </tbody>
            </table>
          </div>
        </div>
    </div>
</div>


   
@endsection