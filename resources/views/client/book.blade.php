@extends('layouts.cli')

@section('page-section')
	<div class="row">
		<div class="col-sm-4 col-md-4 col-lg-4">
			<div class="card">
				<div class="card-header bg-info">
					Therapist's Information
				</div>
				<div class="card-body">
					<center>
						<img src='{{ asset("storage/{$therapist->image}") }}' style="width:150px;height:150px;">
						<br>
						<h4>{{$therapist->therapist}}</h4>
					</center>
					<hr>	
						<label><b>Name: </b>{{$therapist->fullName}}</label><br>
						<label><b>Gender: </b>{{$therapist->gender}}</label><br>
						<label><b>Contact #: </b>{{$therapist->contact}}</label><br>
						<label><b>Address: </b>{{$therapist->address}}</label><br>
						<label><b>Specializations: </b><h6><span class="badge badge-default ml-1"> {!! optional($therapist->specialties)->pluck('name')->implode('</span ><span class="badge badge-default ml-1">') !!}</span></h6></label><br>
				</div>
			</div>
		</div>
		<div class="col-sm-8 col-md-8 col-lg-8">
			<div class="card">
				<div class="card-header bg-success">
					Your Details
				</div>
				<div class="card-body">
					<form method="POST" action="{{url('/doBookTherapist/')}}" enctype="multipart/form-data">
						{{csrf_field()}}
						@if ($errors->any())
							<div class="alert alert-danger">
										<ul>
												@foreach ($errors->all() as $error)
														<li>{{ $error  }}</li>
												@endforeach
										</ul>
								</div>
						@endif 
						<div class="form-row">
							<div class="form-group col-md-4" required>
						     	<label for="inputPatient" ><b>Are you the patient?</b></label>
						     	<br>
						     	<input name="patient" type="radio" value ="yes"> Yes <br>
						     	<input name="patient" type="radio" value ="no"> No <br>
						    </div>
						</div>
					  <div class="form-row">
					    <div class="form-group col-md-6">
					     	<label for="inputEmail4"><b>Name</b></label>
					     	<input type="text" class="form-control" value="{{$client->fullName}}" name="name">
					     	<input type="number" name="therapist_id" value="{{$therapist->user_id}}" hidden>
					    </div>
					    <div class="form-group col-md-6">
					     	<label for="inputEmail4"><b>E-mail</b></label>
					     	<input type="text" class="form-control" value="{{$client->user->email}}" name="email">
					    </div>
					    <div class="form-group col-md-6">
					     	<label for="inputEmail4"><b>Contact</b></label>
					     	<input type="text" class="form-control" value="{{$client->contact}}" name="contact">
					    </div>
					    <div class="form-group col-md-12">
							<label for="inputAddress"><b>Address</b></label>
						    <input type="text" class="form-control" value="{{$client->address}}" name="user_address">
						</div>
						<div class="form-group col-md-12">
							<label for="inputAddress"><b>Notes to your therapist</b></label>
						    <input type="text" class="form-control" name="notes" required="required">
						</div>
						<div class="form-group col-md-12">
							<div class="card">
								<div class="card-header text-white bg-info">
									<label for="inputAddress">What's your diagnosis?</label>
								</div>
								<div class="card-body">
									<input type="text" name="diagnosis" class="form-control" placeholder="What's your diagnosis?" required="required">
									<sup>*Please type your diagnosis here</sup>
									<br>
									<input type="file" accept="image/x-png,image/gif,image/jpeg" name="image" id="fileToUpload" class="form-control" required="required"> 
									<sup>*Please uload a photo of your doctor's referral</sup>
								</div>
							</div>
						</div>
						<a href="{{url('/client-find')}}" class="btn btn-danger">Back</a>&nbsp;
						<button type="submit" class="btn btn-success">Submit</button>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection