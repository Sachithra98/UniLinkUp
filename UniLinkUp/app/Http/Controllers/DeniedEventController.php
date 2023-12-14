<?php

namespace App\Http\Controllers;

use App\Models\Denied_event;
use Illuminate\Http\Request;

class DeniedEventController extends Controller
{
    public function deniedevnt()
    {
        return view('Moderator/moderator_denied_event');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'post_id' => 'required', // Add any other validation rules
            'reason' => 'required',
            'corrections' => 'required',
        ]);
    
        // Create a new Denied_notice instance and store the data
        Denied_event::create($data);
    
        // Redirect or perform any other actions as needed
        return redirect()->back()->with('success', 'Request has sent to the editor');
    }

    public function showE()
    {
        // Retrieve all denied records from the database with the associated post details
        $denied_events = Denied_event::with('post')->get();
    
        // Pass the denied records data to the view
        return view('Editor/editor_denied_event', compact('denied_events'));
    }
    
    public function destroy(Denied_event $denied_events)
    {
        //
    }
}
