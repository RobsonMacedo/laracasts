<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $message;
    
    public function render()
    {
        return view('livewire.contact-form');
    }


    public function save()
    {
        $this->validate([
        'name' =>'required',
        'email' =>'required|email',
        'message' =>'required'
    ]);
        return back()->with('success_message', 'We recieved your message!');
    }
}
