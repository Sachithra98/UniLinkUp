<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\Staff;
use Illuminate\Http\Request;
use Hash;
//sachi-start
use App\Models\Faculty;
use App\Models\Department;
use Auth;

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
            'password' => 'required|min:5', // Add any other validation rules you need
        ]);

        // Hash the password
        $hashedPassword = Hash::make($request->input('password'));

         // Create a new staff with the generated password
         $admin = Staff::create([
            'Faculty_Id' => $request->input('Faculty_Id'),
            'email' => $request->input('email'),
            'password' => $hashedPassword, // Store the hashed password
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



    //lahiru start

    public function dashboard(){

        return view('Student.viewer');
    }



    public function login(){

        return view('StaffLogin');
    }


    public function login_submit(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password'=>'required',
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::guard('staff')->attempt($credentials)){

            $user=Staff::where('email',$request->input('email'))->first();
                    Auth::guard('staff')->login($user);
            return redirect()->route('staff_dashboard')->with('success', 'Login successful');
        } else {
            return redirect()->route('staff_login')->with('error', 'Login unsuccessful');

        }
    }






    public function logout(){

        Auth::guard('staff')->logout();
        return redirect()->route('staff_login')->with('Success','Logout Successfully');
    }



    //lahiru end
}
