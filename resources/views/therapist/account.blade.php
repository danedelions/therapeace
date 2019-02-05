@extends('layouts.the')

@section('page-section')


<div class="row"> <!-- LABEL->col-form-label INPUT-> form-control -->
    <div class="col-sm-5 col-md-5 col-lg-5">
        <div class="card">
            <div class="card-header bg-info">
                <h5> User Information</h5>
            </div>
            <div class="card-body">
                    <center>
                        <img src="storage/{{$therapist->image}}">
                        <br>
                            <div class="col-lg-8"><h4>{{$therapist->therapist}}</h4></div>
                    </center>
                    <hr>    
                    <div class="form-group row">
                        <label class="col-lg-3">Username</label>
                            <div class="col-lg-8">{{ Auth::user()->username }}</div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3">Full Name</label>
                            <div class="col-lg-8">{{$therapist->fullname}}</div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3">Address</label>
                            <div class="col-lg-8">{{$therapist->address}}</div>
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
                        <label class="col-lg-3">Specialties</label>
                            <div class="col-lg-8">
                                <a href="{{url('/therapist-specialty/')}}" class="btn btn-sm btn-outline-info">Add Specialties</a>
                            <br>
                            </div>  
                    </div>
                    <div style="display:block; width:x; height:y; text-align:right;">
                        <a href="{{url('/therapist-edit/'. $therapist->id )}}"><i class="far fa-edit"></i> Edit</a>
                    </div>
            </div>
        </div>
    </div>


    <div class="col-sm-5 col-md-5 col-lg-7">
        <div class="card">
            <div class="card-header bg-info">
                <h5>Client Requests</h5>
            </div>
        <div class="card-body" style="overflow: scroll; height: 200px;">
            <table class="table table-default">
                <thead>
                    @foreach($bookings as $data)
                    <tr>
                        <td><label><b>{{$data->client->fullname}}</b></label></label> wants to connect with you</td>
                        <td>
                            <input type="submit" value="View" class="btn btn-info" href="#" data-toggle="modal" data-target="#viewConnection">
                        </td>
                        <td>
                            {!!Form::open(['url'=>route('therapist.accept', $data->id), 'method'=>'PATCH'])!!}
                            <button class="btn btn-success">Approve</button>
                            {!!Form::close()!!}
                        </td>
                        <td>
                            <input type="submit" value="Cancel" class="btn btn-danger" >
                        </td>
                    </tr>
                    @endforeach
                </thead>
            </table>
        </div>
    </div>


    <br>

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
</div>



@endsection

