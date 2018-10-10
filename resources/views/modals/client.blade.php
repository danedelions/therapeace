
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
						@foreach($therapists as $row)

						<center><i class="fas fa-user-circle fa-8x"></i>
						<!-- <center><i class="fas fa-user-circle fa-8x"></i></center> -->
							  	<div class="form-group row">
								  		<label class="control-label">Full Name: </label>
										<a>{{ $row->fname }} {{ $row->lname }}</a>
							  	</div>
							  							<!-- <center><i class="fas fa-user-circle fa-8x"></i></center> -->
							  	<div class="form-group row">
								  		<label class="control-label">Gender: </label>
										<a>{{ $row->gender }}</a>
							  	</div>
							  							<!-- <center><i class="fas fa-user-circle fa-8x"></i></center> -->
							  	<div class="form-group row">
								  		<label class="control-label">Type: </label>
										<a>{{ $row->therapist }}</a>
							  	</div>
							  							<!-- <center><i class="fas fa-user-circle fa-8x"></i></center> -->
							  	<div class="form-group row">
								  		<label class="control-label">Email Address: </label>
										<a>{{ Auth::user()->email }}</a>
							  	</div>
							  							<!-- <center><i class="fas fa-user-circle fa-8x"></i></center> -->
							  	<div class="form-group row">
								  		<label class="control-label">Address: </label>
										<a>
											{{ $row->streetaddress }}, 
											{{ $row->barangay }}, 
											{{ $row->town }},
											{{ $row->province }},
											{{ $row->country }},
											{{ $row->streetaddress }},
											{{ $row->postal_code }}
										</a>
								</div>

							  	<div class="form-group row">
								  		<label class="control-label">Contact Number: </label>
										<a>{{ $row->contact }}</a>
							  	</div>
						<input type="submit" value="Connect" class="btn btn-success">
						@endforeach
					</div>
				</div>		
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>

		</div>
	</div>
</div>