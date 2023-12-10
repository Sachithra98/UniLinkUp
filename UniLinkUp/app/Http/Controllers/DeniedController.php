<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Denied;
use App\Models\Poll;

class DeniedController extends Controller
{
    public function deniedpl()
    {
        return view('Moderator/moderator_denied_poll');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validator = $this->validate($request, [
            'reason' => 'required|string',
            'corrections' => 'required|string',
            'poll_id' => 'required|exists:polls,id',
        ]);

        // Create a new Denied instance and associate it with a specific poll
        $denied = Denied::create([
            'poll_id' => $request->poll_id,
            'reason' => $request->reason,
            'corrections' => $request->corrections,
        ]);

        // Associate the denied record with the specific poll
        // $poll = Poll::find($request->poll_id);

        // if (!$poll) {
        //     return redirect('/moderator_denied_poll')->with('error', 'Invalid poll ID');
        // }

        // $poll->denieds()->save($denied);

        // Redirect back with a success message
        return redirect('/moderator_denied_poll')->with('success', 'Data successfully added!');
    }

    public function showE()
    {
        // Retrieve all denied records from the database with the associated poll details
        $denieds = Denied::with('poll')->get();
    
        // Pass the denied records data to the view
        return view('Editor/editor_denied_poll', compact('denieds'));
    }
    
    public function updateDenied($poll_id)
    {
        // Perform the necessary logic to update the denieds table
        // You can use Eloquent or the Query Builder to update the record

        return response()->json(['success' => true]);
    }
}
