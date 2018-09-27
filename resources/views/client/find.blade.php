@extends('layouts.cli')
@section('title', 'Find')
@section('page-section')
<div class="row"> <!--  <div class="row">  --><!-- <div class="col-md-5"> -->
	<div class="col-sm-4 col-md-4 col-lg-4">
		<div class="card">
			<div class="card-header">
				<h5>Search</h5>
			</div>
			<div class="card-body">
				<form class="form">
					<div class="form-group col-md-12">
						<label>Enter Location</label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group col-md-12">
						<label>Therapist Type</label>
						<select class="form-control">
							<option>Occupational Therapist</option>
							<option>Physical Therapist</option>
						</select>
					</div>
					<div class="form-group col-md-12">
						<label>Specialty</label>
						<input type="text" class="form-control">
					</div>
					<div class="card-footer col-sm-4">
						<button class="btn btn-success">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div class="col-sm-6 col-md-6 col-lg-8">
		<div class="card text-white bg-success mb-3">
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

	<div class="col-sm-6 col-md-6 col-lg-12">
		<div class="card">
			<div class="card-header bg-info">
			<h5>Therapists Found...</h5>
			</div>
			<div class="card-body" style="overflow: scroll; height: 300px;">
				<table>
					<tr>
						<td>
						<div class="card" style="width: 20em; padding: 5px;">
						<center>
							<i class="fas fa-user-circle fa-4x" style="padding: 5px;"></i>
							<div class="card-body">
								<h4>Therapist Name</h4>
								<p>
									<b>Distance:</b> 10km 
									<br>
									<b>Ratings/Reviews:</b> 4.5 stars
									<br>
									<b>Rate:</b> 500 per hour
								</p>

								<button class="btn btn-sm btn-success">Book</button>
								<button class="btn btn-sm btn-info">View</button>
							</div>									
						</center>
						</div>
						</td>
					</tr>
				</table>
			</div>
		</div>    	
</div>

<br>

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
			zoom: 16,
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