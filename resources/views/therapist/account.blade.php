@extends('layouts.the')

@section('page-section')
@include('modals.therapist')

  <div class="row"> <!--  <div class="row">  --><!-- <div class="col-md-5"> -->
    <div class="col-sm-5 col-md-5 col-lg-5">
      <div class="card">
        <div class="card-header">
          <h5><a href="/therapist-edit"><i class="far fa-edit"></i> User Information</h5></a>
        </div>
        <div class="card-body">
          <form class="form">
            <div class="form-group">
              <form action="#" method="#" enctype="multipart/form-data">
                  <center><i class="fas fa-user-circle fa-7x"></i>
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <input type="submit" value="Upload Image" name="submit">
                  </center>
              </form>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label">Username</label>
                <div class="col-lg-9">
                  <input class="form-control" type="text" value="{{Auth::user()->username}}">
                </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label">First name</label>
                <div class="col-lg-9">
                  <input class="form-control" type="text" value="Sabrina">
                </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label">Last name</label>
                <div class="col-lg-9">
                  <input class="form-control" type="text" value="Lopez">
                </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label">Address</label>
                <div class="col-lg-9">
                  <input class="form-control" type="text" value="Consolacion">
                </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label">Email</label>
                <div class="col-lg-9">
                  <input class="form-control" type="email" value="therapeace@gmail.com">
                </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label">Contact Number</label>
                <div class="col-lg-9">
                  <input class="form-control" type="text" value="09304254152">
                </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label"></label>
                <div class="col-lg-9">
                  <input type="reset" class="btn btn-secondary" value="Cancel">
                  <a href="{{url('admin/edit')}}"><input type="button" class="btn btn-success" value="Save Edit Info"></a>
                </div>
            </div>
          </form>
        </div>
      </div>
    </div>

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
                  <input type="submit" value="Connect" class="btn btn-success" href="#" data-toggle="modal" data-target="#connectModal">
                  <input type="submit" value="View" class="btn btn-info" href="#" data-toggle="modal" data-target="#viewConnection">
                </td>
              </tr>
              <tr>
                <td><label>Client2</label> wants to connect with you</td>
                <td>
                  <input type="submit" value="Connect" class="btn btn-success" href="#" data-toggle="modal" data-target="#connectModal">
                  <input type="submit" value="View" class="btn btn-info" href="#" data-toggle="modal" data-target="#viewConnection">
                </td>
              </tr>
              <tr>
                <td><label>Client3</label> wants to connect with you</td>
                <td>
                  <input type="submit" value="Connect" class="btn btn-success" href="#" data-toggle="modal" data-target="#connectModal">
                  <input type="submit" value="View" class="btn btn-info" href="#" data-toggle="modal" data-target="#viewConnection">
                </td>
              </tr>
              <tr>
                <td><label>Client4</label> wants to connect with you</td>
                <td>
                  <input type="submit" value="Connect" class="btn btn-success" href="#" data-toggle="modal" data-target="#connectModal">
                  <input type="submit" value="View" class="btn btn-info" href="#" data-toggle="modal" data-target="#viewConnection">
                </td>
              </tr>   
              <tr>
                <td><label>Client5</label> wants to connect with you</td>
                <td>
                  <input type="submit" value="Connect" class="btn btn-success" href="#" data-toggle="modal" data-target="#connectModal">
                  <input type="submit" value="View" class="btn btn-info" href="#" data-toggle="modal" data-target="#viewConnection">
                </td>
              </tr>
            </thead>
          </table>
        </div>
      </div>

      <br>

      <div class="card">
        <div class="card-header">
        <h5>Comments and Ratings</h5>
        </div>
        <div class="card-body" style="overflow: scroll; height: 200px;">
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
                <td>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. Etiam dui sem, fermentum vitae, sagittis id, malesuada in, quam.</p>
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
                <td>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. Etiam dui sem, fermentum vitae, sagittis id, malesuada in, quam.</p>
                </td>   
              </tr>      
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>


@endsection

