@extends('frontend.main')

@section('content')

   


<!-- reservation form -->
    <div class="album py-5 bg-light">
        <div>

            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <h1>Book Room</h1>
            
            <div class="container">
           
            <h1>{{$reserve->room_type}}</h1>
            <p>{{$reserve->price}}</p>
            </div>
            <form method="post" action="{{route('reservation')}}" enctype="multipart/form-data" class="container mt-5 w-50 p-5 border shadow p-3 mb-5 bg-white">
            @csrf
            
            <input name="room_id" type="hidden" value="{{$reserve->id}}" class="form-control">
                <div class="mb-3 ">
                <div class="form-group">
                    <label for="">Check In</label>
                    <input required name="checkIn_date" type="date" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Check Out</label>
                    <input required name="checkOut_date" type="date" class="form-control">
                   
                </div>
              <br/>
                <div class="form-group">
                    <label class="mr-sm-2" for="inlineFormCustomSelect">Adult</label>
                    <select class="custom-select mr-sm-2" required name="adult" id="inlineFormCustomSelect">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="3">4</option>
                        <option value="3">5</option>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label class="mr-sm-2" for="inlineFormCustomSelect">Children</label>
                    <select class="custom-select mr-sm-2" required name="children" id="inlineFormCustomSelect">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="3">4</option>
                        <option value="3">5</option>
                    </select>
                
                </div>
                <br>
                <div class="form-group">
                    <label for="formGroupExampleInput">Room</label>
                    <input type="text" required name="room" type="room" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                 </div>

                <div class="form-group mt-5">
                    <label for="">message:</label>
                    <textarea  name="message"  type="text" id="" class="form-control"></textarea>
                </div>
                <br>
                <div class="form-group">
                <small>Additional service</small>
                @foreach ($service as $data)
                    <div class="form-check">
                   
                    <input value="{{$data->id}}" name="service_id" class="form-check-input" type="checkbox" id="gridCheck">
                    <label  class="form-check-label" for="gridCheck">
                       {{ $data->service_type}} ({{ $data->price}}BDT)
                       
                    </label>
                    
                    </div>
                    @endforeach
                </div>

                <div class="form-group mt-5">
                    <button type="submit" class="btn btn-primary" >Submit</button>
                </div>

            </div>
            </form>
        </div>
    </div>
@endsection