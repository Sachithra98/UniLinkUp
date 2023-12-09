<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function index()
    {
        // Fetch polls and associated vote counts from the database
        $polls = Poll::with('votes')->get();
$polls = Poll::all();

    $currentPercentages = [];
    foreach ($polls as $poll) {
        $totalVotes = $poll->votes->sum('count');
        $percentages = [];

        if ($totalVotes > 0) {
            foreach ($poll->votes as $vote) {
                $percentage = ($vote->count / $totalVotes) * 100;
                $percentages[$vote->choice] = number_format($percentage, 2) . '%';
            }
        }

        $currentPercentages[$poll->id] = $percentages;
    }

    return view('Editor/editor_poll', compact('polls', 'currentPercentages'));
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
