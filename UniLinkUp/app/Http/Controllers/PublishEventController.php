<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PublishEvent;
use Illuminate\Http\Request;
use PHPUnit\Event\Code\Test;

class PublishEventController extends Controller
{
        public function deniedEvent(Request $request)
        {
            // Handle the denial logic here
        
    
            // Redirect to the moderator_denied_poll blade or perform other actions
            return redirect()->route('moderator_denied_event');
        }
        public function addDataToPublishEvent(Request $request, $postId)
    
        {
            try {
                // Retrieve the poll data
                $post = Post::findOrFail($postId);
                PublishEvent::create([
                    'Publish_event_id' => $post->Post_Id,
                    'Title' => $post->Title,
                    'Description' => $post->Description,
                    'media_path' => $post->media_path,
                    'Society_Id' => $post->Society_Id,
                    'Dep_Id' => $post->Dep_Id,
                    'Faculty_Id' => $post->Faculty_Id,
                    'Editor_Id' => $post->Editor_Id,
                    'Approval_Letter' => $post->Approval_Letter,
                ]);
    
                // Delete the original notice record
               /*  $post->delete(); */
        
                // Handle any additional logic here
        
                    return redirect()->back()->with('success', 'Event successfully accepted and published.');
                } catch (\Exception $e) {
                    return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
                }
            }
    
            public function showAllE()
            {
                // Retrieve all publish polls from the database
                $publishEvent = PublishEvent::all();
        
                // Pass the publish polls data to the view
                return view('Student/viewer_event', compact('publishEvent'));
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
        public function show(publishEvent $publishEvent)
        {
            //
        }
    
        /**
         * Show the form for editing the specified resource.
         */
        public function edit(publishEvent $publishEvent)
        {
            //
        }
    
        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, publishEvent $publishEvent)
        {
            //
        }
    
        /**
         * Remove the specified resource from storage.
         */
        public function destroy(publishEvent $publishEvent)
        {
            //
        }
    }

