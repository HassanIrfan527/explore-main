<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title"=> $this->faker->sentence,
            "content"=> $this->faker->paragraph,
            "slug"=> $this->faker->unique()->slug,
            "image"=> $this->faker->imageUrl(640, 480, 'posts', true),
            "category_id"=> \App\Models\Category::inRandomOrder()->first()->id,
            "user_id"=> 1,
            "published_at"=> $this->faker->dateTime(),
        ];
    }
}
