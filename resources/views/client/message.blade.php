@extends('layouts.cli')

@section('page-section')
@include('modals.client')
<div class="container">
	<div class="row"> <!-- 	<div class="row">  --><!-- <div class="col-md-5"> -->
		<div class="col-sm-5 col-md-5 col-lg-12">
			<div class="card">
				<div class="card-header">
					<h5>Messages</h5>
				</div>
				<div class="card-body" style="overflow: scroll; height: 500px;">
					<div class="row">
						<div class="col-md">
							<table class="table table-default" >
								<thead>
									<tr>
										<th>Aaaaaaaa</th>
										<th>Bbbbbbbb</th>
										<th>Cccccccc</th>
										<th>Dddddddd</th>
										<th>DELETE</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>2</td>
										<td>3</td>
										<td>4</td>
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
</div>


@endsection

