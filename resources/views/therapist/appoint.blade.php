@extends('therapist.dashboard')

@section('page-section')
<div class="container">
	<div class="row offset-md-1"> <!-- 	<div class="row">  --><!-- <div class="col-md-5"> -->
		<div class="col-md-4 col-lg-5">
			<div class="card">
				<div class="card-header">
					<h3>User Information</h3>
				</div>
				<div class="card-body">
					<form class="form">
						<div>
							<div>
								<center><i class="fas fa-user-circle fa-5x"></i>
								<input type="file" name="filename"></center>
							</div>
						</div>	
						<hr>					

						<div class="form-group row">
							<label class="col-lg-3 col-form-label form-control-label">First name</label>
								<div class="col-lg-9">
									<input class="form-control" type="text" value="Sabrina">
								</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-3 col-form-label form-control-label">Last name</label>
								<div class="col-lg-9">
									<input class="form-control" type="text" value="Lopez">
								</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-3 col-form-label form-control-label">Email</label>
								<div class="col-lg-9">
									<input class="form-control" type="email" value="therapeace@gmail.com">
								</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-3 col-form-label form-control-label">Address</label>
								<div class="col-lg-9">
									<input class="form-control" type="text" value="Consolacion">
								</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-3 col-form-label form-control-label">Phone Number</label>
								<div class="col-lg-9">
									<input class="form-control" type="text" value="09254125444">
								</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-3 col-form-label form-control-label"></label>
								<div class="col-lg-9">
									<input type="reset" class="btn btn-secondary" value="Cancel">
									<input type="button" class="btn btn-success" value="Save Changes">
								</div>
						</div>
					</form>
				</div>
			</div>
		</div>

		<div class="col-md-7 col-lg-6">
			<div class="card">
				<div class="card-header">
					<h3>Client Requests</h3>
				</div>
				<div class="card-body" style="overflow: scroll; height: 200px;">
					<table>
						<tbody>
							<tr>
								<td>
									<p>
									<i class="fas fa-user-circle fa-5x"></i>
									<label>Tiffany</label> wants to connect with you
									<input type="submit" value="Connect" class="btn btn-outline-success">  
									<input type="submit" value="View" class="btn btn-outline-info">
									</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>
									<i class="fas fa-user-circle fa-5x"></i>
									<label>Tiffany</label> wants to connect with you
									<input type="submit" value="Connect" class="btn btn-outline-success">  
									<input type="submit" value="View" class="btn btn-outline-info">
									</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>
									<i class="fas fa-user-circle fa-5x"></i>
									<label>Tiffany</label> wants to connect with you
									<input type="submit" value="Connect" class="btn btn-outline-success">  
									<input type="submit" value="View" class="btn btn-outline-info">
									</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>
									<i class="fas fa-user-circle fa-5x"></i>
									<label>Tiffany</label> wants to connect with you
									<input type="submit" value="Connect" class="btn btn-outline-success">  
									<input type="submit" value="View" class="btn btn-outline-info">
									</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>
									<i class="fas fa-user-circle fa-5x"></i>
									<label>Tiffany</label> wants to connect with you
									<input type="submit" value="Connect" class="btn btn-outline-success">  
									<input type="submit" value="View" class="btn btn-outline-info">
									</p>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

			<br>

			<div class="card">
				<div class="card-header">
				<h3>Comments and Ratings</h3>
				</div>
				<div class="card-body" style="overflow: scroll; height: 200px;">
					<table>
						<tbody>
							<tr>
								<td>
									<p>
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

										<div class="col-lg-7" style="text-align:justify">
											<a>Lorem ipsum dolor sit amet, urna quis eros, donec sed purus, elit at amet non, placerat lorem mattis posuere platea, mauris vestibulum sem semper lobortis ut. Penatibus odio eu gravida sit, leo aenean sit ut.</a>
										</div>
									</p>
								</td>
							</tr>

							<tr>
								<td>
									<p>
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

										<div class="col-lg-7" style="text-align:justify">
											<a>Lorem ipsum dolor sit amet, urna quis eros, donec sed purus, elit at amet non, placerat lorem mattis posuere platea, mauris vestibulum sem semper lobortis ut. Penatibus odio eu gravida sit, leo aenean sit ut.</a>
										</div>
									</p>
								</td>
							</tr>

							<tr>
								<td>
									<p>
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

										<div class="col-lg-7" style="text-align:justify">
											<a>Lorem ipsum dolor sit amet, urna quis eros, donec sed purus, elit at amet non, placerat lorem mattis posuere platea, mauris vestibulum sem semper lobortis ut. Penatibus odio eu gravida sit, leo aenean sit ut.</a>
										</div>
									</p>
								</td>
							</tr>
								
						</tbody>
					</table>
				</div>
			</div>
</div>
@endsection