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
    //     // Get available options from the database
    //     $availableOptions = Vote::distinct('choice')->pluck('choice')->toArray();

    //     // Generate validation rules dynamically
    //     //$validationRules = [
    //     //     'choice' => 'required|in:' . implode(',', $availableOptions),
    //     // ];

    //     // Validate the request
    //     //$request->validate($validationRules);

    //     // Store the vote in the database
    //     Vote::create(['choice' => $request->input('choice')]);

    //     // Get vote counts
    //     $voteCounts = Vote::select('choice', \DB::raw('count(*) as count'))
    //         ->groupBy('choice')
    //         ->get();

    //     return response()->json(['choice' => $request->input('choice'), 'votes' => $voteCounts]);
    // }
    
    // Store the vote in the database with the associated poll ID
    Vote::create(['choice' => $request->input('choice'), 'poll_id' => $request->input('pollId')]);

    // Get vote counts for the specific poll
    $voteCounts = Vote::select('choice', \DB::raw('count(*) as count'))
        ->where('poll_id', $request->input('pollId'))
        ->groupBy('choice')
        ->get();

    return response()->json(['choice' => $request->input('choice'), 'votes' => $voteCounts]);
}
}
