<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PremiumFeature>
 */
class PremiumFeatureFactory extends Factory
{
    protected $model = \App\Models\PremiumFeature::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->word,
            'price' => $this->faker->numberBetween(10, 100),
            'description' => $this->faker->paragraph,
        ];
    }
}
