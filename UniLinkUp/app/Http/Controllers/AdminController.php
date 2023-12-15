<?php
//jayani-starts
namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use DB;
use App\Models\AdminAchieve;


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



    public function removeAdmin($id)
    {
        $admin = Admin::find($id); // Fetch the admin by ID
        if ($admin) {
            // Create an 'achieve' record with the admin data
            $achieve = new  Achieve();
            $achieve->Admin_Id = $admin->Admin_Id;
            $achieve->email = $admin->email;
            $achieve->password = $admin->password;
            $achieve->Admin_Name = $admin->Admin_Name;
            $achieve->save();

            // Delete the admin record
            $admin->delete();

            // Redirect or return a response
            return redirect()->back()->with('success', 'Admin removed successfully.');
        } else {
            return redirect()->back()->with('error', 'Admin not found.');
        }
    }

}