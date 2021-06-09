@extends('backend.main')

@section('content')
<div  style=" background-color: rgb(227, 250, 239);" class="table-responsive  mt-4 p-5 rounded shadow ">
<!-- reservation table -->
<h2 class="float-start text-dark text-center border-buttom  ">Reservation Details</h2>
<table class="table table-hover table-striped table-es-sm table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">user_name</th>
        <th scope="col">Check In</th>
        <th scope="col">Check Out</th>
        <th scope="col">Adult</th>
        <th scope="col">Children</th>
        <th scope="col">t_id</th>
        <th scope="col">pay_method</th>
        <th scope="col">Price</th>
        <th scope="col">Message</th>
        <th scope="col">Additional Service</th>
        <th scope="col">Payment Status</th>
        <th scope="col">Action</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
    </div>
     @foreach($reserve as $key=> $request)

        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$request->userReserve->name}}</td>
            <td>{{$request->checkIn_date}}</td>
            <td>{{$request->checkOut_date}}</td>
            <td>{{$request->adult}}</td>
            <td>{{$request->children}}</td>
            <td>{{$request->t_id}}</td>
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
            <td class="text-center">{{$request->paid_status}}</td>

            <td>

                    <div class="dropdown ">
                        <button class="btn btn-sm btn-light dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-arrow-down-left-circle"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                    
                 @if($request->status=='pending')
                 <li>
                 <a class="btn btn-success" href=" {{ route('completeUpdate', ['id' => $request->id, 'status' => 'confirm']) }}">Confirm</a>
                 </li>
                 <li>
                 <a class="btn btn-danger" href=" {{ route('completeUpdate', ['id' => $request->id, 'status' => 'reject']) }}">Cancel</a>
                 </li>
                 @elseif($request->status=='confirm')
                 <li>
                 <a class="btn btn-success" href="{{route('reservationPaid',['id'=>$request->id,'status'=>'paid'])}}">Paid</a>
                 </li>
                 <li>
                 <a class="btn btn-danger" href="{{route('reservationPaid',['id'=>$request->id,'status'=>'unpaid'])}}">Unpaid</a>
                 </li>
                 @elseif($request->status=='requested for cancel')
                 
                 <li>
                 <a class="btn btn-danger" href=" {{ route('completeUpdate', ['id' => $request->id, 'status' => 'reject']) }}">Cancel request</a>
                 </li>
                 @endif
                 

                        </ul>
                    </div>
            </td>
<td class="text-center">{{$request->status}}</td>
          
            
            
            
        </tr>
        @endforeach
        </tbody>
        </div>
        @endsection