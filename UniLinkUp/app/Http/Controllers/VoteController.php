<?php

namespace App\Http\Controllers;

use App\Models\PublishPoll;
use App\Models\Vote;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function index()
    {
        // Fetch publish polls and associated vote counts from the database
        $publishPolls = PublishPoll::with('votes')->get();

        $currentPercentages = [];

        foreach ($publishPolls as $publishPoll) {
            $totalVotes = $publishPoll->votes->sum('count');
            $percentages = [];

            if ($totalVotes > 0) {
                foreach ($publishPoll->votes as $vote) {
                    $percentage = ($vote->count / $totalVotes) * 100;
                    $percentages[$vote->choice] = number_format($percentage, 2) . '%';
                }
            }

            $currentPercentages[$publishPoll->id] = $percentages;
        }

        return view('Student/viewer_poll', compact('publish_Polls', 'currentPercentages'));
    }

    public function vote(Request $request)
{
    \Log::info('Received vote request:', $request->all());

    // Store the vote in the database with the associated poll ID
    Vote::create([
        'choice' => $request->input('choice'),
        'poll_id' => $request->input('pollId')
    ]);

    // Log additional information or return more data for debugging
    \Log::info('Vote stored successfully.');

    // Get vote counts for the specific poll
    $voteCounts = Vote::select('choice', \DB::raw('count(*) as count'))
        ->where('poll_id', $request->input('pollId'))
        ->groupBy('choice')
        ->get();

    return response()->json(['choice' => $request->input('choice'), 'votes' => $voteCounts]);
}

    
}  