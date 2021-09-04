<?php

namespace App\Http\Livewire\Posts;

use Livewire\Component;
use App\Models\Post;

class Index extends Component
{
    public $posts;
    public $search ='';

    protected $queryString = ['search'];
    
    protected $listeners = ['searchField' => 'searchPost'];


    public function searchPost($array)
    {
        $this->search = $array['search'];
    }

    public function filter()
    {
        $this->posts = Post::where('title', 'like', '%'. $this->search. '%')
                        ->orderBy('updated_at', 'desc')
                        ->orderBy('created_at', 'desc')
                        ->get();
    }


    public function render()
    {
        $this->filter();
        return view('livewire.posts.index');
    }
}
