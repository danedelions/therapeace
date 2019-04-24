@extends('layouts.the')

@section('page-section')

<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12">
			<div class="card">
				<h3 class="card-header">
					{{$booking->client->fullName}}'s Checklist
				</h3>
				<div class="card-body">
				{!! Form::open(['url' => route('checklist.store'), 'method' => 'post']) !!}
							<div class="form-row">
								<div class="col-md-6">
									 {!! Form::inputGroup('text', '/S/: Chief Complaint', 'chief_complaint', $booking->bookingDetails->diagnosis, ['placeholder' => 'Chief Complaint']) !!}
										<input type="hidden" name="booking_id" value="{{$booking->id}}">
										<input type="hidden" name="client_id" value="{{$booking->client->user_id}}">
										<input type="hidden" name="therapist_id" value="{{$booking->therapist->user_id}}">
								</div>
							</div>
						</fieldset>
						<hr>
						<fieldset>
							<div class="form-row">
								<div class="col-md-12">
									<label>/O/: Vital Signs</label>
									&nbsp;
									<label>
										<input type="radio" name="vital_sign" value="a"/> a
									</label>
									&nbsp;
									<label>
										<input type="radio" name="vital_sign" value="p"/> p
									</label>
								</div>
								<div class="col-md-6">
									 {!! Form::inputGroup('text', 'BP (mmhg)', 'bp', null, ['placeholder' => 'BP (mmhg)']) !!}
								</div>
								<div class="col-md-6">
									 {!! Form::inputGroup('text', 'PR (bpm)', 'pr', null, ['placeholder' => 'PR (bpm)']) !!}
								</div>
								<div class="col-md-6">
									 {!! Form::inputGroup('text', 'RR (cpm)', 'rr', null, ['placeholder' => 'RR (cpm)']) !!}
								</div>
							</div>
						</fieldset>
						<hr>
						<fieldset>
							<div class="form-row">
								<div class="col-md-12">
									 <label>/A/: Assessment during session</label>
									 <textarea class="form-control" style="height: 100px;" placeholder="Assessment..." name="assessment"></textarea>
								</div>
							</div>
						</fieldset>
						<hr>
						<fieldset>
							<div class="form-row">
								<div class="col-md-12">
									<label>/P/:</label>
									&nbsp;
									<label>
										<input type="checkbox" name="area_ue" value="UE"/> UE
									</label>
									&nbsp;
									<label>
										<input type="checkbox" name="area_le" value="LE"/> LE
									</label>
								</div>
								<div class="col-md-6 form-group">
									 <label class="form-control">
										<input type="checkbox" name="arom" value="AROM"/> AROM
									</label>
									<label class="form-control">
										<input type="checkbox" name="prom" value="PROM"/> PROM
									</label>
									<label class="form-control">
										<label for="">Massage</label>
										<div class="form-row">
											<div class="col-md-6">
												<input type="text" name="massage_area" class=" form-control" placeholder="Area">
											</div>
											<div class="col-md-6">
												<input type="text" name="massage_min" class=" form-control" placeholder="Minutes">
											</div>
										</div>
									</label>
									<label class="form-control">
										<label for="">Stretching</label> 
										<div class="form-row">
											<div class="col-md-6">
												<input type="text" name="stretching_hold" class=" form-control" placeholder="Hold">
											</div>
											<div class="col-md-6">
												<input type="text" name="stretching_sets" class=" form-control" placeholder="Sets">
											</div>
										</div>
									</label>
								</div>
								<div class="col-md-6 form-group">
									 <label class="form-control">
									 	<label for="">ES/TENS</label> 
										<div class="form-row">
											<div class="col-md-6">
												<input type="text" name="estens_area" class=" form-control" placeholder="Area">
											</div>
											<div class="col-md-6">
												<input type="text" name="estens_min" class=" form-control" placeholder="Minutes">
											</div>
										</div>
									</label>
									<label class="form-control">
										<label for="">Resistance</label> 
										<div class="form-row">
											<div class="col-md-6">
												<input type="text" name="resistance_weight" class=" form-control" placeholder="Weight">
											</div>
											<div class="col-md-6">
												<input type="text" name="resistance_motion" class=" form-control" placeholder="Motion">
											</div>
											<div class="col-md-6">
												<input type="text" name="resistance_reps" class=" form-control" placeholder="Reps">
											</div>
											<div class="col-md-6">
												<input type="text" name="resistance_sets" class=" form-control" placeholder="Sets">
											</div>
										</div>
									</label>
									<label class="form-control">
										<label for="">Other</label>
										<input type="text" name="other_text" class="form-control" placeholder="Activity...">
									</label>
								</div>
							</div>
						</fieldset>
						<hr>
						<button class="btn btn-success">Submit</button>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>

</div>

@endsection