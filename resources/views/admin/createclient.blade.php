@extends('layouts.adm')

@section('dashboard')
<!-- START PAGE CONTENT-->
<div class="content-wrapper">

  <!-- main body -->
  <div class="row">
    <div class="col-sm-12" style="overflow: scroll; height: 580px;">
      <h3>Client Registration</h3>
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
            </div>
            <div class="col-sm-12 col-md-12">
              <h4>[2] Location</h4>
            </div>
            <div class="col-sm-12 col-md-12">
              <div class="form-group col-sm-6 col-md-6">
                <label>City: *</label>
                  <input placeholder="City*" name="city" type="text" class="form-control input-sm required">
              </div>
              <div class="form-group col-sm-6 col-md-6">
                <label>Province: *</label>
                  <input placeholder="Province*" name="province" type="text" class="form-control input-sm required">
              </div>
              <div class="form-group col-sm-6 col-md-6">
                <label>Street: *</label>
                  <input placeholder="Street*" name="street" type="text" class="form-control input-sm required">
              </div>
              <div class="form-group col-sm-6 col-md-6">
                <label>Village/Barangay:</label>
                  <input placeholder="Village/Barangay" name="brgy" type="text" class="form-control input-sm">
              </div>
              <div class="form-group col-sm-6 col-md-6">
                <label>House No./Floor No.:</label>
                  <input placeholder="House No./Floor No." name="res_detail" type="text" class="form-control input-sm">
              </div>
              <div class="form-group col-sm-6 col-md-6">
                <label>Building:</label>
                  <input placeholder="Building" name="building" type="text" class="form-control input-sm">
              </div>
              <div class="form-group col-sm-6 col-md-6">
                <label>Landmark:</label>
                  <input placeholder="Landmark" name="landmark" type="text" class="form-control input-sm">
              </div>
              <div class="form-group col-sm-6 col-md-6">
                <label>Address Remarks:</label>
                  <input placeholder="Address Remarks" name="address_remarks" type="text" class="form-control input-sm">
              </div>
            </div>
            <div class="col-sm-12 col-md-12">
              <h4>[3] Profile</h4>
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
               <button class="btn btn-sm btn-info" type="submit">Submit</button>
             </div>
             <br>
          </div>
        </form>
    </div>
  </div>
 
</div>
         
@endsection

