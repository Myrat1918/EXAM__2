<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
      public function index(Request $request) {

        $users = User::get();
        $categories = Category::get();
        $posts = Post::get();

        $request->validate([
            'q' => ['nullable', 'string'],
            'categoryId' => ['nullable', "integer", "min:1"],
            'user' => ['nullable', "string", ],
        ]);

        $f_q = $request->q ? $request->q : null;
        $f_category = $request->categoryId ? $request->categoryId : null;
        $f_title = $request->title ? $request->title : null;
        $f_user = $request->user ? $request->user : null;
        $f_description = $request->description ? $request->description : null;



        $titles = Post::when(isset($f_q), function ($query) use ($f_q) {
            return $query->where(function ($query) use ($f_q) {
                $query->where('title', 'like', '%' . $f_q . '%');
            })

            ->orWhereHas('user', function ($query) use ($f_q) {
                return $query->where('username', 'like', '%' . $f_q . '%');
                });
        })

        ->when($f_title, function ($query) use ($f_title) {
                return $query->where('title', $f_title);

            })
        ->when($f_description, function ($query) use ($f_description) {
                return $query->where('title', $f_description);

            })
        ->when( $f_category, function ($query) use ($f_category) {
                return $query->where('category_id', $f_category);
            })
        ->orderBy('created_at', 'desc')
        ->paginate(20);

        return view('posts.index', [
            'users' => $users,
            'categories' => $categories,
            'posts' => $posts,
            'f_description' => $f_description,
            'f_user' => $f_user,
            'f_q' => $f_q,
            'f_category' => $f_category,
            'titles' => $titles
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required'
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        Post::create($data);

        return redirect()->route('posts.index')->with([
            'success' => 'Täzelik goşuldy!'
        ]);
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required'
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        $post->update($data);

        return redirect()->route('posts.index')->with([
            'success' => 'Täzelik täzelendi!'
        ]);
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')->with([
            'success' => 'Täzelik pozuldy.'
        ]);
    }
}
