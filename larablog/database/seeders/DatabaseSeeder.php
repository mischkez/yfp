<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Category;
use \App\Models\Tag;
use \App\Models\Post;
use \App\Models\Comment;
use \App\Models\PremiumFeature;

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
