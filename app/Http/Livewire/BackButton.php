<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BackButton extends Component
{
    public function returnHome()
    {
        return redirect()->route('posts');
    }

    public function render()
    {
        return view('livewire.back-button');
    }
}
