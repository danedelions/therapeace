@extends('layouts.app')

@section('page-body')
        <div class="slider">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
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
@endsection