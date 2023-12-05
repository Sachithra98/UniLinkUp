<?php
//jayani-start
namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StudentController extends Controller
{

    
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
      
              foreach ($data as $row) {
                  // Skip empty rows
                  if (empty($row[0])) {
                      continue;
                  }
      
                  // Auto-generate password (you can customize this logic)
                  $password = bcrypt(\Illuminate\Support\Str::random(10));

                  // Insert data into the database
                  Student::create([
                    'Student_Id' => $row[0],
                      'Faculty_Id' => $row[1],
                      'Batch_Id' => $row[2],
                      'S_Email' =>$row[3],
                      'S_Password' =>  $password,
                      'S_Name' => $row[4],
                      'Dep_Id' => $row[5],
                      'Admin_Id' => $row[6],
                    
                  ]);
              }


          }
          public function studentInput(Request $request)
     {
         // Validate the request data
        /*  $request->validate([
             'Admin_Id' => 'required',
             'Admin_Email' => 'required|email',
             'Admin_Name' => 'required',
         ]);
      */
         // Generate a random password
         $generatedPassword = Str::random(12); // You can adjust the password length as needed
     
         // Create a new Admin with the generated password
         $admin = Student::create([
            'Student_Id' => $request->input('Student_Id'),
            'Faculty_Id' => $request->input('Faculty_Id'),
            'Batch_Id' => $request->input('Batch_Id'),
            'S_Email' => $request->input('S_Email'),
            'S_Password' => bcrypt($generatedPassword),
            'S_Name' => $request->input('S_Name'),
            'Dep_Id' => $request->input('Dep_Id'),
            'Admin_Id' => $request->input('Admin_Id'),
         ]);
     
         // You may want to send the generated password to the user or handle it as needed
     
         return redirect('/admin_createaccV')->with('success','Data successfully added!');
     }
          //jayani-end
}