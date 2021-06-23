<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;


class EmployeeManageController extends Controller
{
    public function employeeManage()
    {
        $employees=Employee::all();
        return view('backend.content.employee.employee',compact('employees'));
    }

    public function employeeCreate(Request $request)
    {
        // dd($request->all());
    $file_name='';
    // step:1 check req has file

    if($request->hasFile('picture'))
    {
        // file is valid?

        $file=$request->file('picture');
        if($file->isvalid());
        {
            // generate unique file name

            $file_name=date('Ymdhms').'.'.$file->getClientOriginalExtension();

            // store image local directory

            $file->storeAs('photo',$file_name);
        }
    }
    $request->validate([
        'name' => 'required',
        'workingArea' => 'required',
        'email' => 'email|required|unique:employees',
        'contact' => 'required|digits:11|numeric|unique:employees',
        'address' => 'required',
    ]);
        Employee::create([
            'file' => $file_name,
            'name'=>$request->name,
            'workingArea' => $request->workingArea,
            'email'=>$request->email,
            'contact'=>$request->contact,
            'address'=>$request->address
            ]);

            return redirect()->back()->with('error-message','Invalid selection.');
    }
    public function employeeDelete($id)
    {
     // dd($id);
        //first get the product
        $employees = Employee::find($id);


        //then delete it
        $employees->delete();

        return redirect()->back();
    }
    public function employeeEdit($id)
    {
        $employees = Employee::find($id);
     return view('backend.content.employee.employeeEdit',compact('employees'));
    }
    
    public function employeeUpdate(Request $request ,$id){
        Employee::find($id)->update([
            'name'=>$request->name,
            'workingArea'=>$request->workingArea,
            'email'=>$request->email,
            'contact'=>$request->contact,
            'address'=>$request->address
        ]);
        return redirect()->route('employee'); 
    }
}