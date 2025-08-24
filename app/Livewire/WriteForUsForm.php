<?php

namespace App\Livewire;

use Livewire\Component;

class WriteForUsForm extends Component
{
    public $name;
    public $email;
    public $message;

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'message' => 'required|min:10',
    ];

    public function submit()
    {
        $this->validate();

        // For now, we'll just flash a success message.
        session()->flash('success', 'Thank you for your message! We will get back to you soon.');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.write-for-us-form');
    }
}