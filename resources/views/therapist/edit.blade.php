@extends('layouts.the')

@section('page-section')
@include('modals.therapist')
       <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
    
      <div class="container">
        <div class="row">
          {!! Form::model($therapist, array('url'=> route('therapist.update', ['id'=>$therapist->id]),'method'=>'PATCH', 'files'=>true,'role'=>'form')) !!}
          {!! csrf_field() !!}
          <div class="col-md-8 col-md-offset-2">
            <legend class="text-center">Update Information</legend>
            <center><i class="fas fa-user-circle fa-7x"></i>
            <input type="file" id="itemImage" name="image">
            <input type="submit" value="Upload Image" name="submit" class="btn btn-primary btn-sm">

              <fieldset>  
                        <div class="form-group col-md-6">
                            {!! Form::inputGroup('text', 'First Name', 'fname', null, ['placeholder' => 'First Name'])  !!}
                        </div>

                        <div class="form-group col-md-6">
                             {!! Form::inputGroup('text', 'Last Name', 'lname', null, ['placeholder' => 'Last Name']) !!}
                        </div>

                        <div class="form-group col-md-12">
                             {!! Form::inputGroup('email', 'Email', 'email', $therapist->user->email, ['placeholder' => 'Email']) !!}
                        </div>

                        <div class="form-group col-md-6">
                             {!! Form::inputGroup('number', 'Contact Number', 'contact', null, ['placeholder' => 'Contact Number']) !!}
                        </div>
                        
                        <div class="form-group col-md-6"><br>
                            {!! Form::select('gender',array('Male', 'Female', 'Others')) !!}
                        </div>

              </fieldset>
              <fieldset>
                             <legend>Address:</legend>
                        <div class="form-group col-md-6">
                             {!! Form::inputGroup('text', 'Street Address', 'streetaddress', null, ['placeholder' => 'Street Address']) !!}
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
                        <div class="form-group col-md-6">
                            {!! Form::inputGroup('number', 'Postal Code', 'postal_code', null, ['placeholder' => 'Postal Code']) !!}
                        </div>
              </fieldset>

                </div>
            </div>

              <fieldset>
                        <legend>License:</legend>
                        <div class="form-group col-md-6">
                            {!! Form::inputGroup('number', 'License Number', 'license_number', null, ['placeholder' => 'License Number']) !!}
                        </div>
                        <div class="form-group col-md-6">
                            {!! Form::inputGroup('date', 'Expiry Date', 'expiry_date', null, ['placeholder' => 'Expiry Date']) !!}
                        </div>
                         <div class="form-group col-md-6">
                          <label>License Image</label>
                         <input type="file" id="itemImage" name="itemImage" >
                        </div>
                         <div class="form-group col-md-6">
                          <label>NBI Image</label>
                         <input type="file" id="itemImage" name="itemImage">
                        </div>
                         <div class="form-group col-md-6">
                           <label>Barangay Clearance Image</label>
                         <input type="file" id="itemImage" name="itemImage">
                        </div>
              </fieldset>
              <fieldset>
                        <legend>Profile:</legend>
                        <div class="form-group col-md-6">
                            {!! Form::inputGroup('text', 'Username', 'username', $therapist->user->username, ['placeholder' => 'User Name']) !!}
                        </div>
              </fieldset>

                  <input type="reset" href="/therapist-account" class="btn btn-secondary" value="Cancel">
                  <button type="submit" class="btn btn-success">Update</button>
          </div>
          {!! Form::close() !!}  
        </div>
      </div>
        
                   
   
@endsection