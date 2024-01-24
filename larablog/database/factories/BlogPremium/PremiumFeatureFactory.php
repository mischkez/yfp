<?php

namespace Database\Factories\BlogPremium;

use App\Models\BlogPremium\PremiumFeature;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<PremiumFeature>
 */
class PremiumFeatureFactory extends Factory
{
    protected $model = PremiumFeature::class;

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
