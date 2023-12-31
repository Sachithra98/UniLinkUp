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
        return view('/Admin/moderator_edit_UMM', compact('moderator'));
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



    public function login_submit(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);

            $credentials = $request->only('email', 'password');

            if (!Auth::guard('moderator')->attempt($credentials)) {

                if (!Moderator::where('email', $request->input('email'))->exists()) {

                    throw new \Exception('No account associated with this email address.');
                } else if (Hash::check($request->input('password'), Moderator::where('email', $request->input('email'))->first()->password)) {
                    throw new \Exception('Your account is currently disabled. Please contact the administrator.');
                } else {
                    throw new \Exception('Incorrect password. Please try again.');
                }
            }

            $user = Moderator::where('email', $request->input('email'))->first();
            Auth::guard('moderator')->login($user);

            return redirect()->route('moderator_dashboard')->with('success', 'Login successful');
        } catch (\Exception $e) {
            return redirect()->route('moderator_login')->with('error', $e->getMessage());
        }
    }



    public function logout(){

        Auth::guard('moderator')->logout();
        return redirect()->route('moderator_login')->with('Success','Logout Successfully');
    }


    //lahiru end


    //dhanu star
    public function delete($id)
    {
        // Delete the moderator with the given ID from the database
        // Example code (make sure to adjust it based on your database and model):
        $moderator = Moderator::find($id);
        $moderator->delete();
    
        // Redirect back to the user management page
        return redirect()->back()->with('success', 'User deleted successfully.');
        

    }

    //dhanu end
    public function updateProfile(Request $request)
    {
        // Validate the form data
       

        // Update the admin profile
        $moderator = Auth::guard('moderator')->user();
        $moderator->email = $request->input('email');
        $moderator->M_Name = $request->input('S_Name');
        // Update other fields as needed

        $moderator->save();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Profile updated successfully');
    }





}
