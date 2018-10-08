@extends('layouts.adm')

@section('dashboard')
<!-- START PAGE CONTENT-->
        <div class="content-wrapper" >
            <div class="card-body" style="overflow: scroll; height: 575px;">
                <div class="table table-default">        
                    <table class="table table-hover">
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
                      <tbody>
                      @foreach($users as $row)
                          <tr>
                          <td>{{$row['id']}}</td>
                          <td>{{$row['user_type']}}</td>
                          <td>
                              @if ($row['status'] == 1)
                                  Blocked
                              @else
                                  Unblocked
                              @endif
                          </td>
                          <td>{{$row['username']}}</td>
                          <td>{{$row['email']}}</td>

                          <!-- View Modal client-->
                          <div class="modal fade" id="viewModalc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                            <!-- <label>ZIP Code:</h5> -->  
                                          </div>
                                      </div>
                                  </div>                    
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- end of view modal -->

                          <!-- View Modal admin-->
                          <div class="modal fade" id="viewModala" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                            <!-- <label>ZIP Code:</h5> -->  
                                          </div>
                                      </div>
                                  </div>                    
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- end of view modal -->

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
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- end of view modal -->

                          <td>
                            <!-- view button -->
                              @if ($row['user_type'] == 'client')
                                  <button data-id="{{ $row['id'] }}" class="btn btn-outline-info" data-toggle="modal" data-target="#viewModalc"><i style="color:black;" class="far fa-eye"></i></button>
                              @elseif ($row['user_type'] == 'therapist')
                                  <button data-id="{{ $row['id'] }}" class="btn btn-outline-info" data-toggle="modal" data-target="#viewModalt"><i style="color:black;" class="far fa-eye"></i></button>
                              @else
                                  <button data-id="{{ $row['id'] }}" class="btn btn-outline-info" data-toggle="modal" data-target="#viewModala"><i style="color:black;" class="far fa-eye"></i></button>     
                              @endif

                              <!-- {!! Form::open(['url' => route('get.view', $row->id), 'method' => 'GET']) !!}
                              @if ($row['user_type'] == 'client')
                                  <button  class="btn btn-outline-info" data-toggle="modal" data-target="#viewModalc"><i style="color:black;" class="far fa-eye"></i></button>
                              @else
                                  <button  class="btn btn-outline-info" data-toggle="modal" data-target="#viewModalt"><i style="color:black;" class="far fa-eye"></i></button>
                              @endif
                              {!! Form::close() !!} -->

                              <!-- mail button -->
                              <button data-id="{{ $row['id'] }}" class="btn btn-outline-success" data-toggle="modal" data-target="#emailModal"><i class="far fa-envelope"></i></button>

                              <!-- disabling button -->
                              {!! Form::open(['url' => route('admin.status-update', $row->id), 'method' => 'PATCH']) !!}
                              @if ($row['status'] == 0)
                                  <button class="btn btn-outline-danger"><i style="color:black;"class="fas fa-ban"></i></button>
                              @else
                                  <button class="btn btn-outline-success"><i style="color:black;"class="fas fa-ban"></i></button>
                              @endif
                              {!! Form::close() !!}
                          </td>
                        </tr>
                      @endforeach

                      <!-- Mail Modal -->
                      <div class="modal fade" id="emailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Send Your Mail</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body" id="modalView">
                              <div class="row">
                                  <div class="col-sm-12 pull-center" style="font-weight: bold;">
                                      <div class="card">
                                          <div class="card-body text-center">
                                            <p><center>Send An Email</center></p>

                                            <a id="sendWelcomeBtn" data-href="{{route('sendWelcome', '__ID__')}}" class="col-sm-5 btn btn-success">Send Welcome</a>

                                             
                                            
                                          </div>
                                      </div>
                                  </div>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- end of email modal --> 
                    
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
            
        <!-- END PAGE CONTENT-->
            
        </div>
    </div>

@endsection