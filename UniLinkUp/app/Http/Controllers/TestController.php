<?php
//jayani-starts
namespace App\Http\Controllers;
use App\Models\Test;
use Illuminate\Support\Str;
use Illuminate\Http\Request;



use Hash;
// use Illuminate\Support\Facades\Auth;
use Auth;

class TestController extends Controller
{
    // public function adminInput(Request $request)
    // {
    //     // Validate the request data
    //     $request->validate([
    //         'password' => 'required|min:5', // Add any other validation rules you need
    //     ]);

    //     // Hash the password
    //     $hashedPassword = bcrypt($request->input('password'));

    //     // Create a new moderator with the generated password
    //     $admin = Admin::create([
    //        'Admin_Id' => $request->input('Admin_Id'),
    //        'email' => $request->input('email'),
    //        'password' => bcrypt($hashedPassword),
    //        'Admin_Name' => $request->input('Admin_Name'),
    //     ]);



    //     return redirect('/admin_createaccA')->with('success','Data successfully added!');
    // }
    // //jayani-ends



     //lahiru start//

     public function dashboard(){

        return view('TestDashboard');
    }



    public function login(){

        return view('TestLogin');
    }



    // public function login_submit(Request $request){
    //     $request->validate([
    //         'email' => 'required|email',
    //         'password'=>'required',
    //     ]);

    //     $credentials = $request->only('email', 'password');

    //     if(Auth::guard('test')->attempt($credentials)){

    //         $user=Test::where('email',$request->input('email'))->first();
    //                 Auth::guard('test')->login($user);

    //         return redirect()->route('test_dashboard')->with('success', 'Login successful');
    //     } else {
    //         return redirect()->route('test_login')->with('error', 'Login unsuccessful');

    //     }
    // }




    public function login_submit(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);

            $credentials = $request->only('email', 'password');

            if (!Auth::guard('test')->attempt($credentials)) {
                if (!Test::where('email', $request->input('email'))->exists()) {
                    throw new \Exception('No account associated with this email address.');
                } else if (Hash::check($request->input('password'), Test::where('email', $request->input('email'))->first()->password)) {
                    throw new \Exception('Your account is currently disabled. Please contact the administrator.');
                } else {
                    throw new \Exception('Incorrect password. Please try again.');
                }
            }

            $user = Test::where('email', $request->input('email'))->first();
            Auth::guard('test')->login($user);

            return redirect()->route('test_dashboard')->with('success', 'Login successful');
        } catch (\Exception $e) {
            return redirect()->route('test_login')->with('error', $e->getMessage());
        }
    }

    public function logout(){

        Auth::guard('admin')->logout();
        return redirect()->route('admin_login')->with('Success','Logout Successfully');
    }



//lahiru end
}
