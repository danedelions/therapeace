<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        
        <link rel="icon" href="img/logo.png" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link href="css/full-slider.css" rel="stylesheet">
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/full-slider.css" rel="stylesheet">
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/client.css">

        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="js/main.js"></script>
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
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Sign Up
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="/client">Client</a>
                          <a class="dropdown-item" href="#">Therapist</a>
                        </div>
                    </div>
                    <a href="/login" button class="btn btn-outline-secondary" style="margin: 5px;">Login</button>
                    </a>
            </div>
        </nav>
        
        <form id="regForm" action="/action_page.php">
            <h1>Client Registration:</h1>
            <!-- One "tab" for each step in the form: -->
            <div class="tab">Name:
                <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
                <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p>
                <p><input placeholder="Email" oninput="this.className = ''" name="email"></p>
                <p><input placeholder="Contact Number" type="number" oninput="this.className = ''" name="number"></p>
            </div>
            <div class="tab">Address:
                <p><input placeholder="Barangay" oninput="this.className = ''" name="barangay"></p>
                <p><input placeholder="Province" oninput="this.className = ''" name="province"></p>
                <p><input placeholder="Town" oninput="this.className = ''" name="town"></p>
                <p><input placeholder="City" oninput="this.className = ''" name="city"></p>
            </div>
            <div class="tab">
                Profile:
                <p><input placeholder="User Name" oninput="this.className = ''" name="uname"></p>
                <p><input placeholder="Password" oninput="this.className = ''" name="password" type="password"></p>
                <p><input placeholder="Re-type Password" oninput="this.className = ''" name="re-password" type="password"></p>
            </div>
            <div class="tab">
                Done:
                <p>
                    Lorem ipsum dolor sit amet, sea harum delenit in. Ut omnis affert mel. Vel ea tantas labores officiis. Ignota noster elaboraret cum ad. No pri munere vocent interpretaris, ei sea mandamus laboramus tincidunt.

                    Cum magna fuisset sadipscing in. Delenit labores quo ea, et est autem minim copiosae. Ea error utroque omnesque nam, facer tincidunt ut est, quis dicant aliquid ut vel. Cum at possim eleifend. Fuisset consetetur cu eum, scripserit persequeris cu vel.

                    Te graeco imperdiet per, pri ea summo voluptatibus. Fierent voluptua pri ea, nam ex causae audire nominati. Eirmod aliquid gloriatur quo ne. Sed ea petentium philosophia, nibh pericula quaerendum vel at. Homero causae persius cum id. At pri natum error, ei vel dicant nostrud scriptorem.

                    Nisl elit epicuri id vis, sea alterum commune deterruisset cu. Ea vel rebum fabulas deseruisse, mei cu nulla minim munere. Offendit placerat iracundia cum id, mea at brute vocent quaeque. Rebum feugait oportere at pro, sit regione persecuti eu, vel explicari accusamus splendide in. Sea at blandit ponderum.

                    Essent accusamus scripserit per ad. Prima iracundia in nam, et qui graece facilis antiopam. Fastidii nominati contentiones duo ea. Has ne corpora albucius voluptaria.
                </p>
                <input type="checkbox" name="box" value="bos" class="float-left">
                <br>
            </div>
            <div style="overflow:auto;">
                <div style="float:right;">
                    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                </div>
            </div>
            <!-- Circles which indicates the steps of the form: -->
            <div style="text-align:center;margin-top:40px;">
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
            </div>
        </form>
    </body>
</html>

<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>