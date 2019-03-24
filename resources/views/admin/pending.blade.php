@extends('layouts.adm')

@section('dashboard')
        <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <!-- search bar should be here -->
          <h2>Search Bar</h2>
          <p>Pending Applications</p>           
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
              @foreach($users as $user)
              <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->therapist->fullName}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->therapist->contact}}</td>
                <td>{{$user->therapist->therapist}}</td>
                <td>
                  <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" data-id=""
                            type="button" id="dropdownMenu1" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"> 
                      Actions
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <a class="dropdown-item" data-toggle="modal" data-target="#viewModalt""><i class="far fa-eye"></i>&nbspView</a>

                      <a class="dropdown-item"><i class="far fa-check-circle"></i></i>&nbsp&nbspAccept</a>

                      <!-- <a class="dropdown-item"><i class="far fa-trash-alt"></i>&nbsp&nbspDelete</a> -->
                    </div>
                  </div>

                  <!-- View Modal therapist-->
                          <div class="modal fade" id="viewModalt" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">User Information</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body" id="modalView">
                                  <div class="col-sm-12">
                                      <label>Date Joined: </label>
                                  </div>
                                  <br>
                                  <div class="col-sm-12" style="font-weight: bold;">
                                      <div class="card">
                                          <div class="card-body">
                                            <label>Name : </label><br>
                                            <label>Email: </label><br>
                                            <label>Contact #:</label>
                                            <label>Barangay:</label><br>
                                            <label>Town/Municipality:</label><br>
                                            <label>Street:</label><br>
                                            <label>Province:</label><br>
                                            <label>Image</label>  
                                          </div>
                                      </div>
                                  </div>                    
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- end of view modal -->
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        
                
            
        <!-- END PAGE CONTENT-->
            
        </div>
    </div>
@endsection    