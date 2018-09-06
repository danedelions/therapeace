@extends('layouts.cli')

@section('page-section')

	<nav class="navbar navbar-expand-sm  bg-light border">
	<div class="container">
		  </a>
		   <!-- Toggler/collapsibe Button -->
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		<div class="content py-5  bg-light">
			<div class="container">
				<div class="row">
				 	<div class="col-sm-3 col-md-3 col-lg-3">
		                <!-- HISTORY SECTION -->
		                <div class="card card-outline-secondary">
		                    <div class="card-header">
		                        <h3 class="mb-0">Search History</h3>
		                    </div>
		                        <div class="card-body">
							      <form action="#">
							      	<div>
							      		<label>From:</label>
								    	<input class="form-control mr-sm-2" type="date">
							      	</div>

							      	<br>

							      	<div>
							      		<label>To:</label>
								    	<input class="form-control mr-sm-2" type="date">
							      	</div>

							      	<br>

							      	<div>
								    	<button class="btn btn-success float-right" type="submit"><i class="fa fa-search"></i> Search</button>
							      	</div>
								  </form>
		                    <!-- End of HISTORY SECTION -->
		                        </div>
		                </div>
		            </div>

				 	<div class="col-sm-7 col-md-7 col-lg-9">

				 		<!-- TRANSACTION -->
		                <div class="card card-outline-secondary">
		                    <div class="card-header">
		                        <h3 class="mb-0">Transactions</h3>
		                    </div>

				            <div class="card-body">
					            <div class="row">
					                <div class="col-md-12">
					                    <table class="table table-default">
			                                <thead>
			                                  <tr>
			                                    <th>DATE</th>
			                                    <th>TIME</th>
			                                    <th>THERAPIST</th>
			                                    <th>TOTAL SESSION</th>
			                                  </tr>
			                                </thead>
			                                <tbody>
			                                  <tr>
			                                    <td><big>8-9-2018</big></td>
			                                    <td><big>9:00</big></td>
			                                    <td><big>Eric Necilla</big></td>
			                                    <td><big>980.00</big></td>
			                                  </tr>
			                                  <tr>
			                                    <td><big>8-9-2018</big></td>
			                                    <td><big>9:00</big></td>
			                                    <td><big>Eric Necilla</big></td>
			                                    <td><big>980.00</big></td>
			                                  </tr> 
			                                  <tr>
			                                    <td><big>8-9-2018</big></td>
			                                    <td><big>9:00</big></td>
			                                    <td><big>Eric Necilla</big></td>
			                                    <td><big>980.00</big></td>
			                                  </tr> 
			                                </tbody>
			                              </table>
					                </div>
					            </div>
				            </div>
				            <!-- End of CARD BODY -->
				        </div>
				        <!-- End of TRANSACTION -->
		            </div>
		        </div>
			</div>
			<!-- End of Container -->
		</div>
	</div>

@endsection

