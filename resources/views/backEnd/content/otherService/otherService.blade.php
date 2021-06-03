@extends('backend.main')
@section('content')

<div style=" background-color: rgb(227, 250, 239);" class="table-responsive  mt-4 p-5 rounded shadow ">

<!-- Button trigger modal -->
 <h2 class="float-start text-dark text-center border-buttom ">List Of Services</h2>
 <button style=" background-color:#BB2D3B  " type="button" class="btn text-white  float-end mt-5 mx-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Add New Service</button>



{{--other service Details table --}}
<table class="table table-hover table-striped table-es-sm table-bordered">
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
     @foreach($otherService as $key=> $request)

        <tr>
            <th scope="row">{{$key+1}}</th>
            <td><img src="{{url('/files/otherService/'.$request->file)}}" style="width:70px; height:60px;" ></td>
            <td>{{$request->service_type}}</td>
            <td>{{$request->service_detail}}</td>
            <td>{{$request->price}}</td>
            
            <td>

            <div class="dropdown">
                <button class="btn btn-sm btn-light dropdown-toggle" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-arrow-down-left-circle"></i>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li>
                        @if ($request->status == 'Published')
                            <a class="btn" href="{{ route('completedUpdate', ['id' => $request->id, 'status' => 'Unpublished']) }}">Make Unpublished</a>
                        @elseif ( $request->status == 'Unpublished')
                            <a class="btn" href="{{ route('completedUpdate', ['id' => $request->id, 'status' => 'Published']) }}">Make Published</a>
                        @else
                            <a class="btn" href="">None</a>
                        @endif
                    </li>

                    <li class="bg-info"><a class="btn" href="{{route('otherServiceEdit', $request->id)}}">Edit</span></a></li>
                    <li class="bg-danger"><a class="btn btn-danger" href="{{route('otherServiceDelete', $request->id)}}">Delete</a></li>



                </ul>
            </div>


        </td>

            <!-- <td>
            <a class="btn btn-success" href="{{route('otherServiceEdit', $request->id)}}"> Edit</a>
                <a class="btn btn-danger" href="{{route('otherServiceDelete', $request->id)}}"> Delete</a>

            </td> -->
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
          
          <button type="submit" class="btn btn-primary" style="margin-right: 385px;">Register</button>
        </div>

    </form>

      </div>
    </div>
  </div>

  @endsection
