<?php
//jayani-starts
namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\Moderator;
use Illuminate\Http\Request;

class ModeratorController extends Controller
{
    public function moderatorInput(Request $request)
    {
        // Generate a random password
        $generatedPassword = Str::random(12); 
    
        // Create a new moderator with the generated password
        $moderator = Moderator::create([
           'Moderator_Id' => $request->input('Moderator_Id'),
           'M_Email' => $request->input('M_Email'),
           'M_Password' => bcrypt($generatedPassword),
           'M_Name' => $request->input('M_Name'),
           'Position' => $request->input('Position'),
           'Dep_Id' => $request->input('Dep_Id'),
           'Admin_Id' => $request->input('Admin_Id'),
           'Society_Id'=> $request->input('Society_Id'),
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
