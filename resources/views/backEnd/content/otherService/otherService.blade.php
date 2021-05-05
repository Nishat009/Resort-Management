@extends('backend.main')

@section('content')


<div>
 <!-- Button trigger modal -->
 <button type="button" class="btn btn-primary mt-5 mx-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Add New Service</button>



{{--other service Details table --}}
<table class="table my-3 " style="margin-right: 200px;">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Picture</th>
        <th scope="col">Service Type</th>
        <th scope="col">Service Details</th>
        <th scope="col">Price</th>
        <th scope="col">Action</th>

      </tr>
    </thead>
    <tbody>
    </div>
     @foreach($otherService as $request)

        <tr>
            <th scope="row">1</th>
            <td><img src="{{url('/files/otherService/'.$request->file)}}" style="width:70px; height:60px;" ></td>
            <td>{{$request->service_type}}</td>
            <td>{{$request->service_detail}}</td>
            <td>{{$request->price}}</td>
            
            <td>
            <a class="btn btn-success" href="{{route('otherServiceEdit', $request->id)}}"> Edit</a>
                <a class="btn btn-danger" href="{{route('otherServiceDelete', $request->id)}}"> Delete</a>

            </td>
        </tr>
        @endforeach
        </tbody>
   

        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Add New Service</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form method="post" action="{{route('otherServiceCreate')}}" enctype="multipart/form-data">


@csrf
        <div class="modal-body">
            <div class="form-group">
                <label for="exampleInputName">Service Type</label>
                <input name="service_type" type="text" class="form-control" id="exampleInputName" placeholder="Enter service type">

            </div>
            
            <div class="form-group">
                <label for="exampleInputEmail1">Service Detail</label>
                <input name="service_detail" type="text" class="form-control" id="exampleInputEmail1" placeholder="enter service details">

            </div>
            <div class="form-group">
                <label for="exampleInputPhone">Price</label>
                <input name="price" type="text" class="form-control" id="exampleInputPhone" placeholder="Enter Price">

            </div>

            <div class="form-group">
                <label for="exampleInputRePicture">Upload Picture</label>
                <input name="file" type="file" class="form-control" id="exampleInputRePicture" placeholder="Enter service Picture">

            </div>

        </div>
        <div class="modal-footer">
          {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
          <button type="submit" class="btn btn-primary" style="margin-right: 385px;">Register</button>
        </div>

    </form>

      </div>
    </div>
  </div>

  @endsection;
