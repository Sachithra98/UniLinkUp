<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShareController extends Controller
{
    public function share(string $id)
    {
        return view('Student.share' , compact('id'));
    }
}
