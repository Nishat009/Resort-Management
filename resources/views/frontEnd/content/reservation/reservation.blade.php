
@extends('frontend.main')

@section('content')


@if (session()->has('error'))
        <div class="alert alert-danger d-flex justify-content-between">
            {{ session()->get('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
<style>




#booking {
    font-family: 'Raleway', sans-serif
}

.booking-form {
    position: relative;
    max-width: 642px;
    width: 100%;
    margin: auto;
    padding: 40px;
   
    background-image: url('https://images.unsplash.com/photo-1618767689160-da3fb810aad7?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80');
   
    border-radius: 5px;
    z-index: 20
   
}
.booking-form::before {
    content: '';
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    top: 0;
    background: rgba(0, 0, 0, 0.7);
    z-index: -1
}

.booking-form .form-header {
    text-align: center;
    position: relative;
    margin-bottom: 30px
}

.booking-form .form-header h1 {
    font-weight: 700;
    text-transform: capitalize;
    font-size: 42px;
    margin: 0px;
    color: #fff
}

.booking-form .form-group {
    position: relative;
    margin-bottom: 30px
}

.booking-form .form-control {
    background-color: rgba(255, 255, 255, 0.2);
    height: 60px;
    padding: 0px 25px;
    border: none;
    border-radius: 40px;
    color: #fff;
    -webkit-box-shadow: 0px 0px 0px 2px transparent;
    box-shadow: 0px 0px 0px 2px transparent;
    -webkit-transition: 0.2s;
    transition: 0.2s
}

.booking-form .form-control::-webkit-input-placeholder {
    color: rgba(255, 255, 255, 0.5)
}

.booking-form .form-control:-ms-input-placeholder {
    color: rgba(255, 255, 255, 0.5)
}

.booking-form .form-control::placeholder {
    color: rgba(255, 255, 255, 0.5)
}

.booking-form .form-control:focus {
    -webkit-box-shadow: 0px 0px 0px 2px #ff8846;
    box-shadow: 0px 0px 0px 2px #ff8846
}

.booking-form input[type="date"].form-control {
    padding-top: 16px
}

.booking-form input[type="date"].form-control:invalid {
    color: rgba(255, 255, 255, 0.5)
}

.booking-form input[type="date"].form-control+.form-label {
    opacity: 1;
    top: 10px
}

.booking-form select.form-control {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none
}

.booking-form select.form-control:invalid {
    color: rgba(255, 255, 255, 0.5)
}

.booking-form select.form-control+.select-arrow {
    position: absolute;
    right: 15px;
    top: 50%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    width: 32px;
    line-height: 32px;
    height: 32px;
    text-align: center;
    pointer-events: none;
    color: rgba(255, 255, 255, 0.5);
    font-size: 14px
}

.booking-form select.form-control+.select-arrow:after {
    content: '\279C';
    display: block;
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg)
}

.booking-form select.form-control option {
    color: #000
}

.booking-form .form-label {
    position: absolute;
    top: -10px;
    left: 25px;
    opacity: 0;
    color: #ff8846;
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1.3px;
    height: 15px;
    line-height: 15px;
    -webkit-transition: 0.2s all;
    transition: 0.2s all
}

.booking-form .form-group.input-not-empty .form-control {
    padding-top: 16px
}

.booking-form .form-group.input-not-empty .form-label {
    opacity: 1;
    top: 10px
}

.booking-form .submit-btn {
    color: #fff;
    background-color: #e35e0a;
    font-weight: 700;
    height: 60px;
    padding: 10px 30px;
    width: 100%;
    border-radius: 40px;
    border: none;
    text-transform: uppercase;
    font-size: 16px;
    letter-spacing: 1.3px;
    -webkit-transition: 0.2s all;
    transition: 0.2s all
}

.booking-form .submit-btn:hover,
.booking-form .submit-btn:focus {
    opacity: 0.9
}
</style>

<div class="row">
@if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger d-flex justify-content-between">{{ $error }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endforeach
    @endif
<div class="col-md-4">
<h1>Room Type: {{$reserve->room_type}}</h1>
            <p>Price: {{$reserve->price}}BDT</p>
            <p>Max Adult: {{$reserve->adult}}</p>
            <p>Max Children: {{$reserve->children}} </p>
            <p>Details: {{$reserve->room_detail}} </p>
</div>
<div class="col-md-8 ">
            <div class="row">
                <div class="booking-form">
                    <div class="form-header">
                        <h1>Make your reservation</h1>
                    </div>
                    <form method="post" action="{{route('reservation')}}">
                    @csrf
                    <input name="room_id" type="hidden" value="{{$reserve->id}}" class="form-control">
                        <div class="row">
                        <div class="form-group col-md-6">
                    <label for="">Check In</label>
                    <input value="{{$checkInDate}}" min="{{date('Y-m-d')}}" required name="checkIn_date" type="date" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Check Out</label>
                    <input value="{{$checkOutDate}}" min="{{date('Y-m-d')}}" required name="checkOut_date" type="date" class="form-control">
                   
                </div>
                        </div>
                        <div class="row">
                           
                                
                            <div class="col-md-6">
                                <div class="form-group"> <select class="form-control" required name="adult">
                                        <option value="" selected hidden>no of adults</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select> <span class="select-arrow"></span> <span class="form-label">Adults</span> </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"> <select class="form-control" required name="children">
                                        <option value="" selected hidden>no of children</option>
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                    </select> <span class="select-arrow"></span> <span class="form-label">Children</span> </div>
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="col-md-12">
                                <div class="form-group"> <textarea  name="message" placeholder="Enter you Message"  type="text" id="" class="form-control"></textarea><span class="form-label">Message</span> </div>
                            </div>
                        </div>
                        <div class="row">
                              <div class="form-group">
                <small class="text-light">Additional service</small>
                
                @foreach ($service as $data)
               
                    <div class="form-check text-white">
                   
                    <input value="{{$data->id}}" name="service_id" class="form-check-input" type="checkbox" id="gridCheck">
                    <label  class="form-check-label" for="gridCheck">
                       {{ $data->service_type}} ({{ $data->price}}BDT)
                       
                    </label>
                    
                    </div>
                    @endforeach
                    

              
                        </div>
                      
                        <div class="row">
                        <div class="col-md-6 text-light">
                            <input type="checkbox" name="payment_method" value="bkash">
                            <label for="vehicle1"> <img
                                    src="https://media-exp1.licdn.com/dms/image/C510BAQFYQ12drExNfw/company-logo_200_200/0/1567518887113?e=2159024400&v=beta&t=NqOeHA9iax5LN_y6bQmgZx3a2020WUDr_x6JR1rFPIs"
                                    style="width:50px; height:50px;" alt="">Bkash</label><br>
                        </div>
                        <div class="col-md-6 text-light">
                            <input type="checkbox" name="payment_method" value="rocket">
                            <label for="vehicle2"> <img
                                    src="https://media-exp1.licdn.com/dms/image/C510BAQECvetZN5XgCg/company-logo_200_200/0/1519903960228?e=2159024400&v=beta&t=Cu6k6pul90PHjkNEV6Snx7HXi5OhYe1TF_jKxHSdBjc"
                                    style="width:50px; height:50px;" alt="">Rocket</label><br>
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group"> <input class="form-control" name="t_id" type="number"placeholder="Enter your transaction id"> <span class="form-label">Transaction-ID</span> </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"> <input class="form-control"  name="contact" id="expiry_month" required value=""
                                            type="tel"placeholder="Enter you Phone"> <span class="form-label">Phone</span> </div>
                            </div>
                            
                        </div>
                        <div class="form-btn"> <button class="submit-btn">Book Now</button> </div>
                    </form>
                </div> 
            
            </div>
        </div>
   
</div>
            
            @endsection