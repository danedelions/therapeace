@extends('layouts.the')

@section('page-section')


    <div class="row"> <!--  <div class="row">  --><!-- <div class="col-md-5"> -->
        <div class="col-sm-5 col-md-5 col-lg-5">
            <div class="card">
                <div class="card-header bg-info">
                    <h5> User Information</h5>

                </div>
            <div class="card-body">
                <div class="form-group">
                    <center><i class="fas fa-user-circle fa-7x"></i>
                        <div class="col-lg-8">
                            <h3>{{$therapist->therapist}}</h3>                     
                        </div>
                    </center>
                </div>
                    <div class="form-group row justify-content-center">
                        <label class="col-lg-3"><b>Username</b></label>
                            <div class="col-lg-8">
                                {{ Auth::user()->username }}
                            </div>
                    </div>
                    <div class="form-group row justify-content-center">
                        <label class="col-lg-3"><b>First Name</b></label>
                            <div class="col-lg-8">
                                {{$therapist->fname}}
                            </div>
                    </div>
                    <div class="form-group row justify-content-center">
                        <label class="col-lg-3"><b>Last Name</b></label>
                            <div class="col-lg-8">
                                {{$therapist->lname}}
                            </div>
                    </div>
                    <div class="form-group row justify-content-center">
                        <label class="col-lg-3"><b>Address</b></label>
                            <div class="col-lg-8">
                                {{$therapist->address}}
                            </div>
                    </div>
                    <div class="form-group row justify-content-center">
                        <label class="col-lg-3"><b>Email</b></label>
                            <div class="col-lg-8">
                                {{ Auth::user()->email }}
                            </div>
                    </div>
                    <div class="form-group row justify-content-center">
                        <label class="col-lg-3"><b>Contact Number</b></label>
                            <div class="col-lg-8">
                                {{$therapist->contact}} 
                            </div> 
                    </div>

                    <div class="form-group row justify-content-center">
                        <label class="col-lg-3"><b>Specialties</b></label>
                            <div class="col-lg-8">
                                <a href="{{url('/therapist-specialty/')}}" class="btn btn-sm btn-outline-info">Add Specialties</a>
                            <br>
                            </div>  
                    </div>

                    <div style="display:block; width:x; height:y; text-align:right;">
                        <a href="{{url('/therapist-edit/'. $therapist->id )}}"><i class="far fa-edit"></i> Edit</a>
                    </div>
                {!! Form::close() !!}  
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
                  
                    <tr>
                        <td><label><b></b></label></label> wants to connect with you</td>
                        <td>
                            <input type="submit" value="Approve" class="btn btn-success" href="#" data-toggle="modal" data-target="#connectModal">
                            <input type="submit" value="View" class="btn btn-info" href="#" data-toggle="modal" data-target="#viewConnection">
                            <input type="submit" value="Cancel" class="btn btn-danger" >
                        </td>
                    </tr>
                    
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