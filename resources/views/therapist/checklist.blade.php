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
					<div style="width: 800px; margin: 0 auto;">
						{!! Form::model(null,['method' => 'POST', 'class' => 'form-group']) !!}
						<table class="table table-hover small-text" id="tb">
							<tr class="tr-header">
								<th>Routine</th>
								<th>Reps</th>
								<th><a href="javascript:void(0);" style="font-size:18px;" id="addMore" title="Add More Person"><span class="fa fa-plus"></span></a></th>
							</tr>
							<tbody>
								<tr>
									<td>{!!Form::inputGroup('text',null,'routine',null, ['placeholder' => 'Routine'])!!}</td>
									<td>{!!Form::inputGroup('text',null,'reps',null, ['placeholder' => 'Reps'])!!}</td>
									<td><a href='javascript:void(0);'  class='remove'><span class='fa fa-times'></span></a></td>
								</tr>								
							</tbody>
							<tfoot>
								<tr>
									<td><button class="btn btn-success">Add</button></td>
									<td></td>
									<td></td>
								</tr>
							</tfoot>
						</table>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<script>
	$(function(){
    $('#addMore').on('click', function() {
              var data = $("#tb tr:eq(1)").clone(true).appendTo("#tb");
              data.find("input").val('');
     });
     $(document).on('click', '.remove', function() {
         var trIndex = $(this).closest("tr").index();
            if(trIndex>1) {
             $(this).closest("tr").remove();
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
});      
</script>
@endsection