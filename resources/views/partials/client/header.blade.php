<nav class="navbar navbar-expand-md bg-white fixed-top">
  <div class="container">    
    <a class="navbar-brand" href="#">
      <img src="{{ asset('img/logo.png') }}" alt="Logo" style="width:130px;">
    </a>
    <div class="navbar-collapse">
      <ul class="nav ml-auto"> <!-- mr-auto =left; ml-auto =right-->
        <li class="nav-item">
          <a class="nav-link" href="/client-find"><i class="fas fa-search"></i> Find</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="/client-account"><i class="fas fa-user"></i> Account</a>
        </li>
        
        <li class="nav-item">

          <a class="nav-link" href="{{url('chat')}}"><i class="fas fa-envelope"></i> Messages</a>

        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Welcome  {{Auth::user()->username}}</a>



          <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ url('logout') }}" style="color: red; "><i class="fas fa-sign-out-alt"></i> Logout</a>

          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>