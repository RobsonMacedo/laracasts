<?php

namespace App\Http\Livewire\Posts;

use Livewire\Component;
use App\Models\User;
use App\Models\Tag;
use App\Models\Post;

class Show extends Component
{
    public $users;
    public $tags;
    public $post;
    public $postId;
    
    public function mount($id)
    {
        $this->postId = $id;
        $this->post = Post::find($id);
    }

    public function update()
    {
        dd('oi');
        return view('posts.edit');
    }

    public function delete()
    {
        return redirect()->route('delete-posts');
    }

    public function render()
    {
        $this->users = app(User::class)->all();
        $this->tags = app(Tag::class)->all();
        
        return view('livewire.posts.show');
    }
}
