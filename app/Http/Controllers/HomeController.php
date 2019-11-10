<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getPosts()
    {
        return Post::with('all_comments')->get();
    }

    public function getPostById($id)
    {
        $post = Post::with('all_comments')->findOrFail($id);
        $post->increment('views');
        return $post;
    }

    public function addComment(Request $request)
    {
         $comment = Comment::create($request->all());
         return $comment;
    }
}
