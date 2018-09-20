@extends('layouts.cli')

@section('page-section')

	<div class="row">
		<div class="col-md-10">
			<div id="map"></div>
		</div>
	</div>























	<script>
		function initMap() {
			function userLocation() {
				var defaultLat = parseFloat($('[name=latitude]').val()) ||  10.3157,
					defaultLng =  parseFloat($('[name=longitude]').val()) ||  123.8854;
				return {
					lat: defaultLat,
					lng: defaultLng
				}
	    	}
	        var map = new google.maps.Map(document.getElementById('map'), {
	          zoom: 18,
	          center:  userLocation()
	        });
			var marker = new google.maps.Marker({
	            map: map,
	        	position: userLocation()
	        });
	    }
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD85clj7B85QRZPmO6m4Fky0Wi6P0MzVpA&callback=initMap"
	async defer></script>
@endsection