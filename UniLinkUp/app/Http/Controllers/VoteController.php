<?php
/*Start Piyumi*/
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
        $request->validate([
            'choice' => 'required|in:buy,not-buy,may-buy',
        ]);

        // Store the vote in the database
        Vote::create(['choice' => $request->input('choice')]);

        // Get vote counts
        $voteCounts = Vote::select('choice', \DB::raw('count(*) as count'))
            ->groupBy('choice')
            ->get();

          /*   \Log::info('Vote recorded: ' . $request->input('choice')); */

        return response()->json(['choice' => $request->input('choice'), 'votes' => $voteCounts]);
    }

    /*end Piyumi*/
}