@extends('layouts.app')

@section('page-body')

<form id="regForm" action="{{ route('therapist.store') }}" method="POST">
  
  @csrf
  <h1>Therapist Registration:</h1>
  <!-- One "tab" for each step in the form: -->

    <div class="tab">
    <h6>Upload profile picture</h6>
    <form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="image" id="fileToUpload"> 
    <br>
    Name:
    <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
    <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p>
     <p><input placeholder="Email" oninput="this.className = ''" name="email"></p>
    <p><input placeholder="Contact Number" oninput="this.className = ''" name="number"></p>
  </div>
  <div class="tab">Address:
    <p><input placeholder="Barangay" oninput="this.className = ''" name="barangay"></p>
    <p><input placeholder="Province" oninput="this.className = ''" name="province"></p>
    <p><input placeholder="Town" oninput="this.className = ''" name="town"></p>
    <p><input placeholder="City" oninput="this.className = ''" name="city"></p>
  </div>
  <div class="tab" >License:
    <br><br>
  <form class="col-md-4">
    <select select class="form-control select2" name="therapist">
       <option value="pt" style="width:250px">Physical Therapist</option>
      <option value="ot" style="width:250px">Occupational therapy</option>
    </select><br>
    <p><input placeholder="License Number" oninput="this.className = ''" name="license_number" type="number"></p>
    <p><input placeholder="Expriry Date" oninput="this.className = ''" name="expiry_date" type="number"></p>
     <form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="license_image" id="fileUpload2"> 
   <br> <form action="upload.php" method="post" enctype="multipart/3orm-data">
  <input type="file" name="nbi_image" id="fileUpload3"> 
   <br> <form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="bp_image" id="fileUpload4"> 
   <br><br>
 </div>
    <div class="tab">Profile:
    <p><input placeholder="User Name" oninput="this.className = ''" name="username"></p>
    <p><input placeholder="Password" oninput="this.className = ''" name="password" type="password"></p>
    <p><input placeholder="Re-type Password" oninput="this.className = ''" name="re-password" type="password"></p>
  </div>

  <div class="tab">Done:
    <p>Lorem ipsum dolor sit amet, sea harum delenit in. Ut omnis affert mel. Vel ea tantas labores officiis. Ignota noster elaboraret cum ad. No pri munere vocent interpretaris, ei sea mandamus laboramus tincidunt.

Cum magna fuisset sadipscing in. Delenit labores quo ea, et est autem minim copiosae. Ea error utroque omnesque nam, facer tincidunt ut est, quis dicant aliquid ut vel. Cum at possim eleifend. Fuisset consetetur cu eum, scripserit persequeris cu vel.

Te graeco imperdiet per, pri ea summo voluptatibus. Fierent voluptua pri ea, nam ex causae audire nominati. Eirmod aliquid gloriatur quo ne. Sed ea petentium philosophia, nibh pericula quaerendum vel at. Homero causae persius cum id. At pri natum error, ei vel dicant nostrud scriptorem.

Nisl elit epicuri id vis, sea alterum commune deterruisset cu. Ea vel rebum fabulas deseruisse, mei cu nulla minim munere. Offendit placerat iracundia cum id, mea at brute vocent quaeque. Rebum feugait oportere at pro, sit regione persecuti eu, vel explicari accusamus splendide in. Sea at blandit ponderum.

Essent accusamus scripserit per ad. Prima iracundia in nam, et qui graece facilis antiopam. Fastidii nominati contentiones duo ea. Has ne corpora albucius voluptaria.</p>
  <input type="checkbox" name="box" value="bos" class="float-left"><br>
  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
       <button type="submit" id="subBtn" style="display:none">Submit</button>
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
    </form>
</body>
</html>
@endsection