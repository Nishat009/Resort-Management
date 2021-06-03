@extends('backend.main')
@section('content')

<div class="dashboard">
<div class="d-flex  justify-content-between flex-wrap flex-md-nowrap align-items-center  border-bottom">
<h1 class="h2">Dashboard</h1>
</div>
<div class="row">
<div class="col-md-4 my-3">
    <div class="card shadow" style="width: 20rem;height:10rem; background-color: rgb(227, 250, 239); font-family: Girassol, cursive; border:1px solid black ">
        <div class="card-body">
            <h5 class="text-center"> <small>Number of Rooms</small></h5>
            <h1 class="text-center">{{$totalRoom}}</h1>
        </div>
    </div>
</div>
<div class="col-md-4 my-3">
    <div class="card shadow" style="width: 20rem;height:10rem; font-family: Girassol, cursive; background-color: rgb(227, 250, 239);border:1px solid black ">
        <div class="card-body">
            <h5 class="text-center"> <small>Total Employee</small> </h5>
            <h1 class="text-center">{{$totalEmployee}}</h1>
        </div>
    </div>
</div>
<div class="col-md-4 my-3">
    <div class="card shadow" style="width: 20rem;height:10rem; font-family: Girassol, cursive; background-color: rgb(227, 250, 239);border:1px solid black ">
        <div class="card-body">
            <h5 class="text-center"> <small>Total Reservation</small> </h5>
            <h1 class="text-center">{{$totalReservation}} </h1>
        </div>
    </div>
</div>

<div class="col-md-4 my-3">
    <div class="card shadow" style="width: 20rem;height:10rem; background-color: rgb(227, 250, 239);border:1px solid black ">
        <div class="card-body">
            <h5 class="text-center"> <small>Total Service</small> </h5>
            <h1 class="text-center">{{$totalService}} </h1>
        </div>
    </div>
</div>
<div class="col-md-4 my-3">
    <div class="card shadow" style="width: 20rem;height:10rem; font-family: Girassol, cursive; background-color: rgb(227, 250, 239);border:1px solid black ">
        <div class="card-body">
            <h5 class="text-center"> <small>Total Image</small> </h5>
            <h1 class="text-center">{{$totalImage}} </h1>
        </div>
    </div>
</div>
<div class="col-md-4 my-3">
    <div class="card shadow" style="width: 20rem;height:10rem; font-family: Girassol, cursive; background-color: rgb(227, 250, 239);border:1px solid black ">
        <div class="card-body">
            <h5 class="text-center"> <small>Total Sale</small> </h5>
            <h1 class="text-center"> BDT</h1>
        </div>
    </div>
</div>

<div class="col-md-4 my-3">
    <div class="card shadow" style="width: 20rem;height:10rem; font-family: Girassol, cursive; background-color: rgb(227, 250, 239);border:1px solid black ">
        <div class="card-body">
            <h5 class="text-center"> <small>Todays's Sale</small> </h5>
            <h1 class="text-center"> BDT</h1>
        </div>
    </div>
</div>

</div>
@endsection
</div>
