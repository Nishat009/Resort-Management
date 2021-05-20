<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RoomReservation;
use App\Models\RoomDetail;
class ReservationController extends Controller
{
    
    public function seeReservation(){
        $reserve=RoomReservation::all();
        return view('backEnd.content.Reservation.seeReservation',compact('reserve'));
    }
    public function completedUpdate( $id, $status)
    {
        $reserve= RoomReservation::find($id);
        $reserve->update(['status'=>$status]);
        if($status=='confirm'){
            RoomDetail::find($reserve->room_id)->update(['status'=>'reserved']);
        }
        if($status=='cancel'){
            RoomDetail::find($reserve->room_id)->update(['status'=>'available']);
        }
        
        return redirect()->back();
    }
    

}
