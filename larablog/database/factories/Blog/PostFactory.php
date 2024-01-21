<?php

namespace Database\Factories\Blog;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\Blog\User;
use \App\Models\Blog\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog\Post>
 */
class PostFactory extends Factory
{
    protected $model = \App\Models\Blog\Post::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'author_id' =>  User::all()->random()->id,
            'category_id' => Category::all()->random()->id,
            'title' => $this->faker->sentence,
            'slug' => $this->faker->unique()->slug,
            'content' => $this->faker->paragraphs(5, true),
            'is_active' => true,
        ];
    }
}
