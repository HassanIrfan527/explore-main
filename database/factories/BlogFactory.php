<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $author = \App\Models\Author::factory()->create();
        $title = $this->faker->sentence();
        return [
            'title' => $title,
            'slug'=> \Illuminate\Support\Str::slug($title) . '-' . $this->faker->unique()->numberBetween(1, 1000),
            'content' => $this->faker->paragraphs(3, true),
            'summary' => $this->faker->text(200),
            'author_id' => $author->id,
            'created_at' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'published_at' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'updated_at' => now(),
        ];
    }
}
