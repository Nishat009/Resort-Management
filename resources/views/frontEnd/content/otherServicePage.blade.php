@extends('frontend.main')

@section('content')

<section id="course" class="text-center border-bottom">



<div  class="album py-5 bg-light">
    <h1 class="fw-bolder text-info pb-4">See Our Service That We Provide</h1>

    <div class="container">



        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

@foreach($services as $data)

            <div class="col">
                <div class="card shadow rounded h-100 ">
                    <img class="h-50 w-80" src="{{url('/files/otherService/'.$data->file)}}" alt="service image">
                    <div class="card-body">
                        <p class="card-text">Service Name: {{$data->service_type}}</p>
                        <p class="card-text">Details: {{$data->service_detail}}</p>
                        <div class=" d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <small class="text-secodary">৳ {{$data->price}} BDT</small>
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
            @endforeach



        </div>
    </div>
</div>

</section></div>
  @endsection