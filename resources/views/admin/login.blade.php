@extends('layouts.adlog')

@section('login')
<center><img src="img/therapeace.png" alt="usc" height="200px" width="400px"></center>
  
<div class="container">   
    <div class="login-form">
        <form onsubmit="return checkForm(this);">
            <h2 class="text-center">Admin Portal</h2>       
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Username" name="inputfield">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-block"><a href="#" style="text-decoration: none; color: white">Log in</a></button>
            </div>
            <div class="clearfix">

                <a href="#">Forgot Password?</a>
            </div>        
        </form>
        <!-- <p class="text-center"><a href="#">Create an Account</a></p> -->
    </div>
      
</div>

<div class="footer">
  <p><center>All rights reserve 2019<br>theraPeace.com</center></p>
</div>

@endsection