@extends('frontEnd.main')
@section('content')

<link href="/css/gallery.css" rel="stylesheet">
<nav>
  <div class="container">
    <div class="grid">
      <div class="column-xs-12 column-md-10">
        <p id="highlight">Photo Gallery of LastLine</p>
      </div>
      
    </div>
  </div>
</nav>
<section class="gallery">
  <div class="container">
    <div class="grid">
      <div class="column-xs-12 column-md-4">
        <figure class="img-container">
        @foreach($seeGallery as $request)
        <img style="height:250px;width:269px;"src="{{url('/files/gallery/'.$request->file)}}"alt="gallery image">
        @endforeach           
          
        </figure>
      </div>
     
    </div>
  </div>
</section>


@endsection