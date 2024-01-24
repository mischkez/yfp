<?php

namespace Database\Factories\BlogPremium;

use App\Models\BlogPremium\Order;
use App\Models\BlogPremium\OrderItem;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<Order>
 */
class OrderItemFactory extends Factory
{
    protected $model = OrderItem::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'feature_id' => \App\Models\BlogPremium\PremiumFeature::all()->random()->id,
            'quantity' => $this->faker->numberBetween(1, 3),
        ];
    }
}
