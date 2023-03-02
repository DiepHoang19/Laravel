<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    public function index()
    {
        $posts = Posts::all();
        return view('admin.post.index', [
            'posts' => $posts
        ]);
    }

    public function create()
    {
        return view('admin.post.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'thumbnail' => 'required'
        ]);


        $thumbnail = time() . '.' . $request->file('thumbnail')->extension();
        $path = $request->file('thumbnail')->move(public_path('thumbnails'), $thumbnail);
        $photo = new Photo();
        $photo->name = $thumbnail;
        $photo->path = 'thumbnails/' . $thumbnail;
        $photo->save();

        $post = Posts::create([
            'title' => $request->title,
            'content' => $request->content,
            'thumbnail' => $photo->path,
        ]);

        return redirect()->route('post.index');
    }

    public function edit($id)
    {
        $post = Posts::findOrFail($id);
        return view('admin.post.edit', [
            'post' => $post
        ]);
    }
    public function update($id, Request $request)
    {
        $post = Posts::findOrFail($id);


        if ($request->file('thumbnail')) {
            if ($post->thumbnail) {
                File::delete(public_path($post->thumbnail));
            }
            $thumbnail = time() . '.' . $request->file('thumbnail')->extension();
            $path = $request->file('thumbnail')->move(public_path('thumbnails'), $thumbnail);
            $post->update([
                'thumbnail' => 'thumbnails/' . $thumbnail,
            ]);
        }


        $post->update([
            'title' => $request->title,
            'content' => $request->content,

        ]);
        return redirect()->route('post.index');
    }

    public function trash($id)
    {
        $post = Posts::findOrFail($id)->delete();
        if ($post->thumbnail) {
            File::delete(public_path($post->thumbnail));
        }
        return back();
    }
}
