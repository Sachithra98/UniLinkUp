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
          //jayani-end
}