<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\User;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Requests\CreatePostRequest;
use Carbon\Carbon;

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
        $users = app(User::class)->all();
        $tags = app(Tag::class)->all();
        $post = Post::find($id);
        return view('posts.show', [
            'post' => $post,
            'users' => $users,
            'tags' => $tags
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
        $users = app(User::class)->all();
        $tags = app(Tag::class)->all();
        $post = Post::find($id);
        return view('posts.edit', [
            'post' => $post,
            'users' => $users,
            'tags' => $tags
        ]);
    }

    public function store(CreatePostRequest $request)
    {
        $post = new Post($request->validated());
        //dd($request->all());
        $post->fill([
            'slug' => $request->slug,
            'body' => $request->body,
            'title' =>$request->title,
            'user_id' =>$request->user_id,
            ]);
        $post->save();
        $post->tags()->attach($request->tag_id);
        
        return redirect()->route('posts', ['tags'=>$request->tag_id]) ;
    }

    public function update(CreatePostRequest $request, $id)
    {
        $request->validated();
        $post = app(Post::class)->find($id);
        
        $post->update([
            'slug' => $request->slug,
            'body' => $request->body,
            'title' =>$request->title,
            'user_id' =>$request->user_id,
            ]);
        $post->tags()->sync($request->tag_id);
        $post->save();
        
        return redirect()->route('posts') ;
    }

    public function delete(Request $request, $id)
    {
        app(Post::class)->find($id)->delete($request->all());
        return redirect()->route('posts') ;
    }
}
