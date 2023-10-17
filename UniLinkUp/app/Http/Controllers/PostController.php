<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('q');
        
        // Perform the search on the posts table
        $posts = Post::where('title', 'like', '%' . $query . '%')->get();
        
        return view('posts.search', compact('posts', 'query'));
    }
    
}

class PostController extends Controller
{
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

}