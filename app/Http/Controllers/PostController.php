<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\author;
class PostController extends Controller
{
    public function List(Request $request){
        $posts = post::paginate(3);
        foreach ($posts as $post) {

            $authorId = $post['author'];

            $author= author::findOrFail($authorId);
            $authorName = $author['name'];
            
            $post['author'] = $authorName;

        }
        
        return view("listPost",[ 
            'post' => $posts
        ]);
    }

    public function Create(Request $request){
        $validatedData = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'publicity' => 'nullable|boolean',
        ]);
    
        $user = Auth::user();
    
        $post = new Post();
        $post->title = $validatedData['title'];
        $post->body = $validatedData['body'];
        $post->advertisement = $request->has('advertisement');
        $post->user_id = $user->id;
        $post->save();
    
        return redirect('/posts')->with('success', 'El post se ha creado correctamente');
    }


    public function index()
    {
        return view('post.index');
    }
}
