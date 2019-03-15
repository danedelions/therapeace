@extends('layouts.adm')

@section('dashboard')
<!-- START PAGE CONTENT-->
        <div class="container">
            
            <div class="row">
                <div class="col-md-12">
                  <h2 align="left">List of Users</h2>

                  <table id="userTable" class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                  </table>
                </div>
            </div>
        </div>
<!-- END PAGE CONTENT-->
@endsection
