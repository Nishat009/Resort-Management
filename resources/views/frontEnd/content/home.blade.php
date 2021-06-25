@extends('frontEnd.main')
@section('content')



<div class="row">
    <div>
        <img style="height:550px;" src={{asset('image/bg3.jpg')}} class="d-block w-100" alt="...">
        <div class="col-lg-12 col-md-8 mx-auto static">
            <h1 style=" font-family: Girassol, cursive; color:black; margin-top:40px" class="fw-light fw-bolder "> LastLine</h1>




        </div>
    </div>


</div>





</div>
<!-- date section -->
<section class="border-bottom" style=" background-color: mintcream; ">
    @if (session()->has('error'))
    <div class="alert alert-danger d-flex justify-content-between">
        {{ session()->get('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class=" p-3">
        <form action="{{ route('searchRoom') }}" method="GET">

            <div class="row mb-3">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row mb-3">
                                <label for="from" class="col-sm-2 col-form-label fw-bolder">Check In date:</label>
                                <div class="col-sm-10">
                                    <input value="{{date('Y-m-d')}}" min="{{date('Y-m-d')}}" id="from" type="date" class="form-control" name="checkIn_date">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row mb-3">
                                <label for="to" class="col-sm-2 col-form-label fw-bolder">Check Out Date:</label>
                                <div class="col-sm-10">
                                    <input value="{{date('Y-m-d')}}" min="{{date('Y-m-d')}}" id="to" type="date" class="form-control" name="checkOut_date">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <button type="submit" class=" btn btn-success text-white fw-bolder">Search</button>

                </div>
            </div>
        </form>
    </div>
</section>




<!-- extra section -->
<section style="height:550px;" class="row d-flex align-items-center w-100 mb-5  ">
    <div class="col-md-5 offset-md-1 mt-5 mb-5">
        <h1 class="logo-words">
            <ion-icon class="logo-icon" name="home"></ion-icon>LastLine
        </h1>

        <p class="text-secondary fs-5">Welcome to Our Resort</p>
        <p class="text-secondary fs-5">you can book our room according to your preference also add some service if your want. </p>
        <span style="color: #dd7140;">Thank You......</span><br>


        <a type="button" class="btn btn-danger" href="{{route('room')}}">Check our room !!!!</a>

    </div>
    <div class="col-md-6 mt-4 ">
        <img src="https://images.unsplash.com/photo-1616064959886-a500e5c38e1e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="" class="img-fluid " />
    </div>

</section>

<!-- for other services -->

<section style=" background-color: mintcream;" class="p-5 text-center border-bottom">


    <div style=" background-color: mintcream;">
        <h1 class="pt-5" style=" font-family: 'Playfair Display SC', serif; color:salmon;">See Our Service That We Provide</h1>
        <div class="mb-5 pe-5">
            <a href="{{route('viewAllServices')}}" class="btn fw-bolder float-end" style=" background-color: mintcream;border:1px solid black"> <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-5">

                <!-- for other services -->


                @foreach($otherService as $data)
                <div class="card-group">
                    <div class="card">
                        <img class="w-100 h-100" src="{{url('/files/otherService/'.$data->file)}}" class="card-img-top" alt="">

                        <div class="card-body">
                            <p class="card-text">Service Name: {{$data->service_type}}</p>
                            <p class="card-text">Service Details:{{$data->service_detail}}</p>
                            <div class=" d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <small class="text-secodary">Service Price{{$data->price}} BDT</small>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    </div>

</section>





<!-- rules -->

<section class="container">
    <div class="row pt-5 pb-5 mt-5 mb-5">
        <div class="col-md-6 slider">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>

                </div>
                <div class="carousel-inner h-50">
                    <div class="carousel-item active">
                        <img style="height:400px " src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cmVzb3J0fGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="d-block w-100 image" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img style="height:400px  " src="https://images.unsplash.com/photo-1582719508461-905c673771fd?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8cmVzb3J0fGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="d-block w-100 image" alt="...">

                    </div>
                    <div class="carousel-item">
                        <img style="height:400px " src="https://images.unsplash.com/photo-1542568190-441f9553ca64?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzF8fHJlc29ydHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="d-block w-100 image" alt="...">

                    </div>
                    <div class="carousel-item">
                        <img style="height:400px " src="https://images.unsplash.com/photo-1496417263034-38ec4f0b665a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=751&q=80" class="d-block w-100 image" alt="...">

                    </div>
                    <div class="carousel-item">
                        <img style="height:400px " src="https://images.unsplash.com/photo-1504754524776-8f4f37790ca0?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="...">

                    </div>
                    <div class="carousel-item">
                        <img style="height:400px " src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" class="d-block w-100 image" alt="...">

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
        </div>

        <div class="col-md-6">
            <div class="card box">
                <div class="card-body">

                    <h1 style="color: #3A4256;"><span style="color: #dd7140;">Hi there!!!!!</span>
                        <h3>Here is some of our rules that you need to follow</h3>
                        <li>our resort will be closed from 9pm-6am</li>
                        <li>you can reserve only one room at a time</li>
                        <li>if you take extra services than that service will be available all the time of your staying.</li>
                        <li>the price of the service will be added with your room price</li>
                        <li>you can cancel reservation within one day</li>
                        <li>you have to pay full amount when you reserve the room</li>
                        <li>you can't get the money back if you cancel the reservation</li>

                        <h3>Thank you</h3>

                </div>
            </div>
        </div>

    </div>
</section>




<!-- review -->

<section style=" background-color: mintcream; padding-top:30px;" class="p-5 text-center border-bottom">


    <div style=" background-color: mintcream;">
        <h1 style=" font-family: 'Playfair Display SC', serif; color:salmon;">Our Clients Review</h1>

        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-5">




                @foreach($review as $data)
                <div class="card-group">
                    <div class="card">
                        <div style=" font-family: Girassol, cursive; color:black;" class="card-body review">
                            <h2 className="text">Name: {{$data->reviewUser->name}}</h2>
                            <p className=" text">Email: {{$data->reviewUser->email}}</p>
                            <p class="card-text">Rate: {{$data->rate}}</p>
                            <p class="card-text">Opinion: {{$data->message}}</p>


                        </div>
                    </div>
                </div>

                @endforeach


            </div>
        </div>
    </div>

</section>

@endsection