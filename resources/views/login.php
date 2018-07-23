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

        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/bootstrap.bundle.js"></script>
        <script src="jquery/jquery.min.js"></script>
        <script src="https://unpkg.com/popper.js@1.14.3/dist/umd/popper.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <link rel="stylesheet" type="text/css" href="css/login.css">

        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    </head>
    <body background="img/bg.jpg">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#"><img src="img/logo.png" style="height: 50px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href=""class="nav-link nav-text" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                     <a class="nav-link nav-text" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-text" href="#">FAQ</a>
                    </li>
                      <li class="nav-item"> 
                        <a href="/safety" class="nav-link nav-text" >Safety </a>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-outline-success" style="margin: 5px;">Heal with theraPeace</button>
                    </li>
                </ul>
                <div class="buttons">
                    <button class="btn btn-outline-info" style="margin: 5px;">Signup</button>
                    <a href="/login" button class="btn btn-outline-secondary" style="margin: 5px;">Login</button> </a>
                </div>
            </div>
        </nav>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-md-offset-4">
                        <div class="account-wall">
                            <div id="my-tab-content" class="tab-content">
                                    <div class="tab-pane active" id="login">
                                    <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                                alt="">
                                    <form class="form-signin" action="" method="">
                                        <input type="text" class="form-control" placeholder="Username" required autofocus>
                                        <input type="password" class="form-control" placeholder="Password" required>
                                        <input type="submit" class="btn btn-lg btn-default btn-block" value="Sign In"/>
                                    </form>
                                    
                                        
                             </div>
                         </div>
                    </div>
    </body>
</html>
