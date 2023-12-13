<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculty;
use App\Models\Society;
use App\Models\Role;
use App\Models\User;
use App\Models\Poll;
use App\Models\Post;
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

        $studentCounts = Student::select('Dep_Id',\DB::raw('count(*) as student_count'))
            ->groupBy('Dep_Id')
            ->get();

        $stafffacCounts = Staff::join('faculties','staff.Faculty_Id','=','faculties.Faculty_Id')
            ->select('staff.Faculty_Id','faculties.Faculty_Name',\DB::raw('count(*) as stafffac_count'))
            ->groupBy('staff.Faculty_Id','faculties.Faculty_Name')
            ->get();

        $studentfacCounts = Student::select('Faculty_Id',\DB::raw('count(*) as studentfac_count'))
            ->groupBy('Faculty_Id')
            ->get();

        return view('admin', compact('totalFaculties','totalSocieties','totalRoles','totalUsers','totalPolls','staffCounts','studentCounts','stafffacCounts','studentfacCounts'));

    }

    public function student(){
        return view('Student/student');
    }
    public function error(){
        return view('login');
    }

}
