@extends('layouts.app')
@section('page-faqs')

<nav class="navbar navbar-expand-lg navbar-light fixed-top" style=" background-color:#f1f1f1;">
    <a class="navbar-brand" href="/"><img src="img/logo.png" style="height: 50px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link nav-text" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-text" href="/faqs">FAQs</a>
            </li>
        </ul>
	</div>

	<div class="collapse navbar-collapse">
    	<ul class="navbar-nav ml-auto">
      		<li class="nav-item dropdown mx-0 mx-lg-1">
      			<div class="dropdown">
		            <a class="nav-link dropdown-toggle py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#" data-toggle="dropdown">
		            How to Register?
		            </a>
		                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			                <a class="dropdown-item" href="#howtoregisterClient">Client</a>
			                <a class="dropdown-item" href="#howtoregisterTherapist">Therapist</a>
		                </div>
		    	</div>
      		</li>

      		<li class="nav-item mx-0 mx-lg-1">
        		<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#faqs">How to Book?</a>
      		</li>

      		<li class="nav-item mx-0 mx-lg-1">
        		<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#faqs">FAQs</a>
      		</li>
    	</ul>
	</div>
</nav>



<!-- Client Registration Section -->

<section id="howtoregisterClient" style="padding-top: 90px;">
    <div class="container">
      	<h2 class="text-center text-uppercase text-secondary mb-0">How to Register?</h2>
      	    <hr class="mb-5">
      	    <h5 class="text-left text-secondary mb-0">Client Registration</h5>
      	    <br>
	    <div class="row">
	        <div class="col-lg-4 mr-auto">
	          	<a class="" href="">
	          		<img src="img/faqs/register/2.png" style="height: 80%;">
	          	</a>
	        </div>
	       	<div class="col-lg-5 ml-auto" style="margin-top: 12%;">
	          	<p class="lead text-secondary" >Click the <b>Sign Up</b> dropdown button and choose the <b>Client</b>. You will be directed to the <i>Client Registration form.</i></p>
	        </div>
	    </div>
	   	<div class="row">
	        <div class="col-lg-4 mr-auto">
	          	<a class="" href="">
	          		<img src="img/faqs/register/3.png" style="height: 70%;">
	          	</a>
	        </div>
	       	<div class="col-lg-4 ml-auto" style="margin-top: 5%;">
	          	<p class="lead text-secondary" >Enter the necessary information needed on the field provided. Proceed to the next tab section by clicking <b>Next</b>.</p>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-lg-4 mr-auto">
	          	<a class="" href="">
	          		<img src="img/faqs/register/4.png" style="height: 70%;">
	          	</a>
	        </div>
	       	<div class="col-lg-4 ml-auto" style="margin-top: 10%;">
	          	<p class="lead text-secondary" >For the location, always make sure to input valid addresses on the field provided. Click <b>Next</b> to proceed on to the next tab section.</p>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-lg-4 mr-auto">
	          	<a class="" href="">
	          		<img src="img/faqs/register/5.png" style="height: 70%;">
	          	</a>
	        </div>
	       	<div class="col-lg-4 ml-auto" style="margin-top: 3%;">
	          	<p class="lead text-secondary" >Your username is unique, make sure to remember it. Do not forget your password and click <b>Next</b> once you're done. You can always go back to the previous tab section by clicking <b>Previous</b>.</p>
	        </div>
	    </div>
	   	<div class="row">
	        <div class="col-lg-4 mr-auto">
	          	<a class="" href="">
	          		<img src="img/faqs/register/6.png" style="height: 70%;">
	          	</a>
	        </div>
	       	<div class="col-lg-4 ml-auto" style="margin-top: 9%;">
	          	<p class="lead text-secondary" >Before clicking <b>Submit</b>, make sure you have read and agreed to our Terms and Conditions by clicking on the <i>checkbox</i> below.</p>
	        </div>
	    </div>
    </div>
</section>

<!-- End of Client Registration Section -->


<!-- Therapist Registration Section -->

<section id="howtoregisterTherapist">
    <div class="container">
      	    <hr class="mb-5">
      	    <h5 class="text-left text-secondary mb-0">Therapist Registration</h5>
      	    <br>
      	<div class="row">
	        <div class="col-lg-4 mr-auto">
	          	<a class="" href="">
	          		<img src="img/faqs/register/a.png" style="height: 80%;">
	          	</a>
	        </div>
	       	<div class="col-lg-5 ml-auto" style="margin-top: 12%;">
	          	<p class="lead text-secondary" >Click the <b>Sign Up</b> dropdown button and choose the <b>Therapist</b>. You will be directed to the <i>Therapist Registration form.</i></p>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-lg-4 mr-auto">
	          	<a class="" href="">
	          		<img src="img/faqs/register/b.png" style="height: 70%;">
	          	</a>
	        </div>
	       	<div class="col-lg-4 ml-auto" style="margin-top: 10%;">
	          	<p class="lead text-secondary" >Enter the necessary information needed on the field provided. Upload the most recent formal photo of you.</p>
	        </div>
	    </div>
	   	<div class="row">
	        <div class="col-lg-4 mr-auto">
	          	<a class="" href="">
	          		<img src="img/faqs/register/c.png" style="height: 70%;">
	          	</a>
	        </div>
	       	<div class="col-lg-4 ml-auto" style="margin-top: 10%;">
	          	<p class="lead text-secondary" >After you have selected a file for profile picture, proceed to the next tab section by clicking <b>Next</b>.</p>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-lg-4 mr-auto">
	          	<a class="" href="">
	          		<img src="img/faqs/register/d.png" style="height: 70%;">
	          	</a>
	        </div>
	       	<div class="col-lg-4 ml-auto" style="margin-top: 9%;">
	          	<p class="lead text-secondary" >For the location, input first the nearest landmark on the field provided. Fill in the blanks the necessary information needed. Click <b>Next</b> to proceed on to the next tab section.</p>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-lg-4 mr-auto">
	          	<a class="" href="">
	          		<img src="img/faqs/register/e.png" style="height: 70%;">
	          	</a>
	        </div>
	       	<div class="col-lg-4 ml-auto" style="margin-top: 13%;">
	          	<p class="lead text-secondary" >For license, make sure to properly input what is asked on the field.</p>
	        </div>
	    </div>
	   	<div class="row">
	        <div class="col-lg-4 mr-auto">
	          	<a class="" href="">
	          		<img src="img/faqs/register/f.png" style="height: 70%;">
	          	</a>
	        </div>
	       	<div class="col-lg-4 ml-auto" style="margin-top: 13%;">
	          	<p class="lead text-secondary" >For clarity and readability, upload scanned files for License, NBI and Barangay Clearance. Then click <b>Next</b>.</p>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-lg-4 mr-auto">
	          	<a class="" href="">
	          		<img src="img/faqs/register/g.png" style="height: 70%;">
	          	</a>
	        </div>
	       	<div class="col-lg-4 ml-auto" style="margin-top: 2%;">
	          	<p class="lead text-secondary" >Your username is unique, make sure to remember it. Do not forget your password and click <b>Next</b> once you're done with the section. You can always go back to the previous tab section by clicking <b>Previous</b>.</p>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-lg-4 mr-auto">
	          	<a class="" href="">
	          		<img src="img/faqs/register/h.png" style="height: 70%;">
	          	</a>
	        </div>
	       	<div class="col-lg-4 ml-auto" style="margin-top: 10%;">
	          	<p class="lead text-secondary" >Before clicking <b>Submit</b>, make sure you have read and agreed to our Terms and Conditions by clicking on the checkbox below.</p>
	        </div>
	    </div>
    </div>
</section>
<!-- End of Therapist Registration Section -->


 <!-- How to Book Section -->
<section class="text-white mb-0" id="faqs" style="padding-top: 90px;">
    <div class="container">
      	<h2 class="text-center text-uppercase text-secondary mb-0">How to Book?</h2>
  		<hr class="mb-5">
  		<div class="row">
    		<div class="col-lg-4 ml-auto">
      			<a class="" href="">
	          		<img src="img/faqs/book/2.png" style="height: 70%;">
	          	</a>
    		</div>
    		<div class="col-lg-4 mr-auto" style="margin-top: 15%;">
      			<p class="lead text-secondary" >Enter your username and password to login then click <b>Submit</b>
   		 	</div>
		</div>
		<div class="row">
    		<div class="col-lg-4 mr-auto">
      			<a class="" href="">
	          		<img src="img/faqs/book/3.png" style="height: 70%;">
	          	</a>
    		</div>
    		<div class="col-lg-4 ml-auto" style="margin-top: 15%;">
      			<p class="lead text-secondary" >After logging in, you will be directed to the Find page wherein you can search the nearby therapist</p>
   		 	</div>
		</div>
		<div class="row">
    		<div class="col-lg-4 mr-auto" >
      			<a class="" href="">
	          		<img src="img/faqs/book/4.png" style="height: 70%;">
	          	</a>
    		</div>
    		<div class="col-lg-4 ml-auto" style="margin-top: 15%;">
      			<p class="lead text-secondary" >Input your location and the map will show the available therapist that are near to your current location. Choose the nearby therapist that fits your special needs. Click the <b>Book</b> button</p>
   		 	</div>
		</div>
		<div class="row">
    		<div class="col-lg-4 mr-auto">
      			<a class="" href="">
	          		<img src="img/faqs/book/5.png" style="height: 70%;">
	          	</a>
    		</div>
    		<div class="col-lg-4 ml-auto" style="margin-top: 15%;">
      			<p class="lead text-secondary" >You will be directed to the <i>Booking Page</i>. Choose and input the necessary information needed in the details. By clicking the <b>Submit</b> button, this will automatically send book request to the therapist.</p>
   		 	</div>
		</div>
		<div class="row">
    		<div class="col-lg-4 mr-auto">
      			<a class="" href="">
	          		<img src="img/faqs/book/6.png" style="height: 70%;">
	          	</a>
    		</div>
    		<div class="col-lg-4 ml-auto" style="margin-top: 10%;">
      			<p class="lead text-secondary" >After booking, you will be redirected to the <i>Find Page.</i> To see the status of your request, click <b>Account</b> button.</p>
   		 	</div>
		</div>
		<div class="row">
    		<div class="col-lg-4 mr-auto">
      			<a class="" href="">
	          		<img src="img/faqs/book/7.png" style="height: 70%;">
	          	</a>
    		</div>
    		<div class="col-lg-4 ml-auto" style="margin-top: 8%;">
      			<p class="lead text-secondary" >You may need to wait for approval or any message from the therapist. For the meantime, you can actually go book another one.</p>
   		 	</div>
		</div>

    </div>
</section>
 <!-- End of How to Book Section -->


<!-- FAQS Section -->
<section id="faqs" style="padding-top: 90px;">
    <div class="container">
	    <h2 class="text-center text-uppercase text-secondary mb-0">FAQs</h2>
	    <hr class="star-dark mb-5">
      	<div class="col">
      		<div class="text-left text-secondary" style="font-style: italic;" >
        		<h6>When are therapy sessions available?</h6>	
                <div>Depending on the location, treatment times depend on the clients' and therapists' agreement. Some locations also offer appointments on Saturday.</div>    
                      
                <hr>
                
                <h6>How long will my therapy sessions last?</h6>
                <div>It depends. The amount of time will be based on your specific needs, and your therapist will discuss this with you.</div>      
                <hr>
                
                <h6>How many sessions will I have?</h6>
                <div>Each patient’s diagnosis is different, as is each individual, your therapist will develop a plan of care that is right for you. Your plan of care and number of visits will be determined during your first visit and explained to you by your physical therapist, the duration and treatment will be modified as needed to achieve maximum results for your situation.</div>          

                <hr>
                
                <h6>How do I pay for therapy services?</h6>
                <div>At the time of your appointment, you will be asked to pay the exact amount that was set during the online transaction.</div>

                <hr>
                
                <h6>Where can I receive the therapy?</h6>
                <div>The therapy will be offered at your desired locations.</div> 
				
				<hr>

                <h6>What is Physical therapy?</h6>
                <div>Physical therapy is a medical, hands-on approach to relieving pain and restoring function. Physical therapists are medical experts in musculoskeletal and neurological conditions and work closely with physicians. Our physical therapists evaluate your movement patterns, identify the cause of your pain, and work to eliminate it.</div>
                
                <hr>
                
                <h6>How do I know if physical therapy will help me?</h6>
                <div>Working with you through our chat feature, you can discuss your options and help determine if physical therapy will be the right choice for you. Book your desired therapist today and get the chance to discuss your current condition and even set up an appointment with the available therapist. </div>
                
                <hr>
                
                <h6>Will it hurt?</h6>
                <div>Physical therapy is not meant to hurt, but to relieve pain. However, as you restore your mobility, pain levels, at times can fluctuate. You might experience some temporary soreness from using muscles that are weakened or recovering. This is a normal response to therapy treatment. Good communication with your therapist will help minimize any discomfort. We want you on your way to quick pain relief and back to normal activities.</div>
                
                <hr>
                
                <h6>What do I wear?</h6>
                <div>Dress comfortably with clothes that allow easy access for the therapist to examine your problem areas. For treatments, loose fitting clothes that are comfortable are optimal.</div>

                <hr>

                <h6>What is Occupational Therapy?</h6>
                <div>Occupational therapy practitioners are health professionals who help individuals live as fully and independently as possible. They specialize in helping individuals who are sick, disabled, or developmentally challenged develop the skills they need for everyday life. OT Intervention focuses on occupations that can be as basic as getting dressed and eating or as complex as socializing and holding a job.</div>    
      		</div>
      	</div>
    </div>
</section>
<!-- End of FAQS Section -->

@endsection