<?php
//jayani-starts
namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\Editor;
use Illuminate\Http\Request;

use App\Models\Faculty;
use App\Models\Department;
use App\Models\Society;

class EditorController extends Controller
{

    public function data()
    {
      
        $faculties = Faculty::all();
        $societies = Society::all();
        $departments = Department::all();

        return view('Admin/admin_createaccE', compact('faculties','societies','departments'));

    }

    public function editorInput(Request $request)
    {
         // Validate the request data
         $request->validate([
            'E_Password' => 'required|min:5', // Add any other validation rules you need
        ]);
    
        // Hash the password
        $hashedPassword = bcrypt($request->input('E_Password')); 
    
        // Create a new staff with the generated password
        $editor = Editor::create([
           'Editor_Id' => $request->input('Editor_Id'),
           'Faculty_Id' => $request->input('Faculty_Id'),
           'Batch_Id' => $request->input('Batch_Id'),
           'E_Email' => $request->input('E_Email'),
           'E_Password' => bcrypt($hashedPassword),
           'E_Name' => $request->input('E_Name'),
           'Dep_Id' => $request->input('Dep_Id'),
           'Society_Id' => $request->input('Society_Id'),
           'Admin_Id' => $request->input('Admin_Id'),
        ]);
    
     
        return redirect('/admin_createaccE')->with('success','Data successfully added!');
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
    public function show(Editor $editor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Editor $editor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Editor $editor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Editor $editor)
    {
        //
    }

    //jayani_ends
}
