<?php
//jayani-starts
namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\Moderator;
use Illuminate\Http\Request;

use App\Models\Department;
use App\Models\Society;

class ModeratorController extends Controller
{
    //sachi start
    public function data()
    {
      
    
        $societies = Society::all();
        $departments = Department::all();

        return view('Admin/admin_createaccM', compact('societies','departments'));

    }
    //sachi end


    public function moderatorInput(Request $request)
    {
         // Validate the request data
         $request->validate([
            'password' => 'required|min:5', // Add any other validation rules you need
        ]);
    
        // Hash the password
        $hashedPassword = bcrypt($request->input('password'));
    
        // Create a new moderator with the generated password
        $moderator = Moderator::create([
          
           'email' => $request->input('email'),
           'password' => $hashedPassword,
           'M_Name' => $request->input('M_Name'),
           'Position' => $request->input('Position'),
           'Dep_Id' => $request->input('Dep_Id'),
           'Admin_Id' => $request->input('Admin_Id'),
           'Society_Id'=> $request->input('Society_Id'),
           'Faculty_Id' => $request->input('Faculty_Id'),
        ]); 
       
        
    
     
        return redirect('/admin_createaccM')->with('success','Data successfully added!');
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
    public function show(Moderator $moderator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Moderator $moderator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Moderator $moderator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Moderator $moderator)
    {
        //
    }

    //jayani-ends
}
