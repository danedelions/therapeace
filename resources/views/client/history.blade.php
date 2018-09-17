@extends('layouts.cli')

@section('page-section')

<div class="container">
	<div class="row">
		<div class="col-md-3 col-lg-3">
			<div class="card">
				<div class="card-header">
					<h3>Search History</h3>
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

				</div>
			</div>
		</div>

	 	<div class="col-md-7 col-lg-9">
			<div class="card" style="overflow: scroll; height: 500px;">
				<div class="card-header">
					<h3>Transactions</h3>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md">
							<table class="table table-default" >
								<thead>
									<tr>
										<th>DATE</th>
										<th>TIME</th>
										<th>THERAPIST</th>
										<th>TOTAL SESSION</th>
										<th>OPTION</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><big>8-9-2018</big></td>
										<td><big>9:00</big></td>
										<td><big>Daniela Echavez</big></td>
										<td><big>980.00</big></td>
										<td>
											<button class="btn btn-outline-info" href="#" data-toggle="modal" data-target="#viewTransaction"><i style="color:black;" class="far fa-eye"></i></button>
											<button class="btn btn-outline-danger" href="#" data-toggle="modal" data-target="#deleteTransaction"><i style="color:black;" class="far fa-trash-alt"></i></button>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


  <!-- View Transaction Modal -->
<div class="modal fade" id="viewTransaction" role="dialog">
	<div class="modal-dialog">

	<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<div class="card" style="overflow: scroll; height: 500px;">
					<div class="card-header">
						<h3 class="mb-0">THERAPY INVOICE 
							<a class="btn btn-outline-PRIMARY" href="#" data-toggle="modal" data-target="#printTransaction"><i style="color:black;" class="fas fa-print"></i></a>
						</h3>
					</div>

					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<label>Patient Name:</label>
								<a href="">Tiffany Centillas</a>
								<br>
								<label>Address:</label>
								<a href="">Malayo Nortes, Cortes Bohol</a>
								<br>
								<label>Phone:</label>
								<a href="">09099876541</a>
								<br>
								<label>Date of Birth</label>
								<a href="">March 3, 1998</a>
								
								<hr>
								
								<label>Physician</label>
								<a href="">Daniela Echavez</a>
								<br>
								<label>Diagnosis</label>
								<a href="">Inability to do project due to procrastination</a>
								<br>
								<label>Order: </label>
								<a href="">Physical Therapist</a>

								<hr><hr>
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
											<td>Random stuff</td>
											<td>100</td>
											<td>70</td>
											<td>P 900</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>		
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>

<!-- Print Transaction Modal -->
<div class="modal fade" id="printTransaction" role="dialog">
	<div class="modal-dialog">

	<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<p>Some text in the modal.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>

@endsection

