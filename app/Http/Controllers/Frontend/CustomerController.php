<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function userLoginRegistration(){
        return view('frontEnd.content.userLogin.userLogin');
    }
    public function registration(Request $request)

    {
        // dd($request->all());

        $request->validate([
            
           'name'=>'required',
           'email'=>'email|required|unique:users',
            'password'=>'required|min:6'
        ]);
        
    $U=User::create([
           'name'=>$request->name,
           'email'=>$request->email,
           'password'=>bcrypt($request->password)
        ]);
        Customer::create([
            'user_id'=>$U->id,
            'address'=>$request->address,
            'contact'=>$request->contact,
            
         ]);

        

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

            if (auth()->user()->role == 'user') {
                return redirect()->route('home');
            }

            

                return back()->withErrors([
                    'email' => 'Invalid Credentials.'
                    ]);


            }
        }
       
    


    public function userLogout()
    {
        Auth::logout();

        return redirect()->route('home')->with('success','Logout Successful.');

    }
    
    public function userProfile()
    {
      $customers=Customer::where('user_id',auth()->user()->id)->first();
        
        return view('frontEnd.content.userProfile.userProfile',compact('customers'));
    }

}
