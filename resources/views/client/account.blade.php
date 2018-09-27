@extends('layouts.cli')
@section('title', 'Account')
@section('page-section')
@include('modals.client')
<div class="row"> <!-- 	<div class="row">  --><!-- <div class="col-md-5"> -->
	<div class="col-sm-5 col-md-5 col-lg-5">
		<div class="card ">
			<div class="card-header bg-info">
				<h5>User Information</h5>
			</div>
			<div class="card-body">
				<form class="form">
					<div class="form-group row">
						<label class="col-lg-3 col-form-label">Username</label>
							<div class="col-lg-9">
								<input class="form-control" type="text" value="juan" disabled="disabled">
							</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label">First name</label>
							<div class="col-lg-9">
								<input class="form-control" type="text" value="Juan" disabled="disabled">
							</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label">Last name</label>
							<div class="col-lg-9">
								<input class="form-control" type="text" value="Dela Cruz" disabled="disabled">
							</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label">Gender</label>
							<div class="col-lg-9">
								<input class="form-control" type="text" value="Male" disabled="disabled">
							</div>
					</div>			
					<div class="form-group row">
						<label class="col-lg-3 col-form-label">Email</label>
							<div class="col-lg-9">
								<input class="form-control" type="email" value="juan@gmail.com" disabled="disabled">
							</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label">Address</label>
							<div class="col-lg-9">
								<input class="form-control" type="text" value="Malayo Cortes Bohol" disabled="disabled">
							</div>
					</div>
					<div>
						<label style="display:block; width:x; height:y; text-align:right;"><a href="/client-edit"><i class="far fa-edit"></i> Edit</a></label>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div class="col-sm-5 col-md-5 col-lg-7">
		<div class="card">
			<div class="card-header bg-info">
				<h5>Connections</h5>
			</div>
			<div class="card-body" style="overflow: scroll; height: 250px;">
				<table class="table table-default">
					<thead>
						<tr>
							<td><i class="fas fa-user-circle fa-5x"></i></td>
							<td><label>Tiffany</label> wants to connect with you</td>
							<td>
								<input type="submit" value="Connect" class="btn btn-success" href="#" data-toggle="modal" data-target="#connectModal">
								<input type="submit" value="View" class="btn btn-info" href="#" data-toggle="modal" data-target="#viewConnection">
							</td>
						</tr>
						<tr>
							<td><i class="fas fa-user-circle fa-5x"></i></td>
							<td><label>Tiffany</label> wants to connect with you</td>
							<td>
								<input type="submit" value="Connect" class="btn btn-success" href="#" data-toggle="modal" data-target="#connectModal">
								<input type="submit" value="View" class="btn btn-info" href="#" data-toggle="modal" data-target="#viewConnection">
							</td>
						</tr>
						<tr>
							<td><i class="fas fa-user-circle fa-5x"></i></td>
							<td><label>Tiffany</label> wants to connect with you</td>
							<td>
								<input type="submit" value="Connect" class="btn btn-success" href="#" data-toggle="modal" data-target="#connectModal">
								<input type="submit" value="View" class="btn btn-info" href="#" data-toggle="modal" data-target="#viewConnection">
							</td>
						</tr>
						<tr>
							<td><i class="fas fa-user-circle fa-5x"></i></td>
							<td><label>Tiffany</label> wants to connect with you</td>
							<td>
								<input type="submit" value="Connect" class="btn btn-success" href="#" data-toggle="modal" data-target="#connectModal">
								<input type="submit" value="View" class="btn btn-info" href="#" data-toggle="modal" data-target="#viewConnection">
							</td>
						</tr>		
						<tr>
							<td><i class="fas fa-user-circle fa-5x"></i></td>
							<td><label>Tiffany</label> wants to connect with you</td>
							<td>
								<input type="submit" value="Connect" class="btn btn-success" href="#" data-toggle="modal" data-target="#connectModal">
								<input type="submit" value="View" class="btn btn-info" href="#" data-toggle="modal" data-target="#viewConnection">
							</td>
						</tr>
					</thead>
				</table>
			</div>
		</div>

		<br>

		<div class="card">
			<div class="card-header bg-info">
			<h5>Comments and Ratings</h5>
			</div>
			<div class="card-body" style="overflow: scroll; height: 250px;">
				<table class="table table-default">
					<thead>
						<tr>
							<td>
								<fieldset class="rating">
									<i class="fas fa-user-circle fa-5x"></i>	
									<input type="radio" id="star5" name="rating" value="5" />
										<label class = "full" for="star5" title="Awesome - 5 stars"></label>
									<input type="radio" id="star4" name="rating" value="4" />
										<label class = "full" for="star4" title="Pretty good - 4 stars"></label>
									<input type="radio" id="star3" name="rating" value="3" />
										<label class = "full" for="star3" title="Meh - 3 stars"></label>
									<input type="radio" id="star2" name="rating" value="2" />
										<label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
									<input type="radio" id="star1" name="rating" value="1" />
										<label class = "full" for="star1" title="Sucks big time - 1 star"></label>
								</fieldset>
							</td>
							<td>
								<div>
									<textarea placeholder="Comment"></textarea>
								</div>
							</td>		
							<td>
								<div>
									<input type="submit" class="btn btn-success" value="Submit">	
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<fieldset class="rating">
									<i class="fas fa-user-circle fa-5x"></i>	
									<input type="radio" id="star5" name="rating" value="5" />
										<label class = "full" for="star5" title="Awesome - 5 stars"></label>
									<input type="radio" id="star4" name="rating" value="4" />
										<label class = "full" for="star4" title="Pretty good - 4 stars"></label>
									<input type="radio" id="star3" name="rating" value="3" />
										<label class = "full" for="star3" title="Meh - 3 stars"></label>
									<input type="radio" id="star2" name="rating" value="2" />
										<label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
									<input type="radio" id="star1" name="rating" value="1" />
										<label class = "full" for="star1" title="Sucks big time - 1 star"></label>
								</fieldset>
							</td>
							<td>
								<div>
									<textarea placeholder="Comment"></textarea>
								</div>
							</td>		
							<td>
								<div>
									<input type="submit" class="btn btn-success" value="Submit">	
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<fieldset class="rating">
									<i class="fas fa-user-circle fa-5x"></i>	
					                    <input type="radio" id="star5" name="rating" value="5" />
					                      <label class = "full" for="star5" title="5 stars"></label>
					                    <input type="radio" id="star4" name="rating" value="4" />
					                      <label class = "full" for="star4" title="4 stars"></label>
					                    <input type="radio" id="star3" name="rating" value="3" />
					                      <label class = "full" for="star3" title="3 stars"></label>
					                    <input type="radio" id="star2" name="rating" value="2" />
					                      <label class = "full" for="star2" title="2 stars"></label>
					                    <input type="radio" id="star1" name="rating" value="1" />
					                      <label class = "full" for="star1" title="1 star"></label>
								</fieldset>
							</td>
							<td>
								<div>
									<textarea placeholder="Comment"></textarea>
								</div>
							</td>		
							<td>
								<div>
									<input type="submit" class="btn btn-success" value="Submit">
								</div>
							</td>
						</tr>							
					</thead>
				</table>
			</div>
		</div>
	</div>
</div>



@endsection

