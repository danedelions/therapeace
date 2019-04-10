<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="/"><img src="img/logo.png" style="height: 50px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link nav-text" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-text" href="" data-toggle="modal" data-target="#viewModal">FAQs</a>
                </li>
            </ul>
            <div class="dropdown">
                <button class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Sign Up
                </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="/client">Client</a>
                    <a class="dropdown-item" href="/therapist">Therapist</a>
                    </div>
            </div>                    
        <a href="{{route('login')}}" button class="btn btn-outline-secondary" style="margin: 5px;">Login</button> </a>
    </div>
 </nav>



<!-- Modal -->
<div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Frequently Asked Questions</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body" style="overflow: scroll; height: 550px;"">
                <label style="font: Times New Roman; font-style: italic;">Question 1?</label>
                <div>Lorem ipsum dolor sit amet, posuere elementum a, eleifend at, ipsum a. Ridiculus lorem, ultrices in donec, viverra pede. Vulputate tincidunt, augue commodo diam. Quam lacus. Amet ac dignissim. Massa orci.</div>
                
                <hr>
                
                <label style="font: Times New Roman; font-style: italic;">Question 2?</label>
                <div>Vel massa pellentesque, itaque blandit ut, amet ut. Tellus nonummy.</div>
                
                <hr>
                
                <label style="font: Times New Roman; font-style: italic;">Question 3?</label>
                <div>Ultrices eleifend sapiente, nibh vestibulum. Pede quis. Lorem sapien justo, tempus feugiat, blandit tellus. Mattis metus. Morbi integer massa, tincidunt diam, hac ut.</div>
                
                <hr>
                
                <label style="font: Times New Roman; font-style: italic;">Question 4?</label>
                <div>Felis eu. Iaculis faucibus non. In semper ac, eget nec tincidunt.</div>
                
                <hr>
                
                <label style="font: Times New Roman; font-style: italic;">Question 5?</label>
                <div>Sit sed. Donec wisi. Vestibulum ut, sed condimentum amet, lacus fringilla. Ornare ut tincidunt, etiam a phasellus, sollicitudin eu. Pede sed, diam sit odio, mauris fermentum. Lectus ultricies quis.</div>
                
                <hr>
                
                <label style="font: Times New Roman; font-style: italic;">Question 6?</label>
                <div>In nam, elementum ultricies pretium. Pellentesque nunc maecenas. Id proin vestibulum. Aenean eget velit, ut quam risus, orci ut proin.</div>
                
                <hr>
                
                <label style="font: Times New Roman; font-style: italic;">Question 7?</label>
                <div>Urna in, etiam sit amet, non suspendisse tempor. Lacinia magna feugiat. Diam nam. Augue ac consectetuer, aliquip id. Curabitur facilisis sed, ligula ultricies.</div>
                
                <hr>
                
                <label style="font: Times New Roman; font-style: italic;">Question 8?</label>
                <div>Per consectetuer, felis amet. Nascetur facilisis, porta ultricies, orci morbi. Donec turpis. Dolor vestibulum, sed felis, nisl semper. Quis in.</div>
                
                <hr>
                
                <label style="font: Times New Roman; font-style: italic;">Question 9?</label>
                <div>Malesuada pede lacinia, risus convallis, quis convallis pede. Tellus euismod sapien, facilisi ac. Diam integer mi. Sed ut, quis lectus. Non nunc lacinia. Arcu blandit quis, nullam morbi.</div>
                
                <hr>

                <label style="font: Times New Roman; font-style: italic;">Question 10?</label>
                <div>Penatibus arcu. Volutpat eu, integer etiam. A dapibus, dictumst ornare, lacinia amet wisi. Condimentum in suspendisse. Sapien pellentesque rutrum. Aenean phasellus nunc.</div>            
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- End of Modal -->