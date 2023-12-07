<?php
//jayani-starts
namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\Editor;
use Illuminate\Http\Request;

class EditorController extends Controller
{
    public function editorInput(Request $request)
    {
        // Generate a random password
        $generatedPassword = Str::random(12); 
    
        // Create a new staff with the generated password
        $editor = Editor::create([
           'Editor_Id' => $request->input('Editor_Id'),
           'Faculty_Id' => $request->input('Faculty_Id'),
           'Batch_Id' => $request->input('Batch_Id'),
           'E_Email' => $request->input('E_Email'),
           'E_Password' => bcrypt($generatedPassword),
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
