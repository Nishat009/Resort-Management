<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;

class ImageController extends Controller
{
    public function seeGallery(){

        $seeGallery=Gallery::all();
        return view('frontEnd.content.gallery.gallery', compact('seeGallery'));
    }
}
