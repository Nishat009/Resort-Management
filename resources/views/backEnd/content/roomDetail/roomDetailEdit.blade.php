@extends('backend.main')

@section('content')



<form method="post" action="{{route('roomDetailUpdate', $roomDetail->id)}}" enctype="multipart/form-data">
@csrf
@method('PUT')

            <div class="form-group">
                <label for="exampleInputName"> Service Type</label>
                <input value="{{$roomDetail->room_type}}" name="room_type" type="text" class="form-control" id="exampleInputName" placeholder="Enter Service Name">

            </div>
            <div class="form-group">
                <label for="exampleInputName">Service Details</label>
                <input  value="{{$roomDetail->room_detail}}" name="room_detail" type="text" class="form-control" id="exampleInputName" placeholder="Enter Service Type">

            </div>


        <div class="form-group">
            <label for="exampleInputName">Price</label>
            <input  value="{{$roomDetail->price}}" name="price" type="text" class="form-control" id="exampleInputAddress" placeholder="Enter Price">

        </div>
            
            
            <div class="form-group">
                <label for="exampleInputRePicture">Upload Picture</label>
                <input  value="{{$roomDetail->file}}" name="file" type="file" class="form-control" id="exampleInputRePicture" placeholder="Enter Photo">

            </div>

        </div>
        <div class="form-footer">
          {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
          <button type="submit" class="btn btn-primary" style="margin-left: 385px;">Register</button>
    </div>

    </form>

      
    </div>
  </div>
  @endsection