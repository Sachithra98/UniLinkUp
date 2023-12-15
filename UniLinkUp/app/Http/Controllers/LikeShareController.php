<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\LikeNotice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LikeShareController extends Controller
{
    public function index()
    {
        $validStudentID = config('app.Student_Id');

        $likes = Like::orderBy('created_at', 'DESC')->get();
        $publishNotices = LikeNotice::orderBy('created_at', 'DESC')->get();
        $Student = $validStudentID; // Assuming this is the correct assignment

        $likedpublishNoticeIds = Like::where('Student_Id', $Student)->pluck('Publish_notice_id')->toArray();

        foreach ($publishNotices as $notice) {
            $notice->isLiked = in_array($notice->Publish_notice_id, $likedpublishNoticeIds);
        }

        return view('Student.index', compact('publishNotices', 'Student'));
    }

    public function addLike($Publish_notice_id)
    {
        $validStudentID = config('app.Student_ID');

        $like = new Like();
        $like->Student_ID = $validStudentID;
        $like->Publish_notice_id = $Publish_notice_id;
        $like->save();

        LikeNotice::where('Publish_notice_id', $Publish_notice_id)->increment('likes_count');

        return redirect()->route('showAllN');
    }

    public function unlike($Publish_notice_id)
    {
        $validStudentID = config('app.Student_ID');

        Like::where('Student_ID', $validStudentID)
            ->where('Publish_notice_id', $Publish_notice_id)
            ->delete();

        LikeNotice::where('Publish_notice_id', $Publish_notice_id)->decrement('likes_count');

        return redirect()->route('showAllN');
    }

    public function show(string $id)
    {
        $validStudentID = config('app.Student_Id');

        $likes = Like::orderBy('created_at', 'DESC')->get();
        $publishNotices = LikeNotice::orderBy('created_at', 'DESC')->get();
        $Student = $validStudentID; // Assuming this is the correct assignment

        $likedpublishNoticeIds = Like::where('Student_Id', $Student)->pluck('Publish_notice_id')->toArray();

        foreach ($publishNotices as $notice) {
            $notice->isLiked = in_array($notice->Publish_notice_id, $likedpublishNoticeIds);
        }

        $selected_notice = null;
        foreach ($publishNotices as $notice) {
            if ($notice->Publish_notice_id == $id) {
                $selected_notice = $notice;
                break;
            }
        }

        return view('Student.show', compact('selected_notice'));
    }
}


