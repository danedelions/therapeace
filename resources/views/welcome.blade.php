@extends('layouts.app')
@section('page-welcome')
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
          <div class="slider-caption">
              <h1 class="caption">Partner with us</h1>  
          </div>
        </div>

        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item bg-size-cover" style="background-image: url('{{asset('img/6.jpg')}}')">
          <div class="slider-caption">
              <h1 class="caption">Find Clients</h1>  
          </div>
        </div>

        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('{{asset('img/3.jpg')}}')">
          <div class="slider-caption">
              <h1 class="caption" style="font-size: 50px;">Find the nearest therapist</h1>  
          </div>
        </div>
      </div>
    </div>
  </div>

<div class="row">
  <div class="parallax section-1 col-sm-12 col-md-12 col-lg-12">
    <div class="container">
      <br><br>
            <div class="text-container">
                <center>
                    <h1 class="texts">What to know before booking?</h1>
                </center>
            </div>
        <br>
        <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="description">
                    <article>
                        <div>
                            <div>
                                <center>
                                   <h3>Physical Therapy</h3> 
                                </center>
                            </div>
                            <p class="description">Physical therapy is a medical, hands-on approach to relieving pain and restoring function. Physical therapists are medical experts in musculoskeletal and neurological conditions and work closely with physicians. Our physical therapists evaluate your movement patterns, identify the cause of your pain, and work to eliminate it.</p>
                        </div>
                    </article>
                </div> 
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="description">
                    <article>
                        <div>
                            <div>
                                <center>
                                   <h3>Occupational Therapy</h3> 
                                </center>
                            </div>
                            <p class="description">Occupational therapy practitioners are health professionals who help individuals live as fully and independently as possible. They specialize in helping individuals who are sick, disabled, or developmentally challenged develop the skills they need for everyday life. OT Intervention focuses on occupations that can be as basic as getting dressed and eating or as complex as socializing and holding a job.</p>    
                        </div>
                    </article>
                </div> 
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
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
</div>

  <body>
      <br>
       <div class="container">
           <h3 class="text-center text-uppercase">How theraPeace works</h3>
           <div class="row">
             <div class="col-sm-12 col-md-6 col-lg-3 my-5">
                  <div class="card-body text-center">
                    <img class="text-uppercase mb-5" src="img/pic1.gif" width="220">  
                  </div>
                  <h5>Patients request appointment</h5>

             </div>
             <div class="col-sm-12 col-md-6 col-lg-3 my-5">
                  <div class="card-body text-center">
                    <img class="text-uppercase mb-5" src="img/wi.gif" width="200">
                   <h5>Communicate</h5>
                  </div>
             </div>
             <div class="col-sm-12 col-md-6 col-lg-3 my-5">
                  <div class="card-body text-center">
                    <img class="text-uppercase mb-5" src="img/wa.gif" width="190"> 
                     <h5>Start Session</h5>
                  </div> 
             </div>
             <div class="col-sm-12 col-md-6 col-lg-3 my-5">
                  <div class="card-body text-center">
                    <img class="text-uppercase mb-5" src="img/we.gif" width="190">  
                  </div>
                  <h5>Patients get better</h5>
             </div>
           </div>

       </div>
       <div class="col-sm-12 col-md-6 col-lg-3 my-5">
            <div class="card-body text-center">
              <img class="text-uppercase mb-5"> <img src="img/wi.gif" width="200">
             <h5>Communicate</h5>
            </div>
       </div>
       <div class="col-sm-12 col-md-6 col-lg-3 my-5">
            <div class="card-body text-center">
              <img class="text-uppercase mb-5"><img src="img/wa.gif" width="190"> 
               <h5>Start Session</h5>
            </div> 
       </div>
       <div class="col-sm-12 col-md-6 col-lg-3 my-5">
            <div class="card-body text-center">
              <img class="text-uppercase mb-5"> <img src="img/we.gif" width="190">  
            </div>
            <h5>Patients get better</h5>
       </div>
     </div>
  </div>
</div>

<div class="row">
 <div class="parallax section-1 col-sm-12 col-md-12 col-lg-12">
    <div class="container">
      <br><br>
            <div class="text-container">
                <center>
                    <h1 class="texts">Contact Us!</h1>
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
                                   <h3>Call us</h3>    
                                       <i class="fa fa-phone fa-5x mb-3" aria-hidden="true"></i>
                                             <p>+63917 773 5668</p>
                            </div>
                        </div>
                    </article>
                    </center>
                </div> 
            </div>
            <div class="col-sm-4">
                <div class="description">
                    <article>
                        <div>
                            <div>
                                <center>
                                   <h3>Office Location</h3> 
                                      <i class="fa fa-map-marker fa-5x mb-3" aria-hidden="true"></i>
                                             <address>Talamban Campus, Nasipit, Talamban, Cebu City, Philippines </address>
                                </center>
                            </div>
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
                                   <h3>Email</h3> 
                                    <i class="fa fa-globe fa-5x mb-3" aria-hidden="true"></i>
                                           <p>therapeacemaker@gmail.com</p>
                                </center>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            <div class="container">
              <div class="effect lavinia">
                <div class="buttons"> 
              <center>
                  <a href="https://facebook.com/theraPeace/" class="sqs-block-button-element--small sqs-block-button-element" target="_blank" data-initialized="true"><img src="https://dnjqko642wsuu.cloudfront.net/public/website/social-facebook.png" style="width:50px;"></a>
                  <a href="https://instagram.com/theraPeace/" class="sqs-block-button-element--small sqs-block-button-element" target="_blank" data-initialized="true"><img src="https://dnjqko642wsuu.cloudfront.net/public/website/social-instagram.png" style="width:50px;"></a>
                  <a href="https://twitter.com/theraPeace/" class="sqs-block-button-element--small sqs-block-button-element" target="_blank" data-initialized="true"><img src="https://dnjqko642wsuu.cloudfront.net/public/website/social-twitter.png" style="width:50px;"></a>
              <center>
          </div>
            </div>
               </div>
        </div>
    </div>
 </div>
</div> 
@endsection