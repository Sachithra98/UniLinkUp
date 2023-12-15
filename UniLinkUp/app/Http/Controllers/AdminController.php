<?php
//jayani-starts
namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use DB;

use Illuminate\Support\Facades\Hash;

// use Hash;
// use Illuminate\Support\Facades\Auth;
use Auth;

class AdminController extends Controller
{
    public function adminInput(Request $request)
    {
        // Validate the request data
        $request->validate([
            'password' => 'required|min:5', // Add any other validation rules you need
        ]);

        // Hash the password

        $hashedPassword = Hash::make($request->input('password'));

        // Create a new moderator with the generated password
        $admin = Admin::create([
          
           'email' => $request->input('email'),
           'password' => $hashedPassword, // Use the hashed password directly
           'Admin_Name' => $request->input('Admin_Name'),
        ]);



        return redirect('/admin_createaccA')->with('success','Data successfully added!');
    }
    //jayani-ends




     //lahiru start//

     public function dashboard(){

        return view('Admin.admin');
    }



    public function login(){

        return view('AdminLogin');
    }



    public function login_submit(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password'=>'required',
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::guard('admin')->attempt($credentials)){

            $user=Admin::where('email',$request->input('email'))->first();
                    Auth::guard('admin')->login($user);

            return redirect()->route('admin_dashboard')->with('success', 'Login successful');
        } else {
            return redirect()->route('admin_login')->with('error', 'Login unsuccessful');

        }
    }

//lahiru end

    //piyumi start
    public function edit_record($Admin_Id){
        $admin = Admin::where('Admin_Id', $Admin_Id)->first();
        return view('/Admin/admin_edit_UMA', compact('admin'));
    }
    

    public function update_data(Request $request,  $Admin_Id) {
        $admin = Admin::find($Admin_Id);
       
    
        if (!$admin) {
            return redirect()->back()->with('error', 'Admin not found');
        }
        
        $admin->Admin_Name = $request->input('Admin_Name');
        $admin->email= $request->input('email');
        $admin->update();
    
        return redirect('/admin_UMA')->with('success', 'Admin data successfully updated!');
    }


}

