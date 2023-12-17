<?php
//jayani-start
namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Response;
//sachi-start
use App\Models\Faculty;
use App\Models\Department;
use App\Models\Batch;
use Hash;
use Auth;
class StudentController extends Controller
{

    public function data()
    {

        $faculties = Faculty::all();
        $departments = Department::all();
        $batches = Batch::all();

        return view('Admin/admin_createaccV', compact('faculties','departments','batches'));

    }
//sachi-end


    public function upload(Request $request)
          {
              $request->validate([
                  'file' => 'required|mimes:csv,txt|max:10240',
              ]);

              $path = $request->file('file')->store('csv');

              $this->processCSV($path);

              return redirect('/admin_createaccV')->with('success','Data successfully added!');
          }

          private function processCSV($path)
{
    $file = File::get(storage_path('app/' . $path));
    $data = array_map('str_getcsv', explode("\n", $file));

    array_shift($data);

    foreach ($data as $row) {
        // Skip empty rows
        if (empty($row[0])) {
            continue;
        }

        // Check if a password is provided, otherwise generate one
        $hashedPassword = !empty($row[4]) ? Hash::make($row[4]) : Hash::make(\Illuminate\Support\Str::random(5));

        // Insert data into the database
        Student::create([

            'Faculty_Id' => $row[1],
            'Batch_Id' => $row[2],
            'email' => $row[3],
            'password' => $hashedPassword,
            'S_Name' => $row[5],
            'Dep_Id' => $row[6],
            'Admin_Id' => $row[7],
        ]);
    }
}

          public function studentInput(Request $request)
          {
              // Validate the request data
              $request->validate([
                  'password' => 'required|min:5', // Add any other validation rules you need
              ]);

              // Hash the password
              $hashedPassword = Hash::make($request->input('password'));
              // Create a new student with the hashed password
              $student = Student::create([

                  'Faculty_Id' => $request->input('Faculty_Id'),
                  'Batch_Id' => $request->input('Batch_Id'),
                  'email' => $request->input('email'),
                  'password' => $hashedPassword, // Store the hashed password
                  'S_Name' => $request->input('S_Name'),
                  'Dep_Id' => $request->input('Dep_Id'),
                  'Admin_Id' => $request->input('Admin_Id'),
              ]);

              // Redirect with success message
              return redirect('/admin_createaccV')->with('success', 'Data successfully added!');
          }

   /*   public function downloadPasswords()
{
    // Fetch student numbers and decrypted passwords
    $students = Student::select('Student_Id', 'S_Password')->get();

    // Create a CSV file
    $csvFileName = 'passwords.csv';
    $csvFile = storage_path('app/' . $csvFileName);

    $file = fopen($csvFile, 'w');
    fputcsv($file, ['Student Number', 'Password']);

    foreach ($students as $student) {
        fputcsv($file, [$student->Student_Id,$student->S_Password]);
    }

    fclose($file);

    // Download the CSV file
    return Response::download($csvFile, $csvFileName, ['Content-Type' => 'text/csv']);
} */
          //jayani-end





//lahiru start
public function dashboard(){

    return view('Student.viewer');
}

public function login(){

    return view('StudentLogin');
}








public function login_submit(Request $request)
{
    try {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (!Auth::guard('student')->attempt($credentials)) {

            if (!Student::where('email', $request->input('email'))->exists()) {

                throw new \Exception('No account associated with this email address.');
            } else if (Hash::check($request->input('password'), Student::where('email', $request->input('email'))->first()->password)) {
                throw new \Exception('Your account is currently disabled. Please contact the administrator.');
            } else {
                throw new \Exception('Incorrect password. Please try again.');
            }
        }

        $user = Student::where('email', $request->input('email'))->first();
        Auth::guard('student')->login($user);

        return redirect()->route('student_dashboard')->with('success', 'Login successful');
    } catch (\Exception $e) {
        return redirect()->route('student_login')->with('error', $e->getMessage());
    }
}




public function logout(){

    Auth::guard('student')->logout();
    return redirect()->route('student_login')->with('Success','Logout Successfully');
}


//lahiru end

//start lishani
public function edit_S($id)
    {
        $student = Student::where('id', $id)->first();
        return view('/Admin/viewer_edit_UMV', compact('student'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update_S(Request $request, $id)
    {
        $student = Student::find($id);

    if (!$student ) {
        return redirect()->back()->with('error', 'Student not found');
    }

    $student->S_Name = $request->input('S_Name');
    $student->email = $request->input('email');
    $student->update();

    return redirect('/admin_UMV')->with('success', 'Student data successfully updated!');
}

//end lishani

//dhanu

public function delete($id)
{
    // Delete the student with the given ID from the database
    // Example code (make sure to adjust it based on your database and model):
    $student = Student::find($id);
    $student->delete();

    // Redirect back to the user management page
    return redirect()->back()->with('success', 'User deleted successfully.')
    ;}

    public function updateProfile(Request $request)
    {
        // Validate the form data
       

        // Update the admin profile
        $student = Auth::guard('student')->user();
        $student->email = $request->input('email');
        $student->S_Name = $request->input('S_Name');
        // Update other fields as needed

        $student->save();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Profile updated successfully');
    }




}
