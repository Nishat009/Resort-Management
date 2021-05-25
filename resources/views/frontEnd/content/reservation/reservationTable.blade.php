@extends('frontend.main')

@section('content')
@if (session()->has('error'))
        <div class="alert alert-danger d-flex justify-content-between">
            {{ session()->get('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
<div id="printArea">

<div  style="background-color: #b4b7b7" class="table-responsive  mt-4 p-5 rounded shadow ">
<!-- reservation table -->
<h2 class="float-start text-light text-center border-buttom ">Reservation Details</h2>

<table class="table my-3 " style="margin-right: 200px;">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">room type</th>
        <th scope="col">user_name</th>
        <th scope="col">Check In</th>
        <th scope="col">Check Out</th>
        <th scope="col">Adult</th>
        <th scope="col">Children</th>
        <th scope="col">Room</th>
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
            <td>{{$request->room}}</td>
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
        
        <div  >
    <button type="button" onclick="printDiv()" class="btn btn-success mx-3 float-end">Print</button>
</div>
</div>
        </div>
        
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