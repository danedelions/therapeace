<!-- START HEADER-->
<header class="header">
    <div class="page-brand">
        <a class="link" href="/admin-user">
            <span class="brand">Thera
                <span class="brand-tip">PEACE</span>
            </span>
            <span class="brand-mini">TP</span>
        </a>
    </div>
    <div class="flexbox flex-1">
        <!-- START TOP-LEFT TOOLBAR-->
        <ul class="nav navbar-toolbar">
            <li>
                <!-- <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a> -->
            </li>
        </ul>
        <!-- END TOP-LEFT TOOLBAR-->
        <!-- START TOP-RIGHT TOOLBAR-->
        <ul class="nav navbar-toolbar"
>                    <!-- <li class="dropdown dropdown-user">
                <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                    <img src="dist/assets/img/admin-avatar.png" />
                    <span></span>Admin<i class="fa fa-angle-down m-l-5"></i></a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <a><h6 class="text-overflow m-0">Welcome !</h6></a>
                    <a class="dropdown-item" href="login.html"><i class="fa fa-power-off"></i>Logout</a>
                </ul>
            </li> -->
            
            <li class="dropdown dropdown-notification">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <i class="fas fa-bell rel">
                        @if($count)
                            <span class="notify-signal"></span>
                        @endif
                    </i>
                </a>
                <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media">
                    <li class="dropdown-menu-header">
                        <div>
                            <span><strong><span style="color: red;">{{ $count ? $count : 0 }}</span>&nbsp;New</strong> Notifications</span>
                        </div>
                    </li>
                    <li class="list-group list-group-divider scroller" data-height="240px" data-color="#71808f">
                        <div style="overflow-y:scroll; height:250px">
                            <a class="list-group-item">
                                <div class="media">
                                    <div class="media-img">
                                        <span class="badge badge-success badge-big"><i class="fa fa-user-plus"></i></span>
                                    </div>
                                    <div class="media-body">
                                        <div class="font-13">You have <span style="color: red;">{{ $newClientCount }}</span> new registered clients</div>
                                    </div>
                                </div>
                            </a>
                            <a class="list-group-item">
                                <div class="media">
                                    <div class="media-img">
                                        <span class="badge badge-success badge-big"><i class="fa fa-user-plus"></i></span>
                                    </div>
                                    <div class="media-body">
                                        <div class="font-13">You have <span style="color: red;">{{ $newTherapistCount }}</span> pending therapists</div>
                                    </div>
                                </div>
                            </a>
                            @foreach($expiredTherapists as $expiredTherapist)
                                <a class="list-group-item">
                                    <div class="media">
                                        <div class="media-img">
                                            <span class="badge badge-success badge-big"><i class="fa fa-user-plus"></i></span>
                                        </div>
                                        <div class="media-body">
                                            <div class="font-13">License of {{ $expiredTherapist->therapist }} <span style="color: red;">{{ $expiredTherapist->fullname }}</span> will expire / has expired on / last <span style="color: red;">{{ $expiredTherapist->expiry_date }}.</span></div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </li>
                </ul>
            </li>
            <li>
                <div>
                    <img src="dist/assets/img/admin-avatar.png" width="35px" />
                </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Welcome  {{Auth::user()->username}}</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ url('logout') }}" style="color: red;"><i class="fas fa-sign-out-alt" style="color: red;"></i> Logout</a>
              </div>
            </li>
        </ul>
        <!-- END TOP-RIGHT TOOLBAR-->
    </div>
</header>
<!-- END HEADER-->