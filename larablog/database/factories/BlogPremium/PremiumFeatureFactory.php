<?php

namespace Database\Factories\BlogPremium;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BlogPremium\PremiumFeature>
 */
class PremiumFeatureFactory extends Factory
{
    protected $model = \App\Models\BlogPremium\PremiumFeature::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->word,
            'price' => $this->faker->numberBetween(10, 99),
            'description' => $this->faker->paragraph,
        ];
    }
}
