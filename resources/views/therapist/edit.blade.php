@extends('layouts.the')

@section('page-section')

      <div class="container">
          {!! Form::model($therapist, array('url'=> route('therapist.update', ['id'=> $therapist->id]),'method'=>'PATCH', 'files'=>true,'role'=>'form')) !!}
          {!! csrf_field() !!}
          <div class="col-md-12">
            <legend class="text-center">Update Information</legend>
            <hr>
            <input type="file" id="itemImage" name="image" class="form-control">
            <br>

              <fieldset>  
                <div class="row">
                        <div class="form-group col-md-6">
                            {!! Form::inputGroup('text', 'First Name', 'fname', $therapist->fname, ['placeholder' => 'First Name'])  !!}
                        </div>

                        <div class="form-group col-md-6">
                             {!! Form::inputGroup('text', 'Last Name', 'lname', $therapist->lname, ['placeholder' => 'Last Name']) !!}
                        </div>
                </div>
                        <div class="form-group col-md-12 col-lg-12">
                             {!! Form::inputGroup('email', 'Email', 'email', Auth::user()->email, ['placeholder' => 'Email']) !!}
                        </div>
                <div class="row">
                        <div class="form-group col-md-6">
                             {!! Form::inputGroup('number', 'Contact Number', 'contact', null, ['placeholder' => 'Contact Number']) !!}
                        </div>
                
                        <div class="form-group col-md-6"><br>
                            {!! Form::select('gender',array('Male' => 'Male', 'Female' => 'Female', 'Others' => 'Others')) !!}
                        </div>
                </div>
              </fieldset>
              <fieldset>
                             <legend>Address:</legend>
                    <div class="row">
                        <div class="form-group col-md-6">
                             {!! Form::inputGroup('text', 'Street Address', 'streetaddress', null, ['placeholder' => 'Street Address']) !!}
                        </div>
                        <div class="form-group col-md-6">
                            {!! Form::inputGroup('text', 'City', 'city', null, ['placeholder' => 'City']) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            {!! Form::inputGroup('text', 'Town', 'town', null, ['placeholder' => 'Town']) !!}
                        </div>
                        <div class="form-group col-md-6">
                             {!! Form::inputGroup('text', 'Province', 'province', null, ['placeholder' => 'Province']) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            {!! Form::inputGroup('text', 'Barangay', 'barangay', null, ['placeholder' => 'Barangay']) !!}
                        </div>
                        <div class="form-group col-md-6">
                            {!! Form::inputGroup('number', 'Postal Code', 'postal_code', null, ['placeholder' => 'Postal Code']) !!}
                        </div>
                    </div>
              </fieldset>
              <fieldset>
                        <legend>License:</legend>
                    <div class="row">
                        <div class="form-group col-md-6">
                            {!! Form::inputGroup('number', 'License Number', 'license_number', null, ['placeholder' => 'License Number']) !!}
                        </div>
                        <div class="form-group col-md-6">
                            {!! Form::inputGroup('date', 'Expiry Date', 'expiry_date', null, ['placeholder' => 'Expiry Date']) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                          <label>License Image</label>
                        <input type="file" id="itemImage" name="license_image" class="form-control">
                        </div>
                    </div>

              </fieldset>
              <fieldset>
                        <legend>Profile:</legend>
                      <div class="row">
                        <div class="form-group col-md-6">
                            {!! Form::inputGroup('text', 'Username', 'username', Auth::user()->username, ['placeholder' => 'User Name']) !!}
                        </div>
                      </div>
              </fieldset>

                  <input type="submit" href="/therapist-account" class="btn btn-secondary" value="Cancel">
                  <button type="submit" class="btn btn-success">Update</button>
          </div>
          {!! Form::close() !!}  
      </div>
    </div>
        
@endsection