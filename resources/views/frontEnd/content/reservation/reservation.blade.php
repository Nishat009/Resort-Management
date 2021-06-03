
@extends('frontend.main')

@section('content')
<h1> Room</h1>
@if (session()->has('error'))
        <div class="alert alert-danger d-flex justify-content-between">
            {{ session()->get('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
            
            
           
            <h1>{{$reserve->room_type}}</h1>
            <p>{{$reserve->price}}</p>
            <p>{{$reserve->adult}}</p>
            
            <form method="post" action="{{route('reservation')}}" enctype="multipart/form-data" class=" container mt-5 w-50 p-5 border shadow p-3 mb-5 bg-white">
            @csrf
            
            <input name="room_id" type="hidden" value="{{$reserve->id}}" class="form-control">
                <div class="mb-3 ">
                <div class="form-group">
                    <label for="">Check In</label>
                    <input value="{{date('Y-m-d')}}" min="{{date('Y-m-d')}}" required name="checkIn_date" type="date" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Check Out</label>
                    <input value="{{date('Y-m-d')}}" min="{{date('Y-m-d')}}" required name="checkOut_date" type="date" class="form-control">
                   
                </div>
              <br/>
                <div class="form-group">
                    <label class="mr-sm-2" for="inlineFormCustomSelect">Adult</label>
                    <select class="custom-select mr-sm-2" required name="adult" id="inlineFormCustomSelect">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label class="mr-sm-2" for="inlineFormCustomSelect">Children</label>
                    <select class="custom-select mr-sm-2" required name="children" id="inlineFormCustomSelect">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                       
                    </select>
                
                </div>
                <br>
                

                <div class="form-group mt-5">
                    <label for="">message:</label>
                    <textarea  name="message"  type="text" id="" class="form-control"></textarea>
                </div>
                <br>
                <div class="form-group">
                <small>Additional service</small>
                
                @foreach ($service as $data)
               
                    <div class="form-check">
                   
                    <input value="{{$data->id}}" name="service_id" class="form-check-input" type="checkbox" id="gridCheck">
                    <label  class="form-check-label" for="gridCheck">
                       {{ $data->service_type}} ({{ $data->price}}BDT)
                       
                    </label>
                    
                    </div>
                    @endforeach
                    
                </div>

              
            </div>

            <div class="row d-flex my-2 ml-2">
                        <div class="col-md-6">
                            <input type="checkbox" name="payment_method" value="bkash">
                            <label for="vehicle1"> <img
                                    src="https://media-exp1.licdn.com/dms/image/C510BAQFYQ12drExNfw/company-logo_200_200/0/1567518887113?e=2159024400&v=beta&t=NqOeHA9iax5LN_y6bQmgZx3a2020WUDr_x6JR1rFPIs"
                                    style="width:50px; height:50px;" alt="">Bkash</label><br>
                        </div>

                        <div class="col-md-6">
                            <input type="checkbox" name="payment_method" value="rocket">
                            <label for="vehicle2"> <img
                                    src="https://media-exp1.licdn.com/dms/image/C510BAQECvetZN5XgCg/company-logo_200_200/0/1519903960228?e=2159024400&v=beta&t=Cu6k6pul90PHjkNEV6Snx7HXi5OhYe1TF_jKxHSdBjc"
                                    style="width:50px; height:50px;" alt="">Rocket</label><br>
                        </div>
                    </div>

                    <!-- Personal Information -->
                    <div class="payment-widget">
                        <!-- Credit Card Payment -->
                        <div class="payment-list">

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group card-label">
                                        <label for="card_name">Transaction-ID</label>
                                        <input class="form-control"  name="t_id" type="number" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                  
                                </div>

                                <div class="col-md-8 ms-5 mt-3 text-center">
                                    <div class="form-group card-label ms-5 ">
                                        <label for="expiry_month">Phone </label>
                                        <input class="form-control "  name="contact" id="expiry_month" value=""
                                            type="tel" required>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-5">
                    <button type="submit" class="btn btn-primary" >Submit</button>
                </div>

            </form>

            
            @endsection