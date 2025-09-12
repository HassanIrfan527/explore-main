<?php

use App\Livewire\Authors;
use App\Livewire\Blogs;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/authors', function () {
    return view('authors');
})->name('authors');

Route::get('/authors/{author}', function(\App\Models\Author $author){

    return view('author', compact('author'));
})->name('author.show');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/write-for-us', function () {
    return view('write-for-us');
})->name('write-for-us');

Route::view('blogs', 'blogs')
    ->middleware(['auth', 'verified'])
    ->name('blogs');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__ . '/auth.php';
