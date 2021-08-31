<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class EditButton extends Component
{
    public $post;

    public function edit($post)
    {
        //dd('oi');/* parei aqui */
        dd($post->id);
        return redirect()->route('edit-posts', ['id'=>$this->post->id]);
    }


    public function render()
    {
        return view('livewire.edit-button');
    }
}
