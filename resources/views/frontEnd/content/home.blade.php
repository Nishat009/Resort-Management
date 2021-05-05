@extends('frontEnd.main')
@section('content')



<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner h-50">
    <div class="carousel-item active">
      <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cmVzb3J0fGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="d-block w-100 image" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1582719508461-905c673771fd?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8cmVzb3J0fGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="d-block w-100 image" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1542568190-441f9553ca64?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzF8fHJlc29ydHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="d-block w-100 image" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- for room details -->

    <div class="album py-5 bg-light mt-5">
        <div class="container">

            <div class="text-center">

                <h2 style="color: #3A4256;" >See Our </h2>
                <h3 style="color: #dd7140;" class="mb-5">Luxury Room</h3>
                


            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">



@foreach($roomDetail as $data)

                <div class="col mt-5">
                    <div class="card shadow-sm h-100" style="height:250px;width:270px;">
                        <img style="height:250px;width:269px;"src="{{url('/files/roomDetail/'.$data->file)}}"alt="Room image">
                        <div class="card-body" >
                            <p class="card-text">{{$data->room_type}}</p>
                        
                            <p class="card-text">{{$data->room_detail}}</p>
                        </div>
                        <a href="{{route('roomReservation')}} ">Add Room</a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    
    <!-- for other services -->

    <div class="album py-5 bg-light mt-5">
        <div class="container">

            <div class="text-center">

                <h2 style="color: #3A4256;" >See Our Service That We Provide </h2>
               
                


            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

<!-- for other services -->

@foreach($otherService as $data)

                <div class="col mt-5">
                    <div class="card shadow-sm h-100" style="height:250px;width:270px;">
                        <img style="height:250px;width:269px;"src="{{url('/files/otherService/'.$data->file)}}"alt="Service image">
                        <div class="card-body" >
                            <p class="card-text">{{$data->service_type}}</p>
                        
                            <p class="card-text">{{$data->service_detail}}</p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>

@endsection