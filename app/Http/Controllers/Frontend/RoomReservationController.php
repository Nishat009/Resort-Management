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
        $service=OtherService::where('status','published')->get();
        return view('frontend.content.reservation.reservation',compact('reserve','service'));
    }
    public function reservation(Request $request)
    {
        //  dd($request->all());
        $check=RoomReservation::where('room_id',$request->room_id)->where('checkIn_date',$request->checkIn_date)->first();
        
        if($check!=null){
            
             return redirect()->route('searchRoom')->with('success','already reserved');
           
        }
        $reserve=RoomDetail::find($request->room_id);
        $service=OtherService::find($request->service_id);
        $roomPricePerDay = $reserve->price; // room price in cents

        if($request->adult>$reserve->adult ){
            return redirect()->back()->with('error', 'room capacity overloaded');
        }
     $toDate = Carbon::createMidnightDate($request->checkIn_date);
     $fromDate = Carbon::createMidnightDate($request->checkOut_date);

    $diffDays = $fromDate->diffInDays($toDate); // 2
   if($service){
        $roomPrice = $diffDays * ($roomPricePerDay+$service->price);
   }
   else{
    $roomPrice = $diffDays * ($roomPricePerDay);
   }
      
       
            RoomReservation::create([

                'checkIn_date'=>$request->checkIn_date,
                'checkOut_date'=>$request->checkOut_date,
                'adult'=>$request->adult,
                'children'=>$request->children,
                'message'=>$request->message,
                'room_id'=>$request->room_id,
                'price'=>$roomPrice,
                'service_id'=>$request->service_id,
                'user_id'=>auth()->user()->id,
                't_id'=>$request->t_id,
                't_phone'=>$request->contact,
                'payment_method'=>$request->payment_method,
            ]);
           
            $reserve->update(['status'=>'requested for reserve']);

            return redirect()->route('reservationTable');
    }
    public function reservationTable(){
        $reserve=RoomReservation::where('user_id', auth()->user()->id)->get();
        
        return view('frontEnd.content.Reservation.reservationTable',compact('reserve'));
    }
    public function cancelUpdate( $id)
    {
        $reserve= RoomReservation::find($id);
       $t= $reserve->checkIn_date;
       $t=Carbon::create($t)->addDay();
        
       if($t>= Carbon::now()){
      
            $reserve->update([
            'status'=>'requested for cancel'
        ]); 
        return redirect()->back();
       }
       else{
           return redirect()->back()->with('error','you can not cancel the reservation');
       }
       

       
    }
// payment
   

    
   
}
