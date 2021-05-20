@extends('backend.main')

@section('content')
<div style="background-color: #b4b7b7" class="table-responsive  mt-4 p-5 rounded shadow ">
<!-- reservation table -->
<h2 class="float-start text-light text-center border-buttom ">Reservation Details</h2>
<table class="table my-3 " style="margin-right: 200px;">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">user_name</th>
        <th scope="col">Check In</th>
        <th scope="col">Check Out</th>
        <th scope="col">Adult</th>
        <th scope="col">Children</th>
        <th scope="col">Room</th>
        <th scope="col">Message</th>
        <th scope="col">Additional Service</th>
        <th scope="col">Action</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
    </div>
     @foreach($reserve as $request)

        <tr>
            <th scope="row">1</th>
            <td>{{$request->userReserve->name}}</td>
            <td>{{$request->checkIn_date}}</td>
            <td>{{$request->checkOut_date}}</td>
            <td>{{$request->adult}}</td>
            <td>{{$request->children}}</td>
            <td>{{$request->room}}</td>
            <td>{{$request->message}}</td>
            <td>{{$request->serviceReserve->service_type}}</td>
            <td><a href="{{ route('completedUpdate', ['id' => $request->id, 'status' => 'confirm']) }}">confirm</a>/<a href="{{ route('completedUpdate', ['id' => $request->id, 'status' => 'reject']) }}">reject</a></td>
            <td>{{$request->status}} </td>
            
            
            
        </tr>
        @endforeach
        </tbody>
        </div>
        @endsection