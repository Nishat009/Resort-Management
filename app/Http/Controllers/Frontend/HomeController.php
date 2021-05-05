<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RoomDetail;
use App\Models\OtherService;
class HomeController extends Controller
{
   public function home(){
       $roomDetail=RoomDetail::all();
       $otherService=OtherService::all();
       return view('frontEnd.content.home',compact('roomDetail','otherService'));
   }
}
