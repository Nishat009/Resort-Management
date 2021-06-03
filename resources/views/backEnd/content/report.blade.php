@extends('backend.main')

@section('content')


<div style=" background-color: rgb(227, 250, 239);" class="table-responsive  mt-4 p-5 rounded shadow ">
<form action={{ route('report') }} method="GET">

        

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
<h2 class="float-start text-dark text-center border-bottom ">Report</h2>
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
        <th scope="col">Price</th>
        <th scope="col">Message</th>
        <th scope="col">Additional Service</th>
        <th scope="col">Payment Status</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
    </div>
    @if ($reserve->count() > 0)
     @foreach($reserve as $key=> $request)

        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$request->userReserve->name}}</td>
            <td>{{$request->checkIn_date}}</td>
            <td>{{$request->checkOut_date}}</td>
            <td>{{$request->adult}}</td>
            <td>{{$request->children}}</td>
            <td>{{$request->room}}</td>
            <td>{{$request->price}}</td>
            <td>{{$request->message}}</td>
            <td>
            @if($request->service_id)
            {{$request->serviceReserve->service_type}}
            @else
            no additional service added
            @endif
            </td>
            <td>{{$request->paid_status}} </td>
           <td>{{$request->status}}</td>
          
            
            
            
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