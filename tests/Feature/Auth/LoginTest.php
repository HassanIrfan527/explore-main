<?php

use App\Models\User;
use Livewire\Livewire;
use App\Livewire\Auth\Login;

it('allows a user to log in with valid credentials', function () {
    $user = User::factory()->create([
        'email' => 'user@example.com',
        'password' => bcrypt('secret123'),
    ]);

    Livewire::test(Login::class)
        ->set('email', 'user@example.com')
        ->set('password', 'secret123')
        ->call('login')
        ->assertRedirect(route('blogs'));

    $this->assertAuthenticatedAs($user);
});
