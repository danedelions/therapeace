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
		            
					<div style="display:block; width:x; height:y; text-align:right;">
						<a href="{{url('/client-edit/'. $client->id )}}"><i class="far fa-edit"></i> Edit</a>
					</div>

				</form>

			</div>
		</div>
	</div>
	<div class="col-sm-5 col-md-5 col-lg-7">
	<div class="col-lg">
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
							<td><input type="submit" value="View" class="btn btn-sm btn-info" href="#" data-toggle="modal" data-target="#viewConnection"></td>
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
				<h5>Therapist's Notes</h5>
				Comments and Ratings
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
							<td><input type="submit" value="View" class="btn btn-sm btn-info" href="#" data-toggle="modal" data-target="#viewConnection"></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection

