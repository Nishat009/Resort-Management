@extends('backend.main')

@section('content')

@if ($errors->any())
@foreach ($errors->all() as $error)
<div class="alert alert-danger d-flex justify-content-between">{{ $error }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endforeach
@endif
<form action="{{route('employeeUpdate', $employees->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputName">Name</label>
                <input value="{{$employees->name}}" name="name" type="text" class="form-control" id="exampleInputName" placeholder="Enter employee Name">

            </div>
            <div class="form-group">
                <label for="exampleInputName">Working Area</label>
                <input value="{{$employees->workingArea}}" name="workingArea" type="text" class="form-control" id="exampleInputName" placeholder="Enter Working Area">
            </div>

            </select>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input value="{{$employees->email}}" name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Employee Email Address">

            </div>
            <div class="form-group">
                <label for="exampleInputPhone">Contact No.</label>
                <input value="{{$employees->contact}}" name="contact" type="text" class="form-control" id="exampleInputPhone" placeholder="Enter Employee Phone Number">

            </div>

            <div class="form-group">
                <label for="exampleInputAddress">Address</label>
                <input value="{{$employees->address}}" name="address" type="text" class="form-control" id="exampleInputAddress" placeholder="Enter Employee Address">

            </div>


            <div class="form-group">
                <label class="fw-bolder">Image</label>
                <br>
                <img style="width: 150px;" class="mb-2" src="{{ url('/files/employees/' . $employees->employeeImage) }}" alt="">
                <input name="file" type="file" class="form-control" value="{{ $employees['file'] }}" src="" id="">
            </div>


            <br>
            <button type="submit" class="btn btn-success">Submit</button>


        </div>


    </div>
</form>





@endsection