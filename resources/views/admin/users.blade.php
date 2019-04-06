@extends('layouts.adm')

@section('dashboard')
<!-- START PAGE CONTENT-->
        <div class="content-wrapper" >
            <h3>List of TheraPeace Users</h3>

            <!-- <h5>Filters:</h5>
            <a href="/?status=0">Unblocked</a> |
            <a href="/?status=1">Blocked</a> |
            <a href="/">Reset</a> | -->

            <div class="card-body" style="overflow: hidden; height: 575px;">
                <div class="table table-default">        
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Username</th>
                          <th>Email</th>
                          <th>Role</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($users as $row)
                          <tr>
                          <td>{{$row['id']}}</td>
                          <td>{{$row['username']}}</td>
                          <td>{{$row['email']}}</td>
                          <td>{{$row['user_type']}}</td>
                          <td>
                              @if ($row['status'] == 1)
                                  Blocked
                              @else
                                  Unblocked
                              @endif
                          </td>

                        <!-- BUTTONS -->    

                          <td>
                            <!-- dropdown -->
                            <div class="dropdown">
                              <button class="btn btn-default dropdown-toggle" data-id="{{ $row['id'] }}"
                                      type="button" id="dropdownMenu1" data-toggle="dropdown"
                                      aria-haspopup="true" aria-expanded="false">
                                Actions
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                @if ($row['user_type'] == 'client')
                                    <a class="dropdown-item" data-toggle="modal" data-target="#view-modalc-{{ $row->id }}"><i class="far fa-eye"></i>&nbspView</a>
                                @elseif ($row['user_type'] == 'therapist')
                                    <a class="dropdown-item" data-toggle="modal" data-target="#view-modalt-{{ $row->id }}"><i class="far fa-eye"></i>&nbspView</a>
                                @endif

                                {!! Form::open(['url' => route('get.notice', $row->id), 'method' => 'GET', 'onsubmit' => 'javascript:return confirm("Are you sure?")']) !!}
                                  <button type="submit" class="dropdown-item"><i class="far fa-envelope"></i>&nbsp&nbspMail</button>
                                {!! Form::close() !!}


                                {!! Form::open(['url' => route('get.update', $row->id), 'method' => 'PATCH']) !!}
                                @if ($row['status'] == 0)
                                  <button type="submit" class="dropdown-item"><i class="fas fa-ban"></i>&nbsp;&nbsp;Block</button>
                                @else
                                  <button type="submit" class="dropdown-item"><i class="fas fa-ban"></i>&nbsp;&nbsp;Unblock</button>
                                @endif
                                {!! Form::close() !!}
                                
                              </div>
                            </div>

                          </td>
                        </tr>

                        <!-- View Modal client-->
                        <div class="modal fade" id="view-modalc-{{ $row->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header bg-info">
                                <h5 class="modal-title" id="exampleModalLabel">User Information</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body" id="modalView">
                                <br>
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-body">
                                          <center><label>Profile</label></center><br>
                                          <label>Name: </label> {{ $row->client['fullName'] }} <br>
                                          <label>Email: </label> {{ $row['email'] }}<br>
                                          <label>Contact #: </label> {{ $row->client['contact'] }}<br>
                                          <label>Gender:</label> {{ $row->client['gender'] }}<br>
                                          <hr>
                                          <center><label>Home Address</label></center><br>
                                          <label>Barangay:</label> {{ $row->client['brgy'] }}<br>
                                          <label>City:</label> {{ $row->client['city'] }}<br>
                                          <label>Street:</label> {{ $row->client['street'] }} <br>
                                          <label>Residence Detail:</label> {{ $row->client['res_detail'] }}<br>
                                          <label>Province:</label> {{ $row->client['province'] }}<br>
                                          <label>Bldg. Number:</label> {{ $row->client['building'] }} <br>
                                          <label>Landmark:</label> {{ $row->client['landmark'] }}<br>
                                          <label>Address Remarks:</label> {{ $row->client['address_remarks'] }}  
                                        </div>
                                    </div>
                                </div>                    
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- end of view modal -->

                        <!-- View Modal therapist-->
                        <div class="modal fade" id="view-modalt-{{ $row->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document" style="overflow-y: scroll; max-height:85%;  margin-top: 50px; margin-bottom:50px;">
                            <div class="modal-content">
                              <div class="modal-header bg-info">
                                <h5 class="modal-title" id="exampleModalLabel">User Information</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body" id="modalView">
                                <br>
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-body">
                                          <center><label>Profile</label></center><br>
                                          <label>Name: </label> {{ $row->therapist['fullName'] }}<br>
                                          <label>Therapist: </label> {{ $row->therapist['therapist'] }}<br>
                                          <label>Licence Number: </label> {{ $row->therapist['license_number'] }}<br>
                                          <label>Expiry Date: </label> {{ $row->therapist['expiry_date'] }}<br>
                                          <label>Email: </label> {{ $row['email'] }}<br>
                                          <label>Contact #: </label> {{ $row->therapist['contact'] }}<br>
                                          <label>Gender:</label> {{ $row->therapist['gender'] }}<br>
                                          <hr>
                                          <center><label>Home Address</label></center><br>
                                          <label>Barangay:</label> {{ $row->therapist['barangay'] }}<br>
                                          <label>Street:</label> {{ $row->therapist['streetaddress'] }}<br>
                                          <label>City:</label> {{ $row->therapist['city'] }}<br>
                                          <label>Province:</label> {{ $row->therapist['province'] }}<br>
                                          <label>Postal Code:</label> {{ $row->therapist['postal_code'] }}<br>
                                          <hr>
                                          <center><label>Legal Documents</label></center><br>
                                        </div>
                                    </div>
                                </div>                    
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- end of view modal -->

                        <!-- Mail Modal -->
                        <div class="modal fade" id="emailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document" >
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

                                              <a id="sendWelcomeBtn" data-href="{{route('get.notice', '__ID__')}}" class="col-sm-5 btn btn-success">Send Welcome</a>

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
                      @endforeach

                      
                    
                      </tbody>
                    </table>

                    {{ $users->links() }}
                </div>
            </div>
        </div>
            
        <!-- END PAGE CONTENT-->
            
        </div>
    </div>

@endsection