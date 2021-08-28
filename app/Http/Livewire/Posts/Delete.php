<?php

namespace App\Http\Livewire\Posts;

use Livewire\Component;
use App\Models\Post;

class Delete extends Component
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
        return view('livewire.posts.delete');
    }
}
