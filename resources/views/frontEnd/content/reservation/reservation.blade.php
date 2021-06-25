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

        <h4>Here is the bkash number .... </h4>
        <p>Bkash number:01626769847</p>
        <p>you can cancel your reservation within one day...</p>
        <p>after reserve if you cancel the reservation you can't get refund the money without valid reason</p>
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
                            <input value="{{$checkInDate}}" readonly min="{{date('Y-m-d')}}" required name="checkIn_date" type="date" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Check Out</label>
                            <input value="{{$checkOutDate}}" readonly min="{{date('Y-m-d')}}" required name="checkOut_date" type="date" class="form-control">

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
                            <div class="form-group"> <textarea name="message" placeholder="Enter you Message" type="text" id="" class="form-control"></textarea><span class="form-label">Message</span> </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <small class="text-light">Additional service</small>

                            @foreach ($service as $data)

                            <div class="form-check text-white">

                                <input value="{{$data->id}}" name="service_id" class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    {{ $data->service_type}} ({{ $data->price}}BDT)

                                </label>

                            </div>
                            @endforeach



                        </div>

                        <div class="row">
                            <div class="col-md-6 text-light">
                                <input type="checkbox" name="payment_method" value="bkash">
                                <label for="vehicle1"> <img src="data:image/png;base64,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" style="width:50px; height:50px;" alt="">Bkash</label><br>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group"> <input class="form-control" name="t_id" type="number" placeholder="Enter your transaction id"> <span class="form-label">Transaction-ID</span> </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"> <input class="form-control" name="contact" id="expiry_month" required value="" type="tel" placeholder="Enter you Phone"> <span class="form-label">Phone</span> </div>
                            </div>

                        </div>
                        <div class="form-btn"> <button class="submit-btn">Book Now</button> </div>
                </form>
            </div>

        </div>
    </div>

</div>

@endsection