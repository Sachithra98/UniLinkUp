<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function department(){
        return view('admin_add_department');
    }

   /*  public function admin_departement(){
        return view('admin_department');
    } */ 

    public function departmentInput(Request $request)
    {
       $Department=new Department();
        $Department->Dep_Id=$request->Dep_Id;
        $Department->Dep_Name=$request->Dep_Name;
        $Department->Faculty_Id=$request->Faculty_Id;
        $Department->save();


        /* $Department=Department::create($request->all()); */
        return redirect('/admin_add_department')->with('success','Data successfully added!');
    }    


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $department)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Department $department)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
        //
    }
}
