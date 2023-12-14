<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\Batch;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BatchController extends Controller
{
    /**
     * Show the batch form.
     */
    public function showBatchForm()
    {
        // Fetch faculties to populate dropdown
        $faculties = Faculty::all();

        return view('admin.admin_add_batch',  compact('faculties'));
    }

    /**
     * Store the batch data.
     */
    public function batchInput(Request $request)
    {
        // Validate the request data
        $request->validate([
            'Batch_Id' => 'required',
            'Faculty_Id' => 'required',
        ]);

        // Create a new batch
        Batch::create([
            'Batch_Id' => $request->input('Batch_Id'),
            'Faculty_Id' => $request->input('Faculty_Id'),
        ]);

        // Redirect with success message
        return redirect()->route('admin_add_batch')->with('success', 'Batch added successfully');
    }

    /**
     * Show the batch form view.
     */
    public function batch()
    {
        return view('admin_add_batch');
    }

    // Other CRUD methods...
}
