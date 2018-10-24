@extends('layouts.adm')

@section('dashboard')
<!-- START PAGE CONTENT-->
        <div class="content-wrapper" >
            <div class="card-body" style="overflow: scroll; height: 575px;">
                <div class="table table-default">        
                    <table class="table table-hover" id="users-table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Role</th>
                          <th>Status</th>
                          <th>Username</th>
                          <th>Email</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                    </table>
                </div>
            </div>
        </div>
<!-- END PAGE CONTENT-->
@stop

@push('scripts')
<script>
$(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('datatables.data') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'user_type', name: 'role' },
            { data: 'status', name: 'status' },
            { data: 'username', name: 'username' },
            { data: 'email', name: 'email' }
            // { data: 'created_at', name: 'created_at' },
            // { data: 'updated_at', name: 'updated_at' }
        ]
    });
});
</script>
@endpush
