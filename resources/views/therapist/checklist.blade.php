@extends('layouts.the')

@section('page-section')

<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12">
			<div class="card">
				<h3 class="card-header">
					Client Checklist
				</h3>
				<div class="card-body">
					{!! Form::model(null,['method' => 'POST', 'class' => 'form-group']) !!}
						<fieldset>
							<div class="form-row">
								<div class="col-md-6">
									 {!! Form::inputGroup('text', '/S/: Chief Complaint', 'complaint', null, ['placeholder' => 'Chief Complaint']) !!}
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
										<input type="radio" name="vital" value="a"/> a
									</label>
									&nbsp;
									<label>
										<input type="radio" name="vital" value="p"/> p
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
										<input type="checkbox" name="area" value="UE"/> UE
									</label>
									&nbsp;
									<label>
										<input type="checkbox" name="area" value="LE"/> LE
									</label>
								</div>
								<div class="col-md-6 form-group">
									 <label class="form-control">
										<input type="checkbox" name="activities" value="p"/> AROM
									</label>
									<label class="form-control">
										<input type="checkbox" name="activities" value="p"/> PROM
									</label>
									<label class="form-control">
										<input type="checkbox" name="activities" value="p"/> Massage
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
										<input type="checkbox" name="activities" value="p"/> Stretching
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
										<input type="checkbox" name="activities" value="p"/> ES/TENS
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
										<input type="checkbox" name="activities" value="p"/> Resistance
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
										<input type="checkbox" name="activities" value="p"/> Other
										<input type="text" name="other" class="form-control" placeholder="Activity...">
									</label>
								</div>
							</div>
						</fieldset>
						<hr>
						<button class="btn btn-success">Submit</button>
						<button class="btn btn-danger">Cancel</button>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>

</div>

@endsection