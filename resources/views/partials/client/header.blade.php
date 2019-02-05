<nav class="navbar navbar-expand-md bg-white fixed-top">
  <div class="container">    
    <a class="navbar-brand" href="#">
      <img src="{{ asset('img/logo.png') }}" alt="Logo" style="width:130px;">
    </a>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav ml-auto"> <!-- ml-auto (navbar items on the right side)-->
        <li class="active nav-item">
          <a class="nav-link" href="/client-find"><i class="fas fa-search"></i> Find</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="/client-account"><i class="fas fa-user"></i> Account</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Welcome  {{Auth::user()->username}}</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="/client-history"><i class="fas fa-history"></i> History</a>
            <a class="dropdown-item" href="/client-message"><i class="fas fa-envelope"></i> Messages</a>
            <a class="dropdown-item" href="/client-report"><i class="fas fa-file"></i> Report an Abuse</a>
            <a class="dropdown-item" href="{{ url('logout') }}" style="color: red;"><i class="fas fa-sign-out-alt" style="color: red;"></i> Logout</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>