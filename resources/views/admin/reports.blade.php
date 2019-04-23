@extends('layouts.adm')

@section('dashboard')
    <div class="content-wrapper">
    <!-- START PAGE CONTENT-->
      <!-- search bar should be here -->
        
        <h3>Reports for Abuse</h3>          
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Session ID</th>
            <th>Clients</th>
            <th>Therapists</th>
            <th>Date</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($bookrequest as $row)
            @if(!empty($row->report))
              <tr>
                <td>{{ $row->bookingDetails->booking_id }}</td>
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
                            <hr>
                            <center><label>Client Details</label></center>
                            <label>Client ID:</label> {{ $row->client->id }}<br>
                            <label>Client Name:</label> {{ $row->client->fullName }}<br>
                            <label>Report:</label> {{ $row->report->reports }}                           
                          </div>
                        </div>
                      </div>
                    </div>
              <!-- end of view modal -->
                  </td>
                </div>  
              </tr>

            @else
              <tr>
                  <td colspan="4" class="text-center">No Reports</td>
              </tr>
            @endif
          @endforeach
        </tbody>
      </table>
      
    </div>
    
            
        
    <!-- END PAGE CONTENT-->
        
    </div>
</div>
@endsection