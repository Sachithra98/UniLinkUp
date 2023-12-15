<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShareController extends Controller
{
    public function share(string $id)
    {
        return view('/student/share_notice' , compact('id'));
    }

    public function shareEvent(string $id)
    {
        return view('/student/share_event' , compact('id'));
    }
}
