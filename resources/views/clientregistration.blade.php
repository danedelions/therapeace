@extends('layouts.app')

@section('page-body')
        
      <!--   <link rel="stylesheet" type="text/css" href="css/client.css"> -->
<div class="col-md-10 offset-1">
    <div class="col-md-12 form-group">
    <form id="regForm" action="{{ route('client.store') }}" class="form-group" method="POST">
         {{ csrf_field() }}
        <h1>Client Registration</h1>
        <hr>
        <div class="tab form-group">Name
            <div class="form-group col-md-12">
                <input placeholder="First name" name="fname" type="text" class="form-control">
            </div>
            <div class="form-group col-md-12">
                <input placeholder="Last name" name="lname" type="text" class="form-control">
            </div>
            <div class="form-group col-md-12">
                <input placeholder="Email"  name="email" type="email" class="form-control">
            </div>
            <div class="form-group col-md-12">
                <input placeholder="Contact Number" type="text" name="number" class="form-control">
            </div>
            <div class="form-group col-md-12">
                <select id="gender" class="form-control" name="gender" class="form-control">
                    <option disabled="disabled" selected>Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
        </div>

        <div class="tab form-group"> Location
            <div class="form-group col-md-12">
                <input placeholder="City*" name="city" type="text" class="form-control">
            </div>
            <div class="form-group col-md-12">
                <input placeholder="Province*" name="province" type="text" class="form-control">
            </div>
            <div class="form-group col-md-12">
                <input placeholder="Street*" name="street" type="text" class="form-control">
            </div>
            <div class="form-group col-md-12">
                <input placeholder="Village/Barangay" name="brgy" type="text" class="form-control">
            </div>
            <div class="form-group col-md-12">
                <input placeholder="House No./Floor No." name="res_detail" type="text" class="form-control">
            </div>
            <div class="form-group col-md-12">
                <input placeholder="Building" name="building" type="text" class="form-control">
            </div>
            <div class="form-group col-md-12">
                <input placeholder="Landmark" name="landmark" type="text" class="form-control">
            </div>
            <div class="form-group col-md-12">
                <input placeholder="Address Remarks" name="address_remarks" type="text" class="form-control">
            </div>
        </div>

        <div class="tab form-group"> Profile
            <p><input placeholder="User Name" name="username"  type="text" class="form-control"></p>
            <p><input placeholder="Password" name="password" type="password" class="form-control" data-confirmed="re-password"></p>
            <p><input placeholder="Retype Password"  name="re-password" type="password" class="form-control"></p>
        </div>

        

        <div class="tab">
            Done:   
            <p style="text-align: justify;">
            Lorem ipsum dolor sit amet, sea harum delenit in. Ut omnis affert mel. Vel ea tantas labores officiis. Ignota noster elaboraret cum ad. No pri munere vocent interpretaris, ei sea mandamus laboramus tincidunt.

            Cum magna fuisset sadipscing in. Delenit labores quo ea, et est autem minim copiosae. Ea error utroque omnesque nam, facer tincidunt ut est, quis dicant aliquid ut vel. Cum at possim eleifend. Fuisset consetetur cu eum, scripserit persequeris cu vel.

            Te graeco imperdiet per, pri ea summo voluptatibus. Fierent voluptua pri ea, nam ex causae audire nominati. Eirmod aliquid gloriatur quo ne. Sed ea petentium philosophia, nibh pericula quaerendum vel at. Homero causae persius cum id. At pri natum error, ei vel dicant nostrud scriptorem.

            Nisl elit epicuri id vis, sea alterum commune deterruisset cu. Ea vel rebum fabulas deseruisse, mei cu nulla minim munere. Offendit placerat iracundia cum id, mea at brute vocent quaeque. Rebum feugait oportere at pro, sit regione persecuti eu, vel explicari accusamus splendide in. Sea at blandit ponderum.

            Essent accusamus scripserit per ad. Prima iracundia in nam, et qui graece facilis antiopam. Fastidii nominati contentiones duo ea. Has ne corpora albucius voluptaria.
            </p>
        <div>
        <label><input type="checkbox" />  I accept the terms and conditions.</label>
         </div>  
      </div>

        <div style="overflow:auto;">
            <div style="float:right;">
                <button class="btn btn-sm-success" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button class="btn btn-sm-success" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                <button class="btn btn-sm-success" type="submit" id="subBtn" style="display:none">Submit</button>
            </div>
        </div>
          <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
        </div>
        
    </form>
    </div>
</div>
@endsection
