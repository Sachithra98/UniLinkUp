<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function editor(){
        return view('editor');
    }

    public function moderator(){
        return view('welcome');
    }
    public function admin(){
        return view('admin');
    }

    public function student(){
        return view('welcome');
    }
    public function error(){
        return view('login');
    }

}
