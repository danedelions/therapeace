 @extends('layouts.app')

@section('page-body')
 <!--   <link rel="stylesheet" type="text/css" href="css/client.css"> -->
<form id="regForm" action="{{ route('therapist.store') }}" method="POST">
  
  @csrf
  <h1>Therapist Registration:</h1>
  <!-- One "tab" for each step in the form: -->

    <div class="tab">
    <h6>Upload profile picture</h6>
    <form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="image" id="fileToUpload"> 
    <br>
    Name:
    <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
    <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p>
     <p><input placeholder="Email" oninput="this.className = ''" name="email"></p>
    <p><input placeholder="Contact Number" oninput="this.className = ''" name="number"></p>
        <select id="gender" class="form-control" name="gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
  </div><br>
  <div class="tab">Address:
    <p><input placeholder="Street Address" oninput="this.className = ''" name="streetaddress" id="streetaddress"></p>
    <p><input placeholder="City" oninput="this.className = ''" name="city" id="locality"></p>
    <p><input placeholder="Town" oninput="this.className = ''" name="town" id="town"></p>
    <p><input placeholder="Province" oninput="this.className = ''" name="province" id="province"></p>
    <p><input placeholder="Barangay" oninput="this.className = ''" name="barangay" id="barangay"></p>
    <p><input placeholder="Postal Code" oninput="this.className = ''" name="postal_code" id="postal_code" type="number"></p>
    <p><input placeholder="Country" oninput="this.className = ''" name="country" id="country"></p>
  
  </div>
  <div class="tab" >License:
    <br><br>
  <form class="col-md-4">
    <select select class="form-control select2" name="therapist">
       <option value="pt" style="width:250px">Physical Therapist</option>
      <option value="ot" style="width:250px">Occupational therapy</option>
    </select><br>
    <p><input placeholder="License Number" oninput="this.className = ''" name="license_number" type="number"></p>
    <p><input placeholder="Expriry Date" oninput="this.className = ''" name="expiry_date" type="date"></p>
     <form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="license_image" id="fileUpload2"> 
   <br> <form action="upload.php" method="post" enctype="multipart/3orm-data">
  <input type="file" name="nbi_image" id="fileUpload3"> 
   <br> <form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="bp_image" id="fileUpload4"> 
   <br><br>
 </div>
    <div class="tab">Profile:
    <p><input placeholder="User Name" oninput="this.className = ''" name="username"></p>
    <p><input placeholder="Password" oninput="this.className = ''" name="password" type="password"></p>
    <p><input placeholder="Re-type Password" oninput="this.className = ''" name="re-password" type="password"></p>
  </div>

  <div class="tab">Done:
    <p>Lorem ipsum dolor sit amet, sea harum delenit in. Ut omnis affert mel. Vel ea tantas labores officiis. Ignota noster elaboraret cum ad. No pri munere vocent interpretaris, ei sea mandamus laboramus tincidunt.

Cum magna fuisset sadipscing in. Delenit labores quo ea, et est autem minim copiosae. Ea error utroque omnesque nam, facer tincidunt ut est, quis dicant aliquid ut vel. Cum at possim eleifend. Fuisset consetetur cu eum, scripserit persequeris cu vel.

Te graeco imperdiet per, pri ea summo voluptatibus. Fierent voluptua pri ea, nam ex causae audire nominati. Eirmod aliquid gloriatur quo ne. Sed ea petentium philosophia, nibh pericula quaerendum vel at. Homero causae persius cum id. At pri natum error, ei vel dicant nostrud scriptorem.

Nisl elit epicuri id vis, sea alterum commune deterruisset cu. Ea vel rebum fabulas deseruisse, mei cu nulla minim munere. Offendit placerat iracundia cum id, mea at brute vocent quaeque. Rebum feugait oportere at pro, sit regione persecuti eu, vel explicari accusamus splendide in. Sea at blandit ponderum.

Essent accusamus scripserit per ad. Prima iracundia in nam, et qui graece facilis antiopam. Fastidii nominati contentiones duo ea. Has ne corpora albucius voluptaria.</p>
     <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="" id="">
                                    I accept the <a href="#">terms and conditions</a>.
                                </label>
                            </div>
                        </div>
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
    </form>
    <script>
       // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
      var placeSearch, autocomplete;
      var componentForm = {
        streetaddress: 'short_name',
        locality: 'long_name',
        town: 'long_name',
        province: 'short_name',
        barangay: 'short_name',
        postal_code: 'long_name',
        country: 'long_name'
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
      }

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
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD85clj7B85QRZPmO6m4Fky0Wi6P0MzVpA&callback=initMap"
  async defer></script>

</body>
</html>
@endsection