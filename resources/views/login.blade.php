<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        
        <link rel="icon" href="img/logo.png" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
      
        <script src="js/bootstrap.min.js"></script>
        <script src="jquery/jquery.min.js"></script>
        
    </head>

    <body background="img/bg.jpg" id="batay">
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-2">
                    <div class="form-login col-md-12">
                        <form class="form-group" action="{{ route('post:login') }}" method="POST">

                            {{ csrf_field() }}
                            <h4>Login</h4>
                            <hr>    
                            <br>
                            <div class="form-group col-md-12">
                                <i class="fas fa-user"></i>
                                <label class="label">Username</label>   
                                <input type="text" id="userName" name="username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" placeholder="Username" required/>
                            </div>
                            
                            @if($errors->any())
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                            @endif

                            <div class="form-group col-md-12">   
                                <i class="fas fa-key"></i>
                                <label class="label">Password</label>
                                <input type="password" id="userPassword" name="password" class="form-control input-sm chat-input" placeholder="Password" required/>
                            </div>
                            
                            <div class="col-md-12 form-group">   
                                    <span class="psw">Forgot <a href="#">password?</a></span>
                            </div>
                            
                            <div class="col-md-12 form-group wrapper">
                                <span class="group-btn"><br></br>   
                                     <a href="/" class="btn btn-outline-danger btn-md">Cancel <i class="fas fa-ban"></i></a>
                                    <button  class="btn btn-outline-success btn-md">Submit <i class="fas fa-sign-in-alt"></i></button>
                                </span>
                            </div>

                        </form>
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
