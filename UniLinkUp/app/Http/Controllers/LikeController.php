<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function like(Request $request, Post $post)
    {
        $studentId = $request->input('student_id');

        $existingLike = Like::where('post_id', $post->id)
                            ->where('student_id', $studentId)
                            ->first();

        if ($existingLike) {
            return response()->json(['message' => 'You already liked this post'], 400);
        }

        $like = new Like();
        $like->post_id = $post->id;
        $like->student_id = $studentId;
        $like->save();

        $post->incrementLikes();

        return response()->json(['message' => 'Post liked successfully']);
    }

    public function getLikes(Post $post)
    {
        $totalLikes = Like::where('post_id', $post->id)->count();
        return response()->json(['total_likes' => $totalLikes]);
    }
}



