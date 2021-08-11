<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Requests\CreateTagRequest;

class Tags extends Controller
{
    public function index()
    {
        return view('tags.index', ['all' => Tag::orderBy('updated_at', 'desc')->orderBy('created_at', 'desc')->get()]);
    }


    public function create()
    {
        return view('tags.create');
    }


    public function store(CreateTagRequest $request)
    {
        $request->validated();
        //dd($request->all());
        app(Tag::class)->create($request->all());
        return redirect()->route('tags') ;
    }

    public function show($id)
    {
        $tag = app(Tag::class)->find($id);
        return view('tags.show', ['tag' => $tag]);
    }
    /* public function show($id)
    {
        $post = Post::find($id);
        $userName = User::find($post->user_id);
        return view('posts.show', [
            'post' => $post,
            'user_name' => $userName->name ?? '']);
    }


    public function edit($id)
    {
        $post = Post::find($id);

        return view('posts.edit', ['post' => $post]);
    }



    public function update(Request $request, $id)
    {
        $this->validatePost();

        app(Post::class)->find($id)->update($request->all());
        return redirect()->route('posts') ;
    }

    public function delete(Request $request, $id)
    {
        app(Post::class)->find($id)->delete($request->all());
        return redirect()->route('posts') ;
    } */
}
