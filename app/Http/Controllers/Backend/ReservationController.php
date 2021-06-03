<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RoomReservation;
use App\Models\RoomDetail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReservationConfirm;
class ReservationController extends Controller
{
    
    public function seeReservation(){
        $reserve=RoomReservation::all();
        return view('backEnd.content.Reservation.seeReservation',compact('reserve'));
    }
    public function completeUpdate( $id, $status)
    {
        $reserve= RoomReservation::find($id);
        $roomSearch=RoomDetail::find($reserve->room_id);
        
        if($status=='confirm'){
            $reserve->update(['status'=>$status]);
        }
        if($status=='reject'){
            $reserve->update(['status'=>$status]);
            $roomSearch->update(['status'=>'available']);
        }

        
        

        return redirect()->back();
    }
    public function reservationPaid($id, $status)
    {

        $reservation = RoomReservation::find($id);
        $customer = User::where('id', $reservation->user_id)->first();

        // dd($status);


        if($status == 'unpaid'){
            $reservation->update([
                'status' => 'cancel',
                'paid_status' => $status,
                
            ]);
            Mail::to($customer->email)->send(new ReservationCancel($reservationCancel));
        }else{
            $reservation->update([
                'status' => 'confirm',
                'paid_status' => $status
               
            ]);
            Mail::to($customer->email)->send(new ReservationConfirm($reservation));
            
            RoomDetail::find($reservation->room_id)->update([ 'checkIn_date'=>$reservation->checkIn_date,
            'checkOut_date'=>$reservation->checkOut_date]);
        }
        
        return redirect()->back();
    }

    public function report()
    {
        
        $reserve=RoomReservation::all();
 if ( isset($_GET['from_date'])) {
            

                $fromDate = date('Y-m-d', strtotime($_GET['from_date']));
                $toDate = date('Y-m-d', strtotime($_GET['to_date']));
                $reserve=RoomReservation::whereBetween('checkIn_date', [$fromDate, $toDate])->get();
 }

return view('backEnd.content.report', compact('reserve'));
 }

}
