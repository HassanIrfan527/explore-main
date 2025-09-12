<?php

namespace App\Livewire;
// use App\Livewire\Layout;

use Illuminate\Support\Facades\Cache;
use Livewire\Component;


class AuthorsData extends Component
{
    public $authors;

    public function mount()
    {
        // Eager loading authors with their user data
        // This will fetch all authors and their associated user data in one query
        // This is more efficient than lazy loading, especially if you need to display user data for each author

        $this->authors = Cache::remember('authors.data', 600, function () {
            return \App\Models\Author::with('user')->get();
        });
    }
    public function render()
    {
        return view('livewire.authors-data');
    }
}
