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
public function login_submit(Request $request){
    $request->validate([
        'email' => 'required|email',
        'password'=>'required',
    ]);

    $credentials = $request->only('email', 'password');

    if(Auth::guard('student')->attempt($credentials)){

        $user=Student::where('email',$request->input('email'))->first();
                Auth::guard('student')->login($user);
        return redirect()->route('student_dashboard')->with('success', 'Login successful');
    } else {
        return redirect()->route('student_login')->with('error', 'Login unsuccessful');

    }
}



}
