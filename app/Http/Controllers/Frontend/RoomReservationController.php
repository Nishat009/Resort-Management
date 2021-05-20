<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RoomReservation;
use App\Models\RoomDetail;
use App\Models\OtherService;
use Carbon\Carbon;
class RoomReservationController extends Controller
{
    public function RoomReservation($id)
    {
        $reserve=RoomDetail::find($id);
        $service=OtherService::all();
        return view('frontend.content.reservation.reservation',compact('reserve','service'));
    }
    public function reservation(Request $request)
    {
        //  dd($request->all());
        $reserve=RoomDetail::find($request->room_id);
        $service=OtherService::find($request->service_id);
        $roomPricePerDay = $reserve->price; // room price in cents

     $toDate = Carbon::createMidnightDate($request->checkIn_date);
     $fromDate = Carbon::createMidnightDate($request->checkOut_date);

    $diffDays = $fromDate->diffInDays($toDate); // 2
   
      $roomPrice = $diffDays * ($roomPricePerDay+$service->price); // 9980
       
            RoomReservation::create([

                'checkIn_date'=>$request->checkIn_date,
                'checkOut_date'=>$request->checkOut_date,
                'adult'=>$request->adult,
                'children'=>$request->children,
                'room'=>$request->room,
                'message'=>$request->message,
                'room_id'=>$request->room_id,
                'price'=>$roomPrice,
                'service_id'=>$request->service_id,
                'user_id'=>auth()->user()->id
                
            ]);
           
            $reserve->update(['status'=>'requested for reserve']);

            return redirect()->route('reservationTable');
    }
    public function reservationTable(){
        $reserve=RoomReservation::where('user_id', auth()->user()->id)->get();
        return view('frontEnd.content.Reservation.reservationTable',compact('reserve'));
    }
   
    
}
