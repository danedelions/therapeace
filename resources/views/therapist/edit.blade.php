@extends('layouts.the')

@section('page-section')

      <div class="col-md-12">
      {!! Form::model($therapist, array('url'=> route('therapist.update', ['id'=> $therapist->id]),'method'=>'PATCH', 'files'=>true,'role'=>'form')) !!}
        <legend class="text-center">Update Information</legend>
        <hr>
        <div class="card-body">
          <input type="file" id="itemImage" name="image" class="form-control">
          <br>
          <fieldset>  
            <div class="form-row">
              <div class="col-md-6">
                  {!! Form::inputGroup('text', 'First Name', 'fname', $therapist->fname, ['placeholder' => 'First Name'])  !!}
              </div>

              <div class="col-md-6">
                   {!! Form::inputGroup('text', 'Last Name', 'lname', $therapist->lname, ['placeholder' => 'Last Name']) !!}
              </div>

              <div class="col-md-12">
                   {!! Form::inputGroup('email', 'Email', 'email', Auth::user()->email, ['placeholder' => 'Email']) !!}
              </div>

              <div class="col-md-6">
                   {!! Form::inputGroup('number', 'Contact Number', 'contact', null, ['placeholder' => 'Contact Number']) !!}
              </div>
      
              <div class="col-md-6">
                  {!! Form::label('gender', 'Gender') !!}
                  {!! Form::select('gender',array('Male' => 'Male', 'Female' => 'Female', 'Others' => 'Others')) !!}
              </div>
            </div>
          </fieldset>

          <fieldset>
            <legend>Address:</legend>
            <div class="form-row">
              <div class="col-md-6">
                   {!! Form::inputGroup('text', 'Street Address', 'streetaddress', null, ['placeholder' => 'Street Address']) !!}
              </div>
              <div class="col-md-6">
                  {!! Form::inputGroup('text', 'City', 'city', null, ['placeholder' => 'City']) !!}
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6">
                  {!! Form::inputGroup('text', 'Town', 'town', null, ['placeholder' => 'Town']) !!}
              </div>
              <div class="col-md-6">
                   {!! Form::inputGroup('text', 'Province', 'province', null, ['placeholder' => 'Province']) !!}
              </div>

              <div class="col-md-6">
                  {!! Form::inputGroup('text', 'Barangay', 'barangay', null, ['placeholder' => 'Barangay']) !!}
              </div>
              <div class="col-md-6">
                  {!! Form::inputGroup('number', 'Postal Code', 'postal_code', null, ['placeholder' => 'Postal Code']) !!}
              </div>
            </div>
          </fieldset>

          <fieldset>
            <legend>License:</legend>
            <div class="form-row">
              <div class="col-md-6">
                  {!! Form::inputGroup('number', 'License Number', 'license_number', null, ['placeholder' => 'License Number']) !!}
              </div>
              <div class="col-md-6">
                  {!! Form::inputGroup('date', 'Expiry Date', 'expiry_date', null, ['placeholder' => 'Expiry Date']) !!}
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6">
                <label>License Image</label>
              <input type="file" id="itemImage" name="license_image" class="form-control">
              </div>
            </div>
          </fieldset>
          <br>
          <fieldset>
            <div class="form-row">
              <legend>Profile</legend>
              <hr>
              <div class="col-md-6">
                  {!! Form::inputGroup('text', 'Username', 'username', Auth::user()->username, ['placeholder' => 'User Name']) !!}
              </div>
            </div>
            <div class="form-row">
            <legend>Specialization</legend>
              <hr>
              <div class="col-md-6">
                  {!! Form::selectGroup(null, 'specialties[]', $specialties, optional($therapist->specialties)->pluck('name'), ['class' => 'form-control select2', 'multiple' => true]) !!}
              </div>
            </div>
          </fieldset>
          <br>
              <input type="reset" href="/therapist-account" class="btn btn-secondary" value="Cancel">
              <button type="submit" class="btn btn-success">Update</button>
        </div> 
        {!! Form::close() !!} 
      </div>
        
@endsection