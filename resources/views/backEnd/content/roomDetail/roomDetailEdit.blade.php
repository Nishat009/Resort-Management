@extends('backend.main')

@section('content')

<form action="{{route('roomDetailUpdate', $roomDetail->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
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
            <label for="exampleInputName">Adult</label>
            <input  value="{{$roomDetail->adult}}" name="adult" type="text" class="form-control" id="exampleInputAddress" placeholder="Enter Price">

        </div>
        <div class="form-group">
            <label for="exampleInputName">  Children</label>
            <input  value="{{$roomDetail->children}}" name="children" type="text" class="form-control" id="exampleInputAddress" placeholder="Enter Price">

        </div>
            
            
        <div class="form-group">
                    <label class="fw-bolder">Image</label>
                    <br>
                    <img style="width: 150px;" class="mb-2" src="{{ url('/files/roomDetail/' . $roomDetail->roomImage) }}" alt="">
                    <input name="file" type="file" class="form-control" value="{{ $roomDetail['file'] }}"
                        src="" id="">
                </div>
                <br>
                <button type="submit" class="btn btn-success">Submit</button>


            </div>


        </div>
    </form>




  @endsection