<?php
//jayani-starts
namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\Editor;
use Illuminate\Http\Request;
use DB;

use App\Models\Faculty;
use App\Models\Department;
use App\Models\Society;
use App\Models\Batch;

use Auth;
use Hash;

class EditorController extends Controller
{

    public function data()
    {

        $faculties = Faculty::all();
        $societies = Society::all();
        $departments = Department::all();
        $batches = Batch::all();

        return view('Admin/admin_createaccE', compact('faculties','societies','departments','batches'));

    }

    public function editorInput(Request $request)
    {
         // Validate the request data
         $request->validate([
            'password' => 'required|min:5', // Add any other validation rules you need
        ]);

        

        // Hash the password
        $hashedPassword = Hash::make($request->input('password'));

        // Create a new staff with the generated password
        $editor = Editor::create([
        //    'Editor_Id' => $request->input('Editor_Id'),
           'Faculty_Id' => $request->input('Faculty_Id'),
           'Batch_Id' => $request->input('Batch_Id'),
           'email' => $request->input('email'),
           'password' => $hashedPassword, // Use the hashed password directly
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

     //start piyumi
    public function edit($id)
    {
        $editor = Editor::where('id', $id)->first();
        return view('/Editor/editor_edit_UME', compact('editor'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
    $editor = Editor::find($id);

    if (!$editor) {
        return redirect()->back()->with('error', 'Editor not found');
    }

    $editor->E_Name = $request->input('E_Name');
    $editor->email = $request->input('email');
    $editor->update();

    return redirect('/admin_UME')->with('success', 'Admin data successfully updated!');
}

    //end piyumi
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Editor $editor)
    {
        //
    }

    //jayani_ends

//lahiru start

    public function dashboard(){

        return view('Editor.editor');
    }

    public function login(){

        return view('EditorLogin');
    }
    public function login_submit(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password'=>'required',
        ]);

        $credentials = $request->only('email', 'password');


        if(Auth::guard('editor')->attempt($credentials)){


            $user=Editor::where('email',$request->input('email'))->first();
                    Auth::guard('editor')->login($user);
            return redirect()->route('editor_dashboard')->with('success', 'Login successful');
        } else {
            return redirect()->route('editor_login')->with('error', 'Login unsuccessful');

        }
    }





}
