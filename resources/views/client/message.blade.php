@extends('layouts.cli')

@section('title', 'Message')

@section('page-section')

@include('modals.client')

<div class="row"> <!-- 	<div class="row">  --><!-- <div class="col-md-5"> -->
	<div class="col-sm-5 col-md-5 col-lg-12">
		<div class="card">
			<div class="card-header bg-info">
				<h5>Messages</h5>
			</div>
			<div class="card-body" style="overflow: scroll; height: 500px;">
				<div class="row">
					<div class="col-md">
						<table class="table table-default" >
							<thead>
								<tr>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>
										<button class="btn btn-danger" href="#" data-toggle="modal" data-target="#deleteTransaction"><i style="color:black;" class="fas fa-trash-alt"></i></button>
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



@endsection

