<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\Staff;
use Illuminate\Http\Request;

//sachi-start
use App\Models\Faculty;
use App\Models\Department;


class StaffController extends Controller
{

    public function data()
    {
      
        $faculties = Faculty::all();
        $departments = Department::all();

        return view('Admin/admin_createaccS', compact('faculties','departments'));

    }
    //sachi-end


    public function staffInput(Request $request)
     {
         // Validate the request data
         $request->validate([
            'Staff_Password' => 'required|min:5', // Add any other validation rules you need
        ]);
    
        // Hash the password
        $hashedPassword = bcrypt($request->input('Staff_Password'));
     
         // Create a new staff with the generated password
         $admin = Staff::create([
            'Staff_Id' => $request->input('Staff_Id'),
            'Faculty_Id' => $request->input('Faculty_Id'),
            'Staff_Email' => $request->input('Staff_Email'),
            'Staff_Password' => $hashedPassword, // Store the hashed password
            'Staff_Name' => $request->input('Staff_Name'),
            'Dep_Id' => $request->input('Dep_Id'),
            'Admin_Id' => $request->input('Admin_Id'),
         ]);
     
      
         return redirect('/admin_createaccS')->with('success','Data successfully added!');
     }
    public function index()
    {
        //
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
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Staff $staff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Staff $staff)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Staff $staff)
    {
        //
    }
}
