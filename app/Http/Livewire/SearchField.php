<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class SearchField extends Component
{
    public $search;

    protected $queryString = ['search'];
    
    public function updatedSearch() /* Pega qualquer mudança que acontecer no componente */
    {
        
        $this->emit('searchField', ['search' => $this->search]); 
    }


    public function render()
    {
        sleep(1);
        return view('livewire.search-field', [
            'posts' => Post::where('title', 'like', '%'.$this->search.'%')->get(),
        ]);
    }
}
