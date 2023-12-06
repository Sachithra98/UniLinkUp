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
        // Generate a random password
        $generatedPassword = Str::random(12); 
    
        // Create a new moderator with the generated password
        $admin = Admin::create([
           'Admin_Id' => $request->input('Admin_Id'),
           'Admin_Email' => $request->input('Admin_Email'),
           'Admin_Password' => bcrypt($generatedPassword),
           'Admin_Name' => $request->input('Admin_Name'),
        ]);
        
    
     
        return redirect('/admin_createaccA')->with('success','Data successfully added!');
    } 
    //jayani-ends
}
