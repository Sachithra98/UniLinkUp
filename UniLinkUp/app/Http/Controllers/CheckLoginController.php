<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\Student;
use App\Models\Editor;
use App\Models\Moderator;

class CheckLoginController extends Controller
{
    public function redirectToDashboard(Request $request)
    {
        if (Admin::where('Admin_Id', $request->id)->where('Admin_Password', $request->password)->exists()) {
            return redirect()->route('admin.dashboard');
        } elseif (Student::where('Student_Id', $request->id)->where('S_Password', $request->password)->exists()) {
            return redirect()->route('student.dashboard');
        } elseif (Editor::where('Editor_Id', $request->id)->where('E_Password', $request->password)->exists()) {
            return redirect()->route('editor.dashboard');
        } elseif (Moderator::where('Moderator_Id', $request->id)->where('M_Password', $request->password)->exists()) {
            return redirect()->route('moderator.dashboard');
        }

        // If the user doesn't belong to any role or authentication fails, you can handle it here.
        // For example, you can redirect them to a generic dashboard or an error page.
        return redirect()->route('generic.dashboard');
    }
}
