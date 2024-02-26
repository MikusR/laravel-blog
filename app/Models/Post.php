<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
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

    }

    public function findOrFail($slug)
    {
        $post = Post::find($slug);
        if ($post === null) {
            throw new ModelNotFoundException();
        }
        return $post;
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
