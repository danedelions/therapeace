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
						<h5>CLIENT'S PROFILE</h5>
					</div>
					<div class="card-body">
						<!-- <center><i class="fas fa-user-circle fa-8x"></i></center> -->
						<label>Name: </label>
						<a>Chino Lopez</a><br>

						<label>Address: </label>
						<a>Lacionlacion</a><br>

						<label>Email:</label>
						<a>chin@gmail.com</a><br>
						
						<label>Contact #:</label>
						<a>093236585477</a>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<!-- <center><i class="fas fa-user-circle fa-8x"></i></center> -->
						<label>Diagnosis: </label>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. Etiam dui sem, fermentum vitae, sagittis id, malesuada in, quam. Etiam neque. Fusce dui leo, imperdiet in, aliquam sit amet, feugiat eu, orci. Aliquam in lorem sit amet leo accumsan lacinia.</p>
						
						<input type="submit" value="Connect" class="btn btn-success" href="#">
						<input type="submit" value="Decline" class="btn btn-danger" href="#">
					</div>
				</div>		
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>

<!-- APPOINTMENT -->

<div class="modal fade" id="appoint" role="dialog">
	<div class="modal-dialog">

	<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<div class="card">
						<div class="card-header text-center">
							<h5>Booking</h5>
						</div>

						<div class="container">
						  <form action="">
						    <div class="form-group">
						    	<label>Patient Name:</label>
						    	<input type="text" class="form-control" id="email" placeholder="Select Name" name="">
						    </div>
						    <div class="form-group">
						    	<label>Date: </label>
						    	<input type="date" class="form-control lg-2" id="" placeholder="Select date" name="">
						    </div>
						    <div class="form-group">
						    	<label>Hour/s: </label>
						    	<input type="number" class="form-control mb-2 mr-sm-2" id="" placeholder="Enter hour/s" name="">
						    </div>
						    <div class="form-group">
						    	<label>Additional Fee: </label>
						    	<input type="number" class="form-control mb-2 mr-sm-2" id="" placeholder="Enter hour/s" name="">
						    </div>
						    <div class="form-group">
						    	<label>Other Services: </label>
						    	<input type="number" class="form-control mb-2 mr-sm-2" id="" placeholder="Enter hour/s" name="">
						    </div>
						    <div class="form-group">
						    	<label>Phone Number: </label>
						    	<input type="number" class="form-control mb-2 mr-sm-2" id="" placeholder="Enter hour/s" name="">
						    </div>
						    <button type="button" class="btn btn-success">Submit</button>
						    <button type="button" class="btn btn-danger">Cancel</button>
						  </form>
						</div>
					</div>		
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- CLIENT ASSESSMENT -->
<div class="modal fade" id="assess" role="dialog">
	<div class="modal-dialog">

	<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
				<div class="card">
					<div class="card-header text-center">
						<h5>CLIENT'S PROFILE</h5>
					</div>
					<div class="card-body">
						<!-- <center><i class="fas fa-user-circle fa-8x"></i></center> -->
						<label>Patient Name: </label>
						<a>Chino Lopez</a><br>

						<label>Date:</label>
						<a>chin@gmail.com</a><br>
						
						<label>Hour/s:</label>
						<a>093236585477</a><br>

						<label>Additional Fee: </label>
						<a>chin@gmail.com</a><br>
						
						<label>Other Services:</label>
						<a>chin@gmail.com</a><br>

						<label>Phone Number: </label>
						<a>09754842522</a><br>
					</div>
				</div>
				<div class="card">
					<div class="card-body" >
						<!-- <center><i class="fas fa-user-circle fa-8x"></i></center> -->
						<label>Assessment: </label>
						<a type="button" value="Successfully Cared" class="btn btn-success" href="#"></a>
						<a type="button" value="Connect" class="btn btn-primary" href="#"></a>
						<a type="button" value="Cancel Booking" class="btn btn-danger" href="#"></a>
					</div>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
</div>