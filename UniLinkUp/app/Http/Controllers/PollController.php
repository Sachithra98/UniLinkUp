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

            
            // Poll::create([
            //     // 'poll_id' =>$request->poll_id,
            //     'poll_title' => $request->poll_title,
            //     'poll_desc' => $request->poll_desc,
            //     'question' => $request->question,
            //     'media_path' => $request->ppost,
            //     'Approval_Letter' => $request->approval,
            //     'option1' => $request->option1,
            //     'option2' => $request->option2,
            //     'option3' => $request->option3,
            //     'option4' => $request->option4,
            //     'option5' => $request->option5,
            // ]);

            
            $poll=new Poll();
            $poll->Editor_Id=$request->Editor_Id; 
            $poll->poll_title=$request->poll_title;
            $poll->poll_desc= $request->poll_desc;
            $poll->question = $request->question;
            $poll->media_path = $request->ppost;
            $poll->Approval_Letter = $request->approval;
            $poll->option1 = $request->option1;
            $poll->option2 =$request->option2;
            $poll->option3 = $request->option3;
            $poll->option4 =$request->option4;
            $poll->option5 = $request->option5;


            $photo = $request->file('ppost');
            if ($photo) {
                $originalName = $photo->getClientOriginalName();
                $extension = $photo->getClientOriginalExtension();
                $photoname = time() . '_post.' . $extension;  // Different name for post image
            
                $request->ppost->move('uploads', $photoname);
                $poll->media_path = $photoname;
            }
            
            $photo1 = $request->file('approval');
            if ($photo1) {
                $originalName = $photo1->getClientOriginalName();
                $extension = $photo1->getClientOriginalExtension();
                $photoname1 = time() . '_approval.' . $extension;  // Different name for approval image
            
                $request->approval->move('uploads', $photoname1);
                $poll->Approval_Letter = $photoname1;
            }
                $poll->save();


            //return redirect('/editor_create_poll')->with('success','Data successfully added!');
            return redirect('/editor_create_poll')->with('success','Data successfully added!');
    }

    // public function showAll()
    //     {
    //         // Retrieve all polls from the database
    //         $polls = Poll::all();

    //         // Pass the polls data to the view
    //         return view('Student/viewer_poll', compact('polls'));

        
        // }

        public function showM()
        {
            // Retrieve all polls from the database
            $polls = Poll::all();

            // Pass the polls data to the view
            return view('Moderator/moderator_poll', compact('polls'));

        
        }

        
}
