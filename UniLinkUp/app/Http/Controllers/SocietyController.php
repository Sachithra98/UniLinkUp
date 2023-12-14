<?php
//sachithra-starts
namespace App\Http\Controllers;


use App\Models\Society;
use Illuminate\Http\Request;

class SocietyController extends Controller
{
    
    // public function data()
    // {
    //     // Fetch faculties to populate dropdown
    //     $faculties = Faculty::all();

    //     return view('admin.admin_add_society',  compact('faculties'));
    // }

    /**
     * Store the Society data.
     */
    public function storeSociety(Request $request)
    {
        // // Validate the request data
        // $request->validate([
        //     'Society_Id' => 'required',
        //     'Society_Name' => 'required',
        //     'Faculty_Id' => 'required',
        // ]);

        // Create a new department
        Society::create([
            'Society_Name' => $request->input('society_name'),
            //'Faculty_Id' => $request->input('Faculty_Id'),
        ]);

        // Redirect with success message
        return redirect()->route('admin_add_society')->with('success', 'Department added successfully');
    }

    /**
     * Show the department form view.
     */
    public function society()
    {
        return view('/Admin/admin_add_society');
    }

    // Other CRUD methods...
//sachithra_ends
}
