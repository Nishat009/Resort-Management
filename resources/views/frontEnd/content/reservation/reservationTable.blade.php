@extends('frontend.main')

@section('content')
@if (session()->has('error'))
<div class="alert alert-danger d-flex justify-content-between">
    {{ session()->get('error') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif


<section>


    <div id="printArea">

        <div style=" background-color: rgb(227, 250, 239); " class="table-responsive  mt-4 p-5 mb-5 rounded shadow ">
            <!-- reservation table -->
            <h2 class="float-start text-dark text-center border-buttom ">Reservation Details</h2>


            <table class="table table-hover table-striped table-es-sm table-bordered mb-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">room type</th>
                        <th scope="col">user_name</th>
                        <th scope="col">Check In</th>
                        <th scope="col">Check Out</th>
                        <th scope="col">Adult</th>
                        <th scope="col">Children</th>
                        <th scope="col">t_id</th>
                        <th scope="col">t_phone</th>
                        <th scope="col">pay_method</th>
                        <th scope="col">Price</th>
                        <th scope="col">Message</th>
                        <th scope="col">Additional Service</th>
                        <th scope="col">Payment Status</th>
                        <th scope="col">Booking Status</th>
                        <th scope="col">Action</th>



                    </tr>
                </thead>
                <tbody>
        </div>




        @foreach($reserve as $key=>$request)


        <tr>

            <th scope="row">{{$key+1}}</th>
            <td>{{$request->roomReserve->room_type}}</td>
            <td>{{$request->userReserve->name}}</td>
            <td>{{$request->checkIn_date}}</td>
            <td>{{$request->checkOut_date}}</td>
            <td>{{$request->adult}}</td>
            <td>{{$request->children}}</td>
            <td>{{$request->t_id}}</td>
            <td>{{$request->t_phone}}</td>
            <td>{{$request->payment_method}} </td>
            <td>{{$request->price}}</td>
            <td>{{$request->message}}</td>
            <td>
                @if($request->service_id)
                {{$request->serviceReserve->service_type}}
                @else
                no additional service added
                @endif
            </td>
            <td>{{$request->paid_status}} </td>
            <td>{{$request->status}} </td>
            @if($request->status=='pending')
            <td>
                <a class="btn btn-warning" href="  {{ route('cancelUpdate', $request->id) }}">Request for cancel</a>
            </td>
            @endif





        </tr>
        @endforeach

        </tbody>
        </table>
    </div>
    </div>
    <div class=" float-end">
        <button type="button" onclick="printDiv()" class="btn btn-success mx-3">Print</button>
    </div>


    </div>
</section>




<script type="text/javascript">
    function printDiv() {
        var printContents = document.getElementById("printArea").innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }
</script>

@endsection