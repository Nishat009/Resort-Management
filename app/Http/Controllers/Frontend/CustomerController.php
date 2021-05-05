<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function userLoginRegistration(){
        return view('frontEnd.content.userLogin.userLogin');
    }
    public function registration(Request $request)

    {

        $request->validate([
           'name'=>'required',
           'email'=>'email|required|unique:users',
            'password'=>'required|min:6'
        ]);

        User::create([
           'name'=>$request->name,
           'email'=>$request->email,
           'password'=>bcrypt($request->password)
        ]);

        // $file_name='';

        // //step1: check request has file?
        // if($request->hasFile('student_image'))
        // {
        //     //file is valid or not
        //     $file=$request->file('student_image');
        //     if($file->isValid())
        //     {
        //         //generate unique file name
        //         $file_name=date('Ymdhms').'.'.$file->getClientOriginalExtension();

        //         //store image into local directory
        //         $file->storeAs('student',$file_name);
        //     }

        // }
        // Student:: create([
        //     'user_id'=>$user->id,
        //     'image'=>$file_name

        // ]);

         return redirect()->back()->with('success','User Registration Successful.');

    }
    public function userLogin(Request $request)
    {
//        dd($request->all());
//validate input
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]);

        //authenticate
        $credentials = $request->only('email', 'password');
//        dd($credentials);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('home'));
        }
        return back()->withErrors([
            'email' => 'Invalid email or password.',
        ]);

    }


    public function userLogout()
    {
        Auth::logout();

        return redirect()->route('login.registration.form')->with('success','Logout Successful.');

    }
    public function userProfile()
    {
        return view('frontEnd.content.userProfile.userProfile');
    }

}
