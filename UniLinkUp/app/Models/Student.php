<?php
//jayani-start
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'Student_Id',
                      'Faculty_Id',
                      'Batch_Id',
                      'S_Email',
                      'S_Password',
                      'S_Name',
                      'Dep_Id',
                      'Admin_Id'
                    
    ];
}
//jayani_end
