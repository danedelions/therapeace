<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('fontawesome/css/all.css') }}">
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('jquery/jquery.min.js') }}"></script>
    </head>

    <body background="img/bg.jpg" id="batay">
        <center>
            <img src="img/therapeace.png" alt="therapeace" height="100px" width="200px">
            <div class="container">
                <div class="form-login col-md-4">
                    <form action="{{ route('post:login') }}" method="POST">
                        {{ csrf_field() }}
                         <legend>Login</legend>
                        <hr>
                        <div id="align" class="form-group">
                            <i class="fas fa-user"></i>
                            <label class="label">Username</label>   
                            <input type="text" id="userName" name="username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" placeholder="Enter your username" value="{{ old('username') }}" required/>
                            @if($errors->has('username'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </div>
                            @endif
                        </div>



                            <div id="align" class="form-group">   
                                 <i class="fas fa-key"></i>
                                <label class="label">Password</label>
                                <input type="password" id="userPassword" name="password" class="form-control input-sm charsetat-input" data-validation-message="Please fill this up"  placeholder="Enter your password" required/>
                            </div>

                        <div class="col-md-12 form-group wrapper">
                            <span class="group-btn"> 
                                 <a href="/" class="btn btn-outline-danger btn-md">Cancel <i class="fas fa-ban"></i></a>
                                <button  class="btn btn-outline-success btn-md">Submit <i class="fas fa-sign-in-alt"></i></button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </center>
    </body>
</html>