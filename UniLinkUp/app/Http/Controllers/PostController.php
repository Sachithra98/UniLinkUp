<?php
//sachithra
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Post;

use App\Models\Faculty;
use App\Models\Department;
use App\Models\Society;

class PostController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('q');
        
        // Perform the search on the posts table
        $posts = Post::where('title', 'like', '%' . $query . '%')->get();
        
        return view('posts.search', compact('posts', 'query'));
    }
    

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    
    public function post(){
        return view('Editor/editor_create_event');
    }

    // public function create()
    // {
      
    //     // Fetch faculties
    //     $faculties = Faculty::all();

    //     return view('/editor_create_event', compact('faculties'));

    // }
    public function data()
    {
      
        $faculties = Faculty::all();
        $societies = Society::all();
        $departments = Department::all();

        return view('Editor/editor_create_event', compact('faculties','societies','departments'));

    }


    public function store(Request $request)
    {
        // Check if there is a logged-in user
        //if ($user = Auth::user()) {
            $validator = $this->validate($request, [
                'post_title' => 'required|string|max:255',
                'desc' => 'required|string',
                
                'ppost' => 'nullable|file',
                'approval' => 'nullable|file',
                
            ]);

            // if ($validator->fails()) {
            //     return redirect()->back()->withErrors($validator)->withInput();
            // }

            // Debugging statement
            //dd($request->all());

            // Access the authenticated user's ID
            //$editorId = $user->Editor_Id; // Assuming the primary key is named 'id'

            // Post::create([
            //     'Editor_Id' =>$request->Editor_Id,
            //     'Title' => $request->post_title,
            //     'Description' => $request->desc,
            //     'media_path' => $request->ppost,
            //     'Approval_Letter' => $request->approval,
            //     'Faculty_Id' => $request->fac_id,
            //     'Society_Id' => $request->soc_id,
            //     'Dep_Id' => $request->dep_id
                
            // ]);

            $post=new Post();
            $post->Editor_Id =$request->Editor_Id;
            $post->Title = $request->post_title;
            $post->Description = $request->desc;
            $post->media_path = $request->ppost;
            $post->Approval_Letter = $request->approval;
            $post->Faculty_Id = $request->fac_id;
            $post->Society_Id = $request->soc_id;
            $post->Dep_Id = $request->dep_id;

            $photo = $request->file('ppost'); // Change this line to get the file from the request

            

            if($photo)
            {
               
                $originalName = $photo->getClientOriginalName();
                $extension = $photo->getClientOriginalExtension();
                $photoname = time() . '.' . $extension;

                $request->ppost->move('uploads', $photoname);
                $post->media_path = $photoname;
                // dd($photoname);
                //$notice->media_path=$photoname;

            }

            $photo1 = $request->file('approval'); // Change this line to get the file from the request

        

            if($photo1)
            {
               
                $originalName = $photo1->getClientOriginalName();
                $extension = $photo1->getClientOriginalExtension();
                $photoname1 = time() . '.' . $extension;

                $request->approval->move('uploads', $photoname1);
                $post->Approval_Letter = $photoname1;
                // dd($photoname);
                

            }
            $post->save();

            return redirect('/editor_create_event')->with('success','Data successfully added!');
        //} else {
            // User is not authenticated, handle accordingly (e.g., redirect to login)
            //return 'error';
    }

    public function showM()
    {
        // Retrieve all polls from the database
        $posts = Post::all();

        // Pass the polls data to the view
        return view('Moderator/moderator_event', compact('posts'));

    
    }
}
