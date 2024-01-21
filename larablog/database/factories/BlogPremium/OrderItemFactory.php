<?php

namespace Database\Factories\BlogPremium;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BlogPremium\Order>
 */
class OrderItemFactory extends Factory
{
    protected $model = \App\Models\BlogPremium\Order::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_id' => OrderFactory::new(),
            'feature_id' => PremiumFeatureFactory::new(),
            'quantity' => $this->faker->numberBetween(1, 3),
        ];
    }
}
