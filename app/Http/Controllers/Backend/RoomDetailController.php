<?php

namespace App\Http\Controllers\Backend;
use App\Models\RoomDetail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoomDetailController extends Controller
{
    public function roomDetail(){

        $roomDetail=RoomDetail::all();
        return view('backend.content.roomDetail.roomDetail',compact('roomDetail'));
    }
    public function roomDetailCreate(Request $request)
    {
        $file_name='';
        //step1: check request has file?
        if($request->hasFile('file'))
        {
            //file is valid or not
            $file=$request->file('file');
            if($file->isValid())
            {
                //generate unique file name
                $file_name=date('Ymdhms').'.'.$file->getClientOriginalExtension();

                //store image into local directory
                $file->storeAs('roomDetail',$file_name);
            }

        }
        RoomDetail:: create([
            'room_type'=>$request->room_type,
            'price'=>$request->price,
            'room_detail'=>$request->room_detail,
            'file'=>$file_name ]);
        return redirect()->back();
    }
    public function roomDetailDelete($id)
    {
     // dd($id);
        //first get the product
        $roomDetail = RoomDetail::find($id);


        //then delete it
        $roomDetail->delete();

        return redirect()->back();
    }

}
