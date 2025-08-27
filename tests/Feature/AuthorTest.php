<?php

use App\Models\Author;

test('authors page shows list of authors', function () {
    Author::factory()->count(3)->create();

    $response = $this->get(route('authors'));

    $response->assertOk();
    $response->assertViewIs('authors');
    $response->assertSeeText(Author::first()->name);
    // Optionally, assert all names appear
});
