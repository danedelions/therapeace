@extends('layouts.the')

@section('page-section')

			<div class="row justify-content-center"> <!-- 	<div class="row">  --><!-- <div class="col-md-5"> -->
				<div class="col-sm-5 col-md-5 col-lg-10">
					<div class="card">
						<div class="card-header">
							<h5 class="mb-0">THERAPY INVOICE</h5>
						</div>

						<div class="card-body" id="transaction">
							<div class="row">
							  	<div class="col-12 col-md-5">
							  		<label class="control-label">Patient Name: </label>
									<a></a>
							  	</div>
							  	<div class="col-6 col-md-2">
							  		<label class="control-label">Gender: </label>
									<a></a>
							  	</div>									  	
							  	<div class="col-6 col-md-3">
							  		<label class="control-label">Contact Number: </label>
									<a></a>
							  	</div>
							</div>

							<div class="row">
								<div class="col-6 col-md-6">
								  		<label class="control-label">Address: </label>
										<a></a>
								</div>
								<div class="col-6 col-md-4">
								  		<label class="control-label">Email Address: </label>
										<a></a>
								</div>
							</div>

							<div class="row">
								<div class="col-6 col-md-6">
								  		<label class="control-label">Diagnosis: </label>
										<a></a>
								</div>
								<div class="col-6 col-md-4">
								  		<label class="control-label">Therapist: </label>
										<a></a>
								</div>
							</div>

							<hr>
							<table class="table table-default">
								<thead>
									<tr>
										<th>Description</th>
										<th>Qty</th>
										<th>Rate</th>
										<th>Amount</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>description</td> 
										<td>000</td>
										<td>000</td>
										<td>000</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

@endsection