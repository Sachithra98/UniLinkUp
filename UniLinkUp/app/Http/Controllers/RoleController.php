<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function role(){
        return view('admin_add_role');
    }

    public function roleInput(Request $request)
    {
       $Role=new Role();
        $Role->Dep_Id=$request->Dep_Id;
        $Rolet->Dep_Name=$request->Dep_Name;
        $Role->Faculty_Id=$request->Faculty_Id;
        $Role->save();


        
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
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        //
    }
}
