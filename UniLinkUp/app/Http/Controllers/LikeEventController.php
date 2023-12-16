<?php

namespace App\Http\Controllers;

use App\Models\LikeEvent;
use Illuminate\Http\Request;

class LikeEventController extends Controller
{
    public function like(Request $request, PublishEvent $event)
    {
        $like = new LikeEvent();
        $like->event_id = $notice->Publish_event_id;
        $like->save();

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
    public function show(LikeEvent $likeEvent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LikeEvent $likeEvent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LikeEvent $likeEvent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LikeEvent $likeEvent)
    {
        //
    }
}
