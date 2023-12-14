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
    { foreach ($publishNotices as $notice) {
        if($noticet->Publish_notice_id == $id){
            $selected_notice  = $notice;
        }
    }

      return view('Student.show', compact('selected_Publish_notice'));
}
}
