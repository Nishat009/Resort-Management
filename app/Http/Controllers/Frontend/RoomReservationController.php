<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoomReservationController extends Controller
{
    public function roomReservation(){
      
        return view('frontEnd.content.reservation.reservation');

    }
}
