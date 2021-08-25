<?php

namespace App\Http\Livewire\Posts;

use Livewire\Component;
use App\Models\Post;

class Index extends Component
{
    public $posts;
    public $term = '';

    public $rules = [
        
    ];
    

    public function render()
    {
        $this->posts = Post::where('title', 'ilike', '%'. $this->term. '%')
                        ->orderBy('updated_at', 'desc')
                        ->orderBy('created_at', 'desc')
                        ->get();
        return view('livewire.posts.index');
    }
}
