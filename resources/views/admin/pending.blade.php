@extends('layouts.adm')

@section('dashboard')
        <div class="content-wrapper">
        <div class="row">
          <div class="card-body">
            <div class="col-sm-4 col-md-4 col-lg-4">
              <h3>Pending Applications</h3>
            </div>
            <div class="col-sm-8 col-md-8 col-lg-8">
              {!! Form::open(['url' => url()->current(), 'method' => 'get']) !!} 
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="col-sm-3 col-md-3 col-lg-3">
                        {!! Form::inputGroup('text', null, 'username', request()->username ?? null, ['placeholder' => 'Username']) !!}
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3">
                        {!! Form::inputGroup('text', null, 'email', request()->email ?? null, ['placeholder' => 'E-mail address']) !!}
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3">
                        {!! Form::selectGroup(null, 'status', ['' => 'Select Therapist', 'Physical Therapist' => 'Physical Therapist', 'Occupational Therapist' => 'Occupational Therapist'], request()->therapist ?? null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3">
                      <button type="submit" class="btn btn-info pull-right"><i class="ti-search"></i> Search</button>
                    </div>
                </div>    
              {!! Form::close() !!}
            </div>
          </div>
         
        </div>          

          <div class="row">
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
                      <a class="dropdown-item" data-toggle="modal" data-target="#view-modal-{{ $user->id }}"><i class="far fa-eye"></i>&nbspView</a>

                      <a class="dropdown-item accept-therapist"><i class="far fa-check-circle"></i></i>&nbsp&nbspAccept</a>
                      <form method="post" action="{{ url("{$user->therapist->id}/accept") }}">
                        {{ csrf_field() }}
                      </form>
                      
                    </div>
                  </div>

                  <!-- View Modal therapist-->
                          <div class="modal fade" id="view-modal-{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document" style="overflow-y: scroll; max-height:85%;  margin-top: 50px; margin-bottom:50px;">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">User Information</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body" id="modalView">
                                  <div class="col-sm-12">
                                    <center><label>Profile</label></center><br>
                                    <center><img src='{{ asset("storage/{$user->therapist['image']}") }}' style="width:150px;height:250px;"><br></center>
                                    <label>Name : </label> {{ $user->therapist->fullName }}<br>
                                    <label>Therapist: </label> {{ $user->therapist->therapist }}<br>
                                    <label>Gender:</label> {{ $user->therapist->gender }}<br>
                                    <label>Licence Number: </label> {{ $user->therapist->license_number }}<br>
                                    <label>Expiry Date: </label> {{ $user->therapist->expiry_date }}<br>
                                  </div>
                                  <br>
                                  <div class="col-sm-12" >
                                      <div class="card">
                                          <div class="card-body">
                                            <center><label>Home Address</label></center>
                                            <label>Barangay:</label> {{ $user->therapist->barangay }}<br>
                                            <label>Street:</label> {{ $user->therapist->streetaddress }}<br>
                                            <label>City:</label> {{ $user->therapist->city }}<br>
                                            <label>Province:</label> {{ $user->therapist->province }}<br>
                                            <label>Postal Code:</label> {{ $user->therapist->postal_code }} <br>
                                            <center><label>Legal Documents</label></center>
                                            <div class="col-sm-12" style="overflow: auto; white-space: nowrap;">
                                              <center>
                                              <a data-toggle="modal" data-target="#view-modalLis-{{ $user->id }}"><button class="btb btn-sm btn-info" data-id="{{ $user['id'] }}" type="button"><i class="far fa-eye"></i>&nbspView License</button></a>

                                              <a data-toggle="modal" data-target="#view-modalNbi-{{ $user->id }}"><button class="btb btn-sm btn-info" data-id="{{ $user['id'] }}" type="button"><i class="far fa-eye"></i>&nbspView NBI</button></a>

                                              <a data-toggle="modal" data-target="#view-modalBC-{{ $user->id }}"><button class="btb btn-sm btn-info" data-id="{{ $user['id'] }}" type="button"><i class="far fa-eye"></i>&nbspView BC</button></a>
                                              </center>

                                            </div>

                                            <!-- View License image-->
                                            <div class="modal fade" id="view-modalLis-{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                              <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-body" id="modalView">
                                                    <br>
                                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                                        <div class="card">
                                                            <img src='{{ asset("storage/{$user->therapist['license_image']}") }}' style="width:412px;height:732px; text-align: center; ">
                                                        </div>
                                                    </div>                    
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <!-- end of view modal -->

                                            <!-- View nbi image-->
                                            <div class="modal fade" id="view-modalNbi-{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                              <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-body" id="modalView">
                                                    <br>
                                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                                        <div class="card">
                                                            <img src='{{ asset("storage/{$user->therapist['nbi_image']}") }}' style="width:412px;height:732px; text-align: center; ">
                                                        </div>
                                                    </div>                    
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <!-- end of view modal -->

                                            <!-- View BC image-->
                                            <div class="modal fade" id="view-modalBC-{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                              <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-body" id="modalView">
                                                    <br>
                                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                                        <div class="card">
                                                            <img src='{{ asset("storage/{$user->therapist['bc_image']}") }}' style="width:412px;height:732px; text-align: center; ">
                                                        </div>
                                                    </div>                    
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <!-- end of view modal -->
                                            <hr>  
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
          <center>{{ $users->links() }}</center>
        </div>
        
                
            
        <!-- END PAGE CONTENT-->
            
        </div>
    </div>
@endsection    