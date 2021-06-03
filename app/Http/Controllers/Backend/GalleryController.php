<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function gallery(){
        $gallery=Gallery::paginate(5);
        return view('backEnd.content.gallery.gallery',compact('gallery'));
    }

    public function galleryCreate(Request $request)
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
                $file->storeAs('gallery',$file_name);
            }

        }
        Gallery:: create([
            'file'=>$file_name ]);
        return redirect()->back();
    }
    public function galleryDelete($id)
    {
     // dd($id);
        //first get the product
        $gallery = Gallery::find($id);


        //then delete it
        $gallery->delete();

        return redirect()->back();
    }
    
}
