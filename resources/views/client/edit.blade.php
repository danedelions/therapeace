@extends('layouts.cli')

@section('title', 'Account-edit')

@section('page-section')

    <div class="container">
        <div class="row ">
            <div class="col-md-8 col-md-offset-2">
                {!! Form::model($client, ['url'=> route('client.update', ['id'=>$client->id]),'method'=>'PATCH', 'files'=>true,'role'=>'form']) !!}
                {!! csrf_field() !!}
    			<legend class="text-center">Update Information</legend>
              <fieldset>
                    <legend>Profile:</legend>
                    <div class="form-group col-md-6">
                        {!! Form::inputGroup('text', 'Username', 'username', $client->user->username, ['placeholder' => 'User Name']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::inputGroup('text', 'First Name', 'fname', null, ['placeholder' => 'First Name'])  !!}
                    </div>

                    <div class="form-group col-md-6">
                        {!! Form::inputGroup('text', 'Last Name', 'lname', null, ['placeholder' => 'Last Name']) !!}
                    </div>

                    <div class="form-group col-md-12">
                        {!! Form::inputGroup('email', 'Email', 'email', $client->user->email, ['placeholder' => 'Email']) !!}
                    </div>

                    <div class="form-group col-md-6">
                        {!! Form::inputGroup('number', 'Contact Number', 'contact', null, ['placeholder' => 'Contact Number']) !!}
                    </div>
                    
                    <div class="form-group col-md-6"><br>
                        {!! Form::select('gender',array('Male' => 'Male', 'Female' => 'Female', 'Others' => 'Others')) !!}
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Address</legend>
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
                </fieldset>
                <fieldset>
                    <div class="form-group col-md-6">
                        <input type="reset" href="/client-account" class="btn btn-secondary" value="Cancel">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </fieldset>
                {!! Form::close() !!}  
            </div>
        </div>
    </div>



@endsection

