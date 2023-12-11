<?php
//sachithra-starts
namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Show the department form.
     */
    public function showDepartmentForm()
    {
        // Fetch faculties to populate dropdown
        $faculties = Faculty::all();

        return view('admin.admin_add_department',  compact('faculties'));
    }

    /**
     * Store the department data.
     */
    public function departmentInput(Request $request)
    {
        // Validate the request data
        $request->validate([
            'Dep_Name' => 'required',
            'Faculty_Id' => 'required',
        ]);

        // Create a new department
        Department::create([
            'Dep_Name' => $request->input('Dep_Name'),
            'Faculty_Id' => $request->input('Faculty_Id'),
        ]);

        // Redirect with success message
        return redirect()->route('admin_add_department')->with('success', 'Department added successfully');
    }

    /**
     * Show the department form view.
     */
    public function department()
    {
        return view('admin_add_department');
    }

    // Other CRUD methods...
//sachithra_ends
}
