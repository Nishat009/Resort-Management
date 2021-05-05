@extends('backend.main')

@section('content')



<form method="post" action="{{route('employeeUpdate', $employees->id)}}" enctype="multipart/form-data">
@csrf
@method('PUT')

            <div class="form-group">
                <label for="exampleInputName">Name</label>
                <input value="{{$employees->name}}" name="name" type="text" class="form-control" id="exampleInputName" placeholder="Enter employee Name">

            </div>
            <div class="form-group">
                <label for="exampleInputName">Working Area</label>
                <input  value="{{$employees->workingArea}}" name="workingArea" type="text" class="form-control" id="exampleInputName" placeholder="Enter Working Area">

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
                <input  value="{{$employees->email}}" name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Employee Email Address">

            </div>
            <div class="form-group">
                <label for="exampleInputPhone">Contact No.</label>
                <input  value="{{$employees->contact}}" name="contact" type="text" class="form-control" id="exampleInputPhone" placeholder="Enter Employee Phone Number">

            </div>

        <div class="form-group">
            <label for="exampleInputAddress">Address</label>
            <input  value="{{$employees->address}}" name="address" type="text" class="form-control" id="exampleInputAddress" placeholder="Enter Employee Address">

        </div>
            
            
            <div class="form-group">
                <label for="exampleInputRePicture">Upload Picture</label>
                <input  value="{{$employees->picture}}" name="picture" type="file" class="form-control" id="exampleInputRePicture" placeholder="Enter Employee Password Again">

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