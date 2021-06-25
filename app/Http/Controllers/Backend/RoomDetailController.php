<?php

namespace App\Http\Controllers\Backend;
use App\Models\RoomDetail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoomDetailController extends Controller
{
    public function roomDetail(){

        $roomDetail=RoomDetail::paginate(5);
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
            'adult'=>$request->adult,
            'children'=>$request->children,
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
    public function roomDetailEdit($id)
    {
        $roomDetail = RoomDetail::find($id);
     return view('backend.content.roomDetail.roomDetailEdit',compact('roomDetail'));
    }
    public function roomDetailUpdate(Request $request ,$id){
        

     $roomImage=RoomDetail::find($id);
     if ($request->hasFile('file')) {

        $image_path = public_path().'/files/roomDetail/' . $roomImage->image;

        if ($roomImage->image) {
            unlink($image_path);
        }

            $file_name='';

            $file = $request -> file('file');
            if ($file -> isValid()) {
                $file_name = date('Ymdhms').'.'.$file -> getClientOriginalExtension();
                $file -> storeAs('roomDetail',$file_name);
            }
            $roomImage->update([
                'file' => $file_name
            ]);
            }

     $roomImage->update([
            'room_type'=>$request->room_type,
            'price'=>$request->price,
            'adult'=>$request->adult,
            'children'=>$request->children,
            'room_detail'=>$request->room_detail,
            
        ]);
        return redirect()->route('roomDetail'); 
    }

    public function searchRoom(){
        
        $search =[];
        if(isset($_GET['checkIn_date']))
        {
            $checkInDate = date('Y-m-d',strtotime($_GET['checkIn_date']));
            $checkOutDate = date('Y-m-d',strtotime($_GET['checkOut_date']));
            if($checkOutDate<$checkInDate){
                return redirect()->back()->with('error','checkOut date is not correct');
            }
            $search = RoomDetail::whereNotIn('id', function($query) use ($checkInDate, $checkOutDate){
                $query->from('room_reservations')
                ->select('room_id')
                ->where('status','!=','reject')
                ->whereBetween('checkIn_date', [$checkInDate, $checkOutDate]);
                
            })
            ->whereNotIn('id', function($query) use ($checkInDate, $checkOutDate){
                $query->from('room_reservations')
                ->select('room_id')
                ->where('status','!=','reject')
                ->whereBetween('checkOut_date', [$checkInDate, $checkOutDate])
                ;
                
            })->get();
            
            
        }
        return view('frontend.content.searchRoom',compact('search','checkInDate','checkOutDate'));
        
    }
    public function RoomUpdate( $id, $status)
    {
        $roomDetail= RoomDetail::find($id);

        $roomDetail->update(['publishedStatus'=>$status]);

        return redirect()->back();
    }


}
