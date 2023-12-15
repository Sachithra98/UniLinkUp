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

    public function show(string $id)
    {
        $validStudentID = config('app.Student_Id');

     
        foreach ($publishNotices as $notice) {
            if ($notice->Publish_notice_id == $id) {
                $selected_notice = $notice;
                break;
            }
        }

        return view('Student.show', compact('selected_notice'));
    }
}