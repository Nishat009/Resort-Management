@extends('frontEnd.main')
@section('content')


<link href="css/slider.css" rel="stylesheet">

<section class=" text-center fluid-container">


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
<section>
@if (session()->has('error'))
        <div class="alert alert-danger d-flex justify-content-between">
            {{ session()->get('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
<div class="bg-light p-3">
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
    
    <section id="course" class=" text-center border-bottom">


<div  class="album py-5 bg-light">
    <h1 class="fw-bolder text-info pb-3">See Our Service That We Provide</h1>
    <div class="mb-5 pe-5">
        <a href="{{route('viewAllServices')}}" class="btn btn-dark fw-bolder float-end  "> See More Courses  <i class="fas fa-arrow-right"></i></a>
    </div>
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-5">

<!-- for other services -->


@foreach($otherService as $data)
<div class="card-group">
        <div class="card">
        <img class="w-100 h-100" src="{{url('/files/otherService/'.$data->file)}}" class="card-img-top" alt="">
                        
        <div class="card-body">
                        <p class="card-text">Course Title: {{$data->service_type}}</p>
                        <p class="card-text">{{$data->service_detail}}</p>
                        <div class=" d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <small class="text-secodary">{{$data->price}} BDT</small>
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



<!-- review -->


<section>
 @foreach($review as $data)
<Slider  className="container h-100 mt-5">
       
                <div className=" text-center mt-4 mb-4">
                    
                    <h1 className=" text">Name:{{$data->reviewUser->name}}</h1>
                    <p className=" text">Email:{{$data->reviewUser->email}}</p>
                    <p class="card-text">Rate:{{$data->rate}}</p>
                             <p class="card-text">Opinion:{{$data->message}}</p>
                    
                </div>
            
        
    </Slider>
<!-- <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">





                <div class="col mt-5">
                    <div class="card shadow-sm h-100" style="height:250px;width:270px;">
                        <div class="card-body" >
                            <p class="card-text">Name:{{$data->reviewUser->name}}</p>
                            <p class="card-text">Email:{{$data->reviewUser->email}}</p>
                            <p class="card-text">Rate:{{$data->rate}}</p>
                             <p class="card-text">Opinion:{{$data->message}}</p>

                        </div>
                    </div>
                </div> -->
                @endforeach





            <!-- </div>
        </div>
    </div> -->

</section>
@endsection