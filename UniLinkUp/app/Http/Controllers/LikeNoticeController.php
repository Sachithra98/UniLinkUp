<?php

namespace App\Http\Controllers;
use App\Models\PublishNotice;
use App\Models\LikeNotice;
use Illuminate\Http\Request;

class LikeNoticeController extends Controller
{
    public function like(Request $request, PublishNotice $notice)
    {
        $like = new LikeNotice();
        $like->notice_id = $notice->Publish_notice_id;
        $like->save();

        return redirect()->back();
        
    }
}