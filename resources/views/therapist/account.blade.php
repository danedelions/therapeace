<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Account | Therapist</title>
        
        <link rel="icon" href="img/logo.png" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">


        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link href="css/full-slider.css" rel="stylesheet" type="text/css">
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/bootstrap.bundle.js"></script>
        <script src="jquery/jquery.min.js"></script>
        <script src="https://unpkg.com/popper.js@1.14.3/dist/umd/popper.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       


        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    </head>
    <body id="batay">
            <a class="navbar-brand"><img src="img/logo.png" style="height: 50px;"></a>
            <br><br><br><br>
               </nav> 

     <nav class="navbar navbar-expand-sm  bg-light border">
          <div class="container">
      <button class="navbar-toggler" type="button">
        <span class="navbar-toggler-icon"></span>
      </button>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" href="/client-find"><h3><i class="fas fa-search"></i> Appoint</h3></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/client-history"><h3><i class="fas fa-history"></i> History</h3></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/client-account"><h3><i class="fas fa-user"></i> Account</h3></a>
                </li>
     
        <form class="form-inline" action="#">
            <button class="btn btn-danger" type="submit"><i class="fas fa-sign-out-alt"></i>Logout</button>
        </form>
        </ul>
      </div>
     </div>
    </nav>
    <div class="container-fluid text-center">    
        <div class="row content">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <form action="/action_page.php">
                            <img src="img/di.png" style="height: 95px;" class="form-group"><br>
                                <label for="firstname"><b>First Name</b></label><br>
                                <input type="text" placeholder="Francis" name="fname" class="form-control">
                                <br>
                                <label for="lastname"><b>Last Name</b></label><br>
                                <input type="text" placeholder="Seno" name="lname" class="form-control">
                                <br>
                                <label for="address"><b>Address</b></label><br>
                                <input type="text" placeholder="Nasipit Talamban" name="address" class="form-control">
                                <br>
                                <label for="email"><b>Email</b></label><br>
                                <input type="text" placeholder="franz@yahoo.com" name="email" class="form-control">
                                <br>
                                <label for="contactnumber"><b>Contact Number</b></label><br>
                                <input type="text" placeholder="095894293" name="number" class="form-control">
                                <br>
                            <input type="submit" value="Update" class="btn btn-outline-success">
                        </form>                        
                    </div>               
                </div>
            </div>
            <div class="col-sm-8">
                <div class="row" style="padding-bottom: 1em; padding-left: 1em; padding-right: 1em;">
                    <div class="col-sm-12 text-left" id="amazing"> 
                    <table class="table table-hover table-striped">
                      <thead class="thead-light">
                        <tr>
                          <th><h3>Wants to connect with you</h3></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="card card-outline-secondary">
                            <div class="row">
                                <div class="col-md-2">
                                    <label class="float-right"><i class="fas fa-user-circle fa-4x"></i></label>
                                </div>

                              <div class="col-lg-4"><br>
                                  <label>Tiffany Centillas</label>
                          </div>
                          <div class="col-lg-3"><br>
                              <label class="btn btn-outline-info">View</label>
                              <label class="btn btn-outline-success">Connect</label>
                          </div>
                          </div>
                        </div>
                           
                          </td>
                        </tr>
                        <tr>
                          <td>
                           <div class="card card-outline-secondary">
                            <div class="row">
                                <div class="col-md-2">
                                    <label class="float-right"><i class="fas fa-user-circle fa-4x"></i></label>
                                </div>

                              <div class="col-lg-4"><br>
                                  <label>Jude Nino Canete</label>
                          </div>
                          <div class="col-lg-3"><br>
                              <label class="btn btn-outline-info">View</label>
                              <label class="btn btn-outline-success">Connect</label>
                          </div>
                          </div>
                        </div>
                           
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="card card-outline-secondary">
                            <div class="row">
                                <div class="col-md-2">
                                    <label class="float-right"><i class="fas fa-user-circle fa-4x"></i></label>
                                </div>

                              <div class="col-lg-4"><br>
                                  <label>Daniela Echavez</label>
                          </div>
                          <div class="col-lg-3"><br>
                              <label class="btn btn-outline-info">View</label>
                              <label class="btn btn-outline-success">Connect</label>
                          </div>
                          </div>
                        </div>
                           
                          </td>
                        </tr>
                        <tr>
                          <td>
                           <div class="card card-outline-secondary">
                            <div class="row">
                                <div class="col-md-2">
                                    <label class="float-right"><i class="fas fa-user-circle fa-4x"></i></label>
                                </div>

                              <div class="col-lg-4"><br>
                                  <label>Chino Francis Lopez</label>
                          </div>
                          <div class="col-lg-3"><br>
                              <label class="btn btn-outline-info">View</label>
                              <label class="btn btn-outline-success">Connect</label>
                          </div>
                          </div>
                        </div>
                           
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="card card-outline-secondary">
                            <div class="row">
                                <div class="col-md-2">
                                    <label class="float-right"><i class="fas fa-user-circle fa-4x"></i></label>
                                </div>

                              <div class="col-lg-4"><br>
                                  <label>Godwin Monserate</label>
                          </div>
                          <div class="col-lg-3"><br>
                              <label class="btn btn-outline-info">View</label>
                              <label class="btn btn-outline-success">Connect</label>
                          </div>
                          </div>
                        </div>
                           
                          </td>
                        </tr>
                      </tbody>
                       </table>
                    </div>                    
                </div>
  
                <div class="row" style="padding-bottom: 1em; padding-left: 1em; padding-right: 1em;">
               
                    <div class="col-sm-12 text-left" id="amazing"> 
                      <table class="table table-hover table-striped">
                      <thead class="thead-light">
                        <tr>
                          <th><h3>Ratings</h3></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="card card-outline-secondary">
                            <div class="row">
                                <div class="col-md-2">
                                    <label class="float-right"><i class="fas fa-user-circle fa-4x"></i></label>
                                </div>

                              <div class="col-lg-4"><br>
                                  <label>Ela Abrantes</label>
                          </div>
                          <div class="col-lg-3"><br>
          
                          </div>
                          </div>
                        </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="card card-outline-secondary">
                            <div class="row">
                                <div class="col-md-2">
                                    <label class="float-right"><i class="fas fa-user-circle fa-4x"></i></label>
                                </div>

                              <div class="col-lg-4"><br>
                                  <label>Qeeuuu VAbahug</label>
                          </div>
                          <div class="col-lg-3"><br>
                 
                          </div>
                          </div>
                        </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                             <div class="card card-outline-secondary">
                            <div class="row">
                                <div class="col-md-2">
                                    <label class="float-right"><i class="fas fa-user-circle fa-4x"></i></label>
                                </div>

                              <div class="col-lg-4"><br>
                                  <label>Cza Olindria</label>
                          </div>
                          <div class="col-lg-3"><br>
    
                          </div>
                          </div>
                        </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="card card-outline-secondary">
                            <div class="row">
                                <div class="col-md-2">
                                    <label class="float-right"><i class="fas fa-user-circle fa-4x"></i></label>
                                </div>

                              <div class="col-lg-4"><br>
                                  <label>Kimberly Gipulan</label>
                          </div>
                          <div class="col-lg-3"><br>
                
                          </div>
                          </div>
                        </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="card card-outline-secondary">
                            <div class="row">
                                <div class="col-md-2">
                                    <label class="float-right"><i class="fas fa-user-circle fa-4x"></i></label>
                                </div>

                              <div class="col-lg-4"><br>
                                  <label>Sherrally Labares</label>
                          </div>
                          <div class="col-lg-3"><br>
                         
                          </div>
                          </div>
                        </div>
                          </td>
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
 

</body>
</html>


