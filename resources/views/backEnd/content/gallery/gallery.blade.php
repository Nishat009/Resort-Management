@extends('backend.main')
@section('content')

<div style=" background-color: rgb(227, 250, 239);" class="table-responsive  mt-4 p-5 rounded shadow ">

<!-- Button trigger modal -->
 <h2 class="float-start text-dark text-center border-buttom ">List Of Picture</h2>
 <button style=" background-color:#BB2D3B" type="button" class="btn text-light float-end mt-5 mx-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Add New Image</button>



{{--gallery Details table --}}
<table class="table table-hover table-striped table-es-sm table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Picture</th>
       
        <th scope="col">Action</th>

      </tr>
    </thead>
    <tbody>
    </div>
     @foreach($gallery as $key=> $request)

        <tr>
            <th scope="row">{{$key+1}}</th>
            <td><img src="{{url('/files/gallery/'.$request->file)}}" style="width:70px; height:60px;" ></td>
            
            
            <td>
            
                <a class="btn btn-danger" href="{{route('galleryDelete', $request->id)}}"> Delete</a>

            </td>
        </tr>
        @endforeach
        </tbody>
</table>
{{$gallery->links()}}
   

        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Add New Image</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form method="post" action="{{route('galleryCreate')}}" enctype="multipart/form-data">


@csrf
        <div class="modal-body">
            

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
