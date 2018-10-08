@extends('layouts.the')

@section('page-section')
@include('modals.therapist')



  <div class="row"> <!--  <div class="row">  --><!-- <div class="col-md-5"> -->
    <div class="col-sm-5 col-md-5 col-lg-5">
      <div class="card">
        <div class="card-header">
          <h5> User Information</h5>
        </div>
        <div class="card-body">
            <div class="form-group">
              <center>
              <form action="#" method="#" enctype="multipart/form-data">
              <center><i class="fas fa-user-circle fa-7x"></i>
                {!! Form::open(array('url'=>'dashboard/edit','method'=>'POST', 'files'=>true)) !!}
                {!! csrf_field() !!}
                 <input type="file" id="itemImage" name="itemImage">
               
                  </center>
              </form>
            </div>
            <div class="form-control-labelgroup row">
              <label class="col-lg-3 col-form-label form-control-label">Username: </label>
                <div class="col-lg-9">
                {{ Auth::user()->username }}
                </div>
            </div>
            <div class="form-group row">
               <label class="col-lg-3 col-form-label form-control-label">First Name:</label>
                <div class="col-lg-9">
                  Name
                </div>
            </div>
            <div class="form-group row">
               <label class="col-lg-3 col-form-label form-control-label">Last Name:</label>
                <div class="col-lg-9">
                  Name
                </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label">Address:</label>
                <div class="col-lg-9">
                  Address
                </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label">Email:</label>
                <div class="col-lg-9">
                  {{ Auth::user()->email }}
                </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label">Contact Number:</label>
                <div class="col-lg-9">
                   contact  
                </div> 
          </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label">Input Speacialties:</label>
                <div class="col-lg-9"><br>
                  
             </div>  
          </div>
          <a  value="Edit Info" class="btn btn-success" href="{{url('/therapist-edit/'. $therapist->id )}}"><i class="far fa-edit"></i>Edit</a>
        </div>
      </div>
    </div>

 {!! Form::close() !!}  
    <div class="col-sm-5 col-md-5 col-lg-7">
      <div class="card">
        <div class="card-header">
          <h5>Client Requests</h5>
        </div>
        <div class="card-body" style="overflow: scroll; height: 200px;">
          <table class="table table-default">
            <thead>
              <tr>
                <td><label>Client1</label> wants to connect with you</td>
                <td>
                  <input type="submit" value="Approved" class="btn btn-success" href="#" data-toggle="modal" data-target="#connectModal">
                  <input type="submit" value="View" class="btn btn-info" href="#" data-toggle="modal" data-target="#viewConnection">
                  <input type="submit" value="Cancel" class="btn btn-danger" >
                </td>
              </tr>
              <tr>
                <td><label>Client2</label> wants to connect with you</td>
                <td>
                  <input type="submit" value="Approved" class="btn btn-success" href="#" data-toggle="modal" data-target="#connectModal">
                  <input type="submit" value="View" class="btn btn-info" href="#" data-toggle="modal" data-target="#viewConnection">
                  <input type="submit" value="Cancel" class="btn btn-danger" >
                </td>
              </tr>
              <tr>
                <td><label>Client3</label> wants to connect with you</td>
                <td>
                  <input type="submit" value="Approved" class="btn btn-success" href="#" data-toggle="modal" data-target="#connectModal">
                  <input type="submit" value="View" class="btn btn-info" href="#" data-toggle="modal" data-target="#viewConnection">
                  <input type="submit" value="Cancel" class="btn btn-danger" >
                </td>
              </tr>
              <tr>
                <td><label>Client4</label> wants to connect with you</td>
                <td>
                  <input type="submit" value="Approved" class="btn btn-success" href="#" data-toggle="modal" data-target="#connectModal">
                  <input type="submit" value="View" class="btn btn-info" href="#" data-toggle="modal" data-target="#viewConnection">
                  <input type="submit" value="Cancel" class="btn btn-danger" >
                </td>
              </tr>   
              <tr>
                <td><label>Client5</label> wants to connect with you</td>
                <td>
                  <input type="submit" value="Approved" class="btn btn-success" href="#" data-toggle="modal" data-target="#connectModal">
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
      <div class="card-header">
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

