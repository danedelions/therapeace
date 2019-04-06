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
                        <h1 class="caption" style="font-size: 50px;">Find the nearest therapist</h1>  
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
            <div class="container">
              <br><br>
                    <div class="text-container">
                        <center>
                            <h1 class="texts">What to know before booking?</h1>
                        </center>
                    </div>
                <br>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="description">
                            <article>
                                <div>
                                    <div>
                                        <center>
                                           <h3>Physical Therapy</h3> 
                                        </center>
                                    </div>
                                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent id augue eget orci dignissim volutpat id non ante. Nullam sodales sem at feugiat aliquet. Sed purus mi, tincidunt in ex rutrum, posuere porttitor risus. Donec vitae odio nec tellus bibendum efficitur. Proin id urna non nulla maximus posuere in sed lacus.</p>  
                                </div>
                            </article>
                        </div> 
                    </div>
                    <div class="col-sm-4">
                        <div class="description">
                            <article>
                                <div>
                                    <div>
                                        <center>
                                           <h3>Occupational Therapy</h3> 
                                        </center>
                                    </div>
                                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent id augue eget orci dignissim volutpat id non ante. Nullam sodales sem at feugiat aliquet. Sed purus mi, tincidunt in ex rutrum, posuere porttitor risus. Donec vitae odio nec tellus bibendum efficitur. Proin id urna non nulla maximus posuere in sed lacus.</p>  
                                </div>
                            </article>
                        </div> 
                    </div>
                    <div class="col-sm-4">
                        <div class="description">
                            <article>
                                <div>
                                    <div>
                                        <center>
                                           <h3>Know Your Diagnosis</h3> 
                                        </center>
                                    </div>
                                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent id augue eget orci dignissim volutpat id non ante. Nullam sodales sem at feugiat aliquet. Sed purus mi, tincidunt in ex rutrum, posuere porttitor risus. Donec vitae odio nec tellus bibendum efficitur. Proin id urna non nulla maximus posuere in sed lacus.</p>  
                                </div>
                            </article>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <body>
    <section id="contact">
      <br>
       <div class="container">
           <h3 class="text-center text-uppercase">contact us</h3>
           <p class="text-center w-75 m-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris interdum purus at sem ornare sodales. Morbi leo nulla, pharetra vel felis nec, ullamcorper condimentum quam.</p>
           <div class="row">
             <div class="col-sm-12 col-md-6 col-lg-3 my-5">
               <div class="card border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-phone fa-5x mb-3" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">call us</h4>
                    <p>+8801683615582,+8801750603409</p>
                  </div>
                </div>
             </div>
             <div class="col-sm-12 col-md-6 col-lg-3 my-5">
               <div class="card border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-map-marker fa-5x mb-3" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">office loaction</h4>
                   <address>Suite 02, Level 12, Sahera Tropical Center </address>
                  </div>
                </div>
             </div>
             <div class="col-sm-12 col-md-6 col-lg-3 my-5">
               <div class="card border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-map-marker fa-5x mb-3" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">office loaction</h4>
                    <address>Suite 02, Level 12, Sahera Tropical Center </address>
                  </div>
                </div>
             </div>
             <div class="col-sm-12 col-md-6 col-lg-3 my-5">
               <div class="card border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-globe fa-5x mb-3" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">email</h4>
                    <p>http://al.a.noman1416@gmail.com</p>
                  </div>
                </div>
             </div>
           </div>
       </div>
    </section>
@endsection