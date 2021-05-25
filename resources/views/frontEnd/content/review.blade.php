@extends('frontEnd.main')

@section('content')

<div class="container 
 text-center mt-5">
<h2 id="fh2">WE APPRECIATE YOUR REVIEW!</h2>
<h6 id="fh6">Your review will help us to improve our web hosting quality products, and customer services.</h6>
</div>


<form action="submitReview" method="post"  class=" container mt-5 w-50 p-5 border shadow p-3 mb-5 bg-white">
     @csrf
    <div class="mb-3 ">



    


<div class="form-group">
  <div class="col-md-12 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-user ms-1"></i></span>
  <input  name="name" placeholder="{{auth()->user()->name}}" class="form-control"  type="text">
    </div>
  </div>
</div>


  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
    <input name="email" type="email" class="form-control" placeholder="{{auth()->user()->email}}">
     </div>
  </div>
</div>




 <div class="pinfo">Rate our overall services.</div>



  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-heart"></i></span>
   <select name="rate" class="form-control" id="rate">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
    </div>
  </div>
</div>

 <div class="pinfo">Write your feedback.</div>



  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
  <textarea  name="message"  class="form-control" id="review" rows="3"></textarea>

    </div>



  </div>
</div>
<div class="mt-5 justify-content-center">
 <button  type="submit" class="btn btn-success">Submit</button>
</div>
</form>

@endsection
