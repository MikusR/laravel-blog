<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Category::truncate();
        Post::truncate();
        User::factory()->count(3)->create();
        Category::create(['name' => 'Personal', 'slug' => 'personal']);
        Category::create(['name' => 'Laravel', 'slug' => 'laravel']);
        Category::create(['name' => 'Work', 'slug' => 'work']);
        Post::factory(['category_id' => 1, 'user_id' => 1])->count(10)->create();
        Post::factory(['category_id' => 2, 'user_id' => 1])->count(10)->create();
        Post::factory(['category_id' => 3, 'user_id' => 1])->count(10)->create();
        Post::factory(['category_id' => 1, 'user_id' => 2])->count(10)->create();
        Post::factory(['category_id' => 2, 'user_id' => 2])->count(10)->create();
        Post::factory(['category_id' => 3, 'user_id' => 2])->count(10)->create();
        Post::factory(['category_id' => 1, 'user_id' => 3])->count(10)->create();
        Post::factory(['category_id' => 2, 'user_id' => 3])->count(10)->create();
        Post::factory(['category_id' => 3, 'user_id' => 3])->count(10)->create();


    }
}
