<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;


class EmployeeManageController extends Controller
{
    public function employeeManage()
    {
        $employees = Employee::all();
        return view('backend.content.employee.employee', compact('employees'));
    }

    public function employeeCreate(Request $request)
    {
        // dd($request->all());
        $file_name = '';
        // step:1 check req has file

        if ($request->hasFile('file')) {
            // file is valid?

            $file = $request->file('file');
            if ($file->isvalid()); {
                // generate unique file name

                $file_name = date('Ymdhms') . '.' . $file->getClientOriginalExtension();

                // store image local directory

                $file->storeAs('photo', $file_name);
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
            'name' => $request->name,
            'workingArea' => $request->workingArea,
            'email' => $request->email,
            'contact' => $request->contact,
            'address' => $request->address
        ]);

        return redirect()->back()->with('error-message', 'Invalid selection.');
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
        return view('backend.content.employee.employeeEdit', compact('employees'));
    }

    public function employeeUpdate(Request $request, $id)
    {
        $employeeImage = Employee::find($id);
        if ($request->hasFile('file')) {

            $image_path = public_path() . '/files/employees/' . $employeeImage->image;

            if ($employeeImage->image) {
                unlink($image_path);
            }

            $file_name = '';

            $file = $request->file('file');
            if ($file->isValid()) {
                $file_name = date('Ymdhms') . '.' . $file->getClientOriginalExtension();
                $file->storeAs('photo', $file_name);
            }
            $employeeImage->update([
                'file' => $file_name
            ]);
        }


        if ($employeeImage->email  == $request->email && $employeeImage->contact == $request->contact) {
            $employeeImage->update([
                'name' => $request->name,
                'workingArea' => $request->workingArea,
                'address' => $request->address
            ]);
        } else if ($employeeImage->email  == $request->email) {
            $request->validate([
                'contact' => 'required|digits:11|regex:/(01)[0-9]{9}/|numeric|unique:employees',
            ]);
            $employeeImage->update([
                'name' => $request->name,
                'workingArea' => $request->workingArea,
                'contact' => $request->contact,
                'address' => $request->address
            ]);
        } else if ($employeeImage->contact == $request->contact) {
            $request->validate([
                'email' => 'email|unique:users',
            ]);
            $employeeImage->update([
                'name' => $request->name,
                'workingArea' => $request->workingArea,
                'email' => $request->email,
                'address' => $request->address
            ]);
        } else {
            $request->validate([
                'email' => 'email|unique:users',
                'contact' => 'required|digits:11|regex:/(01)[0-9]{9}/|numeric|unique:employees',
            ]);

            $employeeImage->update([
                'name' => $request->name,
                'workingArea' => $request->workingArea,
                'email' => $request->email,
                'contact' => $request->contact,
                'address' => $request->address
            ]);
        }


        return redirect()->route('employee')->with('success-message', $employeeImage->name . ' ' . 'info update successfully');
        // $employeeImage->update([
        //     'name'=>$request->name,
        //     'workingArea'=>$request->workingArea,
        //     'email'=>$request->email,
        //     'contact'=>$request->contact,
        //     'address'=>$request->address
        // ]);
        // return redirect()->route('employee'); 
    }
}
