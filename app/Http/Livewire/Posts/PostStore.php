<?php

namespace App\Http\Livewire\Posts;

use Livewire\Component;
use App\Http\Requests\CreatePostRequest;

class PostStore extends Component
{
    public $title;

    protected function rules()
    {
        return [
        'title'=>'required'
    ];
    }
    
    public function render()
    {
        return view('livewire.posts.index');
    }


    public function save()
    {
        dd($this->validate());
        return view('posts')->with('title', $this->title);
    }
}
