<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\User;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Requests\CreatePostRequest;

class Posts extends Controller
{
    /* public function validatePost($request)
    {
        $request->validate([
            'title'=> 'required',
            'slug'=> 'required',
            'body'=> 'required',
        ]);
    } */

    public function index()
    {
        return view('posts.index', ['all' => Post::orderBy('updated_at', 'desc')->orderBy('created_at', 'desc')->get()]);
    }

    public function show($id)
    {
        $post = Post::find($id);
        $user = User::find($post->user_id);
        $tag = Tag::find($post->tag_id);
        return view('posts.show', [
            'post' => $post,
            'user' => $user,
            'tags' => $tag
            ]);
    }
    public function create()
    {
        $users = app(User::class)->all();
        $tags = app(Tag::class)->all();
        return view('posts.create', ['users'=>$users, 'tags' =>$tags]);
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit', ['post' => $post]);
    }

    public function store(CreatePostRequest $request)
    {
        $request->validated();
        //dd($request->all());
        app(Post::class)->create($request->all());
        return redirect()->route('posts') ;
    }

    public function update(CreatePostRequest $request, $id)
    {
        dd($request->all());
        $request->validated();
        

        app(Post::class)->find($id)->update($request->all());
        return redirect()->route('posts') ;
    }

    public function delete(Request $request, $id)
    {
        app(Post::class)->find($id)->delete($request->all());
        return redirect()->route('posts') ;
    }
}
