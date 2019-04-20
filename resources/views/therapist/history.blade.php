@extends('layouts.the')

@section('page-section')

<div class="row">
	<div class="col-sm-3 col-md-3 col-lg-3">
		<div class="card">
			<div class="card-header bg-info">
					Search
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
			<div class="card-header bg-info">
				Transactions
			</div>
			<div class="card-body" style="overflow: scroll; height: 500px;">
				<div class="row">
					<div class="col-md">
						<table class="table table-default" >
							<thead>
								<tr>
									<th>DATE</th>
									<th>TIME</th>
									<th>CLIENT</th>
									<th>TOTAL SESSION</th>
									<th>OPTION</th>
								</tr>
							</thead>
							<tbody>

								@foreach($clients as $row)
								<tr>
									<td>mm-dd-yyyy</td>
									<td></td>
									<td>{{$row->fullname}}</td>
									<td>0000</td>
									<td>
										<a class="btn btn-outline-info" href="/therapist-transaction"><i style="color:black;" class="fas fa-eye"></i></a>
										<button class="btn btn-outline-danger" href="#" data-toggle="modal" data-target="#deleteTransaction"><i style="color:black;" class="fas fa-trash-alt"></i></button>
									</td>
								</tr>
								@endforeach

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



@endsection
