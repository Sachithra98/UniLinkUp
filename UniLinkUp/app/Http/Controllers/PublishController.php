<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poll;
use App\Models\PublishPoll;

class PublishController extends Controller
{

    public function deniedPoll(Request $request)
    {
        // Handle the denial logic here
        // You can access the poll ID using $request->input('pollId')

        // Redirect to the moderator_denied_poll blade or perform other actions
        return redirect()->route('moderator_denied_poll');
    }

    public function addDataToPublishPoll(Request $request, $pollId)
{
    try {
        // Retrieve the poll data
        $poll = Poll::findOrFail($pollId);

        //Create a new record in the publish_polls table
        PublishPoll::create([
            /* 'poll_id' => $poll->id, */
            'poll_id' => $poll->id,
            'poll_title' => $poll->poll_title,
            'poll_desc' => $poll->poll_desc,
            'media_path' => $poll->media_path,
            'Approval_Letter'=> $poll->approval,
            'question' => $poll->question,
            'option1' => $poll->option1,
            'option2' => $poll->option2,
            'option3' => $poll->option3,
            'option4' => $poll->option4,
            'option5' => $poll->option5,
            // Add other fields as needed
        ]);


        // $publishpoll=new PublishPoll();
        // $publishpoll->poll_title=$poll->poll_title;
        // $publishpoll->poll_desc= $poll->poll_desc;
        // $publishpoll->question = $poll->question;
        // $publishpoll->media_path = $poll->ppost;
        // $publishpoll->Approval_Letter = $poll->approval;
        // $publishpoll->option1 = $poll->option1;
        // $publishpoll->option2 =$poll->option2;
        // $publishpoll->option3 = $poll->option3;
        // $publishpoll->option4 =$poll->option4;
        // $publishpoll->option5 = $poll->option5;

        // $publishpoll->save();

        // Handle any additional logic here
        $poll->delete();

            return redirect()->back()->with('success', 'Poll successfully accepted and published.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function showAll()
    {
        // Retrieve all publish polls from the database
        $publishPolls = PublishPoll::all();

        // Pass the publish polls data to the view
        return view('Student/viewer_poll', compact('publishPolls'));
    }
    public function index()
    {
        $polls = PublishPoll::with('votes')->get();

        return view('Editor.poll_details', compact('polls'));
    }
}
