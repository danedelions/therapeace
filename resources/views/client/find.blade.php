@extends('layouts.cli')
@include('modals.client',['therapists'=>'therapists'])
@section('page-section')
	<div class="row">
		<div class="col-sm-4 col-md-4 col-lg-4">
			<div class="card">
				<div class="card-header">
					<h5>Search</h5>
				</div>
				<div class="card-body">
						{!!Form::open(['method'=>'GET','url'=> url()->current(),'class'=>'navbar-form navbar-left','role'=>'search'])  !!}
							<div class="form-group col-md-12">
								{!! Form::inputGroup('text', 'Location', 'location', request()->location, ['placeholder' => 'Your Location here...', 'id'=>'searchTextField'])  !!}
							</div>
							<div class="form-group col-md-12">
								{!! Form::inputGroup('number', 'Search Radius', 'radius', request()->radius, ['placeholder' => 'Search Radius', 'id'=>'radius', 'min' => '5', 'max' => '20'])  !!}
							</div>
							<div class="form-group col-md-12">
								<label>Therapist Type</label>
								{!! Form::select('therapist', array_combine(['Physical Therapist', 'Occupational Therapist'], ['Physical Therapist', 'Occupational Therapist']), request()->therapist,['id'=>'q']) !!}
							</div>
							<div class="form-group col-md-12">
							{!! Form::selectGroup('Specialties', 't_specialties[]', $specialties, request()->t_specialties, ['class' => 'form-control select2', 'multiple' => true]) !!}
							</div>
							<div class="form-group col-md-12">
								<input name="latitude" class="MapLat" value="" type="hidden" placeholder="Latitude" style="width: 161px;" id="lat1" >
								<input name="longitude" class="MapLon" value="" type="hidden" placeholder="Longitude" style="width: 161px;" id="long1" >
							</div>
							<div class="card-footer col-md-12">
								<button class="btn btn-default" type="submit">
					           		 <i class="fa fa-search"></i> Submit
					    		</button>
							</div>
						{!! Form::close() !!}
				</div>
			</div>
		</div>

			<div class="col-sm-4 col-md-8 col-lg-8">
				<div class="card bg-success mb-3">
					<div class="card-header">
						<h5>Who's Nearby</h5>
					</div>
					<div class="card-body" style=" height: 400px;">
						<div class="row">
							<div class="col-md-12">
								<div id="map"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>

	<div class="col-sm-8 col-md-12 col-lg-12">
		<div class="card">
			<div class="card-header bg-info">
			<h5>Therapists Found...</h5>
			</div>
			<div class="card-body" style="overflow-y: hidden; overflow-x: scroll;">
				<table>
					<tr>
						@foreach($therapists as $data)
						<td>
						<div class="card therapist-card" style="width: 20em; padding: 5px;">
						<center>
							<i class="fas fa-user-circle fa-4x" style="padding: 5px;"></i>
							<div class="card-body">
								<h4>{{$data->fullName}}</h4>
								<h5 style="font-size: 8pt;">{{$data->therapist}}</h5>
								<input type="hidden" data-long="{{ $data->longitude }}" />
								<input type="hidden" data-lat="{{$data->latitude}}" />
								<h6 data-distance>Distance:</h6>

								<a href='{{url("/booktherapist/{$data->id}")}}' class="btn btn-sm btn-success">Book</a>
							</div>									
						</center>
						</div>
						</td>
						@endforeach
					</tr>
				</table>
			</div>
		</div>    	
	</div>

<br>

<script>
	var infoWindow = null,
		map = null,
		marker = null,
		radius = {{ request()->radius ?: 'null' }},
		currentLat = {{ request()->latitude ?: 'null' }},
		currentLong = {{ request()->longitude ?: 'null' }};

	function initMap() {
		map = new google.maps.Map(document.getElementById('map'), {
			zoom: 16,
			center: {
				lat: 10.3157,
				lng: 123.8854
			}
		});

		//------------Try HTML5 geolocation.------------//
        if (navigator.geolocation) {
        	navigator.geolocation.getCurrentPosition(function(position) {
        		var pos = {
            		lat: currentLat || position.coords.latitude,
            		lng: currentLong || position.coords.longitude
				};
				$('[name=latitude]').val( pos.lat)
				$('[name=longitude]').val(pos.lng)
				map.setCenter(pos)
				marker = new google.maps.Marker({
					map: map,
					position: pos
				});
				infoWindow = new google.maps.InfoWindow();
            	infoWindow.setPosition(pos);
            	infoWindow.setContent('<b style="color:green;">You are here</b>');
				infoWindow.open(map);
				
				findNearestTherapist();
				
				
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
								'<text style="color:red;">Error: The Geolocation service failed.</text>' :
								'Error: Your browser doesn\'t support geolocation.');
			infoWindow.open(map);
		}
		
       //------------search functions------------//
		var input = document.getElementById('searchTextField');
        var autocomplete = new google.maps.places.Autocomplete(input, {
            types: ["geocode"]
        });
        autocomplete.bindTo('bounds', map);
        infowindow = new google.maps.InfoWindow();
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
				findNearestTherapist();
         });
        // google.maps.event.addListener(map, 'click', function (event) {
        //     $('.MapLat').val(event.latLng.lat());
        //     $('.MapLon').val(event.latLng.lng());
        //     infowindow.close();
        //             var geocoder = new google.maps.Geocoder();
        //             geocoder.geocode({
        //                 	"latLng":event.latLng
        //             	}, function (results, status) {
        //                 	console.log(results, status);
        //                 	if (status == google.maps.GeocoderStatus.OK) {
        //                     	console.log(results);
        //                     	var lat = results[0].geometry.location.lat(),
        //                         	lng = results[0].geometry.location.lng(),
        //                         	placeName = results[0].address_components[0].long_name,
        //                         	latlng = new google.maps.LatLng(lat, lng);
        //                     	moveMarker(placeName, latlng);
        //                     	$("#searchTextField").val(results[0].formatted_address);
        //                  }
        //              });
		//  });
		
		function findNearestTherapist() {
			$('.therapist-card').each(function () {
					var card = $(this);
					card.find('[data-distance]').text(function () {
						var distance =  distanceCalculator({
							lng: card.find('[data-long]').data('long'),
							lat: card.find('[data-lat]').data('lat')
						});
						if(distance > radius){
							card.addClass('hidden');
						}else{
							card.removeClass('hidden');
						}
						console.log(distance)
						return distance+ " km";
					})
				})
		}
        
        function moveMarker(placeName, latlng) {
            marker.setIcon(marker);
            marker.setPosition(latlng);
            infowindow.setContent(placeName);
            //infowindow.open(map, marker);
         }
	}
		function distanceCalculator(againstCoords) {
			// var R = 6371e3;
			var long1 = $("[name=longitude]").val();
			var lat1 = $("[name=latitude]").val();
			var long2 = againstCoords.lng
			var lat2 = againstCoords.lat

			// var a = parseFloat(long2) - parseFloat(long1) * Math.cos(parseFloat(lat2) + parseFloat(lat1)/2);
			// var b =	parseFloat(lat2) - parseFloat(lat1);
			// var dist = (Math.sqrt((a*a) + (b*b)))*R;

			var R = 6371; // metres
			var a = toRadians(lat1);
			var a2 = toRadians(lat2);
			var b = toRadians(lat2-lat1);
			var x = toRadians(long2-long1);
			var a = Math.sin(b/2) * Math.sin(b/2) +
			        Math.cos(a) * Math.cos(a2) *
			        Math.sin(x/2) * Math.sin(x/2);
			var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
			var d = R * c;
			var dist = d.toFixed(2);

			return dist;
		}
		function toRadians(Value) {
		    /** Converts numeric degrees to radians */
		    return Value * Math.PI / 180;
		}
</script>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD85clj7B85QRZPmO6m4Fky0Wi6P0MzVpA&libraries=places&callback=initMap"
async defer></script>
@endsection