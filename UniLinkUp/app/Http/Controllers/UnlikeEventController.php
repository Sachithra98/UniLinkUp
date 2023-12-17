<?php

namespace App\Http\Controllers;
use App\Models\PublishEvent;
use App\Models\UnlikeEvent;
use Illuminate\Http\Request;

class UnlikeEventController extends Controller
{ 
    public function unlike(Request $request, PublishEvent $post)
    {
        $unlike = new UnlikeEvent();
        $unlike->event_id = $post->Publish_event_id;
        $unlike->save();

        return redirect()->back();
        
    }
    public function index()
    {
        //
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
    public function show(UnlikeEvent $unlikeEvent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UnlikeEvent $unlikeEvent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UnlikeEvent $unlikeEvent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UnlikeEvent $unlikeEvent)
    {
        //
    }
}
