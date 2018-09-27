@extends('layouts.adm')

@section('dashboard')
        <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
          <h2>Search Bar</h2>
          <p>List of Sessions</p>           
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Session ID</th>
                <th>Date</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                <td></td>
                <td></td>
                <td>
                    <a class="btn btn-outline-info" href="#"><i style="color:black;" class="far fa-eye"></i></a> 
                    <a class="btn btn-outline-success href="#"><i class="far fa-envelope"></i></a> 
                    <a class="btn btn-outline-danger" href="#"><i style="color:black;" class="fas fa-ban"></i></a>
                </td>
              </tr>
        
            </tbody>
          </table>
        </div>
        
                
            
        <!-- END PAGE CONTENT-->
            
        </div>
    </div>
@endsection