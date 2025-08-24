<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.app')]
#[Title('Blogs - Explore | Modern Blogging Platform')]
class BlogsData extends Component
{
    public $blogs;

    public function mount()
    {
        $this->blogs = Blog::with('author.user', 'category')->get();
    }

    public function render()
    {
        return view('livewire.blogs-data');
    }
}