<?php

namespace App\Http\Controllers;

use App\Models\Denied_notice;
use Illuminate\Http\Request;

class DeniedNoticeController extends Controller
{
    public function deniednts()
    {
        return view('Moderator/moderator_denied_notice');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'notice_id' => 'required', // Add any other validation rules
            'reason' => 'required',
            'corrections' => 'required',
        ]);
    
        // Create a new Denied_notice instance and store the data
        Denied_notice::create($data);
    
        // Redirect or perform any other actions as needed
        return redirect()->back()->with('success', 'Request has sent to the editor');
    }

    public function showE()
    {
        // Retrieve all denied records from the database with the associated poll details
        $denied_notices = Denied_notice::with('notice')->get();
    
        // Pass the denied records data to the view
        return view('Editor/editor_denied_notice', compact('denied_notices'));
    }

    // Define the relationship to get the associated Notice
    // public function notice()
    // {
    //     return $this->belongsTo('App\Models\Notice', 'notice_id', 'Post_Id');
    // }
    
    public function destroy(Denied_notice $denied_notice)
    {
        //
    }
}
