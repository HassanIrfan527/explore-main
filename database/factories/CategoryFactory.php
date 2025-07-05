<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    protected $model = \App\Models\Category::class;

    protected static $categories = [
    'Fashion','Beauty','Travel','Lifestyle','Personal','Tech','Health','Fitness','Wellness',
    'SaaS','Business','Education','Food & Recipe','Love & Relationships','Green Living',
    'Music','Automotive','Marketing','Internet Services','Personal Finance','Sports',
    'Entertainment','Productivity','Hobbies','Parenting','Pets','Photography','Agriculture',
    'Art','DIY','Science','Gaming','History','Self‑Improvement','News & Current Affairs',
    'Career','Home & Garden','Spirituality','Finance','Movies','Political','Interior Design',
    'Religion','Book Reviews','Gardening','Sustainable Living','Eco-Friendly','Podcasting',
    'Podcasts','Crafts','Entrepreneurship','Remote Work','Mental Health','Mindfulness',
    'Programming','Web Development','AI & Machine Learning','Cybersecurity','Mobile Apps',
    'Gadgets','Software Reviews','SEO','Social Media','E-commerce','Digital Marketing',
    'Startups','Investing','Budget Travel','Luxury Travel','Adventure Travel',
    'Solo Travel','Family Travel','Baking','Vegan Cooking','Keto & Paleo','Juicing',
    'Weight Loss','Yoga','Meditation','Parenting Teens','Parenting Babies','Pet Care',
    'Dog Training','Cat Care','Photography Tips','Travel Photography','Landscape Art',
    'Street Art','Watercolor','Painters','Screenwriting','Film Analysis','Short Films',
    'Indie Games','AAA Games','Board Games','Educational Technology','Homeschooling',
    'Language Learning','Career Advice','Resume Tips','Interview Prep','Workplace Culture',
    'Freelancing','Gig Economy','Remote Tools','Climate Change','Sustainability','Minimalism',
    'Zero Waste','Green Tech','Alternative Energy','Virtual Reality','Augmented Reality',
    'Blockchain','Crypto','NFTs','Fintech','Real Estate'
];
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => $this->faker->randomElement(self::$categories),
        ];
    }
}
