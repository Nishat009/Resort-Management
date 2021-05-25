<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller
{
    public function seeContact(){
        $contact=Contact::all();
        return view('backEnd.content.contact',compact('contact'));
    }
}
