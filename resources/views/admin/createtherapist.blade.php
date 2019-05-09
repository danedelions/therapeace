@extends('layouts.adm')

@section('dashboard')
<!-- START PAGE CONTENT-->
<div class="content-wrapper">

  <!-- main body -->
  <div class="row">
    <div class="col-sm-12" style="overflow: scroll; height: 580px;">
      <h3>Therapist Registration</h3>
        <form class="form-group" action="{{ route('addclient.store') }}" method="POST">
          {{ csrf_field() }}
          <div class="card col-sm-12 col-md-12">
            <div class="col-sm-12 col-md-12">
              <h4>[1] Personal Information</h4>
            </div>
            <div class="col-sm-12 col-md-12">  
              <div class="form-group col-sm-6 col-md-6">
                <label>First Name:</label>
                  <input placeholder="First name" name="fname" type="text" class="form-control input-sm required">
              </div>
              <div class="form-group col-sm-6 col-md-6">
                <label>Last Name:</label>
                  <input placeholder="Last name" name="lname" type="text" class="form-control input-sm required">
              </div>
              <div class="form-group col-sm-6 col-md-6">
                <label>Email Address:</label>
                  <input placeholder="Email"  name="email" type="email" class="form-control email input-sm required">
              </div>
              <div class="form-group col-sm-6 col-md-6">
                <label>Contact Number:</label>
                  <input placeholder="Contact Number" type="text" name="number" class="form-control input-sm required">
              </div>
              <div class="form-group col-sm-6 col-md-6">
                <label>Gender:</label>
                  <select id="gender" class="form-control input-sm required" name="gender">
                    <option value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
              </div>
              <div class="form-group col-sm-6 col-md-6">
                <label>Upload Profile Picture:</label>
                  <input type="file" accept="image/x-png,image/gif,image/jpeg" name="image" id="fileToUpload" class="form-control input-sm required" data-validation-message="Please upload picture">
              </div>
            </div>

            <div class="col-sm-12 col-md-12">
              <h4>[2] Location</h4>
            </div>
            <div class="form-group col-sm-12 col-md-12">
              <div class="form-group col-md-12">
                <label>Complete Address: *</label>
                  <input id="autocomplete" placeholder="Enter your Nearest Landmark " onfocus="geolocate()" type="text" class="form-control input-sm required">
              </div>
              <div class="form-group col-sm-6 col-md-6">
                <label>Street Address: *</label>
                  <input placeholder="Street Address"  name="streetaddress" id="route" class="form-control input-smrequired">
              </div>
              <div class="form-group col-sm-6 col-md-6">
                <label>Barangay: *</label>
                  <input placeholder="Barangay"  name="barangay" id="sublocality" class="form-control input-smrequired">
              </div>
              <div class="form-group col-sm-6 col-md-6">
                <label>City: *</label>
                  <input placeholder="City"  class="form-control input-sm required" name="city" id="locality">
              </div> 
              <div class="form-group col-sm-6 col-md-6">
                <label>Province: *</label>
                  <input placeholder="Province"  name="province" id="administrative_area_level_2" class="form-control input-sm required">
              </div>
              <div class="form-group col-sm-6 col-md-6">
                <label>Postal Code: *</label>
                  <input placeholder="Postal Code"  name="postal_code" id="postal_code" class="form-control input-sm required">
              </div>
              <div class="form-group col-sm-6 col-md-6">
                <label>Country: *</label>
                  <input placeholder="Country"  name="country" id="country" class="form-control input-sm required">
              </div>
              <!-- hidden inputs -->
              <div class="form-group col-sm-6 col-md-6">
                <input name="latitude" name="latitude" id="latitude" type="text" placeholder="Latitude" style="width: 161px;" hidden>
              </div>
              <div class="form-group col-sm-6 col-md-6">
                <input name="longitude" name="longitude" id="longitude" type="text" placeholder="Longitude" style="width: 161px;" hidden>
              </div> 
            </div>

            <div class="col-sm-12 col-md-12">
              <h4>[3] Therapist Informations</h4>
            </div>
            <div class="col-sm-12 col-md-12">
              <div class="form-group col-md-12">
                <label>Type of Therapist: *</label>
                  <select class="form-control input-sm required" name="therapist">
                    <option value="">Select Therapist</option>
                    <option value="Physical Therapist">Physical Therapist</option>
                    <option value="Occupational Therapist">Occupational Therapist</option>
                  </select>
              </div>
              <div class="form-group col-sm-6 col-md-6">
                <label>License Number: *</label>
                  <input placeholder="License Number"  name="license_number" type="number" class="form-control input-sm required">
              </div>
              <div class="form-group col-sm-6 col-md-6">
                <label>License Expiration Date: *</label>
                  <input class="form-control input-sm required" placeholder="Expriry Date"  name="expiry_date" type="date">
              </div>
              <div class="form-group col-sm-6 col-md-6">
                <label>License Image (Front) *</label>
                  <input type="file" name="licenseimage_front" id="fileUpload2" class="form-control input-sm required">
              </div>
              <div class="form-group col-sm-6 col-md-6">
                <label>License Image (Back) *</label>
                  <input type="file" name="licenseimage_back" id="fileUpload2" class="form-control input-sm required">
              </div>
              <div class="form-group col-sm-6 col-md-6">
                <label>NBI Image *</label>
                  <input type="file" name="nbi_image" id="fileUpload3" class="form-control input-sm required">
              </div>
              <div class="form-group col-sm-6 col-md-6">
                <label>Barangay Clearance Image *</label>
                  <input type="file" name="bc_image" id="fileUpload4" class="form-control input-sm required">
              </div>
            </div>

            <div class="col-sm-12 col-md-12">
              <h4>[4] Profile</h4>
            </div>
            <div class="col-sm-12 col-md-12">
              <div class="form-group col-sm-6 col-md-6">
                <label>User Name:</label>
                  <input placeholder="User Name" name="username"  type="text" class="form-control input-sm required">
              </div> 
              <div class="form-group col-sm-6 col-md-6">
                <label>Password:</label>
                  <input placeholder="Password" name="password" type="password" class="form-control input-sm required"  data-confirmed="re-password">
              </div>
              <div class="form-group col-sm-6 col-md-6">
                <label>Retype Password:</label>
                  <input placeholder="Retype Password"  name="re-password" type="password" id="myInput" class="form-control input-sm required" data-confirmed="password">
              </div>
            </div>
            
             <hr>
             
             <div class="col-sm-4 col-md-4">
               <button class="btn btn-info">Submit</button>
             </div>
             <br>
          </div>
        </form>
    </div>
  </div>
 
</div>
         
@endsection

