<?php
//jayani-starts
namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminInput(Request $request)
    {
        // Validate the request data
        $request->validate([
            'password' => 'required|min:5', // Add any other validation rules you need
        ]);
    
        // Hash the password
        $hashedPassword = bcrypt($request->input('password'));
    
        // Create a new moderator with the generated password
        $admin = Admin::create([
           'Admin_Id' => $request->input('Admin_Id'),
           'email' => $request->input('email'),
           'password' => bcrypt($hashedPassword),
           'Admin_Name' => $request->input('Admin_Name'),
        ]);
        
    
     
        return redirect('/admin_createaccA')->with('success','Data successfully added!');
    } 
    //jayani-ends
}
