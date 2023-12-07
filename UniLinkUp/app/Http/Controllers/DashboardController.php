<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function editor(){
        return view('/Editor/editor');
    }

    public function moderator(){
        return view('/Moerator/moderator');
    }
    public function admin(){
        return view('Admin/admin');
    }

    public function student(){
        return view('Student/student');
    }
    public function error(){
        return view('login');
    }

}
