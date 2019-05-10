@extends('layouts.adm')

@section('dashboard')
    <div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <!-- search bar should be here -->
      
      <h3>Appointment History</h3>          
      <table class="table table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>Clients</th>
            <th>Therapists</th>
            <th>Date</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($bookrequest as $row)
            <tr>
              <!-- <td>{{ $row->bookingDetails->booking_id }}</td> -->
              <td>{{ $loop->iteration }}</td>
              <td>{{ $row->client->fullName }}</td>
              <td>{{ $row->therapist->fullName}}</td>
              <td>{{ $row->appointment->start_date}}</td>
              <td>
                <div class="dropdown">
                  <button class="btn btn-default dropdown-toggle" data-id="{{ $row->bookingDetails->booking_id }}"
                          type="button" id="dropdownMenu1" data-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false"> 
                    Actions
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <a class="dropdown-item" data-toggle="modal" data-target="#view-{{ $row->bookingDetails->booking_id }}"> <i class="far fa-eye"></i>&nbsp;View</a>
                  </div>
                </div>

                <!-- View Modal therapist-->
                  <div class="modal fade" id="view-{{ $row->bookingDetails->booking_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document" style="overflow-y: scroll; max-height:85%;  margin-top: 50px; margin-bottom:50px;">
                      <div class="modal-content">
                        <div class="modal-header bg-info">
                          <h5 class="modal-title" id="exampleModalLabel">History Information</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body" id="modalView">
                          <div class="card">
                            <div class="card-body">
                              <center><label>Apointment Date & Time</label></center><br>
                              <label>Start Date : </label> {{ $row->appointment->start_date }}<br>
                              <label>End Date: </label> {{ $row->appointment->end_date }}<br>
                              <label>Start Time:</label> {{ $row->appointment->start_date_time }}<br>
                              <label>End Time: </label> {{ $row->appointment->end_date_time }}<br>
                              <hr>
                              <center><label>Therapist Details</label></center>
                              <label>Therapist ID:</label> {{  $row->therapist->id }}<br>
                              <label>Therapist Name:</label> {{  $row->therapist->fullName}}<br>
                              <label>Other Service:</label> {{ $row->appointment->other_services }}<br>
                              <label>Additional Fee:</label> {{ $row->appointment->other_services_fee }}<br>
                              <label>Professional Fee:</label> {{ $row->appointment->num_hours_per_day }} <br>
                              <hr>
                              <center><label>Client Details</label></center>
                              <label>Client ID:</label> {{ $row->client->id }}<br>
                              <label>Client Name:</label> {{ $row->client->fullName }}<br>
                              <label>Address:</label> {{ $row->bookingDetails->user_address }}<br>
                              <label>Note:</label> {{ $row->bookingDetails->notes }}<br>
                              <label>Diagnosis:</label> {{ $row->bookingDetails->diagnosis }} <br>
                              <hr>
                              <center><label>Legal Documents</label></center>
                              <div class="col-sm-12" style="overflow: auto; white-space: nowrap;">
                                <center>
                                <a data-toggle="modal" data-target="#view-modal-{{ $row->bookingDetails->booking_id }}"><button class="btb btn-sm btn-info" data-id="{{ $row->bookingDetails->booking_id }}" type="button"><i class="far fa-eye"></i>&nbsp;View Diagnosis</button></a>
                                </center>
                              </div>

                              <!-- View Front License image-->
                              <div class="modal fade" id="view-modal-{{ $row->bookingDetails->booking_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-body" id="modalView">
                                      <br>
                                      <div class="col-sm-12 col-md-12 col-lg-12">
                                          <div class="card">
                                              <img src='{{ asset("storage/{ $row->bookingDetails['image']}") }}' style="width:412px;height:732px; text-align: center; ">
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