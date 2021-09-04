<?php

namespace App\Http\Livewire\Posts;

use Livewire\Component;
use App\Models\Post;
use App\Models\User;
use App\Models\Tag;

class Edit extends Component
{
    public $post;
    public $postId;
    public $user;
    public $users;
    public $tag;
    public $tags;

    public function mount($id)
    {
        $this->postId = $id;
        $this->post = Post::find($id);
        $this->user = $this->post->user;
        $this->tag = $this->post->tags;
        $this->users = User::all();
        $this->tags = Tag::all();
    }

    public function render()
    {
        return view('livewire.posts.edit', [
            'post', $this->post,
            'users', $this->users,
            'tags', $this->tags
        ]);
    }
}
