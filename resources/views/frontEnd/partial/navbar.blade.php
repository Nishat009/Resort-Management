

 <div class=" navbar animate-navbar" style=" background-color: mintcream;">
    <header class="d-flex   justify-content-between py-3  ">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <svg class="bi me-2" width="100" height="10" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
      </a>

      <h1 class="  logo-words navbar-brand ms-end"><ion-icon  class="logo-icon" name="home"></ion-icon>LastLine </h1>
      <ul class="nav col-12 col-md-auto mb-2 justify-content-between mb-md-0">
  
        <li ><a href="{{route('home')}}" class="nav-link px-3 link-secondary">Home</a></li>
        <li><a href="{{route('aboutUs')}}" class="nav-link px-3 link-dark">About Us</a></li>
        <li><a href="{{route('seeGallery')}}" class="nav-link px-3 link-dark">Gallery</a></li>
        
        <li><a href="{{route('room')}}" class="nav-link px-3 link-dark">Room</a></li>
        <li><a href="{{route('contact')}}" class="nav-link px-3 link-dark">Contact Us</a></li>
      
        <li>
                            @auth()
                            <li class="nav-item">
                        <a class="nav-link active px-3 text-dark" href="{{route('userProfile')}}" aria-current="page">My Profile</a> </li>
                        <li>
                           <a class="nav-link active px-3 text-dark" href="{{route('userLogout')}}" aria-current="page">Logout</a>
                        </li>
                       
                      
                            <!-- <a href="{{route('userProfile')}}" class="btn butam">My Profile</a>  
                            <a class="btn butam" href="{{route('userLogout')}}"> Logout</a> -->
                        @else
                        <a class="nav-link active px-3  text-dark" href="{{route('login.registration.form')}}" aria-current="page">Login / Registration</a>
                          
                        @endauth
                        </li>

      </ul>

      <!-- <div class="col-md-3 text-end">
        <button type="button" class="btn btn-outline-primary me-2">Login</button>
        <button type="button" class="btn btn-primary">Sign-up</button>
      </div> -->
    </header>
  </div>

