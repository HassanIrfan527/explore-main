<?php

use App\Models\Blog;


test('Blogs page shows list of blogs and author\'s name', function () {

    Blog::factory()->count(3)->create();

    loginUser();

    $response = $this->get(route('blogs'));

    $response->assertOk();
    $response->assertViewIs('blogs');
    $response->assertSeeText(Blog::first()->title);
    $response->assertSeeText(Blog::first()->author->name);
    $response->assertStatus(200);
});
