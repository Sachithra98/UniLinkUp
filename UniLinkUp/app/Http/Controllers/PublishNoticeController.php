<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use App\Models\PublishNotice;
use Illuminate\Http\Request;

class PublishNoticeController extends Controller
{
    public function deniedNotice(Request $request)
    {
        // Handle the denial logic here
        // You can access the poll ID using $request->input('pollId')

        // Redirect to the moderator_denied_poll blade or perform other actions
        return redirect()->route('moderator_denied_notice');
    }
    public function addDataToPublishNotice(Request $request, $noticeId)
    {
        try {
            // Retrieve the poll data
            $notice = Notice::findOrFail($noticeId);
   
            PublishNotice::create([
                'Publish_notice_id' => $notice->Post_Id,
                'Title' => $notice->Title,
                'Description' => $notice->Description,
                'media_path' => $notice->media_path,
                'Society_Id' => $notice->Society_Id,
                'Dep_ID' => $notice->Dep_ID,
                'Faculty_Id' => $notice->Faculty_Id,
                'Editor_Id' => $notice->Editor_Id,
                'Approval_Letter' => $notice->Approval_Letter,
            ]);

            // Delete the original notice record
            $notice->delete();
    
            // Handle any additional logic here
    
                return redirect()->back()->with('success', 'Notice successfully accepted and published.');
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
            }
        }

        public function showAllN()
        {
            // Retrieve all publish polls from the database
            $publishNotices = PublishNotice::all();
            $publishNotices = PublishNotice::with('likes')->get();
            $publishNotices = PublishNotice::with('unlikes')->get();
    
            // Pass the publish polls data to the view
            return view('Student/viewer_notice', compact('publishNotices'));
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PublishNotice $publishNotice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PublishNotice $publishNotice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PublishNotice $publishNotice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PublishNotice $publishNotice)
    {
        //
    }
}
