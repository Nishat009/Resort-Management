<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RoomDetail;
use App\Models\Employee;
use App\Models\Gallery;
use App\Models\RoomReservation;
use App\Models\OtherService;
class DashboardController extends Controller
{
    public function dashboard(){
        $room=RoomDetail::all();
        $totalRoom=$room->count();
        $image=Gallery::all();
        $totalImage=$image->count();
        $employee=Employee::all();
        $totalEmployee=$employee->count();
        $reservation=RoomReservation::all();
        $totalReservation=$reservation->count();
        $service=OtherService::all();
        $totalService=$service->count();
        return view('backEnd.content.dashboard.dashboard',compact('totalRoom','totalEmployee','totalReservation','totalService','totalImage'));
    }
    
}
