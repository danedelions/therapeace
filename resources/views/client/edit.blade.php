@extends('layouts.cli')
@section('title', 'Account-edit')
@section('page-section')
@include('modals.client')


<div class="row justify-content-md-center"> <!-- 	<div class="row">  --><!-- <div class="col-md-5"> -->
	<div class="col-sm-8 col-md-8 col-lg-6">
		<div class="card">
			<div class="card-header bg-info">
				<h5 class="text-center">Update Information</h5>
			</div>
			<div class="card-body">
				<form class="form">
                    <div class="form-group col-md-12">
                        {!! Form::inputGroup('text', 'First Name', 'fname', null, ['placeholder' => 'First Name'])  !!}
                    </div>

                    <div class="form-group col-md-12">
                         {!! Form::inputGroup('text', 'Last Name', 'lname', null, ['placeholder' => 'Last Name']) !!}
                    </div>

                    <div class="form-group col-md-12">
                         {!! Form::inputGroup('text', 'Contact Number', 'contactnumber', null, ['placeholder' => 'Contact Number']) !!}
                    </div>

                    <legend>Address</legend>

                    <div class="form-group col-md-12">
                         {!! Form::inputGroup('text', 'Barangay', 'barangay', null, ['placeholder' => 'Barangay']) !!}
                    </div>

                    <div class="form-group col-md-12">
                         {!! Form::inputGroup('text', 'Province', 'province', null, ['placeholder' => 'Province']) !!}
                    </div>

                    <div class="form-group col-md-12">
                         {!! Form::inputGroup('text', 'Town', 'town', null, ['placeholder' => 'Town']) !!}
                    </div>

                    <div class="form-group col-md-12">
                         {!! Form::inputGroup('text', 'City', 'city', null, ['placeholder' => 'City']) !!}
                    </div>

                    <div class="form-group">
	                	<input type="reset" href="/client-account" class="btn btn-secondary" value="Cancel">
			        	<input type="button" class="btn btn-success" value="Update">
					</div>
                </form>
            </div>
		</div>
	</div>
</div>



@endsection

