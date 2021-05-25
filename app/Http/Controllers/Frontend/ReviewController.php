<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;
class ReviewController extends Controller
{
    public function writeReview()
        {


            return view('frontEnd.content.review');
        }

       
public function submitReview(Request $request)
        {
            // dd($request)
            Review::create([

                'user_id'=>auth()->user()->id,
                'rate'=>$request->input('rate'),
                 'message'=>$request->input('message'),
            ]);
            return redirect()->back();


        }

}
