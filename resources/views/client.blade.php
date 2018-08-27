@extends('layouts.app')

@section('page-body')
        
        <link rel="stylesheet" type="text/css" href="css/client.css">
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form id="regForm"action="{{ route('client.store') }}" class="form-group" method="POST">
             {{ csrf_field() }}
            <h1>Client Registration:</h1>
            <!-- One "tab" for each step in the form: -->
            <div class="tab">Name:
                <p><input placeholder="First name..." name="fname" class="form-control" type="text"></p>
                <p><input placeholder="Last name..." name="lname" type="text"></p>
                <p><input placeholder="Email"  name="email" type="email"></p>
                <p><input placeholder="Contact Number" type="number" name="number"></p>
            </div>
            <div class="tab">Address:
                <p><input placeholder="Barangay" oninput="this.className = ''" name="barangay" class="form-control"></p>
                <p><input placeholder="Province" oninput="this.className = ''" name="province" class="form-control"></p>
                <p><input placeholder="Town" oninput="this.className = ''" name="town" class="form-control"></p>
                <p><input placeholder="City" oninput="this.className = ''" name="city" class="form-control"></p>
            </div>
            <div class="tab">
                Profile:
                <p><input placeholder="User Name" oninput="this.className = ''" name="username" class="form-control"></p>
                <p><input placeholder="Password" oninput="this.className = ''" name="password" type="password" class="form-control"></p>
                <p><input placeholder="Retype Password" oninput="this.className = ''" name="password_confirmation" type="password" class="form-control"></p>
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
                    <button class="btn btn-sm-success" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                    <button class="btn btn-sm-success" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
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
@endsection

