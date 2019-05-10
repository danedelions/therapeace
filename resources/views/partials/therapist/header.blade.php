<nav class="navbar navbar-expand-md bg-white fixed-top">
  <div class="container">    
    <a class="navbar-brand">
      <img src="{{ asset('img/logo.png') }}" alt="Logo" style="width:130px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav ml-auto"> <!-- ml-auto (navbar items on the right side)-->
        <li class="nav-item">
          <a class="nav-link" href="/therapist-account"><i class="fas fa-user"></i> Account</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="/therapist-messages"><i class="fas fa-envelope"></i> Messages 
          @if($count)
        <span class="badge badge-pill badge-danger">{{ $count }}</span> 
        @endif
        </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Welcome {{ Auth::user()->username}}</a>
          <div class="dropdown-menu">

            <a class="dropdown-item" href="{{ url('logout') }}" style="color: red;"><i class="fas fa-sign-out-alt" style="color: red;"></i> Logout</a>
          </div>
        </li>
      </ul>
    </div>

  </div>
</nav>