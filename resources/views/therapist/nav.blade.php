<nav class="navbar navbar-expand-md bg-white fixed-top">
  <div class="container">    
    <a class="navbar-brand" href="#">
      <img src="img/logo.png" alt="Logo" style="width:130px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="nav-item">
          <a class="nav-link disabled">{{Auth::user()->username}}</a>
        </li>
      </ul>

      <ul class="nav navbar-nav ml-auto"> <!-- ml-auto (navbar items on the right side)-->

        <li class="nav-item active">
          <a class="nav-link" href="/therapist-appoint"><i class="fas fa-search"></i> Appoint</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="/therapist-account"><i class="fas fa-user"></i> Account</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">More</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="/therapist-history"><i class="fas fa-history"></i> History</a>
            <a class="dropdown-item" href="/therapist-message"><i class="fas fa-envelope"></i> Messages</a>
            <a class="dropdown-item" href="/therapist-report"><i class="fas fa-file"></i> Report an Abuse</a>
            <a class="dropdown-item" href="{{url('logout')}}" style="color: red;"><i class="fas fa-sign-out-alt" style="color: red;"></i> Logout</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>