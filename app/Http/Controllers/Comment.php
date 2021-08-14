<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\CommentRequest;

class Comment extends Controller
{
    public function store(CommentRequest $request, $postId)
    {
        $request->validated();
        $comment = app(Comment::class)->create($request->all);
        dd($comment);
    }
}
