<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostOperationController extends Controller
{
    //dhilmi
    public function like($postId)
    {
        $postOperation = new PostOperation();
        $postOperation->Viewer_Id = auth()->id();
        $postOperation->Post_Id = $postId;
        $postOperation->Type_Id = 'like';
        $postOperation->View_Date = now();
        $postOperation->save();

        return redirect()->back()->with('success', 'Post liked successfully');
    }

    //dhilmi
    public function unlike($postId)
    {
        $userId = auth()->id();
        PostOperation::where('Viewer_Id', $userId)
                     ->where('Post_Id', $postId)
                     ->where('Type_Id', 'like')
                     ->delete();

        return redirect()->back()->with('success', 'Post unliked successfully');
    }
}   
