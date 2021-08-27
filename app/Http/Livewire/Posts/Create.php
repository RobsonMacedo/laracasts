<?php

namespace App\Http\Livewire\Posts;

use Livewire\Component;
use App\Models\Post;
use App\Models\User;
use App\Models\Tag;
use Illuminate\Http\Request;

class Create extends Component
{
    public $posts;
    public $post;
    public $users;
    public $tags;
    public $title;
    public $slug;
    public $body;
    public $user_id;
    public $tag_id;

    public function render()
    {
        //dd('oi');
        $this->users = app(User::class)->all();
        $this->tags = app(Tag::class)->all();
        return view('livewire.posts.create');
    }
    

    public function save()
    {
        $this->validate([
            'title' =>'required',
            'slug' =>'required',
            'body' =>'required',
            'user_id' =>'required',
            'tag_id' =>'required',

        ]);

        $post = app(Post::class);
        $post->fill([
            'slug' => $this->slug,
            'body' => $this->body,
            'title' =>$this->title,
            'user_id' =>$this->user_id,
            ]);
        $post->save();
        $post->tags()->attach($this->tag_id);

        
        return redirect()->route('posts', ['tags'=>$post->tag_id]);
        return back()->with('success_message', 'We recieved your message!');
        

        //return redirect()->route('store-posts');
    }
}
