@extends('layouts.the')

@section('page-section')
@include('modals.therapist')
       <div class="container">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                <form role="form" method="POST" action="#">

                    <legend class="text-center">Update Information</legend>

                    <fieldset>
                        <legend>Account Details</legend>

                        <div class="form-group col-md-6">
                            <label for="first_name">First name</label>
                            <input type="text" class="form-control" name="" id="fname" placeholder="First Name">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="last_name">Last name</label>
                            <input type="text" class="form-control" name="last_name" id="lnmae" placeholder="Last Name">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="" id="email" placeholder="Email">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="">Contact Number</label>
                            <input type="number" class="form-control" name="" id="number" placeholder="Contact Number">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">Gender</label>
                            <input type="gender" class="form-control" name="" id="gender" placeholder="Gender">
                        </div>
                             <legend>Address:</legend>
                        <div class="form-group col-md-6">
                            <label for="confirm_password">Barangay</label>
                            <input type="barangay" class="form-control" name="" id="barangay" placeholder="Barangay">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="confirm_password">Province</label>
                            <input type="province" class="form-control" name="" id="province" placeholder="Province">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="confirm_password">City</label>
                            <input type="city" class="form-control" name="" id="city" placeholder="City">
                        </div>


                    </fieldset>

                    <fieldset>
                        <legend>License:</legend>
                        <div class="form-group col-md-6">
                            <label for="confirm_password">City</label>
                            <input type="city" class="form-control" name="" id="city" placeholder="City">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="confirm_password">License Number</label>
                            <input type="licensenumber" class="form-control" name="" id="licensenumber" placeholder="License NUmber">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="confirm_password">Expiry Date</label>
                            <input type="expirydate" class="form-control" name="" id="expirydatge" placeholder="Expiry Date">
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Profile:</legend>
                        <div class="form-group col-md-6">
                            <label for="confirm_password">Username</label>
                            <input type="city" class="form-control" name="" id="city" placeholder="City">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="confirm_password">Password</label>
                            <input type="licensenumber" class="form-control" name="" id="licensenumber" placeholder="License NUmber">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="confirm_password">Confirm Password</label>
                            <input type="expirydate" class="form-control" name="" id="expirydatge" placeholder="Expiry Date">
                        </div>
                    </fieldset>






                <input type="reset" class="btn btn-secondary" value="Cancel">
                  <input type="button" class="btn btn-success" value="Update">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
                    
   
@endsection