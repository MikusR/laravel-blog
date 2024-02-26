<?php

namespace App\Models;

class Post
{
    public function find($slug)
    {
        if (!file_exists($path = resource_path("posts/{$slug}.html"))) {
            return redirect('/');
        }
        return cache()->remember("posts.{$slug}", 5, fn() => file_get_contents($path));
    }
}
