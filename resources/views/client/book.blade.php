@extends('layouts.cli')

@section('page-section')
	<div class="row">
		<div class="col-sm-4 col-md-4 col-lg-4">
			<div class="card">
				<div class="card-header text-white bg-info">
					Therapist's Information
				</div>
				<div class="card-body">
					<center>
						<i class="fas fa-user-circle fa-8x"></i>
						<br>
						<h4>{{$therapist->therapist}}</h4>
					</center>
						<label><b>Name: </b>{{$therapist->fullName}}</label><br>
						<label><b>Gender: </b>{{$therapist->gender}}</label><br>
						<label><b>Email: </b>{{$therapist->user->email}}</label><br>
						<label><b>Contact #: </b>{{$therapist->contact}}</label><br>
						<label><b>Address: </b>{{$therapist->address}}</label><br>
						<label><b>Specializations:</b></label><br>
				</div>
			</div>
		</div>
		<div class="col-sm-8 col-md-8 col-lg-8">
			<div class="card">
				<div class="card-header text-white bg-success">
					Your Details
				</div>
				<div class="card-body">
					<form>
					  <div class="form-row">
					    <div class="form-group col-md-6">
					     	<label for="inputEmail4">Name</label>
					     	<input type="text" class="form-control" value="{{$client->fullName}}" disabled>
					    </div>
					    <div class="form-group col-md-6">
					     	<label for="inputEmail4">E-mail</label>
					     	<input type="text" class="form-control" value="{{$client->user->email}}" disabled>
					    </div>
					    <div class="form-group col-md-6">
					     	<label for="inputEmail4">Contact</label>
					     	<input type="text" class="form-control" value="{{$client->contact}}" disabled>
					    </div>
					    <div class="form-group col-md-12">
							<label for="inputAddress">Address</label>
						    <input type="text" class="form-control" value="{{$client->address}}" disabled>
						</div>
						<div class="form-group col-md-12">
							<label for="inputAddress">Notes to your therapist</label>
						    <input type="text" class="form-control">
						</div>
						<div class="form-group col-md-12">
							<div class="card">
								<div class="card-header text-white bg-info">
									<label for="inputAddress">What's your diagnosis?</label>
								</div>
								<div class="card-body">
									<textarea class="form-control" rows="4"></textarea>
								</div>
							</div>
						</div>
						<button type="submit" class="btn btn-danger">Back</button>&nbsp;
						<button type="submit" class="btn btn-success">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection