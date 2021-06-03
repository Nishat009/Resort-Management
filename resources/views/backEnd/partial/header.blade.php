
<div class=" navbar animate-navbar" style=" background-color: rgb(227, 250, 239);">
    <header class="d-flex ms-auto   justify-content-between py-3  ">
   
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <svg class="bi me-2" width="100" height="10" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
      </a>

      
      <ul class="nav col-12 col-md-auto mb-2 justify-content-between mb-md-0">
  
        <li>
        @auth()
            <span style="color:black;" data-feather="user"></span>
            <span style="color:black; margin-right: 30px;">{{ auth()->user()->name }} </span>
            <a class="btn" style=" background-color: mintcream;border:1px solid black" href="{{ route('logout') }}"> Logout</a>
        @else
            <a class="btn " style=" background-color: mintcream;border:1px solid black" href="{{ route('login') }}">Login</a>


        @endauth
        </li>

      </ul>

    </header>
  </div>


