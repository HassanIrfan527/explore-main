<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Author>
 */
class AuthorFactory extends Factory
{
    protected $model = \App\Models\Author::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::factory()->create();
        return [
            "user_id" => $user->id,
            "author_bio" => $this->faker->paragraph,
            "username" => $this->faker->userName,
            "author_website" => $this->faker->url,
            "author_facebook" => $this->faker->url,
            "author_instagram" => $this->faker->url,
            "author_linkedin" => $this->faker->url,
            "author_youtube" => $this->faker->url,
            "author_x" => $this->faker->url,
            "author_telegram" => $this->faker->url,
            "author_discord" => $this->faker->url,
        ];
    }
}
