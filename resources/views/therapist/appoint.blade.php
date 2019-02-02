@extends('layouts.the')

@section('page-section')

@include('modals.therapist')

	<!-- <div class="row">
		<div class="col-sm-5 col-md-5 col-lg-12">
			<div class="card">
				<div class="card-header bg-primary">
					<h5>Appointment 
						<a href="#" data-toggle="modal" data-target="#appoint"><i class="fas fa-plus-circle" style="color:white"></i>
						</a>
					</h5>
				</div>
				<div class="card-body" style="overflow: scroll; height: 500px;">
					<div class="row">
						<div class="col-md">
							<table class="table table-default" >
								<thead>
									<tr>
										<th>#</th>
										<th>Patient Name</th>
										<th>Phone Number</th>
										<th>Booking Date</th>
										<th>Session Start Date</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($clients as $row)
									<tr>
										<td>1</td>
										<td>{{ $row->fname }} {{ $row->lname }}</td>
										<td>{{ $row->contact }}</td>
										<td></td>
										<td></td>
										<td></td>
										<td>
											<a class="btn btn-primary" href="#" data-toggle="modal" data-target="#assess"><i style="color:black;" class="far fa-eye"></i></a>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->

	<div class="container">
		<div class='calendar'>
			






		</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function(){
		    $("div").find("#calendar");
		});
	</script>
     
@endsection