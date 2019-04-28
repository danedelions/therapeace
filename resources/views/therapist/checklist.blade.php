@extends('layouts.the')

@section('page-section')

<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12">
			<div class="card">
				<h3 class="card-header">
					{{$booking->client->fullName}}'s Checklist
				</h3>
				<fieldset>
					<div class="card-body">
					{!! Form::open(['url' => route('checklist.store'), 'method' => 'post']) !!}
						<div class="col-sm-12 col-md-12 col-lg-12 form-row">
							<div class="col-sm-12 col-md-12 col-lg-12">
								<div class="form-row">
									<div class="col-md-6">

								 {!! Form::inputGroup('text', '/S/: Chief Complaint', 'chief_complaint', $booking->bookingDetails->diagnosis, ['placeholder' => 'Chief Complaint', 'required' => 'required']) !!}
									<input type="hidden" name="booking_id" value="{{$booking->id}}">
									<input type="hidden" name="client_id" value="{{$booking->client->user_id}}">
									<input type="hidden" name="therapist_id" value="{{$booking->therapist->user_id}}">
									</div>
								</div>
							</div>
						</div>
						
						<hr>

						<div class="col-sm-12 col-md-12 col-lg-12 form-row">
							<div class="col-sm-6 col-md-6 col-lg-6">
								<div class="form-control">
									<div class="form-row">
										<div class="col-md-2">
											<label>/P/:</label>
										</div>
										<div class="col-md-5">
											<input required="required" type="radio" name="vital_sign" value="a"/> a &nbsp;
										</div>
										<div class="col-md-5">
											<input required="required" type="radio" name="vital_sign" value="p"/> p
										</div>
									</div>
								</div>
							</div>
						</div>

						<hr>

						<div class="col-sm-12 col-md-12 col-lg-12 form-row">
							<div class="col-sm-12 col-md-12 col-lg-12">
								<div class="form-control">
									<div class="form-row">
										<div class="col-sm-4 col-md-4 col-lg-4">
											 {!! Form::inputGroup('text', 'BP', 'bp', null, ['placeholder' => 'BP (mmhg)', 'required']) !!}
										</div>
										<div class="col-sm-4 col-md-4 col-lg-4">
											 {!! Form::inputGroup('text', 'PR', 'pr', null, ['placeholder' => 'PR (bpm)', 'required']) !!}
										</div>
										<div class="col-sm-4 col-md-4 col-lg-4">
											 {!! Form::inputGroup('text', 'RR', 'rr', null, ['placeholder' => 'RR (cpm)', 'required']) !!}
										</div>
									</div>
								</div>
							</div>
						</div>

						<hr>

						<div class="col-sm-12 col-md-12 col-lg-12 form-row">
							<div class="col-sm-12 col-md-12 col-lg-12">
								<div class="form-control">
									<div class="form-row">
										 <label>/A/: Assessment during session</label>
										 <textarea required="required" class="form-control" style="height: 100px;" placeholder="Assessment..." name="assessment"></textarea>
									</div>
								</div>
							</div>
						</div>

						<hr>

						<div class="col-sm-12 col-md-12 col-lg-12 form-row">
							<div class="col-sm-6 col-md-6 col-lg-6">
								<div class="form-control">
									<div class="form-row">
										<div class="col-md-2">
											<label>/P/:</label>
										</div>
										<div class="col-md-5">
											<input type="checkbox" name="area_ue" value="UE"/> UE &nbsp; &nbsp; &nbsp;
										</div>
										<div class="col-md-5">
											<input type="checkbox" name="area_le" value="LE"/> LE
										</div>
									</div>

									<div class="form-control">
										<div class="form-row">
											<div class="col-md-2">
												<label></label>
											</div>
											<div class="col-md-5">
												<input type="checkbox" name="arom" value="AROM"/> AROM &nbsp; &nbsp; &nbsp;
											</div>
											<div class="col-md-5">
												<input type="checkbox" name="prom" value="PROM"/> PROM
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-md-6 col-lg-6 form-group">
								<div class="form-control">
									<label for="">Massage</label>
									<div class="form-row">
										<div class="col-md-6">
											<input type="text" name="massage_area" class=" form-control" placeholder="Area">
										</div>
										<div class="col-md-6">
											<input type="text" name="massage_min" class=" form-control" placeholder="Minutes">
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-12 col-md-12 col-lg-12 form-row">
							<div class="col-sm-6 col-md-6 col-lg-6">
								<div class="form-control">
									<label for="">Stretching</label> 
									<div class="form-row">
										<div class="col-md-6">
											<input type="text" name="stretching_hold" class=" form-control" placeholder="Hold">
										</div>
										<div class="col-md-6">
											<input type="text" name="stretching_sets" class=" form-control" placeholder="Sets">
										</div>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-md-6 col-lg-6 form-group">
								 <div class="form-control">
								 	<label for="">ES/TENS</label> 
									<div class="form-row">
										<div class="col-md-6">
											<input type="text" name="estens_area" class=" form-control" placeholder="Area">
										</div>
										<div class="col-md-6">
											<input type="text" name="estens_min" class=" form-control" placeholder="Minutes">
										</div>
									</div>
								</div>
							</div>
						</div>
								
						<div class="col-sm-12 col-md-12 col-lg-12 form-row">
							<div class="col-sm-12 col-md-12 col-lg-12">
								<div class="form-control">
									<label for="">Resistance</label> 
									<div class="form-row">
										<div class="col-md-3">
											<input type="text" name="resistance_weight" class=" form-control" placeholder="Weight">
										</div>
										<div class="col-md-3">
											<input type="text" name="resistance_motion" class=" form-control" placeholder="Motion">
										</div>
										<div class="col-md-3">
											<input type="text" name="resistance_reps" class=" form-control" placeholder="Reps">
										</div>
										<div class="col-md-3">
											<input type="text" name="resistance_sets" class=" form-control" placeholder="Sets">
										</div>
									</div>
								</div>
							</div>
						</div>

						<hr>

						<div class="col-sm-12 col-md-12 col-lg-12 form-row">
							<div class="col-sm-12 col-md-12 col-lg-12">
								<div class="form-control">
									<label for="">Others</label> 
									<div class="form-row">
										<textarea type="text" rows="3" name="other_text" class="form-control" placeholder="Activity..."></textarea>
									</div>
								</div>

								<hr>

								<button class="btn btn-success float-right">Submit</button>
							</div>
						</div>
					{!! Form::close() !!}
					</div>
				</fieldset>
			</div>
		</div>
	</div>
</div>

@endsection