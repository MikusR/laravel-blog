<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post
{
    public string $title;
    public string $body;
    public string $author;
    public string $date;
    public string $excerpt;
    public string $slug;

    public function __construct(string $title, string $author, string $date, string $excerpt, string $slug, string $body)
    {

        $this->title = $title;
        $this->author = $author;
        $this->date = $date;
        $this->excerpt = $excerpt;
        $this->slug = $slug;
        $this->body = $body;
    }

    public function find($slug)
    {
        return Post::all()->firstWhere('slug', $slug);
//        if (!file_exists($path = resource_path("posts/{$slug}.html"))) {
//            throw new ModelNotFoundException();
//        }
//        return cache()->remember("posts.{$slug}", 5, fn() => YamlFrontMatter::parseFile($path));
    }

    public function all()
    {
        return cache()->rememberForever('posts.all', function () {
            return collect(File::files(resource_path('posts')))
                ->map(fn($file) => YamlFrontMatter::parseFile($file))
                ->map(fn($parsed) => new Post(
                    $parsed->title,
                    $parsed->author,
                    $parsed->date,
                    $parsed->excerpt,
                    $parsed->slug,
                    $parsed->body()))
                ->sortByDesc('date');
        });
    }


}
