<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RoomDetail;
use App\Models\Review;
use App\Models\OtherService;
use App\Models\Contact;
class HomeController extends Controller
{
   public function home(){
       $roomDetail=RoomDetail::where('status','available')->get();
       $otherService=OtherService::where('status','=','published')->take(3)->get();
       $publishRoom=RoomDetail::where('publishedStatus','published')->get();
       $review=Review::all();
       
       return view('frontEnd.content.home',compact('roomDetail','otherService','review','publishRoom'));
   }
   public function viewAllServices(){
    $services=OtherService::all();

    return view('frontEnd.content.otherServicePage',compact('services'));
}
public function room(){
    
    $room=RoomDetail::all();

    return view('frontEnd.content.viewRoom',compact('room'));
}
public function contact(){
    
    

    return view('frontEnd.content.contactUs');
}
public function contactForm(Request $request)
    {
       
            Contact::create([

                'name'=>$request->name,
                'email'=>$request->email,
                'address'=>$request->address,
                'phone'=>$request->phone,
                'message'=>$request->message,
                
                
            ]);
           
          

            return redirect()->route('home');
    }

}
