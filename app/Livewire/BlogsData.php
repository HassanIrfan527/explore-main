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
    public $searchKey = '';

    public function search()
    {
        $ttl = 600;
        $key = $this->searchKey;
        $this->blogs = Cache::remember('blogs.search.' . md5($key), $ttl, function () use ($key) {
            return Blog::with('author.user')
                ->where('title', 'like', '%' . $key . '%')
                ->orWhere('content', 'like', '%' . $key . '%')
                ->orWhereHas('author.user', function ($query) use ($key) {
                    $query->where('name', 'like', '%' . $key . '%');
                })
                ->orderBy('created_at', 'desc')
                ->get();
        });
    }

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
