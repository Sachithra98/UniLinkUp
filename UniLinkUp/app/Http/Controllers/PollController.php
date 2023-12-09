<?php

namespace App\Http\Controllers;
//sachithra
use App\Models\Poll;
use Illuminate\Http\Request;

class PollController extends Controller
{
    public function poll(){
        return view('Editor/editor_create_poll');
    }
    public function store(Request $request)
    {
        
        /*$validator = $this->validate($request, [
                'poll_id' => 'required|string',
                'poll_title' => 'required|string',
                'poll_desc' => 'required|string',
                'question' => 'required|string',
                'option1' => 'nullable|string',
                'option2' => 'nullable|string',
                'option3' => 'nullable|string',
                'option4' => 'nullable|string',
                'option5' => 'nullable|string'
                
            ]);
            
            if ($validator->fails()) {
                return redirect('/editor_create_poll')->withErrors($validator)->withInput();
            }*/

            
            Poll::create([
                'poll_id' =>$request->poll_id,
                'poll_title' => $request->poll_title,
                'poll_desc' => $request->poll_desc,
                'question' => $request->question,
                'option1' => $request->option1,
                'option2' => $request->option2,
                'option3' => $request->option3,
                'option4' => $request->option4,
                'option5' => $request->option5,
            ]);

            //return redirect('/editor_create_poll')->with('success','Data successfully added!');
            return redirect('/editor_create_poll')->with('success','Data successfully added!');
    }

    public function showAll()
        {
            // Retrieve all polls from the database
            $polls = Poll::all();

            // Pass the polls data to the view
            return view('Editor/editor_poll', compact('polls'));

        
        }
}
