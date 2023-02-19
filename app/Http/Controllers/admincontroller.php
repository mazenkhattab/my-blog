<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;

use Illuminate\Http\Request;

class admincontroller extends Controller
{
    
    public function index()
    {
        
        $posts = Post::all();
    
        return view('posts.index', compact('posts'));
    }
        
    
        public function create()
        {
            return view('posts.create');
        }
        
        public function store(Request $request)
        {
            $request->validate([
                'title' => 'required',
                'content' => 'required',
            ]);
        
            $post = new Post();
            $post->title = $request->title;
            $post->content = $request->content;
            $post->user_id = auth()->user()->id;
            $post->save();
        
            return redirect()->route('posts.index');
        }
        
        public function show(Post $post)
        {
            return view('posts.show', compact('post'));
        }
        
        public function edit(Post $post)
        {
            return view('posts.edit', compact('post'));
        }
        
        public function update(Request $request, Post $post)
        {
           
        
            $request->validate([
                'title' => 'required',
                'content' => 'required',
            ]);
        
            $post->title = $request->title;
            $post->content = $request->content;
            $post->save();
        
            return redirect()->route('posts.index');
        }
        
        public function destroy(Post $post)
        {
            
        
            $post->delete();
        
            return redirect()->route('posts.index');
        }
}
