@extends('layouts.the')

@section('page-section')
@include('modals.therapist')

	<div class="row"> <!-- 	<div class="row">  --><!-- <div class="col-md-5"> -->
		<div class="col-sm-5 col-md-5 col-lg-12">
			<div class="card">
				<div class="card-header">
					<h5>Appointment <a class="btn btn-no-outline-primary" href="#" data-toggle="modal" data-target="#appoint"><i class="fas fa-plus-circle"></i></a></h5>
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
									<tr>
										<td>1</td>
										<td>Jude Nino Canete</td>
										<td>09123654789</td>
										<td>09 - 01 - 2018</td>
										<td>2</td>
										<td>500</td>
										<td>Massage</td>
										<td>
											<button class="btn btn-primary" href="#" data-toggle="modal" data-target="#assess"><i style="color:black;" class="far fa-eye"></i></button>
										</td>
									</tr>
									<tr>
										<td>2</td>
										<td>Jude Nino Canete</td>
										<td>09123654789</td>
										<td>09 - 01 - 2018</td>
										<td>2</td>
										<td>500</td>
										<td>Massage</td>
										<td>
											<button class="btn btn-primary" href="#" data-toggle="modal" data-target="#assess"><i style="color:black;" class="far fa-eye"></i></button>
										</td>
									</tr>
									<tr>
										<td>3</td>
										<td>Jude Nino Canete</td>
										<td>09123654789</td>
										<td>09 - 01 - 2018</td>
										<td>2</td>
										<td>500</td>
										<td>Massage</td>
										<td>
											<button class="btn btn-primary" href="#" data-toggle="modal" data-target="#assess"><i style="color:black;" class="far fa-eye"></i></button>
										</td>
									</tr>
									<tr>
										<td>4</td>
										<td>Jude Nino Canete</td>
										<td>09123654789</td>
										<td>09 - 01 - 2018</td>
										<td>2</td>
										<td>500</td>
										<td>Massage</td>
										<td>
											<button class="btn btn-primary" href="#" data-toggle="modal" data-target="#assess"><i style="color:black;" class="far fa-eye"></i></button>
										</td>
									</tr>
									<tr>
										<td>5</td>
										<td>Jude Nino Canete</td>
										<td>09123654789</td>
										<td>09 - 01 - 2018</td>
										<td>2</td>
										<td>500</td>
										<td>Massage</td>
										<td>
											<button class="btn btn-primary" href="#"><i style="color:black;" class="far fa-eye"></i></button>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



@endsection

