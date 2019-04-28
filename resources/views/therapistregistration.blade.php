<!-- oninput="this.className = ''" -->
@extends('layouts.app')

@section('page-welcome')

<div class="col-md-10 offset-1">
  <form id="regForm" action="{{ route('therapist.store') }}" method="POST" enctype="multipart/form-data"> <!-- Start of Form -->
  {{ csrf_field() }}
    <h1>Therapist Registration:</h1>

    <hr><!-- One "tab" for each step in the form: -->
    <div class="tab form-group"> 
    @if ($errors->any())
        <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error  }}</li>
                    @endforeach
                </ul>
            </div>
      @endif   
      <h6>Upload profile picture</h6>   
      <div class="form-group col-md-12">
        <input type="file" accept="image/x-png,image/gif,image/jpeg" name="image" id="fileToUpload" class="form-control required" data-validation-message="Please upload picture">
      </div>
      <div class="form-group col-md-12">
        <input placeholder="First name"  name="fname" class="form-control required">
      </div>
      <div class="form-group col-md-12">
        <input placeholder="Last name"  name="lname" class="form-control required">
      </div>
      <div class="form-group col-md-12">
        <input type="email" placeholder="Email" name="email" class="form-control required">
      </div>
      <div class="form-group col-md-12">
        <input placeholder="Contact Number"  name="number" class="form-control required">
      </div>
      <div class="form-group col-md-12">
        <select id="gender" class="form-control required" name="gender">
            <option value="">Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
      </div>
    </div>

    <div class="tab form-group">Address:
      <div class="form-group col-md-12">
        <input id="autocomplete" placeholder="Enter your Nearest Landmark " onfocus="geolocate()" type="text" class="form-control required">
      </div>
      <div class="form-group col-md-12">
        <input placeholder="Street Address"  name="streetaddress" id="route" class="form-control required">
      </div>
      <div class="form-group col-md-12">
        <input placeholder="Barangay"  name="barangay" id="sublocality" class="form-control required">
      </div>
      <div class="form-group col-md-12">
       <input placeholder="City"  class="form-control required" name="city" id="locality">
      </div> 
      <div class="form-group col-md-12">
        <input placeholder="Province"  name="province" id="administrative_area_level_2" class="form-control required">
      </div>
      <div class="form-group col-md-12">
        <input placeholder="Postal Code"  name="postal_code" id="postal_code" class="form-control required">
      </div>
      <div class="form-group col-md-12">
        <input placeholder="Country"  name="country" id="country" class="form-control required">
      </div>
     
   <div class="form-group col-md-12">
    <input name="latitude" name="latitude" id="latitude" type="text" placeholder="Latitude" style="width: 161px;" hidden>
  </div>
  <div class="form-group col-md-12">
    <input name="longitude" name="longitude" id="longitude" type="text" placeholder="Longitude" style="width: 161px;" hidden>
  </div>  
    </div>

    <div class="tab form-group">License:
      <div class="form-group col-md-12">
        <select class="form-control required" name="therapist">
          <option value="">Select Therapist</option>
          <option value="Physical Therapist">Physical Therapist</option>
          <option value="Occupational Therapist">Occupational Therapist</option>
        </select>
      </div>
      <div class="form-group col-md-12">
        <input placeholder="License Number"  name="license_number" type="number" class="form-control required">
      </div>
      <div class="form-group col-md-12">
        <input class="form-control required" placeholder="Expriry Date"  name="expiry_date" type="date">
      </div>
      <div class="form-group col-md-12">
        <label>License Image (Front)</label>
        <input type="file" name="licenseimage_front" id="fileUpload2" class="form-control required">
      </div>
      <div class="form-group col-md-12">
        <label>License Image (Back)</label>
        <input type="file" name="licenseimage_back" id="fileUpload2" class="form-control required">
      </div>
      <div class="form-group col-md-12">
        <label>NBI Imgae</label>
        <input type="file" name="nbi_image" id="fileUpload3" class="form-control required">
      </div>
      <div class="form-group col-md-12">
        <label>Barangay Clearance Imgae</label>
        <input type="file" name="bc_image" id="fileUpload4" class="form-control required">
      </div>
    </div>

    <div class="tab form-group">Profile:
      <div class="form-group col-md-12">
        <input placeholder="User Name"  name="username" class="form-control required">
      </div>
      <div class="form-group col-md-12">
        <input placeholder="Password"  name="password" type="password" class="form-control required" data-confirmed="re-password">
      </div>
      <div class="form-group col-md-12">
        <input placeholder="Re-type Password"  name="re-password" type="password" class="form-control required">
      </div>
    </div>

    <div  id="overflowTest" class="tab form-group"> 
      <h1>Terms and Conditions </h1>
      <div class="col-md-12">
        <p style="text-align: justify;">

            Welcome to therapeace.com please read these terms carefully. By using the Service (as defined below), 
            you agree that you have read, understood, accepted and agreed with the Terms of Use. 
            You further agree to the representations made by yourself below.
             If you do not agree to or fall within the Terms of Use of the Service and wish to discontinue using the Service, 
             please do not continue using the Webiste (as defined below) or the Service. In order to use the Service you must agree to the Terms of Use that are set out below
           </p>

    <p>
            Please note that therapeace.com provides a public service to individual consumers who may access the theraPeace.com website (“Users”) for mental health information,
            to find a mental health provider. 
    </p>
    <p>
        1.) Acceptance of Terms 
    </p>
    <p>  
            By accessing or using this Site or any of the Services, 
            you agree to be legally bound and to abide by the terms herein as if you had physically signed this Agreement. 
    </p>
    <p>
        2.) Use of this Site and Services
    </p>
    <p>
            Subject to your compliance with this Agreement, theraPeace grants you a limited, nonexclusive, 
            non-transferable and revocable license to use our Website for your personal use on your own personal device that you own or control, 
            and to use the Site and Services solely for your own personal use in accordance with the terms and conditions of this Agreement.
    </p>
    <p>

            You consent to our collection, use and disclosure of your individual information in accordance with our Privacy Policy.
            While we have taken practical precautions—including password protection, secured sessions, dedicated servers—to keep your personal information secure and confidential, you acknowledge that the internet, 
            the Site and the Services may not be completely secure and messages to and from us may be observed by others. 
            While we have taken precautions to protect your privacy, we accept no responsibility for security of information submitted, delivered or transmitted on or over the internet.
            It is up to you to take steps to ensure that information you select for your use is free of viruses and other items of a destructive nature.
            Please note that email correspondence that you may send to us may not be secure. For that reason, 
            we ask that you do not send confidential or sensitive information to us through an unsecured email.
    </p>
    <p>
            You agree to provide Company only true, accurate, current, and complete information, 
            and shall update that information to keep it true, accurate, current and complete.
    </p>
    <p>      
            You must be at least 13 years old to use the Site and Services. If you are between the ages of 13 and 18 you must use the Site and Services under the supervision of a parent or legal guardian. 
            You agree to use the Site and Services only for lawful purposes and to comply with all applicable laws, statutes, ordinances and regulations in your use of the Site and Services. 
            The Site and Services shall not be used in a manner that would violate or infringe any copyright, trademark, trade secret, right of publicity, right of privacy, or any other right of any third party, or for the purpose of transmitting, uploading or storing material that is obscene or defamatory. 
            You are prohibited from posting on, uploading, or transmitting through the Site or Services, any unlawful, infringing, harmful, threatening, abusive, harassing, defamatory, vulgar, obscene, profane, hateful, racially, ethnically or otherwise objectionable material of any kind, including without 
            limitation any material that encourages conduct that would constitute a criminal offense, give rise to civil liability, or otherwise violate any applicable local, state, national, or international law.
            You remain solely responsible for all of the content that you post.
    </p>
    <p>
     4.) Cancellation and Account Termination

                        We have the right, if we determine it is best, to terminate, suspend and/or deactivate your account immediately, 
                        without notice, if there has been a violation of this Agreement or other policies and terms posted on the Site or through the Services by you or by someone using your credentials.
                        We may also terminate,suspend or deactivate your account for any other reason, including inactivity for an extended period.
    </p>
    <p>
                        You may cancel your account at any time by sending a request to therapeacemaker@gmail.com.  
                        If you would like us to delete your account in its entirety (meaning deleting all of your user data), 
                        please send your request to therapeacemaker@gmail.com.
     </p>
     <p>
     5.) Contact
          Please contact therapeacemaker@gmail.com with any questions regarding this Agreement.
    </p>
        </p>
            <div>
                <label>
                    <input type="checkbox" class="form-control" style= "width: auto" required/>I accept the terms and conditions.
                 </label>
            </div> 
  </div>
</div>  


<!-- Buttons -->


    <div style="overflow:auto;">
      <div style="float:right;">
        <button class="btn btn-sm-success" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
        <button class="btn btn-sm-success" type="button" id="nextBtn" onclick="nextPrev(1)" data-settings="{!! htmlspecialchars(json_encode(['url' => url('therapist-validation'), 'method' => 'post', 'token' => csrf_token()])) !!}">Next</button>
        <button class="btn btn-sm-success" type="submit" id="subBtn" style="display:none">Submit</button></a>
      </div>
    </div>
    <!-- Circles which indicates the steps of the form: -->
    <div style="text-align:center;margin-top:40px;">
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
    </div>
  </form> <!-- End of Form -->
</div>


<script>
      var placeSearch, autocomplete;
      var componentForm = {  
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_2: 'short_name',
        sublocality: 'long_name',
        country: 'long_name',
        postal_code: 'short_name'
      };
      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});
        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }
      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();
        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }
        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
        document.getElementById('latitude').value = place.geometry.location.lat();
        document.getElementById('longitude').value = place.geometry.location.lng();
      }
      google.maps.event.addDomListener(window, "load", initAutocomplete);
      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD85clj7B85QRZPmO6m4Fky0Wi6P0MzVpA&libraries=places&callback=initAutocomplete
" async defer></script>

@endsection