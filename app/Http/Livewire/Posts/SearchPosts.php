<?php

namespace App\Http\Livewire\Posts;

use Livewire\Component;
use App\Models\Post;

class SearchPosts extends Component
{
    public $name;
    public $search;
    public $posts;
    
    protected $queryString = ['search'];

    public function searchPost()
    {
        $this->emit('search-post', ['posts' => Post::where('title', 'like', '%'.$this->search.'%')->get()]);
    }

    public function render()
    {
        return view('livewire.posts.search-posts');
    }
}
