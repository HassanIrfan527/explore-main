<?php

namespace App\Livewire;

use App\Models\Blog;
use Illuminate\Support\Facades\Cache;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.app')]
#[Title('Blogs - Explore | Modern Blogging Platform')]
class BlogsData extends Component
{
    public $blogs;
    public $search = '';

    public function mount()
    {
        $ttl = 600;
        $this->blogs = Cache::remember('blogs.all', $ttl, function () {
            return Blog::with('author.user')->orderBy('created_at', 'desc')->get();
        });

    }
    public function render()
    {
        return view('livewire.blogs-data');
    }
}
