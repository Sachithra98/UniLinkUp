<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculty;
//use Illuminate\Support\Facades\Validator;

class FacultyController extends Controller
{
    //view for faculty-sachithra
    public function faculty(){
        return view('admin_add_faculty');
    }

    public function facultyInput(Request $request)
    {
        faculty::create([
            'Faculty_Id'=> $request -> faculty_ID,
            'Faculty_Name' => $request -> faculty_name
        ]);

        $rules = [
            'Faculty_Name' => 'required',
            'Faculty_Id' => 'required'
            // 'password' => 'required|min:8',
            // 'confirmpassword' => 'required|same:password'
            // 'email' => 'required|email|unique:faculty<table name>'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails())
        {
            return redirect() -> back -> withErrors($validator)->withInput();
    
        }

        return redirect('/admin_add_faculty')->with('success','Data successfully added!');
    }
}
