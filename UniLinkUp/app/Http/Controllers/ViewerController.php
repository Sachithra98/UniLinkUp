<?php

namespace App\Http\Controllers;

use App\Post;
use App\Post_Operation;
use Illuminate\Http\Request;

class ViewerController extends Controller
{
    //
    public function likePost($postId)
    {
        $post = Post::find($postId);
        $post->likes++;
        $post->save();

        return redirect()->back();
    }

    public function unlikePost($postId)
    {
        $post = Post::find($postId);
        $post->likes--;
        $post->save();

        return redirect()->back();
    }

    public function sharePost($postId)
    {
        $post = Post::find($postId);
        $post->shares++;
        $post->save();

        return redirect()->back();
    }
}
