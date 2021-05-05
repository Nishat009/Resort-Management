<ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
  <li>
  @auth()
  <a class="btn-btn success"href="{{route('userProfile')}}">Profile</a>
 <span style="color:white;">{{auth()->user()->name}}</span> <a class="btn btn-primary" href="{{route('userLogout')}}"> Logout</a>
   @else 
  <a class="btn btn-primary" href="{{route('login.registration.form')}}">Login / Registration</a>
    @endauth
    </li>
    
</ul>
