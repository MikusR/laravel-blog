<?php

use App\Models\Category;

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('posts', ['posts' => Post::latest()->get()]);
});
Route::get('/testWithout', function () {
    return view('posts', ['posts' => Post::latest()->without(['author', 'category'])->get()]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', ['post' => $post]);
})->name('post');
Route::get('/author/{author:username}', function (User $author) {
    return view('author', ['author' => $author, 'posts' => $author->posts]);
})->name('author');
Route::get('/categories/{category}', function (Category $category) {
    return view('category', ['category' => $category, 'posts' => $category->posts]);
});
Route::get('/categories', function () {
    return view('categories', ['categories' => Category::with('posts')->get()]);
});
