<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Therapeace | Transaction</title>       
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
        <!-- <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"> -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" >
        <link rel="stylesheet" type="text/css" href="{{ asset('fontawesome-free-5.1.0-web/css/all.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
        <!-- THEME STYLES-->
        <link rel="stylesheet" type="text/css" href="{{ asset('dist/assets/css/main.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('dist/assets/vendors/themify-icons/css/themify-icons.css') }}" />

        <script src="{{ asset('jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        <script src="https://unpkg.com/popper.js@1.14.3/dist/umd/popper.min.js"></script>
        <!-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script> -->
        <!-- dropdown -->
        <!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->

        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.printPage.js') }}"></script>

        @stack('js')
    </head>
    
    <body id="clientBg">
        <main class="container">
	        <nav class="navbar navbar-expand-md bg-white fixed-top">
			  <div class="container">    
			    <a class="navbar-brand" href="#">
			      <img src="img/logo.png" alt="Logo" style="width:130px;">
			    </a>
			    <div class="collapse navbar-collapse">
			      <ul class="nav navbar-nav ml-auto"> <!-- ml-auto (navbar items on the right side)-->
			        <li class="active nav-item">
			          <a class="nav-link" href="/client-history"><i class="fas fa-chevron-left"></i> Go Back</a>
			        </li>
			      </ul>
			    </div>
			  </div>
			</nav>

			<div class="row"> <!-- 	<div class="row">  --><!-- <div class="col-md-5"> -->
				<div class="col-sm-5 col-md-5 col-lg-12">
					<div class="card">
						<div class="card-header">
							<h5 class="mb-0">THERAPY INVOICE 
				
							</h5>
						</div>

						<div class="card-body">
							<div class="row">
								<div class="col-md-12" id="transaction">
									
									@foreach($clients as $client)
				                	
				                	<label class="control-label">Patient Name: </label>
									<a>{{$client['fname']}} {{$client['lname']}}</a><br>

				                	<label class="control-label">Address: </label>
									<a>{{$client['barangay']}} {{$client['town']}} {{$client['province']}} {{$client['city']}}</a><br>

				                	<label class="control-label">Phone: </label>
									<a>{{$client['contact']}}</a><br>

				               		<hr>

				        			@endforeach

				                	<label class="control-label">Therapist: </label>
									<a></a><br>

				                	<label class="control-label">Diagnosis: </label>
									<a></a><br>

				                	<label class="control-label">Order: </label>
									<a></a>
									<hr>

									<table class="table table-default">
										<thead>
											<tr>
												<th>Description</th>
												<th>Qty</th>
												<th>Rate</th>
												<th>Amount</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>description</td> 
												<td>000</td>
												<td>000</td>
												<td>000</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

        @include('partials.client.footer')
        </main>
    </body>

</html>