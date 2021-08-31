<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class DeleteButton extends Component
{
    public $post;
    public $postId;

    /* public function mount($id)
    {
        $this->post = app(Post::class)->find($id);
    } */

    public function delete($id)
    {
        $this->post = Post::find($id);
        $this->post->delete();
        
        return redirect()->route('posts');
    }
 
    public function render()
    {
        return view('livewire.delete-button');
    }
}
