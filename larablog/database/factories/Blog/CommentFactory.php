<?php

namespace Database\Factories\Blog;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\Blog\User;
use \App\Models\Blog\Post;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog\Comment>
 */
class CommentFactory extends Factory
{
    protected $model = \App\Models\Blog\Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'post_id' => Post::all()->random()->id,
            'author_id' => User::all()->random()->id,
            'content' => $this->faker->paragraph,
        ];
    }
}
