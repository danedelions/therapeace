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
       <option value="Physical Therapist" style="width:250px">Physical Therapist</option>
      <option value="Occupational Therapist" style="width:250px">Occupational therapy</option>
    </select><br>
    <p><input placeholder="License Number" oninput="this.className = ''" name="license_number" type="number"></p>
    <p><input placeholder="Expriry Date" oninput="this.className = ''" name="expiry_date" type="date"></p>
     <form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="license_image" id="fileUpload2"> 
   <br> <form action="upload.php" method="post" enctype="multipart/3orm-data">
  <input type="file" name="nbi_image" id="fileUpload3"> 
   <br> <form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="bc_image" id="fileUpload4"> 
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
  function initMap() {
    //------------initial------------//
    function userLocation() {
      var defaultLat = parseFloat($('[name=latitude]').val()) ||  10.3157,
        defaultLng =  parseFloat($('[name=longitude]').val()) ||  123.8854;
      return {
        lat: defaultLat,
        lng: defaultLng
      }
      }
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 16,
      center:  userLocation()
      });
    var marker = new google.maps.Marker({
      map: map,
      position: userLocation()
      });

    //------//

    infoWindow = new google.maps.InfoWindow;

    //------------Try HTML5 geolocation.------------//
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('<b style="color:green;">You are here</b>');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }


      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
    }

       //------------search functions------------//
    var input = document.getElementById('searchTextField');
        var autocomplete = new google.maps.places.Autocomplete(input, {
            types: ["geocode"]
        });
        autocomplete.bindTo('bounds', map);
        var infowindow = new google.maps.InfoWindow();
        google.maps.event.addListener(autocomplete, 'place_changed', function (event) {
            infowindow.close();
              var place = autocomplete.getPlace();
              if (place.geometry.viewport) {
                  map.fitBounds(place.geometry.viewport);
              } else {
                  map.setCenter(place.geometry.location);
                  map.setZoom(17);
              }
              moveMarker(place.name, place.geometry.location);
              $('.MapLat').val(place.geometry.location.lat());
              $('.MapLon').val(place.geometry.location.lng());
         });

        google.maps.event.addListener(map, 'click', function (event) {
            $('.MapLat').val(event.latLng.lat());
            $('.MapLon').val(event.latLng.lng());
            infowindow.close();
                    var geocoder = new google.maps.Geocoder();
                    geocoder.geocode({
                          "latLng":event.latLng
                      }, function (results, status) {
                          console.log(results, status);
                          if (status == google.maps.GeocoderStatus.OK) {
                              console.log(results);
                              var lat = results[0].geometry.location.lat(),
                                  lng = results[0].geometry.location.lng(),
                                  placeName = results[0].address_components[0].long_name,
                                  latlng = new google.maps.LatLng(lat, lng);
                              moveMarker(placeName, latlng);
                              $("#searchTextField").val(results[0].formatted_address);
                         }
                     });
         });
        
        function moveMarker(placeName, latlng) {
            marker.setIcon(image);
            marker.setPosition(latlng);
            infowindow.setContent(placeName);
            //infowindow.open(map, marker);
         }
  }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD85clj7B85QRZPmO6m4Fky0Wi6P0MzVpA&libraries=places&callback=initMap"
async defer></script>
</body>
</html>
@endsection

