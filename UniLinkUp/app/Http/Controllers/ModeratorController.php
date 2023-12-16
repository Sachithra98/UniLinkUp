<?php
//jayani-starts
namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\Moderator;
use Illuminate\Http\Request;

use App\Models\Department;
use App\Models\Society;
use Hash;
use Auth;
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
        $hashedPassword = Hash::make($request->input('password'));

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

     //piyumi
    public function edit_M($id)
    {
        $moderator = Moderator::where('id', $id)->first();
        return view('/Admin/admin_edit_UMM', compact('moderator'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update_M(Request $request, $id)
    {
         $moderator = Moderator::find($id);

    if (!$moderator) {
        return redirect()->back()->with('error', 'Moderator not found');
    }

    $moderator->M_Name = $request->input('M_Name');
    $moderator->email = $request->input('email');
    $moderator->update();

    return redirect('/admin_UMM')->with('success', 'Admin data successfully updated!');
    }
    //piyumi end

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Moderator $moderator)
    {
        //
    }

    //jayani-ends

    //lahiru start


    public function dashboard(){

        return view('Moderator.moderator');
    }

    public function login(){

        return view('ModeratorLogin');
    }
    public function login_submit(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password'=>'required',
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::guard('moderator')->attempt($credentials)){

            $user=Moderator::where('email',$request->input('email'))->first();
                    Auth::guard('moderator')->login($user);
            return redirect()->route('moderator_dashboard')->with('success', 'Login successful');
        } else {
            return redirect()->route('moderator_login')->with('error', 'Login unsuccessful');

        }
    }
}
