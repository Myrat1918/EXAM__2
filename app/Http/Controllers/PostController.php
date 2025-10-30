<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category; 
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{


    public function index()
    {
        $posts = Post::with('category')->latest()->paginate(15);
        return view('posts.index', compact('posts'));
    }




    public function store(Request $request)
    {
        $request->validate(['title' => 'required', 'content' => 'required', 'category_id' => 'required']);

        $data = $request->all();
        $data['slug'] = Str::slug($request->title);


        Post::create($data);
        return redirect()->route('posts.index')->with('success', 'Täzelik goşuldy!');
    }




    public function update(Request $request, Post $post)
    {
        $request->validate(['title' => 'required', 'content' => 'required', 'category_id' => 'required']);

        $data = $request->all();
        $data['slug'] = Str::slug($request->title);


        $post->update($data);
        return redirect()->route('posts.index')->with('success', 'Täzelik täzelendi!');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Täzelik pozuldy.');
    }
}
