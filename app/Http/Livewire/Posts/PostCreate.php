<?php

namespace App\Http\Livewire\Posts;

use Livewire\Component;
use App\Models\Post;
use App\Models\User;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostCreate extends Component
{
    public $posts;
    public $users;
    public $tags;
    public $title;

    public function render()
    {
        $this->users = app(User::class)->all();
        $this->tags = app(Tag::class)->all();
        return view('livewire.posts.post-create');
    }

    public function save()
    {
        dd('ola');
        $this->validate([
            'title' =>'required'
        ]);
        return redirect()->route('store-posts')->with('title', $this->title);
    }
}
