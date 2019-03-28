@extends('layouts.the')

@section('page-section')

<div class="col-md-12">
    <div class="row"> <!-- LABEL->col-form-label INPUT-> form-control -->

        <div class="col-sm-4 col-md-4 col-lg-5">
            <div class="card">
                <div class="card-header bg-info">
                    <h5> User Information</h5>
                </div>
                <div class="card-body">
                        <center>
                            <img class="th-image" src="{{ asset('img/di.png') }}">
                            <br>
                                <div class="col-lg-8"><h4>{{$therapist->therapist}}</h4></div>
                        </center>
                        <hr>    
                        <div class="form-group row">
                            <label class="col-lg-3">Full Name</label>
                                <div class="col-lg-8">{{$therapist->fullname}}</div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3">Email</label>
                                <div class="col-lg-8">{{ Auth::user()->email }}</div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3">Contact Number</label>
                                <div class="col-lg-8">{{$therapist->contact}}</div> 
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3">Bio</label>
                                <div class="col-lg-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus viverra rhoncus ex, id egestas sem ultrices sit amet. Nulla a venenatis libero, vel suscipit libero. Vivamus laoreet quam luctus ligula sollicitudin, sagittis varius quam pulvinar. Curabitur euismod tortor leo, sit amet convallis urna elementum vitae.</div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3">Specialties</label>
                                <div class="col-lg-8">
                                   <span class="badge badge-success"> {!! optional($therapist->specialties)->pluck('name')->implode('</span ><span class="badge badge-success ml-1">') !!}</span>
                                <br>
                                </div>  
                        </div>
                        <div style="display:block; width:x; height:y; text-align:right;">
                            <a href="{{url('/therapist-edit/'. $therapist->id )}}"><i class="far fa-edit"></i> Edit</a>
                        </div>
                </div>
            </div>
        </div>

        <div class="col-md-7">
            <div class="col-sm-5 col-md-5 col-lg-12">
                <div class="card">
                    <div class="card-header bg-info">
                        <h5>Client Requests</h5>
                    </div>
                    <div class="card-body p-0" style="overflow: scroll; height: 200px;">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>Client Name</th>
                                    <th>Diagnosis</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($therapist->bookingRequest as $request)
                                <tr>
                                    <td>{{$request->client->fullname}}</td>
                                    <td>{{$request->bookingDetails->diagnosis}} </td>
                                    <td>
                                        @if($request->status == 0)
                                            <span class="badge badge-secondary">Pending</span>  
                                        @elseif($request->status == 1)
                                            <span class="badge badge-success">Approved</span>  
                                        @elseif($request->status == 2)
                                        <span class="badge badge-danger">Rejected</span>
                                        @elseif($request->status == 3)
                                        <span class="badge badge-default">Finished</span>  
                                        @endif
                                    </td>
                                    <td>
                                        <a class="btn btn-sm btn-info" href="{{ route('therapist.calendar', $request) }}">View</a>
                                    </td>
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center">No requests</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <br>

                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header bg-info">
                                    <h5>Ratings</h5>
                                </div>
                                <div class="card-body">
                                    <table class="table table-default">
                                        <thead>
                                            <tr>
                                                <th>Client Name</th>
                                                <th>Rating</th>
                                                <th>Comments</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Joshua Samson</td>
                                                <td>Really cool and awesome!</td>
                                                <td>4.5 stars</td>
                                            </tr>
                                        </tbody> 
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>


    </div>
</div>
                    <!-- <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header bg-info">
                                    <h5>Ratings</h5>
                                </div>
                                <div class="card-body" style="overflow: scroll; height: 250px;">
                                    <table class="table table-default">
                                        <thead>   
                                            <tr>
                                                <td><label>Client1</label></label></td>
                                                <td>
                                                    <fieldset class="rating">  
                                                        <input type="radio" id="star5" name="rating" value="5" />
                                                        <label class = "full" for="star5" title="5 stars"></label></label>
                                                        <input type="radio" id="star4" name="rating" value="4" />
                                                        <label class = "full" for="star4" title="4 stars"></label></label>
                                                        <input type="radio" id="star3" name="rating" value="3" />
                                                        <label class = "full" for="star3" title="3 stars"></label></label>
                                                        <input type="radio" id="star2" name="rating" value="2" />
                                                        <label class = "full" for="star2" title="2 stars"></label></label>
                                                        <input type="radio" id="star1" name="rating" value="1" />
                                                        <label class = "full" for="star1" title="1 star"></label></label>
                                                    </fieldset>
                                                </td>  
                                            </tr>          
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header bg-info">
                                    <h5>Ratings</h5>
                                </div>
                                <div class="card-body">
                                    <table class="table table-default">
                                        <thead>   
                                            <tr>
                                                <td><label>Client1</label></label></td>
                                                <td>
                                                    <fieldset class="rating">  
                                                        <input type="radio" id="star5" name="rating" value="5" />
                                                        <label class = "full" for="star5" title="5 stars"></label></label>
                                                        <input type="radio" id="star4" name="rating" value="4" />
                                                        <label class = "full" for="star4" title="4 stars"></label></label>
                                                        <input type="radio" id="star3" name="rating" value="3" />
                                                        <label class = "full" for="star3" title="3 stars"></label></label>
                                                        <input type="radio" id="star2" name="rating" value="2" />
                                                        <label class = "full" for="star2" title="2 stars"></label></label>
                                                        <input type="radio" id="star1" name="rating" value="1" />
                                                        <label class = "full" for="star1" title="1 star"></label></label>
                                                    </fieldset>
                                                </td>  
                                            </tr>          
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->


@endsection

@push('modals')
<div class="modal fade" id="show-request-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header align-items-center">
        <h5 class="modal-title client-name" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <dl class="row">
            <dt class="col-sm-3">Client Name</dt>
            <dd class="col-sm-9 client-name"></dd>
            <dt class="col-sm-3">Address</dt>
            <dd class="col-sm-9 client-address"></dd>
            <dt class="col-sm-3">Notes</dt>
            <dd class="col-sm-9 client-notes"></dd>
            <dt class="col-sm-3">Contact</dt>
            <dd class="col-sm-9 client-contact"></dd>
            <dt class="col-sm-3">Diagnosis</dt>
            <dd class="col-sm-9 client-diagnosis"></dd>
        </dl>
      </div>
      <div class="modal-footer d-block">
          <div class="row">
              <div class="col-6 text-left">
                <button type="button" class="btn btn-success">Approve</button>
                <button type="button" class="btn btn-warning">Cancel</button>
              </div>
              <div class="col-6 text-right">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>
@endpush

@push('scripts')
<script>
    $(document).ready(function() {
        
        $('#show-request-modal').on('show.bs.modal', function(e) {
            var details = $(e.relatedTarget).data('booking-details');
            console.log(details)
            $('#show-request-modal .client-name').text(details.client.full_name)
            $('#show-request-modal .client-address').text(details.booking_details.user_address)
            $('#show-request-modal .client-notes').text(details.booking_details.notes)
            $('#show-request-modal .client-contact').text(details.booking_details.contact)
            $('#show-request-modal .client-diagnosis').text(details.booking_details.diagnosis) 
        })
    })
</script>
@endpush

