@extends('frontEnd.main')
@section('content')
@if (session()->has('success'))
        <div class="alert alert-info d-flex justify-content-between">
            {{ session()->get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
<section id="roomDetails" class=" text-center border-bottom">
    <div class="album py-5 bg-light mt-5">
        <div class="fluid-container">

            <div class="text-center">

                <h2 style="color: #3A4256;" >See Our </h2>
                <h3 style="color: #dd7140;" class="mb-5">Luxury Room</h3>
                


            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

           

@foreach($search as $data)

                <div class="col mt-5">
                    <div class="card shadow-sm h-100" style="height:250px;width:270px;">
                        <img style="height:250px;width:269px;"src="{{url('/files/roomDetail/'.$data->file)}}"alt="Room image">
                        <div class="card-body" >
                            <p class="card-text"> Room type: {{$data->room_type}}</p>
                        
                            <p class="card-text">Room Detail: {{$data->room_detail}}</p>
                            <p class="card-text">Price: {{$data->price}}</p>
                        </div>
                       

                        <a class ="btn "style=" background-color: mintcream;border:1px solid black" href="{{route('roomReservation', [$data->id, $checkInDate,$checkOutDate])}} ">Reserve Room</a>
                      
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    </section>
    @endsection