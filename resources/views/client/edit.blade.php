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

                {!! Form::open(['url' => ['/client-account','$clients->$id'], 'files' => true, 'method' => 'PUT']) !!}

                    {{ csrf_field() }}

                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group row justify-content-center">
                        {{ Form::label('fname', 'First Name', ['class' => 'col-lg-4 col-form-label']) }}
                        {{ Form::text('fname', $clients->fname, array_merge(['class' => 'col-lg-7 form-control'])) }}
                    </div>
                    <div class="form-group row justify-content-center">
                        {{ Form::label('lname','Last Name', ['class' => 'col-lg-4 col-form-label']) }}
                        {{ Form::text('lname', $clients->lname, array_merge(['class' => 'col-lg-7 form-control'])) }}
                    </div>
                    <div class="form-group row justify-content-center">
                        {{ Form::label('gender','Gender', ['class' => 'col-lg-4 col-form-label']) }}
                        <div class="col-lg-7">
                        {{ Form::select('gender', ['Male' => 'Male', 'F' => 'Female'])  }}
                        </div>
                    </div>
                    <div class="form-group row justify-content-center">
                        {{ Form::label('email','Email', ['class' => 'col-lg-4 col-form-label']) }}
                        {{ Form::text('email', Auth::user()->email, array_merge(['class' => 'col-lg-7 form-control'])) }}                 
                    </div>
                    <hr>
                    <div class="form-group row justify-content-center">
                        {{ Form::label('barangay', 'Barangay', ['class' => 'col-lg-4 col-form-label']) }}
                        {{ Form::text('barangay', $clients->barangay, array_merge(['class' => 'col-lg-7 form-control'])) }}                     
                    </div>
                    <div class="form-group row justify-content-center">
                        {{ Form::label('town', 'Town', ['class' => 'col-lg-4 col-form-label']) }}
                        {{ Form::text('town', $clients->town, array_merge(['class' => 'col-lg-7 form-control'])) }}                     
                    </div>
                    <div class="form-group row justify-content-center">
                        {{ Form::label('province', 'Province', ['class' => 'col-lg-4 col-form-label']) }}
                        {{ Form::text('province', $clients->province, array_merge(['class' => 'col-lg-7 form-control'])) }}                     
                    </div>
                    <div class="form-group row justify-content-center">
                        {{ Form::label('city', 'City', ['class' => 'col-lg-4 col-form-label']) }}
                        {{ Form::text('city', $clients->city, array_merge(['class' => 'col-lg-7 form-control'])) }}                     
                    </div>
                    
                    <div class="form-group" style="display:block; width:x; height:y; text-align:right;">
                        {{ Form::submit('Save Changes', array('class' => 'btn btn-primary')) }}
					</div>

                {!! Form::close() !!}

            </div>
		</div>
	</div>
</div>



@endsection

