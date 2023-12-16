<?php

namespace App\Http\Controllers;
use App\Models\PublishNotice;
use App\Models\UnlikeNotice;
use Illuminate\Http\Request;

class UnlikeNoticeController extends Controller
{
    public function unlike(Request $request, PublishNotice $notice)
    {
        $unlike = new UnlikeNotice();
        $unlike->notice_id = $notice->Publish_notice_id;
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
    public function show(UnlikeNotice $unlikeNotice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UnlikeNotice $unlikeNotice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UnlikeNotice $unlikeNotice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UnlikeNotice $unlikeNotice)
    {
        //
    }
}