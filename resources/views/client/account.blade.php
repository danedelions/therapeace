@extends('layouts.cli')

@section('page-section')

	<nav class="navbar navbar-expand-sm  bg-light border">
	<div class="container">
		  </a>
		   <!-- Toggler/collapsibe Button -->
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		<div class="content py-5  bg-light">
			<div class="container">
				<div class="row">
				 	<div class="col-sm-5 col-md-5 col-lg-5">
		                   <!-- form user info -->
		                <div class="card card-outline-secondary">
		                    <div class="card-header">
		                        <h3 class="mb-0">User Information</h3>
		                    </div>
		                        <div class="card-body">
		                            <form class="form">
		                                <div class="form-group row">
		                                    <label class="col-lg-3 col-form-label form-control-label">Username</label>
		                                    <div class="col-lg-9">
		                                        <input class="form-control" type="text" value="sabrina">
		                                    </div>
		                                </div>
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
		                                    <label class="col-lg-3 col-form-label form-control-label">Birthday</label>
		                                    <div class="col-lg-9">
		                                        <input class="form-control" type="text" value="September 5, 2018">
		                                    </div>
		                                </div>
		                                <div class="form-group row">
		                                    <label class="col-lg-3 col-form-label form-control-label">Gender</label>
		                                    <div class="col-lg-9">
		                                        <input class="form-control" type="url" value="Female">
		                                    </div>
		                                </div>
		                                <div class="form-group row">
		                                    <label class="col-lg-3 col-form-label form-control-label">Password</label>
		                                    <div class="col-lg-9">
		                                        <input class="form-control" type="password" value="11111122333">
		                                    </div>
		                                </div>
		                                <div class="form-group row">
		                                    <label class="col-lg-3 col-form-label form-control-label">Confirmation Password</label>
		                                    <div class="col-lg-9">
		                                        <input class="form-control" type="password" value="11111122333">
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
		                    <!-- /form user info -->
		                        </div>
		                </div>
		            </div>

				 	<div class="col-sm-7 col-md-7 col-lg-7">
				 		<!-- CONNECTIONS -->
		                <div class="card card-outline-secondary">
		                    <div class="card-header">
		                        <h3 class="mb-0">Connections</h3>
		                    </div>
		                    <!-- CARD BODY -->
				            <div class="card-body">
				                <div class="card card-outline-secondary">
				                    <div class="row">
				                        <div class="col-md-3">
				                            <label class="float-right"><i class="fas fa-user-circle fa-7x"></i></label>
				                        </div>

				                    	<div class="col-lg-3">
					                        <label>Tiffany Centillas connect now</label>
							            </div>

							            <div class="col-lg-3">
							                <label class="btn btn-primary">View</label>
							                <label class="btn btn-success">Connect</label>
							            </div>
				                	</div>
				            	</div>
				            
				           		 <br>

				                <div class="card card-outline-secondary">
				                    <div class="row">
				                        <div class="col-md-3">
				                            <label class="float-right"><i class="fas fa-user-circle fa-7x"></i></label>
				                        </div>

				                    	<div class="col-lg-3">
					                        <label>Tiffany Centillas connect now</label>
							            </div>

							            <div class="col-lg-3">
							                <label class="btn btn-primary">View</label>
							                <label class="btn btn-success">Connect</label>
							            </div>
				                	</div>
				            	</div>
				            </div>
				            <!-- End of CARD BODY -->
				        </div>
				        <!-- End of CONNECTIONS -->


					        <!-- COMMENTS AND RATINGS -->
					        <div class="card card-outline-secondary">
			                    <div class="card-header">
			                        <h3 class="mb-0">Comments and Ratings</h3>
			                    </div>
			                    <!-- CARD BODY -->
					            <div class="card-body">
					                <div class="card card-outline-secondary">
					                    <div class="row">
					                        <div class="col-md-3">
					                            <label class="float-right"><i class="fas fa-user-circle fa-7x"></i></label>
					                        </div>

					                        <div class="col-lg-3">				                                    
												<fieldset class="rating">
													<input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
													<input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
													<input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
													<input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
													<input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
													<input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
													<input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
													<input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
													<input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
													<input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
												</fieldset>
					                        </div>

					                        <div class="col-lg-3">
					                            <textarea placeholder="Comment"></textarea>
					                        </div>

					                        <div class="col-lg-3">
					                            <label class="btn btn-success">Submit</label>
					                        </div>
					                    </div>
					                </div>

					                            <br>

					                <div class="card card-outline-secondary">
					                    <div class="row">
					                        <div class="col-md-3">
					                            <label class="float-right"><i class="fas fa-user-circle fa-7x"></i></label>
					                        </div>

					                        <div class="col-lg-3">				                                    
												<fieldset class="rating">
													<input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
													<input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
													<input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
													<input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
													<input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
													<input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
													<input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
													<input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
													<input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
													<input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
												</fieldset>
					                        </div>

					                        <div class="col-lg-3">
					                          	<textarea placeholder="Comment"></textarea>
					                        </div>

					                        <div class="col-lg-3">
					                            <label class="btn btn-success">Submit</label>
					                        </div>
					                    </div>
					                </div>				      
					            </div>
					            <!-- End of CARD BODY -->
					        </div>
					       <!-- End of COMMENTS AND RATINGS -->
		            </div>
		        </div>
			</div>
			<!-- End of Container -->
		</div>
	</div>

@endsection

