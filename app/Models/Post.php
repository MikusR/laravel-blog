<?php

namespace App\Models;

use http\Message\Body;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post
{
    public string $title;
    public string $desc;
    public string $body;

    public function __construct(string $title, ?string $desc = '', ?string $body = '')
    {
        $this->title = $title;
        $this->desc = $desc;
        $this->body = $body;
    }

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
//        $posts = array_map(fn($file) => YamlFrontMatter::parseFile($file), $files);
        $posts = [];
        foreach ($files as $file) {
            $parsed = YamlFrontMatter::parseFile($file);
            $posts[] = new Post($parsed->title, $parsed->desc, $parsed->body());
        }
        return $posts;
    }


}
