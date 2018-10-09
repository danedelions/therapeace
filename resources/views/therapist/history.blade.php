@extends('layouts.the')

@section('page-section')
@include('modals.therapist')

<div class="row">
	<div class="col-sm-3 col-md-3 col-lg-3">
		<div class="card">
			<div class="card-header bg-info">
				<h5>Search</h5>
			</div>
			<div class="card-body">
				<form action="#">
					<div>
						<label>From:</label>
						<input class="form-control md-sm-2" type="date">
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

 	<div class="col-sm-7 col-md-7 col-lg-9">
		<div class="card">
			<div class="card-header">
				<h5>Transactions</h5>
			</div>
			<div class="card-body" style="overflow: scroll; height: 500px;">
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

								@foreach($client as $row)

								<tr>
									<td>mm-dd-yyyy</td>
									<td>00:00:00</td>
									<td>NOT AVAILABLE</td>
									<td>0000</td>
									<td>
										<button class="btn btn-outline-info" href="#" data-toggle="modal" data-target="#viewTransaction"><i style="color:black;" class="fas fa-eye"></i></button>
										<button class="btn btn-outline-danger" href="#" data-toggle="modal" data-target="#deleteTransaction"><i style="color:black;" class="fas fa-trash-alt"></i></button>
									</td>
								</tr>

								#endforeach

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



@endsection

