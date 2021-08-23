<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\CommentRequest;

class Comments extends Controller
{
    public function store(CommentRequest $request, $postId)
    {
        dd('oi');
        $comment = app(Comment::class)->create($request->all);
        dd($comment);
    }
}
