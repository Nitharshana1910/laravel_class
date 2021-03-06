<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $employees = Employee::all();
        // return $employees;
        // return a view and pass in the above variable 
        return view('employee.index',['employees'=> $employees]);
        // return view('employee.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('employee.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        // return $request->all();
        $employee = new Employee();

        $employee->first_name = $request->fname;
        $employee->last_name = $request->lname;
        $employee->dob = $request->dob;
        $employee->salary = $request->salary;
  
        $employee->save();
        return redirect()->route('employee.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $employee = Employee::find($id);
        // return view('employee.show',['employee'=> $employee]);
        return view('employee.show',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        // find the post in the database and save as var
        $employee = Employee::find($id);
        //return the view and pass in to the var we perviously created
        return view('employee.edit',['employee'=> $employee]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    
       //save data to the database
       //find the existing row from database by using id and set into that variable
       $employee = Employee::find($id);

       
       $employee->first_name = $request->input('first_name');
       $employee->last_name = $request->input('last_name');
       $employee->dob = $request->input('dob');
       $employee->salary = $request->input('salary');

       $employee->save();
    //    $employee->update(); - we can use update also
        // $employee->update($request->all());

       //redirect with the flash data to employee.show 
       return redirect()->route('employee.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $employee = Employee::find($id);

        $employee->delete();

        return redirect()->route('employee.index');
    }
}
