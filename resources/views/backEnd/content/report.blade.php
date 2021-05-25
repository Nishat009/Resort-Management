@extends('backend.main')

@section('content')


<div style="background-color: #b4b7b7" class="table-responsive  mt-4 p-5 rounded shadow ">
<form action={{ route('report') }} method="GET">

        {{-- @csrf --}}

        <div class="row">
            <div class="col-md-8">
                <div class=" row">
                   

                    <div class="col-md-6">
                        <label for="from">Date From:</label>
                        <input id="from" type="date" class="form-control" name="from_date" required>
                    </div>

                    <div class="col-md-6">
                        <label for="to">Date To:</label>
                        <input id="to" type="date" class="form-control" name="to_date" required>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-4 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Search</button>
                <button type="button" onclick="printDiv()" class="btn btn-success mx-3">Print</button>
            </div>
        </div>
    </form>

<!-- reservation table -->
<div id="printArea">

        <div style="overflow-x:auto;">
<h2 class="float-start text-light text-center border-bottom ">Reservation Details</h2>
<table class="table my-3 " style="margin-right: 200px;">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">user_name</th>
        <th scope="col">Check In</th>
        <th scope="col">Check Out</th>
        <th scope="col">Adult</th>
        <th scope="col">Children</th>
        <th scope="col">Room</th>
        <th scope="col">Message</th>
        <!-- <th scope="col">Additional Service</th>
        <th scope="col">Payment Status</th>
        <th scope="col">Action</th>
        <th scope="col">Status</th> -->
      </tr>
    </thead>
    <tbody>
    </div>
    @if ($reserve->count() > 0)
     @foreach($reserve as $request)

        <tr>
            <th scope="row">1</th>
            <td>{{$request->userReserve->name}}</td>
            <td>{{$request->checkIn_date}}</td>
            <td>{{$request->checkOut_date}}</td>
            <td>{{$request->adult}}</td>
            <td>{{$request->children}}</td>
            <td>{{$request->room}}</td>
            <td>{{$request->message}}</td>
           

            <!-- <td>
                    <div class="dropdown ">
                        <button class="btn btn-sm btn-light dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Action
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                     <li>
                        
                        @if ( $request->status == 'paid')
                        <a class="btn" href="{{route('reservationPaid',['id'=>$request->id,'status'=>'unpaid'])}}">cancle</a>
                        @else
                        
                        <a class="btn" href="{{route('reservationPaid',['id'=>$request->id,'status'=>'paid'])}}">paid</a>
                        
                        @endif
                 </li>
                        </ul>
                    </div>
            </td> -->
<!-- <td class="text-center">{{$request->status}}</td> -->
            <!-- <td><a href="{{ route('completedUpdate', ['id' => $request->id, 'status' => 'confirm']) }}">confirm</a>/<a href="{{ route('completedUpdate', ['id' => $request->id, 'status' => 'reject']) }}">reject</a></td> -->
            
            
            
            
        </tr>
        @endforeach
        @else

                    <td>
                        <h4>No Data Found!</h4>
                    </td>


                @endif
        </tbody>
        </table>
        </div>
        </div>
        </div>
        <script type="text/javascript">
        function printDiv() {
            var printContents = document.getElementById("printArea").innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }

    </script>
        @endsection