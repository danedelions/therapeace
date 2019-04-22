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
          <a href="{{url('/client-edit/'. $client->id )}}"><i class="far fa-edit"></i> Edit</a>
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
						<th>Your diagnosis</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@forelse($client->booking as $row)
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
                  <a class="dropdown-item" style="color:red;"><i class="fas fa-ban" style="color:red;"></i>
                  &nbspCancel
                  </a>
                </div>
              </div>

              @else

              <button class="btn btn-sm btn-outline-danger">Cancel</button>

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
					@empty
					<tr>
						<td colspan="4" class="text-center">No requests</td>
					</tr>
					@endforelse
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
            @foreach($client->booking as $row)
            <tr>
              <td><b>{{$row->therapist->fullName}}</b></td>
<<<<<<< HEAD
              <td>{{$row->diagnosis}}</td>
              <td>{{$row->diagnosis}}</td>
=======
              <td>{{$row->appointment->durationDate}}</td>
              <td>{{$row->bookingDetails->diagnosis}}</td>
>>>>>>> 1c6369f48225642c38bb5eed32e60c52ef3812ad
              <td>
                <div class="dropdown">
                  <button class="btn btn-sm btn-info dropdown-toggle" data-id="{{ $row['id'] }}"
                          type="button" id="dropdownMenu1" data-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                    Actons
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
<<<<<<< HEAD
                    <a class="dropdown-item" data-toggle="modal" data-target="#viewModal">&nbsp<i class="fas fa-info"></i>&nbsp;&nbsp;Info</a>
=======
                    <a class="dropdown-item" data-toggle="modal" data-target="#viewModal" >&nbsp<i class="fas fa-info"></i>&nbsp;&nbsp;Info</a>
>>>>>>> 1c6369f48225642c38bb5eed32e60c52ef3812ad
                    <a class="dropdown-item" data-toggle="modal" data-target="#view-modal"><i class="fas fa-sticky-note"></i>&nbsp;&nbsp;Notes</a>
                  </div>
                </div>
              </td>
            </tr>
            @endforeach 
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- View Modal-->
<div class="modal fade" id="view-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h5 class="modal-title">Therapist Notes</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body" id="modalView">
        <br>
        <div class="col-sm-12">
          <div class="card">
            <div class="card-body">
              <center><label>Profile</label></center><br>
              <label>Name: </label>  <br>
              <label>Email: </label> <br>
              <label>Contact #: </label><br>
            </div>
          </div>
        </div>                    
      </div>
    </div>
  </div>
</div>
<!-- end of view modal -->

<!-- START OF MODAL -->
<div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
<<<<<<< HEAD
    <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header bg-info">
            <h5 class="modal-title">Session Information</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
      @foreach($client->booking as $row)
          <div class="modal-body">
            <LABEL>Rate <b>{{$row->therapist->fullname}}</b></LABEL>
            
            <div class="form-group">
          <div class="stars">
              <form action="">
                <input class="star star-5" id="star-5" type="radio" name="star"/>
                <label class="star star-5" for="star-5"></label>
                <input class="star star-4" id="star-4" type="radio" name="star"/>
                <label class="star star-4" for="star-4"></label>
                <input class="star star-3" id="star-3" type="radio" name="star"/>
                <label class="star star-3" for="star-3"></label>
                <input class="star star-2" id="star-2" type="radio" name="star"/>
                <label class="star star-2" for="star-2"></label>
                <input class="star star-1" id="star-1" type="radio" name="star"/>
                <label class="star star-1" for="star-1"></label>
              </form>
          </div>
            </div>
            
            <h6 font-weight-bold>Do you have any concern? Write to us!</h6>
       
            <div class="form-group">
                <textarea type="text" placeholder="" class="md-textarea form-control" rows="4"></textarea>
            </div>
        </div>    
        <div class="modal-footer d-flex justify-content-center">
            <button type="Submit" class="btn btn-unique">Send Report&nbsp;&nbsp;<i class="far fa-paper-plane"></i></button>
        </div>
        @endforeach
    </div>
  </div>
=======
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class="modal-header bg-info">
        		<h5 class="modal-title">Session Information</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          	<span aria-hidden="true">&times;</span>
			        </button>
      		</div>
			@foreach($client->booking as $row)
      		<div class="modal-body">
      			<LABEL>Rate <b>{{$row->therapist->fullname}}</b></LABEL>
      			
      			<div class="form-group">
					<div class="stars">
					  	<forms>	
						    <input class="star star-5" id="star-5" type="radio" name="star" value="1" />
						    <label class="star star-5" for="star-5"></label>
						    <input class="star star-4" id="star-4" type="radio" name="star" value="2"/>
						    <label class="star star-4" for="star-4"></label>
						    <input class="star star-3" id="star-3" type="radio" name="star" value="3"/>
						    <label class="star star-3" for="star-3"></label>
						    <input class="star star-2" id="star-2" type="radio" name="star" value="4"/>
						    <label class="star star-2" for="star-2"></label>
						    <input class="star star-1" id="star-1" type="radio" name="star" value="5"/>
						    <label class="star star-1" for="star-1"></label>
					  	</form>
					</div>
      			</div>

      			
      			<h6 font-weight-bold>Do you have any concern? Write to us!</h6>
		   
		        <div class="form-group">
		          	<textarea type="text" class="md-textarea form-control"  name="reports" rows="4"></textarea>
		        </div>
    		</div>    
	    	<div class="modal-footer d-flex justify-content-center">
	        	<button type="Submit" class="btn btn-unique">Send Report&nbsp;&nbsp;<i class="far fa-paper-plane"></i></button>
	    	</div>
	    	@endforeach
		</div>
	</div>
>>>>>>> 1c6369f48225642c38bb5eed32e60c52ef3812ad
</div>
<!-- END OF MODAL -->
@endsection