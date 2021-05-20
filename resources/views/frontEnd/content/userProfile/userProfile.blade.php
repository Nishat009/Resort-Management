@extends('frontend.main')

@section('content')
<div class="row m-3">
    <div class="col-md-10 m-auto">

        <div class="container d-flex justify-content-center">
            <div class="profileCard p-3 py-4">
                    <h3 class="mt-2">Name:{{auth()->user()->name}}</h3> <span class="mt-1 clearfix">User email:{{auth()->user()->email}}</span>
                </div>
            </div>
        </div>
        </div>
        </div>

        <div class="row">
    <div style="background: lightseagreen" class="col-md-8 m-auto p-5 rounded shadow">
        <table class="table mt-5 mb-5 p-5  rounded bg-light ">
            <thead>


              <tr>
              <th scope="col">User mail</th>
                <th scope="col">contact</th>
                <th scope="col">address</th>
               
               

              </tr>
            </thead>
           
            <tbody>
              <tr>
               
               <td>{{auth()->user()->email}}</td>
                <td>{{$customers->contact}}</td>
                <td>{{$customers->address}}</td>
                <td>
                 <a  href="{{route('reservationTable')}}"><i class="fas fa-eye"></i>
                </td>
               

              </tr>

             
            </tbody>
          </table>

    </div>

</div>
@endsection

