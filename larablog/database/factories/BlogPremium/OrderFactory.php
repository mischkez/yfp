<?php

namespace Database\Factories\BlogPremium;

use Illuminate\Database\Eloquent\Factories\Factory;
use Database\Factories\Blog\UserFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BlogPremium\Order>
 */
class OrderFactory extends Factory
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
            'user_id' => UserFactory::new(),
            'total' => $this->faker->randomFloat(2, 0, 1000),
            'is_paid' => $this->faker->boolean,
        ];
    }
}
