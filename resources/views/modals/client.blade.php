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
						<h3 class="mb-0">THERAPY INVOICE 
							<a class="btn btn-outline-primary" href="#" data-toggle="modal" data-target="#printTransaction"><i style="color:black;" class="fas fa-print"></i></a>
						</h3>
					</div>

					<div class="card-body">
						<div class="row">
							<div class="col-md-12" id="transaction">
								<label>Patient Name:</label>
								<a>Tiffany Centillas</a>
								<br>
								<label>Address:</label>
								<a>Malayo Nortes, Cortes Bohol</a>
								<br>
								<label>Phone:</label>
								<a>09099876541</a>
								<br>
								<label>Date of Birth</label>
								<a>March 3, 1998</a>
								
								<hr>
								
								<label>Physician</label>
								<a>Daniela Echavez</a>
								<br>
								<label>Diagnosis</label>
								<a>Inability to do project due to procrastination</a>
								<br>
								<label>Order: </label>
								<a>Physical Therapist</a>

								<hr><hr>
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
											<td>Random stuff</td>
											<td>100</td>
											<td>70</td>
											<td>900</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>		
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
						<h3>INFORMATION</h3>
					</div>
					<div class="card-body">
						<center><i class="fas fa-user-circle fa-8x"></i></center>
						<p><br>
							<label>Name : </label><br>
							<label>Gender: </label><br>
							<label>Type: </label><br>
							<label>Email:</label><br>
							<label>Contact #:</label><br>
						</p>
						<input type="submit" value="Connect Therapist" class="btn btn-success" href="#" data-toggle="modal" data-target="#connectModal">
					</div>
				</div>		
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>