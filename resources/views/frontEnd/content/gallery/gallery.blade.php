@extends('frontEnd.main')
@section('content')

<div class="album py-5 bg-light mt-5">
        <div class="container">

            <div class="text-center">

                <h2 style="color: #3A4256;" >Gallery </h2>



            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3 mt-5">
@foreach($seeGallery as $request)
		

<div class="col">
                    <div class="card shadow-sm h-100" style="width:270px;height:250px">
                    <img style="height:250px;width:269px;"src="{{url('/files/gallery/'.$request->file)}}"alt="gallery image">
                    
                        
                    
                    </div>
                </div>
                @endforeach
                </div>
        </div>
    </div>


          

    
@endsection