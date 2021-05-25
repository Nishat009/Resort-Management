<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function contactForm
    {
        return view('frontend.content.contactUs');
    }
    public function reservation(Request $request)
    {
       
            RoomReservation::create([

                'name'=>$request->name,
                'email'=>$request->email,
                'address'=>$request->address,
                'phone'=>$request->phone,
                'message'=>$request->message,
                
                
            ]);
           
          

            return redirect()->back();
    }
}
