<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Blog\User;
use \App\Models\Blog\Category;
use \App\Models\Blog\Tag;
use \App\Models\Blog\Post;
use \App\Models\Blog\Comment;
use App\Models\BlogPremium\Order;
use App\Models\BlogPremium\OrderItem;
use \App\Models\BlogPremium\PremiumFeature;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::create([
            'name' => 'John Doe',
            'email' => 'example@test.com',
            'password' => Hash::make('password'),
        ]);

        Category::factory(10)->create();
        Tag::factory(10)->create();

        Post::factory(500)->create()->each(function (Post $post) {
            $post->tags()->attach(Tag::all()->random(3));
            $post->comments()->saveMany(Comment::factory(5)->make());
        });

        Comment::factory(500)->create();
        PremiumFeature::factory(10)->create();

        Order::factory(50)->create()->each(function (Order $order) {
            $order->items()->saveMany(OrderItem::factory(5)->make());
        });
    }
}
