
@extends('frontend.main')

@section('content')
<div class="container">
<h1 class=" container fw-bolder text-dark text-left bg-light p-3 rounded">Contact Us here</h1>

<form method="post" action="{{route('contactForm')}}" class=" container bg-light shadow p-5 rounded"  enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input required type="text" class="form-control" id="name" name="name">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input name="email" required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
</div>
<div class="mb-3">
    <label for="address" class="form-label">Address</label>
    <input required type="text" class="form-control" id="name" name="address">
</div>
<div class="mb-3">
    <label for="number" class="form-label">Phone Number</label>
    <input required type="string" class="form-control" id="name" name="phone">
</div>
<div class="form-group mt-5">
                    <label for="">message:</label>
                    <textarea  name="message"  type="text" id="" class="form-control"></textarea>
                </div>

    <button type="submit" class="btn btn-danger">Submit</button>
</form>
</div>
</div>

            @endsection