@extends('layouts.adm')

@section('dashboard')
    <div class="content-wrapper">
    <!-- START PAGE CONTENT-->
      <!-- search bar should be here -->
        
        <h3>Reports for Abuse </h3>          
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
            <td>2</td>
            <td>2019-03-05</td>
            <td>
              <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" data-id=""
                        type="button" id="dropdownMenu1" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"> 
                  Actions
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                  <a class="dropdown-item" data-toggle="modal" data-target="#viewModal""><i class="far fa-eye"></i>&nbsp;View</a>
                </div>
              </div>

              <!-- View Modal-->
                <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Report Information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body" id="modalView">
                        <div class="col-sm-12">
                            <label>Report ID: </label><br>
                            <label>Sender: </label>
                        </div>
                        <br>
                        <div class="col-sm-12" style="font-weight: bold;">
                            <div class="card">
                                <div class="card-body">
                                  <label>Date:</label><br>
                                  <label>Therapist ID:</label><br>
                                  <label>Therapist Name:</label><br>
                                  <label>Client ID:</label><br>
                                  <label>Client Name:</label><br>
                                  <label>Message:</label> 
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