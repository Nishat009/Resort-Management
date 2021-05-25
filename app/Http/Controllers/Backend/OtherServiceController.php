<?php

namespace App\Http\Controllers\Backend;
use App\Models\OtherService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OtherServiceController extends Controller
{
    public function otherService(){

        $otherService=OtherService::all();
        return view('backend.content.otherService.otherService',compact('otherService'));
    }
    public function otherServiceCreate(Request $request)
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
                $file->storeAs('otherService',$file_name);
            }

        }
        OtherService:: create([
            'service_type'=>$request->service_type,
            'price'=>$request->price,
            'service_detail'=>$request->service_detail,
            'file'=>$file_name ]);
        return redirect()->back();
    }
    public function otherServiceDelete($id)
    {
     // dd($id);
        //first get the product
        $otherService = OtherService::find($id);


        //then delete it
        $otherService->delete();

        return redirect()->back();
    }
    public function otherServiceEdit($id)
    {
        $otherService = OtherService::find($id);
     return view('backend.content.otherService.otherServiceEdit',compact('otherService'));
    }
    
    public function otherServiceUpdate(Request $request ,$id){
        OtherService::find($id)->update([
            'service_type'=>$request->service_type,
            'price'=>$request->price,
            'service_detail'=>$request->service_detail,
            
        ]);
        return redirect()->route('otherService'); 
    }

    public function completedUpdate( $id, $status)
    {
        $otherService= OtherService::find($id);

        $otherService->update(['status'=>$status]);

        return redirect()->back();
    }


}
