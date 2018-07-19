<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

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

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#"><img src="img/logo.png" style="height: 50px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link nav-text" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                     <a class="nav-link nav-text" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-text" href="#">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-outline-success" style="margin: 5px;">Heal with theraPeace</button>
                    </li>
                </ul>
                <div class="buttons">
                    <button class="btn btn-outline-info" style="margin: 5px;">Signup</button>
                    <button class="btn btn-outline-secondary" style="margin: 5px;">Login</button>
                </div>
            </div>
        </nav>

        <div class="slider">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox" style="height: 400px">
                  <!-- Slide One - Set the background image for this slide in the line below -->
                  <div class="carousel-item bg-size-cover active" style="background-image: url('{{asset('img/1.jpg')}}')">
 <!--                    <div class="carousel-caption">
                      <h1>Partner with us</h1>
                      <p>This is a description for the first slide.</p>
                    </div> -->
                    <div class="slider-caption">
                        <h1 class="caption">Partner with us</h1>  
                    </div>
                  </div>

                    
                  <!-- Slide Two - Set the background image for this slide in the line below -->
                  <div class="carousel-item" style="background-image: url('{{asset('img/2.jpg')}}')">
<!--                     <div class="carousel-caption">
                      <h1>Second Slide</h1>
                      <p>This is a description for the second slide.</p>
                    </div> -->
                    <div class="slider-caption">
                        <h1 class="caption">Find Clients</h1>  
                    </div>
                  </div>
                  <!-- Slide Three - Set the background image for this slide in the line below -->
                  <div class="carousel-item" style="background-image: url('{{asset('img/3.jpg')}}')">
<!--                     <div class="carousel-caption d-none d-md-block">
                      <h3>Third Slide</h3>
                      <p>This is a description for the third slide.</p>
                    </div> -->
                    <div class="slider-caption">
                        <h1 class="caption">Find the nearest therapist</h1>  
                    </div>
                  </div>
                </div>
   <!--              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a> -->
              </div>
        </div>

        <div class="parallax section-1">
            <center>
                <div class="text-container">
                    <h1 class="texts">What to know before booking?</h1>
                </div>
                
            </center>
        </div>
    </body>
</html>
