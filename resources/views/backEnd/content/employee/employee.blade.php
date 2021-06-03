@extends('backend.main')

@section('content')

<div style=" background-color: rgb(227, 250, 239);" class="table-responsive  mt-4 p-5 rounded shadow ">

 <!-- Button trigger modal -->
 <h2 class="float-start text-dark text-center border-buttom ">Employee List</h2>
 <button style=" background-color:#BB2D3B" type="button" class="btn text-light mt-5 mx-3 float-end" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Register New Employee</button>



{{-- Employee Details table --}}
<table class="table table-hover table-striped table-es-sm table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Picture</th>
        <th scope="col">Name</th>
        <th scope="col">Working Area</th>
        <th scope="col">Email</th>
        <th scope="col">Contact No.</th>
        <th scope="col">Address</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    </div>
     @foreach($employees as $key=> $request)

        <tr>
            <th scope="row">{{$key+1}}</th>
            <td><img src="{{url('/files/photo/'.$request->file)}}" style="width:70px; height:60px;" ></td>
            <td>{{$request->name}}</td>
            <td>{{$request->workingArea}}</td>
            <td>{{$request->email}}</td>
            <td>{{$request->contact}}</td>
            <td>{{$request->address}}</td>
            
            <td>
            <a class="btn btn-success" href="{{route('employeeEdit', $request->id)}}"> Edit</a>

                <!-- <button type="button" class="btn btn-info text-white">Edit</button> -->
                <a class="btn btn-danger" href="{{route('employeeDelete', $request->id)}}"> Delete</a>

            </td>
            
        </tr>
        @endforeach
        </tbody>
   






  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">employee Register</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form method="post" action="{{route('employeeCreate')}}" enctype="multipart/form-data">


@csrf
        <div class="modal-body">
            <div class="form-group">
                <label for="exampleInputName">Name</label>
                <input name="name" type="text" class="form-control" id="exampleInputName" placeholder="Enter employee Name">

            </div>
            <div class="form-group">
                <label for="exampleInputName">Working Area</label>
                <input name="workingArea" type="text" class="form-control" id="exampleInputName" placeholder="Enter Working Area">

                {{-- <select class="form-select" name="workingArea_id">
                    <option selected>Open this select Area</option>
                    @foreach ($workingArea as $request)
                        <option value="{{ $request->id }}">{{ $request->workingArea }}</option>
                    @endforeach
                </select> --}}

            </div>

                </select>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Employee Email Address">

            </div>
            <div class="form-group">
                <label for="exampleInputPhone">Contact No.</label>
                <input name="contact" type="text" class="form-control" id="exampleInputPhone" placeholder="Enter Employee Phone Number">

            </div>

        <div class="form-group">
            <label for="exampleInputAddress">Address</label>
            <input name="address" type="text" class="form-control" id="exampleInputAddress" placeholder="Enter Employee Address">

        </div>
            
            
            <div class="form-group">
                <label for="exampleInputRePicture">Upload Picture</label>
                <input name="picture" type="file" class="form-control" id="exampleInputRePicture" placeholder="Enter Employee Password Again">

            </div>

        </div>
        <div class="modal-footer">
         
          <button type="submit" class="btn btn-primary" style="margin-right: 385px;">Register</button>
        </div>

    </form>

      </div>
    </div>
  </div>



@endsection
