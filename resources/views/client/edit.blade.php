@extends('layouts.cli')

@section('title', 'Account-edit')

@section('page-section')

<div class="row justify-content-md-center"> <!-- 	<div class="row">  --><!-- <div class="col-md-5"> -->
	<div class="col-sm-8 col-md-8 col-lg-5">
		<div class="card">
			<div class="card-header bg-info">
				<h5 class="text-center">Update Information</h5>
			</div>
			<div class="card-body">

                {!! Form::model($client, ['url'=> route('client.update', ['id'=>$client->id]),'method'=>'PATCH', 'files'=>true,'role'=>'form']) !!}
                {!! csrf_field() !!}
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group col-md-6">
                        {!! Form::inputGroup('text', 'First Name', 'fname', null, ['placeholder' => 'First Name'])  !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::inputGroup('text', 'Last Name', 'lname', null, ['placeholder' => 'Last Name']) !!}
                    </div>

                    <div class="form-group col-md-6"><br>
                        {!! Form::select('gender',array('Male', 'Female', 'Others')) !!}
                    </div>
                    <div class="form-group row justify-content-center">
                        {{ Form::label('email','Email', ['class' => 'col-lg-4 col-form-label']) }}
                        {{ Form::text('email', Auth::user()->email, array_merge(['class' => 'col-lg-7 form-control'])) }}                 
                    </div>

                    <div class="form-group col-md-6">
                        {!! Form::inputGroup('text', 'City', 'city', null, ['placeholder' => 'City']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::inputGroup('text', 'Town', 'town', null, ['placeholder' => 'Town']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::inputGroup('text', 'Province', 'province', null, ['placeholder' => 'Province']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::inputGroup('text', 'Barangay', 'barangay', null, ['placeholder' => 'Barangay']) !!}
                    </div>
                    <hr>
                    
                    <div class="form-group" style="display:block; width:x; height:y; text-align:right;">
                        {{ Form::submit('Save Changes', array('class' => 'btn btn-primary')) }}
					</div>

                {!! Form::close() !!}

            </div>
		</div>
	</div>
</div>



@endsection

