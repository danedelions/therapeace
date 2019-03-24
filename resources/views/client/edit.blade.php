@extends('layouts.cli')

@section('title', 'Account-edit')

@section('page-section')

<div class="col-md-12">
    {!! Form::model($client, ['url'=> route('client.update', ['id'=>$client->id]),'method'=>'PATCH', 'files'=>true,'role'=>'form']) !!}
    {!! csrf_field() !!}
    <legend class="text-center">Update Information</legend>
    <hr>
    <div class="card-body">
        <div class="form-row">
            <div class="col-md-5"> <!-- mb-3 -->
                {!! Form::inputGroup('text', 'Username', 'username', $client->user->username, ['placeholder' => 'User Name']) !!}
            </div>
            <div class="col-md-7">
                {!! Form::inputGroup('email', 'Email', 'email', $client->user->email, ['placeholder' => 'Email']) !!}
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6">
                {!! Form::inputGroup('text', 'First Name', 'fname', null, ['placeholder' => 'First Name'])  !!}
            </div>
            <div class="col-md-6">
                {!! Form::inputGroup('text', 'Last Name', 'lname', null, ['placeholder' => 'Last Name']) !!}
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-6">
                {!! Form::inputGroup('number', 'Contact Number', 'contact', null, ['placeholder' => 'Contact Number']) !!}
            </div>
            <div class="col-md-6">
                {!! Form::label('gender', 'Gender') !!}
                {!! Form::select('gender',array('Male' => 'Male', 'Female' => 'Female', 'Others' => 'Others')) !!} 
            </div>
        </div>
        
        <div class="form-row">
            <legend>Address</legend>
            <div class="col-md-6">
                {!! Form::inputGroup('street', 'Street', 'street', null, ['placeholder' => 'Street']) !!}
            </div>
            <div class="col-md-6">
                {!! Form::inputGroup('text', 'Barangay', 'barangay', null, ['placeholder' => 'Barangay']) !!}
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6">
                {!! Form::inputGroup('text', 'Town', 'town', null, ['placeholder' => 'Town']) !!}
            </div>
            <div class="col-md-6">
                {!! Form::inputGroup('text', 'Province', 'province', null, ['placeholder' => 'Province']) !!}
            </div>
        </div>

           <div class="form-row">
            <div class="col-md-6">
                {!! Form::inputGroup('text', 'City', 'city', null, ['placeholder' => 'City']) !!}
            </div>
            <div class="col-md-6">
                {!! Form::inputGroup('text', 'Postal Code', 'postal_code', null, ['placeholder' => 'Postal Code']) !!}
            </div>
        </div>
        <hr>
        <div class="form-group col-md-6">
            <a href="/client-account" class="btn btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    </div>
    {!! Form::close() !!}  
</div>

@endsection

