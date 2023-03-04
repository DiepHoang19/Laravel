<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Posts;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function postComment(Request $request)
    {

        $request->validate([
            'body' => 'required',
        ]);

        $comments = Comment::create([
            'post_id' => $request->post_id,
            'body' => $request->body,
        ]);
        return back();
    }
}
