  <!-- VIEW TRANSACTION -->
<div class="modal fade" id="viewTransaction" role="document">
	<div class="modal-dialog">

	<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<div class="card" style="overflow: scroll; height: 500px;">
					<div class="card-header">
						<h5 class="mb-0">THERAPY INVOICE 
							<a class="btn btn-no-outline-primary" href="#" data-toggle="modal" data-target="#printTransaction"><i class="fas fa-print"></i></a>
						</h5>
					</div>

					@foreach($clients as $client)

					<div class="card-body">
						<div class="row">
							<div class="col-md-12" id="transaction">
			                	<label class="control-label">Patient Name: </label>
								<a>{{$client['fname']}} {{$client['lname']}}</a><br>

			                	<label class="control-label">Address: </label>
								<a>{{$client['barangay']}} {{$client['town']}} {{$client['province']}} {{$client['city']}}</a><br>

			                	<label class="control-label">Phone: </label>
								<a>{{$client['contact']}}</a><br>

			               		<hr>
			        @endforeach

			                	<label class="control-label">Therapist: </label>
								<a></a><br>

			                	<label class="control-label">Diagnosis: </label>
								<a></a><br>

			                	<label class="control-label">Order: </label>
								<a></a>
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
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-basic" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<!-- VIEW CONNECTION -->

<div class="modal fade" id="viewConnection" role="dialog">
	<div class="modal-dialog">

	<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<div class="card">
					<div class="card-header text-center">
						<h5>THERAPIST'S PROFILE</h5>
					</div>
					<div class="card-body">
						<center><i class="fas fa-user-circle fa-8x"></i></center>
							<label>Name : </label><br>
							<label>Gender: </label><br>
							<label>Type: </label><br>
							<label>Email:</label><br>
							<label>Contact #:</label><br>
						<input type="submit" value="Connect" class="btn btn-success">
					</div>
				</div>		
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>