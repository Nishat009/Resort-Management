@extends('frontEnd.main')
@section('content')



   <div class="row">
   <div >
            <img style="height:550px;" src= {{asset('image/bg3.jpg')}} class="d-block w-100" alt="...">
            <div class="col-lg-12 col-md-8 mx-auto static">
                    <h1 style=" font-family: Girassol, cursive; color:black; margin-top:40px" class="fw-light fw-bolder "> LastLine</h1>
                   
                    
      <div class="div-date">
        <div id="myDateDisplay" class="date" onload="today()"></div>
     </div>
    
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
                            <label for="from" class="col-sm-2 col-form-label fw-bolder">Date from:</label>
                            <div class="col-sm-10">
                                <input value="{{date('Y-m-d')}}" min="{{date('Y-m-d')}}"  id="from" type="date" class="form-control" name="checkIn_date">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row mb-3">
                            <label for="to" class="col-sm-2 col-form-label fw-bolder">Date to:</label>
                            <div class="col-sm-10">
                                <input value="{{date('Y-m-d')}}" min="{{date('Y-m-d')}}" id="to" type="date" class="form-control" name="checkOut_date">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-2">
                <button type="submit" class=" btn btn-primary text-white fw-bolder">Search</button>
                
            </div>
        </div>
    </form>
</div>
</section>


 


    <!-- for other services -->
    
    <section style=" background-color: mintcream;" class="p-5 text-center border-bottom">


<div style=" background-color: mintcream;">
    <h1 class="pt-5" style=" font-family: 'Playfair Display SC', serif; color:salmon;">See Our Service That We Provide</h1>
    <div class="mb-5 pe-5">
        <a href="{{route('viewAllServices')}}" class="btn fw-bolder float-end" style=" background-color: mintcream;border:1px solid black" >  <i class="fas fa-arrow-right"></i></a>
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


<!-- extra section -->
<section style="height:550px;" class="row d-flex align-items-center w-100 mb-5  ">
        <div class="col-md-5 offset-md-1 mt-5 mb-5">
            <h1 style="color: #3A4256;"><span style="color: #dd7140;">Hi there!!!!!</span>
            <p class="text-secondary fs-5">Welcome to Our Resort</p>
            <p class="text-secondary fs-5">you can book our room according to your preference also add some service if your want. </p>
            <span style="color: #dd7140;">Thank You......</span><br>

           
            <a type="button" class="btn btn-danger" href="{{route('room')}}">Check our room !!!!</a>

        </div>
        <div class="col-md-6 mt-4 ">
            <img src="https://images.unsplash.com/photo-1616064959886-a500e5c38e1e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt=""
                class="img-fluid " />
        </div>

    </section>
<!-- review -->

<section  style=" background-color: mintcream;" class="p-5 text-center border-bottom">


<div style=" background-color: mintcream;">
    <h1  style=" font-family: 'Playfair Display SC', serif; color:salmon;">Our Clients Review</h1>
   
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