<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
{
    Post::create([
        'title'     => $request->input('title'),
        'slug'      => Str::slug($request->input('slug')),
        'contrent'   => $request->input('contrent')
    ]);

    return redirect(route('posts.index'));
}
public function edit(Request $request, Post $post)
{
    return view('posts.edit', compact('post'));
}

public function update(Request $request, Post $post)
{
    $post = Post::whereId($post->id)->update([
        'title'     => $request->input('title'),
        'slug'      => Str::slug($request->input('title')),
        'contrent'   => $request->input('contrent')
    ]);


    return redirect(route('posts.index'));

    
}
public function destroy($id)
{
    $post = Post::find($id);
    $post->delete();

    return redirect(route('posts.index'));
}
}
