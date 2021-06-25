@extends('backend.main')

@section('content')

<form action="{{route('otherServiceUpdate', $otherService->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputName"> Service Type</label>
                <input value="{{$otherService->service_type}}" name="service_type" type="text" class="form-control" id="exampleInputName" placeholder="Enter Service Name">

            </div>
            <div class="form-group">
                <label for="exampleInputName">Service Details</label>
                <input value="{{$otherService->service_detail}}" name="service_detail" type="text" class="form-control" id="exampleInputName" placeholder="Enter Service Type">

            </div>


            <div class="form-group">
                <label for="exampleInputName">Price</label>
                <input value="{{$otherService->price}}" name="price" type="text" class="form-control" id="exampleInputAddress" placeholder="Enter Price">

            </div>


            <div class="form-group">
                <label class="fw-bolder">Image</label>
                <br>
                <img style="width: 150px;" class="mb-2" src="{{ url('/files/otherService/' . $otherService->serviceImage) }}" alt="">
                <input name="file" type="file" class="form-control" value="{{ $otherService['file'] }}" src="" id="">
            </div>
            <br>
            <button type="submit" class="btn btn-success">Submit</button>


        </div>


    </div>
</form>




@endsection