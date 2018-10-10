
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
						    	<select class="form-control lg-2">
								  	<option selected>Open to select Client</option>
								    <option value="1">One</option>
								    <option value="2">Two</option>
								    <option value="3">Three</option>
								</select>
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
						@foreach($clients as $row)
						<!-- <center><i class="fas fa-user-circle fa-8x"></i></center> -->
						<label>Patient Name: </label>
						<a>{{ $row->fname }} {{ $row->lname }}</a><br>

						<label>Date:</label>
						<a></a><br>
						
						<label>Hour/s:</label>
						<a></a><br>

						<label>Additional Fee: </label>
						<a></a><br>
						
						<label>Other Services:</label>
						<a></a><br>

						<label>Phone Number: </label>
						<a></a><br>
						@endforeach
					</div>

					<div class="card-body" >
						<!-- <center><i class="fas fa-user-circle fa-8x"></i></center> -->
						<label>Assessment: </label>
						<label>
							<a type="button" value="#" class="btn btn-success" href="#">Successfully Cared</a>
						<a type="button" value="#" class="btn btn-primary" href="#">Connect</a>
						<a type="button" value="#" class="btn btn-danger" href="#">Cancel Booking</a>
						</label>
					</div>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
</div>