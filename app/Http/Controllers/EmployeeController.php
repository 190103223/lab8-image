<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        return view('employee');
    }

    public function store(Request $request){
        $employee = new Employee();

        $employee->name = $request->input('name');
        $employee->surname = $request->input('surname');
        $employee->email = $request->input('email');
      
        
        
        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/employee/', $filename);
            $employee->photo=$filename;
        }
        else{
            return $request;
            $employee->photo='';
        }
        
        $employee->save();

        return redirect('employee')->with('employee', $employee);
    }

    public function display(){
        $employees = Employee::all();

        return view('employeeform')->with('employees', $employees);
    }


}
