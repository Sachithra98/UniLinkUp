<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculty;
use App\Models\Society;
use App\Models\Role;
use App\Models\User;
use App\Models\Poll;
use App\Models\Staff;
use App\Models\Student;


class DashboardController extends Controller
{
    public function editor(){
        return view('/Editor/editor');
    }

    public function moderator(){
        return view('/Moerator/moderator');
    }
    public function admin()
    {
        $totalFaculties = Faculty::count();
        $totalSocieties = Society::count();
        $totalRoles = Role::count();

        $totalUsers = User::count();

        $totalPolls = Poll::count();



        $staffCounts = Staff::join('departments','staff.Dep_Id','=','departments.Dep_Id')
            ->select('staff.Dep_Id', 'departments.Dep_Name',\DB::raw('count(*) as staff_count'))
            ->groupBy('staff.Dep_Id','departments.Dep_Name')
            ->get();


            $studentCounts = Student::join('departments', 'students.Dep_Id', '=', 'departments.Dep_Id')
            ->select('students.Dep_Id', 'departments.Dep_Name', \DB::raw('count(*) as student_count'))
            ->groupBy('students.Dep_Id', 'departments.Dep_Name') // Use 'departments.Dep_Name' here
            ->get();




        $stafffacCounts = Staff::join('faculties','staff.Faculty_Id','=','faculties.Faculty_Id')
            ->select('staff.Faculty_Id','faculties.Faculty_Name',\DB::raw('count(*) as stafffac_count'))
            ->groupBy('staff.Faculty_Id','faculties.Faculty_Name')
            ->get();

        $studentfacCounts = Student::join('faculties','students.Faculty_Id','=','faculties.Faculty_Id')
            ->select('students.Faculty_Id','faculties.Faculty_Name',\DB::raw('count(*) as studentfac_count'))
            ->groupBy('students.Faculty_Id','faculties.Faculty_Name')
            ->get();

        return view('Admin/admin', compact('totalFaculties','totalSocieties','totalRoles','totalUsers','totalPolls','staffCounts','studentCounts','stafffacCounts','studentfacCounts'));

    }

    public function student(){
        return view('Student/student');
    }
    public function error(){
        return view('login');
    }

}
