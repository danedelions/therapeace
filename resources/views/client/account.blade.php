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
				<div class="form-group row">
					<label class="col-lg-3">Username</label>
						<div class="col-lg-8">{{ Auth::user()->username }}</div>
				</div>
				<div class="form-group row">
					<label class="col-lg-3">Name</label>
						<div class="col-lg-8">{{ $client->fullname }}</div>
				</div>
				<div class="form-group row">
					<label class="col-lg-3">Email</label>
						<div class="col-lg-8">{{ Auth::user()->email }}</div>
				</div>
				<div class="form-group row">
					<label class="col-lg-3">Contact Number</label>
						<div class="col-lg-8">{{ $client->contact }}</div>
				</div>
				<div class="form-group row">
					<label class="col-lg-3">Gender</label>
						<div class="col-lg-8">{{ $client->gender }}</div>
				</div>
				<div class="form-group row">
					<label class="col-lg-3">Address</label>
						<div class="col-lg-8">{{$client->address}}</div>
				</div>
<<<<<<< HEAD
            
=======
	            
>>>>>>> 8f8960a79dda9a63023c4860c5837ede1605ec96
				<div style="display:block; width:x; height:y; text-align:right;">
					<a href="{{url('/client-edit/'. $client->id )}}"><i class="far fa-edit"></i> Edit</a>
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-5 col-md-5 col-lg-7">
		<div class="card">
			<div class="card-header bg-info">
				Sent Requests
			</div>
			<div class="card-body" style="overflow: scroll; height: 200px;">
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
							<td><b>{{$row->therapist->fullname}}</b></td>
							<td>{{$row->bookingDetails->diagnosis}}</td>
							<td>
                                @if($row->status == 0)
                                    <span class="badge badge-secondary">Pending</span>  
                                @elseif($row->status == 1)
                                    <span class="badge badge-success">Approved</span>  
                                @elseif($row->status == 2)
                                <span class="badge badge-danger">Rejected</span>
                                @elseif($row->status == 3)
                                <span class="badge badge-default">Finished</span>  
                                @endif
                            </td>
<<<<<<< HEAD
							<td>
								<div class="dropdown">
								  <button class="btn btn-sm btn-info dropdown-toggle" data-id="{{ $row['id'] }}"
								          type="button" id="dropdownMenu1" data-toggle="dropdown"
								          aria-haspopup="true" aria-expanded="false">
								    Actions
								  </button>
								  <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
								    <a class="dropdown-item" data-toggle="modal" data-target="#view-modalc-{{ $row->id }}">View</a>
								    <a class="dropdown-item">Cancel</a>
								  </div>
								</div>
							</td>
=======
							<td><button class="btn btn-sm btn-danger">Cancel</button></td>
>>>>>>> 8f8960a79dda9a63023c4860c5837ede1605ec96
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
						<th>Therapist Name</th>
						<th>Dates of Session</th>
						<th>Diagnosis</th>	
						<th>Action</th>				
					</thead>
					<tbody>
						<tr>
							<td><b>Jude Canete</b></td>
							<td>March 29 - March 30</td>
							<td>Scoliosis</td>
							<td><a data-toggle="modal" data-target="#view-modal"><button class="btn btn-sm btn-info">View</button></a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
<<<<<<< HEAD

		<!-- View Modal-->
		<div class="modal fade" id="view-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header bg-info">
		        <h5 class="modal-title" id="exampleModalLabel">User Information</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body" id="modalView">
		        <br>
		        <div class="col-sm-12"">
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

=======
>>>>>>> 8f8960a79dda9a63023c4860c5837ede1605ec96
	</div>
</div>

@endsection
<<<<<<< HEAD

=======
>>>>>>> 8f8960a79dda9a63023c4860c5837ede1605ec96
