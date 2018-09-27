    @extends('layouts.the')

@section('page-section')
@include('modals.therapist')
       <div class="container">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                <form role="form">
                     <legend class="text-center">Update Information</legend>
                    <center><i class="fas fa-user-circle fa-7x"></i>
                {!! Form::open(array('url'=>'','method'=>'POST', 'files'=>true)) !!}
                {!! csrf_field() !!}
                 <input type="file" id="itemImage" name="itemImage">
                <input type="submit" value="Upload Image" name="submit" class="btn btn-primary btn-sm">
              </form>
                    <fieldset>  
                        <div class="form-group col-md-6">
                            {!! Form::inputGroup('text', 'First Name', 'firstname', null, ['placeholder' => 'First Name'])  !!}
                        </div>

                        <div class="form-group col-md-6">
                             {!! Form::inputGroup('text', 'Last Name', 'lastname', null, ['placeholder' => 'Last Name']) !!}
                        </div>

                        <div class="form-group col-md-12">
                             {!! Form::inputGroup('email', 'Email', 'email', null, ['placeholder' => 'Email']) !!}
                        </div>

                        <div class="form-group col-md-6">
                             {!! Form::inputGroup('number', 'Contact Number', 'contactnumber', null, ['placeholder' => 'Contact Number']) !!}
                        </div>
                        
                        <div class="form-group col-md-6"><br>
                            {!! Form::select('gender',array('Male', 'Female', 'Others')) !!}

                        </fieldset>
                        <fieldset>
                             <legend>Address:</legend>
                        <div class="form-group col-md-6">
                             {!! Form::inputGroup('text', 'Barangay', 'barangay', null, ['placeholder' => 'Barangay']) !!}
                        </div>
                        <div class="form-group col-md-6">
                            {!! Form::inputGroup('text', 'Province', 'province', null, ['placeholder' => 'Province']) !!}
                        </div>
                        <div class="form-group col-md-6">
                            {!! Form::inputGroup('text', 'City', 'city', null, ['placeholder' => 'City']) !!}
                        </div>


                    </fieldset>

                    <fieldset>
                        <legend>License:</legend>
                        <div class="form-group col-md-6">
                            {!! Form::inputGroup('number', 'License Number', 'license_number', null, ['placeholder' => 'License Number']) !!}
                        </div>
                        <div class="form-group col-md-6">
                            {!! Form::inputGroup('date', 'Expiry Date', 'expiry_date', null, ['placeholder' => 'Expiry Date']) !!}
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Profile:</legend>
                        <div class="form-group col-md-6">
                            {!! Form::inputGroup('text', 'Username', 'username', null, ['placeholder' => 'User Name']) !!}
                        </div>
                    </fieldset>

                  <input type="reset" href="/therapist-account" class="btn btn-secondary" value="Cancel">
                  <input type="button" class="btn btn-success" value="Update">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
     {!! Form::close() !!}                 
   
@endsection