<?php

namespace Database\Factories\BlogPremium;

use App\Models\Blog\Post;
use App\Models\Blog\User;
use App\Models\BlogPremium\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<Order>
 */
class OrderFactory extends Factory
{
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::all()->random()->id,
            'post_id' => Post::all()->random()->id,
            'total_price' => $this->faker->randomFloat(2, 0, 100),
            'status' => $this->faker->randomElement([0, 1, 2, 3]),
            'payment_method' => $this->faker->randomElement(['paypal', 'stripe', 'credit_card']),
        ];
    }
}
