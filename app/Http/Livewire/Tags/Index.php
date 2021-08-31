<?php

namespace App\Http\Livewire\Tags;

use Livewire\Component;
use App\Models\Tag;

class Index extends Component
{
    public function render()
    {
        return view('livewire.tags.index' , ['all' => Tag::orderBy('updated_at', 'desc')->orderBy('created_at', 'desc')->get()]);
    }
}
