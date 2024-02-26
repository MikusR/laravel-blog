<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post
{
    public function find($slug)
    {
        if (!file_exists($path = resource_path("posts/{$slug}.html"))) {
            throw new ModelNotFoundException();
        }
        return cache()->remember("posts.{$slug}", 5, fn() => YamlFrontMatter::parseFile($path));
    }

    public function all()
    {
//        dd(File::files(resource_path('posts')));
        $files = File::files(resource_path('posts'));
        $posts = array_map(fn($file) => YamlFrontMatter::parseFile($file), $files);
        return $posts;
    }
}
