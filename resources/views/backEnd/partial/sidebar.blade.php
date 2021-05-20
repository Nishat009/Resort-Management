


    <nav id="sidebarMenu"  class="col-md-3 col-lg-2  sidebar ">
    <div class=" pt-3 ">

        <ul class="nav flex-column item-hover ">
        @if (auth()->user()->role == 'admin')
                <li class="nav-item ">
                    <a class="nav-link active text-white" aria-current="page" href="{{route('dashboard')}}">
                        <span data-feather="home"></span>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link active text-white" aria-current="page" href="{{route('seeReservation')}}">
                        <i class="fas fa-list"></i>
                        Reservation
                    </a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link text-white"  href="{{route('roomDetail')}}">
                        <i class="far fa-file-alt"></i>
                        Room Details
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-white" href="{{route('employee')}}">
                        <i class="fas fa-list"></i>
                        Employee Details
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-white" href="{{route('otherService')}}">
                        <i class="far fa-file-alt"></i>
                      Other Services
                    </a>

                </li>
                <li class="nav-item ">
                    <a class="nav-link text-white">
                        <i class="far fa-file-alt"></i>
                      Report
                    </a>

                </li>
               
               
                <li>
          @auth()

      
                <a class="btn btn-danger" href="{{ route('logout') }}"> Logout</a>

            @else
                <a class="btn btn-success" href="{{ route('login') }}">Login</a>

            @endauth
          </li>
          @endif
        </ul>
    </div>
</nav>