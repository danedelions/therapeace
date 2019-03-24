<nav class="navbar navbar-expand-md bg-white fixed-top">
  <div class="container">    
    <a class="navbar-brand" href="#">
      <img src="{{ asset('img/logo.png') }}" alt="Logo" style="width:130px;">
    </a>
    <div class="navbar-collapse">
      <ul class="nav ml-auto"> <!-- mr-auto =left; ml-auto =right-->
        <li class="nav-item">
          <a class="nav-link" href="/therapist-appoint"><i class="fas fa-search"></i> Appoint</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="/therapist-account"><i class="fas fa-user"></i> Account</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Welcome {{ Auth::user()->username }}</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="/therapist-history"><i class="fas fa-history"></i> History</a>
            <a class="dropdown-item" href="/therapist-message"><i class="fas fa-envelope"></i> Messages</a>
            <a class="dropdown-item" href="/therapist-report"><i class="fas fa-file"></i> Report an Abuse</a>
            <a class="dropdown-item" href="{{ url('logout') }}" style="color: red;"><i class="fas fa-sign-out-alt" style="color: red;"></i> Logout</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>