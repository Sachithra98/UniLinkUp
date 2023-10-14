<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User; // Import the User model

class HomeController extends Controller
{
    public function index()
    {
        $user = User::inRandomOrder()->first(); // Retrieve a random user from the database
        $name = $user->name; // Get the user's name

        return view('admin', ['name' => $name]);
    }
}


