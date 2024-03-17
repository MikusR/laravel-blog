<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition($user_id = null, $category = null)
    {
        $body = str_repeat("<p class=\"mb-4\">" . $this->faker->paragraph(10) . "</p>", 3);
        return [
            'title' => $this->faker->sentence(),
            'body' => $body,
            'user_id' => $user_id,
            'category_id' => $category,
            'slug' => $this->faker->slug(),
            'excerpt' => Str::limit($body, 150),

        ];
    }
}
