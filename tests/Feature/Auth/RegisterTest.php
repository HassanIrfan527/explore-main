<?php

use App\Models\User;
use Livewire\Livewire;
use App\Livewire\Auth\Register;
use Illuminate\Support\Facades\Hash;

it('allows a user to register with valid credentials', function () {
    Livewire::test(Register::class)
        ->set('name', 'Test User')
        ->set('email', 'user@example.com')
        ->set('password', 'secret123')
        ->set('password_confirmation', 'secret123')
        ->call('register')
        ->assertRedirect(route('blogs'));

    $user = User::where('email', 'user@example.com')->first();
    expect($user)->not->toBeNull();
    $this->assertAuthenticatedAs($user);
});

it('does not allow registration with an existing email', function () {
    User::factory()->create(['email' => 'user@example.com']);

    Livewire::test(Register::class)
        ->set('name', 'Test User')
        ->set('email', 'user@example.com')
        ->set('password', 'secret123')
        ->set('password_confirmation', 'secret123')
        ->call('register')
        ->assertHasErrors(['email' => 'unique']);
});

it('requires all fields to be present', function () {
    Livewire::test(Register::class)
        ->set('name', '')
        ->set('email', '')
        ->set('password', '')
        ->set('password_confirmation', '')
        ->call('register')
        ->assertHasErrors(['name', 'email', 'password']);
});

it('requires password confirmation to match', function () {
    Livewire::test(Register::class)
        ->set('name', 'Test User')
        ->set('email', 'user2@example.com')
        ->set('password', 'secret123')
        ->set('password_confirmation', 'different123')
        ->call('register')
        ->assertHasErrors(['password' => 'confirmed']);
});

it('requires a valid email address', function () {
    Livewire::test(Register::class)
        ->set('name', 'Test User')
        ->set('email', 'not-an-email')
        ->set('password', 'secret123')
        ->set('password_confirmation', 'secret123')
        ->call('register')
        ->assertHasErrors(['email' => 'email']);
});

it('stores the password as a hash', function () {
    Livewire::test(Register::class)
        ->set('name', 'Test User')
        ->set('email', 'hash@example.com')
        ->set('password', 'secret123')
        ->set('password_confirmation', 'secret123')
        ->call('register');

    $user = User::where('email', 'hash@example.com')->first();
    expect($user)->not->toBeNull();
    expect(Hash::check('secret123', $user->password))->toBeTrue();
});
