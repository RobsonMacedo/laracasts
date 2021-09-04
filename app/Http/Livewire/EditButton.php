<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\User;
use App\Models\Tag;

class EditButton extends Component
{
    public $post;
    public $postId;
    public $users;
    public $tags;

    public function edit($id)
    {
        //dd($id);
        $this->users =  User::all();
        $this->tag =  Tag::all();
        $this->postId = $id;
        $this->post = Post::find($id);
        return redirect()->route('edit-posts', ['id' => $this->postId]);
    }


    public function render()
    {
        return view('livewire.edit-button');
    }
}
