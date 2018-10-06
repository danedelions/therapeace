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

					@foreach($clients as $client)

					<div class="form-group row justify-content-center">
						{{ Form::label('username', 'Username', ['class' => 'col-lg-4 col-form-label']) }}
						{{ Form::text('username', Auth::user()->username, array_merge(['class' => 'col-lg-7 form-control', 'disabled' => 'disabled'])) }}
					</div>
					<div class="form-group row justify-content-center">
						{{ Form::label('fname', 'First Name', ['class' => 'col-lg-4 col-form-label']) }}
						{{ Form::text('fname', $client->fname, array_merge(['class' => 'col-lg-7 form-control', 'disabled' => 'disabled'])) }}
					</div>
					<div class="form-group row justify-content-center">
						{{ Form::label('lname', 'Last Name', ['class' => 'col-lg-4 col-form-label']) }}
						{{ Form::text('lname', $client->lname, array_merge(['class' => 'col-lg-7 form-control', 'disabled' => 'disabled'])) }}
					</div>
					<div class="form-group row justify-content-center">
						{{ Form::label('gender', 'Gender', ['class' => 'col-lg-4 col-form-label']) }}
						{{ Form::text('gender', $client->gender, array_merge(['class' => 'col-lg-7 form-control', 'disabled' => 'disabled'])) }}
					</div>		
					<div class="form-group row justify-content-center">
						{{ Form::label('email', 'Email Address', ['class' => 'col-lg-4 col-form-label']) }}
						{{ Form::text('email', Auth::user()->email, array_merge(['class' => 'col-lg-7 form-control', 'disabled' => 'disabled'])) }}
					</div>
					<div class="form-group row justify-content-center">
						{{ Form::label('contact', 'Contact Number', ['class' => 'col-lg-4 col-form-label']) }}
						{{ Form::text('contact', $client->contact, array_merge(['class' => 'col-lg-7 form-control', 'disabled' => 'disabled'])) }}
					</div>

				<hr>

					<div class="form-group row justify-content-center">
						{{ Form::label('barangay', 'Barangay', ['class' => 'col-lg-4 col-form-label']) }}
						{{ Form::text('barangay', $client->barangay, array_merge(['class' => 'col-lg-7 form-control', 'disabled' => 'disabled'])) }}
					</div>
					<div class="form-group row justify-content-center">
						{{ Form::label('town', 'Town', ['class' => 'col-lg-4 col-form-label']) }}
						{{ Form::text('town', $client->town, array_merge(['class' => 'col-lg-7 form-control', 'disabled' => 'disabled'])) }}
					</div>
					<div class="form-group row justify-content-center">
						{{ Form::label('province', 'Province', ['class' => 'col-lg-4 col-form-label']) }}
						{{ Form::text('province', $client->province, array_merge(['class' => 'col-lg-7 form-control', 'disabled' => 'disabled'])) }}
					</div>
					<div class="form-group row justify-content-center">
						{{ Form::label('city', 'City', ['class' => 'col-lg-4 col-form-label']) }}
						{{ Form::text('city', $client->city, array_merge(['class' => 'col-lg-7 form-control', 'disabled' => 'disabled'])) }}
					</div>
					<div style="display:block; width:x; height:y; text-align:right;">
						<a href="{{ URL::to('/client-edit', $client->id) }}"><i class="far fa-edit"></i> Edit</a>
					</div>

					@endforeach
					
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

