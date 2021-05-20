
<div class="navbar navbar-dark bg-dark shadow-sm  navbar-expand-lg ">
        <div class=" container-fluid ">
            
            


                  <a class="navbar-brand" href="#">LastLine</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto   ">
                      <li class="nav-item">
                        <a class="nav-link active" href="{{route('home')}}" aria-current="page">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('reservationTable')}}">Reservation</a>
                      </li>
                        <li>
                            @auth()
                            <a href="{{route('userProfile')}}" class="btn btn-info">My Profile</a>  <a class="btn btn-primary" href="{{route('userLogout')}}"> Logout</a>
                        @else
                            <a class="btn btn-primary" href="{{route('login.registration.form')}}">Login / Registration</a>
                        @endauth
                        </li>

                      <li class="nav-item">
                        <a class="nav-link" href="#">Feedback</a>
                      </li>

                    </ul>
                  </div>

        </div>
    </div>
