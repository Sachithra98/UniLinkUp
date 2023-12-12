<?php
//jayani-starts
namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use DB;

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

    public function edit_record($Admin_Id){
        $admin = Admin::where('Admin_Id', $Admin_Id)->first();
        return view('/Admin/admin_edit_UMA', compact('admin'));
    }
    

    public function update_data(Request $request,  $Admin_Id) {
        $admin = Admin::find($Admin_Id);
       
    
        if (!$admin) {
            return redirect()->back()->with('error', 'Admin not found');
        }
        
        $admin->Admin_Name = $request->Admin_Name;
        $admin->Admin_Email = $request->Admin_Email;
    
        $admin->save();
    
        return redirect('Admin_UMA')->with('success', 'Admin data successfully updated!');
    }
    



    
}
