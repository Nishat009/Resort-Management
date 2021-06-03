@extends('backend.main')

@section('content')
<div style=" background-color: rgb(227, 250, 239);" class="table-responsive  mt-4 p-5 rounded shadow ">
<!-- reservation table -->
<h2 class="float-start text-dark text-center border-buttom ">Contact Details</h2>
<table class="table my-3 " style="margin-right: 200px;">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th>
        <th scope="col">Message</th>
        
        
      </tr>
    </thead>
    <tbody>
    </div>
     @foreach($contact as $key=> $request)

        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$request->name}}</td>
            <td>{{$request->email}}</td>
            <td>{{$request->phone}}</td>
            <td>{{$request->address}}</td>
            <td>{{$request->message}}</td>
            
           
            
        </tr>
        @endforeach
        </tbody>
        </div>
        @endsection