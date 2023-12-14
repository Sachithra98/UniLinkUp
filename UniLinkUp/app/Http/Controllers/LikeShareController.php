<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\LikeNotice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeShareController extends Controller
{
     
    /**
     * Display a listing of the resource.
     */
    public function viewer_notice()
    {
        $likes = Like::orderBy('created_at', 'DESC')->get();
        $currentStudentID = config('app.Student_Id');
        
        $publishNotices = LikeNotice::orderBy('created_at', 'DESC')->get();
        $StudentID  = $currentStudentID ;

        $likedpublishNoticeIds = Like::where('Student_Id', $StudentID )->pluck('Publish_notice_id')->toArray();



        foreach ($publishNotices as $notice) {
            $notice->isLiked = false;
            foreach ($likedpublishNoticeIds as $likedpublishNoticeId) {
                if ($notice->Publish_notice_id === $likedpublishNoticeId) {
                    $notice->isLiked = true;
                    break;
                }
            }
        }


        return view('Student.viewer_notice', compact('Student'));
    }

    public function addLike($Publish_notice_id)
    {
        $currentStudentID = config('app.Student_ID');

        $like = new Like();
         
        $existingLike = Like::where('Publish_notice_id', $Publish_notice_id)
                            ->where('Student_ID',1 ) 
                            ->first();

        if ($existingLike) {
            return "Like already exists!";
        }
        $like->save();
        $like->Student_ID = $currentStudentID;
        $like->Publish_notice_id = $Publish_notice_id;

        
        LikeNotice::where('Publish_notice_id', $Publish_notice_id)->increment('likes_count');
        return redirect()->route('showAllN');
    }

    public function unlike($Publish_notice_id)
    {
        $currentStudentID= config('app.Student_ID');
    

        // Find and delete the like record based on the hardcoded values
        Like::where('Student_ID', $currentStudentID)
            ->where('Publish_notice_id', $Publish_notice_id)
            ->delete();
            LikeNotice::where('Publish_notice_id', $Publish_notice_id)->decrement('likes_count');
        return redirect()->route('showAllN');

    }



    public function showAddLikeForm()
    {
        return view('add-like');
    }

    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $likes = Like::orderBy('created_at', 'DESC')->get();
        $currentStudentId= config('app.Student_Id');
        
        $publishNotices =LikeNotice::orderBy('created_at', 'DESC')->get();
        $StudentId = $currentStudentId;

        $likedpublishNoticeIds = Like::where('Student_Id', $StudentId)->pluck('Publish_notice_id')->toArray();



        foreach ($publishNotices as $notice) {
            $notice->isLiked = false;
            foreach ($likedpublishNoticeIds as $likedpublishNoticeId) {
                if ($notice->Publish_notice_id === $likedpublishNoticeId) {
                    $notice->isLiked = true;
                    break;
                }
            }
        }
         
        $selected_notice = null; 

        foreach ($publishNotices as $notice) {
            if($noticet->Publish_notice_id == $id){
                $selected_notice  = $notice;
            }
        }

          return view('Student.show', compact('selected_notice'));
    }
 
    
    

}
