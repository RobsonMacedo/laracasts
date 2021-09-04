<?php

namespace App\Http\Livewire\Posts;

use Livewire\Component;
use App\Models\Comment;

class Comments extends Component
{
    public $comments = array();
    public $comment;
    public $postId;
    public $post;

    public function mount($post)
    {
        $this->post = $post;
        $this->comments = Comment::where('post_id', $post->id)->get();
        $this->fillField();
    }

    public function fillField()
    {
        $this->comment ?? old('comment');
    }

    public function sendComment()
    {
        $comment = app(Comment::class);
        //$post = app(Comment::class);
    
        $comment->fill([
            'text'=> $this->comment,
            'post_id'=>$this->post->id,
            'user_id'=>$this->post->user_id
        ]);
        $comment->save();
        $this->emitTo('show', 'refresh');
        $this->reset();
    }

    public function render()
    {
        //dump($this->comment);
        //dump($this->comments);
        return view('livewire.posts.comments');
    }
}
