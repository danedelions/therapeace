@extends('layouts.app')
@section('page-welcome')

<div class="col-md-10 offset-1">
    <form id="regForm" action="{{ route('client.store') }}" class="form-group" method="POST">
         {{ csrf_field() }}
        <h1>Client Registration</h1>
        <hr><!-- One "tab" for each step information the form: -->
        <div class="tab form-group">
             @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
            </div>
            @endif
            <div class="form-group col-md-12">
                <input placeholder="First name" name="fname" type="text" class="form-control required">
            </div>
            <div class="form-group col-md-12">
                <input placeholder="Last name" name="lname" type="text" class="form-control required">
            </div>
            <div class="form-group col-md-12">
                <input placeholder="Email"  name="email" type="email" class="form-control email required">
            </div>
            <div class="form-group col-md-12">
                <input placeholder="Contact Number" type="text" name="number" class="form-control required">
            </div>
            <div class="form-group col-md-12">
                <select id="gender" class="form-control required" name="gender">
                    <option value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
    </div>

        <div class="tab form-group">Location:
            <div class="form-group col-md-12">
                <input placeholder="City*" name="city" type="text" class="form-control required">
            </div>
            <div class="form-group col-md-12">
                <input placeholder="Province*" name="province" type="text" class="form-control required">
            </div>
            <div class="form-group col-md-12">
                <input placeholder="Street*" name="street" type="text" class="form-control required">
            </div>
            <div class="form-group col-md-12">
                <input placeholder="Village/Barangay" name="brgy" type="text" class="form-control">
            </div>
            <div class="form-group col-md-12">
                <input placeholder="House No./Floor No." name="res_detail" type="text" class="form-control">
            </div>
            <div class="form-group col-md-12">
                <input placeholder="Building" name="building" type="text" class="form-control">
            </div>
            <div class="form-group col-md-12">
                <input placeholder="Landmark" name="landmark" type="text" class="form-control">
            </div>
            <div class="form-group col-md-12">
                <input placeholder="Address Remarks" name="address_remarks" type="text" class="form-control">
            </div>
        </div>

        <div class="tab form-group">Profile:
           <div class="form-group col-md-12">
                <input placeholder="User Name" name="username"  type="text" class="form-control required">
            </div> 
            <div class="form-group col-md-12">
                <input placeholder="Password" name="password" type="password" class="form-control required"  data-confirmed="re-password">
            </div>
            <div class="form-group col-md-12">
                <input placeholder="Retype Password"  name="re-password" type="password" id="myInput" class="form-control required" data-confirmed="password">
            </div>
            <div class="form-group col-md-12">
                <label>
                   <input type="checkbox" style= "width: auto" onclick="myFunction()">Show Password
                </label>
            </div> 
    </div>

        <div id="overflowTest" class="tab form-group">
            <h1>Terms and Conditions </h1>
            <p style="text-align: justify;">
           
                 Welcome to therapeace.com please read these terms carefully. By using the Service (as defined below), 
                 you agree that you have read, understood, accepted and agreed with the Terms of Use. 
                 You further agree to the representations made by yourself below.
                 If you do not agree to or fall within the Terms of Use of the Service and wish to discontinue using the Service, 
                 please do not continue using the Webiste (as defined below) or the Service. In order to use the Service you must agree to the Terms of Use that are set out below
             </p>

            <p>
                 Please note that therapeace.com provides a public service to individual consumers who may access the theraPeace.com website (“Users”) for mental health information,
                 to find a mental health provider. 
            </p>

            <p>
                 1.) No Medical or Physical Therapy Advice

                WE ARE NOT A HEALTH CARE PROVIDER. THE SITE AND SERVICES DO NOT PROVIDE MEDICAL OR THERAPY-RELATED ADVICE AND ARE NOT INTENDED TO BE USED TO DIAGNOSE, SELECT TREATMENT FOR, 
                OR CURE ANY HEALTH CONCERN OR CONDITION. RATHER, THE SITE AND SERVICES ARE TO BE USED ONLY FOR INFORMATIONAL, SCHEDULING AND, IF OFFERED, 
                PAYMENT PURPOSES.  YOU ARE RESPONSIBLE FOR CHOOSING YOUR OWN HEALTHCARE PROVIDER, INCLUDING WITHOUT LIMITATION, DETERMINING WHETHER THE 
                APPLICABLE HEALTHCARE PROVIDER IS SUITABLE FOR YOUR HEALTHCARE NEEDS BASED ON SPECIALTY, EXPERIENCE, QUALIFICATION,
                LICENSES AND OTHER IMPORTANT FACTS AND CIRCUMSTANCES THAT COULD IMPACT YOUR CARE. We do not recommend or endorse any specific 
                treatment, providers, procedures, opinions, or other information that may appear on the Site or through the Services. 
                Any ratings or reviews of providers is user content and does not represent the views of therapeace. 
                If you rely on any content, you do so solely at your own risk. We encourage you to independently confirm any content relevant to you with other sources, including the physical therapist’s office,
                medical associations relevant to the applicable specialty, your state medical or physical therapy boards,
                and the appropriate licensing or certification authorities to verify listed credentials and education.
            </p>
            <p>

                2.) No Physician-Patient or Physical Therapist-Patient Relationship
            </p>
            <p>

                The Services do not establish any physician-patient or physical therapist-patient relationship or supplant an in-person medical or physical therapy consultation or examination.
                Appropriate medical attention and advice should always be sought for any health issues or concerns that you may have, and you should not ignore medical advice or delay seeking medical advice because of the Site or any of the Services. 
                If you have any current medical conditions, you should consult your physician before using the Services. 
                If you feel any ill effects when using the Services, immediately stop using the Services and seek medical advice.
            </p>

            <p>
                3.) Responsibility for Fees
            </p>
             <p>
                        You acknowledge and agree that:

                            you remain responsible for paying all amounts required by law and/or contract (e.g., health plan agreement), including all cost-sharing obligations (such as, but not limited to, copayments, deductibles and other coinsurance obligations);
                            therapeace may process your payment, and may do so in collaboration with our payment processing partner;
            </p>
            <p>
                4.) Limitation of Liability
            </p>
             <p> 
                        WE SHALL NOT BE LIABLE TO YOU OR ANY OTHER PERSON FOR ANY LOSS OR INJURY CAUSED BY USE OR MISUSE OF OUR SITE OR SERVICES. WE SHALL NOT BE LIABLE
                        TO YOU OR ANY OTHER PERSON FOR CONSEQUENTIAL, INCIDENTAL, INDIRECT, SPECIAL OR PUNITIVE DAMAGES OR FOR ANY LOSS OF DATA.
                        WE EXPRESSLY DISCLAIM ANY AND ALL RESPONSIBILITY FOR ANY LIABILITY, LOSS OR RISK WHICH MAY BE OR IS INCURRED AS A CONSEQUENCE,
                        DIRECTLY OR INDIRECTLY, OF ANY USE OF OUR SITE OR SERVICES.
            </p>
            <p>
                5.) Cancellation and Account Termination
            </p>
            <p>
                        We have the right, if we determine it is best, to terminate, suspend and/or deactivate your account immediately, 
                        without notice, if there has been a violation of this Agreement or other policies and terms posted on the Site or through the Services by you or by someone using your credentials.
                        We may also terminate,suspend or deactivate your account for any other reason, including inactivity for an extended period.
            </p>
            <p>
                        You may cancel your account at any time by sending a request to therapeacemaker@gmail.com.  
                        If you would like us to delete your account in its entirety (meaning deleting all of your user data), 
                        please send your request to therapeacemaker@gmail.com.
            </p>
            <p>
                6.) Assignment
            </p>
            <p>
                        This Agreement, as well as your user names and passwords are not assignable or transferable without our prior written consent, 
                        and any such conveyance shall be null and void.
            </p>
            <p>
                7.)Contact
                        Please contact therapeacemaker@gmail.com with any questions regarding this Agreement.
            </p>

            <div>
                <label>
                    <input type="checkbox" style= "width: auto" required />
                </label>I accept the terms and conditions.
            </div> 
        </div>

    <!-- Buttons -->

        <div style="overflow:auto;">
            <div style="float:right;">
                <button class="btn btn-sm-success" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button class="btn btn-sm-success" type="button" id="nextBtn" onclick="nextPrev(1)" data-settings="{!! htmlspecialchars(json_encode(['url' => url('client-validation'), 'url2' => url('client-username-validation'),'method' => 'post', 'token' => csrf_token()])) !!}">Next</button>
                <button href="login" class="btn btn-sm-success" type="submit" id="subBtn" style="display:none">Submit</button>
            </div>
        </div>
          <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
        </div>
    <!-- End of Buttons -->
    </form><!-- End of Form -->
</div>

@endsection