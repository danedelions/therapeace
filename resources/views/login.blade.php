<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        
        <link rel="icon" href="img/logo.png" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link href="css/full-slider.css" rel="stylesheet">
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/bootstrap.bundle.js"></script>
        <script src="jquery/jquery.min.js"></script>
        <script src="https://unpkg.com/popper.js@1.14.3/dist/umd/popper.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->


        <link rel="stylesheet" type="text/css" href="css/login.css">
        

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    </head>

    <body background="img/bg.jpg" id="batay">
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-6">
                    <div class="form-login">
                        <form class="" action="{{ url('logged') }}" method="POST">
                            {{ csrf_field() }}
                            <h4>Login</h4>
                            <br>
                            <i class="fas fa-user"></i>
                            <label class="label">Username</label>   
                            <input type="text" id="userName" name="username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" placeholder="Username" required/>

                            @if ($errors->has('username'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                            @endif


                            </br>
                            <i class="fas fa-key"></i>
                            <label class="label">Password</label>
                            <input type="password" id="userPassword" name="password" class="form-control input-sm chat-input" placeholder="Password" required/>
                            </br>
                             <label>
                                  <input id="checki" type="checkbox" checked="checked" name="remember"> Remember me
                            </label><br>
                                <span class="psw">Forgot <a href="#">password?</a></span>
                            <div class="wrapper">
                                <span class="group-btn"><br></br>   
                                     <a href="" type="button" class="btn btn-outline-success btn-md">Cancel <i class="fas fa-ban"></i></a>
                                    <button  class="btn btn-outline-success btn-md">Submit <i class="fas fa-sign-in-alt"></i></button>
                                </span>
                             </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </body>
</html>


<!--          <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-md-offset-4">
                        <div class="account-wall">
                            <div id="my-tab-content" class="tab-content">
                                    <div class="tab-pane active">
                                    <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                                alt="">
                                    <form class="form-signin" action="" method="">
                                        <input type="text" class="form-control" placeholder="Username" required autofocus>
                                        <input type="password" class="form-control" placeholder="Password" required>
                                        <input type="submit" class="btn btn-lg btn-default btn-block" value="Sign In"/>
                                    </form>
                                    
                                        
                             </div>
                         </div>
                    </div> --> 
