@extends('layouts.adm')

@section('dashboard')
    <div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <!-- search bar should be here -->
      
      <h3>Appointment History</h3>          
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
            <td>1234</td>
            <td>12-12-2012</td>
            <td>
              <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" data-id=""
                        type="button" id="dropdownMenu1" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"> 
                  Actions
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                  <a class="dropdown-item" data-toggle="modal" data-target="#viewModal"><i class="far fa-eye"></i>&nbsp;View</a>
                </div>
              </div>

              <!-- View Modal therapist-->
                <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">History Information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body" id="modalView">
                        <div class="col-sm-12">
                            <label>Session ID: </label>
                        </div>
                        <br>
                        <div class="col-sm-12" style="font-weight: bold;">
                          <div class="card">
                              <div class="card-body">
                                <label>Date Started:</label><br>
                                <label>Date Ended:</label><br>
                                <label>Therapist ID:</label><br>
                                <label>Therapist Name:</label><br>
                                <label>Client ID:</label><br>
                                <label>Client Name:</label><br>
                                <label>Address</label> 
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
    
        </tbody>
      </table>
    </div>
      
    <!-- END PAGE CONTENT-->
        
    </div>
</div>
@endsection