<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Blog\User;
use \App\Models\Blog\Category;
use \App\Models\Blog\Tag;
use \App\Models\Blog\Post;
use \App\Models\Blog\Comment;
use \App\Models\BlogPremium\PremiumFeature;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Category::factory(10)->create();
        Tag::factory(10)->create();
        Post::factory(500)->create();
        Comment::factory(500)->create();
        PremiumFeature::factory(10)->create();
    }
}
