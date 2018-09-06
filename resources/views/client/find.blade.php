@extends('layouts.cli')

@section('page-section')


<div class="container">
	<div class="row ">
	  <div class="col-md-12 text-left">
		<ul class="list-inline ">
		    <a href="#"><li class="list-inline-item"><h3><i class="fa fa-mobile fa-2x"></i> Find Therapist</h3></li></a>
		    <a href="#"><li class="list-inline-item"><h3> History</h3></li></a>
		    <a href="#"><li class="list-inline-item"><h3><i class="fa fa-user"></i> My Account</h3></li></a>
		    <a href="#"><li class="list-inline-item">
				<form class="form-inline" action="#">
			        <input class="form-control mr-sm-2" type="text" placeholder="Search Therapist">
			        <button class="btn btn-success" type="submit"><i class="fa fa-search"></i> Search</button>
			     </form>
		    </li></a>
		</ul>
	  </div>
	</div>
</div>



<div class="cta-sektion  border py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-9 col-xs-12">
                <h3><span class="glyphicon glyphicon-cog "></span> <b>Car for sale?</b> Explore Cars like a pro.</h3>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 ">
                <button type="button" class="btn bg-danger twhite">Start Right Now</button>
            </div>
        </div>
    </div>
</div>
<div class="footer  py-5  ">
	<div class="container">
	  <div class="row">
		<div class="col-xs-12 col-sm-6 col-md-3 footer-one">
		    <img src="http://velikorodnov.com/html/autotrader/images/logo.png" alt="Logo" style="width:120px;">
			
		    <p class="pt-4">Cras sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
		    	<div class="social-icons"> 
               <a href="https://www.facebook.com/"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
               <a href="https://twitter.com/"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
	            <a href="https://plus.google.com/"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
	            <a href="mailto:bootsnipp@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
	        </div>	
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3 footer-two">
		    <h5>Information </h5>
		    <ul class="list-unstyled">
									<li><a href="maintenance.html">Maintenance Tips</a></li>
									<li><a href="contact.html">Locations</a></li>
									<li><a href="about.html">Testimonials</a></li>
									<li><a href="about.html">Careers</a></li>
									<li><a href="about.html">Partners</a></li>
								</ul>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3 footer-three">
		    <h5>Helpful Links </h5>
		    <ul class="list-unstyled">
									<li><a href="maintenance.html">Maintenance Tips</a></li>
									<li><a href="contact.html">Locations</a></li>
									<li><a href="about.html">Testimonials</a></li>
									<li><a href="about.html">Careers</a></li>
									<li><a href="about.html">Partners</a></li>
								</ul>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3 footer-four">
		    <h5>Helpful Links </h5>
		    <ul class="list-unstyled">
									<li><a href="maintenance.html">Maintenance Tips</a></li>
									<li><a href="contact.html">Locations</a></li>
									<li><a href="about.html">Testimonials</a></li>
									<li><a href="about.html">Careers</a></li>
									<li><a href="about.html">Partners</a></li>
								</ul>
		</div>
	  </div>
	</div>
</div>
<div class="copyright bglight1 border pt-2">
    <div class="container">
        <div class="row justify-content-md-center">
            <p> © 2018 xyz Software Pvt. Ltd. </p>
        </div>
    </div>
</div>
@endsection