@extends('layouts.adm')

@section('dashboard')
<!-- START PAGE CONTENT-->
  <div class="content-wrapper" >
    <div class="row">
      <div class="card-body">
        <div class="col-sm-5 col-md-5 col-lg-4">
          <h3>TheraPeace Users &nbsp;<button type="button" value="Print" onclick="printDiv('printableArea')" class="btn btn-sm btn-info"/><i class="fas fa-print"></i></button></h3>


          <a href="/add-therapist">The</a> 
          <a href="/add-client">Cli</a>      

        </div>

        <div class="col-sm-7 col-md-7 col-lg-8">
          {!! Form::open(['url' => url()->current(), 'method' => 'get']) !!} 
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="col-sm-5 col-md-5 col-lg-5">
                    {!! Form::inputGroup('text', null, 'username', request()->username ?? null, ['placeholder' => 'Username']) !!}
                </div>
                <div class="col-sm-6 col-md-6 col-lg-5">
                    {!! Form::inputGroup('text', null, 'email', request()->email ?? null, ['placeholder' => 'E-mail address']) !!}
                </div>
                <div class="col-sm-1 col-md-1 col-lg-2">
                  <button type="submit" class="btn btn-info pull-right"><i class="ti-search"></i> </button>
                </div>

            </div>    
          {!! Form::close() !!}
        </div>
      </div>
    </div>

    <div id="printableArea">
      <div class="row">
        <div class="card-body">
          <div class="table table-default">        
            <table class="table table-hover" id="print-content">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Role</th>
                  <th>Status</th>
                  <th class="hidden-print">Action</th>
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
                      <div class="btn-group">
                        <div class="dropdown">
                          <button class="btn btn-default dropdown-toggle hidden-print" data-id="{{ $row['id'] }}"
                                  id="dropdownMenu{{ $row['id'] }}" data-toggle="dropdown"
                                  aria-expanded="false" >
                            Actions
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenu{{ $row['id'] }}">
                            <li>
                              @if ($row['user_type'] == 'client')
                                  <a class="dropdown-item" data-toggle="modal" data-target="#view-modalc-{{ $row->id }}"><i class="far fa-eye"></i>&nbspView</a>
                              @elseif ($row['user_type'] == 'therapist')
                                  <a class="dropdown-item" data-toggle="modal" data-target="#view-modalt-{{ $row->id }}"><i class="far fa-eye"></i>&nbspView</a>
                              @endif
                            </li>
                            
                            <li>
                              {!! Form::open(['url' => route('get.notice', ['id' => $row->id]), 'method' => 'GET', 'onsubmit' => 'javascript:return confirm("Are you sure?")']) !!}
                                <button type="submit" class="dropdown-item"><i class="far fa-envelope"></i>&nbsp&nbspMail</button>
                              {!! Form::close() !!}
                            </li>
                            
                            <li>
                                {!! Form::open(['url' => route('get.update', $row->id), 'method' => 'PATCH']) !!}
                                @if ($row['status'] == 0)
                                  <button type="submit" class="dropdown-item"><i class="fas fa-ban"></i>&nbsp;&nbsp;Block</button>
                                @else
                                  <button type="submit" class="dropdown-item"><i class="fas fa-ban"></i>&nbsp;&nbsp;Unblock</button>
                                @endif
                                {!! Form::close() !!}
                            </li>
                            <li>
                              {!! Form::open(['url' => route('admin.delete', ['id' => $row->id]), 'method' => 'delete', 'onsubmit' => 'javascript:return confirm("Are you sure you want to delete?")']) !!}
                                <button type="submit" class="dropdown-item"><i class="far fa-envelope"></i>&nbsp&nbspDelete</button>
                              {!! Form::close() !!}
                            </li>

                          </ul>

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
                                    <center><img src='{{ asset("storage/{$row->therapist['image']}") }}' style="width:150px;height:250px;"><br></center>
                                    <hr>
                                    <label>Name: </label> {{ $row->therapist['fullName'] }}<br>
                                    <label>Therapist: </label> {{ $row->therapist['therapist'] }}<br>
                                    <label>Gender:</label> {{ $row->therapist['gender'] }}<br>
                                    <label>Licence Number: </label> {{ $row->therapist['license_number'] }}<br>
                                    <label>Expiry Date: </label> {{ $row->therapist['expiry_date'] }}<br>
                                    <hr>
                                    <center><label>Home Address</label></center><br>
                                    <label>Barangay:</label> {{ $row->therapist['barangay'] }}<br>
                                    <label>Street:</label> {{ $row->therapist['streetaddress'] }}<br>
                                    <label>City:</label> {{ $row->therapist['city'] }}<br>
                                    <label>Province:</label> {{ $row->therapist['province'] }}<br>
                                    <label>Postal Code:</label> {{ $row->therapist['postal_code'] }}<br>
                                    <hr>
                                    <center><label>Legal Documents</label></center><br>
                                    <div class="col-sm-12" style="overflow: auto; white-space: nowrap;">
                                      <center>
                                      <a data-toggle="modal" data-target="#view-modalFLis-{{ $row->id }}"><button class="btb btn-sm btn-info" data-id="{{ $row['id'] }}" type="button"><i class="far fa-eye"></i>&nbsp;Front License</button></a>

                                      <a data-toggle="modal" data-target="#view-modalBLis-{{ $row->id }}"><button class="btb btn-sm btn-info" data-id="{{ $row['id'] }}" type="button"><i class="far fa-eye"></i>&nbsp;Back License</button></a>

                                      <a data-toggle="modal" data-target="#view-modalNbi-{{ $row->id }}"><button class="btb btn-sm btn-info" data-id="{{ $row['id'] }}" type="button"><i class="far fa-eye"></i>&nbsp;View NBI</button></a>

                                      <a data-toggle="modal" data-target="#view-modalBC-{{ $row->id }}"><button class="btb btn-sm btn-info" data-id="{{ $row['id'] }}" type="button"><i class="far fa-eye"></i>&nbsp;View BrgyClr</button></a>
                                      </center>

                                    </div>

                                    <!-- View Front License image-->
                                    <div class="modal fade" id="view-modalFLis-{{ $row->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-body" id="modalView">
                                            <br>
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <div class="card">
                                                    <img src='{{ asset("storage/{$row->therapist['licenseimage_front']}") }}' style="width:412px;height:732px; text-align: center; ">
                                                </div>
                                            </div>                    
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- end of view modal -->

                                    <!-- View Back License image-->
                                    <div class="modal fade" id="view-modalBLis-{{ $row->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-body" id="modalView">
                                            <br>
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <div class="card">
                                                    <img src='{{ asset("storage/{$row->therapist['licenseimage_back']}") }}' style="width:412px;height:732px; text-align: center; ">
                                                </div>
                                            </div>                    
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- end of view modal -->

                                    <!-- View nbi image-->
                                    <div class="modal fade" id="view-modalNbi-{{ $row->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-body" id="modalView">
                                            <br>
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <div class="card">
                                                    <img src='{{ asset("storage/{$row->therapist['nbi_image']}") }}' style="width:412px;height:732px; text-align: center; ">
                                                </div>
                                            </div>                    
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- end of view modal -->

                                    <!-- View BC image-->
                                    <div class="modal fade" id="view-modalBC-{{ $row->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-body" id="modalView">
                                            <br>
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <div class="card">
                                                    <img src='{{ asset("storage/{$row->therapist['bc_image']}") }}' style="width:412px;height:732px; text-align: center; ">
                                                </div>
                                            </div>                    
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- end of view modal -->
                                    
                                  </div>
                              </div>
                          </div>                    
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end of view modal -->
                @endforeach        
              </tbody>
            </table>
           </div> 
            <center class="hidden-print">{{ $users->links() }}</center>
        </div>
      </div>
    </div>
  </div>
         
@endsection

