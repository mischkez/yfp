<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    protected $model = \App\Models\Post::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'author_id' => UserFactory::new(),
            'category_id' => CategoryFactory::new(),
            'title' => $this->faker->sentence,
            'slug' => $this->faker->unique()->slug,
            'content' => $this->faker->paragraphs(5, true),
            'is_active' => true,
        ];
    }
}
