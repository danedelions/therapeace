@extends('layouts.cli')

@section('title', 'Account')

@section('page-section')
<div class="row"> <!-- 	<div class="row">  --><!-- <div class="col-md-5"> -->
	<div class="col-sm-5 col-md-5 col-lg-5">
		<div class="card ">
			<div class="card-header text-white bg-info">
				<h5>User Information</h5>
			</div>
			<div class="card-body">
						<div class="form-group row justify-content-center">
							<label class="col-lg-3"><b>Username</b></label>
								<div class="col-lg-8">
									{{ Auth::user()->username }}
								</div>
						</div>
						<div class="form-group row justify-content-center">
							<label class="col-lg-3"><b>First Name</b></label>
								<div class="col-lg-8">
									{{ $client->fname }}
								</div>
						</div>
						<div class="form-group row justify-content-center">
							<label class="col-lg-3"><b>Last Name</b></label>
								<div class="col-lg-8">
									{{ $client->lname }}
								</div>
						</div>
						<div class="form-group row justify-content-center">
							<label class="col-lg-3"><b>Email</b></label>
								<div class="col-lg-8">
									{{ Auth::user()->email }}
								</div>
						</div>
						<div class="form-group row justify-content-center">
							<label class="col-lg-3"><b>Gender</b></label>
								<div class="col-lg-8">
									{{ $client->gender }}
								</div>
						</div>
						<div class="form-group row justify-content-center">
							<label class="col-lg-3"><b>Contact Number</b></label>
								<div class="col-lg-8">
									{{ $client->contact }}
								</div>
						</div>
						<div class="form-group row justify-content-center">
							<label class="col-lg-3"><b>Address</b></label>
								<div class="col-lg-8">
									{{$client->address}}
								</div>
						</div>
						<div class="form-group row justify-content-center">
							<label class="col-lg-3"><b>Postal Code</b></label>
								<div class="col-lg-8">
									{{ $client->postal_code }}
								</div>
						</div>
					<div style="display:block; width:x; height:y; text-align:right;">
						<a href="{{url('/client-edit/'. $client->id )}}"><i class="far fa-edit"></i> Edit</a>
					</div>
			</div>
		</div>
	</div>

	<div class="col-sm-5 col-md-5 col-lg-7">
		<div class="card">
			<div class="card-header text-white bg-info">
				<h5>Sent Requests</h5>
			</div>
			<div class="card-body" style="overflow: scroll; height: 200px;">
				<table class="table table-default">
					<thead>
						@foreach($bookings as $data)
						<tr>
							<td><i class="fas fa-user-circle fa-5x"></i></td>
							<td>You sent a request to <b>{{$data->therapist->fname}}</b></td>
							<td>
								<input type="submit" value="View" class="btn btn-info" href="#" data-toggle="modal" data-target="#viewConnection">
								<button class="btn btn-danger">Cancel</button>
							</td>
						</tr>
						@endforeach
					</thead>
				</table>
			</div>
		</div>

		<br>

		<div class="card">
			<div class="card-header text-white bg-info">
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

