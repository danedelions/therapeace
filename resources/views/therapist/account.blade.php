@extends('layouts.the')

@section('page-section')

@include('modals.therapist')

  <div class="row"> <!--  <div class="row">  --><!-- <div class="col-md-5"> -->
    <div class="col-sm-5 col-md-5 col-lg-5">
      <div class="card">
        <div class="card-header bg-info">
          <h5> User Information</h5>
        </div>
        <div class="card-body">
            <div class="form-group">
              <center>
              <form action="#" method="#" enctype="multipart/form-data">
              <center><i class="fas fa-user-circle fa-7x"></i>
                {!! Form::open(array('url'=>'dashboard/edit','method'=>'POST', 'files'=>true)) !!}
                {!! csrf_field() !!}
                 <input type="file" id="itemImage" name="itemImage" class="form-control">
               
                  </center>
              </form>
            </div>
            <div class="form-control-labelgroup row">
              <label class="col-lg-3 col-form-label form-control-label"><b>Username: </b></label>
                <div class="col-lg-9">
                {{ Auth::user()->username }}
                </div>
            </div>
            <div class="form-group row">
               <label class="col-lg-3 col-form-label form-control-label"><b>First Name: </b></label>
                <div class="col-lg-9">
                {{$therapist->fname}}
                </div>
            </div>
            <div class="form-group row">
               <label class="col-lg-3 col-form-label form-control-label"><b>Last Name:</b></label>
                <div class="col-lg-9">
                  {{$therapist->lname}}
                </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label"><b>Address:</b></label>
                <div class="col-lg-9">
                  {{$therapist->address}}
                </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label"><b>Email:</b></label>
                <div class="col-lg-9">
                  {{ Auth::user()->email }}
                </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label"><b>Contact Number:</b></label>
                <div class="col-lg-9">
                   {{$therapist->contact}} 
                </div> 
          </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label"><b>Specialties:</b></label>
                <div class="col-lg-9">
                    <a href="{{url('/therapist-specialty/')}}" class="btn btn-sm btn-outline-info">Add Specialties</a>
                  <br>
             </div>  
          </div>
          <a  value="Edit Info" class="btn btn-success" href="{{url('/therapist-edit/'. $therapist->id )}}"><i class="far fa-edit"></i>Edit</a>
        </div>
      </div>
    </div>

 {!! Form::close() !!}  
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
                <td><label><b>{{$data->name}}</b></label> wants to connect with you</td>
                <td>
                  <input type="submit" value="Approve" class="btn btn-success" href="#" data-toggle="modal" data-target="#connectModal">
                  <input type="submit" value="View" class="btn btn-info" href="#" data-toggle="modal" data-target="#viewConnection">
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
              <td><label>Client1</label></td>
              <td>
                <fieldset class="rating">  
                  <input type="radio" id="star5" name="rating" value="5" />
                    <label class = "full" for="star5" title="5 stars"></label>
                  <input type="radio" id="star4" name="rating" value="4" />
                    <label class = "full" for="star4" title="4 stars"></label>
                  <input type="radio" id="star3" name="rating" value="3" />
                    <label class = "full" for="star3" title="3 stars"></label>
                  <input type="radio" id="star2" name="rating" value="2" />
                    <label class = "full" for="star2" title="2 stars"></label>
                  <input type="radio" id="star1" name="rating" value="1" />
                    <label class = "full" for="star1" title="1 star"></label>
                </fieldset>
              </td>    
            </tr>

            <tr>
              <td><label>Client1</label></td>
              <td>
                <fieldset class="rating">  
                  <input type="radio" id="star5" name="rating" value="5" />
                    <label class = "full" for="star5" title="5 stars"></label>
                  <input type="radio" id="star4" name="rating" value="4" />
                    <label class = "full" for="star4" title="4 stars"></label>
                  <input type="radio" id="star3" name="rating" value="3" />
                    <label class = "full" for="star3" title="3 stars"></label>
                  <input type="radio" id="star2" name="rating" value="2" />
                    <label class = "full" for="star2" title="2 stars"></label>
                  <input type="radio" id="star1" name="rating" value="1" />
                    <label class = "full" for="star1" title="1 star"></label>
                </fieldset>
              </td>  
            </tr>  
            <tr>
              <td><label>Client1</label></td>
              <td>
                <fieldset class="rating">  
                  <input type="radio" id="star5" name="rating" value="5" />
                    <label class = "full" for="star5" title="5 stars"></label>
                  <input type="radio" id="star4" name="rating" value="4" />
                    <label class = "full" for="star4" title="4 stars"></label>
                  <input type="radio" id="star3" name="rating" value="3" />
                    <label class = "full" for="star3" title="3 stars"></label>
                  <input type="radio" id="star2" name="rating" value="2" />
                    <label class = "full" for="star2" title="2 stars"></label>
                  <input type="radio" id="star1" name="rating" value="1" />
                    <label class = "full" for="star1" title="1 star"></label>
                </fieldset>
              </td>  
            </tr>      
            <tr>
              <td><label>Client1</label></td>
              <td>
                <fieldset class="rating">  
                  <input type="radio" id="star5" name="rating" value="5" />
                    <label class = "full" for="star5" title="5 stars"></label>
                  <input type="radio" id="star4" name="rating" value="4" />
                    <label class = "full" for="star4" title="4 stars"></label>
                  <input type="radio" id="star3" name="rating" value="3" />
                    <label class = "full" for="star3" title="3 stars"></label>
                  <input type="radio" id="star2" name="rating" value="2" />
                    <label class = "full" for="star2" title="2 stars"></label>
                  <input type="radio" id="star1" name="rating" value="1" />
                    <label class = "full" for="star1" title="1 star"></label>
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

