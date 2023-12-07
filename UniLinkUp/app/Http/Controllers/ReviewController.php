<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;


class ReviewController extends Controller
{
    public function create()
    {
        return view('reviews.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'comment' => 'required|string',
        ]);

        Review::create($request->all());

        return redirect()->route('reviews.create')
            ->with('success', 'Review submitted successfully!');
    }

    public function index()
    {
    $reviews = Review::all();
    return view('reviews.index', compact('reviews'));
    }
}
