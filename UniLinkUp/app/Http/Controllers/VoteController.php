<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function index()
    {
        return view('Editor/editor_poll');
    }

    public function vote(Request $request)
    {
        \Log::info('Received vote request:', $request->all());

        // Store the vote in the database with the associated poll ID
        Vote::create([
            'choice' => $request->input('choice'),
            'poll_id' => $request->input('pollId')
        ]);

        // Get vote counts for the specific poll
        $voteCounts = Vote::select('choice', \DB::raw('count(*) as count'))
            ->where('poll_id', $request->input('pollId'))
            ->groupBy('choice')
            ->get();

        return response()->json(['choice' => $request->input('choice'), 'votes' => $voteCounts]);
    }
}
