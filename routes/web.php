<?php

use App\Models\Category;
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
//    dd(Post::all());
    return view('posts', ['posts' => Post::all()]);
});
//modelī var definēt
//public function getRouteKeyName()
//{
//    return 'slug';
//}
Route::get('/posts/{post:slug}', function (Post $post) {
//    dd($post);
    return view('post', ['post' => $post]);


});
Route::get('/categories/{category}', function (Category $category) {
//    dd($category->posts);
    return view('category', ['category' => $category, 'posts' => $category->posts]);
});
