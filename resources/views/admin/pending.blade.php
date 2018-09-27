@extends('layouts.adm')

@section('dashboard')
        <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
          <h2>Search Bar</h2>
          <p>Pending Therapists</p>           
          <table class="table table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Role</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Mary Mary</td>
                <td>mary@example.com</td>
                <td>00000000002</td>
                <td>Physical</td>
                <td>
                    <a class="btn btn-outline-info" href="#"><i style="color:black;" class="far fa-eye"></i></a>
                    <a class="btn btn-outline-success" href="#"><i style="color:black;" class="far fa-envelope"></i></a>
                    <a class="btn btn-outline-danger" href="#"><i style="color:black;" class="far fa-trash-alt"></i></a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        
                
            
        <!-- END PAGE CONTENT-->
            
        </div>
    </div>
@endsection    